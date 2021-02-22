<?php
/**
 * Block Name: latest Display Block
 *
 * This is the template that displays the Recent Display Block.
 *
 * @package WordPress
 * @subpackage prdxn_theme_Theme
 */

// Create id attribute allowing for custom "anchor" value.
$post_recent_id = 'postlatest-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$post_latest_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$post_latest_class_name = 'postlatest-block';
if ( ! empty( $block['className'] ) ) {
	$post_latest_class_name .= ' ' . $block['className'];
}

// Create the WP Query for display the post.
$args = array(
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'posts_per_page' => 3,
);
$loop = new WP_Query( $args );
?>


<div id="<?php echo esc_attr( $post_latest_id ); ?>" class="row <?php echo esc_attr( $post_latest_class_name ); ?> mb-3">
<?php
    $count = 0; //set up counter variable
if ( $loop->have_posts() ) :
	while ( $loop->have_posts() ) :
		$loop->the_post();
		?>
			<div class="card-wrapper mb-2 mb-lg-3 col-lg-4">
				<a href="<?php echo esc_url( get_permalink( $post->ID ) ); ?>" class="text-decoration-none">
					<div class="card left-right-content card-link">
						<div class="overflow-hidden ratio-fix">
							<?php the_post_thumbnail( 'full', array( 'class' => 'card-img' ) ); ?>
						</div>
						<div class="card-body overflow-hidden">
							<h6 class="text-danger">THE ECNOMICST 
                                <span class="float-right text-muted">
                                    <i class="fa fa-play-circle" aria-hidden="true"></i>
                                </span>
                            </h6>
							<h4><?php the_title(); ?></h4>
							<div class="mb-5 pb-5"><?php $excerpt= get_the_excerpt(); echo substr($excerpt, 0, 100) ?></div>
                            <p class="border-top py-2 mb-0 mt-auto"><?php echo get_the_date( 'D jS Y' ); ?> <span class="float-right text-danger"><i class="fa fa-arrow-right" aria-hidden="true"></i></span></p>
						</div>
					</div>
				</a>
			</div>
				<?php
            $count++;
			endwhile;
		endif;
	wp_reset_postdata();
?>
</div>
