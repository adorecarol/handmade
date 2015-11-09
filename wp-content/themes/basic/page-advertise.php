<?php get_header();
/*
Template Name: Advertise Page
*/
?>



<div class="col-xs-12">
	<div class="posts row">

	<?php if (have_posts()) : while (have_posts()) : the_post(); 

		?>




			<div class="post-title col-xs-12">

				<h2><?php the_title(); ?></h2> 


				<div class="separator"></div>


				<div class="col-xs-12 col-sm-6">


					<?php the_content(); ?>

				</div>



				<div class="ad-form col-xs-12 col-sm-6">

					<?php include 'contact-form.php';?>


				</div><!-- ad-form -->

			</div><!-- col-xs-12 -->

				<?php endwhile; else: ?>
					<p>Sorry, no posts matched your criteria.</p>
				<?php endif; ?>



	</div><!-- row -->
</div><!-- col-xs-12 -->

<?php get_footer(); ?>


