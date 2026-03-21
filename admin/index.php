<?php
// ══════════════════════════════════════════════════════════════
// ADMIN — LEADS DASHBOARD
// ══════════════════════════════════════════════════════════════

require_once __DIR__ . '/db.php';
$user = requireLogin();
$db = getDB();
$allowed_pages = getAllowedPagesForUser($user);

// Handle logout
if (isset($_GET['logout'])) { session_destroy(); header('Location: /admin/login.php'); exit; }

// Filters
$filter_page = $_GET['page_filter'] ?? '';
$filter_search = $_GET['search'] ?? '';
$date_from = $_GET['date_from'] ?? '';
$date_to = $_GET['date_to'] ?? '';

// Get leads with RBAC
$source_filter = ($filter_page && in_array($filter_page, $allowed_pages)) ? $filter_page : null;
$leads = $db->getLeadsByPages($allowed_pages, $source_filter, $filter_search ?: null, $date_from ?: null, $date_to ?: null);

// Stats per page
$stats = [];
foreach ($allowed_pages as $p) {
    $stats[$p] = $db->countLeadsBySource($p);
}
$total_leads = array_sum($stats);

// Handle CSV export
if (isset($_GET['export']) && $_GET['export'] === 'csv') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename="leads_' . date('Y-m-d') . '.csv"');
    $out = fopen('php://output', 'w');
    fprintf($out, chr(0xEF).chr(0xBB).chr(0xBF)); // UTF-8 BOM for Excel
    fputcsv($out, ['ID', 'Source', 'Nom', 'Entreprise', 'WhatsApp', 'Secteur', 'Besoin', 'Date']);
    foreach ($leads as $l) {
        fputcsv($out, [$l['id'], $l['source'] ?? '', $l['nom'] ?? '', $l['entreprise'] ?? '', $l['whatsapp'] ?? '',
                       $l['secteur'] ?? '', $l['besoin'] ?? $l['certification'] ?? $l['projet'] ?? '', $l['created_at'] ?? '']);
    }
    fclose($out);
    exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="noindex, nofollow">
