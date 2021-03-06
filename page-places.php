<?php
/**
*Template Name: Places Archive Page
 */

get_header(); ?>

<header>
	<h1>Places</h1>
</header>
    <!-- Main Content -->
    <div id ="news" class="archive-content" role="main">

	<?php	$args = array( 'post_type' => 'place', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>


	<div class="entry-content">

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

		<!--featured image-->
	<div class="archive-image">
		<?php if (has_post_thumbnail()) { ?>
		<?php the_post_thumbnail('photo-archive'); ?>
		<?php } else { ?>
			<img src="<?php bloginfo('stylesheet_directory'); ?>/images/newspaper-image.jpg" />
		<?php } ?>
	</div>

			<div class="archive-text">
				<?php the_excerpt(); ?>
			</div>

		</div><!--end .entry-text-->
	<?php endwhile; ?>
	    </div>
    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>