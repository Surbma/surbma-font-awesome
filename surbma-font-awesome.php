<?php

/*
Plugin Name: Surbma | Font Awesome
Plugin URI: https://surbma.com/wordpress-plugins/
Description: Font Awesome - The iconic font and CSS toolkit

Version: 3.1

Author: Surbma
Author URI: https://surbma.com/

License: GPLv2

Text Domain: surbma-font-awesome
Domain Path: /languages/
*/

// Prevent direct access to the plugin
defined( 'ABSPATH' ) || exit;

// Localization
add_action( 'init', function() {
	load_plugin_textdomain( 'surbma-font-awesome', false, plugin_basename( dirname( __FILE__ ) ) . '/languages' );
} );

add_action( 'wp_enqueue_scripts', function() {
	$handle = 'font-awesome';
	$list = 'enqueued';
	if ( wp_style_is( $handle, $list ) ) {
		wp_dequeue_style( $handle );
	}
	wp_enqueue_style( 'surbma-font-awesome', plugins_url( 'assets/css/font-awesome.min.css', __FILE__ ), array(), '4.7.0' );
}, 25 );

add_shortcode( 'fa', function( $atts ) {
	extract( shortcode_atts( array(
		'class' => ''
	), $atts ) );
	return '<i class="fa ' . esc_attr( $class ) . '"></i>';
} );

global $allowedtags;
$allowedtags['i'] = array(
	'class' => array()
);
