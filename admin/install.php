<?php
// ══════════════════════════════════════════════════════════════
// ADMIN — DATABASE SETUP & INSTALLATION
// Run this once: php admin/install.php
// ══════════════════════════════════════════════════════════════

require_once __DIR__ . '/db.php';

$db = getDB();

echo "✅ Data directory created.\n";

// Create default admin user if none exists
$users = $db->getUsers();
$admin_exists = false;
foreach ($users as $u) {
    if ($u['username'] === 'admin') { $admin_exists = true; break; }
}

if (!$admin_exists) {
    $db->addUser([
        'username'      => 'admin',
        'password_hash' => password_hash('Afflatus2024!', PASSWORD_BCRYPT),
        'full_name'     => 'Administrateur',
        'role'          => 'admin',
        'allowed_pages' => ['qse-esg', 'food-safety', 'formation', 'anir-ia', 'sites-web'],
        'is_active'     => true,
    ]);
    echo "✅ Admin user created (username: admin / password: Afflatus2024!)\n";
} else {
    echo "ℹ️  Admin user already exists.\n";
}

echo "✅ Database initialized successfully (JSON flat-file storage)\n";
echo "   Data stored in: " . realpath(__DIR__ . '/../data') . "\n";
echo "\n⚠️  IMPORTANT: Change the admin password after first login!\n";
