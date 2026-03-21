<?php
require_once __DIR__ . '/config.php';

$page_title = "Merci pour votre demande";
$page_description = "Votre demande a bien été envoyée. Nous vous répondrons sous 24h.";
$page_slug = "merci";
$page_css = "qse-esg";
$google_fonts_url = "https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Manrope:wght@400;600;700&display=swap";
$gads_conversion_label = '';
$nav_cta_text = "Accueil";
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
<style>
  .thank-you-page { min-height: 100vh; display: flex; align-items: center; justify-content: center;
    background: linear-gradient(165deg, #0B0F1A 0%, #1E2535 60%, #142E2B 100%); color: #fff; text-align: center; padding: 120px 24px; }
  .thank-you-inner { max-width: 600px; }
  .thank-you-icon { font-size: 72px; margin-bottom: 24px; }
  .thank-you-inner h1 { font-family: 'DM Serif Display', serif; font-size: 42px; margin-bottom: 16px; color: #E8C547; }
  .thank-you-inner p { font-size: 18px; line-height: 1.7; opacity: 0.7; margin-bottom: 32px; }
  .thank-you-actions { display: flex; gap: 16px; justify-content: center; flex-wrap: wrap; }
  .ty-btn { padding: 16px 32px; border-radius: 10px; font-size: 16px; font-weight: 600; display: inline-flex; align-items: center; gap: 8px; transition: all .25s ease; }
  .ty-btn:hover { transform: translateY(-2px); }
  .ty-btn-primary { background: #0A6B5E; color: #fff; }
  .ty-btn-whatsapp { background: #25D366; color: #fff; }
</style>
</head>
<body>
<?php require __DIR__ . '/includes/tracking-body-open.php'; ?>
<?php require __DIR__ . '/includes/nav.php'; ?>

<div class="thank-you-page">
  <div class="thank-you-inner">
    <div class="thank-you-icon">✅</div>
    <h1>Merci pour votre demande !</h1>
    <p>Votre message a bien été envoyé. Notre équipe vous contactera dans les <strong>prochaines 24 heures</strong> pour planifier votre consultation.</p>
    <div class="thank-you-actions">
      <a href="/" class="ty-btn ty-btn-primary">← Retour à l'accueil</a>
      <a href="<?php echo WHATSAPP_URL; ?>?text=<?php echo urlencode('Bonjour, je viens de remplir le formulaire sur votre site.'); ?>"
         target="_blank" rel="noopener" class="ty-btn ty-btn-whatsapp">
        Contacter sur WhatsApp
      </a>
    </div>
  </div>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
