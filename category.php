<?php
/**
 * The template for displaying Category pages
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<?php if ( have_posts() ) : ?>
				<ul>
					<?php while ( have_posts() ) : the_post(); ?>
							<li class="post-listing"><?php echo the_title(); ?></li>
					<?php endwhile; ?>
				</ul>
			<?php else :
				get_template_part( 'content', 'none' );
			?>
			<?php endif; ?>
		</div><!-- #content -->
	</section><!-- #primary -->

<?php get_footer();?>
