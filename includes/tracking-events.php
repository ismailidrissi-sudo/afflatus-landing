<script>
// ══ UNIVERSAL CONVERSION TRACKING ══
function trackFormConversion(pageName, formData) {
  var conversionLabel = '<?php echo $gads_conversion_label ?? ""; ?>';
  if (conversionLabel) {
    gtag('event', 'conversion', {
      'send_to': '<?php echo GADS_CONVERSION_ID; ?>/' + conversionLabel,
      'value': 1.0,
      'currency': 'MAD'
    });
  }
  gtag('event', 'generate_lead', {
    'event_category': 'form',
    'event_label': pageName,
    'value': 1
  });
  fbq('track', 'Lead', {
    content_name: pageName,
    content_category: 'landing_page',
    value: 1.00,
    currency: 'MAD'
  });
  ttq.track('SubmitForm', {
    content_name: pageName,
    content_type: 'service'
  });
  if (window.lintrk) {
    window.lintrk('track', { conversion_id: 'XXXXXXX' });
  }
  dataLayer.push({
    'event': 'form_submission',
    'form_page': pageName,
    'form_data': formData
  });
}

function trackCTAClick(ctaName, pageName) {
  gtag('event', 'cta_click', {
    'event_category': 'engagement',
    'event_label': ctaName + ' — ' + pageName
  });
  fbq('trackCustom', 'CTAClick', { cta: ctaName, page: pageName });
  ttq.track('ClickButton', { content_name: ctaName });
  dataLayer.push({ 'event': 'cta_click', 'cta_name': ctaName, 'page_name': pageName });
}

// Scroll depth tracking
var scrollThresholds = [25, 50, 75, 90];
var scrollFired = {};
window.addEventListener('scroll', function() {
  var scrollPct = Math.round((window.scrollY / (document.body.scrollHeight - window.innerHeight)) * 100);
  scrollThresholds.forEach(function(threshold) {
    if (scrollPct >= threshold && !scrollFired[threshold]) {
      scrollFired[threshold] = true;
      gtag('event', 'scroll_depth', { 'percent': threshold, 'page': '<?php echo $page_slug; ?>' });
      dataLayer.push({ 'event': 'scroll_depth', 'depth': threshold });
    }
  });
});

// Time on page tracking
setTimeout(function() {
  gtag('event', 'engaged_visit', { 'page': '<?php echo $page_slug; ?>', 'seconds': 30 });
  dataLayer.push({ 'event': 'engaged_visit', 'seconds': 30 });
}, 30000);
setTimeout(function() {
  gtag('event', 'high_engagement', { 'page': '<?php echo $page_slug; ?>', 'seconds': 60 });
  fbq('trackCustom', 'HighEngagement', { page: '<?php echo $page_slug; ?>' });
}, 60000);
</script>
