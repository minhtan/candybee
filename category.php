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

	<section id="primary-cat" class="content-area">
		<div class="primary-swap row">
			<div id="content" class="site-content col-9" role="main">
				<?php if ( have_posts() ) : ?>
					<ul class="ul-cat-nav">
						<?php while ( have_posts() ) : the_post(); ?>
							<li class="listing-cat">
								<div class="col-3 size-img">
									<div class='hexagon-help hexagon-cat'>
										<div class='hexagon-in1'>
											<div class="hexagon-in2 image-post">
												<a href="<?php echo get_permalink();  ?>">
													<img src="<?php echo wp_get_attachment_url( get_post_thumbnail_id()); ?>"/>
												</a>
											</div>
										</div>
									</div>
								</div>
								<div class="text col-9">
									<h2 class="title-post-cat">
										<a href="<?php echo get_permalink();  ?>">
											<?php echo the_title(); ?>
										</a>
									</h2>
									<p>
										<?php echo get_the_excerpt(); ?>
									</p>
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
			<div class="sidebar-cat col-3">
				<p>Ads</p>
			</div>
		</div>
	</section><!-- #primary -->

<?php get_footer();?>
