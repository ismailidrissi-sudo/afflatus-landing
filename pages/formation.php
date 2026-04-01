<?php
require_once __DIR__ . '/../config.php';

$page_title = "Formations Professionnelles & Contrats Spéciaux de Formation CSF";
$page_description = "Formez vos équipes et récupérez jusqu'à 200 000 MAD grâce aux CSF. Afflatus conçoit vos formations sur mesure et gère l'intégralité du dossier administratif OFPPT.";
$page_slug = "formation";
$page_css = 'brand-pages';
$gads_conversion_label = GADS_CONVERSION_LABEL_FORMATION;
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

<!-- ══ STICKY BAR ══ -->
<div class="sticky-bar">
  <span class="sticky-text">📋 Programme gouvernemental : jusqu'à 200 000 MAD remboursés pour vos formations — Afflatus gère tout le dossier</span>
  <a href="#lead-form" class="btn-sticky" data-cta="sticky-cta" data-page="formation">Calculer mon montant</a>
</div>

<?php require __DIR__ . '/../includes/nav.php'; ?>

<!-- ══ HERO ══ -->
<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-tag">Formation Professionnelle · Développement des Compétences · Contrats Spéciaux de Formation</span>
      <h1>Formez votre équipe. Récupérez jusqu'à</h1>
      <div class="hero-big-number">200 000 MAD</div>
      <p class="hero-mechanism">Afflatus Consulting conçoit votre plan de formation professionnelle sur mesure et gère l'intégralité du dossier de financement CSF. Vous formez vos équipes, l'État rembourse.</p>
      <ul class="hero-usps">
        <li><span class="usp-icon">✓</span> Plan de formation personnalisé et adapté aux besoins spécifiques de votre entreprise</li>
        <li><span class="usp-icon">✓</span> Gestion administrative complète du dossier CSF — zéro effort de votre côté</li>
        <li><span class="usp-icon">✓</span> Formations dispensées par des experts terrain avec +15 ans d'expérience</li>
        <li><span class="usp-icon">✓</span> +120 entreprises ont déjà récupéré leur financement grâce à notre ingénierie de formation</li>
        <li><span class="usp-icon">✓</span> Remboursement jusqu'à 200 000 MAD/an par l'État — chaque année non utilisée est perdue</li>
      </ul>
      <div class="hero-stats">
        <div class="hero-stat"><div class="stat-num">120+</div><div class="stat-label">Entreprises financées</div></div>
        <div class="hero-stat"><div class="stat-num">200K</div><div class="stat-label">MAD max/an</div></div>
        <div class="hero-stat"><div class="stat-num">100%</div><div class="stat-label">Dossiers validés</div></div>
      </div>
      <div class="hero-ctas">
        <a href="#lead-form" class="btn btn-primary" data-cta="hero-primary" data-page="formation">Obtenir mon diagnostic gratuit</a>
      </div>
      <div class="hero-trust-signals">
        <span class="trust-badge">✅ +400 projets</span>
        <span class="trust-badge">✅ Réponse 24h</span>
      </div>
    </div>
    <div class="hero-lead-column" id="lead-form">
      <div class="hero-form-panel">
        <span class="hero-form-eyebrow">Estimation gratuite</span>
        <h3>Calculez votre montant remboursable</h3>
        <p class="form-subtitle">Réponse en 24h · Sans engagement</p>
        <form data-landing="Formation CSF">
          <input type="hidden" name="source" value="formation">
          <div class="form-group">
            <label for="fo-name">Nom complet</label>
            <input type="text" id="fo-name" name="Nom" placeholder="Votre nom" required>
          </div>
          <div class="form-group">
            <label for="fo-company">Entreprise</label>
            <input type="text" id="fo-company" name="Entreprise" placeholder="Nom de votre entreprise" required>
          </div>
          <div class="form-group">
            <label for="fo-sector">Secteur d'activité</label>
            <input type="text" id="fo-sector" name="Secteur" placeholder="Ex: Agroalimentaire, Industrie..." required>
          </div>
          <div class="form-group">
            <label for="fo-employees">Nombre d'employés à former</label>
            <select id="fo-employees" name="Employés" required>
              <option value="" disabled selected>Sélectionnez</option>
              <option value="1-5">1 à 5 employés</option>
              <option value="6-15">6 à 15 employés</option>
              <option value="16-30">16 à 30 employés</option>
              <option value="30+">Plus de 30 employés</option>
            </select>
          </div>
          <div class="form-group">
            <label for="fo-telephone">Téléphone</label>
            <input type="tel" id="fo-telephone" name="Telephone" placeholder="+212 6XX XXX XXX" required>
          </div>
          <button type="submit" class="btn-submit btn-primary" data-cta="form-submit" data-page="formation">Calculer mon remboursement →</button>
          <p class="form-trust">🔒 Confidentiel · Réponse sous 24h · Sans engagement</p>
        </form>
      </div>
    </div>
  </div>
</section>

