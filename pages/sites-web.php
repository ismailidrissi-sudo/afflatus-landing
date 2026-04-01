<?php
require_once __DIR__ . '/../config.php';

$page_title = "Création de Sites Web Sur Mesure — Design Premium";
$page_description = "Sites web sur mesure — vitrines premium, e-commerce, applications web. Design UX/UI, SEO technique, performance optimisée. Par Afflatus Consulting Group.";
$page_slug = "sites-web";
$page_css = 'brand-pages';
$gads_conversion_label = GADS_CONVERSION_LABEL_WEB;
$nav_contact_href = '#lead-form';
$nav_cta_href = '#lead-form';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php require __DIR__ . '/../includes/head.php'; ?>
</head>
<body class="has-sticky">
<?php require __DIR__ . '/../includes/tracking-body-open.php'; ?>

<div class="sticky-bar">
  <span class="sticky-text">🌐 Sites web sur mesure — Design premium &amp; performance optimisée · Par Afflatus Consulting Group</span>
  <a href="#lead-form" class="btn-sticky" data-cta="sticky-cta" data-page="sites-web">Devis gratuit</a>
</div>

<?php require __DIR__ . '/../includes/nav.php'; ?>

<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-tag">Web Design · Développement · SEO · Performance</span>
      <h1>Un site web qui <em>convertit</em>, pas seulement un site qui existe</h1>
      <p class="hero-mechanism">Afflatus Consulting Group conçoit et développe des sites web sur mesure — vitrines premium, plateformes e-commerce et applications web — avec un focus sur la conversion, le SEO et la performance.</p>
      <ul class="hero-usps">
        <li><span class="usp-icon">✓</span> Design UX/UI sur mesure pour votre marque et vos objectifs de conversion</li>
        <li><span class="usp-icon">✓</span> Stack moderne (Next.js, React, headless CMS) — rapide et évolutif</li>
        <li><span class="usp-icon">✓</span> SEO technique : structure, meta, schema, Core Web Vitals</li>
        <li><span class="usp-icon">✓</span> Formation &amp; transfert à la livraison</li>
        <li><span class="usp-icon">✓</span> Hébergement, maintenance et support continu</li>
      </ul>
      <div class="hero-stats">
        <div class="hero-stat"><div class="stat-num">95+</div><div class="stat-label">Score Lighthouse visé</div></div>
        <div class="hero-stat"><div class="stat-num">&lt; 2s</div><div class="stat-label">Chargement</div></div>
        <div class="hero-stat"><div class="stat-num">15+</div><div class="stat-label">Sites livrés</div></div>
      </div>
      <div class="hero-ctas">
        <a href="#lead-form" class="btn btn-primary" data-cta="hero-primary" data-page="sites-web">Obtenir mon devis gratuit</a>
        <a href="#expertise" class="btn btn-outline" data-cta="hero-secondary" data-page="sites-web">Voir notre méthode</a>
      </div>
      <div class="hero-trust-signals">
        <span class="trust-badge">✅ +400 projets</span>
        <span class="trust-badge">✅ Réponse 24h</span>
      </div>
    </div>
    <div class="hero-visual">
      <img src="https://placehold.co/600x450/f0f4ff/7B2D8B?text=Web+%2B+Responsive" width="600" height="450" alt="" decoding="async" loading="eager">
    </div>
  </div>
</section>

