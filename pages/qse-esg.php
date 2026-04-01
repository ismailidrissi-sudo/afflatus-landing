<?php
require_once __DIR__ . '/../config.php';

$page_title = "Consulting QSE, ESG & Due Diligence au Maroc";
$page_description = "Afflatus Consulting implémente vos systèmes QSE (ISO 9001, 14001, 45001) et structure vos démarches ESG — 98% de succès à la première tentative.";
$page_slug = "qse-esg";
$page_css = 'brand-pages';
$gads_conversion_label = GADS_CONVERSION_LABEL_QSE;
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
  <span class="sticky-text"><?php
    $sticky_brcgs_text = '🏆 Seul consultant BRCGS approuvé au Maroc & en Afrique — Systèmes QSE & ESG pour marchés internationaux';
    require __DIR__ . '/../includes/partials/sticky-brcgs-claim.php';
  ?></span>
  <a href="#lead-form" class="btn-sticky" data-cta="sticky-cta" data-page="qse-esg">Demander un devis</a>
</div>

<?php require __DIR__ . '/../includes/nav.php'; ?>

<!-- ══ HERO ══ -->
<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-tag">QSE · ESG · ISO · Due Diligence · Conformité internationale</span>
      <h1>Votre système QSE & ESG, <em>construit pour durer</em> et ouvrir de nouveaux marchés.</h1>
      <p class="hero-mechanism">Afflatus Consulting implémente des systèmes de management Qualité-Sécurité-Environnement et structure vos démarches ESG — pour que votre conformité devienne un avantage compétitif réel, pas une contrainte administrative.</p>
      <ul class="hero-usps">
        <li><span class="usp-icon">✓</span> ISO 9001, ISO 14001, ISO 45001 — implémentation complète & accompagnement jusqu'à certification</li>
        <li><span class="usp-icon">✓</span> Stratégie ESG structurée avec reporting conforme GRI / TCFD pour investisseurs et donneurs d'ordre</li>
        <li><span class="usp-icon">✓</span> Due Diligence fournisseur : audits SMETA, amfori BSCI, conformité sociale & environnementale</li>
        <li><span class="usp-icon">✓</span> Méthode en 4 phases — du diagnostic gap analysis à la certification réussie en 90 jours</li>
        <li><span class="usp-icon">✓</span> 98% de taux de succès à la première tentative d'audit de certification</li>
      </ul>
      <div class="hero-stats">
        <div class="hero-stat"><div class="stat-num">+400</div><div class="stat-label">Projets</div></div>
        <div class="hero-stat"><div class="stat-num">98%</div><div class="stat-label">Taux de succès</div></div>
        <div class="hero-stat"><div class="stat-num">90j</div><div class="stat-label">Délai moyen</div></div>
      </div>
      <div class="hero-ctas">
        <a href="#lead-form" class="btn btn-primary" data-cta="hero-primary" data-page="qse-esg">Obtenir mon diagnostic gratuit</a>
      </div>
      <div class="hero-trust-signals">
        <span class="trust-badge">✅ +400 projets</span>
        <span class="trust-badge">✅ Réponse 24h</span>
      </div>
    </div>
    <div class="hero-lead-column" id="lead-form">
      <div class="hero-form-panel">
        <span class="hero-form-eyebrow">Diagnostic offert</span>
        <h3>Obtenez votre feuille de route QSE/ESG</h3>
        <p class="form-subtitle">Réponse sous 24h · Sans engagement</p>
        <form data-landing="QSE ESG Due Diligence">
          <input type="hidden" name="source" value="qse-esg">
          <div class="form-group">
            <label for="qse-name">Nom complet</label>
            <input type="text" id="qse-name" name="Nom" placeholder="Votre nom" required>
          </div>
          <div class="form-group">
            <label for="qse-company">Entreprise</label>
            <input type="text" id="qse-company" name="Entreprise" placeholder="Nom de votre entreprise" required>
          </div>
          <div class="form-group">
            <label for="qse-need">Besoin principal</label>
            <select id="qse-need" name="Besoin" required>
              <option value="" disabled selected>Sélectionnez votre besoin</option>
              <option value="ISO 9001">ISO 9001</option>
              <option value="ISO 14001">ISO 14001</option>
              <option value="ISO 45001">ISO 45001</option>
              <option value="Système intégré QSE">Système intégré QSE</option>
              <option value="Stratégie ESG & Reporting">Stratégie ESG & Reporting</option>
              <option value="Audit interne / Due Diligence">Audit interne / Due Diligence</option>
              <option value="SMETA / amfori BSCI">SMETA / amfori BSCI</option>
              <option value="Je ne sais pas encore">Je ne sais pas encore</option>
            </select>
          </div>
          <div class="form-group">
            <label for="qse-size">Taille entreprise</label>
            <input type="text" id="qse-size" name="Taille" placeholder="Nombre d'employés" required>
          </div>
          <div class="form-group">
            <label for="qse-telephone">Téléphone</label>
            <input type="tel" id="qse-telephone" name="Telephone" placeholder="+212 6XX XXX XXX" required>
          </div>
          <button type="submit" class="btn-submit btn-primary" data-cta="form-submit" data-page="qse-esg">Obtenir ma feuille de route →</button>
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
$anatomy_cert_set = 'qse-esg';
$anatomy_expertise_chips = ['ISO 9001 / 14001 / 45001', 'ESG & reporting', 'SMETA / BSCI', 'Due diligence', 'Certification'];
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<!-- ══ 4. VALEUR & MÉTHODE ══ -->
<section class="section section-problems anatomy-features" id="expertise">
  <div class="section-inner">
    <span class="section-label reveal">Notre expertise, votre succès</span>
    <h2 class="section-title reveal">Conseil QSE et démarche ESG : une méthode éprouvée sur plus de 400 projets</h2>
    <p class="section-subtitle reveal">Nous transformons les exigences ISO et ESG en leviers commerciaux — avec un taux de réussite de 98&nbsp;% à la première tentative d'audit.</p>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Débloquez les marchés qui exigent ISO 9001, 14001 ou 45001</h4>
        <p>Vos donneurs d'ordre demandent un système de management certifié. Nous implémentons les exigences et vous préparons jusqu'au jour de l'audit.</p>
        <span class="problem-consequence">→ Moins d'exclusions sur les AO</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Rassurez investisseurs et banques avec un reporting ESG structuré</h4>
        <p>Cadre GRI / TCFD, matérialité et indicateurs : nous documentons votre stratégie ESG pour passer les phases de due diligence.</p>
        <span class="problem-consequence">→ Dossiers financement plus solides</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>Réussissez SMETA, amfori BSCI et audits fournisseur</h4>
        <p>Préparation terrain et dossiers preuves pour sécuriser votre référencement dans les chaînes d'approvisionnement internationales.</p>
        <span class="problem-consequence">→ Chaîne d'approvisionnement préservée</span>
      </div>
    </div>
  </div>
