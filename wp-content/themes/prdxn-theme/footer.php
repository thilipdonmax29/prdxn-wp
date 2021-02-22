<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage prdxn_theme_Theme
 */

?>

	<footer class="site-footer">
		<div class="footer-wrap py-5 mb-4">
			<div class="contact">
				<?php $logo = get_field( 'logo', 'options' ); ?>
				<?php if ( $logo ) : ?>
					<img src="/wp-content/themes/prdxn-theme/src/images/Portrait12.png" alt="" class="mb-5">
				<?php endif; ?>
				<?php if ( get_field( 'footer_description', 'options' ) ) : ?>
					<div class="text-white">
						<?php the_field( 'footer_description', 'options' ); ?>
					</div>
				<?php endif; ?>
			</div>
			<div class="address">
				<h4 class="mb-3 text-white">On World Ocean Initiative</h4>
					<div class="footer-menu-wrapper mb-3">
						<?php
						wp_nav_menu(
							array(
								'theme_location' => 'footer',
								'container'      => true,
								'menu_class'     => 'nav',
								'fallback_cb'    => '',
								'menu_id'        => 'footer-menu',
								'depth'          => 1,
								'walker'         => new WP_Bootstrap_Navwalker(),
							)
						);
						?>
					</div>
			</div>
			<div class="social">
				<h4 class="mb-3 text-white">Keep Updated</h4>
				<div class="social-icon">
					<?php if ( get_field( 'facebook_link', 'options' ) ) : ?>
						<a href="<?php the_field( 'facebook_link', 'options' ); ?>" class="mr-2"><img src="/wp-content/themes/prdxn-theme/src/images/fb_icon.png" alt="facebook"></a>
					<?php endif; ?>
					<?php if ( get_field( 'twitter_link', 'options' ) ) : ?>
						<a href="<?php the_field( 'twitter_link', 'options' ); ?>" class="mr-2"><img src="/wp-content/themes/prdxn-theme/src/images/fb_icon.png" alt="facebook"></a>
					<?php endif; ?>
					<?php if ( get_field( 'instagram_link', 'options' ) ) : ?>
						<a href="<?php the_field( 'instagram_link', 'options' ); ?>" class="mr-2"><img src="/wp-content/themes/prdxn-theme/src/images/fb_icon.png" alt="facebook"></a>
					<?php endif; ?>
					<?php if ( get_field( 'youtube_link', 'options' ) ) : ?>
						<a href="<?php the_field( 'youtube_link', 'options' ); ?>" class="mr-2"><img src="/wp-content/themes/prdxn-theme/src/images/fb_icon.png" alt="facebook"></a>
					<?php endif; ?>
					<?php if ( get_field( 'linkedin', 'options' ) ) : ?>
						<a href="<?php the_field( 'linkedin', 'options' ); ?>" class="mr-2"><img src="/wp-content/themes/prdxn-theme/src/images/fb_icon.png" alt="facebook"></a>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</footer><!-- #colophon -->
	<div class="footer-bottom bg-dark">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 my-3">
					<?php if ( have_rows( 'footer_bottom_menu', 'options' ) ) : ?>
						<ul class="foot-list m-0 p-0">
						<?php while ( have_rows( 'footer_bottom_menu', 'options' ) ) : ?>
						<?php the_row(); ?>
							<li>
								<a href="<?php the_sub_field( 'link', 'options' ); ?>"><?php the_sub_field( 'link_text', 'options' ); ?></a>
							</li>
						<?php endwhile; ?>
						</ul>
					<?php endif; ?>
				</div>
				<div class="col-lg-6 my-3">
				<?php if ( get_field( 'copywrite_text', 'options' ) ) : ?>
					<div class="text-white">
						<p class="text-white small text-lg-right text-center m-0"><?php the_field( 'copywrite_text', 'options' ); ?></p>
					</div>
				<?php endif; ?>

				</div>
			</div>
		</div>
	</div>

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
