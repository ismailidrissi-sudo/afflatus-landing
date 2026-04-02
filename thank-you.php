<?php
require_once __DIR__ . '/config.php';

$thank_you_source = isset($_GET['source']) ? trim((string) $_GET['source']) : '';
if (strlen($thank_you_source) > 160) {
    $thank_you_source = substr($thank_you_source, 0, 157) . '…';
}

$page_title = 'Merci pour votre demande';
$page_description = 'Votre demande a bien été envoyée. Nous vous répondrons sous 24h.';
$page_slug = 'thank-you';
$page_css = '';
$gads_conversion_label = '';
$nav_cta_text = 'Accueil';
$nav_cta_href = '/';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php require __DIR__ . '/includes/head.php'; ?>
<script>
  gtag('event', 'conversion', {
    'send_to': '<?php echo GADS_CONVERSION_ID; ?>/THANK_YOU_LABEL',
    'value': 1.0, 'currency': 'MAD',
    'transaction_id': Date.now().toString()
  });
  fbq('track', 'CompleteRegistration');
  ttq.track('CompleteRegistration');
</script>
</head>
<body>
<?php require __DIR__ . '/includes/tracking-body-open.php'; ?>
<?php require __DIR__ . '/includes/nav.php'; ?>

<div class="thank-you-page">
  <div class="thank-you-inner">
    <div class="thank-you-icon" aria-hidden="true">✓</div>
    <h1>Merci pour votre demande</h1>
    <p>Votre message a bien été envoyé. Notre équipe vous contactera dans les <strong>prochaines 24 heures</strong> pour planifier votre consultation.</p>
    <?php if ($thank_you_source !== '') : ?>
    <p class="thank-you-context">Demande enregistrée — <span class="thank-you-source-label"><?php echo htmlspecialchars($thank_you_source, ENT_QUOTES, 'UTF-8'); ?></span></p>
    <?php endif; ?>
    <div class="thank-you-actions">
      <a href="/" class="ty-btn ty-btn-primary">← Retour à l'accueil</a>
    </div>
  </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
<?php require __DIR__ . '/includes/scripts-landing.php'; ?>
</body>
</html>
