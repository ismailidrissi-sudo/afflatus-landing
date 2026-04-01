<?php
/**
 * Image + texte pour la revendication BRCGS (barre sticky).
 * Avant inclusion : définir $sticky_brcgs_text (chaîne UTF-8, sans HTML).
 */
$sticky_brcgs_text = $sticky_brcgs_text ?? '';
?>
<span class="sticky-text-inner">
  <img src="/assets/img/brcgs-consultant-approuve-maroc-afrique.jpg" alt="Seul consultant BRCGS approuvé au Maroc et en Afrique" class="sticky-brcgs-approval-img" width="160" height="48" loading="lazy" decoding="async">
  <span class="sticky-claim-text"><?php echo htmlspecialchars($sticky_brcgs_text, ENT_QUOTES, 'UTF-8'); ?></span>
</span>
