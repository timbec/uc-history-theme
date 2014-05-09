<?php
/**
*Template Name: Fotorama Gallery Page
 */

get_header(); ?>

<header class="archives">
	<h3>Photos</h3>
</header>
      <!-- Main Content -->
    <div id="photos" class="archive-content" role="main">

        <div class="fotorama"
            data-width="100%"
            data-height="100%"
            data-swipe="true"
            data-transition="crossfade"
            data-allow-full-screen="native"
            data-keyboard="true"
            >

	<?php	$args = array( 'post_type' => 'photos', 'posts_per_page' => 5 );
$photo_loop = new WP_Query( $args );

        while ( $photo_loop->have_posts() ) : $photo_loop->the_post(); ?>


    <?php the_content(); ?>

    <?php endwhile; ?>


		</div><!--end .fotorama-->

	    </div>
    <!-- End Main Content -->
<?php get_footer(); ?>