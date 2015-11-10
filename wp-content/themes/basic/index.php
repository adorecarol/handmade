<?php get_header(); ?>


		<ul class="feat-post">
			
		<?php

			$archive_all = new WP_Query(array(
			     'post_type' =>  array( 'post', 'food', 'style', 'crafts' ),
			     'posts_per_page' => 20,
			));


			if ($archive_all->have_posts()){

			while ($archive_all->have_posts()) : $archive_all->the_post(); ?>



			<li class="col-xs-12 col-sm-6 col-md-4 col-lg-4">

					<div class="feat-image ease-in-out">

					  	<a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>">
							
							<?php	
								if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it
									the_post_thumbnail('large',  array( 'class' => 'img-responsive' ));
								} 
							?>

							<div class="caption-overlay hidden-xs ease-in-out">

								<p><span class="pink"><?php 

								if( get_post_type() == 'food' ){

									echo 'FOOD';

								} elseif( get_post_type() == 'style' ){

									echo 'STYLE';

								} elseif( get_post_type() == 'crafts' ){

									echo 'CRAFTS';

								} 

								?></span></p>


							</div><!-- caption-overlay -->


						</a>

					</div><!-- feat-image -->


					<div class="caption">

							<h3 class="pull-left"><a href="<?php the_permalink(); ?>" alt="<?php the_title(); ?>"><?php the_title(); ?></a></h3>

							<p class="clear"><?php the_excerpt(); ?></p>

					</div><!-- caption -->


			</li>


		<?php endwhile; } ?>

		</ul>



<?php get_footer(); ?>





