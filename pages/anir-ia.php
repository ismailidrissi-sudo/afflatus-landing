<?php
require_once __DIR__ . '/../config.php';

$page_title = "Anir.io — Plateforme IA Agentique Entreprise";
$page_description = "Anir.io by Afflatus : agents IA autonomes pour automatiser vos processus. Governance-first, anti-hallucination, intégration native ERP/CRM.";
$page_slug = "anir-ia";
$page_css = 'brand-pages';
$gads_conversion_label = GADS_CONVERSION_LABEL_ANIR;
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
  <span class="sticky-text">🤖 Anir.io — Plateforme d'IA Agentique Entreprise · Automatisez vos processus avec des agents intelligents</span>
  <a href="#lead-form" class="btn-sticky" data-cta="sticky-cta" data-page="anir-ia">Démo gratuite</a>
</div>

<?php require __DIR__ . '/../includes/nav.php'; ?>

<!-- ══ HERO ══ -->
<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-content">
      <span class="hero-tag">IA Agentique · Agents Autonomes · Anir.io by Afflatus</span>
      <h1>Vos agents IA travaillent <em>pendant que vous décidez</em></h1>
      <p class="hero-mechanism">Anir.io est la plateforme d'IA agentique entreprise développée par Afflatus Consulting Group. Des agents intelligents qui analysent, décident et agissent — intégrés à vos systèmes existants, gouvernés par vos règles métier.</p>
      <ul class="hero-usps">
        <li><span class="usp-icon">✓</span> Plateforme Governance-First — chaque agent opère sous contrôle strict de vos règles métier et politiques</li>
        <li><span class="usp-icon">✓</span> Architecture 3 niveaux d'agents (Task, Workflow, Strategic) adaptée à votre complexité opérationnelle</li>
        <li><span class="usp-icon">✓</span> Anti-hallucination intégrée — vérification multi-sources pour fiabiliser les décisions</li>
        <li><span class="usp-icon">✓</span> Intégration native ERP, CRM, bases documentaires — déploiement en semaines</li>
        <li><span class="usp-icon">✓</span> RBAC 5 rôles — contrôle granulaire des permissions</li>
      </ul>
      <div class="hero-stats">
        <div class="hero-stat"><div class="stat-num">-70%</div><div class="stat-label">Temps d'analyse (cible projet)</div></div>
        <div class="hero-stat"><div class="stat-num">99.2%</div><div class="stat-label">Précision cible agents</div></div>
        <div class="hero-stat"><div class="stat-num">4 sem.</div><div class="stat-label">Déploiement moyen</div></div>
      </div>
      <div class="hero-ctas">
        <a href="#lead-form" class="btn btn-primary" data-cta="hero-primary" data-page="anir-ia">Réserver ma démo gratuite</a>
      </div>
      <div class="hero-trust-signals">
        <span class="trust-badge">✅ +400 projets</span>
        <span class="trust-badge">✅ Réponse 24h</span>
      </div>
    </div>
    <div class="hero-lead-column" id="lead-form">
      <div class="hero-form-panel">
        <span class="hero-form-eyebrow">Démo 30 min</span>
        <h3>Réservez votre démo Anir.io</h3>
        <p class="form-subtitle">Découvrez comment l'IA agentique transforme vos opérations · Réponse sous 24h</p>
        <form data-landing="Anir.io IA Agentique" method="post" action="/includes/form-handler.php">
          <input type="hidden" name="source" value="anir-ia">
          <div class="form-group">
            <label for="ai-name">Nom complet</label>
            <input type="text" id="ai-name" name="Nom" placeholder="Votre nom" required>
          </div>
          <div class="form-group">
            <label for="ai-email">Email</label>
            <input type="email" id="ai-email" name="Email" placeholder="vous@entreprise.com" required>
          </div>
          <div class="form-group">
            <label for="ai-company">Entreprise</label>
            <input type="text" id="ai-company" name="Entreprise" placeholder="Nom de votre entreprise" required>
          </div>
          <div class="form-group">
            <label for="ai-cnss">Numéro d'affiliation CNSS <span class="form-optional">(optionnel)</span></label>
            <input type="text" id="ai-cnss" name="CNSS" placeholder="N° d'affiliation CNSS" inputmode="numeric">
          </div>
          <div class="form-group">
            <label for="ai-sector">Secteur</label>
            <select id="ai-sector" name="Secteur" required>
              <option value="" disabled selected>Sélectionnez</option>
              <option value="Industrie">Industrie</option>
              <option value="Services">Services</option>
              <option value="Finance">Finance</option>
              <option value="Logistique">Logistique</option>
              <option value="Agroalimentaire">Agroalimentaire</option>
              <option value="Autre">Autre</option>
            </select>
          </div>
          <div class="form-group">
            <label for="ai-usecase">Cas d'usage principal</label>
            <select id="ai-usecase" name="Cas d'usage" required>
              <option value="" disabled selected>Sélectionnez</option>
              <option value="Automatisation documentaire">Automatisation documentaire</option>
              <option value="Analyse de données">Analyse de données</option>
              <option value="Gouvernance & conformité">Gouvernance & conformité</option>
              <option value="Support client intelligent">Support client intelligent</option>
              <option value="Autre">Autre</option>
            </select>
          </div>
          <div class="form-group">
            <label for="ai-telephone">Téléphone</label>
            <input type="tel" id="ai-telephone" name="Telephone" placeholder="+212 6XX XXX XXX" required>
          </div>
          <button type="submit" class="btn-submit btn-primary" data-cta="form-submit" data-page="anir-ia">Réserver ma démo gratuite →</button>
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
$anatomy_cert_set = 'anir-ia';
$anatomy_expertise_chips = ['IA agentique', 'Gouvernance', 'ERP / CRM', 'RBAC', 'Human-in-the-loop'];
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<section class="section section-problems anatomy-features" id="expertise">
  <div class="section-inner">
    <span class="section-label reveal">Notre expertise, votre succès</span>
    <h2 class="section-title reveal">IA agentique : automatisez sans perdre le contrôle</h2>
    <p class="section-subtitle reveal">Anir.io réduit le travail manuel sur les documents et les contrôles, avec gouvernance, traçabilité et intégration à vos systèmes existants.</p>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Libérez vos équipes des tâches documentaires répétitives</h4>
        <p>Les agents traitent extraction, contrôle et routage selon vos règles — vos analystes se concentrent sur les exceptions.</p>
        <span class="problem-consequence">→ Moins de charge opérationnelle</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Une vue cohérente entre ERP, CRM et documents</h4>
        <p>Connecteurs et orchestration pour réduire les silos et accélérer les décisions opérationnelles.</p>
        <span class="problem-consequence">→ Décisions plus rapides</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>Conformité et audits avec piste d'audit</h4>
        <p>RBAC, human-in-the-loop et politiques métier pour encadrer chaque action des agents.</p>
        <span class="problem-consequence">→ Risque maîtrisé</span>
      </div>
    </div>
  </div>
