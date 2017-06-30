<?php get_header();
	 $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

 ?>
	<div class="inside-page">

		<div class="content">
			<div class="row">
				<div class="col s12 m10 offset-m1 item-details">
					<h4><?php the_title(); ?></h4>
					
			<div class="img-wrap"><img src="<?php echo $imgsrc; ?>" alt=""></div> 
					
					<p><?php echo $post->post_content; ?></p>
					
				</div>
			</div>
		</div>

		<div class="more-post">
			
			<div class="row">
				<div class="col s12 m10 offset-m1">

				<div class="section-title">
					<h4>Related Posts</h4>
				</div>

				<ul class="posts">
					<?php           
		                $args = array( 'post_type' => 'blog', 'posts_per_page' => 3 );
		                $loop = new WP_Query( $args );
		                while ( $loop->have_posts() ) : $loop->the_post();	                
			            $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		            ?>
						<li class="col s12 m4">

							<div class="card">
						        <span class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>

								<div class="card-content">

									<div class="row">
										<!-- <div class="img-wrap"><img src="<?php echo $imgsrc; ?>" alt=""></div> -->
										<?php the_content(); ?>
										
									</div>
									
									
					              	<a href="<?php the_permalink() ?>">Read More ...</a>
								</div>
							</div>
						</li>
					<?php 
		                endwhile;
		                wp_reset_query();
	            	?>
						
				</ul>
					
				
				</div>

			</div>
		</div>
	</div>
<?php get_footer( ); ?>