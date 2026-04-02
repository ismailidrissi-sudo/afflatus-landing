<?php
require_once __DIR__ . '/../config.php';

$page_title = "Certification BRCGS, IFS & FSSC 22000 au Maroc";
$page_description = "Le seul consultant BRCGS officiellement approuvé en Afrique. Certification BRCGS Food Safety, IFS, FSSC 22000 — 98% de succès première tentative en 90 jours.";
$page_slug = "food-safety";
$page_css = 'brand-pages';
$gads_conversion_label = GADS_CONVERSION_LABEL_FOOD;
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
    $sticky_brcgs_text = 'Seul consultant BRCGS officiellement approuvé au Maroc & en Afrique';
    require __DIR__ . '/../includes/partials/sticky-brcgs-claim.php';
  ?></span>
  <a href="#lead-form" class="btn-sticky" data-cta="sticky-cta" data-page="food-safety">Réserver maintenant</a>
</div>

<?php require __DIR__ . '/../includes/nav.php'; ?>

<!-- ══ HERO ══ -->
<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-tag">BRCGS · IFS · FSSC 22000 · Food Safety</span>
      <h1>Votre certification <em>en 90 jours</em></h1>
      <p class="hero-mechanism">Le seul consultant BRCGS approuvé en Afrique accompagne votre entreprise de la Gap Analysis à la certification — avec un taux de succès de 98% à la première tentative.</p>
      <ul class="hero-usps">
        <li><span class="usp-icon">✓</span> Gap Analysis complète offerte (valeur 8 000 MAD) — diagnostic point par point vs exigences BRCGS v9</li>
        <li><span class="usp-icon">✓</span> Accompagnement BRCGS Food Safety, BRCGS Packaging, IFS Food, FSSC 22000 et ISO 22000</li>
        <li><span class="usp-icon">✓</span> Méthode en 4 étapes testée sur +400 projets réalisés au Maroc et en Afrique</li>
        <li><span class="usp-icon">✓</span> Taux de succès 98% à la première tentative d'audit — pas de seconde chance nécessaire</li>
        <li><span class="usp-icon">✓</span> Formation terrain du personnel finançable à 100% par l'État (jusqu'à 200 000 MAD)</li>
      </ul>
      <div class="hero-stats">
        <div class="hero-stat"><div class="stat-num">90</div><div class="stat-label">Jours en moyenne</div></div>
        <div class="hero-stat"><div class="stat-num">98%</div><div class="stat-label">Taux de succès</div></div>
        <div class="hero-stat"><div class="stat-num">+400</div><div class="stat-label">Projets</div></div>
        <div class="hero-stat"><div class="stat-num">130+</div><div class="stat-label">Pays BRCGS</div></div>
      </div>
      <div class="hero-ctas">
        <a href="#lead-form" class="btn btn-primary" data-cta="hero-primary" data-page="food-safety">Obtenir mon diagnostic gratuit</a>
      </div>
      <div class="hero-trust-signals">
        <span class="trust-badge">✅ +400 projets</span>
        <span class="trust-badge">✅ Réponse 24h</span>
      </div>
    </div>
    <div class="hero-lead-column" id="lead-form">
      <div class="hero-form-panel">
        <span class="hero-form-eyebrow">Diagnostic gratuit</span>
        <h3>Identifiez vos 3 écarts prioritaires</h3>
        <p class="form-subtitle">Session de 45 minutes · Réponse sous 24h</p>
        <form data-landing="Food Safety BRCGS" method="post" action="/includes/form-handler.php">
          <input type="hidden" name="source" value="food-safety">
          <div class="form-group">
            <label for="fs-name">Nom complet</label>
            <input type="text" id="fs-name" name="Nom" placeholder="Votre nom" required>
          </div>
          <div class="form-group">
            <label for="fs-company">Entreprise</label>
            <input type="text" id="fs-company" name="Entreprise" placeholder="Nom de votre entreprise" required>
          </div>
          <div class="form-group">
            <label for="fs-sector">Secteur</label>
            <select id="fs-sector" name="Secteur" required>
              <option value="" disabled selected>Sélectionnez votre secteur</option>
              <option value="Industrie alimentaire">Industrie alimentaire</option>
              <option value="Emballage">Emballage</option>
              <option value="Distribution alimentaire">Distribution alimentaire</option>
              <option value="Agriculture / Pêche">Agriculture / Pêche</option>
              <option value="Autre">Autre</option>
            </select>
          </div>
          <div class="form-group">
            <label for="fs-certification">Certification visée</label>
            <select id="fs-certification" name="Certification" required>
              <option value="" disabled selected>Sélectionnez la certification</option>
              <option value="BRCGS Food Safety">BRCGS Food Safety</option>
              <option value="BRCGS Packaging">BRCGS Packaging</option>
              <option value="IFS Food">IFS Food</option>
              <option value="FSSC 22000">FSSC 22000</option>
              <option value="ISO 22000">ISO 22000</option>
              <option value="Je ne sais pas">Je ne sais pas</option>
            </select>
          </div>
          <div class="form-group">
            <label for="fs-telephone">Téléphone</label>
            <input type="tel" id="fs-telephone" name="Telephone" placeholder="+212 6XX XXX XXX" required>
          </div>
          <button type="submit" class="btn-submit btn-primary" data-cta="form-submit" data-page="food-safety">Réserver mon diagnostic →</button>
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
$anatomy_cert_set = 'food-safety';
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<!-- ══ 4. VALEUR & MÉTHODE ══ -->
<section class="section section-problems anatomy-features" id="expertise">
  <div class="section-inner">
    <span class="section-label reveal">Notre expertise, votre succès</span>
    <h2 class="section-title reveal">Sécurité alimentaire : passez l'audit sans improvisation</h2>
    <p class="section-subtitle reveal">Nous structurons HACCP, dossiers et fournisseurs pour viser la certification BRCGS, IFS ou FSSC 22000 en première tentative — comme sur plus de 400 missions.</p>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Un plan HACCP et une documentation qui tiennent face à l'auditeur</h4>
        <p>Analyse des dangers, CCP et enregistrements alignés sur BRCGS v9 — pour éviter les non-conformités majeures liées au plan HACCP.</p>
        <span class="problem-consequence">→ Moins de risques au jour J</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Des training records traçables et conformes</h4>
        <p>Nous formalisons preuves de formation, compétences et contenus — un point d'audit souvent bloquant.</p>
        <span class="problem-consequence">→ Dossier RH prêt pour l'audit</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>Un processus fournisseurs qui rassure vos clients export</h4>
        <p>Approbation, évaluation et enregistrements fournisseurs structurés — critère fréquent BRCGS / IFS.</p>
        <span class="problem-consequence">→ Chaîne d'approvisionnement sécurisée</span>
      </div>
    </div>
  </div>