</section>

<section class="section section-solution">
  <div class="section-inner">
    <span class="section-label reveal">L'écosystème</span>
    <h2 class="section-title reveal">L'écosystème Anir.io en 4 phases</h2>
    <div class="timeline">
      <div class="timeline-step reveal">
        <div class="timeline-num">1</div>
        <div class="timeline-content">
          <h4>Audit des processus &amp; cas d'usage IA</h4>
          <p class="timeline-duration">1 semaine · Offert</p>
          <p>Identification des processus automatisables, calcul du ROI potentiel, priorisation des cas d'usage à fort impact.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">2</div>
        <div class="timeline-content">
          <h4>Configuration des agents &amp; intégrations</h4>
          <p class="timeline-duration">2–4 semaines</p>
          <p>Paramétrage des agents IA, connexion à vos systèmes (ERP, CRM, bases documentaires).</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">3</div>
        <div class="timeline-content">
          <h4>Déploiement piloté &amp; formation</h4>
          <p class="timeline-duration">2 semaines</p>
          <p>Lancement contrôlé, formation des équipes, validation des performances.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">4</div>
        <div class="timeline-content">
          <h4>Production &amp; optimisation continue</h4>
          <p class="timeline-duration">Gouvernance</p>
          <p>Monitoring, optimisation des performances et précision dans la durée.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="architecture-section" style="background: var(--color-bg-white);">
  <div class="section-inner">
    <span class="section-label reveal">Architecture</span>
    <h2 class="section-title reveal">Architecture Anir.io</h2>
    <div class="arch-grid reveal stagger" style="margin-top: 2.5rem;">
      <div class="arch-card">
        <div class="arch-icon">🏛️</div>
        <h4>Governance Engine</h4>
        <p>Politiques, règles métier, limites opérationnelles</p>
      </div>
      <div class="arch-card">
        <div class="arch-icon">🔄</div>
        <h4>Agent Orchestrator</h4>
        <p>Routage, priorisation, coordination multi-agents</p>
      </div>
      <div class="arch-card">
        <div class="arch-icon">🤖</div>
        <h4>Task / Workflow / Strategic</h4>
        <p>Trois niveaux d'autonomie selon la complexité</p>
      </div>
      <div class="arch-card">
        <div class="arch-icon">🔐</div>
        <h4>RBAC &amp; Policies</h4>
        <p>Cinq rôles, permissions fines, audit trail</p>
      </div>
      <div class="arch-card">
        <div class="arch-icon">🔗</div>
        <h4>ERP · CRM · Docs</h4>
        <p>Intégrations vers vos systèmes existants</p>
      </div>
      <div class="arch-card">
        <div class="arch-icon">👤</div>
        <h4>Human-in-the-Loop</h4>
        <p>Validation humaine aux points critiques</p>
      </div>
    </div>
  </div>
</section>

