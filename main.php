<?php
/**
 * Asas Virtuais WP
 *
 * Plugin Name: Asas Virtuais WP
 * Version: 1.1.0
 */

try {
    // Require the Composer autoloader.
    require_once plugin_dir_path(__FILE__) . 'vendor/autoload.php';
    \YahnisElsts\PluginUpdateChecker\v5\PucFactory::buildUpdateChecker(
        'https://raw.githubusercontent.com/asasvirtuais/wordpress-plugin/main/metadata.json',
        __DIR__ . '/main.php',
        'wordpress-plugin'
    );
    // Your existing code to require the main plugin file.
    require_once plugin_dir_path(__FILE__) . 'src/main.php';
} catch (\Throwable $th) {
    error_log($th);
}