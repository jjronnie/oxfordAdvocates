/* Oxford Advocates — shared interactions
   - Header scroll state
   - Mobile menu toggle
   - Active nav link highlighting
   - IntersectionObserver reveal animations
   - Lucide icon hydration (relies on lucide CDN)
   - Footer year
*/
(function () {
  function ready(fn) {
    if (document.readyState !== "loading") fn();
    else document.addEventListener("DOMContentLoaded", fn);
  }

  // Mark JS as available so .reveal CSS becomes active
  document.documentElement.classList.add("js");

  ready(function () {
    // 1. Header scroll state
    const header = document.querySelector(".site-header");
    if (header) {
      const onScroll = () => {
        if (window.scrollY > 24) header.classList.add("scrolled");
        else header.classList.remove("scrolled");
      };
      onScroll();
      window.addEventListener("scroll", onScroll, { passive: true });
    }

    // 2. Mobile menu toggle
    const toggle = document.querySelector("[data-menu-toggle]");
    const menu = document.querySelector("[data-mobile-menu]");
    const iconOpen = document.querySelector("[data-icon-open]");
    const iconClose = document.querySelector("[data-icon-close]");
    if (toggle && menu) {
      toggle.addEventListener("click", function () {
        const isOpen = menu.classList.toggle("open");
        if (iconOpen && iconClose) {
          iconOpen.style.display = isOpen ? "none" : "";
          iconClose.style.display = isOpen ? "" : "none";
        }
      });
    }

    // 3. Active nav link
    const path = window.location.pathname.split("/").pop() || "index.html";
    document.querySelectorAll("[data-nav-link]").forEach((a) => {
      const href = a.getAttribute("href");
      if (href === path || (path === "" && href === "index.html")) {
        a.classList.add("active");
      }
    });

    // 4. Reveal on scroll
    const revealEls = document.querySelectorAll(".reveal");
    if ("IntersectionObserver" in window && revealEls.length) {
      const io = new IntersectionObserver((entries) => {
        entries.forEach((e) => {
          if (e.isIntersecting) {
            const delay = e.target.getAttribute("data-delay");
            if (delay) e.target.style.transitionDelay = delay + "ms";
            e.target.classList.add("in");
            io.unobserve(e.target);
          }
        });
      }, { rootMargin: "0px 0px -60px 0px", threshold: 0.05 });
      revealEls.forEach((el) => io.observe(el));
    } else {
      revealEls.forEach((el) => el.classList.add("in"));
    }

    // 5. Footer year
    const yearEl = document.querySelector("[data-year]");
    if (yearEl) yearEl.textContent = new Date().getFullYear();

    // 6. Lucide icons
    if (window.lucide && typeof window.lucide.createIcons === "function") {
      window.lucide.createIcons();
    }

    // 7. Contact form (no-op — wire up to backend of choice)
    const form = document.querySelector("[data-contact-form]");
    const successEl = document.querySelector("[data-contact-success]");
    if (form && successEl) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        form.style.display = "none";
        successEl.style.display = "block";
        if (window.lucide) window.lucide.createIcons();
      });
    }
  });
})();