<section class="section-lead-form" id="lead-form">
  <div class="lead-form-inner">
    <span class="section-tag" style="display:block;margin-bottom:0.5rem;color:var(--color-brand-purple);font-weight:600;">Devis gratuit</span>
    <h2 class="section-title" style="font-size:1.5rem;margin-bottom:0.35rem;">Décrivez votre projet</h2>
    <p style="color:var(--color-text-secondary);font-size:0.9375rem;">Proposition détaillée sous 48h · Sans engagement</p>
    <div class="hero-form-panel">
      <form data-landing="Sites Web Afflatus">
        <input type="hidden" name="source" value="sites-web">
        <div class="form-group">
          <label for="wb-name">Nom complet</label>
          <input type="text" id="wb-name" name="Nom" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
          <label for="wb-company">Entreprise</label>
          <input type="text" id="wb-company" name="Entreprise" placeholder="Nom de votre entreprise" required>
        </div>
        <div class="form-group">
          <label for="wb-project">Type de projet</label>
          <select id="wb-project" name="Projet" required>
            <option value="" disabled selected>Sélectionnez</option>
            <option value="Site vitrine">Site vitrine</option>
            <option value="E-commerce">E-commerce</option>
            <option value="Application web">Application web</option>
            <option value="Refonte site existant">Refonte site existant</option>
            <option value="Autre">Autre</option>
          </select>
        </div>
        <div class="form-group">
          <label for="wb-budget">Budget estimé</label>
          <select id="wb-budget" name="Budget" required>
            <option value="" disabled selected>Sélectionnez</option>
            <option value="< 20 000 MAD">< 20 000 MAD</option>
            <option value="20 000 - 50 000 MAD">20 000 – 50 000 MAD</option>
            <option value="50 000 - 100 000 MAD">50 000 – 100 000 MAD</option>
            <option value="100 000+ MAD">100 000+ MAD</option>
            <option value="À discuter">À discuter</option>
          </select>
        </div>
        <div class="form-group">
          <label for="wb-telephone">Téléphone</label>
          <input type="tel" id="wb-telephone" name="Telephone" placeholder="+212 6XX XXX XXX" required>
        </div>
        <button type="submit" class="btn-submit btn-primary" data-cta="form-submit" data-page="sites-web">Obtenir mon devis gratuit →</button>
        <p class="form-trust">🔒 Confidentiel · Réponse sous 48h · Sans engagement</p>
      </form>
    </div>
  </div>
</section>

<?php
$anatomy_logos_label = 'Ils nous font confiance';
$anatomy_logos_bg = 'white';
$anatomy_cert_logos = true;
$anatomy_cert_set = 'sites-web';
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<section class="section section-problems anatomy-features" id="expertise">
  <div class="section-inner">
    <span class="section-label reveal">Notre expertise, votre succès</span>
    <h2 class="section-title reveal">Création de sites web : performance, SEO et image de marque</h2>
    <p class="section-subtitle reveal">Nous livrons des sites sur mesure — pas des templates — avec des objectifs de vitesse, de référencement et de conversion chiffrés dès le brief.</p>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Un site rapide sur mobile pour ne pas perdre la moitié de vos visites</h4>
        <p>Core Web Vitals et temps de chargement pris en compte dès la conception technique.</p>
        <span class="problem-consequence">→ Meilleure rétention trafic</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Un design qui renforce la confiance B2B</h4>
        <p>UX/UI alignée sur votre offre et vos preuves sociales — pas un thème générique.</p>
        <span class="problem-consequence">→ Image premium cohérente</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>SEO technique intégré dès le build</h4>
        <p>Structure, balisage, sitemap et données structurées pour une base saine.</p>
        <span class="problem-consequence">→ Visibilité organique durable</span>
      </div>
    </div>
  </div>
</section>

