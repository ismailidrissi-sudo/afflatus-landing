<?php
require_once __DIR__ . '/../config.php';

$page_title = "Consulting QSE, ESG & Due Diligence au Maroc";
$page_description = "Afflatus Consulting implémente vos systèmes QSE (ISO 9001, 14001, 45001) et structure vos démarches ESG — 94% de succès à la première tentative.";
$page_slug = "qse-esg";
$page_css = "qse-esg";
$google_fonts_url = "https://fonts.googleapis.com/css2?family=DM+Serif+Display&family=Manrope:wght@300;400;500;600;700;800&display=swap";
$gads_conversion_label = GADS_CONVERSION_LABEL_QSE;
$nav_cta_text = "Consultation gratuite";
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
  <span class="sticky-text">🏆 Seul consultant BRCGS approuvé au Maroc & en Afrique — Systèmes QSE & ESG pour marchés internationaux</span>
  <a href="#hero-form" class="btn-sticky" data-cta="sticky-cta" data-page="qse-esg">Consultation gratuite</a>
</div>

<?php require __DIR__ . '/../includes/nav.php'; ?>

<!-- ══ HERO ══ -->
<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-content reveal-l">
      <span class="hero-tag">QSE · ESG · ISO · Due Diligence · Conformité internationale</span>
      <h1>Votre système QSE & ESG, <em>construit pour durer</em> et ouvrir de nouveaux marchés.</h1>
      <p class="hero-mechanism">Afflatus Consulting implémente des systèmes de management Qualité-Sécurité-Environnement et structure vos démarches ESG — pour que votre conformité devienne un avantage compétitif réel, pas une contrainte administrative.</p>
      <ul class="hero-usps">
        <li><span class="usp-icon">✓</span> ISO 9001, ISO 14001, ISO 45001 — implémentation complète & accompagnement jusqu'à certification</li>
        <li><span class="usp-icon">✓</span> Stratégie ESG structurée avec reporting conforme GRI / TCFD pour investisseurs et donneurs d'ordre</li>
        <li><span class="usp-icon">✓</span> Due Diligence fournisseur : audits SMETA, amfori BSCI, conformité sociale & environnementale</li>
        <li><span class="usp-icon">✓</span> Méthode en 4 phases — du diagnostic gap analysis à la certification réussie en 90 jours</li>
        <li><span class="usp-icon">✓</span> 94% de taux de succès à la première tentative d'audit de certification</li>
      </ul>
      <div class="hero-stats">
        <div class="hero-stat"><div class="stat-num">50+</div><div class="stat-label">Certifications</div></div>
        <div class="hero-stat"><div class="stat-num">94%</div><div class="stat-label">Succès 1ère tentative</div></div>
        <div class="hero-stat"><div class="stat-num">90j</div><div class="stat-label">Délai moyen</div></div>
      </div>
    </div>
    <div class="hero-form-panel reveal-r" id="hero-form">
      <h3>Obtenez votre feuille de route QSE/ESG</h3>
      <p class="form-subtitle">Diagnostic offert · Réponse sous 24h</p>
      <form data-landing="QSE ESG Due Diligence">
        <input type="hidden" name="source" value="qse-esg">
        <div class="form-group">
          <label for="name">Nom complet</label>
          <input type="text" id="name" name="Nom" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
          <label for="company">Entreprise</label>
          <input type="text" id="company" name="Entreprise" placeholder="Nom de votre entreprise" required>
        </div>
        <div class="form-group">
          <label for="need">Besoin principal</label>
          <select id="need" name="Besoin" required>
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
          <label for="size">Taille entreprise</label>
          <input type="text" id="size" name="Taille" placeholder="Nombre d'employés" required>
        </div>
        <div class="form-group">
          <label for="whatsapp">WhatsApp</label>
          <input type="tel" id="whatsapp" name="WhatsApp" placeholder="+212 6XX XXX XXX" required>
        </div>
        <button type="submit" class="btn-submit" data-cta="form-submit" data-page="qse-esg">OBTENIR MA FEUILLE DE ROUTE →</button>
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
    <div class="trust-badge"><span class="badge-icon">👨‍💼</span> Auditeurs certifiés IRCA — 10+ ans d'expérience terrain</div>
  </div>
</div>

