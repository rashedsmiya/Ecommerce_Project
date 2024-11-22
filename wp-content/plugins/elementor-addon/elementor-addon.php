<?php

/**
 * Plugin Name: Elementor Addon
 * Description: Simple hello world widgets for Elementor.
 * Version:     1.0.0
 * Author:      Elementor Developer
 * Author URI:  https://developers.elementor.com/
 * Text Domain: elementor-addon
 *
 * Requires Plugins: elementor
 * Elementor tested up to: 3.24.0
 * Elementor Pro tested up to: 3.24.0
 */

function register_hello_world_widget( $widgets_manager ) {

	require_once( __DIR__ . '/widgets/First_Widgets.php'); 
	require_once( __DIR__ . '/widgets/Heading.php'); 

	$widgets_manager->register( new \First_Widgets() );
	$widgets_manager->register( new \Elementor_Addons_Heading() ); 

}

add_action( 'elementor/widgets/register', 'register_hello_world_widget' );


function elementor_addon_register_elementor_widget_categories( $elements_manager ) {

	$elements_manager->add_category(
		'jewel-khan',
		[
			'title' => esc_html__( 'First Category', 'textdomain' ),
			'icon' => 'fa fa-plug',
		]
	);
	
	$elements_manager->add_category(
		'akrame',
		[
			'title' => esc_html__( 'Second Category', 'textdomain' ),
			'icon' => 'fa fa-plug',
		]
	);

}

add_action( 'elementor/elements/categories_registered', 'elementor_addon_register_elementor_widget_categories' );


