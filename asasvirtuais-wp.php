<?php
/**
 * Asas Virtuais WP
 *
 * Plugin Name:       Asas Virtuais WP
 * Version: 0.3.0
 */

try {
    // Require the Composer autoloader.
    require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';
    
    // Your existing code to require the main plugin file.
    require_once plugin_dir_path(__FILE__) . 'src/main.php';
} catch (\Throwable $th) {
    error_log($th);
}