<!-- ══ PROBLÈME ══ -->
<section class="section section-problems">
  <div class="section-inner">
    <span class="section-label reveal">Le problème</span>
    <h2 class="section-title reveal">Vos clients et investisseurs exigent une conformité que vous n'avez pas encore.</h2>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Contrats perdus faute de certification</h4>
        <p>Vos prospects exigent ISO 9001 ou ISO 45001 comme prérequis. Votre offre est éliminée avant même l'évaluation technique.</p>
        <span class="problem-consequence">→ Opportunités commerciales perdues</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Investisseurs qui bloquent sur l'ESG</h4>
        <p>Les fonds d'investissement exigent un rapport ESG structuré. Sans stratégie documentée, les négociations s'arrêtent à la due diligence.</p>
        <span class="problem-consequence">→ Financement externe bloqué</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>Audit fournisseur raté (SMETA / BSCI)</h4>
        <p>Vos clients export exigent SMETA ou amfori BSCI pour votre référencement. Sans accompagnement, l'audit révèle des non-conformités.</p>
        <span class="problem-consequence">→ Référencement fournisseur menacé</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ SOLUTION ══ -->
<section class="section section-solution">
  <div class="section-inner">
    <span class="section-label reveal">La méthode</span>
    <h2 class="section-title reveal">La méthode Afflatus en 4 phases</h2>
    <p class="section-subtitle reveal" style="color: rgba(255,255,255,.6)">Du diagnostic à la certification — un processus éprouvé sur 50+ entreprises.</p>
    <div class="timeline">
      <div class="timeline-step reveal">
        <div class="timeline-num">1</div>
        <div class="timeline-content">
          <h4>Diagnostic & Gap Analysis</h4>
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
          <h4>Mise en conformité terrain</h4>
          <p class="timeline-duration">6–10 semaines</p>
          <p>Accompagnement opérationnel : documentation, procédures, formation des équipes, mise en place des processus.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">4</div>
        <div class="timeline-content">
          <h4>Audit blanc + Certification</h4>
          <p class="timeline-duration">Taux 94% — 1ère tentative</p>
          <p>Simulation d'audit pour éliminer les derniers écarts, puis accompagnement le jour J de l'audit de certification.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ PREUVE SOCIALE — CASE STUDY ══ -->
<section class="section" style="background: var(--ink, #0B0F1A); padding: 80px 24px;">
  <div class="section-inner">
    <div class="case-study reveal">
      <span class="case-study-label">Étude de cas</span>
      <h3>Aiguebelle — Industrie chocolatière, Maroc</h3>
      <div class="case-before-after">
        <div class="case-col before">
          <h5>Avant Afflatus</h5>
          <ul>
            <li>Pas de certification QSE en place</li>
            <li>Contrats internationaux bloqués</li>
            <li>Documentation qualité inexistante</li>
          </ul>
        </div>
        <div class="case-col after">
          <h5>Après Afflatus</h5>
          <ul>
            <li>Système intégré ISO 9001 + ISO 14001 implémenté</li>
            <li>Certification obtenue à la 1ère tentative</li>
            <li>Accès marchés internationaux débloqué</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ MÉTRIQUES ══ -->
<section class="section" style="padding: 60px 24px;">
  <div class="metrics-bar reveal">
    <div class="metric-item"><div class="metric-num">90</div><div class="metric-label">Jours délai moyen</div></div>
    <div class="metric-item"><div class="metric-num">94%</div><div class="metric-label">Succès 1ère tentative</div></div>
    <div class="metric-item"><div class="metric-num">50+</div><div class="metric-label">Entreprises certifiées</div></div>
    <div class="metric-item"><div class="metric-num">5</div><div class="metric-label">Normes couvertes</div></div>
  </div>
</section>

<!-- ══ TRUSTED BY ══ -->
<section class="trusted-section reveal">
  <p class="trusted-label">Ils nous font confiance</p>
  <div class="trusted-logos">
    <span class="logo-chip">Aiguebelle</span>
    <span class="logo-chip">ETASCM</span>
    <span class="logo-chip">International Paper</span>
    <span class="logo-chip">Miller Graphics</span>
  </div>
</section>

