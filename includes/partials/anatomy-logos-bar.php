<?php
/**
 * Landing anatomy — Section 3 / 10: social proof logos bar.
 * Expects: $anatomy_logos_label (string),
 * optional $anatomy_logos_bg ('white'|'light'), $anatomy_cert_logos (bool),
 * optional $anatomy_cert_set (string) — clé dans includes/cert-sets.php : nos-services, qse-esg, food-safety, formation, anir-ia, sites-web
 * optional $anatomy_cert_images (array of ['src','alt']) — prioritaire sur $anatomy_cert_set
 * optional $anatomy_logo_images (array of ['src'=>'/LOGO/...','alt'=>'...']) — défaut : includes/trust-logos.php
 * optional $anatomy_logo_chips (string[]) — utilisé seulement si images vides et $anatomy_logo_images === false
 */
$anatomy_logos_label = $anatomy_logos_label ?? 'Ils nous font confiance';
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
?>
<section class="anatomy-logos-bar anatomy-logos-bar--<?php echo htmlspecialchars($anatomy_logos_bg); ?>" aria-label="Références clients">
  <div class="container anatomy-logos-inner">
    <p class="section-tag anatomy-logos-label"><?php echo htmlspecialchars($anatomy_logos_label); ?></p>
    <?php if (!empty($anatomy_logo_images)) : ?>
    <div class="logos-row logos-row--static logos-row--images">
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
    <?php elseif (!empty($anatomy_logo_chips)) : ?>
    <div class="logos-row logos-row--static">
      <?php foreach ($anatomy_logo_chips as $chip) : ?>
      <span class="logo-chip"><?php echo htmlspecialchars($chip); ?></span>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
    <?php if ($anatomy_cert_logos && !empty($anatomy_cert_items)) : ?>
    <div class="anatomy-cert-row">
      <?php foreach ($anatomy_cert_items as $cert) :
        $c_src = $cert['src'] ?? '';
        $c_alt = $cert['alt'] ?? '';
        if ($c_src === '') {
            continue;
        }
        $c_img_alt = $cert['name'] ?? $c_alt;
        ?>
      <span class="anatomy-logo-block anatomy-logo-block--cert">
        <span class="anatomy-cert-img-wrap">
          <img src="<?php echo htmlspecialchars($c_src); ?>" alt="<?php echo htmlspecialchars($c_img_alt !== '' ? $c_img_alt : 'Certification'); ?>" class="anatomy-cert-img" width="120" height="48" loading="lazy" decoding="async">
        </span>
      </span>
      <?php endforeach; ?>
    </div>
    <?php endif; ?>
  </div>
</section>
