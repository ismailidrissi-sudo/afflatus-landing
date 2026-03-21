<?php
// ══════════════════════════════════════════════════════════════
// ADMIN — USER MANAGEMENT (admin-only)
// ══════════════════════════════════════════════════════════════

require_once __DIR__ . '/db.php';
$current_user = requireAdmin();
$db = getDB();
$message = '';
$error = '';

$all_pages = ['qse-esg', 'food-safety', 'formation', 'anir-ia', 'sites-web'];

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['action'] ?? '';

    if ($action === 'create') {
        $username = trim($_POST['username'] ?? '');
        $password = $_POST['password'] ?? '';
        $full_name = trim($_POST['full_name'] ?? '');
        $role = $_POST['role'] ?? 'viewer';
        $pages = $_POST['pages'] ?? [];

        if ($username && $password && $full_name) {
            try {
                $db->addUser([
                    'username'      => $username,
                    'password_hash' => password_hash($password, PASSWORD_BCRYPT),
                    'full_name'     => $full_name,
                    'role'          => $role,
                    'allowed_pages' => $pages,
                    'is_active'     => true,
                ]);
                $message = "Utilisateur '$username' créé avec succès.";
            } catch (Exception $e) {
                $error = $e->getMessage();
            }
        } else {
            $error = "Tous les champs sont obligatoires.";
        }
    }

    if ($action === 'toggle') {
        $uid = (int)$_POST['user_id'];
        if ($uid !== $current_user['id']) {
            $u = $db->getUserById($uid);
            if ($u) $db->updateUser($uid, ['is_active' => !($u['is_active'] ?? true)]);
            $message = "Statut mis à jour.";
        }
    }

    if ($action === 'delete') {
        $uid = (int)$_POST['user_id'];
        if ($uid !== $current_user['id']) {
            $db->deleteUser($uid);
            $message = "Utilisateur supprimé.";
        }
    }

    if ($action === 'update_pages') {
        $uid = (int)$_POST['user_id'];
        $pages = $_POST['pages'] ?? [];
        $db->updateUser($uid, ['allowed_pages' => $pages]);
        $message = "Accès mis à jour.";
    }

    if ($action === 'change_password') {
        $uid = (int)$_POST['user_id'];
        $new_pass = $_POST['new_password'] ?? '';
        if ($new_pass && strlen($new_pass) >= 6) {
            $db->updateUser($uid, ['password_hash' => password_hash($new_pass, PASSWORD_BCRYPT)]);
            $message = "Mot de passe mis à jour.";
        } else {
            $error = "Le mot de passe doit contenir au moins 6 caractères.";
        }
    }
}

