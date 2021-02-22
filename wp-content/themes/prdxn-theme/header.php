<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package    WordPress
 * @subpackage Prdxn_Theme_Theme
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'prdxn-theme' ); ?></a>
	<header class="site-header sticky-top bg-white">
		<div class="top-section">
			<div class="container">
				<div class="row">
					<div class="col-12 col-lg-6">
						<?php $logo = get_field( 'logo', 'options' ); ?>
						<?php if ( $logo ) : ?>
							<a class="navbar-brand" rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url"><img src="<?php echo esc_url($logo['url']); ?>"></a>
						<?php endif; ?>
					</div>
					<div class="col-lg-6 d-none d-md-block">
						<div id="header-search" data-search-query="" class="text-right header-search d-none d-lg-block">
							<?php get_search_form(); ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="menu-bg">
			<div class="container">
				<nav id="main-nav" class="navbar navbar-expand-md navbar-light" aria-labelledby="main-nav-label">
					<h2 id="main-nav-label" class="sr-only">
						<?php esc_html_e( 'Main Navigation', 'prdxn-theme' ); ?>
					</h2>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e( 'Toggle navigation', 'prdxn-theme' ); ?>">
						<span class="navbar-toggler-icon"></span>
					</button>
					<?php
							wp_nav_menu(
								array(
									'theme_location'  => 'primary',
									'container_class' => 'collapse navbar-collapse',
									'container_id'    => 'navbarNavDropdown',
									'menu_class'      => 'navbar-nav ml-auto',
									'fallback_cb'     => '',
									'menu_id'         => 'main-menu',
									'depth'           => 2,
									'walker'          => new WP_Bootstrap_Navwalker(),
								)
							);
							?>

					<div id="header-search" data-search-query="" class="text-right header-search mobile-search d-block d-md-none">
						<?php get_search_form(); ?>
					</div>
				</nav><!-- .site-navigation -->
			</div><!-- container -->
		</div>
	</header><!-- .site-header end -->
	<div class="governance">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8 order-1 order-md-0">
					<h2>Governance</h2>
					<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. </p>
				</div>
				<div class="col-12 col-md-4 text-center order-0 order-md-1">
					<img src="wp-content/themes/prdnx-theme/src/images/gov.svg" style="width:150px;">
				</div>
			</div>
		</div>
	</div>
	<div class="read-more">
		<div class="container">
			<div class="row">
				<div class="col-12 col-md-8">
					<a href="#">Read More</a>
				</div>
				<div class="col-12 col-md-4 text-center">
				</div>
			</div>
		</div>
	</div>
