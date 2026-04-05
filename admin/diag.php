<?php
header('Content-Type: text/plain; charset=utf-8');

echo "=== DIAGNOSTIC ===\n\n";

echo "1. admin/users.bootstrap.json\n";
$boot = __DIR__ . '/users.bootstrap.json';
echo "   path: $boot\n";
echo "   exists: " . (file_exists($boot) ? 'YES (' . filesize($boot) . ' bytes)' : 'NO') . "\n";
if (file_exists($boot)) {
    $data = json_decode(file_get_contents($boot), true);
    echo "   valid JSON array: " . (is_array($data) ? 'YES (' . count($data) . ' users)' : 'NO') . "\n";
    if (is_array($data)) {
        foreach ($data as $u) {
            echo "   - " . ($u['username'] ?? '?') . " | role=" . ($u['role'] ?? '?') . " | hash_len=" . strlen($u['password_hash'] ?? '') . "\n";
        }
    }
}

echo "\n2. data/users.json\n";
$dataPath = __DIR__ . '/../data/users.json';
echo "   path: $dataPath\n";
echo "   exists: " . (file_exists($dataPath) ? 'YES (' . filesize($dataPath) . ' bytes)' : 'NO') . "\n";
if (file_exists($dataPath)) {
    $du = json_decode(file_get_contents($dataPath), true);
    echo "   valid JSON array: " . (is_array($du) ? 'YES (' . count($du) . ' users)' : 'NO') . "\n";
    if (is_array($du)) {
        foreach ($du as $u) {
            echo "   - " . ($u['username'] ?? '?') . " | role=" . ($u['role'] ?? '?') . " | hash_len=" . strlen($u['password_hash'] ?? '') . "\n";
        }
    }
}

echo "\n3. data/ dir writable: " . (is_writable(__DIR__ . '/../data') ? 'YES' : 'NO') . "\n";

echo "\n4. db.php has readUsersFile: ";
echo (method_exists('FlatDB', 'readUsersFile') ? 'not loaded yet' : 'checking...') . "\n";
require_once __DIR__ . '/db.php';
$rc = new ReflectionClass('FlatDB');
echo "   methods: " . implode(', ', array_map(fn($m) => $m->getName(), $rc->getMethods())) . "\n";
echo "   has readUsersFile: " . ($rc->hasMethod('readUsersFile') ? 'YES' : 'NO — OLD db.php on server!') . "\n";

echo "\n5. password_verify test (ismail):\n";
$db = getDB();
$ismail = $db->getUserByUsername('ismail');
if ($ismail) {
    echo "   found user ismail, hash_len=" . strlen($ismail['password_hash']) . "\n";
    echo "   verify '93hkjZGVFv7egy': " . (password_verify('93hkjZGVFv7egy', $ismail['password_hash']) ? 'OK' : 'FAIL') . "\n";
} else {
    echo "   user ismail NOT FOUND\n";
}

echo "\n=== END ===\n";
