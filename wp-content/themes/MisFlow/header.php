<!doctype html>
<html lang="<?php echo get_locale(); ?>">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title><?php the_title(); ?></title>

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">
</head>
<body>

<header class="misflow-theme__header" aria-label="Header"> <!-- .misflow-theme__header -->

	<img src="" alt="header-logo" role="img">

	<nav class="misflow-theme__navigation" role="navigation" aria-label="Main Navigation"> <!-- .misflow-theme__navigation -->
		<h1 class="navigation-header"><?php the_title(); ?></h1>

		<section class="navigation__right-side"> <!-- .navigation__right-side -->

			<span class="navigation__right-side-menu-burger"><i class="fa fa-menu"></i></span>

			<?php get_template_part('searchform'); ?>

			<ul class="misflow-theme__navigation-list" role="list" aria-label="Navigation List"> <!-- end .misflow-theme__navigation-list -->
				<li class="nav-item" role="listitem">
					<a href="#">Start</a>
					<a href="#">About</a>
					<a href="#">Contact me</a>
				</li>
			</ul> <!-- end .misflow-theme__navigation-list -->

		</section> <!-- end .navigation__right-side -->

	</nav> <!-- end .misflow__theme-navigation -->

</header> <!-- end .misflow-theme__header -->