<section class="section section-solution">
  <div class="section-inner">
    <span class="section-label reveal">Notre processus</span>
    <h2 class="section-title reveal">Notre processus en 4 étapes</h2>
    <div class="timeline">
      <div class="timeline-step reveal">
        <div class="timeline-num">1</div>
        <div class="timeline-content">
          <h4>Brief &amp; stratégie digitale</h4>
          <p class="timeline-duration">1 semaine · Gratuit</p>
          <p>Marque, concurrents, objectifs et architecture du site.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">2</div>
        <div class="timeline-content">
          <h4>Design UX/UI &amp; maquettes</h4>
          <p class="timeline-duration">2 semaines</p>
          <p>Wireframes et maquettes validées avant développement.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">3</div>
        <div class="timeline-content">
          <h4>Développement &amp; intégrations</h4>
          <p class="timeline-duration">3–5 semaines</p>
          <p>Front, back, CMS, paiements, formulaires, SEO technique.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">4</div>
        <div class="timeline-content">
          <h4>Lancement &amp; optimisation</h4>
          <p class="timeline-duration">Continu</p>
          <p>Mise en ligne, analytics, performance et itérations.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background: var(--color-bg-white); padding: 3rem var(--space-md);">
  <div class="section-inner">
    <div class="case-study reveal">
      <span class="case-study-label">Étude de cas</span>
      <h3>afflatus.consulting</h3>
      <div class="case-before-after">
        <div class="case-col before">
          <h5>Objectifs</h5>
          <ul>
            <li>Image premium alignée au cabinet</li>
            <li>Performance et Lighthouse élevés</li>
            <li>Conversion formulaires / contact</li>
          </ul>
        </div>
        <div class="case-col after">
          <h5>Résultats visés</h5>
          <ul>
            <li>Scores Lighthouse 95+ sur les critères principaux</li>
            <li>Chargement cible &lt; 2s</li>
            <li>Design sur mesure et SEO technique intégré</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section anatomy-services-band" id="services">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Écosystème</p>
      <h2 class="section-title">Nos autres solutions</h2>
      <p class="section-subtitle" style="margin-left:auto;margin-right:auto">Conformité, formation financée et IA agentique — les mêmes équipes pour digital et terrain.</p>
    </div>
    <div class="anatomy-service-cards">
      <a href="/qse-esg" class="anatomy-service-card">
        <h3>QSE &amp; ESG</h3>
        <p>Certifications et reporting.</p>
        <span class="anatomy-service-more">En savoir plus →</span>
      </a>
      <a href="/food-safety" class="anatomy-service-card">
        <h3>Food safety</h3>
        <p>BRCGS, IFS, FSSC 22000.</p>
        <span class="anatomy-service-more">En savoir plus →</span>
      </a>
      <a href="/formation" class="anatomy-service-card">
        <h3>Formation &amp; CSF</h3>
        <p>Financement OFPPT.</p>
        <span class="anatomy-service-more">En savoir plus →</span>
      </a>
      <a href="/anir-ia" class="anatomy-service-card">
        <h3>Anir.io</h3>
        <p>IA agentique métier.</p>
        <span class="anatomy-service-more">En savoir plus →</span>
      </a>
    </div>
  </div>
</section>

<section class="section anatomy-faq section-faq">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Vos questions</p>
      <h2 class="section-title">Pourquoi Afflatus pour votre site&nbsp;?</h2>
    </div>
    <div class="faq-accordion">
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Pourquoi pas un template WordPress&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Les templates limitent marque, performance et SEO. Nous partons de vos objectifs et construisons un parcours sur mesure.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Délai de livraison&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>En moyenne 6 semaines du brief à la mise en ligne ; vitrine plus courte, application web plus longue.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Qu'inclut la maintenance&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Hébergement, mises à jour de sécurité, sauvegardes, monitoring et support — selon périmètre défini au devis.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Refonte d'un site existant&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Oui : audit de l'existant, SEO et UX, puis reconstruction sur stack moderne.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Que couvre votre engagement livraison&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Si le livrable s'écarte des maquettes validées ou des critères de performance convenus, nous corrigeons sans frais supplémentaires.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="anatomy-stats-band">
  <div class="metrics-bar theme-dark reveal">
    <div class="metric-item"><div class="metric-num" data-count="95" data-suffix="+">0</div><div class="metric-label">Lighthouse visé</div></div>
    <div class="metric-item"><div class="metric-num">&lt;2s</div><div class="metric-label">Chargement</div></div>
    <div class="metric-item"><div class="metric-num" data-count="15" data-suffix="+">0</div><div class="metric-label">Sites livrés</div></div>
    <div class="metric-item"><div class="metric-num" data-count="6">0</div><div class="metric-label">Semaines type</div></div>
  </div>
</section>

