<?php

	// Load css file by its name and uri
	function load_css_byname($name, $uri) {
		wp_register_style(
			$name,
			get_template_directory_uri() . $uri,
			array(), false, 'all'
		);
		wp_enqueue_style($name);
	}

	// Load js file by its name and uri
	function load_js_byname($name, $uri, $dependency) {
		wp_register_script(
			$name,
			get_template_directory_uri() . $uri,
			$dependency, false, true
		);
		wp_enqueue_script($name);
	}

	// Load css files
	function load_css()
	{
		load_css_byname('bootstrap', '/css/bootstrap/bootstrap.min.css');
		load_css_byname('mainpage', '/css/main-page.css');
	}

	add_action('wp_enqueue_scripts','load_css');

	// Load js files
	function load_js()
	{
		wp_enqueue_script('jquery');
		
		load_js_byname('bootstrap', '/js/bootstrap/bootstrap.min.js', 'jquery');
		load_js_byname('main-carousel', '/js/main-carousel.js', '');
		load_js_byname('mainservice-page-change', '/js/mainservice-page-change.js', '');
			
	}
	add_action('wp_enqueue_scripts','load_js');

	// Google Fonts
	function add_google_fonts() {
	 wp_register_style( 'googleFonts', 'https://fonts.googleapis.com/css?family=Mulish');
	 wp_enqueue_style( 'googleFonts');
	}
	add_action( 'wp_enqueue_scripts', 'add_google_fonts' );
	
	
?>