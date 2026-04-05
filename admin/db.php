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
        $lead['called'] = false;
        $lead['called_at'] = null;
        $leads[] = $lead;
        $this->writeFile('leads.json', $leads);
        return $lead['id'];
    }

    public function getLeadById(int $id): ?array {
        foreach ($this->readFile('leads.json') as $l) {
            if ((int) ($l['id'] ?? 0) === $id) {
                return $l;
            }
        }
        return null;
    }

    public function updateLead(int $id, array $patch): bool {
        $leads = $this->readFile('leads.json');
        $found = false;
        foreach ($leads as &$l) {
            if ((int) ($l['id'] ?? 0) === $id) {
                $l = array_merge($l, $patch);
                $found = true;
                break;
            }
        }
        unset($l);
        if ($found) {
            $this->writeFile('leads.json', $leads);
        }
        return $found;
    }

    public function getLeads(?string $source = null, ?string $search = null, ?string $date_from = null, ?string $date_to = null, ?bool $called_filter = null): array {
        $leads = $this->readFile('leads.json');

        // Filter by source
        if ($source) {
            $leads = array_filter($leads, fn($l) => ($l['source'] ?? '') === $source);
        }

        // Filter by called status (null = all)
        if ($called_filter !== null) {
            $leads = array_filter($leads, fn($l) => lead_is_called($l) === $called_filter);
        }

        // Filter by search (names + form “answers”)
        if ($search) {
            $s = mb_strtolower($search);
            $answerKeys = ['secteur', 'besoin', 'certification', 'projet', 'budget', 'cas_usage', 'taille', 'employes', 'source'];
            $leads = array_filter($leads, function($l) use ($s, $answerKeys) {
                if (str_contains(mb_strtolower($l['nom'] ?? ''), $s)
                    || str_contains(mb_strtolower($l['entreprise'] ?? ''), $s)
                    || str_contains(mb_strtolower($l['whatsapp'] ?? ''), $s)) {
                    return true;
                }
                foreach ($answerKeys as $k) {
                    if (str_contains(mb_strtolower((string) ($l[$k] ?? '')), $s)) {
                        return true;
                    }
                }
                return false;
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

    public function getLeadsByPages(array $allowed_pages, ?string $source = null, ?string $search = null, ?string $date_from = null, ?string $date_to = null, ?bool $called_filter = null): array {
        $leads = $this->getLeads($source, $search, $date_from, $date_to, $called_filter);
        return array_values(array_filter($leads, fn($l) => in_array($l['source'] ?? '', $allowed_pages)));
    }

    /** Leads visible to this user (admin / agent / manager: all; viewer: by allowed_pages). */
    public function getLeadsVisibleForUser(array $user, array $allowed_pages): array {
        $all = $this->readFile('leads.json');
        if (isLeadDashboardFullAccess($user)) {
            return $all;
        }
        return array_values(array_filter($all, fn($l) => in_array($l['source'] ?? '', $allowed_pages)));
    }

    /** Counts for dashboard: total, called, not_called (same visibility as user). */
    public function getTreatmentStats(array $user, array $allowed_pages): array {
        $visible = $this->getLeadsVisibleForUser($user, $allowed_pages);
        $called = 0;
        foreach ($visible as $l) {
            if (lead_is_called($l)) {
                $called++;
            }
        }
        $total = count($visible);
        return [
            'total'       => $total,
            'called'      => $called,
            'not_called'  => $total - $called,
            'rate_pct'    => $total > 0 ? round(100 * $called / $total, 1) : 0.0,
        ];
    }

    public function countLeadsBySource(string $source): int {
        $leads = $this->readFile('leads.json');
        return count(array_filter($leads, fn($l) => ($l['source'] ?? '') === $source));
    }

    // ── USERS ──

    /**
     * Hostinger Git often does not deploy data/users.json. If missing or empty, copy
     * admin/users.bootstrap.json (tracked in git) into data/users.json once.
     */
    private function readUsersFile(): array {
        $path = $this->data_dir . '/users.json';
        if (file_exists($path)) {
            $raw = file_get_contents($path);
            $data = json_decode($raw, true);
            if (is_array($data) && count($data) > 0) {
                return $data;
            }
        }
        $boot = __DIR__ . '/users.bootstrap.json';
        if (is_readable($boot)) {
            $data = json_decode(file_get_contents($boot), true);
            if (is_array($data) && count($data) > 0) {
                $this->writeFile('users.json', $data);
                return $data;
            }
        }
        return [];
    }

    public function getUsers(): array {
        return $this->readUsersFile();
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
        $users = $this->readUsersFile();

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
        $users = $this->readUsersFile();
        foreach ($users as &$u) {
            if ($u['id'] === $id) {
                $u = array_merge($u, $data);
                break;
            }
        }
        $this->writeFile('users.json', $users);
    }

    public function deleteUser(int $id): void {
        $users = $this->readUsersFile();
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
        file_put_contents($tmp, json_encode($data, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES), LOCK_EX);
        rename($tmp, $path);
    }
}

// ── AUTH HELPERS ──

function getDB(): FlatDB {
    static $db = null;
    if ($db === null) $db = new FlatDB();
    return $db;
}

/** Whether a lead is marked as called (handles legacy JSON without the field). */
function lead_is_called(array $lead): bool {
    $c = $lead['called'] ?? false;
    return $c === true || $c === 1 || $c === '1';
}

/** Full leads list + “contacted” toggle (admin, agent, manager). Viewer stays page-scoped. */
function isLeadDashboardFullAccess(array $user): bool {
    return in_array($user['role'] ?? '', ['admin', 'agent', 'manager'], true);
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
    if (isLeadDashboardFullAccess($user)) {
        $pages = $user['allowed_pages'] ?? [];
        if ($pages !== []) {
            return $pages;
        }
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