</section>

<section class="section section-solution">
  <div class="section-inner">
    <span class="section-label reveal">La méthode</span>
    <h2 class="section-title reveal">La méthode Afflatus en 4 étapes</h2>
    <div class="timeline">
      <div class="timeline-step reveal">
        <div class="timeline-num">1</div>
        <div class="timeline-content">
          <h4>Gap Analysis complète</h4>
          <p class="timeline-duration">48h · Offerte</p>
          <p>Diagnostic point par point versus les exigences de la norme visée. Identification de tous les écarts avec scoring de criticité.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">2</div>
        <div class="timeline-content">
          <h4>Plan d'action &amp; Documentation</h4>
          <p class="timeline-duration">2 semaines</p>
          <p>Construction documentaire complète : manuels, procédures, plans HACCP, enregistrements, fiches fournisseurs.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">3</div>
        <div class="timeline-content">
          <h4>Mise en conformité terrain et documentaire</h4>
          <p class="timeline-duration">6–8 semaines</p>
          <p>Formation des opérateurs, mise en place des bonnes pratiques, vérification terrain de chaque exigence normative.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">4</div>
        <div class="timeline-content">
          <h4>Audit blanc + Certification</h4>
          <p class="timeline-duration">Taux 98% — 1ère tentative</p>
          <p>Simulation complète d'audit, correction des derniers écarts, accompagnement le jour J.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" style="background: var(--color-bg-white); padding: 3rem var(--space-md);">
  <div class="section-inner">
    <div class="social-proof-premium reveal">
      <h3>Premier consultant BRCGS officiellement reconnu en Afrique</h3>
      <p>Ismail Idrissi est inscrit au registre mondial des consultants BRCGS — accréditation vérifiable publiquement.</p>
      <div class="social-proof-premium-cta-row">
        <a href="https://www.brcgs.com/partners/find-a-consultant/list-updated/ismail-idrissi/" target="_blank" rel="noopener" class="verify-link">→ Vérifier sur le registre officiel BRCGS</a>
        <img src="/assets/img/brcgs-consultant-approuve-maroc-afrique.jpg" alt="BRCGS® Approved Consultant — badge officiel" class="social-proof-brcgs-img" width="690" height="214" loading="lazy" decoding="async">
      </div>
      <p style="margin-top: 16px; font-size: 13px; opacity: 0.6;">Cabinet certifié ISO 9001 et agréé CNDP.</p>
    </div>
  </div>
</section>

