<?php
/**
 * Landing anatomy — Section 12: bottom CTA banner.
 * Expects: $anatomy_cta_headline, $anatomy_cta_sub, $anatomy_cta_btn,
 * $anatomy_cta_href (default #lead-form), $page_slug for data-page.
 */
$anatomy_cta_href = $anatomy_cta_href ?? '#lead-form';
$anatomy_cta_phone_show = $anatomy_cta_phone_show ?? true;
?>
<section class="anatomy-bottom-cta final-cta">
  <div class="container anatomy-bottom-cta-inner">
    <h2 class="reveal"><?php echo htmlspecialchars($anatomy_cta_headline ?? 'Prêt à passer à l’action ?'); ?></h2>
    <p class="reveal"><?php echo htmlspecialchars($anatomy_cta_sub ?? 'Contactez-nous pour un diagnostic gratuit et sans engagement.'); ?></p>
    <div class="final-cta-buttons reveal">
      <a href="<?php echo htmlspecialchars($anatomy_cta_href); ?>"
         class="btn-cta-primary"
         data-cta="final-cta"
         data-page="<?php echo htmlspecialchars($page_slug ?? ''); ?>">
        <?php echo htmlspecialchars($anatomy_cta_btn ?? 'Obtenir mon diagnostic'); ?> →
      </a>
    </div>
    <?php if ($anatomy_cta_phone_show && defined('COMPANY_PHONE')) : ?>
    <p class="anatomy-bottom-cta-phone reveal"><?php echo htmlspecialchars(COMPANY_PHONE); ?></p>
    <?php endif; ?>
  </div>
</section>
