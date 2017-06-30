<?php get_header(); ?>

		<div class="wrap">
			<div class="row">
				<div class="col s12 m9 posts">

				<!-- FEATURED FIRST -->
					<?php           
		                $args = array( 'post_type' => 'blog', 'posts_per_page' => 4 );
		                $loop = new WP_Query( $args );
		                while ( $loop->have_posts() ) : $loop->the_post();	                
			            $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		           		$featured = types_render_field('featured') ;
		           		if ($featured == '1'): 
		           	?>

							<div class="col s12 card">
						        <span class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?> F</a></span>
								<!-- <div class="card-image"> -->
					            <!-- </div> -->
								<div class="card-content">

									<div class="row">
										<div class="img-wrap"><img src="<?php echo $imgsrc; ?>" alt=""></div>
										<?php the_excerpt(); ?>
										
									</div>
									
									
					              	<a href="<?php the_permalink() ?>">Read More ...</a>
								</div>
							</div>

            		<?php 
            			endif;
		                endwhile;
		                wp_reset_query();
		            ?>

		            <!-- Now Not Featured -->


					<?php           
		                $args = array( 'post_type' => 'blog', 'posts_per_page' => 4 );
		                $loop = new WP_Query( $args );
		                while ( $loop->have_posts() ) : $loop->the_post();	                
			            $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		           		$featured = types_render_field('featured') ;
			            if ($featured == ''): 
		            ?>

						<div class="col s12 card">
					        <span class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title();?> </a></span>
							<!-- <div class="card-image"> -->
				            <!-- </div> -->
							<div class="card-content">

								<div class="row">
									<div class="img-wrap"><img src="<?php echo $imgsrc; ?>" alt=""></div>
									<?php the_excerpt(); ?>
									
								</div>
								
								
				              	<a href="<?php the_permalink() ?>">Read More ...</a>
							</div>
						</div>
					<?php
						endif; 
		                endwhile;
		                wp_reset_query();
		            ?>

				</div>
				<div class="col s12 m3 side-navs">
			        <div class="card">
			            <div class="card-content">
			              	<span class="card-title">Catagories</span>

							<?php dynamic_sidebar( 'cat-nav' ); ?>	
			            </div>
			        </div>

			        <div class="card">
			            <div class="card-content">
			              	<span class="card-title">Recomended</span>

			              	<ul class="collection">
				              	<?php           
					                $args = array( 'post_type' => 'blog', 'posts_per_page' => 4 );
					                $loop = new WP_Query( $args );
					                while ( $loop->have_posts() ) : $loop->the_post();	                
					           		$featured = types_render_field('recomended') ;
						            if ($featured == '1'): 
					            ?>

			              			<a href="<?php echo get_the_permalink(); ?>" class="collection-item"><?php the_title(); ?></a>
			              		<?php
									endif; 
					                endwhile;
					                wp_reset_query();
					            ?>
			              	</ul>
			            </div>
			        </div>

			        <div class="card">
			            <div class="card-content">
			              	<span class="card-title">Featured</span>

			              	<ul class="collection">
				              	<?php           
					                $args = array( 'post_type' => 'blog', 'posts_per_page' => 4 );
					                $loop = new WP_Query( $args );
					                while ( $loop->have_posts() ) : $loop->the_post();	                
					           		$featured = types_render_field('featured') ;
						            if ($featured == '1'): 
					            ?>

			              			<a href="<?php echo get_the_permalink(); ?>" class="collection-item"><?php the_title(); ?></a>
			              		<?php
									endif; 
					                endwhile;
					                wp_reset_query();
					            ?>
			              	</ul>
			            </div>
			        </div>

			        <div class="card">
			            <div class="card-content">
			              	<span class="card-title">Tags</span>
							<?php dynamic_sidebar( 'tag-nav' ); ?>	
			            </div>
			        </div>
			        <div class="card">
			            <div class="card-content">
			              	<span class="card-title">Social Media</span>
			              	<?php echo do_shortcode('[WD_FB id="1"]' ); ?>
			            </div>
			        </div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>