<!-- ══ AUTORITÉ ══ -->
<section class="authority-section">
  <div class="section-inner">
    <div class="authority-card reveal">
      <div style="text-align:center">
        <div class="authority-avatar" style="background: linear-gradient(135deg, var(--teal), var(--gold)); display:flex; align-items:center; justify-content:center; font-size:48px; color:#fff; margin: 0 auto;">II</div>
      </div>
      <div>
        <h3 class="authority-name">Ismail Idrissi</h3>
        <p class="authority-title">Consultant QSE & ESG · BRCGS® Approuvé · CEO Afflatus Consulting Group</p>
        <div class="authority-stats">
          <div class="authority-stat"><div class="stat-val">50+</div><div class="stat-lab">Certifications</div></div>
          <div class="authority-stat"><div class="stat-val">94%</div><div class="stat-lab">Succès</div></div>
          <div class="authority-stat"><div class="stat-val">8+</div><div class="stat-lab">Ans terrain</div></div>
        </div>
        <p style="font-size: 14px; line-height: 1.7; opacity: 0.8; margin-top: 12px;">Afflatus dispose d'auditeurs qualifiés IRCA (International Register of Certificated Auditors) avec plus de 10 ans d'expérience terrain — disponibles pour audits internes, audits fournisseurs, due diligence ESG et accompagnement certification.</p>
        <div class="authority-badges">
          <span class="authority-badge-item">🏅 Cabinet certifié ISO 9001</span>
          <span class="authority-badge-item">🔒 Agréé CNDP</span>
          <span class="authority-badge-item">👨‍💼 Auditeurs IRCA</span>
          <span class="authority-badge-item">🏆 BRCGS® Approuvé</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ GARANTIE ══ -->
<section class="section" style="padding: 60px 24px;">
  <div class="guarantee-box reveal">
    <h3>Notre engagement qualité</h3>
    <p>Si vous ne passez pas votre audit de certification à la première tentative après notre accompagnement complet, nous reprenons l'ensemble des actions correctives — sans frais supplémentaires — jusqu'à l'obtention de votre certification.</p>
    <blockquote>"La conformité n'est pas une fin en soi — c'est le point de départ de votre croissance internationale." — Ismail Idrissi</blockquote>
  </div>
</section>

<!-- ══ FAQ ══ -->
<section class="section section-faq">
  <div class="section-inner">
    <h2 class="section-title reveal" style="text-align:center">Questions fréquentes</h2>
    <div class="faq-grid" style="margin-top: 40px;">
      <div class="faq-card reveal">
        <h4>Combien de temps pour obtenir la certification ISO 9001 ?</h4>
        <p>En moyenne 90 jours avec notre méthode en 4 phases. Ce délai varie selon la taille de l'entreprise et le niveau de maturité de vos processus existants.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Le diagnostic initial est-il vraiment gratuit ?</h4>
        <p>Oui, le diagnostic Gap Analysis de 2 jours est offert sans engagement. Il vous donne une vision claire de vos écarts et une feuille de route actionnable.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Quelle est la différence entre QSE et ESG ?</h4>
        <p>Le QSE (Qualité-Sécurité-Environnement) concerne les normes ISO de management. L'ESG (Environnement-Social-Gouvernance) est un cadre de reporting pour investisseurs. Nous couvrons les deux.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Intervenez-vous en dehors du Maroc ?</h4>
        <p>Oui, nous intervenons dans toute l'Afrique. Ismail Idrissi est le seul consultant BRCGS reconnu sur le continent — nos missions couvrent le Maroc et l'Afrique subsaharienne.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ FINAL CTA ══ -->
<section class="final-cta">
  <h2 class="reveal">Prêt à transformer votre conformité en avantage compétitif ?</h2>
  <p class="reveal">Obtenez votre diagnostic gratuit et votre feuille de route QSE/ESG personnalisée.</p>
  <div class="final-cta-buttons reveal">
    <a href="#hero-form" class="btn-cta-primary" data-cta="final-cta" data-page="qse-esg">DEMANDER MON DIAGNOSTIC GRATUIT →</a>
    <a href="<?php echo WHATSAPP_URL; ?>?text=<?php echo urlencode('Bonjour, je souhaite obtenir un diagnostic QSE/ESG pour mon entreprise.'); ?>"
       target="_blank" rel="noopener" class="btn-cta-whatsapp" data-cta="final-whatsapp" data-page="qse-esg">
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
