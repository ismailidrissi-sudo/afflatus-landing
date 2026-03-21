<?php
require_once __DIR__ . '/../config.php';

$page_title = "Anir.io — Plateforme IA Agentique Entreprise";
$page_description = "Anir.io by Afflatus : agents IA autonomes pour automatiser vos processus. Governance-first, anti-hallucination, intégration native ERP/CRM.";
$page_slug = "anir-ia";
$page_css = "anir-ia";
$google_fonts_url = "https://fonts.googleapis.com/css2?family=Syne:wght@400;500;600;700;800&family=DM+Sans:wght@300;400;500;600;700&display=swap";
$gads_conversion_label = GADS_CONVERSION_LABEL_ANIR;
$nav_cta_text = "Démo gratuite";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<?php require __DIR__ . '/../includes/head.php'; ?>
</head>
<body>
<?php require __DIR__ . '/../includes/tracking-body-open.php'; ?>
<?php require __DIR__ . '/../includes/floating-cta.php'; ?>

<!-- ══ STICKY BAR ══ -->
<div class="sticky-bar">
  <span class="sticky-text">🤖 Anir.io — Plateforme d'IA Agentique Entreprise · Automatisez vos processus avec des agents intelligents</span>
  <a href="#hero-form" class="btn-sticky" data-cta="sticky-cta" data-page="anir-ia">Démo gratuite</a>
</div>

<?php require __DIR__ . '/../includes/nav.php'; ?>

<!-- ══ HERO ══ -->
<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-content reveal-l">
      <span class="hero-tag">IA Agentique · Agents Autonomes · Anir.io by Afflatus</span>
      <h1>VOS AGENTS IA TRAVAILLENT <em>PENDANT QUE VOUS DÉCIDEZ.</em></h1>
      <p class="hero-mechanism">Anir.io est la plateforme d'IA agentique entreprise développée par Afflatus Consulting Group. Des agents intelligents qui analysent, décident et agissent — intégrés à vos systèmes existants, gouvernés par vos règles métier.</p>
      <ul class="hero-usps">
        <li><span class="usp-icon">✓</span> Plateforme Governance-First — chaque agent opère sous contrôle strict de vos règles métier et politiques</li>
        <li><span class="usp-icon">✓</span> Architecture 3 niveaux d'agents (Task, Workflow, Strategic) adaptée à votre complexité opérationnelle</li>
        <li><span class="usp-icon">✓</span> Anti-hallucination intégrée — vérification multi-sources garantissant la fiabilité des décisions</li>
        <li><span class="usp-icon">✓</span> Intégration native ERP, CRM, bases documentaires — déploiement en semaines, pas en mois</li>
        <li><span class="usp-icon">✓</span> RBAC 5 rôles (Admin, Manager, Analyst, Viewer, Auditor) — contrôle granulaire des permissions</li>
      </ul>
      <div class="hero-stats">
        <div class="hero-stat"><div class="stat-num">-70%</div><div class="stat-label">Temps d'analyse</div></div>
        <div class="hero-stat"><div class="stat-num">99.2%</div><div class="stat-label">Précision agents</div></div>
        <div class="hero-stat"><div class="stat-num">4 sem.</div><div class="stat-label">Déploiement moyen</div></div>
      </div>
    </div>
    <div class="hero-form-panel reveal-r" id="hero-form">
      <h3>Réservez votre démo Anir.io</h3>
      <p class="form-subtitle">Découvrez comment l'IA agentique transforme vos opérations — démo 30 min</p>
      <form data-landing="Anir.io IA Agentique">
        <input type="hidden" name="source" value="anir-ia">
        <div class="form-group">
          <label for="name">Nom complet</label>
          <input type="text" id="name" name="Nom" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
          <label for="company">Entreprise</label>
          <input type="text" id="company" name="Entreprise" placeholder="Nom de votre entreprise" required>
        </div>
        <div class="form-group">
          <label for="sector">Secteur</label>
          <select id="sector" name="Secteur" required>
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
          <label for="usecase">Cas d'usage principal</label>
          <select id="usecase" name="Cas d'usage" required>
            <option value="" disabled selected>Sélectionnez</option>
            <option value="Automatisation documentaire">Automatisation documentaire</option>
            <option value="Analyse de données">Analyse de données</option>
            <option value="Gouvernance & conformité">Gouvernance & conformité</option>
            <option value="Support client intelligent">Support client intelligent</option>
            <option value="Autre">Autre</option>
          </select>
        </div>
        <div class="form-group">
          <label for="whatsapp">WhatsApp</label>
          <input type="tel" id="whatsapp" name="WhatsApp" placeholder="+212 6XX XXX XXX" required>
        </div>
        <button type="submit" class="btn-submit" data-cta="form-submit" data-page="anir-ia">RÉSERVER MA DÉMO GRATUITE →</button>
        <p class="form-trust">🔒 Confidentiel · Réponse sous 24h · Sans engagement</p>
      </form>
    </div>
  </div>
