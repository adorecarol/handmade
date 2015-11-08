<?php get_header();
/*
Template Name: About Page
*/
?>

<div class="col-xs-12">
	<div class="posts row">

	<?php if (have_posts()) : while (have_posts()) : the_post(); 

		?>


			<div class="post-image col-xs-12 col-sm-8">

			    <?php	
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('large',  array( 'class' => 'img-responsive' ));
					}
				?>

			</div><!-- post-image -->


			<div class="post-title col-xs-12 col-sm-4">


		
			    <h2>A LITTE ABOUT JENNI</h2> 

			    <div class="separator"></div>


				<?php the_content(); ?>

			


				<?php endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>




			</div><!-- col-xs-12 -->






	</div><!-- row -->
</div><!-- col-xs-12 -->
<?php get_footer(); ?>