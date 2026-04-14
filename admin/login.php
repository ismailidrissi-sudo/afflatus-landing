<?php
// ══════════════════════════════════════════════════════════════
// ADMIN — LOGIN PAGE
// ══════════════════════════════════════════════════════════════

require_once __DIR__ . '/../config.php';
require_once __DIR__ . '/db.php';
startAdminSession();

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($username && $password) {
        $db = getDB();
        $user = $db->getUserByUsername($username);

        if ($user && password_verify($password, $user['password_hash'])) {
            $_SESSION['admin_user'] = $user;
            $db->updateUser($user['id'], ['last_login' => date('Y-m-d H:i:s')]);
            header('Location: /admin/');
            exit;
        } else {
            $error = 'Identifiants incorrects.';
        }
    } else {
        $error = 'Veuillez remplir tous les champs.';
    }
}

if (!empty($_SESSION['admin_user'])) {
    header('Location: /admin/');
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<title>Admin — Connexion | Afflatus Consulting</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@400;500;600;700&display=swap" rel="stylesheet">
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: 'Manrope', sans-serif; background: #0B0F1A; color: #fff; min-height: 100vh;
    display: flex; align-items: center; justify-content: center; }
  .login-card { width: 100%; max-width: 400px; padding: 48px 36px; border-radius: 16px;
    background: #1E2535; border: 1px solid rgba(255,255,255,.08); }
  .login-card img { height: 36px; margin-bottom: 32px; }
  .login-card h1 { font-size: 24px; margin-bottom: 8px; }
  .login-card p { font-size: 14px; opacity: 0.5; margin-bottom: 28px; }
  .form-group { margin-bottom: 18px; }
  .form-group label { display: block; font-size: 12px; font-weight: 600; text-transform: uppercase;
    letter-spacing: 0.04em; margin-bottom: 6px; opacity: 0.6; }
  .form-group input { width: 100%; padding: 12px 16px; border-radius: 8px; font-size: 15px;
    background: rgba(255,255,255,.06); border: 1px solid rgba(255,255,255,.1); color: #fff;
    font-family: inherit; outline: none; transition: border-color .25s; }
  .form-group input:focus { border-color: #0A6B5E; }
  .btn-login { width: 100%; padding: 14px; border: none; border-radius: 8px; background: #0A6B5E;
    color: #fff; font-size: 15px; font-weight: 700; cursor: pointer; font-family: inherit;
    transition: background .25s; margin-top: 8px; }
  .btn-login:hover { background: #0D8870; }
  .error { background: rgba(192,57,43,.15); color: #E74C3C; padding: 10px 16px; border-radius: 8px;
    font-size: 13px; margin-bottom: 18px; }
</style>
</head>
<body>
<div class="login-card">
  <img src="<?php echo htmlspecialchars(COMPANY_LOGO_PATH); ?>" alt="Afflatus">
  <h1>Administration</h1>
  <p>Panneau de gestion des leads des landing pages</p>
  <?php if ($error): ?>
    <div class="error"><?php echo htmlspecialchars($error); ?></div>
  <?php endif; ?>
  <form method="POST">
    <div class="form-group">
      <label>Nom d'utilisateur</label>
      <input type="text" name="username" required autofocus>
    </div>
    <div class="form-group">
      <label>Mot de passe</label>
      <input type="password" name="password" required>
    </div>
    <button type="submit" class="btn-login">Se connecter</button>
  </form>
</div>
</body>
</html>
