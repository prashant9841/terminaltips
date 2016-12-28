<?php
//Registering all the styles to the frontend
if( ! function_exists('ob_load_css')):
	function ob_load_css()
	{
		wp_register_style('materialize', get_template_directory_uri() .'/stylesheets/materialize.min.css');
		// wp_register_style('owl', get_template_directory_uri() .'/stylesheets/owl.css');
		wp_register_style('themify', get_template_directory_uri() .'/stylesheets/themify-icons.css');
		wp_register_style('FA', get_template_directory_uri() .'/stylesheets/font-awesome.css');
        wp_register_style('animate', get_template_directory_uri() .'/stylesheets/animate.css');
		wp_register_style('slick', get_template_directory_uri() .'/stylesheets/slick.css');
        wp_register_style('fancybox', get_template_directory_uri() .'/stylesheets/jquery.fancybox.css');
		wp_register_style('animateSlider', get_template_directory_uri() .'/stylesheets/animateSlider.css');
		wp_register_style('main-stylesheet', get_template_directory_uri() . '/stylesheets/style.css');
		wp_register_style('print', get_template_directory_uri() . '/stylesheets/print.css');
		wp_register_style('oswald',"https://fonts.googleapis.com/css?family=Oswald:400,700,300");
		wp_register_script('modernizer', get_template_directory_uri(). "/js/modernizr.js");

		wp_enqueue_script('modernizer');
		wp_enqueue_style('materialize');
		// wp_enqueue_style('owl');
		wp_enqueue_style('themify');
		wp_enqueue_style('FA');
        wp_enqueue_style('animate');
		wp_enqueue_style('slick');
        wp_enqueue_style('fancybox');
		wp_enqueue_style('animateSlider');
		wp_enqueue_style('main-stylesheet');
		wp_enqueue_style('print');
	}
endif;

//Registering all the css to the admin
if( ! function_exists('ob_load_admin_css')):
    function ob_load_admin_css(){
        wp_register_style('admin_css', get_template_directory_uri(). "/stylesheets/admin.css");

        wp_enqueue_style('admin_css');
    }
endif;


//Registering all the scripts to the footer
if( ! function_exists('ob_load_scripts')):
	function ob_load_scripts()
	{
        wp_register_script( 'jquery-custom' , get_template_directory_uri() . '/js/jquery.js' );
   		// wp_register_script( 'migrate' , get_template_directory_uri() . '/js/migrate.js' );
   		
    	wp_register_script( 'wow' , get_template_directory_uri() . '/js/wow.min.js' );
   		wp_register_script( 'materialize' , get_template_directory_uri() . '/js/materialize.min.js' );
    	wp_register_script( 'animateSlider' , get_template_directory_uri() . '/js/animateSlider.js' );
    	wp_register_script( 'infinite' , get_template_directory_uri() . '/js/infinite.js' );
        // wp_register_script( 'owl' , get_template_directory_uri() . '/js/owl.js' );
    	wp_register_script( 'mix' , get_template_directory_uri() . '/js/jquery.mixitup.js' );
        wp_register_script( 'slick' , get_template_directory_uri() . '/js/slick.js' );   
        wp_register_script( 'fancybox' , get_template_directory_uri() . '/js/jquery.fancybox.js' ); 
        wp_register_script( 'pace' , get_template_directory_uri() . '/js/pace.js' );
        // wp_register_script( 'gasp' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/plugins/CSSPlugin.min.js' );
        // wp_register_script( 'gasp2' , 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/easing/EasePack.min.js' );
        wp_register_script( 'gasp3' , get_template_directory_uri() . '/js/twinmax.js'  );
    	
    	wp_register_script( 'custom' , get_template_directory_uri() . '/js/custom.js' );
    
    	
        wp_enqueue_script('jquery-custom',  false, array(), false, true);
        wp_enqueue_script('materialize', false,  array(), false, true);
        
        wp_enqueue_script('wow',  false, array(), false, true);
        wp_enqueue_script('animateSlider',  false, array(), false, true);
        wp_enqueue_script('infinite',  false, array(), false, true);
        // wp_enqueue_script('owl',  false, array(), false, true);
        wp_enqueue_script('mix',  false, array(), false, true);
        wp_enqueue_script('slick',  false, array(), false, true);
        wp_enqueue_script('fancybox',  false, array(), false, true);
    
        wp_enqueue_script('pace',  false, array(), false, true);
        //wp_enqueue_script('gasp',  false, array(), false, true);
        //wp_enqueue_script('gasp2',  false, array(), false, true);
        wp_enqueue_script('gasp3',  false, array(), false, true);
        
    	wp_enqueue_script('custom', false,  array(), false, true);
    	

	}
endif;

