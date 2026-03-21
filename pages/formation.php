<?php
require_once __DIR__ . '/../config.php';

$page_title = "Formations Professionnelles & Contrats Spéciaux de Formation CSF";
$page_description = "Formez vos équipes et récupérez jusqu'à 200 000 MAD grâce aux CSF. Afflatus conçoit vos formations sur mesure et gère l'intégralité du dossier administratif OFPPT.";
$page_slug = "formation";
$page_css = "formation";
$google_fonts_url = "https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;600;700;800&family=Outfit:wght@300;400;500;600;700&display=swap";
$gads_conversion_label = GADS_CONVERSION_LABEL_FORMATION;
$nav_cta_text = "Calculer mon remboursement";
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
  <span class="sticky-text">📋 Programme gouvernemental : jusqu'à 200 000 MAD remboursés pour vos formations — Afflatus gère tout le dossier</span>
  <a href="#hero-form" class="btn-sticky" data-cta="sticky-cta" data-page="formation">Calculer mon montant</a>
</div>

<?php require __DIR__ . '/../includes/nav.php'; ?>

<!-- ══ HERO ══ -->
<section class="hero" id="hero">
  <div class="hero-inner">
    <div class="hero-content reveal-l">
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
    </div>
    <div class="hero-form-panel reveal-r" id="hero-form">
      <h3>Calculez votre montant remboursable</h3>
      <p class="form-subtitle">Estimation gratuite en 24h · Sans engagement</p>
      <form data-landing="Formation CSF">
        <input type="hidden" name="source" value="formation">
        <div class="form-group">
          <label for="name">Nom complet</label>
          <input type="text" id="name" name="Nom" placeholder="Votre nom" required>
        </div>
        <div class="form-group">
          <label for="company">Entreprise</label>
          <input type="text" id="company" name="Entreprise" placeholder="Nom de votre entreprise" required>
        </div>
        <div class="form-group">
          <label for="sector">Secteur d'activité</label>
          <input type="text" id="sector" name="Secteur" placeholder="Ex: Agroalimentaire, Industrie..." required>
        </div>
        <div class="form-group">
          <label for="employees">Nombre d'employés à former</label>
          <select id="employees" name="Employés" required>
            <option value="" disabled selected>Sélectionnez</option>
            <option value="1-5">1 à 5 employés</option>
            <option value="6-15">6 à 15 employés</option>
            <option value="16-30">16 à 30 employés</option>
            <option value="30+">Plus de 30 employés</option>
          </select>
        </div>
        <div class="form-group">
          <label for="whatsapp">WhatsApp</label>
          <input type="tel" id="whatsapp" name="WhatsApp" placeholder="+212 6XX XXX XXX" required>
        </div>
        <button type="submit" class="btn-submit" data-cta="form-submit" data-page="formation">CALCULER MON REMBOURSEMENT →</button>
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
    <div class="trust-badge badge-premium"><span class="badge-icon">📋</span> Éligible CSF OFPPT — 15+ ans d'expérience ingénierie de formation</div>
  </div>
</div>

<!-- ══ PROBLÈME ══ -->
<section class="section section-problems">
  <div class="section-inner">
    <span class="section-label reveal">Le problème</span>
    <h2 class="section-title reveal">Vous payez des formations que l'État peut rembourser.</h2>
    <div class="problems-grid">
      <div class="problem-card reveal" style="--i:0">
        <span class="problem-num">01</span>
        <h4>Formation payée sans remboursement</h4>
        <p>40 000 à 150 000 MAD dépensés en formation chaque année — jamais récupérés parce que le dossier CSF n'a jamais été monté.</p>
        <span class="problem-consequence">→ Budget formation gaspillé</span>
      </div>
      <div class="problem-card reveal" style="--i:1">
        <span class="problem-num">02</span>
        <h4>Équipes non formées = performance en berne</h4>
        <p>Des collaborateurs sans formation adaptée entraînent des erreurs opérationnelles, une baisse de productivité et un turnover élevé. La montée en compétences est indispensable.</p>
        <span class="problem-consequence">→ Productivité en baisse</span>
      </div>
      <div class="problem-card reveal" style="--i:2">
        <span class="problem-num">03</span>
        <h4>Dossier administratif abandonné</h4>
        <p>La complexité administrative des CSF (formulaires, justificatifs, délais) mène à zéro remboursement malgré les formations réalisées.</p>
        <span class="problem-consequence">→ 0 MAD remboursés</span>
      </div>
    </div>
  </div>
</section>

<!-- ══ SOLUTION ══ -->
<section class="section section-solution">
  <div class="section-inner">
    <span class="section-label reveal">La méthode</span>
    <h2 class="section-title reveal">Notre processus en 4 étapes</h2>
    <div class="timeline">
      <div class="timeline-step reveal">
        <div class="timeline-num">1</div>
        <div class="timeline-content">
          <h4>Diagnostic & calcul du remboursement</h4>
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
          <h4>Formation terrain & remboursement</h4>
          <p class="timeline-duration">Selon le plan</p>
          <p>Formations dispensées par nos experts terrain directement sur site. Suivi post-formation et maximum de remboursement obtenu.</p>
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
      <h3>Entreprise agroalimentaire — Casablanca</h3>
      <div class="case-before-after">
        <div class="case-col before">
          <h5>Avant Afflatus</h5>
          <ul>
            <li>Budget formation payé de poche</li>
            <li>Aucun dossier CSF déposé</li>
            <li>Compétences des équipes non développées</li>
          </ul>
        </div>
        <div class="case-col after">
          <h5>Après Afflatus</h5>
          <ul>
            <li>18 employés formés (Hygiène, Sécurité, Management)</li>
            <li>160 000 MAD remboursés via CSF</li>
            <li>Coût net pour l'entreprise : < 12 000 MAD</li>
            <li>Montée en compétences mesurable et documentée</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- ══ SOCIAL PROOF PREMIUM — OFPPT ══ -->
