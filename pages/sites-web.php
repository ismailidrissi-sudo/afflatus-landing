<?php
require_once __DIR__ . '/../config.php';

$page_title = "Création de Sites Web Sur Mesure — Design Premium";
$page_description = "Sites web sur mesure — vitrines premium, e-commerce, applications web. Design UX/UI, SEO technique, performance optimisée. Par Afflatus Consulting Group.";
$page_slug = "sites-web";
$page_css = "sites-web";
$google_fonts_url = "https://fonts.googleapis.com/css2?family=Urbanist:wght@400;500;600;700;800;900&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap";
$gads_conversion_label = GADS_CONVERSION_LABEL_WEB;
$nav_cta_text = "Devis gratuit";
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
  <span class="sticky-text">🌐 Sites web sur mesure — Design premium & performance optimisée · Par Afflatus Consulting Group</span>
  <a href="#hero-form" class="btn-sticky" data-cta="sticky-cta" data-page="sites-web">Devis gratuit</a>
</div>

<?php require __DIR__ . '/../includes/nav.php'; ?>

<!-- ══ HERO ══ -->
<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-content reveal-l">
      <span class="hero-tag">Web Design · Développement · SEO · Performance</span>
      <h1>UN SITE WEB QUI <em>CONVERTIT,</em> PAS JUSTE UN SITE QUI EXISTE.</h1>
      <p class="hero-mechanism">Afflatus Consulting Group conçoit et développe des sites web sur mesure — vitrines premium, plateformes e-commerce et applications web — avec un focus obsessionnel sur la conversion, le SEO et la performance.</p>
      <ul class="hero-usps">
        <li><span class="usp-icon">✓</span> Design UX/UI sur mesure — chaque site est conçu spécifiquement pour votre marque et vos objectifs de conversion</li>
        <li><span class="usp-icon">✓</span> Développement full-stack moderne (Next.js, React, headless CMS) — rapide, sécurisé et évolutif</li>
        <li><span class="usp-icon">✓</span> SEO technique intégré — structure, meta, sitemap, schema markup, Core Web Vitals optimisés</li>
        <li><span class="usp-icon">✓</span> Formation & transfert — votre équipe maîtrise l'administration du site dès la livraison</li>
        <li><span class="usp-icon">✓</span> Hébergement, maintenance et support continu inclus — vous ne gérez rien techniquement</li>
      </ul>
      <div class="hero-stats">
        <div class="hero-stat"><div class="stat-num">95+</div><div class="stat-label">Score Lighthouse</div></div>
        <div class="hero-stat"><div class="stat-num">< 2s</div><div class="stat-label">Chargement</div></div>
        <div class="hero-stat"><div class="stat-num">15+</div><div class="stat-label">Sites livrés</div></div>
      </div>
    </div>
    <div class="hero-form-panel reveal-r" id="hero-form">
      <h3>Obtenez votre devis gratuit</h3>
      <p class="form-subtitle">Décrivez votre projet et recevez une proposition détaillée sous 48h</p>
      <form data-landing="Sites Web Afflatus">
        <input type="hidden" name="source" value="sites-web">
        <div class="form-group">
          <label for="name">Nom complet</label>
          <input type="text" id="name" name="Nom" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
          <label for="company">Entreprise</label>
          <input type="text" id="company" name="Entreprise" placeholder="Nom de votre entreprise" required>
        </div>
        <div class="form-group">
          <label for="project">Type de projet</label>
          <select id="project" name="Projet" required>
            <option value="" disabled selected>Sélectionnez</option>
            <option value="Site vitrine">Site vitrine</option>
            <option value="E-commerce">E-commerce</option>
            <option value="Application web">Application web</option>
            <option value="Refonte site existant">Refonte site existant</option>
            <option value="Autre">Autre</option>
          </select>
        </div>
        <div class="form-group">
          <label for="budget">Budget estimé</label>
          <select id="budget" name="Budget" required>
            <option value="" disabled selected>Sélectionnez</option>
            <option value="< 20 000 MAD">< 20 000 MAD</option>
            <option value="20 000 - 50 000 MAD">20 000 – 50 000 MAD</option>
            <option value="50 000 - 100 000 MAD">50 000 – 100 000 MAD</option>
            <option value="100 000+ MAD">100 000+ MAD</option>
            <option value="À discuter">À discuter</option>
          </select>
        </div>
        <div class="form-group">
          <label for="whatsapp">WhatsApp</label>
          <input type="tel" id="whatsapp" name="WhatsApp" placeholder="+212 6XX XXX XXX" required>
        </div>
        <button type="submit" class="btn-submit" data-cta="form-submit" data-page="sites-web">OBTENIR MON DEVIS GRATUIT →</button>
        <p class="form-trust">🔒 Confidentiel · Réponse sous 48h · Sans engagement</p>
      </form>
    </div>
  </div>
