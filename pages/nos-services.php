<?php
require_once __DIR__ . '/../config.php';

$page_title = "Nos Services — Afflatus Consulting Group";
$page_description = "Découvrez les services d'Afflatus Consulting Group : QSE, sécurité alimentaire, formation, IA agentique et création de sites web.";
$page_slug = "nos-services";
$page_css = 'nos-services';
$page_css_extra = ['brand-pages'];
$gads_conversion_label = '';
$nav_cta_text = 'Nous contacter';
$nav_contact_href = '/qse-esg#lead-form';
$nav_cta_href = '/qse-esg#lead-form';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php require __DIR__ . '/../includes/head.php'; ?>
</head>
<body>
<?php require __DIR__ . '/../includes/tracking-body-open.php'; ?>
<?php require __DIR__ . '/../includes/nav.php'; ?>

<section class="services-hero" id="hub-hero">
  <div class="container" style="max-width: var(--container-max); margin: 0 auto; padding: 0 2rem; position: relative; z-index: 1;">
    <p class="section-tag" style="color: rgba(255,255,255,0.7); margin-bottom: 1rem;">Conseil · Audit · Formation</p>
    <h1>Accélérez votre conformité et votre <em style="color: var(--color-brand-purple-light); font-style: normal;">transformation digitale</em></h1>
    <p class="services-hero-lead" style="font-size: 1.125rem; color: rgba(255,255,255,0.78); max-width: 640px; margin: 0 auto 1.75rem; line-height: 1.7;">Afflatus Consulting Group accompagne les entreprises marocaines et africaines : conseil QSE et ESG, sécurité alimentaire, formation professionnelle financée, IA agentique Anir.io et sites web sur mesure.</p>
    <div class="services-hero-ctas" style="display: flex; flex-wrap: wrap; gap: 1rem; justify-content: center; align-items: center;">
      <a href="/qse-esg#lead-form" class="btn-primary" data-cta="hero-cta" data-page="nos-services">Obtenir un diagnostic gratuit</a>
      <a href="#services-grid" class="btn-secondary" style="border-color: rgba(255,255,255,0.5); color: #fff;">Voir nos services</a>
    </div>
    <p style="margin-top: 1.25rem; font-size: 0.8125rem; color: rgba(255,255,255,0.55);">Cabinet certifié ISO 9001 · Réponse sous 24h · Agréé CNDP</p>
  </div>
</section>

<?php
$anatomy_logos_label = 'Ils nous font confiance';
$anatomy_logos_bg = 'white';
$anatomy_cert_logos = true;
$anatomy_cert_set = 'nos-services';
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<section class="section section-problems anatomy-features" id="expertise" style="background: var(--color-bg-light);">
  <div class="section-inner">
    <span class="section-label reveal">Notre expertise, votre succès</span>
    <h2 class="section-title reveal">Un cabinet, cinq leviers pour vos enjeux 2026</h2>
    <p class="section-subtitle reveal">Conseil en stratégie de conformité, formation financée, automatisation et présence digitale — avec des consultants terrain et des indicateurs suivis sur des centaines de missions.</p>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Ouvrez vos marchés avec ISO et ESG structurés</h4>
        <p>Implémentation QSE et reporting investisseurs avec méthode en 4 phases et 98&nbsp;% de réussite en première tentative sur nos accompagnements certification complets.</p>
        <span class="problem-consequence">→ QSE &amp; ESG</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Sécurisez l'export agro avec BRCGS / IFS</h4>
        <p>Consultant BRCGS approuvé en Afrique — diagnostic offert et accompagnement documentation / terrain.</p>
        <span class="problem-consequence">→ Food safety</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>Formez sans vider la trésorerie grâce aux CSF</h4>
        <p>Jusqu'à 200&nbsp;000 MAD/an remboursables — dossier OFPPT géré pour vous.</p>
        <span class="problem-consequence">→ Formation</span>
      </div>
      <div class="problem-card reveal" style="--i:3">
        <span class="problem-num">04</span>
        <h4>Automatisez avec de l'IA gouvernée</h4>
        <p>Anir.io : agents connectés ERP/CRM avec RBAC et human-in-the-loop.</p>
        <span class="problem-consequence">→ Anir.io</span>
      </div>
    </div>
  </div>
