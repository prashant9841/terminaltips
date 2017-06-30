<?php 
	get_header();

	global $post;
	$category = get_category( get_query_var( 'cat' ) );
	$cats = $category->cat_ID;
	$tacs = get_cat_name( $category_id = $cats ); 
?>

		<div class="wrap">
			<div class="row">
				<div class="col s12 l9 posts">
				<?php           
		                $args = array( 'post_type' => 'blog', 'category_name' => $tacs, 'posts_per_page' => 4 );
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
									<?php the_excerpt(); ?>
									
								</div>
								
								
				              	<a href="<?php the_permalink() ?>">Read More ...</a>
							</div>
						</div>
					<?php 
		                endwhile;
		                wp_reset_query();
		            ?>

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
			              	<span class="card-title">Tags</span>
							<?php dynamic_sidebar( 'tag-nav' ); ?>	
			            </div>
			        </div>
			        <div class="card">
			            <div class="card-content">
			              	<span class="card-title">Featured</span>
			            </div>
			        </div>
				</div>
			</div>
		</div>
<?php get_footer(); ?>