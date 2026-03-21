<!-- ══ FOOTER ══ -->
<footer class="site-footer">
  <div class="footer-inner">
    <div class="footer-brand">
      <img src="https://afflatus.consulting/logo.png" alt="<?php echo COMPANY_NAME; ?>" class="footer-logo">
      <p class="footer-tagline">Conseil · Formation · Technologie</p>
    </div>
    <div class="footer-contact">
      <p><strong><?php echo COMPANY_NAME; ?></strong></p>
      <p><?php echo COMPANY_ADDRESS; ?></p>
      <p><a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a></p>
      <p><a href="tel:<?php echo str_replace(' ', '', COMPANY_PHONE); ?>"><?php echo COMPANY_PHONE; ?></a></p>
    </div>
    <div class="footer-links">
      <a href="/confidentialite">Politique de confidentialité</a>
      <a href="<?php echo COMPANY_URL; ?>" target="_blank" rel="noopener">afflatus.consulting</a>
    </div>
  </div>
  <div class="footer-bottom">
    <p>&copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?>. Tous droits réservés.</p>
  </div>
</footer>
