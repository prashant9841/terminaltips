<?php 
	show_admin_bar(0);

	add_theme_support( 'widgets' );
    add_theme_support( 'post-thumbnails' );
    include('includes/enqueue.php');
	include('includes/navigation.php');
	include('includes/ob_widgets.php');
	include('includes/general-settings.php');



	add_action('wp_enqueue_scripts','ob_load_css');
	add_action('wp_enqueue_scripts','ob_load_scripts');

	add_action('init','ob_navigation_menu');
	add_action('admin_enqueue_scripts','ob_load_admin_css');



	if(! function_exists('ob_main_nav')):
		function ob_main_nav(){
			  
			register_sidebar(array(
				'name'          => 'main nav',
				'id'            => 'main-nav',
				'description'   => 'Main Nav',
				'class'         => 'nav',
				
			));
		}
	endif;
	add_action('widgets_init','ob_main_nav'); 

	
	if(! function_exists('ob_cat_nav')):
		function ob_cat_nav(){
			  
			register_sidebar(array(
				'name'          => 'cat nav',
				'id'            => 'cat-nav',
				'description'   => 'cat Nav',
				'class'         => 'nav',
				
			));
		}
	endif;
	add_action('widgets_init','ob_cat_nav'); 

	if(! function_exists('ob_tag_nav')):
		function ob_tag_nav(){
			  
			register_sidebar(array(
				'name'          => 'tag nav',
				'id'            => 'tag-nav',
				'description'   => 'tag Nav',
				'class'         => 'nav',
				
			));
		}
	endif;
	add_action('widgets_init','ob_tag_nav'); 

	if (!function_exists("get_logo")) {
		function get_logo () {
			echo get_template_directory_uri().'/images/logo.png';

		}
	}

 ?>