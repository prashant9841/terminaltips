<?php get_header();
	 $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

 ?>
	<div class="inside-page">
		<section class="banner">
			<div class="img-wrap"><img src="<?php echo $imgsrc; ?>" alt=""></div>
			<h4><?php the_title(); ?></h4>
		</section>

		<div class="content">
			<div class="row">
				<div class="col s12 m8 offset-m2">
					
					
					<p><?php echo $post->post_content; ?></p>
					
				</div>
			</div>
		</div>
	</div>
<?php get_footer( ); ?>