</section>

<!-- ══ BADGES DE CONFIANCE ══ -->
<div class="trust-badges-bar reveal">
  <div class="trust-badges-inner">
    <div class="trust-badge"><span class="badge-icon">🏅</span> Cabinet certifié ISO 9001</div>
    <div class="trust-badge"><span class="badge-icon">🔒</span> Agréé CNDP — Protection des données</div>
  </div>
</div>

<!-- ══ PROBLÈME ══ -->
<section class="section section-problems">
  <div class="section-inner">
    <span class="section-label reveal">Le problème</span>
    <h2 class="section-title reveal">VOS ÉQUIPES PASSENT 60% DE LEUR TEMPS SUR DES TÂCHES AUTOMATISABLES.</h2>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Traitement manuel de documents</h4>
        <p>Vos analystes passent des heures à extraire, vérifier et synthétiser des informations de multiples sources. Erreurs humaines fréquentes.</p>
        <span class="problem-consequence">→ Coût opérationnel excessif</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Décisions sur données incomplètes</h4>
        <p>L'information est fragmentée entre vos systèmes. Impossible d'avoir une vue unifiée en temps réel pour des décisions éclairées.</p>
        <span class="problem-consequence">→ Opportunités manquées</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>Conformité chronophage</h4>
        <p>La vérification de conformité réglementaire mobilise des ressources disproportionnées sans valeur ajoutée directe.</p>
        <span class="problem-consequence">→ Risque réglementaire + burn-out</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ SOLUTION ══ -->
<section class="section section-solution">
  <div class="section-inner">
    <span class="section-label reveal">L'écosystème</span>
    <h2 class="section-title reveal">L'ÉCOSYSTÈME ANIR.IO EN 4 PHASES</h2>
    <div class="timeline">
      <div class="timeline-step reveal">
        <div class="timeline-num">1</div>
        <div class="timeline-content">
          <h4>Audit des processus & cas d'usage IA</h4>
          <p class="timeline-duration">1 semaine · Offert</p>
          <p>Identification des processus automatisables, calcul du ROI potentiel, priorisation des cas d'usage à fort impact.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">2</div>
        <div class="timeline-content">
          <h4>Configuration des agents & intégrations</h4>
          <p class="timeline-duration">2–4 semaines</p>
          <p>Création et paramétrage des agents IA, connexion à vos systèmes existants (ERP, CRM, bases documentaires).</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">3</div>
        <div class="timeline-content">
          <h4>Déploiement piloté & formation</h4>
          <p class="timeline-duration">2 semaines</p>
          <p>Lancement en environnement contrôlé, formation de vos équipes, validation des performances des agents.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">4</div>
        <div class="timeline-content">
          <h4>Production & optimisation continue</h4>
          <p class="timeline-duration">Gouvernance autonome</p>
          <p>Mise en production avec monitoring temps réel, optimisation continue des performances et de la précision.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ ARCHITECTURE TECHNIQUE ══ -->
<section class="architecture-section">
  <div class="section-inner">
    <span class="section-label reveal" style="display:block; text-align:center; background: rgba(59,130,246,.1); color: var(--blue); width: fit-content; margin: 0 auto 16px;">Architecture</span>
    <h2 class="section-title reveal" style="text-align:center; font-family:'Syne',sans-serif; text-transform:uppercase; color: var(--white);">Architecture Anir.io</h2>
    <div class="arch-grid reveal" style="margin-top: 40px;">
      <div class="arch-card">
        <div class="arch-icon">🏛️</div>
        <h4>Governance Engine</h4>
        <p>Moteur de gouvernance central — politiques, règles métier, limites opérationnelles</p>
      </div>
      <div class="arch-card">
        <div class="arch-icon">🔄</div>
        <h4>Agent Orchestrator</h4>
        <p>Orchestration intelligente des agents — routage, priorisation, coordination multi-agents</p>
      </div>
      <div class="arch-card">
        <div class="arch-icon">🤖</div>
        <h4>Task / Workflow / Strategic Agents</h4>
        <p>3 niveaux d'agents autonomes — tâches, workflows complexes, décisions stratégiques</p>
      </div>
      <div class="arch-card">
        <div class="arch-icon">🔐</div>
        <h4>RBAC & Policies</h4>
        <p>Contrôle d'accès granulaire — 5 rôles, permissions fines, audit trail complet</p>
      </div>
      <div class="arch-card">
        <div class="arch-icon">🔗</div>
        <h4>ERP · CRM · Docs · APIs</h4>
        <p>Intégrations natives — connecteurs pré-configurés pour vos systèmes existants</p>
      </div>
      <div class="arch-card">
        <div class="arch-icon">👤</div>
        <h4>Human-in-the-Loop</h4>
        <p>Points de validation humaine configurables — l'IA propose, vous validez</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ PREUVE SOCIALE — CASE STUDY ══ -->
