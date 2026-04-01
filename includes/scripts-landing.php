<?php
/**
 * Deferred JS for landing pages.
 * Optional: set $include_tracking_events = true before include (loads tracking-events.php).
 * Optional: set $include_consent_js = true to load consent.js after main.
 */
if (!empty($include_tracking_events)) {
    require __DIR__ . '/tracking-events.php';
}
?>
<script src="/assets/js/animations.js" defer></script>
<script src="/assets/js/main.js" defer></script>
<?php if (!empty($include_consent_js)) : ?>
<script src="/assets/js/consent.js" defer></script>
<?php endif; ?>
