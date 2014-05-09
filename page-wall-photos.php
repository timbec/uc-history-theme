<?php
/**
*Template Name: Photo Wall Page
 */

get_header(); ?>

      <!-- Main Content -->
    <div id="photo-wall" role="main">

	<?php	$args = array( 'post_type' => 'photos', 'item-type' => 'gallery-page', 'posts_per_page' => 1 );
$photo_loop = new WP_Query( $args );
while ( $photo_loop->have_posts() ) : $photo_loop->the_post(); ?>

	<header>
		<hgroup>
			<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
		</hgroup>
	</header>

	<article class="wall-thumbnails">


	<?php the_content(); ?>

	<footer>

		<p><?php wp_link_pages(); ?></p>

	</footer>

</article>


			<?php endwhile; ?>

    </div>
    <!-- End Main Content -->

<?php get_footer(); ?>