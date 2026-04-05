<?php
/**
 * Local only: php scripts/gen-team-users-once.php
 * Writes admin/users.bootstrap.json and prints one-line JSON of plaintext passwords to stdout.
 */
$all = ['qse-esg', 'food-safety', 'formation', 'anir-ia', 'sites-web'];
$team = [
    ['mohamed', 'Mohamed', 'agent'],
    ['asmaa', 'Asmaa', 'agent'],
    ['mahdi', 'Mahdi', 'agent'],
    ['mohcine', 'Mohcine', 'agent'],
    ['ismail', 'Ismail', 'admin'],
];

function randomPassword(): string {
    $c = 'abcdefghjkmnpqrstuvwxyzABCDEFGHJKMNPQRSTUVWXYZ23456789';
    $s = '';
    for ($i = 0; $i < 14; $i++) {
        $s .= $c[random_int(0, strlen($c) - 1)];
    }
    return $s;
}

$out = [];
$plain = [];
$id = 1;
$now = date('Y-m-d H:i:s');
foreach ($team as $t) {
    $p = randomPassword();
    $plain[$t[0]] = $p;
    $out[] = [
        'username'      => $t[0],
        'password_hash' => password_hash($p, PASSWORD_BCRYPT),
        'full_name'     => $t[1],
        'role'          => $t[2],
        'allowed_pages' => $all,
        'is_active'     => true,
        'id'            => $id++,
        'created_at'    => $now,
        'last_login'    => null,
    ];
}

$path = dirname(__DIR__) . '/admin/users.bootstrap.json';
file_put_contents(
    $path,
    json_encode($out, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
);
echo json_encode($plain, JSON_UNESCAPED_UNICODE) . "\n";
