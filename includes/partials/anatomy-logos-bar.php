<?php
/**
 * Landing anatomy — Section logos : clients + (optionnel) expertises + certifications.
 *
 * Variables :
 * - $anatomy_logos_label (string) — rétrocompat : libellé bloc clients ; sinon utiliser $anatomy_client_logos_label
 * - $anatomy_client_logos_label (string, optionnel)
 * - $anatomy_cert_logos_label (string, optionnel) — défaut : « Normes & certificateurs »
 * - $anatomy_logos_bg ('white'|'light')
 * - $anatomy_cert_logos (bool), $anatomy_cert_set (clé cert-sets.php)
 * - $anatomy_cert_images (array) — prioritaire sur $anatomy_cert_set
 * - $anatomy_logo_images (array|false) — défaut trust-logos.php ; false = pas de rangée images clients
 * - $anatomy_logo_chips (string[]) — si pas d’images clients
 * - $anatomy_expertise_chips (string[], optionnel) — pastilles domaine (affichées une seule fois par page si double inclusion)
 */
$anatomy_client_logos_label = $anatomy_client_logos_label ?? ($anatomy_logos_label ?? 'Ils nous font confiance');
$anatomy_cert_logos_label = $anatomy_cert_logos_label ?? 'Normes & certificateurs';
$anatomy_logos_bg = $anatomy_logos_bg ?? 'white';
$anatomy_cert_logos = !empty($anatomy_cert_logos);
$anatomy_cert_set = $anatomy_cert_set ?? null;
$anatomy_cert_images = $anatomy_cert_images ?? null;
$anatomy_cert_items = [];
if ($anatomy_cert_logos) {
    if (is_array($anatomy_cert_images) && $anatomy_cert_images !== []) {
        $anatomy_cert_items = $anatomy_cert_images;
    } elseif (is_string($anatomy_cert_set) && $anatomy_cert_set !== '') {
        $cert_sets_file = dirname(__DIR__) . '/cert-sets.php';
        if (is_file($cert_sets_file)) {
            $cert_sets = require $cert_sets_file;
            $anatomy_cert_items = $cert_sets[$anatomy_cert_set] ?? [];
        }
    }
}
$anatomy_logo_chips = $anatomy_logo_chips ?? [];

$anatomy_logo_images = $anatomy_logo_images ?? null;
if ($anatomy_logo_images === null) {
    $trust_file = dirname(__DIR__) . '/trust-logos.php';
    $anatomy_logo_images = is_file($trust_file) ? require $trust_file : [];
}
if (!is_array($anatomy_logo_images)) {
    $anatomy_logo_images = [];
}

$anatomy_expertise_chips = $anatomy_expertise_chips ?? null;
$show_expertise_chips = is_array($anatomy_expertise_chips) && $anatomy_expertise_chips !== [];
if ($show_expertise_chips) {
    if (!isset($GLOBALS['acg_anatomy_expertise_chips_done'])) {
        $GLOBALS['acg_anatomy_expertise_chips_done'] = false;
    }
    if ($GLOBALS['acg_anatomy_expertise_chips_done']) {
        $show_expertise_chips = false;
    }
}

$has_client_row = !empty($anatomy_logo_images) || !empty($anatomy_logo_chips);
$has_cert_row = $anatomy_cert_logos && !empty($anatomy_cert_items);
?>
<section class="anatomy-logos-bar anatomy-logos-bar--<?php echo htmlspecialchars($anatomy_logos_bg); ?>" aria-label="Références clients et certifications">
  <div class="container anatomy-logos-inner">
    <?php if ($has_client_row) : ?>
    <div class="anatomy-logos-section anatomy-logos-section--clients">
      <p class="section-tag anatomy-logos-sublabel"><?php echo htmlspecialchars($anatomy_client_logos_label); ?></p>
      <?php if (!empty($anatomy_logo_images)) : ?>
      <div class="anatomy-logos-marquee-bleed">
        <div class="logos-marquee-viewport" role="region" aria-label="<?php echo htmlspecialchars($anatomy_client_logos_label); ?>">
          <div class="logos-marquee-track">
            <div class="logos-marquee-group">
              <?php foreach ($anatomy_logo_images as $logo) :
                  $src = $logo['src'] ?? '';
                  $alt = $logo['alt'] ?? '';
                  if ($src === '') {
                      continue;
                  }
                  ?>
              <span class="anatomy-logo-block anatomy-logo-block--client">
                <span class="anatomy-client-logo-wrap">
                  <img src="<?php echo htmlspecialchars($src); ?>" alt="<?php echo htmlspecialchars($alt !== '' ? $alt : 'Logo partenaire'); ?>" class="anatomy-client-logo" width="140" height="48" loading="lazy" decoding="async">
                </span>
              </span>
              <?php endforeach; ?>
            </div>
            <div class="logos-marquee-group logos-marquee-group--duplicate" aria-hidden="true">
              <?php foreach ($anatomy_logo_images as $logo) :
                  $src = $logo['src'] ?? '';
                  $alt = $logo['alt'] ?? '';
                  if ($src === '') {
                      continue;
                  }
                  ?>
              <span class="anatomy-logo-block anatomy-logo-block--client">
                <span class="anatomy-client-logo-wrap">
                  <img src="<?php echo htmlspecialchars($src); ?>" alt="" class="anatomy-client-logo" width="140" height="48" loading="eager" decoding="async">
                </span>
              </span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>
      </div>
      <?php elseif (!empty($anatomy_logo_chips)) : ?>
      <div class="logos-row logos-row--static">
        <?php foreach ($anatomy_logo_chips as $chip) : ?>
        <span class="logo-chip"><?php echo htmlspecialchars($chip); ?></span>
        <?php endforeach; ?>
      </div>
      <?php endif; ?>
    </div>
    <?php endif; ?>

    <?php
    if ($show_expertise_chips) :
        $GLOBALS['acg_anatomy_expertise_chips_done'] = true;
        ?>
    <div class="anatomy-expertise-chips" role="list" aria-label="Domaines d'expertise">
      <?php foreach ($anatomy_expertise_chips as $chip) : ?>
      <span class="anatomy-expertise-chip" role="listitem"><?php echo htmlspecialchars($chip); ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>

    <?php if ($has_cert_row) : ?>
    <div class="anatomy-logos-section anatomy-logos-section--certs">
      <p class="section-tag anatomy-logos-sublabel anatomy-logos-sublabel--certs"><?php echo htmlspecialchars($anatomy_cert_logos_label); ?></p>
      <div class="anatomy-cert-row">
        <?php foreach ($anatomy_cert_items as $cert) :
            $c_src = $cert['src'] ?? '';
            $c_alt = $cert['alt'] ?? '';
            if ($c_src === '') {
                continue;
            }
            $c_img_alt = $cert['name'] ?? $c_alt;
            $c_img_class = trim((string) ($cert['img_class'] ?? ''));
            $c_img_classes = 'anatomy-cert-img' . ($c_img_class !== '' ? ' ' . $c_img_class : '');
            ?>
        <span class="anatomy-logo-block anatomy-logo-block--cert">
          <span class="anatomy-cert-img-wrap anatomy-cert-img-wrap--tile">
            <img src="<?php echo htmlspecialchars($c_src); ?>" alt="<?php echo htmlspecialchars($c_img_alt !== '' ? $c_img_alt : 'Certification'); ?>" class="<?php echo htmlspecialchars($c_img_classes); ?>" width="120" height="48" loading="lazy" decoding="async">
          </span>
        </span>
        <?php endforeach; ?>
      </div>
    </div>
    <?php endif; ?>
  </div>
</section>
