<?php get_header(); ?>

		<ul class="feat-post">
			
		<?php query_posts( array(
		     'post_type' => array( 'post', 'food', 'style', 'craft' ),
		     'showposts' => 12 )
		); ?>

		<?php while ( have_posts() ) : the_post(); ?>


			<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

					<div class="feat-image">

					  	<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
							
							<?php	
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
									the_post_thumbnail('large',  array( 'class' => 'img-responsive' ));
								} else {
									echo '<img src="';
									bloginfo('template_directory');
									echo '/images/hearts.jpg" class="img-responsive">';
								}
							?>

						</a>

					</div><!-- feat-image -->


					<div class="caption">

							<h3 class="pull-left"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

							<p class="clear"><?php the_excerpt(); ?></p>

					</div><!-- caption -->


			</li>


		<?php endwhile; ?>

		</ul>



<?php get_footer(); ?>





