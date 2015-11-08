<?php get_header();
/*
Template Name: Single Food Page
*/
?>



<div class="col-xs-12">
	<div class="posts row">
	
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="post-title col-xs-12">
		
		    <h2><span class="glyphicon glyphicon-sunglasses"></span><?php the_title(); ?></h2> 

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


			<div class="separator-dot clear"></div><!-- separator -->

			<div class="categ">
				<?php the_category(' ');?>
			</div><!-- categ -->



			<div class="separator-dot"></div>


				
			<div class="materials">

				<h3>Materials</h3>

				<?php the_field('materials'); ?>

				<br/><br/>

				<h3>Tools</h3>

				<?php the_field('tools'); ?>

			</div><!-- ingredients -->

			
		</div><!-- recipe-info -->
		

		<div class="col-xs-12">

			<div class="separator clear"></div>


			<div class="style-instructions col-xs-12 col-md-8">

					<h3>Instructions</h3>
			    
			    	<?php the_content(); ?>

			</div><!-- instructions -->



			<div class="share col-xs-12 col-md-4">

				<div class="sticky hidden-xs hidden-sm">

						<h3><span class="pink"><span class="glyphicon glyphicon-stats"> </span>	
							<?php echo do_shortcode('[views]' );?></span> <span class="slim">VIEWS &nbsp; &nbsp;/</span><?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?>

						<div class="separator-dot"></div>


						<h3>Share this</h3>
				
						<?php echo do_shortcode('[ssba]'); ?>

				</div>


				<div class="hidden-md hidden-lg">

						<h3><span class="pink"><span class="glyphicon glyphicon-stats"> </span>	
							<?php echo do_shortcode('[views]' );?></span> <span class="slim">VIEWS &nbsp; &nbsp;/</span><?php if( function_exists('dot_irecommendthis') ) dot_irecommendthis(); ?>

						<div class="separator-dot"></div>

						<h3>Share this</h3>
				
						<?php echo do_shortcode('[ssba]'); ?>

				</div>


			</div><!-- share -->




		    <div class="separator clear"></div>



			<?php endwhile; else: ?>
				<p>Sorry, no posts matched your criteria.</p>
			<?php endif; ?>






			<div class="related">

				<h4><em>Try these other DO-IT-YOURSELF projects</em></h4>
				
				<?php $args = array(
					'post_type'=>'style', 
					'orderby'=>'rand', 
					'posts_per_page'=>'6',
					'post__not_in' => array($post->ID));
				
					$style = new WP_Query($args);

					while ($style-> have_posts()) : $style -> the_post(); 

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