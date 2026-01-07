<?php
/**
 * Tejarat International - Main Entry Point
 * Industry-standard PHP application with unified routing
 */

// Load configuration
require_once __DIR__ . '/config/config.php';

// Get current section and page
$section = getCurrentSection();
$page = getCurrentPage();

// Determine which page file to load
$pageFile = null;

if ($section === 'home') {
    if ($page === 'contact') {
        $pageFile = PAGES_PATH . '/contact.php';
    } else {
        $pageFile = PAGES_PATH . '/home.php';
    }
} elseif ($section === 'exports' || $section === 'defense') {
    // Check if page exists in section directory
    $sectionPageFile = PAGES_PATH . '/' . $section . '/' . $page . '.php';
    
    if (file_exists($sectionPageFile)) {
        $pageFile = $sectionPageFile;
    } elseif ($page === 'contact') {
        // Unified contact page
        $pageFile = PAGES_PATH . '/contact.php';
    } else {
        // Default to section index
        $pageFile = PAGES_PATH . '/' . $section . '/index.php';
    }
} else {
    // Invalid section, redirect to home
    header('Location: index.php');
    exit;
}

// Verify page file exists
if (!file_exists($pageFile)) {
    // 404 - page not found, redirect to home
    header('Location: index.php');
    exit;
}

// Include header
include_once INCLUDES_PATH . '/header.php';

// Include the requested page content
include $pageFile;

// Include footer
include_once INCLUDES_PATH . '/footer.php';