<?php 
	
get_header(); ?>

	<section id="primary">
		<main>
			<?php
					// Start the Loop.
				while ( have_posts() ) : the_post();
					
				endwhile;
				// Previous/next page navigation.
			 	candybee_post_nav();
			?>
		</main>
	</section>>
<?php 
get_footer();
?>
