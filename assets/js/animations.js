(function () {
  'use strict';

  var revealSelector = '[data-reveal], .reveal, .reveal-l, .reveal-r';

  var revealObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add('is-visible');
          revealObserver.unobserve(entry.target);
        }
      });
    },
    { threshold: 0.12, rootMargin: '0px 0px -40px 0px' }
  );

  document.querySelectorAll(revealSelector).forEach(function (el) {
    revealObserver.observe(el);
  });

  var counterObserver = new IntersectionObserver(
    function (entries) {
      entries.forEach(function (entry) {
        if (!entry.isIntersecting) return;
        var el = entry.target;
        var end = parseFloat(el.dataset.count);
        if (Number.isNaN(end)) {
          counterObserver.unobserve(el);
          return;
        }
        var suffix = el.dataset.suffix || '';
        var prefix = el.dataset.prefix || '';
        var duration = 2000;
        var start = performance.now();

        function update(now) {
          var elapsed = now - start;
          var progress = Math.min(elapsed / duration, 1);
          var eased = 1 - Math.pow(1 - progress, 3);
          var val;
          if (Number.isInteger(end)) {
            val = Math.round(eased * end);
          } else {
            val = (eased * end).toFixed(1);
          }
          el.textContent = prefix + val + suffix;
          if (progress < 1) {
            requestAnimationFrame(update);
          }
        }

        requestAnimationFrame(update);
        counterObserver.unobserve(el);
      });
    },
    { threshold: 0.5 }
  );

  document.querySelectorAll('[data-count]').forEach(function (el) {
    counterObserver.observe(el);
  });

  var progressBar = document.querySelector('.scroll-progress');
  if (progressBar) {
    window.addEventListener(
      'scroll',
      function () {
        var scrolled = window.scrollY;
        var total = document.documentElement.scrollHeight - window.innerHeight;
        var pct = total > 0 ? Math.min((scrolled / total) * 100, 100) : 0;
        progressBar.style.width = pct + '%';
      },
      { passive: true }
    );
  }

  function pickHeroPrimaryCta() {
    return document.querySelector(
      '.hero .hero-ctas .btn-primary, .hero .btn-primary, .hero .btn-submit, .services-hero .btn-primary'
    );
  }

  var primaryCta = pickHeroPrimaryCta();
  if (primaryCta && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    window.setTimeout(function () {
      primaryCta.classList.add('pulse');
    }, 4000);
  }
})();
