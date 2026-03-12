<?php
/**
 * Plugin Name: WP 1% pour les enfants
 * Plugin URI:  https://example.com/wp_1pple
 * Description: A simple plugin to support children by donating 1% of�... replace with your description
 * Version:     1.0.0
 * Author:      Your Name
 * Author URI:  https://example.com
 * License:     GPL2
 * Text Domain: wp_1pple
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants.
define( 'WP_1PPLE_VERSION', '1.0.0' );
define( 'WP_1PPLE_PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'WP_1PPLE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );

// Include additional files if needed.

// Activation/Deactivation hooks.
function wp_1pple_activate() {
    // Activation code here.
}
register_activation_hook( __FILE__, 'wp_1pple_activate' );

function wp_1pple_deactivate() {
    // Deactivation code here.
}
register_deactivation_hook( __FILE__, 'wp_1pple_deactivate' );

// Load plugin textdomain for translations.
function wp_1pple_load_textdomain() {
    load_plugin_textdomain( 'wp_1pple', false, dirname( plugin_basename( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'wp_1pple_load_textdomain' );

// TODO: Add your plugin functionality below.