</section>

<!-- ══ BADGES DE CONFIANCE ══ -->
<div class="trust-badges-bar reveal">
  <div class="trust-badges-inner">
    <div class="trust-badge"><img src="/assets/img/logos/iso9001.svg" alt="ISO 9001" class="badge-icon" width="24" height="24"> Cabinet certifié ISO 9001</div>
    <div class="trust-badge"><img src="/assets/img/logos/cndp.svg" alt="CNDP" class="badge-icon" width="24" height="24"> Agréé CNDP — Protection des données</div>
  </div>
</div>

<!-- ══ PROBLÈME ══ -->
<section class="section section-problems">
  <div class="section-inner">
    <span class="section-label reveal">Le problème</span>
    <h2 class="section-title reveal">Votre site web vous coûte des clients.</h2>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Site lent et non-responsive</h4>
        <p>Vos visiteurs quittent en 3 secondes si le site ne charge pas correctement sur mobile. Google pénalise votre référencement.</p>
        <span class="problem-consequence">→ 53% du trafic perdu</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Design générique qui ne convertit pas</h4>
        <p>Un template WordPress non personnalisé ne donne pas confiance à vos prospects B2B. Vos concurrents investissent dans l'image.</p>
        <span class="problem-consequence">→ Taux de conversion < 1%</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>Aucune stratégie SEO</h4>
        <p>Votre site n'apparaît pas dans les résultats Google pour vos mots-clés métier. Vous dépendez totalement des ads payants.</p>
        <span class="problem-consequence">→ Invisibilité digitale</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ SOLUTION ══ -->
<section class="section section-solution">
  <div class="section-inner">
    <span class="section-label reveal">Notre processus</span>
    <h2 class="section-title reveal">NOTRE PROCESSUS EN 4 ÉTAPES</h2>
    <div class="timeline">
      <div class="timeline-step reveal">
        <div class="timeline-num">1</div>
        <div class="timeline-content">
          <h4>Brief & stratégie digitale</h4>
          <p class="timeline-duration">1 semaine · Gratuit</p>
          <p>Compréhension de votre marque, analyse concurrentielle, définition des objectifs et de l'architecture du site.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">2</div>
        <div class="timeline-content">
          <h4>Design UX/UI & maquettes</h4>
          <p class="timeline-duration">2 semaines</p>
          <p>Wireframes, maquettes interactives haute-fidélité, validation du design avant développement.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">3</div>
        <div class="timeline-content">
          <h4>Développement & intégrations</h4>
          <p class="timeline-duration">3–5 semaines</p>
          <p>Développement frontend/backend, intégration CMS, paiements, formulaires, SEO technique.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">4</div>
        <div class="timeline-content">
          <h4>Lancement, SEO & optimisation</h4>
          <p class="timeline-duration">Continu</p>
          <p>Mise en ligne, configuration analytics, monitoring des performances, optimisation continue.</p>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ PREUVE SOCIALE — CASE STUDY ══ -->
<section class="section" style="padding: 80px 24px;">
  <div class="section-inner">
    <div class="case-study reveal">
      <span class="case-study-label">Étude de cas</span>
      <h3>Afflatus Consulting Group — afflatus.consulting</h3>
      <div class="case-before-after">
        <div class="case-col before">
          <h5>Le défi</h5>
          <ul>
            <li>Créer un site qui reflète l'expertise premium</li>
            <li>Score Lighthouse maximum sur tous les critères</li>
            <li>Design différenciant vs concurrence</li>
          </ul>
        </div>
        <div class="case-col after">
          <h5>Le résultat</h5>
          <ul>
            <li>Score Lighthouse 95+ sur tous les critères</li>
            <li>Design premium, animations fluides</li>
            <li>Temps de chargement < 1.5s</li>
            <li>Taux de conversion formulaire > 4%</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ MÉTRIQUES ══ -->
