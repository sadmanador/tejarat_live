<?php
/**
 * Tejarat International - Configuration File
 * Central configuration for the application
 */

// Define base paths
define('BASE_PATH', __DIR__ . '/..');
define('PUBLIC_PATH', BASE_PATH . '/public');
define('INCLUDES_PATH', BASE_PATH . '/includes');
define('PAGES_PATH', BASE_PATH . '/pages');

// Define base URL (adjust for your environment)
define('BASE_URL', '/');

// Asset paths
define('CSS_PATH', 'public/css/');
define('JS_PATH', 'public/js/');
define('IMG_PATH', 'public/img/');
define('FONTS_PATH', 'public/fonts/');

/**
 * Get current section from URL
 * @return string Current section (home, exports, defense)
 */
function getCurrentSection() {
    return isset($_GET['section']) ? $_GET['section'] : 'home';
}

/**
 * Get current page from URL
 * @return string Current page
 */
function getCurrentPage() {
    return isset($_GET['page']) ? $_GET['page'] : 'index';
}

/**
 * Build URL for routing
 * @param string $section Section name (home, exports, defense)
 * @param string $page Page name (optional)
 * @return string URL
 */
function buildUrl($section = 'home', $page = null) {
    if ($section === 'home' && !$page) {
        return 'index.php';
    }
    
    $url = 'index.php?section=' . urlencode($section);
    if ($page && $page !== 'index') {
        $url .= '&page=' . urlencode($page);
    }
    return $url;
}

/**
 * Check if current section matches
 * @param string $section Section to check
 * @return bool
 */
function isCurrentSection($section) {
    return getCurrentSection() === $section;
}

/**
 * Get asset path
 * @param string $asset Asset path relative to public/
 * @return string Full asset path
 */
function asset($asset) {
    return 'public/' . ltrim($asset, '/');
}
