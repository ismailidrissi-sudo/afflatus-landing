// ══════════════════════════════════════════════════════════════
// AFFLATUS LANDING PAGES — COOKIE CONSENT (RGPD / CNDP)
// Google Consent Mode v2 compliant
// ══════════════════════════════════════════════════════════════

(function() {
  var CONSENT_KEY = 'afflatus_cookie_consent';
  var banner = document.getElementById('cookie-consent');
  if (!banner) return;

  // Check if consent already given
  var consent = localStorage.getItem(CONSENT_KEY);
  if (consent === 'accepted' || consent === 'declined') {
    if (consent === 'accepted') enableTracking();
    return;
  }

  // Show banner
  banner.style.display = 'flex';

  // Expose functions globally
  window.acceptCookies = function() {
    localStorage.setItem(CONSENT_KEY, 'accepted');
    banner.style.display = 'none';
    enableTracking();
  };

  window.declineCookies = function() {
    localStorage.setItem(CONSENT_KEY, 'declined');
    banner.style.display = 'none';
  };

  function enableTracking() {
    // Google Consent Mode v2 — grant all
    if (typeof gtag === 'function') {
      gtag('consent', 'update', {
        'ad_storage': 'granted',
        'analytics_storage': 'granted',
        'ad_user_data': 'granted',
        'ad_personalization': 'granted'
      });
    }
  }
})();
