<?php get_header(); ?>

<article class="misflow-theme__content" role="application" aria-label="Main Content"> <!-- .misflow-theme__content -->

	<?php

		// Checks if posts exists
		if(have_posts())
		{
			// Iterates over the post collection
			while (have_posts()) {

				// Selects the posts
				the_post();

				// Gets the content about posts
				the_content();
			}
		}

	?>

</article> <!-- end .misflow-theme__content -->

<?php get_footer(); ?>