</section>

<section class="section anatomy-services-band" id="services-grid" style="padding-top: 2rem;">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Offres</p>
      <h2 class="section-title">Nos services</h2>
      <p class="section-subtitle" style="margin-left:auto;margin-right:auto">Choisissez votre levier — chaque carte mène à une page dédiée avec études de cas et formulaire.</p>
    </div>
  </div>
</section>

<div class="services-grid">
  <a href="/qse-esg" class="service-card">
    <div class="service-thumb"><span class="thumb-icon">🛡️</span></div>
    <div class="service-body">
      <span class="service-tag">Certifications</span>
      <h3>QSE, ESG &amp; Due Diligence</h3>
      <p>Implémentation de systèmes ISO 9001, 14001, 45001 et structuration ESG. 98% de succès à la première tentative d'audit de certification.</p>
      <span class="service-cta">Voir le détail →</span>
    </div>
  </a>
  <a href="/food-safety" class="service-card">
    <div class="service-thumb"><span class="thumb-icon">🧪</span></div>
    <div class="service-body">
      <span class="service-tag">Sécurité Alimentaire</span>
      <h3>BRCGS, IFS &amp; FSSC 22000</h3>
      <p>Consultant BRCGS officiellement approuvé en Afrique. Certification en 90 jours en moyenne.</p>
      <span class="service-cta">Voir le détail →</span>
    </div>
  </a>
  <a href="/formation" class="service-card">
    <div class="service-thumb"><span class="thumb-icon">🎓</span></div>
    <div class="service-body">
      <span class="service-tag">Formation &amp; CSF</span>
      <h3>Formations QSE &amp; Financement</h3>
      <p>Formations certifiantes et ingénierie CSF — jusqu'à 200 000 MAD/an récupérables.</p>
      <span class="service-cta">Voir le détail →</span>
    </div>
  </a>
  <a href="/anir-ia" class="service-card">
    <div class="service-thumb"><span class="thumb-icon">🤖</span></div>
    <div class="service-body">
      <span class="service-tag">Intelligence Artificielle</span>
      <h3>Anir.io — IA Agentique</h3>
      <p>Agents IA autonomes — gouvernance, anti-hallucination, intégration ERP/CRM.</p>
      <span class="service-cta">Voir le détail →</span>
    </div>
  </a>
  <a href="/sites-web" class="service-card">
    <div class="service-thumb"><span class="thumb-icon">🌐</span></div>
    <div class="service-body">
      <span class="service-tag">Développement Web</span>
      <h3>Création de Sites Web</h3>
      <p>Vitrines premium, e-commerce, SEO technique. Scores Lighthouse 95+ visés.</p>
      <span class="service-cta">Voir le détail →</span>
    </div>
  </a>
</div>

<section class="section anatomy-faq section-faq">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Vos questions</p>
      <h2 class="section-title">Pourquoi Afflatus Consulting Group&nbsp;?</h2>
    </div>
    <div class="faq-accordion">
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Qu'est-ce qui vous différencie d'un cabinet généraliste&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Nous combinons audits terrain (IRCA, BRCGS), financement formation (CSF) et produit logiciel (Anir.io) — une exécution bout-en-bout rare sur le marché marocain.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Travaillez-vous avec des PME ou uniquement de grands groupes&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Les deux : nous adaptons la feuille de route à la taille de l'organisation et à la maturité des processus.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Comment se déroule le premier contact&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Échange court via le formulaire, puis proposition de diagnostic ou de créneau d'appel — réponse sous 24h.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Quels résultats puis-je attendre sur la certification&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Sur les missions d'accompagnement certification complètes, nous documentons un taux de 98&nbsp;% de réussite à la première tentative d'audit.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="anatomy-stats-band">
  <div class="metrics-bar theme-dark reveal">
    <div class="metric-item"><div class="metric-num" data-count="400" data-prefix="+">0</div><div class="metric-label">Projets</div></div>
    <div class="metric-item"><div class="metric-num" data-count="98" data-suffix="%">0%</div><div class="metric-label">Succès 1<sup>re</sup> tentative</div></div>
    <div class="metric-item"><div class="metric-num" data-count="120" data-suffix="+">0</div><div class="metric-label">Entreprises formées (CSF)</div></div>
    <div class="metric-item"><div class="metric-num" data-count="15" data-suffix="+">0</div><div class="metric-label">Ans d'expérience</div></div>
  </div>
