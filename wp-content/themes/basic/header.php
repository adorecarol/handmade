<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php if(is_home()) bloginfo('name'); else wp_title(''); ?></title>
	<link href='https://fonts.googleapis.com/css?family=Lato:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	<?php wp_head();?>
</head>
<body id="top">

<!-- <div class="container-fluid topback text-center">
	<img src="<?php bloginfo('template_directory'); ?>/images/handmade-logo-01.png" class="img-responsive center-block">
</div><!-- topback -->



<nav role="navigation" class="navbar navbar-default navbar-fixed-top">


<div class="container">

	<div class="row">

    <!-- Brand and toggle get grouped for better mobile display -->

	    <div class="navbar-header">
			
	        <button type="button" data-target="#navbarCollapse" data-toggle="collapse" class="navbar-toggle">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="glyphicon glyphicon-chevron-down"></span>

	        </button>

	    	<div class="logo">

				<a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/handmade-logo-01.png" class="img-responsive small
					<?php if(is_home()){
						echo 'animated fadeInDown';
						} else {
						echo '';
					} ?>
				" alt="Handmade"></a>
			
			</div><!-- logo -->

	    </div><!-- navbar-header -->

	    <!-- Collection of nav links and other content for toggling -->

	    <div id="navbarCollapse" class="collapse navbar-collapse">

	        <ul class="nav navbar-nav navbar-right">
	            <li class="<?php is_active('food'); ?>"><a href="<?php bloginfo('url'); ?>/food">Food</a></li>
	            <li class="<?php is_active('style'); ?>"><a href="<?php bloginfo('url'); ?>/style">Style</a></li>
	            <li class="<?php is_active('crafts'); ?>"><a href="<?php bloginfo('url'); ?>/crafts">Crafts</a></li>
	            <li class="<?php is_active('copular'); ?>"><a href="<?php bloginfo('url'); ?>/popular">Popular</a></li>
	            <li class="<?php is_active('about') ?>"><a href="<?php bloginfo('url'); ?>/about">About</a></li>
	            <li class="<?php is_active('contact'); ?>"><a href="<?php bloginfo('url'); ?>/contact">Contact</a></li>
	        </ul>
	    </div><!-- navbarCollapse -->

	</div>
</div>
</nav>


<div id="content" class="container">
	<div class="row">
  		


