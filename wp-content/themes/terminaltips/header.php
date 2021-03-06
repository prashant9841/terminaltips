<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=0 " />
	<title><?php bloginfo('name'); ?> | <?php bloginfo('description' ); ?></title>
	<?php wp_head(); ?>
	<link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,300,700' rel='stylesheet' type='text/css'>
</head>
<body>
	<header class="page-header">
		<div class="wrap">
			<div class="logo-div">
				<a href="<?php echo site_url(); ?>">
					<img src="<?php get_logo(); ?>" alt="">					
				</a>
			</div>

			<div class="nav-toggle card hoverable">
				<i class="fa fa-bars fa-2x"></i>
			</div>

			<div class="nav-header row">
				<div class="search-div">
					<?php dynamic_sidebar( 'main-nav' ); ?>
					<div class="search">
						<?php echo do_shortcode('[wpdreams_ajaxsearchlite]'); ?>
					</div>	

				</div>

				
			</div>
		</div>
	</header>
	<div class="page">
		