<section class="section" style="padding: 80px 24px;">
  <div class="section-inner">
    <div class="case-study reveal">
      <span class="case-study-label">Étude de cas</span>
      <h3>INTERNATIONAL PAPER — ANALYSE HACCP AUTOMATISÉE</h3>
      <div class="case-before-after">
        <div class="case-col before">
          <h5>Avant Anir.io</h5>
          <ul>
            <li>Analyse documentaire HACCP manuelle (heures)</li>
            <li>Contrôle qualité réactif, pas prédictif</li>
            <li>Conformité BRCGS vérifiée ponctuellement</li>
          </ul>
        </div>
        <div class="case-col after">
          <h5>Avec Anir.io</h5>
          <ul>
            <li>Réduction de 70% du temps d'analyse</li>
            <li>Contrôle qualité prédictif via agents IA</li>
            <li>Conformité BRCGS maintenue en continu</li>
            <li>Alertes automatisées sur les non-conformités</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ MÉTRIQUES ══ -->
<section class="section" style="padding: 60px 24px;">
  <div class="metrics-bar reveal">
    <div class="metric-item"><div class="metric-num">-70%</div><div class="metric-label">Temps d'analyse</div></div>
    <div class="metric-item"><div class="metric-num">99.2%</div><div class="metric-label">Précision agents</div></div>
    <div class="metric-item"><div class="metric-num">4</div><div class="metric-label">Semaines déploiement</div></div>
    <div class="metric-item"><div class="metric-num">∞</div><div class="metric-label">Agents configurables</div></div>
    <div class="metric-item"><div class="metric-num">3x</div><div class="metric-label">ROI en 6 mois</div></div>
  </div>
</section>

<!-- ══ TRUSTED BY ══ -->
<section class="trusted-section reveal">
  <p class="trusted-label">Ils nous font confiance</p>
  <div class="trusted-logos">
    <span class="logo-chip">International Paper</span>
    <span class="logo-chip">Afflatus Consulting Group</span>
  </div>
  <p style="text-align:center; font-size: 13px; opacity: 0.5; margin-top: 16px;">Plateforme en déploiement actif auprès de clients industriels au Maroc</p>
</section>

<!-- ══ GARANTIE ══ -->
<section class="section" style="padding: 60px 24px;">
  <div class="guarantee-box reveal">
    <h3>Notre engagement</h3>
    <p>Si les agents IA déployés n'atteignent pas les objectifs de performance définis ensemble lors de l'audit initial, nous reprenons la configuration et l'optimisation sans frais supplémentaires jusqu'à satisfaction.</p>
    <blockquote>"L'intelligence artificielle n'a de valeur que si elle est gouvernée par l'intelligence humaine." — Ismail Idrissi</blockquote>
  </div>
</section>

<!-- ══ FAQ ══ -->
<section class="section section-faq">
  <div class="section-inner">
    <h2 class="section-title reveal" style="text-align:center; font-family:'Syne',sans-serif; text-transform:uppercase;">QUESTIONS FRÉQUENTES</h2>
    <div class="faq-grid" style="margin-top: 40px;">
      <div class="faq-card reveal">
        <h4>Qu'est-ce que l'IA agentique ?</h4>
        <p>Contrairement aux chatbots classiques, les agents IA autonomes peuvent analyser des données, prendre des décisions et exécuter des actions — tout en respectant vos règles métier et politiques de gouvernance.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Mes données sont-elles sécurisées ?</h4>
        <p>Absolument. Anir.io est conforme CNDP (loi 09-08). Vos données restent dans votre infrastructure. Le RBAC 5 rôles garantit un contrôle granulaire des accès.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Combien de temps pour déployer ?</h4>
        <p>En moyenne 4 semaines de l'audit initial à la mise en production. L'audit des processus (1 semaine) est offert et sans engagement.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Quels systèmes peuvent être intégrés ?</h4>
        <p>Anir.io s'intègre nativement avec les principaux ERP, CRM, bases documentaires et APIs. Si votre système dispose d'une API, nous pouvons l'intégrer.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ FINAL CTA ══ -->
<section class="final-cta">
  <h2 class="reveal">PRÊT À DÉPLOYER VOS AGENTS IA ?</h2>
  <p class="reveal">Réservez votre démo gratuite et découvrez le potentiel d'Anir.io pour votre entreprise.</p>
  <div class="final-cta-buttons reveal">
    <a href="#hero-form" class="btn-cta-primary" data-cta="final-cta" data-page="anir-ia">RÉSERVER MA DÉMO GRATUITE →</a>
    <a href="<?php echo WHATSAPP_URL; ?>?text=<?php echo urlencode('Bonjour, je souhaite réserver une démo de la plateforme Anir.io.'); ?>"
       target="_blank" rel="noopener" class="btn-cta-whatsapp" data-cta="final-whatsapp" data-page="anir-ia">
      <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.437 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
      Contacter sur WhatsApp
    </a>
  </div>
</section>

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
<?php require __DIR__ . '/../includes/tracking-events.php'; ?>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/consent.js"></script>
</body>
</html>
