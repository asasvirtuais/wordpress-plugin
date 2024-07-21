<?php
/**
 * Asas Virtuais WP
 *
 * Plugin Name:       Asas Virtuais WP
 * Version:           0.1.0
 */

try {
    // Require the Composer autoloader.
    require_once __DIR__ . '/vendor/autoload.php';
    
    // Your existing code to require the main plugin file.
    require_once './src/main.php';
} catch (\Throwable $th) {
    error_log($th);
}