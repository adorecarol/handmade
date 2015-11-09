	</div><!-- row -->
</div><!-- container -->


<div class="container-fluid">


	<p id="back-top" style="display: block;" class="hidden-xs">
		<a href="#top"><span class="glyphicon glyphicon-chevron-up"></span>Back to Top</a>
	</p>


	<div id="footer" class="row">

		<div class="container">

			<div class="row">


				<div class="about col-xs-12 col-sm-6 col-md-4 col-lg-4">

					<h3 class="animated"><a href="<?php bloginfo('url'); ?>/about"><span class="glyphicon glyphicon-info-sign"> </span> About</a></h3>

					<p class="clear"><span class="pink">Handmade.com</span> is a women's lifestyle company focused on creating happiness every day through a homemade lifestyle. On this blog we share home decor projects, recipes, and crafts, as well as bits of life here in the Midwest.</p>

					<div class="separator-line"></div>

					<h4 class="pink"><span class="glyphicon glyphicon-road"> </span> FOLLOW US</h4>

					<a href="#">FACEBOOK </a> <span class="pad">/</span> <a href="#">TWITTER</a> <span class="pad">/</span> <a href="#">INSTAGRAM</a></br>
					

				<div class="separator-line visible-xs clear"></div>


				</div><!-- about -->



				<div class="popular-posts col-xs-12 col-sm-6 col-md-4 col-lg-4">

					<h3 class="animated"><a href="<?php bloginfo('url'); ?>/popular"><span class="glyphicon glyphicon-star"> </span> Popular</a></h3>
					<?php if (function_exists('get_most_viewed')): ?>
						<ul>
					        <?php get_most_viewed(); ?>
					    </ul>
					<?php endif; ?>


				<div class="visible-xs separator-line clear"></div>

				</div><!-- popular-posts -->




				<div class="contact col-xs-12 col-sm-6 col-md-4 col-lg-4">

					<h3 class="animated"><a href="<?php bloginfo('url'); ?>/contact"><span class="glyphicon glyphicon-envelope"> </span> Contact</a></h3>

					<div class="col-xs-12 col-sm-6">
						<div class="row skinny">
							<p>If you are interested in partnering with handmade.com please email <a href="mailto:jenni@gmail.com">jenni@handmade.com</a></p>


							<div class="separator-line clear"></div>
							
							<a href="<?php bloginfo('url'); ?>/advertise-with-us/">Advertise with Us</a>
							
						</div>
					</div>


					<div class="hidden-xs col-xs-12 col-sm-6">


							<?php 


							$ads = new WP_Query(array(
							     'post_type' => 'ads',
							     'showposts' => 1,
							     'orderby' => 'rand',
							));

							while ($ads->have_posts()) : $ads->the_post(); ?>

								<div class="ads">

								  	<a href="<?php the_field('ad_link');?>" target="_blank" alt="<?php the_title(); ?>">
										
										<?php	
											if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
												the_post_thumbnail('large',  array( 'class' => 'img-responsive' ));
											} 
										?>

									</a>

								</div><!-- ads -->

							<?php endwhile; ?>
					</div>


				</div><!-- contact -->




				
			</div><!-- row -->
		</div><!-- container -->
				
		<?php wp_footer(); ?>

	</div><!-- footer -->

	<div class="container">

			<div class="copy col-xs-12">
				&copy; 2015 Handmade.com. All rights reserved.
			</div><!-- copy -->



	</div><!-- container -->

</div><!-- container-fluid -->




<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/scrolltotop.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
<script async defer data-pin-hover="true" data-pin-round="true" data-pin-tall="true" src="//assets.pinterest.com/js/pinit.js"></script>

<script type="text/javascript">

$(function(){ // document ready
 
  if (!!$('.sticky').offset()) { // make sure ".sticky" element exists
 
    var stickyTop = $('.sticky').offset().top; // returns number 
 
    $(window).scroll(function(){ // scroll event
 
      var windowTop = $(window).scrollTop(); // returns number 
 
      if (stickyTop < windowTop){
        $('.sticky').css({ position: 'fixed', top: 50});
      }
      else {
        $('.sticky').css('position','static');
      }
 
    });
 
  }
 
});

</script>

</body>
</html>