$users = $db->getUsers();
if (isset($_GET['logout'])) { session_destroy(); header('Location: /admin/login.php'); exit; }
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<title>Admin — Utilisateurs | Afflatus Consulting</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: 'Manrope', sans-serif; background: #0B0F1A; color: #E2E8F0; }
  .admin-layout { display: grid; grid-template-columns: 260px 1fr; min-height: 100vh; }
  .sidebar { background: #111827; padding: 24px 0; border-right: 1px solid #1E293B; position: sticky; top: 0; height: 100vh; }
  .sidebar-logo { padding: 0 24px 28px; border-bottom: 1px solid #1E293B; }
  .sidebar-logo img { height: 30px; }
  .sidebar-logo span { display: block; font-size: 11px; opacity: 0.4; margin-top: 6px; text-transform: uppercase; letter-spacing: 0.06em; }
  .sidebar-nav { padding: 20px 12px; }
  .sidebar-nav a { display: flex; align-items: center; gap: 10px; padding: 10px 16px; border-radius: 8px; font-size: 14px; color: #94A3B8; transition: all .2s; text-decoration: none; margin-bottom: 4px; }
  .sidebar-nav a:hover, .sidebar-nav a.active { background: rgba(255,255,255,.05); color: #fff; }
  .main { padding: 32px; }
  .msg { padding: 12px 18px; border-radius: 8px; font-size: 13px; margin-bottom: 20px; }
  .msg.success { background: rgba(10,107,94,.15); color: #0D8870; }
  .msg.error { background: rgba(192,57,43,.15); color: #E74C3C; }
  .create-form { background: #151821; border: 1px solid #1E293B; border-radius: 12px; padding: 28px; margin-bottom: 32px; }
  .create-form h3 { font-size: 16px; margin-bottom: 18px; }
  .form-row { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 12px; margin-bottom: 14px; }
  .form-row label { font-size: 11px; text-transform: uppercase; letter-spacing: 0.04em; opacity: 0.5; display: block; margin-bottom: 4px; }
  .form-row input, .form-row select { width: 100%; padding: 10px 14px; border-radius: 8px; background: rgba(255,255,255,.04); border: 1px solid #1E293B; color: #E2E8F0; font-family: inherit; font-size: 13px; outline: none; }
  .pages-checkboxes { display: flex; gap: 12px; flex-wrap: wrap; margin: 8px 0; }
  .pages-checkboxes label { font-size: 12px; display: flex; align-items: center; gap: 4px; cursor: pointer; opacity: 0.8; text-transform: none; letter-spacing: 0; }
  .btn-create { padding: 10px 24px; border-radius: 8px; background: #0A6B5E; color: #fff; border: none; font-family: inherit; font-size: 13px; font-weight: 600; cursor: pointer; }
  .btn-create:hover { background: #0D8870; }
  .users-table { width: 100%; border-collapse: collapse; background: #151821; border-radius: 12px; overflow: hidden; }
  .users-table th { padding: 12px 16px; text-align: left; font-size: 11px; text-transform: uppercase; letter-spacing: 0.06em; background: #111827; color: #64748B; border-bottom: 1px solid #1E293B; }
  .users-table td { padding: 12px 16px; font-size: 13px; border-bottom: 1px solid #1E293B; vertical-align: top; }
  .role-badge { display: inline-block; padding: 2px 8px; border-radius: 4px; font-size: 10px; font-weight: 700; text-transform: uppercase; }
  .role-admin { background: rgba(232,197,71,.15); color: #E8C547; }
  .role-viewer { background: rgba(100,116,139,.2); color: #94A3B8; }
  .role-manager { background: rgba(10,107,94,.15); color: #0D8870; }
  .status-active { color: #25D366; }
  .status-inactive { color: #E74C3C; }
  .action-btn { padding: 4px 12px; border-radius: 6px; border: 1px solid #1E293B; background: transparent; color: #94A3B8; font-size: 11px; cursor: pointer; font-family: inherit; margin: 2px; }
  .action-btn:hover { background: rgba(255,255,255,.05); color: #fff; }
  .action-btn.danger { border-color: rgba(231,76,60,.3); color: #E74C3C; }
  .action-btn.danger:hover { background: rgba(231,76,60,.1); }
  .page-tags { display: flex; gap: 4px; flex-wrap: wrap; }
  .page-tag { padding: 2px 8px; border-radius: 4px; font-size: 10px; background: rgba(255,255,255,.05); }
  @media (max-width: 960px) { .admin-layout { grid-template-columns: 1fr; } .sidebar { display: none; } }
</style>
</head>
<body>
<div class="admin-layout">
  <aside class="sidebar">
    <div class="sidebar-logo"><img src="https://afflatus.consulting/logo.png" alt="Afflatus"><span>Admin Panel</span></div>
    <nav class="sidebar-nav">
      <a href="/admin/"><span>📊</span> Tableau de bord</a>
      <a href="/admin/users.php" class="active"><span>👥</span> Utilisateurs</a>
      <a href="/" target="_blank"><span>🌐</span> Voir le site</a>
      <a href="?logout=1"><span>🚪</span> Déconnexion</a>
    </nav>
  </aside>
  <main class="main">
    <h1 style="font-size: 24px; margin-bottom: 24px;">👥 Gestion des utilisateurs</h1>
    <?php if ($message): ?><div class="msg success"><?php echo htmlspecialchars($message); ?></div><?php endif; ?>
    <?php if ($error): ?><div class="msg error"><?php echo htmlspecialchars($error); ?></div><?php endif; ?>

    <div class="create-form">
      <h3>➕ Créer un utilisateur</h3>
      <form method="POST">
        <input type="hidden" name="action" value="create">
        <div class="form-row">
          <div><label>Nom d'utilisateur</label><input type="text" name="username" required></div>
          <div><label>Mot de passe</label><input type="password" name="password" required minlength="6"></div>
          <div><label>Nom complet</label><input type="text" name="full_name" required></div>
          <div><label>Rôle</label><select name="role"><option value="viewer">Viewer</option><option value="manager">Manager</option><option value="admin">Admin</option></select></div>
        </div>
        <label style="font-size: 11px; text-transform: uppercase; letter-spacing: 0.04em; opacity: 0.5;">Pages accessibles</label>
        <div class="pages-checkboxes">
          <?php foreach ($all_pages as $p): ?>
          <label><input type="checkbox" name="pages[]" value="<?php echo $p; ?>" checked> <?php echo $PAGE_LABELS[$p]; ?></label>
          <?php endforeach; ?>
        </div>
        <button type="submit" class="btn-create" style="margin-top: 12px;">Créer l'utilisateur</button>
      </form>
    </div>

    <div style="overflow-x: auto;">
      <table class="users-table">
        <thead><tr><th>Utilisateur</th><th>Rôle</th><th>Pages</th><th>Statut</th><th>Dernier login</th><th>Actions</th></tr></thead>
        <tbody>
          <?php foreach ($users as $u): ?>
          <tr>
            <td><strong><?php echo htmlspecialchars($u['full_name'] ?? ''); ?></strong><br><span style="font-size:11px;opacity:.5"><?php echo htmlspecialchars($u['username']); ?></span></td>
            <td><span class="role-badge role-<?php echo $u['role']; ?>"><?php echo $u['role']; ?></span></td>
            <td>
              <div class="page-tags"><?php foreach ($u['allowed_pages'] ?? [] as $p): ?><span class="page-tag"><?php echo $p; ?></span><?php endforeach; ?></div>
              <?php if ($u['id'] !== $current_user['id']): ?>
              <form method="POST" style="margin-top: 8px; display: flex; gap: 4px; flex-wrap: wrap; align-items: center;">
                <input type="hidden" name="action" value="update_pages">
                <input type="hidden" name="user_id" value="<?php echo $u['id']; ?>">
                <?php foreach ($all_pages as $p): $checked = in_array($p, $u['allowed_pages'] ?? []) ? 'checked' : ''; ?>
                <label style="font-size:10px;display:inline-flex;align-items:center;gap:2px;cursor:pointer"><input type="checkbox" name="pages[]" value="<?php echo $p; ?>" <?php echo $checked; ?>> <?php echo $p; ?></label>
                <?php endforeach; ?>
                <button type="submit" class="action-btn" style="font-size: 10px;">Sauver</button>
              </form>
              <?php endif; ?>
            </td>
            <td><span class="<?php echo ($u['is_active'] ?? true) ? 'status-active' : 'status-inactive'; ?>"><?php echo ($u['is_active'] ?? true) ? '● Actif' : '● Inactif'; ?></span></td>
            <td style="font-size: 12px; white-space: nowrap;"><?php echo ($u['last_login'] ?? null) ? date('d/m/Y H:i', strtotime($u['last_login'])) : '—'; ?></td>
            <td>
              <?php if ($u['id'] !== $current_user['id']): ?>
              <form method="POST" style="display:inline"><input type="hidden" name="action" value="toggle"><input type="hidden" name="user_id" value="<?php echo $u['id']; ?>"><button type="submit" class="action-btn"><?php echo ($u['is_active'] ?? true) ? 'Désactiver' : 'Activer'; ?></button></form>
              <form method="POST" style="display:inline" onsubmit="return confirm('Supprimer ?')"><input type="hidden" name="action" value="delete"><input type="hidden" name="user_id" value="<?php echo $u['id']; ?>"><button type="submit" class="action-btn danger">Supprimer</button></form>
              <form method="POST" style="display:inline-flex;gap:4px;align-items:center;margin-top:4px"><input type="hidden" name="action" value="change_password"><input type="hidden" name="user_id" value="<?php echo $u['id']; ?>"><input type="password" name="new_password" placeholder="Nouveau mdp" style="padding:4px 8px;border-radius:4px;background:rgba(255,255,255,.04);border:1px solid #1E293B;color:#E2E8F0;font-size:11px;width:110px"><button type="submit" class="action-btn">🔑</button></form>
              <?php else: ?><span style="font-size:11px;opacity:.4">Vous</span><?php endif; ?>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </main>
</div>
</body>
</html>
