<?php

/*
Plugin Name: Surbma - Font Awesome
Plugin URI: http://surbma.com/wordpress-plugins/
Description: Font Awesome - The iconic font and CSS toolkit

Version: 2.5.0

Author: Surbma
Author URI: http://surbma.com/

License: GPLv2

Text Domain: surbma-font-awesome
Domain Path: /languages/
*/

// Prevent direct access to the plugin
if ( !defined( 'ABSPATH' ) ) exit( 'Good try! :)' );

// Localization
function surbma_font_awesome_init() {
	load_plugin_textdomain( 'surbma-font-awesome', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
}
add_action( 'plugins_loaded', 'surbma_font_awesome_init' );

function surbma_font_awesome_enqueue_scripts() {
	$handle = 'font-awesome';
	$list = 'enqueued';
	if ( wp_style_is( $handle, $list ) ) {
		wp_dequeue_style( $handle );
	}
	wp_enqueue_style( 'surbma-font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css', false, '4.6.3' );
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
