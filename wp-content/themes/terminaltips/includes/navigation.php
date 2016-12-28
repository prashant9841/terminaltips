<?php

if (! function_exists( 'ob_navigation_menu' )):
	function ob_navigation_menu(){
		$locations =  array(
			'main_header' => __('Main Navigation Menu','text_domain')
			);
		register_nav_menus( $locations );
	}
endif;