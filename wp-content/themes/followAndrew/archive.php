<?php get_header(); ?>


	<!-- Front page file loads the content directly to the Front page -> No matter what -->

	<article class="content px-3 py-5 p-md-5">

		<?php

		if (have_posts()) {
			while (have_posts()) {
				the_post(); // This function is kinda handler that will help me get rest of data about posts

				get_template_part('template-parts/content', 'archive'); // Gets content from template part (another directory
			}
		}

		?>

	</article>


<?php get_footer(); ?>