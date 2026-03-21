<?php
require_once __DIR__ . '/config.php';

$page_title = "Politique de Confidentialité";
$page_description = "Politique de confidentialité et protection des données personnelles — Afflatus Consulting Group, conforme à la loi 09-08 et au RGPD.";
$page_slug = "confidentialite";
$page_css = "qse-esg";
$google_fonts_url = "https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Manrope:wght@400;600;700&display=swap";
$gads_conversion_label = '';
$nav_cta_text = "Accueil";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php require __DIR__ . '/includes/head.php'; ?>
<style>
  .privacy-page { padding: 140px 24px 80px; max-width: 800px; margin: 0 auto; color: #0B0F1A; }
  .privacy-page h1 { font-family: 'DM Serif Display', serif; font-size: 36px; margin-bottom: 12px; color: #0A6B5E; }
  .privacy-page .date { font-size: 13px; opacity: 0.5; margin-bottom: 40px; }
  .privacy-page h2 { font-family: 'DM Serif Display', serif; font-size: 22px; margin: 32px 0 12px; color: #0B0F1A; }
  .privacy-page p, .privacy-page li { font-size: 15px; line-height: 1.8; color: #333; }
  .privacy-page ul { margin: 12px 0; padding-left: 24px; list-style: disc; }
  .privacy-page a { color: #0A6B5E; text-decoration: underline; }
</style>
</head>
<body>
<?php require __DIR__ . '/includes/tracking-body-open.php'; ?>
<?php require __DIR__ . '/includes/nav.php'; ?>

<div class="privacy-page">
  <h1>Politique de Confidentialité</h1>
  <p class="date">Dernière mise à jour : <?php echo date('d/m/Y'); ?></p>

  <h2>1. Responsable du traitement</h2>
  <p><strong><?php echo COMPANY_NAME; ?></strong><br>
  <?php echo COMPANY_ADDRESS; ?><br>
  Email : <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a><br>
  Téléphone : <?php echo COMPANY_PHONE; ?></p>

  <h2>2. Données collectées</h2>
  <p>Dans le cadre de nos landing pages, nous collectons les données suivantes via nos formulaires de contact :</p>
  <ul>
    <li>Nom et prénom</li>
    <li>Nom de l'entreprise</li>
    <li>Secteur d'activité</li>
    <li>Numéro WhatsApp</li>
    <li>Informations relatives à votre besoin (type de certification, budget, nombre d'employés)</li>
  </ul>

  <h2>3. Finalités du traitement</h2>
  <p>Vos données sont utilisées pour :</p>
  <ul>
    <li>Répondre à votre demande de consultation ou de devis</li>
    <li>Vous contacter pour planifier un rendez-vous</li>
    <li>Mesurer l'efficacité de nos campagnes publicitaires</li>
    <li>Améliorer nos services et notre site web</li>
  </ul>

  <h2>4. Base légale</h2>
  <p>Le traitement de vos données est fondé sur votre consentement explicite (soumission du formulaire) et notre intérêt légitime à répondre à vos demandes commerciales.</p>

  <h2>5. Cookies et traceurs</h2>
  <p>Ce site utilise des cookies à des fins de mesure d'audience et de suivi des conversions publicitaires :</p>
  <ul>
    <li><strong>Google Analytics 4</strong> — mesure d'audience anonymisée</li>
    <li><strong>Google Ads</strong> — suivi des conversions</li>
    <li><strong>Meta (Facebook) Pixel</strong> — suivi des conversions</li>
    <li><strong>TikTok Pixel</strong> — suivi des conversions</li>
    <li><strong>LinkedIn Insight Tag</strong> — suivi des conversions</li>
  </ul>
  <p>Vous pouvez accepter ou refuser ces cookies via le bandeau de consentement affiché lors de votre première visite. Sans votre consentement, aucun traceur publicitaire n'est activé.</p>

  <h2>6. Partage des données</h2>
  <p>Vos données ne sont jamais vendues. Elles peuvent être accessibles aux sous-traitants techniques suivants :</p>
  <ul>
    <li>Google (Google Analytics, Google Ads)</li>
    <li>Meta Platforms (Facebook Pixel)</li>
    <li>TikTok (TikTok Pixel)</li>
    <li>LinkedIn Corporation</li>
  </ul>

  <h2>7. Durée de conservation</h2>
  <p>Vos données de contact sont conservées pendant une durée maximale de 3 ans à compter de votre dernière interaction avec nous. Les données de cookies sont conservées conformément aux durées définies par chaque plateforme publicitaire.</p>

  <h2>8. Vos droits</h2>
  <p>Conformément à la loi marocaine 09-08 relative à la protection des personnes physiques à l'égard du traitement des données à caractère personnel et au RGPD européen, vous disposez des droits suivants :</p>
  <ul>
    <li>Droit d'accès à vos données</li>
    <li>Droit de rectification</li>
    <li>Droit de suppression</li>
    <li>Droit d'opposition au traitement</li>
    <li>Droit à la portabilité</li>
  </ul>
  <p>Pour exercer ces droits, contactez-nous à <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a>.</p>

  <h2>9. Agrément CNDP</h2>
  <p><?php echo COMPANY_NAME; ?> dispose de l'agrément de la Commission Nationale de protection des Données Personnelles (CNDP), conformément à la législation marocaine en vigueur.</p>

  <h2>10. Contact</h2>
  <p>Pour toute question relative à cette politique, vous pouvez nous contacter :<br>
  Email : <a href="mailto:<?php echo COMPANY_EMAIL; ?>"><?php echo COMPANY_EMAIL; ?></a><br>
  Téléphone : <?php echo COMPANY_PHONE; ?><br>
  Adresse : <?php echo COMPANY_ADDRESS; ?></p>
</div>

<?php require __DIR__ . '/includes/footer.php'; ?>
</body>
</html>
