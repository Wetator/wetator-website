# Wetator Website

Source code for the [wetator.org](https://www.wetator.org) website — the home of **Wetator**, a smart web application testing tool built on top of HtmlUnit.

The site is a static website generated with [Hugo](https://gohugo.io/) using a custom theme.

---

## Prerequisites

- [Hugo](https://gohugo.io/installation/) — minimum version **0.41**
- Git

## Getting Started

```bash
# Clone the repository
git clone https://github.com/Wetator/wetator-website.git
cd wetator-website

# Start the local development server with live reload
hugo server

# Open in your browser
open http://localhost:1313
```

## Project Structure

```
wetator-website/
├── config.toml                  # Hugo site configuration
├── content/                     # Page content (HTML files)
│   ├── _index.html              # Home page
│   ├── about/
│   ├── documentation/
│   │   ├── getting-started/
│   │   ├── general-concepts/
│   │   ├── reference/
│   │   ├── test-case-files/
│   │   ├── sample-reports/
│   │   ├── faq.html
│   │   └── philosophy.html
│   ├── download/
│   ├── news/
│   └── support.html
├── static/                      # Static assets (images, XSD files, sample reports)
│   ├── images/
│   ├── sample-reports/
│   └── xsd/
├── themes/
│   └── wetator/                 # Custom Hugo theme
│       ├── layouts/
│       │   ├── _default/        # Base templates
│       │   ├── partials/        # Reusable template fragments
│       │   │   ├── head.html
│       │   │   ├── header.html
│       │   │   ├── navigation.html
│       │   │   ├── sidebar.html
│       │   │   ├── footer.html
│       │   │   └── breadcrumb.html
│       │   ├── shortcodes/      # Custom Hugo shortcodes
│       │   ├── command-overview/
│       │   └── news/
│       └── static/
│           ├── css/
│           │   ├── normalize.css
│           │   ├── default.css  # Layout and responsive styles
│           │   ├── content.css  # Content and typography styles
│           │   └── tipsy.css    # Tooltip styles
│           └── js/
│               ├── wetator.js           # Site scripts (nav toggle, panels)
│               └── jquery.tipsy.js      # Tooltip plugin
└── public/                      # Generated output (do not edit manually)
```

## Building for Production

```bash
hugo
```

The generated site is written to the `public/` directory. This can be deployed to any static hosting provider (GitHub Pages, Netlify, etc.).

The repository is configured to deploy to `https://wetator.github.io/` — see `baseURL` in `config.toml`.

## Content Authoring

Content lives in the `content/` directory as `.html` files. Each file maps directly to a URL path. Hugo front matter (title, menu position, etc.) is defined at the top of each file.

To add a new page, create an `.html` file in the appropriate `content/` subdirectory. Navigation menu entries are configured via front matter and `config.toml`.

## Responsive Design

The site uses a custom two-column layout (content + sidebar) that adapts to smaller screens:

- **≥ 861px** — Full desktop layout with horizontal navigation and sidebar.
- **600–860px** — Tablet layout: logo and nav are scaled down to fit in a single header row.
- **≤ 600px** — Mobile layout: the navigation collapses behind a hamburger menu button, the two-column layout becomes a single column, and content images and tables scale to fit the screen.

## Theme

The custom `wetator` theme (in `themes/wetator/`) is MIT licensed. It uses [jQuery](https://jquery.com/) (1.10.2) for interactive elements such as toggle panels and tooltips.

## License

The theme is released under the [MIT License](themes/wetator/LICENSE).  
Website content is copyright © Ronald Brill.
