<?php
/**
 * Bloc cartes « autres expertises » — mêmes intitulés sur QSE, Food, Formation, Anir.io.
 * Attendu : $anatomy_current_service = 'qse-esg'|'food-safety'|'formation'|'anir-ia'
 */
$anatomy_current_service = $anatomy_current_service ?? '';
$anatomy_sibling_allowed = ['qse-esg', 'food-safety', 'formation', 'anir-ia'];
if (!in_array($anatomy_current_service, $anatomy_sibling_allowed, true)) {
    $anatomy_current_service = '';
}

$anatomy_sibling_cards = [
    'qse-esg' => [
        'href' => '/qse-esg',
        'title' => 'QSE & ESG',
        'desc' => 'ISO 9001, 14001, 45001, reporting ESG et due diligence fournisseur.',
    ],
    'food-safety' => [
        'href' => '/food-safety',
        'title' => 'Food safety',
        'desc' => 'BRCGS, IFS, FSSC 22000 — consultant BRCGS approuvé en Afrique.',
    ],
    'formation' => [
        'href' => '/formation',
        'title' => 'Formation',
        'desc' => 'Plans sur mesure et dossiers CSF OFPPT — jusqu\'à 200 000 MAD/an remboursables.',
    ],
    'anir-ia' => [
        'href' => '/anir-ia',
        'title' => 'Anir.io',
        'desc' => 'IA agentique : gouvernance, intégration ERP/CRM, human-in-the-loop.',
    ],
];
?>
<div class="anatomy-service-cards">
<?php foreach ($anatomy_sibling_cards as $slug => $card) : ?>
<?php if ($slug === $anatomy_current_service) {
    continue;
} ?>
  <a href="<?php echo htmlspecialchars($card['href']); ?>" class="anatomy-service-card">
    <h3><?php echo htmlspecialchars($card['title']); ?></h3>
    <p><?php echo htmlspecialchars($card['desc']); ?></p>
    <span class="anatomy-service-more">En savoir plus →</span>
  </a>
<?php endforeach; ?>
</div>
