// ══════════════════════════════════════════════════════════════
// AFFLATUS LANDING PAGES — MAIN JS
// Reveal animations · Form handling · CTA tracking
// ══════════════════════════════════════════════════════════════

// ── INTERSECTION OBSERVER — REVEAL ANIMATIONS ──
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) e.target.classList.add('in'); });
}, { threshold: 0.1 });
document.querySelectorAll('.reveal, .reveal-l, .reveal-r').forEach(el => observer.observe(el));

// ── SMOOTH SCROLL FOR ANCHOR LINKS ──
document.querySelectorAll('a[href^="#"]').forEach(a => {
  a.addEventListener('click', function(e) {
    const target = document.querySelector(this.getAttribute('href'));
    if (target) {
      e.preventDefault();
      target.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
  });
});

// ── FORM SUBMISSION — DB Storage + WhatsApp + Conversion Tracking ──
document.querySelectorAll('form[data-landing]').forEach(form => {
  form.addEventListener('submit', function(e) {
    e.preventDefault();

    const pageName = this.dataset.landing;
    const data = new FormData(this);
    const formObj = {};
    let msg = '🔔 Nouvelle demande — ' + pageName + ':\n\n';

    data.forEach((v, k) => {
      if (v) {
        msg += k + ': ' + v + '\n';
        formObj[k] = v;
      }
    });

    // Store in database via AJAX
    fetch('/includes/form-handler.php', {
      method: 'POST',
      body: data
    }).catch(function() { /* silent fail — WhatsApp is primary */ });

    // Fire conversion tracking on ALL platforms
    if (typeof trackFormConversion === 'function') {
      trackFormConversion(pageName, formObj);
    }

    // Small delay to allow pixels to fire, then redirect to WhatsApp
    setTimeout(function() {
      window.open('https://wa.me/212661863618?text=' + encodeURIComponent(msg), '_blank');
      // Optional: redirect to thank you page
      // window.location.href = '/merci?source=' + encodeURIComponent(pageName);
    }, 500);
  });
});

// ── CTA CLICK TRACKING ──
document.querySelectorAll('[data-cta]').forEach(btn => {
  btn.addEventListener('click', function() {
    if (typeof trackCTAClick === 'function') {
      trackCTAClick(this.dataset.cta, this.dataset.page || document.title);
    }
  });
});

// ── STICKY BAR HIDE ON SCROLL DOWN ──
let lastScroll = 0;
const stickyBar = document.querySelector('.sticky-bar');
if (stickyBar) {
  window.addEventListener('scroll', function() {
    const currentScroll = window.scrollY;
    if (currentScroll > lastScroll && currentScroll > 300) {
      stickyBar.style.transform = 'translateY(-100%)';
    } else {
      stickyBar.style.transform = 'translateY(0)';
    }
    lastScroll = currentScroll;
  });
}

// ── NAV BACKGROUND ON SCROLL ──
const nav = document.querySelector('.main-nav');
if (nav) {
  window.addEventListener('scroll', function() {
    if (window.scrollY > 50) {
      nav.style.boxShadow = '0 4px 24px rgba(0,0,0,.15)';
    } else {
      nav.style.boxShadow = 'none';
    }
  });
}
