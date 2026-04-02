// ══════════════════════════════════════════════════════════════
// AFFLATUS LANDING PAGES — MAIN JS
// Form handling · CTA tracking · FAQ (reveal lives in animations.js)
// ══════════════════════════════════════════════════════════════

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

// ── FORM SUBMISSION — DB storage + conversion tracking + thank-you redirect ──
document.querySelectorAll('form[data-landing]').forEach(form => {
  form.addEventListener('submit', function(e) {
    e.preventDefault();

    const pageName = this.dataset.landing;
    const data = new FormData(this);
    const formObj = {};

    data.forEach((v, k) => {
      if (v) {
        formObj[k] = v;
      }
    });

    fetch('/includes/form-handler.php', {
      method: 'POST',
      headers: { 'X-Requested-With': 'XMLHttpRequest' },
      body: data
    }).catch(function() { /* still redirect so user sees confirmation */ });

    if (typeof trackFormConversion === 'function') {
      trackFormConversion(pageName, formObj);
    }

    setTimeout(function() {
      window.location.href = '/thank-you?source=' + encodeURIComponent(pageName);
    }, 400);
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

// ── NAV: classe .scrolled après 60px (anatomy §1) ──
const nav = document.querySelector('.main-nav');
function updateNavScrolled() {
  if (!nav) return;
  if (window.scrollY > 60) {
    nav.classList.add('scrolled');
  } else {
    nav.classList.remove('scrolled');
  }
}
if (nav) {
  window.addEventListener('scroll', updateNavScrolled, { passive: true });
  window.addEventListener('resize', updateNavScrolled);
  updateNavScrolled();
}

// ── FAQ ACCORDION (anatomy §6) — max-height + hidden for a11y ──
document.querySelectorAll('.faq-accordion').forEach(function(wrap) {
  wrap.querySelectorAll('.faq-item').forEach(function(item) {
    const btn = item.querySelector('.faq-question');
    const ans = item.querySelector('.faq-answer');
    if (!btn || !ans) return;

    function applyOpenState(open) {
      if (open) {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
        ans.hidden = false;
        ans.style.maxHeight = '0px';
        requestAnimationFrame(function() {
          ans.style.maxHeight = ans.scrollHeight + 'px';
        });
      } else {
        item.classList.remove('is-open');
        btn.setAttribute('aria-expanded', 'false');
        var instant = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
        if (instant) {
          ans.style.maxHeight = '0px';
          ans.hidden = true;
          return;
        }
        ans.style.maxHeight = ans.scrollHeight + 'px';
        requestAnimationFrame(function() {
          ans.style.maxHeight = '0px';
        });
        function onEnd(e) {
          if (e.propertyName !== 'max-height') return;
          ans.removeEventListener('transitionend', onEnd);
          if (!item.classList.contains('is-open')) {
            ans.hidden = true;
          }
        }
        ans.addEventListener('transitionend', onEnd);
        window.setTimeout(function() {
          ans.removeEventListener('transitionend', onEnd);
          if (!item.classList.contains('is-open')) {
            ans.hidden = true;
          }
        }, 700);
      }
    }

    if (item.classList.contains('is-open')) {
      ans.hidden = false;
      ans.style.maxHeight = ans.scrollHeight + 'px';
      btn.setAttribute('aria-expanded', 'true');
    } else {
      ans.hidden = true;
      ans.style.maxHeight = '0px';
      btn.setAttribute('aria-expanded', 'false');
    }

    btn.addEventListener('click', function() {
      applyOpenState(!item.classList.contains('is-open'));
    });
  });
});

// ── MOBILE NAV ──
const navToggle = document.getElementById('nav-toggle');
const navMenu = document.getElementById('nav-menu');
if (navToggle && navMenu) {
  navToggle.addEventListener('click', function() {
    const open = document.body.classList.toggle('nav-open');
    document.body.style.overflow = open ? 'hidden' : '';
    navToggle.setAttribute('aria-expanded', open ? 'true' : 'false');
    navToggle.setAttribute('aria-label', open ? 'Fermer le menu' : 'Ouvrir le menu');
  });
  navMenu.querySelectorAll('a').forEach(function(link) {
    link.addEventListener('click', function() {
      document.body.classList.remove('nav-open');
      document.body.style.overflow = '';
      navToggle.setAttribute('aria-expanded', 'false');
      navToggle.setAttribute('aria-label', 'Ouvrir le menu');
    });
  });
}
