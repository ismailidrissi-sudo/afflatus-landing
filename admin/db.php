<?php
// ══════════════════════════════════════════════════════════════
// FLAT-FILE DATABASE — JSON-BASED STORAGE
// No extensions needed. Works with any PHP installation.
// ══════════════════════════════════════════════════════════════

class FlatDB {
    private $data_dir;

    public function __construct() {
        $this->data_dir = __DIR__ . '/../data';
        if (!is_dir($this->data_dir)) {
            mkdir($this->data_dir, 0755, true);
            file_put_contents($this->data_dir . '/.htaccess', "Deny from all\n");
        }
    }

    // ── LEADS ──

    public function addLead(array $lead): int {
        $leads = $this->readFile('leads.json');
        $lead['id'] = count($leads) > 0 ? max(array_column($leads, 'id')) + 1 : 1;
        $lead['created_at'] = date('Y-m-d H:i:s');
        $leads[] = $lead;
        $this->writeFile('leads.json', $leads);
        return $lead['id'];
    }

    public function getLeads(?string $source = null, ?string $search = null, ?string $date_from = null, ?string $date_to = null): array {
        $leads = $this->readFile('leads.json');

        // Filter by source
        if ($source) {
            $leads = array_filter($leads, fn($l) => ($l['source'] ?? '') === $source);
        }

        // Filter by search
        if ($search) {
            $s = mb_strtolower($search);
            $leads = array_filter($leads, function($l) use ($s) {
                return str_contains(mb_strtolower($l['nom'] ?? ''), $s)
                    || str_contains(mb_strtolower($l['entreprise'] ?? ''), $s)
                    || str_contains(mb_strtolower($l['whatsapp'] ?? ''), $s);
            });
        }

        // Filter by dates
        if ($date_from) {
            $leads = array_filter($leads, fn($l) => ($l['created_at'] ?? '') >= $date_from . ' 00:00:00');
        }
        if ($date_to) {
            $leads = array_filter($leads, fn($l) => ($l['created_at'] ?? '') <= $date_to . ' 23:59:59');
        }

        // Sort newest first
        usort($leads, fn($a, $b) => ($b['created_at'] ?? '') <=> ($a['created_at'] ?? ''));

        return array_values($leads);
    }

    public function getLeadsByPages(array $allowed_pages, ?string $source = null, ?string $search = null, ?string $date_from = null, ?string $date_to = null): array {
        $leads = $this->getLeads($source, $search, $date_from, $date_to);
        return array_values(array_filter($leads, fn($l) => in_array($l['source'] ?? '', $allowed_pages)));
    }

    public function countLeadsBySource(string $source): int {
        $leads = $this->readFile('leads.json');
        return count(array_filter($leads, fn($l) => ($l['source'] ?? '') === $source));
    }

    // ── USERS ──

    public function getUsers(): array {
        return $this->readFile('users.json');
    }

    public function getUserByUsername(string $username): ?array {
        $users = $this->getUsers();
        foreach ($users as $u) {
            if ($u['username'] === $username && ($u['is_active'] ?? true)) return $u;
        }
        return null;
    }

    public function getUserById(int $id): ?array {
        $users = $this->getUsers();
        foreach ($users as $u) {
            if ($u['id'] === $id) return $u;
        }
        return null;
    }

    public function addUser(array $user): int {
        $users = $this->readFile('users.json');

        // Check unique username
        foreach ($users as $u) {
            if ($u['username'] === $user['username']) {
                throw new Exception("Ce nom d'utilisateur existe déjà.");
            }
        }

        $user['id'] = count($users) > 0 ? max(array_column($users, 'id')) + 1 : 1;
        $user['created_at'] = date('Y-m-d H:i:s');
        $user['last_login'] = null;
        $users[] = $user;
        $this->writeFile('users.json', $users);
        return $user['id'];
    }

    public function updateUser(int $id, array $data): void {
        $users = $this->readFile('users.json');
        foreach ($users as &$u) {
            if ($u['id'] === $id) {
                $u = array_merge($u, $data);
                break;
            }
        }
        $this->writeFile('users.json', $users);
    }

    public function deleteUser(int $id): void {
        $users = $this->readFile('users.json');
        $users = array_values(array_filter($users, fn($u) => $u['id'] !== $id));
        $this->writeFile('users.json', $users);
    }

    // ── FILE I/O ──

    private function readFile(string $filename): array {
        $path = $this->data_dir . '/' . $filename;
        if (!file_exists($path)) return [];
        $data = json_decode(file_get_contents($path), true);
        return is_array($data) ? $data : [];
    }

    private function writeFile(string $filename, array $data): void {
        $path = $this->data_dir . '/' . $filename;
        // Atomic write with lock
        $tmp = $path . '.tmp';
        file_put_contents($tmp, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE), LOCK_EX);
        rename($tmp, $path);
    }
}

// ── AUTH HELPERS ──

function getDB(): FlatDB {
    static $db = null;
    if ($db === null) $db = new FlatDB();
    return $db;
}

function startAdminSession() {
    if (session_status() === PHP_SESSION_NONE) session_start();
}

function requireLogin() {
    startAdminSession();
    if (empty($_SESSION['admin_user'])) {
        header('Location: /admin/login.php');
        exit;
    }
    return $_SESSION['admin_user'];
}

function requireAdmin() {
    $user = requireLogin();
    if ($user['role'] !== 'admin') {
        http_response_code(403);
        die('Access denied. Admin role required.');
    }
    return $user;
}

function canAccessPage($user, $page_slug) {
    if ($user['role'] === 'admin') return true;
    $allowed = $user['allowed_pages'] ?? [];
    return in_array($page_slug, $allowed);
}

function getAllowedPagesForUser($user) {
    if ($user['role'] === 'admin') {
        return ['qse-esg', 'food-safety', 'formation', 'anir-ia', 'sites-web'];
    }
    return $user['allowed_pages'] ?? [];
}

$PAGE_LABELS = [
    'qse-esg'     => 'QSE / ESG / Due Diligence',
    'food-safety'  => 'Food Safety (BRCGS/IFS)',
    'formation'    => 'Formations & CSF',
    'anir-ia'      => 'Anir.io — IA Agentique',
    'sites-web'    => 'Création de Sites Web',
];