<!-- ══ 5. FAQ ══ -->
<section class="section anatomy-faq section-faq">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Vos questions</p>
      <h2 class="section-title">Pourquoi Afflatus Consulting Group&nbsp;?</h2>
    </div>
    <div class="faq-accordion">
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Pourquoi choisir le seul consultant BRCGS approuvé en Afrique&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>L'inscription au registre BRCGS atteste des compétences auditées par l'organisme certificateur. C'est une garantie méthodologique pour vos audits Food Safety et Packaging.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">BRCGS ou IFS pour mon export&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Les deux sont reconnus GFSI. Le choix dépend de vos donneurs d'ordre (UK/international vs France/Allemagne). Nous vous orientons selon vos contrats.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">La Gap Analysis est-elle vraiment offerte&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Oui, sans engagement : rapport d'écarts et plan d'action priorisé. Vous savez où vous allez avant de vous engager.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Que couvre votre garantie certification&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Après accompagnement complet, si l'audit échoue, nous reprenons les actions correctives sans frais jusqu'à l'obtention du grade — avec 98&nbsp;% de réussite en première tentative, c'est rare.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Peut-on financer la formation des opérateurs&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Oui, les formations terrain peuvent être éligibles aux CSF OFPPT jusqu'à 100&nbsp;% selon dossier. Nous intégrons cette dimension dès la phase de plan.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ 7. STATS ══ -->
<section class="anatomy-stats-band">
  <div class="metrics-bar theme-dark reveal">
    <div class="metric-item"><div class="metric-num" data-count="90">0</div><div class="metric-label">Jours délai moyen</div></div>
    <div class="metric-item"><div class="metric-num" data-count="98" data-suffix="%">0%</div><div class="metric-label">Taux de succès</div></div>
    <div class="metric-item"><div class="metric-num" data-count="400" data-prefix="+">0</div><div class="metric-label">Projets</div></div>
    <div class="metric-item"><div class="metric-num" data-count="8" data-suffix="+">0</div><div class="metric-label">Ans terrain</div></div>
    <div class="metric-item"><div class="metric-num" data-count="130" data-suffix="+">0</div><div class="metric-label">Pays BRCGS</div></div>
  </div>
</section>

<!-- ══ 8. TÉMOIGNAGES ══ -->
<section class="section anatomy-testimonials">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Résultats clients</p>
      <h2 class="section-title">Ce que disent nos clients</h2>
    </div>
    <div class="anatomy-testimonial-grid">
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/52.png" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">International Paper Maroc</p>
        <p class="anatomy-t-role">Emballage — leader mondial</p>
        <p class="anatomy-t-quote">«&nbsp;Après deux échecs, <strong>certification BRCGS Packaging en 1<sup>re</sup> tentative en 87 jours</strong> — gap analysis, plan 60 jours et formation de 12 opérateurs.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/aicha.png" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">Atlantic Conserves</p>
        <p class="anatomy-t-role">Industrie agroalimentaire</p>
        <p class="anatomy-t-quote">«&nbsp;Accompagnement exigeant sur la documentation HACCP — <strong>100&nbsp;% des audits clients export validés</strong> la même année.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/atc.png" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">Industriel FMCG</p>
        <p class="anatomy-t-role">Responsable qualité — Maroc</p>
        <p class="anatomy-t-quote">«&nbsp;Préparation audit en <strong>délai contraint (21 jours)</strong> : priorisation des écarts majeurs et coaching terrain des équipes.&nbsp;»</p>
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
    </div>
    <div class="anatomy-team-grid">
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Ismail Idrissi</h3>
        <p class="role">Consultant BRCGS® Approuvé · CEO</p>
        <p>Premier consultant BRCGS reconnu en Afrique — pilotage stratégique des missions certification.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Experts Food Safety</h3>
        <p class="role">HACCP, PRP &amp; audits blancs</p>
        <p>Mise en conformité terrain, formation opérateurs et simulation d'audit.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Documentation &amp; système</h3>
        <p class="role">Manuels, procédures, enregistrements</p>
        <p>Construction des dossiers et preuves attendues par BRCGS, IFS et FSSC 22000.</p>
      </div>
    </div>
  </div>
</section>

<?php
$anatomy_logos_label = 'Ils nous font confiance';
$anatomy_logos_bg = 'white';
$anatomy_cert_logos = true;
$anatomy_cert_set = 'food-safety';
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<?php
$anatomy_cta_headline = 'Prêt à décrocher votre certification ?';
$anatomy_cta_sub = 'Réservez votre diagnostic gratuit avec le seul consultant BRCGS approuvé en Afrique — réponse sous 24h.';
$anatomy_cta_btn = 'Réserver mon diagnostic gratuit';
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