</section>

<section class="section anatomy-testimonials">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Références</p>
      <h2 class="section-title">Ce que disent nos clients</h2>
    </div>
    <div class="anatomy-testimonial-grid">
      <div class="anatomy-t-card reveal" data-reveal="up">
        <div class="anatomy-t-avatar initials" aria-hidden="true">AB</div>
        <p class="anatomy-t-name">Aiguebelle</p>
        <div class="anatomy-t-logo" aria-hidden="true"><span class="anatomy-t-logo-placeholder">Logo</span></div>
        <p class="anatomy-t-role">Industrie chocolatière</p>
        <p class="anatomy-t-quote">«&nbsp;Partenariat ISO 9001 — <strong>+6 ans</strong> d'exigence marchés export.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <div class="anatomy-t-avatar initials" aria-hidden="true">IP</div>
        <p class="anatomy-t-name">International Paper Maroc</p>
        <div class="anatomy-t-logo" aria-hidden="true"><span class="anatomy-t-logo-placeholder">Logo</span></div>
        <p class="anatomy-t-role">Emballage</p>
        <p class="anatomy-t-quote">«&nbsp;<strong>BRCGS Packaging en 1<sup>re</sup> tentative</strong> après échecs antérieurs — méthode et terrain.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <div class="anatomy-t-avatar initials" aria-hidden="true">AG</div>
        <p class="anatomy-t-name">Agroalimentaire</p>
        <div class="anatomy-t-logo" aria-hidden="true"><span class="anatomy-t-logo-placeholder">Logo</span></div>
        <p class="anatomy-t-role">Casablanca</p>
        <p class="anatomy-t-quote">«&nbsp;CSF : <strong>160&nbsp;000 MAD remboursés</strong>, 18 personnes formées.&nbsp;»</p>
      </div>
    </div>
  </div>
</section>

<section class="section anatomy-team">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Équipe</p>
      <h2 class="section-title">Les experts derrière Afflatus</h2>
    </div>
    <div class="anatomy-team-grid">
      <div class="anatomy-team-card reveal">
        <div class="anatomy-t-avatar initials" aria-hidden="true">II</div>
        <h3>Direction &amp; BRCGS</h3>
        <p class="role">Consultant senior</p>
        <p>Pilotage des missions certification et stratégie cabinet.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <div class="anatomy-t-avatar initials" aria-hidden="true">IR</div>
        <h3>Auditeurs &amp; consultants QSE</h3>
        <p class="role">IRCA · terrain</p>
        <p>Audits, mise en conformité et préparation certification.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <div class="anatomy-t-avatar initials" aria-hidden="true">DV</div>
        <h3>Digital &amp; Anir.io</h3>
        <p class="role">Produit &amp; web</p>
        <p>Sites web, intégrations et plateforme IA agentique.</p>
      </div>
    </div>
  </div>
</section>

<?php
$anatomy_logos_label = 'Ils nous font confiance';
$anatomy_logos_bg = 'white';
$anatomy_cert_logos = true;
$anatomy_cert_set = 'nos-services';
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<?php require __DIR__ . '/../includes/partials/anatomy-blog.php'; ?>

<?php
$anatomy_cta_headline = 'Prêt à lancer votre prochaine étape ?';
$anatomy_cta_sub = 'Écrivez-nous pour un diagnostic gratuit et sans engagement — réponse sous 24h.';
$anatomy_cta_btn = 'Discuter de mon projet';
$anatomy_cta_href = '/qse-esg#lead-form';
require __DIR__ . '/../includes/partials/anatomy-bottom-cta.php';
?>

<div id="cookie-consent" class="cookie-banner" style="display:none">
  <p>Ce site utilise des cookies pour améliorer votre expérience.
  <a href="/confidentialite">Politique de confidentialité</a>.</p>
  <div class="cookie-actions">
    <button onclick="acceptCookies()" class="cookie-accept">Accepter</button>
    <button onclick="declineCookies()" class="cookie-decline">Refuser</button>
  </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
<?php
$include_consent_js = true;
require __DIR__ . '/../includes/scripts-landing.php';
?>
</body>
</html>
