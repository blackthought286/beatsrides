<?php

/**
* BeatsRides set up functions
*/



function beatsrides_scripts(){

	wp_enqueue_style( 'beatsrides-style', get_stylesheet_uri() );
	
}

add_action( 'wp_enqueue_scripts', 'beatsrides_scripts' );


function beatsrides_sidebar(){

	register_sidebar( array(

		'name' 		    => __( 'Primary Sidebar', 'beatsrides' ),
		'id'   		    => 'sidebar-1',
		'description'   => __('Main sidebar that appears on the right', 'beatsrides'),
		'before_widget' => '<aside id="beats-sidebar" class="widget">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h1 class="widget-title">',
		'after-title'   => '</h1>'

	) );

}

add_action( 'widget_init', 'beatsrides_sidebar' );


function beatsrides_fonts(){

	wp_register_style('et-googleFonts', 'http://fonts.googleapis.com/css?family=Oswald:400,300,700');
	wp_enqueue_style('et-googleFonts');

	wp_register_style('rt-googleFonts', 'http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,400italic');
	wp_enqueue_style('rt-googleFonts');
}

add_action('wp_enqueue_scripts', 'beatsrides_fonts');

register_nav_menus( array(
	'primary'   => __( 'Top primary menu', 'beatsrides' ),
		
) );