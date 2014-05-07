<?php

/*
Plugin Name: Surbma - Font Awesome
Plugin URI: http://surbma.com/
GitHub Plugin URI: Surbma/surbma-font-awesome
Description: Font Awesome - The iconic font designed for Bootstrap
Version: 1.0.0
Author: Surbma
Author URI: http://surbma.com/
License: GPL2
*/

function surbma_font_awesome_enqueue_scripts() {
	wp_enqueue_style( 'font-awesome', plugins_url( '', __FILE__ ) . '/css/font-awesome.min.css', false, '4.0.3' );
}
add_action( 'wp_enqueue_scripts', 'surbma_font_awesome_enqueue_scripts' );

function surbma_font_awesome_shortcode( $atts ) {
	if ( !is_admin() ) {
		extract( shortcode_atts( array(
			'class' => ''
		), $atts ) );
		return '<i class="fa '.$class.'"></i>';
    }
}
add_shortcode( 'fa', 'surbma_font_awesome_shortcode' );

