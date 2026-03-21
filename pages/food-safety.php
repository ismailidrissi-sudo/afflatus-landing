<?php
require_once __DIR__ . '/../config.php';

$page_title = "Certification BRCGS, IFS & FSSC 22000 au Maroc";
$page_description = "Le seul consultant BRCGS officiellement approuvé en Afrique. Certification BRCGS Food Safety, IFS, FSSC 22000 — 94% de succès première tentative en 90 jours.";
$page_slug = "food-safety";
$page_css = "food-safety";
$google_fonts_url = "https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Instrument+Sans:wght@400;500;600;700&display=swap";
$gads_conversion_label = GADS_CONVERSION_LABEL_FOOD;
$nav_cta_text = "Réserver maintenant";
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
  <span class="sticky-text">🏆 Seul consultant BRCGS officiellement approuvé au Maroc & en Afrique</span>
  <a href="#hero-form" class="btn-sticky" data-cta="sticky-cta" data-page="food-safety">Réserver maintenant</a>
</div>

<?php require __DIR__ . '/../includes/nav.php'; ?>

<!-- ══ HERO ══ -->
<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-content reveal-l">
      <span class="hero-tag">BRCGS · IFS · FSSC 22000 · Food Safety</span>
      <h1>VOTRE CERTIFICATION <em>EN 90 JOURS.</em></h1>
      <p class="hero-mechanism">Le seul consultant BRCGS approuvé en Afrique accompagne votre entreprise de la Gap Analysis à la certification — avec un taux de succès de 94% à la première tentative.</p>
      <ul class="hero-usps">
        <li><span class="usp-icon">✓</span> Gap Analysis complète offerte (valeur 8 000 MAD) — diagnostic point par point vs exigences BRCGS v9</li>
        <li><span class="usp-icon">✓</span> Accompagnement BRCGS Food Safety, BRCGS Packaging, IFS Food, FSSC 22000 et ISO 22000</li>
        <li><span class="usp-icon">✓</span> Méthode en 4 étapes testée sur 50+ entreprises certifiées au Maroc et en Afrique</li>
        <li><span class="usp-icon">✓</span> Taux de succès 94% à la première tentative d'audit — pas de seconde chance nécessaire</li>
        <li><span class="usp-icon">✓</span> Formation terrain du personnel finançable à 100% par l'État (jusqu'à 200 000 MAD)</li>
      </ul>
      <div class="hero-stats">
        <div class="hero-stat"><div class="stat-num">90</div><div class="stat-label">Jours en moyenne</div></div>
        <div class="hero-stat"><div class="stat-num">94%</div><div class="stat-label">Succès 1ère tentative</div></div>
        <div class="hero-stat"><div class="stat-num">50+</div><div class="stat-label">Entreprises certifiées</div></div>
        <div class="hero-stat"><div class="stat-num">130+</div><div class="stat-label">Pays BRCGS</div></div>
      </div>
    </div>
    <div class="hero-form-panel reveal-r" id="hero-form">
      <h3>DIAGNOSTIC GRATUIT</h3>
      <p class="form-subtitle">Identifiez vos 3 écarts prioritaires en 45 minutes</p>
      <form data-landing="Food Safety BRCGS">
        <input type="hidden" name="source" value="food-safety">
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
            <option value="" disabled selected>Sélectionnez votre secteur</option>
            <option value="Industrie alimentaire">Industrie alimentaire</option>
            <option value="Emballage">Emballage</option>
            <option value="Distribution alimentaire">Distribution alimentaire</option>
            <option value="Agriculture / Pêche">Agriculture / Pêche</option>
            <option value="Autre">Autre</option>
          </select>
        </div>
        <div class="form-group">
          <label for="certification">Certification visée</label>
          <select id="certification" name="Certification" required>
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
          <label for="whatsapp">WhatsApp</label>
          <input type="tel" id="whatsapp" name="WhatsApp" placeholder="+212 6XX XXX XXX" required>
        </div>
        <button type="submit" class="btn-submit" data-cta="form-submit" data-page="food-safety">RÉSERVER MON DIAGNOSTIC →</button>
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
    <a href="https://www.brcgs.com/partners/find-a-consultant/list-updated/ismail-idrissi/" target="_blank" rel="noopener" class="trust-badge badge-premium">
      <span class="badge-icon">🏆</span>
      <span><strong>1er Consultant BRCGS reconnu en Afrique</strong> — Vérifier sur le registre officiel →</span>
    </a>
  </div>
</div>

