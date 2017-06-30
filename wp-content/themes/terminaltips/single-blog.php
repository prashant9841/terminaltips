<?php get_header();
	 $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );

 ?>
	<div class="inside-page wrap">

		<div class="content">
			<div class="row">
				<div class="col s12 l9 ">
					<div class="item-details">
						
						<h4><?php the_title(); ?></h4>
						
						<div class="img-wrap"><img src="<?php echo $imgsrc; ?>" alt=""></div> 
						
						<p><?php echo $post->post_content; ?></p>
					</div>	

					<div class="comment">
						<?php //echo do_shortcode('[bt_comments]' ); ?>
					</div>

					<div class="section-title">
						<h4>Related Posts</h4>
					</div>

					<ul class="related">
						<?php           
			                $args = array( 'post_type' => 'blog', 'posts_per_page' => 3 );
			                $loop = new WP_Query( $args );
			                while ( $loop->have_posts() ) : $loop->the_post();	                
				            $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			            ?>
							<li class="col s12 m6 l4">

								<div class="card">
						            <a href="<?php the_permalink() ?>">
										<div class="card-content">
								        	<span class="card-title"><?php the_title(); ?></span>							              		
										</div>
						            </a>
								</div>
							</li>
						<?php 
			                endwhile;
			                wp_reset_query();
		            	?>
							
					</ul>				
				</div>


				<div class="col s12 l3 side-navs">
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
	</div>
<?php get_footer( ); ?>