<section class="section anatomy-faq section-faq">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Vos questions</p>
      <h2 class="section-title">Pourquoi Afflatus &amp; Anir.io&nbsp;?</h2>
    </div>
    <div class="faq-accordion">
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Qu'est-ce que l'IA agentique&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Des agents autonomes qui enchaînent analyse, décisions et actions sous vos politiques — au-delà d'un simple chatbot.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Mes données sont-elles protégées&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Afflatus est agréé CNDP. Anir.io est conçu avec RBAC, traçabilité et contrôle d'accès.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Délai de déploiement&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>En moyenne 4 semaines de la fin de l'audit initial à la mise en production, selon périmètre.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Que se passe-t-il si les objectifs ne sont pas atteints&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>Nous reprenons configuration et optimisation sans frais supplémentaires jusqu'aux objectifs définis ensemble en phase d'audit.</p>
        </div>
      </div>
      <div class="faq-item">
        <button type="button" class="faq-question" aria-expanded="false">Quels systèmes peut-on intégrer&nbsp;? <span class="faq-icon" aria-hidden="true">+</span></button>
        <div class="faq-answer" hidden>
          <p>ERP, CRM, bases documentaires et APIs : si votre système expose une API, l'intégration est généralement possible.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="anatomy-stats-band">
  <div class="metrics-bar theme-dark reveal">
    <div class="metric-item"><div class="metric-num" data-count="70" data-prefix="-" data-suffix="%">-0%</div><div class="metric-label">Temps d'analyse (cible)</div></div>
    <div class="metric-item"><div class="metric-num" data-count="99.2" data-suffix="%">0%</div><div class="metric-label">Précision cible</div></div>
    <div class="metric-item"><div class="metric-num" data-count="4">0</div><div class="metric-label">Semaines type</div></div>
    <div class="metric-item"><div class="metric-num" data-count="5">0</div><div class="metric-label">Rôles RBAC</div></div>
  </div>
</section>

<section class="section anatomy-testimonials">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Terrain</p>
      <h2 class="section-title">Retours d'usage</h2>
    </div>
    <div class="anatomy-testimonial-grid">
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/52.png" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">International Paper</p>
        <p class="anatomy-t-role">Cas d'usage documentaire &amp; qualité</p>
        <p class="anatomy-t-quote">«&nbsp;Objectif : <strong>−70&nbsp;% de temps</strong> sur l'analyse documentaire et le contrôle qualité assisté par agents — aligné BRCGS.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/LOGO/atc.png" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">Industrie — Maroc</p>
        <p class="anatomy-t-role">DSI</p>
        <p class="anatomy-t-quote">«&nbsp;Mise en production pilote en <strong>4 semaines</strong> avec gouvernance et human-in-the-loop.&nbsp;»</p>
      </div>
      <div class="anatomy-t-card reveal" data-reveal="up">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="<?php echo htmlspecialchars(COMPANY_LOGO_PATH); ?>" width="64" height="64" alt="" loading="lazy" decoding="async">
        <p class="anatomy-t-name">Afflatus Consulting Group</p>
        <p class="anatomy-t-role">Éditeur &amp; intégrateur</p>
        <p class="anatomy-t-quote">«&nbsp;Anir.io : <strong>99,2&nbsp;% de précision cible</strong> sur nos agents métiers en recette.&nbsp;»</p>
      </div>
    </div>
  </div>
</section>

<section class="section anatomy-team">
  <div class="section-inner">
    <div class="section-header">
      <p class="section-tag">Équipe produit</p>
      <h2 class="section-title">Les experts derrière Anir.io</h2>
    </div>
    <div class="anatomy-team-grid">
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Product &amp; architecture</h3>
        <p class="role">Roadmap &amp; intégrations</p>
        <p>Cadrage des cas d'usage et design de la gouvernance.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Ingénierie IA</h3>
        <p class="role">Agents &amp; fiabilité</p>
        <p>Anti-hallucination, prompts, évaluation des agents.</p>
      </div>
      <div class="anatomy-team-card reveal">
        <img class="anatomy-t-avatar anatomy-t-avatar--img" src="/assets/img/team/silhouette.svg" width="88" height="88" alt="" loading="lazy" decoding="async">
        <h3>Déploiement</h3>
        <p class="role">Mise en production</p>
        <p>Formation utilisateurs et run operations.</p>
      </div>
    </div>
  </div>
</section>

<?php
$anatomy_logos_label = 'Ils nous font confiance';
$anatomy_logos_bg = 'white';
$anatomy_cert_logos = true;
$anatomy_cert_set = 'anir-ia';
require __DIR__ . '/../includes/partials/anatomy-logos-bar.php';
?>

<?php
$anatomy_cta_headline = 'Prêt à déployer vos agents IA ?';
$anatomy_cta_sub = 'Réservez une démo gratuite de 30 minutes — réponse sous 24h.';
$anatomy_cta_btn = 'Réserver ma démo gratuite';
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
