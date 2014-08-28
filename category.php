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
		<div class="primary-swap">
			<header id="header" class="row">
				<div class="logo-header col-8">
					<h1>
						<a href="<?php echo home_url();?>">
							<img src="<?php echo get_template_directory_uri(); ?>/img/logobee_64.png">
						</a>
						<span class="slogan"> - Mật ong chất</span>
					</h1>
				</div>
				<div class="social-link col-4">
					<ul>
						<li><a href="https://www.facebook.com/" class="fb"></a></li>
						<li><a href="" class="tw">twitter</a></li>
						<li><a href="" class="gg">google+</a></li>
						<li><a href="" class="yt">youtube</a></li>
					</ul>
				</div>
			</header>
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
								<div class="text col-8">
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
		</div>
	</section><!-- #primary -->

<?php get_footer();?>
