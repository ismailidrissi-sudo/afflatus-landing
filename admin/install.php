<?php
// ══════════════════════════════════════════════════════════════
// ADMIN — DATABASE SETUP & INSTALLATION (CLI only)
// Run this once: php admin/install.php
// ══════════════════════════════════════════════════════════════

if (php_sapi_name() !== 'cli') {
    http_response_code(403);
    die('This script can only be run from the command line.');
}

require_once __DIR__ . '/db.php';

$db = getDB();

echo "Data directory ready.\n";

$users = $db->getUsers();
$admin_exists = false;
foreach ($users as $u) {
    if ($u['username'] === 'admin') { $admin_exists = true; break; }
}

if (!$admin_exists) {
    $password = getenv('ADMIN_PASSWORD') ?: bin2hex(random_bytes(12));
    $db->addUser([
        'username'      => 'admin',
        'password_hash' => password_hash($password, PASSWORD_BCRYPT),
        'full_name'     => 'Administrateur',
        'role'          => 'admin',
        'allowed_pages' => ['qse-esg', 'food-safety', 'formation', 'anir-ia', 'sites-web'],
        'is_active'     => true,
    ]);
    echo "Admin user created. Change the password after first login.\n";
} else {
    echo "Admin user already exists.\n";
}

echo "Database initialized.\n";
