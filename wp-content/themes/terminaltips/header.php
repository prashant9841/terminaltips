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
				<div class="nav-toggle">
					<i class="ti-menu"></i>
				</div>
			</div>

			<div class="nav-header row">
				<?php dynamic_sidebar( 'main-nav' ); ?>	

				<div class="search-div">
					<?php echo do_shortcode('[search_live]' ); ?>				
				</div>
				
			</div>
		</div>
	</header>
	<div class="page">
		
