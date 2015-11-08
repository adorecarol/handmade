<?php get_header();
/*
Template Name: Single Food Page
*/
?>



<div class="col-xs-12">
	<div class="posts row">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post-title col-xs-12">
		
		    <h2><?php the_title(); ?></h2> 

		    <div class="separator"></div>

		</div><!-- recipe-title -->



		<div class="post-image col-xs-12 col-sm-8">

		    <?php	
				if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					the_post_thumbnail('large',  array( 'class' => 'img-responsive' ));
				}
			?>

		</div><!-- recipe-image -->


		<div class="post-info col-xs-12 col-sm-4">

			<h3><?php the_excerpt(); ?></h3>

			<div class="separator-dot"></div>

			<h4><span class="info-b">Serves:</span> <?php the_field('serving_size'); ?></h4>
			<h4><span class="info-b">Prep time:</span> <?php the_field('prep_time'); ?> minutes</h4>
			<h4><span class="info-b">
				<?php 
					if( get_field('method')=='bake: Bake'&'cook: Cook'){
						echo the_field('method').' time: '.the_field('time'). ' minutes';
					}
					?> 
					</span>
			</p>
			<h4><span class="info-b">Calories per serving:</span> <?php the_field('calories'); ?> calories</h4>

			<div class="separator-dot clear"></div><!-- separator -->

			<div class="categ">
				<?php the_category(' ');?>
			</div>


		</div><!-- recipe-info -->
		

		<div class="col-xs-12">

			<div class="separator clear"></div>

			<div class="ingredients col-xs-12 col-md-4">


					<h3>Ingredients</h3>

					<?php the_field('ingredients'); ?>

			</div><!-- ingredients -->



			<div class="instructions col-xs-12 col-md-8">

					<h3>Instructions</h3>
			    
			    	<?php the_content(); ?>

			</div><!-- instructions -->


		    <div class="separator clear"></div>



			<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>






			<div class="related">

				<h4><em>You might want to try</em></h4>
				
				<?php $args = array(
					'post_type'=>'food', 
					'orderby'=>'rand', 
					'posts_per_page'=>'6',
					'post__not_in' => array($post->ID));
				
					$food = new WP_Query($args);

					while ($food -> have_posts()) : $food -> the_post(); 

				?>
				
				<div class="col-xs-6 col-sm-3">

					    <a href="<?php the_permalink() ?>">
					    	<?php	
							if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
								the_post_thumbnail('large',  array( 'class' => 'img-responsive' ));
							}
							?>
							<?php the_title(); ?>
						</a>

				</div>

				<?php endwhile; wp_reset_postdata(); ?>

			</div>





			</div><!-- col-xs-12 -->





	</div><!-- row -->
</div><!-- col-xs-12 -->




<?php get_footer(); ?>