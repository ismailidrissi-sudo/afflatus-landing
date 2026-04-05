<?php
/**
 * One-time / occasional: create or sync Afflatus team accounts (admin only).
 * Delete this file on production after use if you prefer not to keep the tool.
 */
require_once __DIR__ . '/db.php';

$current = requireAdmin();
$db = getDB();

$all_pages = ['qse-esg', 'food-safety', 'formation', 'anir-ia', 'sites-web'];
$team = [
    ['username' => 'mohamed', 'full_name' => 'Mohamed', 'role' => 'agent'],
    ['username' => 'asmaa',   'full_name' => 'Asmaa',   'role' => 'agent'],
    ['username' => 'mahdi',   'full_name' => 'Mahdi',   'role' => 'agent'],
    ['username' => 'mohcine', 'full_name' => 'Mohcine', 'role' => 'agent'],
    ['username' => 'ismail',  'full_name' => 'Ismail',  'role' => 'admin'],
];

$find = function (string $username) use ($db): ?array {
    foreach ($db->getUsers() as $u) {
        if (strcasecmp($u['username'] ?? '', $username) === 0) {
            return $u;
        }
    }
    return null;
};

$messages = [];
$errors = [];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $password = $_POST['initial_password'] ?? '';
    $reset_passwords = !empty($_POST['reset_passwords']);

    $need_create = false;
    foreach ($team as $row) {
        if ($find($row['username']) === null) {
            $need_create = true;
            break;
        }
    }

    if ($need_create && (strlen($password) < 8)) {
        $errors[] = 'Mot de passe initial : au moins 8 caractères (requis pour créer les comptes manquants).';
    }

    if ($reset_passwords && strlen($password) < 8) {
        $errors[] = 'Pour réinitialiser les mots de passe, indiquez un mot de passe d’au moins 8 caractères.';
    }

    if (!$errors) {
        foreach ($team as $row) {
            $u = $find($row['username']);
            $payload = [
                'full_name'     => $row['full_name'],
                'role'          => $row['role'],
                'allowed_pages' => $all_pages,
                'is_active'     => true,
            ];
            if ($reset_passwords && $password !== '') {
                $payload['password_hash'] = password_hash($password, PASSWORD_BCRYPT);
            }

            if ($u === null) {
                try {
                    $db->addUser(array_merge([
                        'username'      => $row['username'],
                        'password_hash' => password_hash($password, PASSWORD_BCRYPT),
                    ], $payload));
                    $messages[] = "Créé : {$row['username']} ({$row['role']}).";
                } catch (Exception $e) {
                    $errors[] = $row['username'] . ' : ' . $e->getMessage();
                }
            } else {
                $db->updateUser((int) $u['id'], $payload);
                $messages[] = "Mis à jour : {$row['username']} → {$row['role']}.";
            }
        }
        if ($reset_passwords && $password !== '') {
            $messages[] = 'Mots de passe mis à jour pour tous les comptes listés.';
        }
    }
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: /admin/login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<title>Comptes équipe | Afflatus Admin</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;600;700&display=swap" rel="stylesheet">
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: 'Manrope', sans-serif; background: #0B0F1A; color: #E2E8F0; min-height: 100vh; }
  .wrap { max-width: 640px; margin: 0 auto; padding: 40px 24px; }
  h1 { font-size: 22px; margin-bottom: 8px; }
  .sub { opacity: 0.5; font-size: 14px; margin-bottom: 28px; line-height: 1.5; }
  .card { background: #151821; border: 1px solid #1E293B; border-radius: 12px; padding: 24px; margin-bottom: 20px; }
  .card h2 { font-size: 14px; text-transform: uppercase; letter-spacing: 0.06em; opacity: 0.45; margin-bottom: 12px; }
  ul { list-style: none; font-size: 14px; line-height: 1.8; }
  ul li strong { color: #E8C547; }
  label { display: block; font-size: 12px; text-transform: uppercase; letter-spacing: 0.04em; opacity: 0.5; margin-bottom: 6px; }
  input[type="password"] { width: 100%; padding: 12px 14px; border-radius: 8px; background: rgba(255,255,255,.06); border: 1px solid #1E293B; color: #fff; font-family: inherit; margin-bottom: 16px; }
  .check { display: flex; align-items: center; gap: 10px; margin-bottom: 20px; font-size: 14px; cursor: pointer; }
  .check input { width: 18px; height: 18px; accent-color: #0A6B5E; }
  .btn { padding: 12px 22px; border-radius: 8px; background: #0A6B5E; color: #fff; border: none; font-family: inherit; font-weight: 600; cursor: pointer; font-size: 14px; }
  .btn:hover { background: #0D8870; }
  .msg { padding: 12px 16px; border-radius: 8px; font-size: 13px; margin-bottom: 12px; }
  .msg.ok { background: rgba(10,107,94,.15); color: #0D8870; }
  .msg.err { background: rgba(192,57,43,.15); color: #E74C3C; }
  .nav { margin-top: 24px; font-size: 14px; }
  .nav a { color: #60A5FA; }
</style>
</head>
<body>
<div class="wrap">
  <h1>Comptes équipe</h1>
  <p class="sub">Crée ou met à jour <strong>mohamed</strong>, <strong>asmaa</strong>, <strong>mahdi</strong>, <strong>mohcine</strong> (agents : tous les leads + bascule contacté) et <strong>ismail</strong> (admin : tout, dont suppression d’utilisateurs). Les agents ne voient pas la page Utilisateurs.</p>

  <?php foreach ($messages as $m): ?><div class="msg ok"><?php echo htmlspecialchars($m); ?></div><?php endforeach; ?>
  <?php foreach ($errors as $e): ?><div class="msg err"><?php echo htmlspecialchars($e); ?></div><?php endforeach; ?>

  <div class="card">
    <h2>Comptes</h2>
    <ul>
      <?php foreach ($team as $row): $ex = $find($row['username']); ?>
      <li>
        <strong><?php echo htmlspecialchars($row['username']); ?></strong>
        — <?php echo htmlspecialchars($row['full_name']); ?>
        (<?php echo htmlspecialchars($row['role']); ?>)
        <?php echo $ex ? '<span style="opacity:.45">· existe</span>' : '<span style="opacity:.45">· à créer</span>'; ?>
      </li>
      <?php endforeach; ?>
    </ul>
  </div>

  <div class="card">
    <h2>Action</h2>
    <form method="post">
      <label for="pw">Mot de passe</label>
      <input type="password" id="pw" name="initial_password" autocomplete="new-password" placeholder="Requis seulement si comptes à créer ou case réinitialisation">
      <label class="check">
        <input type="checkbox" name="reset_passwords" value="1">
        Réinitialiser le mot de passe pour <em>tous</em> les comptes ci-dessus (y compris existants)
      </label>
      <button type="submit" class="btn">Créer / synchroniser</button>
    </form>
    <p style="margin-top:16px;font-size:12px;opacity:.45;line-height:1.5">Sans case cochée, les mots de passe existants ne changent pas. Les comptes existants reçoivent quand même rôle, nom et pages mis à jour.</p>
  </div>

  <p class="nav"><a href="/admin/users.php">← Utilisateurs</a> · <a href="/admin/">Tableau de bord</a></p>
</div>
</body>
</html>