<title>Admin — Leads | Afflatus Consulting</title>
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
  * { box-sizing: border-box; margin: 0; padding: 0; }
  body { font-family: 'Manrope', sans-serif; background: #0B0F1A; color: #E2E8F0; }
  .admin-layout { display: grid; grid-template-columns: 260px 1fr; min-height: 100vh; }
  .sidebar { background: #111827; padding: 24px 0; border-right: 1px solid #1E293B; position: sticky; top: 0; height: 100vh; overflow-y: auto; }
  .sidebar-logo { padding: 0 24px 28px; border-bottom: 1px solid #1E293B; }
  .sidebar-logo img { height: 30px; }
  .sidebar-logo span { display: block; font-size: 11px; opacity: 0.4; margin-top: 6px; text-transform: uppercase; letter-spacing: 0.06em; }
  .sidebar-nav { padding: 20px 12px; }
  .sidebar-nav a { display: flex; align-items: center; gap: 10px; padding: 10px 16px; border-radius: 8px; font-size: 14px; color: #94A3B8; transition: all .2s; text-decoration: none; margin-bottom: 4px; }
  .sidebar-nav a:hover, .sidebar-nav a.active { background: rgba(255,255,255,.05); color: #fff; }
  .sidebar-user { padding: 20px 24px; border-top: 1px solid #1E293B; font-size: 13px; }
  .sidebar-user strong { color: #fff; }
  .sidebar-user .role-badge { display: inline-block; padding: 2px 8px; border-radius: 4px; font-size: 10px; font-weight: 700; text-transform: uppercase; background: rgba(10,107,94,.2); color: #0D8870; margin-left: 6px; }
  .main { padding: 32px; overflow-x: auto; }
  .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(160px, 1fr)); gap: 16px; margin-bottom: 32px; }
  .stat-card { background: #151821; border: 1px solid #1E293B; border-radius: 12px; padding: 20px; }
  .stat-card .sc-label { font-size: 11px; text-transform: uppercase; letter-spacing: 0.06em; opacity: 0.5; margin-bottom: 8px; }
  .stat-card .sc-num { font-size: 28px; font-weight: 800; color: #E8C547; }
  .stat-card.total .sc-num { color: #0D8870; }
  .filters { display: flex; gap: 12px; flex-wrap: wrap; align-items: center; margin-bottom: 24px; }
  .filters select, .filters input { padding: 8px 14px; border-radius: 8px; background: #151821; border: 1px solid #1E293B; color: #E2E8F0; font-family: inherit; font-size: 13px; outline: none; }
  .filters select:focus, .filters input:focus { border-color: #0A6B5E; }
  .btn-filter { padding: 8px 18px; border-radius: 8px; background: #0A6B5E; color: #fff; border: none; cursor: pointer; font-family: inherit; font-size: 13px; font-weight: 600; }
  .btn-filter:hover { background: #0D8870; }
  .btn-export { padding: 8px 18px; border-radius: 8px; background: rgba(232,197,71,.1); color: #E8C547; border: 1px solid rgba(232,197,71,.2); text-decoration: none; font-size: 13px; font-weight: 600; }
  .btn-export:hover { background: rgba(232,197,71,.2); }
  .leads-table { width: 100%; border-collapse: collapse; background: #151821; border-radius: 12px; overflow: hidden; }
  .leads-table th { padding: 12px 16px; text-align: left; font-size: 11px; text-transform: uppercase; letter-spacing: 0.06em; background: #111827; color: #64748B; border-bottom: 1px solid #1E293B; }
  .leads-table td { padding: 12px 16px; font-size: 13px; border-bottom: 1px solid #1E293B; }
  .leads-table tr:hover td { background: rgba(255,255,255,.02); }
  .source-badge { display: inline-block; padding: 3px 10px; border-radius: 50px; font-size: 10px; font-weight: 700; text-transform: uppercase; letter-spacing: 0.04em; }
  .source-qse-esg { background: rgba(10,107,94,.15); color: #0D8870; }
  .source-food-safety { background: rgba(255,27,141,.1); color: #FF1B8D; }
  .source-formation { background: rgba(200,146,42,.1); color: #E8B84B; }
  .source-anir-ia { background: rgba(59,130,246,.1); color: #3B82F6; }
  .source-sites-web { background: rgba(108,71,255,.1); color: #A78BFA; }
  .wa-link { color: #25D366; text-decoration: none; }
  .wa-link:hover { text-decoration: underline; }
  .empty-state { text-align: center; padding: 60px 24px; opacity: 0.5; }
  @media (max-width: 960px) { .admin-layout { grid-template-columns: 1fr; } .sidebar { display: none; } }
</style>
</head>
<body>
<div class="admin-layout">
  <aside class="sidebar">
    <div class="sidebar-logo">
      <img src="https://afflatus.consulting/logo.png" alt="Afflatus">
      <span>Admin Panel</span>
    </div>
    <nav class="sidebar-nav">
      <a href="/admin/" class="active"><span>📊</span> Tableau de bord</a>
      <?php if ($user['role'] === 'admin'): ?>
      <a href="/admin/users.php"><span>👥</span> Utilisateurs</a>
      <?php endif; ?>
      <a href="/" target="_blank"><span>🌐</span> Voir le site</a>
      <a href="?logout=1"><span>🚪</span> Déconnexion</a>
    </nav>
    <div class="sidebar-user">
      <strong><?php echo htmlspecialchars($user['full_name'] ?? $user['username']); ?></strong>
      <span class="role-badge"><?php echo $user['role']; ?></span>
    </div>
  </aside>

  <main class="main">
    <h1 style="font-size: 24px; margin-bottom: 24px;">📊 Tableau de bord — Leads</h1>

    <div class="stats-grid">
      <div class="stat-card total"><div class="sc-label">Total leads</div><div class="sc-num"><?php echo $total_leads; ?></div></div>
      <?php foreach ($stats as $page => $count): ?>
      <div class="stat-card"><div class="sc-label"><?php echo $PAGE_LABELS[$page] ?? $page; ?></div><div class="sc-num"><?php echo $count; ?></div></div>
      <?php endforeach; ?>
    </div>

    <form class="filters" method="GET">
      <select name="page_filter">
        <option value="">Toutes les pages</option>
        <?php foreach ($allowed_pages as $p): ?>
        <option value="<?php echo $p; ?>" <?php echo $filter_page === $p ? 'selected' : ''; ?>><?php echo $PAGE_LABELS[$p] ?? $p; ?></option>
        <?php endforeach; ?>
      </select>
      <input type="text" name="search" placeholder="Rechercher nom / entreprise..." value="<?php echo htmlspecialchars($filter_search); ?>">
      <input type="date" name="date_from" value="<?php echo $date_from; ?>">
      <input type="date" name="date_to" value="<?php echo $date_to; ?>">
      <button type="submit" class="btn-filter">Filtrer</button>
      <a href="?<?php echo http_build_query(array_merge($_GET, ['export' => 'csv'])); ?>" class="btn-export">📥 Export CSV</a>
    </form>

    <?php if (empty($leads)): ?>
    <div class="empty-state"><p style="font-size: 36px; margin-bottom: 12px;">📭</p><p>Aucun lead trouvé.</p></div>
    <?php else: ?>
    <div style="overflow-x: auto;">
      <table class="leads-table">
        <thead><tr><th>#</th><th>Source</th><th>Nom</th><th>Entreprise</th><th>WhatsApp</th><th>Détails</th><th>Date</th></tr></thead>
        <tbody>
          <?php foreach ($leads as $lead): ?>
          <tr>
            <td><?php echo $lead['id']; ?></td>
            <td><span class="source-badge source-<?php echo $lead['source'] ?? ''; ?>"><?php echo $PAGE_LABELS[$lead['source'] ?? ''] ?? $lead['source'] ?? '—'; ?></span></td>
            <td><?php echo htmlspecialchars($lead['nom'] ?? '—'); ?></td>
            <td><?php echo htmlspecialchars($lead['entreprise'] ?? '—'); ?></td>
            <td>
              <?php if (!empty($lead['whatsapp'])): ?>
              <a href="https://wa.me/<?php echo preg_replace('/[^0-9]/', '', $lead['whatsapp']); ?>" target="_blank" class="wa-link"><?php echo htmlspecialchars($lead['whatsapp']); ?></a>
              <?php else: ?>—<?php endif; ?>
            </td>
            <td style="font-size: 12px; max-width: 200px;">
              <?php
              $details = array_filter([
                  $lead['secteur'] ?? '', $lead['besoin'] ?? '', $lead['certification'] ?? '',
                  ($lead['taille'] ?? '') ? 'Taille: ' . $lead['taille'] : '',
                  ($lead['employes'] ?? '') ? $lead['employes'] . ' emp.' : '',
                  $lead['projet'] ?? '', $lead['budget'] ?? '', $lead['cas_usage'] ?? ''
              ]);
              echo htmlspecialchars(implode(' · ', $details) ?: '—');
              ?>
            </td>
            <td style="font-size: 12px; white-space: nowrap;"><?php echo isset($lead['created_at']) ? date('d/m/Y H:i', strtotime($lead['created_at'])) : '—'; ?></td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
    <p style="font-size: 12px; opacity: 0.4; margin-top: 12px;"><?php echo count($leads); ?> résultat(s)</p>
    <?php endif; ?>
  </main>
</div>
</body>
</html>
