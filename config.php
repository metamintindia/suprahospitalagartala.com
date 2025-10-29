<?php
/**
 * Supra Multi-Speciality Hospital
 * Configuration File
 * 
 * @version 1.0.0
 * @php 8.3+
 */

// Error Reporting (Disable in production)
error_reporting(E_ALL);
ini_set('display_errors', 1);

// ============================================
// BASE PATH DETECTION (FOR SUBFOLDER SUPPORT)
// ============================================
// Automatically detect if site is in subfolder
$script_name = str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME']));
$base_path = ($script_name === '/' || $script_name === '\\') ? '' : $script_name;

define('BASE_PATH', $base_path);
define('BASE_URL', 'http://' . $_SERVER['HTTP_HOST'] . BASE_PATH);

// Site Configuration
define('SITE_NAME', 'Supra Multi-Speciality Hospital');
define('SITE_TAGLINE', 'We Take Care of Your Health');
define('SITE_URL', BASE_URL);

// Contact Information
define('HOSPITAL_PHONE_1', '9362244977');
define('HOSPITAL_PHONE_2', '7085660887');
define('HOSPITAL_EMAIL', 'info@suprahospital.com');
define('HOSPITAL_ADDRESS', 'Old Motor Stand, Agartala, Tripura - 799001');

// Social Media Links
define('FACEBOOK_URL', '#');
define('TWITTER_URL', '#');
define('INSTAGRAM_URL', '#');
define('LINKEDIN_URL', '#');
define('YOUTUBE_URL', '#');

// Google Maps
define('GOOGLE_MAPS_EMBED', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3649.6577728103284!2d91.28867509999999!3d23.830765599999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3753f5001ea4fdc3%3A0x4a9b5fd69513e6f0!2sSupra%20Multi-speciality%20Hospital!5e0!3m2!1sen!2sin!4v1761733828000!5m2!1sen!2sin');

// Working Hours
define('WORKING_HOURS', 'Mon - Sat: 9:00 AM - 8:00 PM');
define('EMERGENCY_HOURS', 'Sunday: Emergency Only');

// Meta Information
define('META_DESCRIPTION', 'Supra Multi-Speciality Hospital in Agartala, Tripura offers world-class healthcare services with experienced doctors and modern facilities.');
define('META_KEYWORDS', 'hospital agartala, multi-specialty hospital, healthcare tripura, doctors agartala, medical services');

// Developer Information
define('DEVELOPER_NAME', 'Meta Mint Private Limited');
define('DEVELOPER_URL', 'https://www.metamintindia.com/');

// ============================================
// ASSETS PATH (SUBFOLDER COMPATIBLE)
// ============================================
// Use BASE_PATH to make paths work in subfolders
define('ASSETS_PATH', BASE_PATH . '/assets');
define('CSS_PATH', ASSETS_PATH . '/css');
define('JS_PATH', ASSETS_PATH . '/js');
define('IMG_PATH', ASSETS_PATH . '/images');

// Page Titles
$page_titles = [
    'home' => 'Home - ' . SITE_NAME,
    'about' => 'About Us - ' . SITE_NAME,
    'services' => 'Our Services - ' . SITE_NAME,
    'doctors' => 'Our Doctors - ' . SITE_NAME,
    'appointment' => 'Book Appointment - ' . SITE_NAME,
    'contact' => 'Contact Us - ' . SITE_NAME,
];

// Current Page Detection
$current_page = basename($_SERVER['PHP_SELF'], '.php');

// Get Page Title
function getPageTitle($page = 'home') {
    global $page_titles;
    return $page_titles[$page] ?? SITE_NAME;
}

// Active Menu Class
function isActive($page) {
    global $current_page;
    return ($current_page === $page) ? 'active' : '';
}

// Sanitize Output
function clean($string) {
    return htmlspecialchars($string, ENT_QUOTES, 'UTF-8');
}

// Format Phone Number
function formatPhone($phone) {
    return preg_replace('/(\d{5})(\d{5})/', '$1 $2', $phone);
}

// Get Asset URL (Helper function)
function asset($path) {
    return BASE_PATH . '/' . ltrim($path, '/');
}

?>