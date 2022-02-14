<?php 
	
	//Importacion navwalker para menu
	require_once('wp-bootstrap-navwalker.php');

	//Soporte para este tema
	function wpb_theme_setup(){
		add_theme_support('post-thumbnails');


		//Menús de navegación
		register_nav_menus(array(
			'primary' => __('Primary Menu')
		));


		//Soporte para formatos de post
		add_theme_support('post-formats', array('aside', 'gallery'));
	}

	add_action('after_setup_theme', 'wpb_theme_setup');



?>