</section>

<section class="section section-solution">
  <div class="section-inner">
    <span class="section-label reveal">La méthode</span>
    <h2 class="section-title reveal">La méthode Afflatus en 4 phases</h2>
    <p class="section-subtitle reveal" style="color: rgba(255,255,255,.6)">Du diagnostic à la certification — un processus éprouvé sur +400 projets.</p>
    <div class="timeline">
      <div class="timeline-step reveal">
        <div class="timeline-num">1</div>
        <div class="timeline-content">
          <h4>Diagnostic &amp; Gap Analysis</h4>
          <p class="timeline-duration">2 jours · Offert</p>
          <p>Évaluation complète de votre système existant versus les exigences normatives. Identification précise des écarts prioritaires.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">2</div>
        <div class="timeline-content">
          <h4>Plan d'action sur mesure</h4>
          <p class="timeline-duration">1 semaine</p>
          <p>Feuille de route détaillée avec actions, responsables, délais et ressources nécessaires pour chaque écart identifié.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">3</div>
        <div class="timeline-content">
          <h4>Mise en conformité terrain et documentaire</h4>
          <p class="timeline-duration">6–10 semaines</p>
          <p>Accompagnement opérationnel : documentation, procédures, formation des équipes, mise en place des processus.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">4</div>
        <div class="timeline-content">
          <h4>Audit blanc + Certification</h4>
          <p class="timeline-duration">Taux 98% — 1ère tentative</p>
          <p>Simulation d'audit pour éliminer les derniers écarts, puis accompagnement le jour J de l'audit de certification.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ 5. FAQ / POURQUOI NOUS ══ -->