<section class="section anatomy-testimonials">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Projets</p>
      <h2 class="section-title">Ce que disent nos clients</h2>
    </div>
    <div class="anatomy-testimonial-grid">
      <div class="anatomy-t-card reveal" data-reveal="up">
        <div class="anatomy-t-avatar initials" aria-hidden="true">AC</div>
        <p class="anatomy-t-name">Afflatus Consulting Group</p>
        <div class="anatomy-t-logo" aria-hidden="true"><span class="anatomy-t-logo-placeholder">Logo</span></div>
        <p class="anatomy-t-role">Site corporate</p>
        <p class="anatomy-t-quote">«&nbsp;Site premium — <strong>+35&nbsp;% de demandes qualifiées</strong> post-refonte.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <div class="anatomy-t-avatar initials" aria-hidden="true">OL</div>
        <p class="anatomy-t-name">OmniLearn.space</p>
        <div class="anatomy-t-logo" aria-hidden="true"><span class="anatomy-t-logo-placeholder">Logo</span></div>
        <p class="anatomy-t-role">Plateforme éducative</p>
        <p class="anatomy-t-quote">«&nbsp;Lighthouse <strong>95+</strong> et parcours apprenant fluide sur mobile.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <div class="anatomy-t-avatar initials" aria-hidden="true">PME</div>
        <p class="anatomy-t-name">PME services B2B</p>
        <div class="anatomy-t-logo" aria-hidden="true"><span class="anatomy-t-logo-placeholder">Logo</span></div>
        <p class="anatomy-t-role">Direction marketing</p>
        <p class="anatomy-t-quote">«&nbsp;Chargement <strong>&lt;2&nbsp;s</strong> — les demandes de devis ont suivi.&nbsp;»</p>
      </div>
    </div>
  </div>
</section>

<section class="section anatomy-team">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Équipe</p>
      <h2 class="section-title">Les experts derrière vos livrables</h2>
    </div>
    <div class="anatomy-team-grid">
      <div class="anatomy-team-card reveal">
        <div class="anatomy-t-avatar initials" aria-hidden="true">II</div>
        <h3>Ismail Idrissi</h3>
        <p class="role">CEO · Direction produit web</p>
        <p>Architecture solution, UX stratégique et exigence qualité livrable.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <div class="anatomy-t-avatar initials" aria-hidden="true">UX</div>
        <h3>Design UX/UI</h3>
        <p class="role">Maquettes &amp; design system</p>
        <p>Parcours utilisateur, identité visuelle et composants réutilisables.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <div class="anatomy-t-avatar initials" aria-hidden="true">DV</div>
        <h3>Développement full-stack</h3>
        <p class="role">Next.js, React, CMS</p>
        <p>Performance, SEO technique, intégrations et mises en production.</p>
      </div>
    </div>
  </div>
</section>

<?php
$anatomy_logos_label = 'Ils nous font confiance';
$anatomy_logos_bg = 'white';
$anatomy_cert_logos = true;
$anatomy_cert_set = 'sites-web';
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<?php require __DIR__ . '/../includes/partials/anatomy-blog.php'; ?>

<?php
$anatomy_cta_headline = 'Un site web qui travaille pour vous';
$anatomy_cta_sub = 'Décrivez votre projet et recevez une proposition détaillée sous 48h.';
$anatomy_cta_btn = 'Obtenir mon devis gratuit';
$anatomy_cta_href = '#lead-form';
require __DIR__ . '/../includes/partials/anatomy-bottom-cta.php';
?>

<div id="cookie-consent" class="cookie-banner" style="display:none">
  <p>Ce site utilise des cookies pour améliorer votre expérience et mesurer l'efficacité de nos campagnes.
  En continuant, vous acceptez notre <a href="/confidentialite">politique de confidentialité</a>.</p>
  <div class="cookie-actions">
    <button onclick="acceptCookies()" class="cookie-accept">Accepter</button>
    <button onclick="declineCookies()" class="cookie-decline">Refuser</button>
  </div>
</div>

<?php require __DIR__ . '/../includes/footer.php'; ?>
<?php
$include_tracking_events = true;
require __DIR__ . '/../includes/scripts-landing.php';
?>
<script src="/assets/js/consent.js"></script>
</body>
</html>