<section class="section" style="padding: 80px 24px;">
  <div class="section-inner">
    <div class="social-proof-premium reveal">
      <h3>Éligible aux Contrats Spéciaux de Formation de l'OFPPT</h3>
      <p>Afflatus Consulting Group est éligible aux Contrats Spéciaux de Formation (CSF) de l'OFPPT avec plus de 15 ans d'expérience dans l'ingénierie de formation, le montage et la gestion administrative des dossiers de financement. Notre expertise garantit un taux de validation de 100% des dossiers déposés.</p>
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

<!-- ══ OFFRE — TABLEAU COMPARATIF ══ -->
<section class="offer-section">
  <div class="section-inner">
    <h2 class="section-title reveal" style="text-align:center">Pourquoi Afflatus ?</h2>
    <p class="section-subtitle reveal" style="text-align:center; margin: 0 auto 40px;">Comparaison avec les autres organismes de formation</p>
    <div style="overflow-x: auto;" class="reveal">
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
          <tr><td>Formateurs experts</td><td class="cross">❌ Formateurs généralistes</td><td class="check">✅ Experts terrain avec +15 ans d'expérience</td></tr>
          <tr><td>Suivi post-formation</td><td class="cross">❌ Aucun</td><td class="check">✅ Accompagnement continu</td></tr>
          <tr><td>Remboursement maximisé</td><td class="cross">❌ Non garanti</td><td class="check">✅ 100% dossiers validés</td></tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- ══ TRUSTED BY ══ -->
<section class="trusted-section reveal">
  <p class="trusted-label">Ils nous font confiance</p>
  <div class="trusted-logos">
    <span class="logo-chip">Traspex Mining</span>
    <span class="logo-chip">Noor Fes</span>
    <span class="logo-chip">LePlastique</span>
    <span class="logo-chip">Unilever</span>
    <span class="logo-chip">International Paper</span>
    <span class="logo-chip">Aïcha</span>
  </div>
</section>

<!-- ══ GARANTIE ══ -->
<section class="section" style="padding: 60px 24px;">
  <div class="guarantee-box reveal">
    <h3>Notre engagement</h3>
    <p>Si votre dossier CSF n'est pas validé par l'OFPPT après notre montage, nous reprenons l'intégralité des corrections sans frais supplémentaires. En 15 ans, 100% de nos dossiers ont été validés.</p>
    <blockquote>"Chaque année sans CSF, c'est jusqu'à 200 000 MAD que votre entreprise laisse sur la table." — Ismail Idrissi</blockquote>
  </div>
</section>

<!-- ══ FAQ ══ -->
<section class="section section-faq">
  <div class="section-inner">
    <h2 class="section-title reveal" style="text-align:center">Questions fréquentes</h2>
    <div class="faq-grid" style="margin-top: 40px;">
      <div class="faq-card reveal">
        <h4>Qu'est-ce que les Contrats Spéciaux de Formation ?</h4>
        <p>Les CSF sont un programme de l'OFPPT qui rembourse aux entreprises marocaines jusqu'à 200 000 MAD par an pour leurs formations. Le budget non utilisé chaque année est perdu.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Toutes les entreprises sont-elles éligibles ?</h4>
        <p>Oui, toute entreprise assujettie à la Taxe de Formation Professionnelle (TFP) est éligible. Nous vérifions votre éligibilité gratuitement lors du diagnostic initial.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Combien de temps pour recevoir le remboursement ?</h4>
        <p>Le remboursement intervient généralement 2 à 4 mois après la validation du dossier par l'OFPPT. Nous optimisons les délais grâce à notre expertise administrative.</p>
      </div>
      <div class="faq-card reveal">
        <h4>Quels types de formations proposez-vous ?</h4>
        <p>Nous proposons des formations sur mesure dans de nombreux domaines : management, sécurité, hygiène, qualité, développement personnel, gestion de projet, et bien d'autres. Chaque programme est adapté à votre secteur d'activité.</p>
      </div>
    </div>
  </div>
</section>

<!-- ══ FINAL CTA ══ -->
<section class="final-cta">
  <h2 class="reveal">Ne laissez plus 200 000 MAD sur la table.</h2>
  <p class="reveal">Calculez votre montant remboursable et lancez votre plan de formation.</p>
  <div class="final-cta-buttons reveal">
    <a href="#hero-form" class="btn-cta-primary" data-cta="final-cta" data-page="formation">CALCULER MON REMBOURSEMENT →</a>
    <a href="<?php echo WHATSAPP_URL; ?>?text=<?php echo urlencode('Bonjour, je souhaite calculer le montant CSF remboursable pour ma formation.'); ?>"
       target="_blank" rel="noopener" class="btn-cta-whatsapp" data-cta="final-whatsapp" data-page="formation">
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
