<?php
/**
 * Theme basic setup.
 *
 * @package Symbiotica_Starter_Theme
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'after_setup_theme', 'symb_menu_setup' );

if ( ! function_exists ( 'symb_menu_setup' ) ) {

	function symb_menu_setup() {

        // This theme uses wp_nav_menu() in one location.
        register_nav_menus( array(
            'primary_menu' => __( 'Primary Menu', 'cf' ),
            'top_menu' => __( 'Top Menu', 'cf' ),
            'footer_menu' => __( 'Footer Menu', 'cf' ),
            'copy_menu' => __( 'Copy Menu', 'cf' ),
        ) );


	}
}
