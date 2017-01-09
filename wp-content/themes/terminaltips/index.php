<?php get_header(); ?>
	<!-- <section class="banner">
		<div class="wrap">
			<div class="row">
				<div class="col s12 m9 posts">
					<?php           
			            $args = array( 'post_type' => 'blog', 'posts_per_page' =>  1);
			            $loop = new WP_Query( $args );
			            while ( $loop->have_posts() ) : $loop->the_post();	                
			            $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
			        ?>

						<div class="item">
							<div class="img-wrap">
								<div class="img-wrap"><img src="<?php echo $imgsrc; ?>" alt=""></div>
				            </div>
							<div class="content-wrap">
								
					            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<?php the_content(); ?>
								
				              	<a href="<?php the_permalink() ?>">Read More ...</a>
							</div>
						</div>
					<?php 
			            endwhile;
			            wp_reset_query();
			        ?>
			    </div>
			    
			</div>

		</div>
	</section> -->
		<div class="wrap">
			<div class="row">
				<div class="col s12 m9 posts">
				<?php           
		                $args = array( 'post_type' => 'blog', 'posts_per_page' => 4 );
		                $loop = new WP_Query( $args );
		                while ( $loop->have_posts() ) : $loop->the_post();	                
			            $imgsrc =  wp_get_attachment_url( get_post_thumbnail_id($post->ID) );
		            ?>

						<div class="col s12 card">
					        <span class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
							<!-- <div class="card-image"> -->
				            <!-- </div> -->
							<div class="card-content">

								<div class="row">
									<div class="img-wrap"><img src="<?php echo $imgsrc; ?>" alt=""></div>
									<?php the_content(); ?>
									
								</div>
								
								
				              	<a href="<?php the_permalink() ?>">Read More ...</a>
							</div>
						</div>
					<?php 
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
			              	<span class="card-title">Tags</span>
							<?php dynamic_sidebar( 'tag-nav' ); ?>	
			            </div>
			        </div>
			        <div class="card">
			            <div class="card-content">
			              	<span class="card-title">Social Media</span>
			            </div>
			        </div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>