<!-- ══ PROBLÈME ══ -->
<section class="section section-problems">
  <div class="section-inner">
    <span class="section-label reveal">Le problème</span>
    <h2 class="section-title reveal">POURQUOI VOTRE CERTIFICATION ÉCHOUE ?</h2>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Documentation HACCP incomplète</h4>
        <p>Plans HACCP qui ne couvrent pas tous les dangers exigés par BRCGS v9. L'analyse des risques est insuffisante et les CCP mal définis.</p>
        <span class="problem-consequence">→ Non-conformité majeure à l'audit</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Training Records insuffisants</h4>
        <p>Formation réalisée mais pas prouvée. L'auditeur exige des enregistrements précis avec dates, contenus et évaluations de compétences.</p>
        <span class="problem-consequence">→ Refus de certification</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>Supplier Approval absent</h4>
        <p>Processus d'approbation fournisseurs non formalisé — point de non-conformité le plus fréquent lors des audits BRCGS et IFS.</p>
        <span class="problem-consequence">→ Contrats export menacés</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ SOLUTION ══ -->
<section class="section section-solution">
  <div class="section-inner">
    <span class="section-label reveal">La méthode</span>
    <h2 class="section-title reveal">LA MÉTHODE AFFLATUS EN 4 ÉTAPES</h2>
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
          <h4>Plan d'action & Documentation</h4>
          <p class="timeline-duration">2 semaines</p>
          <p>Construction documentaire complète : manuels, procédures, plans HACCP, enregistrements, fiches fournisseurs.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">3</div>
        <div class="timeline-content">
          <h4>Mise en conformité terrain</h4>
          <p class="timeline-duration">6–8 semaines</p>
          <p>Formation des opérateurs, mise en place des bonnes pratiques, vérification terrain de chaque exigence normative.</p>
        </div>
      </div>
      <div class="timeline-step reveal">
        <div class="timeline-num">4</div>
        <div class="timeline-content">
          <h4>Audit blanc + Certification</h4>
          <p class="timeline-duration">Taux 94% — 1ère tentative</p>
          <p>Simulation complète d'audit, correction des derniers écarts, accompagnement le jour J.</p>
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
      <h3>INTERNATIONAL PAPER MAROC — Leader mondial de l'emballage</h3>
      <div class="case-before-after">
        <div class="case-col before">
          <h5>Avant Afflatus</h5>
          <ul>
            <li>2 tentatives de certification échouées</li>
            <li>Documentation BRCGS non conforme v6</li>
            <li>Processus fournisseurs non formalisés</li>
            <li>Risque de perte de contrats européens</li>
          </ul>
        </div>
        <div class="case-col after">
          <h5>Après Afflatus</h5>
          <ul>
            <li>Gap Analysis en 48h — 23 écarts identifiés</li>
            <li>Plan d'action sur 60 jours exécuté</li>
            <li>Formation de 12 opérateurs certifiée</li>
            <li>Certification BRCGS Packaging 1ère tentative</li>
            <li>Délai total : 87 jours</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ SOCIAL PROOF PREMIUM — BRCGS ══ -->
<section class="section" style="padding: 80px 24px;">
  <div class="section-inner">
    <div class="social-proof-premium reveal">
      <h3>LE PREMIER ET SEUL CONSULTANT BRCGS OFFICIELLEMENT RECONNU EN AFRIQUE</h3>
      <p>Ismail Idrissi est inscrit au registre mondial des consultants BRCGS — une accréditation délivrée directement par l'organisme international BRCGS après évaluation rigoureuse de ses compétences et méthodologie. Cette reconnaissance est vérifiable publiquement.</p>
      <a href="https://www.brcgs.com/partners/find-a-consultant/list-updated/ismail-idrissi/" target="_blank" rel="noopener" class="verify-link">
        → Vérifier sur le registre officiel BRCGS
      </a>
      <div class="badge-visual">
        <span style="font-size: 24px;">🛡️</span>
        BRCGS® APPROVED CONSULTANT
      </div>
      <p style="margin-top: 16px; font-size: 13px; opacity: 0.6;">Cabinet également certifié ISO 9001 et agréé CNDP pour la protection des données personnelles.</p>
    </div>
  </div>
</section>

<!-- ══ MÉTRIQUES ══ -->
<section class="section" style="padding: 60px 24px;">
  <div class="metrics-bar reveal">
    <div class="metric-item"><div class="metric-num">90</div><div class="metric-label">Jours délai moyen</div></div>
    <div class="metric-item"><div class="metric-num">94%</div><div class="metric-label">Succès 1ère tentative</div></div>
    <div class="metric-item"><div class="metric-num">50+</div><div class="metric-label">Certifiées</div></div>
    <div class="metric-item"><div class="metric-num">8+</div><div class="metric-label">Ans terrain</div></div>
    <div class="metric-item"><div class="metric-num">130+</div><div class="metric-label">Pays BRCGS</div></div>
  </div>
</section>

