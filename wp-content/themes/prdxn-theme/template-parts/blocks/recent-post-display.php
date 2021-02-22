<?php
/**
 * Block Name: Recent Display Block
 *
 * This is the template that displays the Recent Display Block.
 *
 * @package WordPress
 * @subpackage prdxn_theme_Theme
 */

// Create id attribute allowing for custom "anchor" value.
$post_recent_id = 'postrecent-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$post_recent_id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$post_recent_class_name = 'postrecent-block';
if ( ! empty( $block['className'] ) ) {
	$post_recent_class_name .= ' ' . $block['className'];
}

// Create the WP Query for display the post.
$args = array(
	'post_type'      => 'post',
	'post_status'    => 'publish',
	'posts_per_page' => -1,
);
$loop = new WP_Query( $args );
?>


<div id="<?php echo esc_attr( $post_recent_id ); ?>" class="row <?php echo esc_attr( $post_recent_class_name ); ?> mb-3">
<?php
    $count = 0; //set up counter variable
if ( $loop->have_posts() ) :
	while ( $loop->have_posts() ) :
		$loop->the_post();

        switch ($count) {
            case "0":
            case "3":
              $section_class= "col-lg-12";
              break;
            case "1":
            case "2":
              $section_class= "col-lg-6";
              break;
            default:
               $section_class= "col-lg-6";
          }

		?>
			<div class="card-wrapper mb-2 mb-lg-3 <?php echo $section_class; ?>">
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