<?php
$anatomy_logos_label = 'Ils nous font confiance';
$anatomy_logos_bg = 'white';
$anatomy_cert_logos = true;
$anatomy_cert_set = 'formation';
$anatomy_expertise_chips = ['CSF / OFPPT', 'Ingénierie pédagogique', 'Financement État', 'Formateurs terrain', 'Normes métiers'];
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<!-- ══ 4. VALEUR & MÉTHODE ══ -->
<section class="section section-problems anatomy-features" id="expertise">
  <div class="section-inner">
    <span class="section-label reveal">Notre expertise, votre succès</span>
    <h2 class="section-title reveal">Formation professionnelle : récupérez jusqu'à 200&nbsp;000 MAD par an via les CSF</h2>
    <p class="section-subtitle reveal">Afflatus conçoit votre plan sur mesure et montera le dossier OFPPT pour vous — plus de 120 entreprises accompagnées, 100&nbsp;% des dossiers validés sur notre suivi.</p>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Récupérez le financement public au lieu de tout payer de votre poche</h4>
        <p>Les CSF OFPPT peuvent couvrir une part majeure de vos plans de formation. Sans dossier monté correctement, ces budgets annuels ne sont pas utilisés.</p>
        <span class="problem-consequence">→ Jusqu'à 200&nbsp;000 MAD/an mobilisables</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Montez en compétences sans alourdir votre trésorerie</h4>
        <p>Hygiène, sécurité, management, qualité : nous alignons les programmes sur vos risques métier et sur l'éligibilité CSF.</p>
        <span class="problem-consequence">→ ROI double : RH + remboursement</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>Déléguez le dossier administratif à des spécialistes</h4>
        <p>Formulaires, pièces justificatives, calendrier OFPPT : nous gérons le cycle complet pour viser une validation du dossier.</p>
        <span class="problem-consequence">→ 100&nbsp;% des dossiers suivis validés (historique interne)</span>
      </div>
    </div>
  </div>
</section>

<section class="section section-solution">
  <div class="section-inner">
    <span class="section-label reveal">La méthode</span>
    <h2 class="section-title reveal">Notre processus en 4 étapes</h2>
    <div class="timeline">
      <div class="timeline-step reveal">
        <div class="timeline-num">1</div>
        <div class="timeline-content">
          <h4>Diagnostic &amp; calcul du remboursement</h4>
          <p class="timeline-duration">1 semaine · Gratuit</p>
          <p>Évaluation des besoins de formation, calcul du montant remboursable et identification des thématiques prioritaires.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">2</div>
        <div class="timeline-content">
          <h4>Ingénierie de formation</h4>
          <p class="timeline-duration">1–2 semaines</p>
          <p>Conception du plan de formation sur mesure, adapté à vos objectifs métier et éligible au financement CSF.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">3</div>
        <div class="timeline-content">
          <h4>Montage du dossier administratif</h4>
          <p class="timeline-duration">Gestion complète</p>
          <p>Préparation, soumission et suivi du dossier CSF auprès de l'OFPPT — vous n'avez rien à faire.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">4</div>
        <div class="timeline-content">
          <h4>Formation terrain &amp; remboursement</h4>
          <p class="timeline-duration">Selon le plan</p>
          <p>Formations dispensées par nos experts terrain directement sur site. Suivi post-formation et maximum de remboursement obtenu.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background: var(--color-bg-white); padding: 3rem var(--space-md);">
  <div class="section-inner">
    <div class="social-proof-premium reveal">
      <h3>Éligible aux Contrats Spéciaux de Formation de l'OFPPT</h3>
      <p>Plus de 15 ans d'ingénierie de formation et de montage de dossiers CSF — suivi interne : 100&nbsp;% des dossiers déposés validés.</p>
      <div class="sp-stats">
        <div class="sp-stat"><div class="sp-stat-num">15+</div><div class="sp-stat-label">Ans d'expérience CSF</div></div>
        <div class="sp-stat"><div class="sp-stat-num">120+</div><div class="sp-stat-label">Entreprises financées</div></div>
        <div class="sp-stat"><div class="sp-stat-num">100%</div><div class="sp-stat-label">Dossiers validés</div></div>
        <div class="sp-stat"><div class="sp-stat-num">200K</div><div class="sp-stat-label">MAD remboursés max</div></div>
      </div>
      <div class="badge-visual">
        <span style="font-size: 24px;">📋</span>
        CSF OFPPT · ORGANISME ÉLIGIBLE
      </div>
      <p style="margin-top: 16px; font-size: 13px; opacity: 0.6;">Cabinet certifié ISO 9001 et agréé CNDP.</p>
    </div>
  </div>
</section>

