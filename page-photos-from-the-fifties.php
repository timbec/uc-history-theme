<?php
/**
*Photos from the '50s sub-page
 */

get_header(); ?>

      <!-- Main Content -->
   <header class="archives">
	<h3>Photos</h3>
</header>
      <!-- Main Content -->
    <div id="photos" class="archive-content" role="main">

        <div class="fotorama"
            data-width="100%"
            data-swipe="true"
            data-transition="crossfade"
            data-allow-full-screen="native"
            data-keyboard="true"
            data-nav="thumbs"
            data-fit="cover"
            >
            <!--data-ratio="800/600"-->

	<?php	$args = array(
		'post_type' => 'photos',
		'posts_per_page' => 5,
		'tax_query' => array(
		array(
			'taxonomy' => 'item-place',
			'field' => 'slug',
			'terms' => 'uranium-city'
		)
	)
);
$photo_loop = new WP_Query( $args );

        while ( $photo_loop->have_posts() ) : $photo_loop->the_post(); ?>


 		<a href="<?php the_post_thumbnail('gallery-image'); ?>"><?php the_post_thumbnail('photo-thumbnail'); ?></a>

    <?php endwhile;

    // Reset Query
wp_reset_query();
?>

    </div><!--end .fotorama-->

   <?php
// The Query
query_posts( $args );

// The Loop
while ( have_posts() ) : the_post();
    echo '<li>';
    the_title();
    echo '</li>';
endwhile;

// Reset Query
wp_reset_query();
?>

	    </div>

<?php get_footer(); ?>