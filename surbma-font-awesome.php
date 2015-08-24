<?php

/*
Plugin Name: Surbma - Font Awesome
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Font Awesome - The iconic font and CSS toolkit

Version: 2.4.0

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-font-awesome
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) {
	die( 'Good try! :)' );
}

// Localization
function surbma_font_awesome_init() {
	load_plugin_textdomain( 'surbma-font-awesome', false, dirname( plugin_basename( __FILE__ ) ) . '/languages/' );
}
add_action( 'plugins_loaded', 'surbma_font_awesome_init' );

function surbma_font_awesome_enqueue_scripts() {
	$handle = 'font-awesome';
	$list = 'enqueued';
	if ( wp_style_is( $handle, $list ) ) {
		wp_dequeue_style( $handle );
	}
	wp_enqueue_style( 'surbma-font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css', false, '4.4.0' );
}
add_action( 'wp_enqueue_scripts', 'surbma_font_awesome_enqueue_scripts', 25 );

function surbma_font_awesome_shortcode( $atts ) {
	if ( !is_admin() ) {
		extract( shortcode_atts( array(
			'class' => ''
		), $atts ) );
		return '<i class="fa '.$class.'"></i>';
    }
}
add_shortcode( 'fa', 'surbma_font_awesome_shortcode' );

global $allowedtags;
$allowedtags['i'] = array(
	'class' => array()
);