<!-- ══ 5. OFFRE CSF (comparatif) ══ -->
<section class="section anatomy-services-band offer-section" id="services" style="background: var(--color-bg-grey);">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Formation financée</p>
      <h2 class="section-title">Afflatus vs autres organismes</h2>
      <p class="section-subtitle" style="margin-left:auto;margin-right:auto">Comparer notre approche CSF et l'ingénierie de votre dossier.</p>
    </div>
    <div class="reveal" style="overflow-x: auto; margin-bottom: 2.5rem;">
      <table class="offer-table">
        <thead>
          <tr>
            <th>Critère</th>
            <th>Autres organismes</th>
            <th>Afflatus Consulting</th>
          </tr>
        </thead>
        <tbody>
          <tr><td>Plan de formation sur mesure</td><td class="cross">❌ Catalogue générique</td><td class="check">✅ 100% personnalisé</td></tr>
          <tr><td>Ingénierie financière CSF</td><td class="cross">❌ Non proposé</td><td class="check">✅ Dossier clé en main</td></tr>
          <tr><td>Gestion administrative complète</td><td class="cross">❌ À votre charge</td><td class="check">✅ Prise en charge totale</td></tr>
          <tr><td>Formation terrain (sur site)</td><td class="cross">❌ En salle uniquement</td><td class="check">✅ Sur site + adaptation process</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<section class="section anatomy-faq section-faq">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Vos questions</p>
      <h2 class="section-title">Pourquoi Afflatus Consulting Group&nbsp;?</h2>
    </div>
    <div class="faq-accordion">
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Qu'est-ce que les Contrats Spéciaux de Formation&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Programme OFPPT pouvant rembourser jusqu'à 200&nbsp;000 MAD par an. L'enveloppe non utilisée est perdue chaque année.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Mon entreprise est-elle éligible&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Les sociétés assujetties à la TFP sont en principe éligibles. Nous vérifions votre cas au diagnostic gratuit.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Délai de remboursement&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Souvent 2 à 4 mois après validation OFPPT, selon calendrier et complétude du dossier.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Que garantissez-vous sur le dossier CSF&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Si le dossier n'est pas validé après notre montage, nous reprenons les corrections sans frais. Historique interne : 100&nbsp;% de dossiers déposés validés.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Quels thèmes de formation couvrez-vous&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Management, sécurité, hygiène, qualité, soft skills et autres modules adaptés à votre secteur — toujours calés sur l'éligibilité CSF.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="anatomy-stats-band">
  <div class="metrics-bar theme-dark reveal">
    <div class="metric-item"><div class="metric-num" data-count="120" data-suffix="+">0</div><div class="metric-label">Entreprises financées</div></div>
    <div class="metric-item"><div class="metric-num" data-count="200" data-suffix="K">0</div><div class="metric-label">MAD max / an</div></div>
    <div class="metric-item"><div class="metric-num" data-count="100" data-suffix="%">0%</div><div class="metric-label">Dossiers validés</div></div>
    <div class="metric-item"><div class="metric-num" data-count="15" data-suffix="+">0</div><div class="metric-label">Ans CSF</div></div>
  </div>
</section>

<section class="section anatomy-testimonials">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Résultats</p>
      <h2 class="section-title">Ce que disent nos clients</h2>
    </div>
    <div class="anatomy-testimonial-grid">
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/aicha.png" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">Agroalimentaire — Casablanca</p>
        <p class="anatomy-t-role">DRH</p>
        <p class="anatomy-t-quote">«&nbsp;18 personnes formées — <strong>160&nbsp;000 MAD remboursés</strong> via CSF en une année.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/pla.png" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">Industrie plastique</p>
        <p class="anatomy-t-role">Direction générale</p>
        <p class="anatomy-t-quote">«&nbsp;Dossier OFPPT pris en charge de bout en bout — <strong>validation en moins de 30 jours</strong>.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/logo_traspex_mining.jpg" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">Secteur minier</p>
        <p class="anatomy-t-role">Responsable formation</p>
        <p class="anatomy-t-quote">«&nbsp;Plan aligné CSF — <strong>−40&nbsp;% de charge admin</strong> sur notre équipe RH.&nbsp;»</p>
      </div>
    </div>
  </div>
</section>

<section class="section anatomy-team">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Notre équipe</p>
      <h2 class="section-title">Les experts derrière Afflatus</h2>
    </div>
    <div class="anatomy-team-grid">
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Ingénierie formation</h3>
        <p class="role">Conception des parcours</p>
        <p>Plans sur mesure, objectifs métier et éligibilité CSF.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Administration CSF</h3>
        <p class="role">Dossiers OFPPT</p>
        <p>Montage, suivi et corrections jusqu'à validation.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Formateurs terrain</h3>
        <p class="role">Animation sur site</p>
        <p>Experts avec plus de 15 ans d'expérience sectorielle.</p>
      </div>
    </div>
  </div>
</section>

<?php
$anatomy_logos_label = 'Ils nous font confiance';
$anatomy_logos_bg = 'white';
$anatomy_cert_logos = true;
$anatomy_cert_set = 'formation';
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<?php
$anatomy_cta_headline = 'Ne laissez plus 200 000 MAD sur la table';
$anatomy_cta_sub = 'Calculez votre montant remboursable et lancez votre plan de formation — estimation gratuite sous 24h.';
$anatomy_cta_btn = 'Calculer mon remboursement';
$anatomy_cta_href = '#lead-form';
require __DIR__ . '/../includes/partials/anatomy-bottom-cta.php';
?>

<!-- ══ COOKIE CONSENT ══ -->
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
