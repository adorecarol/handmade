<?php get_header();
/*
Template Name: Single Food Page
*/
?>

		<div class="arc-post-full">
			
			<?php 


			
			$archive_style_feat = new WP_Query(array(
			     'post_type' => 'style',
			     'showposts' => 1,
			     'orderby' => 'rand',
			));


			while ($archive_style_feat->have_posts()) : $archive_style_feat->the_post(); 


			$exclude_featured = array( $post->ID );	


			?>


			<div class="col-xs-12 col-md-8">

			  	<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
					
					<?php	
						if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
							the_post_thumbnail('large',  array( 'class' => 'img-responsive' ));
						}
					?>

				</a>

			</div><!-- col-xs-12 -->


			<div class="col-xs-12 col-md-4">

				<h1 class="feat-title">
					<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>

						<h3><?php the_excerpt(); ?></h3>

				</div><!-- caption -->


			</div><!-- col-xs-12 -->



			<?php endwhile; ?>



		</div><!-- arc-post-full -->


		<div class="separator"></div>





		<div class="row">

		<h1 class="feat-title text-center">MORE STYLE & FASHION</h1>

		<br><br>

			<ul class="feat-post">

			<?php 

			$archive_style = new WP_Query(array(
					'showposts' => 999,
					'post_type' => 'style',
					'post__not_in' => $exclude_featured, 
				));
				

				while ($archive_style->have_posts()) : $archive_style->the_post(); ?>

				<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

						<div class="feat-image">

						  	<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
								
								<?php	
									if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
										the_post_thumbnail('large',  array( 'class' => 'img-responsive' ));
									}
								?>

							</a>

						</div><!-- feat-image -->


						<div class="caption">

								<h3 class="pull-left"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

								<p class="clear"><?php the_excerpt(); ?></p>

						</div><!-- caption -->


				</li>



			<?php endwhile; wp_reset_postdata(); ?>

			</ul>

		</div>


<?php get_footer(); ?>





