<?php
/**
 * Block Name: Single Post Display Block
 *
 * This is the template that displays the Single Display Block.
 *
 * @package WordPress
 * @subpackage prdxn_theme_Theme
 */

// Handle ID needed for get_field() function to work with widget data.
$widget      = false;
$acf_post_id = '';
if ( isset( $widget_id ) && ! empty( $widget_id ) ) {
	$widget      = true;
	$acf_post_id = $widget_id;
}
// Create id attribute allowing for custom "anchor" value.
$custom_post_id = 'custom-post-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$custom_post_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$custom_post_class_name = 'custom-post-block';
if ( ! empty( $block['className'] ) ) {
	$custom_post_class_name .= ' ' . $block['className'];
}

$single_post = get_field( 'custom_post', $acf_post_id );
?>

<div id="<?php echo esc_attr( $custom_post_id ); ?>" class="row <?php echo esc_attr( $custom_post_class_name ); ?> mb-3">
	<?php if ( $single_post ) : ?>
		<?php
		foreach ( $single_post as $featured_post ) :
				// Getting the post type name.
				$post_type_value = $featured_post->post_type;
			?>
				<div class="card-wrapper col-lg-6 mb-2 mb-lg-3">
				<a class="text-decoration-none" href="<?php echo esc_url( get_permalink( $featured_post->ID ) ); ?>">
					<div class="card card-link">
						<div class="overflow-hidden ratio-fix">
							<?php echo get_the_post_thumbnail( $featured_post->ID, 'full', array( 'class' => 'card-img' ) ); ?>
						</div>
						<div class="card-body overflow-hidden">
							<h6 class="text-danger">THE ECNOMICST <span class="float-right text-muted"><i class="fa fa-play-circle" aria-hidden="true"></i>
</span></h6>
							<h4 class="title"><?php echo esc_html( $featured_post->post_title ); ?></h4>
							<p class="description mb-5 pb-5"><?php echo esc_html( wp_trim_words( $featured_post->post_content, 10 ) ); ?></p>
							<p class="border-top py-2 mb-0 mt-auto"><?php echo get_the_date( 'D jS Y' ); ?> <span class="float-right text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></p>
						</div>
					</div>
				</a>
			</div>
			<?php endforeach; ?>
	<?php endif; ?>
</div>
