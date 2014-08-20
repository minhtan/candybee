<?php
/**
 * The template for displaying all single posts.
 *
 * @package candybee
 */

get_header(); ?>
	<div class="primary-wrap">
		<div id="primary" class="content-area row">
			<main id="main" class="site-main col-9" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>
				<?php candybee_post_nav(); ?>
			<?php endwhile; // end of the loop. ?>
			</main><!-- #main -->
			<div class="sidebar col-3">
				<div class="ads">		
				</div>
				<div class="related">
					<?php get_sidebar(); ?>	
				</div>
			</div>	
		</div><!-- #primary -->
	</div>
<?php get_footer(); ?>