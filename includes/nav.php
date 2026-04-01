<!-- ══ NAVIGATION (sticky — anatomy §1) ══ -->
<?php
$nav_contact_href = $nav_contact_href ?? '/qse-esg#lead-form';
$nav_cta_href = $nav_cta_href ?? $nav_contact_href;
$nav_cta_text = $nav_cta_text ?? 'Nous contacter';
$nav_cta_is_external = (strpos($nav_cta_href, 'http://') === 0 || strpos($nav_cta_href, 'https://') === 0 || strpos($nav_cta_href, 'mailto:') === 0);
?>
<nav class="main-nav" id="main-nav" aria-label="Navigation principale">
  <div class="nav-inner">
    <a href="/" class="nav-logo" aria-label="<?php echo htmlspecialchars(COMPANY_NAME); ?> — Accueil">
      <img src="https://afflatus.consulting/logo.png" alt="<?php echo htmlspecialchars(COMPANY_NAME); ?>" class="nav-logo-img" width="160" height="40">
    </a>
    <button type="button" class="nav-toggle" id="nav-toggle" aria-expanded="false" aria-controls="nav-menu" aria-label="Ouvrir le menu">
      <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><path d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
    <div class="nav-menu" id="nav-menu">
      <div class="nav-links">
        <?php
        $current = $page_slug ?? '';
        $nav_items = [
          ['href' => '/', 'slug' => 'nos-services', 'label' => 'Services'],
          ['href' => '/#expertise', 'slug' => '', 'label' => 'Expertise', 'scroll' => true],
          ['href' => '/#services-grid', 'slug' => '', 'label' => 'Offres', 'scroll' => true],
          ['href' => $nav_contact_href, 'slug' => '', 'label' => 'Contact', 'scroll' => (strpos($nav_contact_href, '#') === 0)],
        ];
        foreach ($nav_items as $item) :
          $is_active = isset($item['slug']) && $item['slug'] !== '' && ($current === $item['slug']);
          $href = $item['href'];
          $ext = !empty($item['external'])
            || str_starts_with($href, 'http://')
            || str_starts_with($href, 'https://');
        ?>
        <a href="<?php echo htmlspecialchars($href); ?>"
           class="nav-link<?php echo $is_active ? ' is-active' : ''; ?>"
           <?php echo $ext ? 'target="_blank" rel="noopener noreferrer"' : ''; ?>><?php echo htmlspecialchars($item['label']); ?></a>
        <?php endforeach; ?>
      </div>
      <div class="nav-cta">
        <a href="<?php echo htmlspecialchars($nav_cta_href); ?>"
           class="btn btn-primary btn-nav-cta"
           <?php echo $nav_cta_is_external ? 'target="_blank" rel="noopener"' : ''; ?>
           data-cta="nav-cta" data-page="<?php echo htmlspecialchars($page_slug ?? ''); ?>">
          <?php echo htmlspecialchars($nav_cta_text); ?>
        </a>
      </div>
    </div>
  </div>
</nav>
