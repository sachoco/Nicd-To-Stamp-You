<?php
	function register_my_menu() {
	  register_nav_menu('main-menu',__( 'Main Menu' ));
	}
	add_action( 'init', 'register_my_menu' );
	/**
	 * Enqueue scripts and styles
	 */
	function theme_scripts_and_styles() {
		// wp_register_script( 'jquery', get_stylesheet_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', array(), '', 'all' );

		wp_enqueue_script( 'jquery' );
		wp_register_script( 'slick', get_stylesheet_directory_uri() . '/bower_components/slick.js/slick/slick.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'slick' );
		// register main script
		wp_register_script( 'main-script', get_stylesheet_directory_uri() . '/js/main.js', array('jquery'), '', true );
		wp_enqueue_script( 'main-script' );
		// register main stylesheet
		wp_register_style( 'main-css', get_stylesheet_directory_uri() . '/css/style.css', array(), '', 'all' );
		wp_enqueue_style( 'main-css' );
		wp_register_style( 'webfont', get_stylesheet_directory_uri() . '/MyFontsWebfontsKit.css', array(), '', 'all' );
		wp_enqueue_style( 'webfont' );
		wp_register_style( 'slick', get_stylesheet_directory_uri() . '/bower_components/slick.js/slick/slick.css', array(), '', 'all' );
		wp_register_style( 'slick-theme', get_stylesheet_directory_uri() . '/bower_components/slick.js/slick/slick-theme.css', array(), '', 'all' );
		wp_enqueue_style( 'slick' );
		wp_enqueue_style( 'slick-theme' );


		wp_register_style( 'calendar', get_stylesheet_directory_uri() . '/bower_components/fullcalendar/dist/fullcalendar.css', array(), '', 'all' );
		wp_enqueue_style( 'calendar' );
		wp_register_script( 'calendar', get_stylesheet_directory_uri() . '/bower_components/fullcalendar/dist/fullcalendar.min.js', array('moment'), '', true );
		wp_enqueue_script( 'calendar' );
		wp_register_script( 'moment', get_stylesheet_directory_uri() . '/bower_components/moment/min/moment.min.js', array('jquery'), '', true );
		wp_enqueue_script( 'moment' );
		wp_register_script( 'gcal', get_stylesheet_directory_uri() . '/bower_components/fullcalendar/dist/gcal.js', array('calendar'), '', true );
		wp_enqueue_script( 'gcal' );
	}

	add_action( 'wp_enqueue_scripts', 'theme_scripts_and_styles', 999 );

