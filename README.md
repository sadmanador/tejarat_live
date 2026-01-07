# Tejarat International

A unified vanilla PHP application for Tejarat International, featuring **Exports** and **Defense** supply divisions.

## Project Structure

```
/tejarat_live
├── index.php                 # Main router/entry point
├── config/
│   └── config.php           # Application configuration & helpers
├── includes/
│   ├── header.php           # Unified header
│   ├── navbar.php           # Conditional navigation
│   ├── footer.php           # Unified footer
│   ├── top_bar.php          # Top bar component
│   └── mobile_menu.php      # Mobile menu
├── pages/
│   ├── home.php             # Home page
│   ├── contact.php          # Contact page
│   ├── exports/             # Exports section pages
│   │   ├── index.php
│   │   ├── about.php
│   │   ├── services.php
│   │   ├── message.php
│   │   ├── partner.php
│   │   └── profile.php
│   └── defense/             # Defense section pages
│       ├── index.php
│       ├── about.php
│       ├── services.php
│       ├── message.php
│       ├── partner.php
│       └── profile.php
└── public/                  # Public assets
    ├── css/
    ├── js/
    ├── fonts/
    └── img/
        ├── exports/
        └── defense/
```

## How It Works

### Routing

The application uses a simple query-based routing system:

- **Home**: `index.php` or `index.php?section=home`
- **Exports**: `index.php?section=exports`
- **Defense**: `index.php?section=defense`
- **Sub-pages**: `index.php?section=exports&page=about`

### Navigation

The navbar adapts based on the current section:

- **Home page**: Shows Home | Contact
- **Exports page**: Shows Home | Defense | Our Concern | About us | Contacts
- **Defense page**: Shows Home | Exports | Our Concern | Our Clients | About us | Contacts

### Configuration

The `config/config.php` file provides:
- Path constants for directories
- Helper functions for routing (`buildUrl()`, `getCurrentSection()`)
- Asset helper (`asset()`) for consistent asset paths

## Development

### Running Locally

1. Use a local PHP server:
   ```bash
   php -S localhost:8000
   ```

2. Access the application at `http://localhost:8000`

### Adding New Pages

1. Create the page file in appropriate directory (`pages/exports/` or `pages/defense/`)
2. Remove any `include` statements for header/footer (router handles this)
3. Use `asset()` helper for all asset paths
4. Link to the page using `buildUrl($section, $page)`

### Asset Management

All assets are in the `public/` directory. Use the `asset()` helper function:

```php
<img src="<?= asset('img/exports/product.jpg') ?>" alt="Product">
<link rel="stylesheet" href="<?= asset('css/style.css') ?>">
```

## Features

- ✅ Unified codebase (no duplicate code)
- ✅ Industry-standard folder structure
- ✅ Conditional navigation based on section
- ✅ Clean routing system
- ✅ Centralized configuration
- ✅ Responsive design (Bootstrap 3)

## Technology Stack

- PHP (vanilla)
- Bootstrap 3.3.6
- jQuery 1.12.4
- Owl Carousel
- Font Awesome

## Credits

**Tejarat International (TI)** - Anytime, Anywhere