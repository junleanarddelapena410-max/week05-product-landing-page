# Smokes n' Booze — Responsive Product Landing Page

## 1. Project Title
**Smokes n' Booze** — Responsive Product Landing Page (Laravel Blade + Tailwind CSS)

## 2. Introduction
A **product landing page** is a single, focused web page designed to introduce a
business, product, or service and drive one clear action — signing up, contacting
the business, or making a purchase. Unlike a full multi-page website, it keeps
visitors on one page and guides them from "what is this?" to "get started" with
as little friction as possible.

Landing pages matter for small businesses like **Smokes n' Booze** because they:
- Give the shop a professional online presence beyond social media.
- Present products, pricing, and location in one organized place.
- Build trust through testimonials and a clear, modern design.
- Convert casual visitors into customers with clear calls-to-action.

The purpose of this project was to design and build a fully responsive landing
page for a real local business (Smokes n' Booze, a vape & spirits shop) using
**Laravel Blade Components** for modular UI and **Tailwind CSS** for styling —
this build is **frontend/landing-page only** (no backend, no database, no forms
that submit data).

## 3. Objectives
- Build a responsive interface using Tailwind CSS (mobile, tablet, desktop).
- Create reusable Blade Components to eliminate duplicated markup.
- Apply Flexbox and CSS Grid for layout.
- Organize view files following Laravel conventions (`layouts`, `components`, `pages`).
- Apply consistent typography, spacing, and a cohesive color palette.
- Document the frontend architecture and component design.

## 4. Responsive Web Design
- **Mobile-First Design:** base utility classes target small screens first;
  `sm:` / `lg:` prefixes progressively enhance the layout for larger viewports.
- **Responsive Breakpoints:** `sm` (≥640px), `lg` (≥1024px) are used to switch
  grid columns (e.g., feature cards go from 1 → 2 → 3 columns).
- **Flexbox:** used in the navbar, button groups, and testimonial card headers.
- **CSS Grid:** used for the features grid, pricing cards, testimonials, and footer columns.
- **UX:** sticky navbar for constant access to navigation, generous spacing,
  and a single accent color (amber) to draw the eye to calls-to-action.

Responsive design matters because most customers will browse on their phones —
a layout that breaks or requires zooming/pinching directly costs the business
sales.

## 5. Tailwind CSS
- **Utility-First CSS:** styling is composed directly in markup (`px-6 py-3
  rounded-xl bg-stone-900`) instead of writing custom CSS classes.
- **Advantages:** no context-switching between HTML and CSS files, consistent
  design tokens (spacing, color scale), and small final CSS footprint.
- **Responsive Utility Classes:** e.g. `grid sm:grid-cols-2 lg:grid-cols-3` in
  the features and pricing sections.
- **Component Styling example** (from `button.blade.php`):
  ```html
  <button class="inline-flex items-center justify-center px-6 py-3 rounded-xl
      font-medium text-sm bg-stone-900 text-white hover:bg-amber-700
      transition-all duration-200 active:scale-[0.98]">
      Get Started
  </button>
  ```

> This project loads Tailwind via the **Play CDN** (`cdn.tailwindcss.com`) for a
> zero-build setup appropriate for a landing-page-only project. For a production
> Laravel app, swap this for a proper Vite + Tailwind build (see "Going Further" below).

## 6. Blade Components
**Blade Components** are reusable, self-contained view files (`x-component-name`)
that accept props and slots, similar to components in React or Vue.

**Why reusable components improve maintainability:**
- A change to the button style (e.g., new hover color) only needs to happen in
  `button.blade.php`, not in every place a button appears.
- Sections like `feature-card` and `pricing-card` are looped/repeated with
  different data instead of copy-pasting HTML.
- Keeps `home.blade.php` readable — it reads almost like an outline of the page.

**Components built for this project:**
| Component | Purpose |
|---|---|
| `navbar.blade.php` | Sticky nav with logo, links, auth buttons, mobile menu |
| `hero.blade.php` | Headline, description, CTA buttons, product mockup |
| `feature-card.blade.php` | Icon + title + description, reused 6x |
| `pricing-card.blade.php` | Product bundle: name, price, feature list, CTA — reused 3x |
| `testimonial-card.blade.php` | Customer photo/initials, name, role, review — reused 3x |
| `button.blade.php` | Shared button with `primary` / `secondary` / `ghost` variants |
| `footer.blade.php` | Company info, quick links, contact, social icons |

Example usage in `home.blade.php`:
```blade
<x-feature-card
    icon="🌬️"
    title="Premium E-Liquid Selection"
    description="Hundreds of flavors from trusted brands, restocked weekly." />
```

## 7. User Interface Design
- **Color Palette:** Modern minimalist / muted tones — `stone` neutrals
  (background, text, borders) with a single warm **amber** accent for CTAs and
  highlights. A near-black (`stone-900` / `stone-950`) is used for the navbar
  buttons, CTA section, and footer to anchor the palette.
- **Typography:** `Inter` (Google Fonts) — a clean, highly legible sans-serif
  used across headings and body text, with weight (400–800) doing the work of
  visual hierarchy instead of multiple font families.
- **Iconography:** simple emoji icons for feature cards (lightweight, no icon
  library dependency) — easily swappable for an SVG icon set later.
- **Button Styles:** `primary` (solid dark, amber on hover), `secondary`
  (outlined), `ghost` (text-only) — consistent padding, rounded corners, and a
  subtle press animation (`active:scale-[0.98]`).
- **Card Design:** consistent `rounded-2xl`, soft borders, and hover shadow
  lift across feature, pricing, and testimonial cards.
- **Layout Consistency:** all sections share the same `max-w-7xl` container and
  vertical rhythm (`py-20`), so the page feels like one coherent system rather
  than stacked, unrelated blocks.

These choices reduce visual noise and keep the customer's attention on the
products and the call-to-action buttons.

## 8. Folder Structure
```
week05-product-landing-page/
├── resources/
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php        # Base HTML shell, Tailwind + font + Alpine includes
│       ├── components/              # Reusable Blade components (see table above)
│       │   ├── navbar.blade.php
│       │   ├── hero.blade.php
│       │   ├── feature-card.blade.php
│       │   ├── pricing-card.blade.php
│       │   ├── testimonial-card.blade.php
│       │   ├── button.blade.php
│       │   └── footer.blade.php
│       └── pages/
│           └── home.blade.php       # Assembles the full landing page
├── routes/
│   └── web.php                      # Single route rendering the landing page (no backend logic)
├── screenshots/                     # Add your before/after + responsive screenshots here
├── documentation/                   # Add before/after comparison images + notes here
└── README.md
```
- `layouts/` — the shared HTML skeleton every page extends.
- `components/` — small, reusable UI pieces used across the page.
- `pages/` — full pages built by combining layout + components.
- `screenshots/` / `documentation/` — evidence for grading (see checklist below).

## 9. Screenshots
Add screenshots to `screenshots/` for:
- [ ] Desktop View
- [ ] Tablet View
- [ ] Mobile View
- [ ] Navigation Bar
- [ ] Hero Section
- [ ] Features Section
- [ ] Pricing Section
- [ ] Testimonials
- [ ] Footer
- [ ] Blade Components folder (VS Code)
- [ ] GitHub Repository page

## Before-and-After Comparison
Add to `documentation/`:
- **Before:** your first wireframe or unstyled HTML layout.
- **After:** the final polished, responsive Tailwind version (this project).

## How to Run This Project
This project is **landing-page only** — there's no controller, database, or
backend logic, just Blade views styled with Tailwind.

1. Install Laravel (if you don't already have a project):
   ```bash
   composer create-project laravel/laravel week05-product-landing-page
   ```
2. Copy this project's `resources/views/` and `routes/web.php` into your Laravel
   project, overwriting the defaults.
3. Serve it:
   ```bash
   php artisan serve
   ```
4. Visit `http://127.0.0.1:8000` in your browser.

No `.env` database configuration, migrations, or `npm install` are required —
Tailwind and Alpine.js load from CDN.

### Going further (optional, not required for this assignment)
To replace the CDN Tailwind with a real Vite build:
```bash
npm install -D tailwindcss postcss autoprefixer
npx tailwindcss init -p
npm install
npm run build
```
Then update `layouts/app.blade.php` to use `@vite(['resources/css/app.css'])`
instead of the CDN `<script>` tag.

## Reflection
This project reinforced how far a small set of well-designed, reusable
components can go — the entire landing page is built from just seven Blade
components. Tailwind's utility classes made responsive breakpoints fast to
iterate on without writing a single custom CSS file, and keeping the color
palette to one neutral scale plus one accent made the whole page feel
cohesive rather than assembled from mismatched sections.
