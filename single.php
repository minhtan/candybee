<?php
/**
 * The template for displaying all single posts.
 *
 * @package candybee
 */

get_header(); ?>
		<div class="cat_list_wrap">
			<ul class="cat_list">
				<li class="one_cat"><a class="cat_link" data-hover="Home" href="<?php echo home_url();?>">Home</a></li>
				<?php
				$args = array(
				  'orderby' => 'name'
				  );
				$categories = get_categories( $args );
				foreach ( $categories as $category ) : ?>
					<?php 
						$cat_link =  get_category_link($category->term_id);
						$cat_name = $category->name;
				 	?>
					<li class="one_cat"><a class="cat_link" data-hover="<?php echo $cat_name; ?>" href="<?php echo $cat_link; ?>"><?php echo $cat_name; ?></a></li>
				<?php endforeach; ?>
			</ul>
		</div>
		<div id="primary" class="content-area row">
			<main id="main" class="site-main col-9" role="main">
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'single' ); ?>
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
	</div><!-- #primary-wrap -->
<?php get_footer(); ?>