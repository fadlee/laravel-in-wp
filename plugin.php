<?php
/**
 * Plugin Name: Laravel in WP
 */

define( 'LARAWP_PATH', __DIR__ );
define( 'LARAWP_PREFIX', 'larawp' );

add_action( 'plugins_loaded', function() {
    if ( preg_match( '/^\/' . LARAWP_PREFIX . '/', $_SERVER['REQUEST_URI'] ) ) {
        include LARAWP_PATH . '/laravel-loader.php';
        exit;
    }
} );

add_action( 'admin_menu', function() {
	add_submenu_page('index.php', 'Laravel in WP', 'LaraWP', 'edit_others_posts', 'larawp', function() {
        include __DIR__ . '/iframe.php';
    });
} );

add_action( "admin_bar_menu", function ($wp_admin_bar) {
    $wp_admin_bar->add_menu([
        "id" => 'larawp-menu',
        "parent" => null, //'top-secondary' , // use 'top-secondary' for toggle menu position.
        "href" => admin_url( 'index.php?page=larawp' ),
        "title" => "LaraWP",
    ]);
},    100 );