<!-- ══ TRUSTED BY ══ -->
<section class="trusted-section reveal">
  <p class="trusted-label">Ils nous font confiance</p>
  <div class="trusted-logos">
    <span class="logo-chip">Atlantic Conserves</span>
    <span class="logo-chip">Aïcha</span>
    <span class="logo-chip">Mina</span>
    <span class="logo-chip">PlastiPak</span>
    <span class="logo-chip">Unilever</span>
    <span class="logo-chip">CANPACK</span>
    <span class="logo-chip">Europac</span>
    <span class="logo-chip">Maymouna</span>
  </div>
</section>

<!-- ══ AUTORITÉ ══ -->
<section class="authority-section">
  <div class="section-inner">
    <div class="authority-card reveal">
      <div style="text-align:center">
        <div class="authority-avatar" style="background: linear-gradient(135deg, var(--pink), var(--deep-pink)); display:flex; align-items:center; justify-content:center; font-size:48px; color:#fff; margin: 0 auto;">II</div>
      </div>
      <div>
        <h3 class="authority-name">ISMAIL IDRISSI</h3>
        <p class="authority-title">Consultant BRCGS® Approuvé · Sécurité Alimentaire · CEO Afflatus Consulting Group</p>
        <div class="authority-stats">
          <div class="authority-stat"><div class="stat-val">50+</div><div class="stat-lab">Certifications</div></div>
          <div class="authority-stat"><div class="stat-val">94%</div><div class="stat-lab">Succès</div></div>
          <div class="authority-stat"><div class="stat-val">8+</div><div class="stat-lab">Ans terrain</div></div>
          <div class="authority-stat"><div class="stat-val">1er</div><div class="stat-lab">En Afrique</div></div>
        </div>
        <div class="authority-badges">
          <span class="authority-badge-item">🏆 BRCGS® Approved</span>
          <span class="authority-badge-item">🏅 ISO 9001</span>
          <span class="authority-badge-item">🔒 Agréé CNDP</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ GARANTIE ══ -->
<section class="section" style="padding: 60px 24px;">
  <div class="guarantee-box reveal">
    <h3>NOTRE GARANTIE CERTIFICATION</h3>
    <p>Si votre audit de certification échoue après notre accompagnement complet, nous reprenons toutes les actions correctives sans frais supplémentaires jusqu'à l'obtention de votre grade.</p>
    <blockquote>"La sécurité alimentaire n'est pas négociable — et votre certification ne devrait pas l'être non plus." — Ismail Idrissi</blockquote>
  </div>
</section>

<!-- ══ FAQ ══ -->
<section class="section section-faq">
  <div class="section-inner">
    <h2 class="section-title reveal" style="text-align:center">QUESTIONS FRÉQUENTES</h2>
    <div class="faq-grid" style="margin-top: 40px;">
      <div class="faq-card reveal">
        <h4>Quelle différence entre BRCGS et IFS ?</h4>
        <p>BRCGS est plutôt exigé par les distributeurs britanniques et internationaux, IFS par les distributeurs français et allemands. Les deux sont reconnus par la GFSI. Nous vous aidons à choisir la plus pertinente pour vos marchés.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Combien coûte l'accompagnement ?</h4>
        <p>Le coût dépend de la taille de votre entreprise et du niveau de maturité de vos processus. Le diagnostic offert permet de calibrer précisément le budget nécessaire. La formation des équipes peut être financée jusqu'à 100% par les CSF.</p>
      </div>
      <div class="faq-card reveal">
        <h4>La Gap Analysis est-elle vraiment offerte ?</h4>
        <p>Oui, le diagnostic complet est offert sans engagement. Il vous donne un rapport détaillé de vos écarts versus les exigences normatives, avec un plan d'action priorisé.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Que se passe-t-il si l'audit échoue ?</h4>
        <p>Avec 94% de succès en première tentative, c'est rare. Mais si cela arrive, nous reprenons l'intégralité des actions correctives sans frais supplémentaires jusqu'à l'obtention de votre certification.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ FINAL CTA ══ -->
<section class="final-cta">
  <h2 class="reveal">PRÊT À DÉCROCHER VOTRE CERTIFICATION ?</h2>
  <p class="reveal">Réservez votre diagnostic gratuit avec le seul consultant BRCGS approuvé en Afrique.</p>
  <div class="final-cta-buttons reveal">
    <a href="#hero-form" class="btn-cta-primary" data-cta="final-cta" data-page="food-safety">RÉSERVER MON DIAGNOSTIC GRATUIT →</a>
    <a href="<?php echo WHATSAPP_URL; ?>?text=<?php echo urlencode('Bonjour, je souhaite obtenir un diagnostic sécurité alimentaire (BRCGS/IFS/FSSC22000).'); ?>"
       target="_blank" rel="noopener" class="btn-cta-whatsapp" data-cta="final-whatsapp" data-page="food-safety">
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
