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

		<div id="content" class="site-content" role="main">
			<?php if ( have_posts() ) : ?>
				<ul class="ul-cat-nav">
					<?php while ( have_posts() ) : the_post(); ?>
						<li class="listing-cat row">
							<div class="col-4 size-img">
								<a href="<?php echo get_permalink();  ?>">
									<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>"/>
								</a>		
							</div>
							<div class="post-cat col-8">
								<h2 class="title-post-cat">
									<a href="<?php echo get_permalink();  ?>">
										<?php echo the_title(); ?>
									</a>
								</h2>
								<p>
									<?php echo get_the_short_excerpt(); ?>
								</p>
								<a class="next-view" href="<?php echo get_permalink(); ?>">
									xem tiếp
								</a>
							</div>
						</li>
					<?php endwhile; ?>
				</ul>
				<?php
				    candybee_paging_nav();
				?>
			<?php else :
				get_template_part( 'content', 'none' );
			?>
			<?php endif; ?>

		</div><!-- #content -->
	</div><!-- #primary-wrap -->

<?php get_footer();?>
