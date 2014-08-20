<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package candybee
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
<meta name="apple-mobile-web-app-capable" content="yes">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php if( is_home() || is_front_page() ) : ?>

	<?php else : ?>
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
					<li><a href="" class="fb"><?php dd_fblike_generate('Like Box Count') ?>facebook</a></li>
					<li><a href="" class="tw">twitter</a></li>
					<li><a href="" class="gg">google+</a></li>
					<li><a href="" class="yt">youtube</a></li>
				</ul>
			</div>
		</header>
	<?php endif; ?>	
	