<section class="section anatomy-faq section-faq">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Vos questions</p>
      <h2 class="section-title">Pourquoi Afflatus Consulting Group&nbsp;?</h2>
    </div>
    <div class="faq-accordion">
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Qu'est-ce qui vous différencie des autres cabinets&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Nous combinons auditeurs IRCA, expérience terrain au Maroc et en Afrique, et un taux documenté de 98&nbsp;% de réussite à la première tentative sur nos missions d'accompagnement certification complètes.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Combien de temps pour obtenir la certification ISO 9001&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>En moyenne 90 jours avec notre méthode en 4 phases. Le délai dépend de la taille de l'entreprise et de la maturité de vos processus.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Le diagnostic initial est-il vraiment gratuit&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Oui. Le Gap Analysis de 2 jours est offert sans engagement et livre une feuille de route priorisée.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Que se passe-t-il si l'audit échoue après votre accompagnement&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Avec 98&nbsp;% de succès en première tentative, c'est rare. Si cela arrive après un accompagnement complet, nous reprenons les actions correctives sans frais supplémentaires jusqu'à l'obtention de la certification.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Intervenez-vous hors du Maroc&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Oui. Nos consultants interviennent en français, anglais et arabe — Maroc, Afrique et missions internationales.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ 7. RÉSULTATS CHIFFRÉS ══ -->
<section class="anatomy-stats-band">
  <div class="metrics-bar theme-dark reveal">
    <div class="metric-item"><div class="metric-num" data-count="90">0</div><div class="metric-label">Jours délai moyen</div></div>
    <div class="metric-item"><div class="metric-num" data-count="98" data-suffix="%">0%</div><div class="metric-label">Taux de succès 1<sup>re</sup> tentative</div></div>
    <div class="metric-item"><div class="metric-num" data-count="400" data-prefix="+">0</div><div class="metric-label">Projets réalisés</div></div>
    <div class="metric-item"><div class="metric-num" data-count="5">0</div><div class="metric-label">Normes couvertes</div></div>
  </div>
</section>

<!-- ══ 8. TÉMOIGNAGES ══ -->
<section class="section anatomy-testimonials">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Ils nous font confiance</p>
      <h2 class="section-title">Ce que disent nos clients</h2>
    </div>
    <div class="anatomy-testimonial-grid">
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/aig.png" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">Aiguebelle</p>
        <p class="anatomy-t-role">Leader marocain de la chocolaterie</p>
        <p class="anatomy-t-quote">«&nbsp;Partenariat depuis plus de <strong>6 ans</strong> pour l'ISO 9001 — qualité et exigences des marchés les plus stricts.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/52.png" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">International Paper Maroc</p>
        <p class="anatomy-t-role">Direction industrielle — emballage</p>
        <p class="anatomy-t-quote">«&nbsp;Accompagnement structuré — <strong>certification BRCGS Packaging en 1<sup>re</sup> tentative</strong>, après échecs antérieurs sans appui externe.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/pla.png" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">Industrie graphique &amp; packaging</p>
        <p class="anatomy-t-role">Responsable QSE — Maroc</p>
        <p class="anatomy-t-quote">«&nbsp;Méthode claire sur les exigences QSE et audits clients — <strong>−30&nbsp;% de temps</strong> sur la préparation documentaire.&nbsp;»</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ 9. ÉQUIPE ══ -->
<section class="section anatomy-team">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Les experts derrière Afflatus</p>
      <h2 class="section-title">Notre équipe</h2>
      <p class="section-subtitle" style="margin-left:auto;margin-right:auto">Auditeurs IRCA, consultants QSE/ESG et chefs de mission certification — une équipe terrain, pas seulement du conseil au PowerPoint.</p>
    </div>
    <div class="anatomy-team-grid">
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Auditeurs IRCA</h3>
        <p class="role">Audits internes &amp; fournisseurs</p>
        <p>Plus de 10 ans d'expérience sur ISO 9001, 14001, 45001 et chaînes d'approvisionnement.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Consultants ESG</h3>
        <p class="role">Reporting &amp; due diligence</p>
        <p>Structuration des enjeux ESG, matérialité et alignement avec les attentes investisseurs.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Chefs de mission</h3>
        <p class="role">Certification &amp; mise en conformité</p>
        <p>Pilotage bout en bout jusqu'à l'audit de certification — objectif 98&nbsp;% en première tentative.</p>
      </div>
    </div>
  </div>
</section>

<?php
$anatomy_logos_label = 'Ils nous font confiance';
$anatomy_logos_bg = 'white';
$anatomy_cert_logos = true;
$anatomy_cert_set = 'qse-esg';
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<?php
$anatomy_cta_headline = 'Prêt à transformer votre conformité en avantage compétitif ?';
$anatomy_cta_sub = 'Contactez-nous pour un diagnostic gratuit et votre feuille de route QSE/ESG personnalisée — réponse sous 24h.';
$anatomy_cta_btn = 'Obtenir mon diagnostic gratuit';
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
