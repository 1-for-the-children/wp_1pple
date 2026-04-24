<?php
/**
 * Plugin Name: WP 1% pour les enfants
 * Plugin URI:  
 * Description: A simple plugin to enhance WordPress functionality for "1% pour les enfants" website
 * Version:     1.0.1
 * Author:      Thierry Delbart
 * Author URI:  
 * License:     GPL2
 * Text Domain: wp_1pple
 * Domain Path: /languages
 */

// If this file is called directly, abort.
if ( ! defined( 'ABSPATH' ) ) {
    exit;
}

// Define plugin constants.
define( 'WP_1PPLE_VERSION', '1.0.1' );
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

// Plugin functionality below.

// Register a custom post type for "Projects".
add_action( 'init', 'wp_1pple_register_project_post_type' );
function wp_1pple_register_project_post_type() {
    $args = array(
        'labels' => array(
            'name'          => 'Projects',
            'singular_name' => 'Project',
            'menu_name'     => 'Projects',
            'add_new'       => 'Add New Project',
            'add_new_item'  => 'Add New Project',
            'new_item'      => 'New Project',
            'edit_item'     => 'Edit Project',
            'view_item'     => 'View Project',
            'all_items'     => 'All Projects',
        ),
        'public' => true,
        'has_archive' => true,
        'show_in_rest' => true,
        'supports' => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt' ),
    );

    register_post_type( 'project', $args );
}

// Shortcode qui retourne l'ID du post courant
add_shortcode('post_id', function() {
    return get_the_ID();
});