<section class="section" style="padding: 60px 24px;">
  <div class="metrics-bar reveal">
    <div class="metric-item"><div class="metric-num">95+</div><div class="metric-label">Score Lighthouse</div></div>
    <div class="metric-item"><div class="metric-num">< 2s</div><div class="metric-label">Chargement</div></div>
    <div class="metric-item"><div class="metric-num">15+</div><div class="metric-label">Sites livrés</div></div>
    <div class="metric-item"><div class="metric-num">100%</div><div class="metric-label">Satisfaction</div></div>
    <div class="metric-item"><div class="metric-num">6</div><div class="metric-label">Semaines délai moyen</div></div>
  </div>
</section>

<!-- ══ TRUSTED BY ══ -->
<section class="trusted-section reveal">
  <p class="trusted-label">Nos réalisations</p>
  <div class="trusted-logos">
    <span class="logo-chip">afflatus.consulting</span>
    <span class="logo-chip">OmniLearn.space</span>
    <span class="logo-chip">Anir.io</span>
    <span class="logo-chip">inspirra.io</span>
  </div>
</section>

<!-- ══ AUTORITÉ ══ -->
<section class="authority-section">
  <div class="section-inner">
    <div class="authority-card reveal">
      <div style="text-align:center">
        <div class="authority-avatar" style="background: linear-gradient(135deg, var(--violet), var(--orange)); display:flex; align-items:center; justify-content:center; font-size:48px; color:#fff; margin: 0 auto;">II</div>
      </div>
      <div>
        <h3 class="authority-name">ISMAIL IDRISSI</h3>
        <p class="authority-title">CEO Afflatus Consulting Group · Architecte Solutions Web · Expert UX/UI & SEO</p>
        <div class="authority-stats">
          <div class="authority-stat"><div class="stat-val">15+</div><div class="stat-lab">Sites livrés</div></div>
          <div class="authority-stat"><div class="stat-val">95+</div><div class="stat-lab">Lighthouse</div></div>
          <div class="authority-stat"><div class="stat-val">100%</div><div class="stat-lab">Satisfaction</div></div>
        </div>
        <div class="authority-badges">
          <span class="authority-badge-item">🏅 ISO 9001</span>
          <span class="authority-badge-item">🔒 Agréé CNDP</span>
          <span class="authority-badge-item">🌐 Full-Stack</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ GARANTIE ══ -->
<section class="section" style="padding: 60px 24px;">
  <div class="guarantee-box reveal">
    <h3>Notre engagement</h3>
    <p>Si le site livré ne correspond pas aux maquettes validées ou n'atteint pas les critères de performance définis ensemble, nous reprenons les développements sans frais supplémentaires.</p>
    <blockquote>"Un site web n'est pas une dépense — c'est un commercial qui travaille 24h/24." — Ismail Idrissi</blockquote>
  </div>
</section>

<!-- ══ FAQ ══ -->
<section class="section section-faq">
  <div class="section-inner">
    <h2 class="section-title reveal" style="text-align:center">Questions fréquentes</h2>
    <div class="faq-grid" style="margin-top: 40px;">
      <div class="faq-card reveal">
        <h4>Pourquoi pas un template WordPress ?</h4>
        <p>Un template limitera toujours votre marque. Nos sites sur mesure sont conçus pour vos objectifs spécifiques, avec des performances et un SEO que les templates ne peuvent atteindre.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Combien de temps pour livrer un site ?</h4>
        <p>En moyenne 6 semaines du brief à la mise en ligne. Un site vitrine peut être livré en 4 semaines, une application web complexe en 8-10 semaines.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Qu'inclut la maintenance ?</h4>
        <p>Hébergement, mises à jour de sécurité, sauvegardes automatiques, monitoring des performances, et support technique par WhatsApp. Tout est inclus.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Pouvez-vous refaire mon site existant ?</h4>
        <p>Oui, la refonte fait partie de nos services. Nous analysons votre site actuel, identifions les points de friction et concevons une nouvelle version optimisée.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ FINAL CTA ══ -->
<section class="final-cta">
  <h2 class="reveal">UN SITE WEB QUI TRAVAILLE POUR VOUS.</h2>
  <p class="reveal">Décrivez votre projet et recevez une proposition détaillée sous 48h.</p>
  <div class="final-cta-buttons reveal">
    <a href="#hero-form" class="btn-cta-primary" data-cta="final-cta" data-page="sites-web">OBTENIR MON DEVIS GRATUIT →</a>
    <a href="<?php echo WHATSAPP_URL; ?>?text=<?php echo urlencode('Bonjour, je souhaite obtenir un devis pour la création de mon site web.'); ?>"
       target="_blank" rel="noopener" class="btn-cta-whatsapp" data-cta="final-whatsapp" data-page="sites-web">
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
