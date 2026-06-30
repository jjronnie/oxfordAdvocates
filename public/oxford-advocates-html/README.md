# Oxford Advocates — Vanilla HTML Build

Static HTML version of the Oxford Advocates website. No build step, no
framework — easy to drop into any backend (PHP, Django, Rails, Laravel,
ASP.NET, Express, etc.).

## Files

```
oxford-advocates-html/
├── index.html       # Home
├── about.html       # About / story / values / team preview
├── services.html    # Practice areas + engagement model
├── team.html        # Full team grouped by tier
├── portfolio.html   # Selected matters + sectors
├── contact.html     # Form + info + map
├── css/
│   └── styles.css   # All design tokens, components, animations
├── js/
│   └── main.js      # Header scroll, mobile menu, reveal-on-scroll, form, lucide hydration
└── assets/          # Images (hero, team portraits, etc.)
```

## How to use

Open any `.html` file directly in a browser, or serve the folder with any
static server:

```bash
# Python
python3 -m http.server 8080

# Node
npx serve .
```

## Integrating with a backend

Each page is fully self-contained. The shared **header** and **footer** markup
is repeated in every file. To convert into templates:

- **PHP**: extract `<!-- HEADER -->...</header>` into `header.php` and
  `<footer>...</footer>` into `footer.php`, then `include` them.
- **Django / Jinja**: paste header + footer into `base.html` and use
  `{% block content %}...{% endblock %}` for the body of each page.
- **Express / Handlebars / EJS**: same idea — put header/footer in a layout
  partial and render the body content inside.

The `<form data-contact-form>` in `contact.html` currently shows a success
state via JavaScript only. Swap the `<form>` element's `action` and `method`
attributes (or remove the JS preventDefault in `js/main.js`) to wire it to
your backend endpoint.

## Dependencies (loaded via CDN)

- **Tailwind CSS** (CDN runtime — for utility classes)
- **Lucide Icons** (UMD — icons hydrated from `<i data-lucide="...">`)
- **Google Fonts** — Cormorant Garamond, Inter, JetBrains Mono

All styling that isn't pure Tailwind utility lives in `css/styles.css` so it
survives even if you remove the Tailwind CDN later.

## Design tokens

All colors, gradients, shadows, fonts and spacing live in CSS custom
properties at the top of `css/styles.css`. Change them once and they
propagate everywhere.
