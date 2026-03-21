<?php
require_once __DIR__ . '/../config.php';

$page_title = "Nos Services — Afflatus Consulting Group";
$page_description = "Découvrez les services d'Afflatus Consulting Group : QSE, sécurité alimentaire, formation, IA agentique et création de sites web.";
$page_slug = "nos-services";
$page_css = "qse-esg";
$google_fonts_url = "https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Manrope:wght@300;400;500;600;700;800&display=swap";
$gads_conversion_label = '';
$nav_cta_text = "Nous contacter";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php require __DIR__ . '/../includes/head.php'; ?>
<style>
/* ── NOS SERVICES — PAGE STYLES ── */
.services-hero {
  min-height: 55vh; display: flex; align-items: center; justify-content: center; text-align: center;
  background: linear-gradient(165deg, #0B0F1A 0%, #142E2B 50%, #0B0F1A 100%);
  padding: 140px 24px 80px; position: relative; overflow: hidden;
}
.services-hero::before {
  content: ''; position: absolute; top: -40%; right: -20%; width: 600px; height: 600px;
  background: radial-gradient(circle, rgba(10,107,94,.12) 0%, transparent 70%); border-radius: 50%;
}
.services-hero h1 {
  font-family: 'DM Serif Display', serif; font-size: clamp(36px, 5vw, 56px); color: #fff;
  margin-bottom: 16px; position: relative; z-index: 1;
}
.services-hero h1 em { color: #E8C547; font-style: italic; }
.services-hero p {
  font-size: 18px; color: rgba(255,255,255,.55); max-width: 600px; margin: 0 auto;
  line-height: 1.7; position: relative; z-index: 1;
}

.services-grid {
  display: grid; grid-template-columns: repeat(auto-fit, minmax(340px, 1fr));
  gap: 28px; padding: 60px 32px 80px; max-width: 1200px; margin: 0 auto;
}

.service-card {
  background: #151821; border: 1px solid #1E293B; border-radius: 16px; overflow: hidden;
  transition: all .35s ease; cursor: pointer; text-decoration: none; color: inherit;
  display: flex; flex-direction: column;
}
.service-card:hover {
  transform: translateY(-6px); border-color: rgba(232,197,71,.3);
  box-shadow: 0 20px 60px rgba(0,0,0,.3);
}

.service-thumb {
  height: 200px; display: flex; align-items: center; justify-content: center;
  position: relative; overflow: hidden;
}
.service-thumb .thumb-icon {
  font-size: 64px; z-index: 1; filter: drop-shadow(0 4px 12px rgba(0,0,0,.3));
}

.service-body { padding: 28px; flex: 1; display: flex; flex-direction: column; }
.service-tag {
  display: inline-block; padding: 4px 12px; border-radius: 50px; font-size: 10px; font-weight: 700;
  text-transform: uppercase; letter-spacing: 0.06em; margin-bottom: 14px; width: fit-content;
}
.service-body h3 {
  font-family: 'DM Serif Display', serif; font-size: 22px; color: #fff; margin-bottom: 10px;
}
.service-body p { font-size: 14px; line-height: 1.7; color: #94A3B8; flex: 1; margin-bottom: 20px; }
.service-cta {
  display: inline-flex; align-items: center; gap: 6px; font-weight: 700; font-size: 13px;
  text-transform: uppercase; letter-spacing: 0.04em; transition: gap .25s;
}
.service-card:hover .service-cta { gap: 12px; }

/* ── Per-service colors ── */
.card-qse .service-thumb { background: linear-gradient(135deg, #0A3D35, #142E2B); }
.card-qse .service-tag { background: rgba(10,107,94,.15); color: #0D8870; }
.card-qse .service-cta { color: #0D8870; }

.card-food .service-thumb { background: linear-gradient(135deg, #1A1128, #2D1440); }
.card-food .service-tag { background: rgba(255,27,141,.1); color: #FF1B8D; }
.card-food .service-cta { color: #FF1B8D; }

.card-formation .service-thumb { background: linear-gradient(135deg, #2E2518, #3D3020); }
.card-formation .service-tag { background: rgba(200,146,42,.1); color: #E8B84B; }
.card-formation .service-cta { color: #E8B84B; }

.card-anir .service-thumb { background: linear-gradient(135deg, #0C1328, #121A3E); }
.card-anir .service-tag { background: rgba(59,130,246,.1); color: #3B82F6; }
.card-anir .service-cta { color: #3B82F6; }

.card-web .service-thumb { background: linear-gradient(135deg, #1C1030, #2A1840); }
.card-web .service-tag { background: rgba(108,71,255,.1); color: #A78BFA; }
.card-web .service-cta { color: #A78BFA; }

@media (max-width: 640px) {
  .services-grid { grid-template-columns: 1fr; padding: 40px 16px 60px; }
}
</style>
</head>
<body>
<?php require __DIR__ . '/../includes/tracking-body-open.php'; ?>
<?php require __DIR__ . '/../includes/floating-cta.php'; ?>
<?php require __DIR__ . '/../includes/nav.php'; ?>

<!-- ══ HERO ══ -->
<section class="services-hero">
  <div>
    <h1>Nos <em>Services</em></h1>
    <p>Afflatus Consulting Group accompagne les entreprises marocaines et africaines avec une expertise multidisciplinaire — de la conformité QSE à l'intelligence artificielle.</p>
  </div>
</section>

<!-- ══ SERVICES GRID ══ -->
<div class="services-grid">

  <!-- 1. QSE / ESG -->
  <a href="/qse-esg" class="service-card card-qse">
    <div class="service-thumb"><span class="thumb-icon">🛡️</span></div>
    <div class="service-body">
      <span class="service-tag">Certifications</span>
      <h3>QSE, ESG & Due Diligence</h3>
      <p>Implémentation de systèmes ISO 9001, 14001, 45001 et structuration de démarches ESG. 94% de succès à la première tentative d'audit de certification.</p>
      <span class="service-cta">Voir le détail →</span>
    </div>
  </a>

  <!-- 2. Food Safety -->
  <a href="/food-safety" class="service-card card-food">
    <div class="service-thumb"><span class="thumb-icon">🧪</span></div>
    <div class="service-body">
      <span class="service-tag">Sécurité Alimentaire</span>
      <h3>BRCGS, IFS & FSSC 22000</h3>
      <p>Le seul consultant BRCGS officiellement approuvé en Afrique. Certification BRCGS Food Safety, IFS Food, FSSC 22000 en 90 jours.</p>
      <span class="service-cta">Voir le détail →</span>
    </div>
  </a>

  <!-- 3. Formation -->
  <a href="/formation" class="service-card card-formation">
    <div class="service-thumb"><span class="thumb-icon">🎓</span></div>
    <div class="service-body">
      <span class="service-tag">Formation & CSF</span>
      <h3>Formations QSE & Financement</h3>
      <p>Formations certifiantes sur mesure et ingénierie de financement CSF. Récupérez jusqu'à 200 000 MAD/an grâce aux Contrats Spéciaux de Formation.</p>
      <span class="service-cta">Voir le détail →</span>
    </div>
  </a>

  <!-- 4. Anir.io -->
  <a href="/anir-ia" class="service-card card-anir">
    <div class="service-thumb"><span class="thumb-icon">🤖</span></div>
    <div class="service-body">
      <span class="service-tag">Intelligence Artificielle</span>
      <h3>Anir.io — IA Agentique</h3>
      <p>Plateforme d'agents IA autonomes pour automatiser vos processus. Governance-first, anti-hallucination, intégration native ERP/CRM.</p>
      <span class="service-cta">Voir le détail →</span>
    </div>
  </a>

  <!-- 5. Sites Web -->
  <a href="/sites-web" class="service-card card-web">
    <div class="service-thumb"><span class="thumb-icon">🌐</span></div>
    <div class="service-body">
      <span class="service-tag">Développement Web</span>
      <h3>Création de Sites Web</h3>
      <p>Sites web sur mesure — vitrines premium, e-commerce, applications web. Design UX/UI, SEO technique, performance optimisée. Score Lighthouse 95+.</p>
      <span class="service-cta">Voir le détail →</span>
    </div>
  </a>

</div>

<!-- ══ COOKIE CONSENT ══ -->
<div id="cookie-consent" class="cookie-banner" style="display:none">
  <p>Ce site utilise des cookies pour améliorer votre expérience.
  <a href="/confidentialite">Politique de confidentialité</a>.</p>
  <div class="cookie-actions">
    <button onclick="acceptCookies()" class="cookie-accept">Accepter</button>
    <button onclick="declineCookies()" class="cookie-decline">Refuser</button>
  </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/consent.js"></script>
</body>
</html>
