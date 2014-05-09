<?php
/**
*Template Name: Writing Archive Page
 */

get_header(); ?>

<header>
	<h1>Writing</h1>
</header>

       <!-- Main Content -->
    <div id="writing" class="archive-content" role="main">

	<?php	$args = array( 'post_type' => 'writing', 'posts_per_page' => 10 );
$writing_loop = new WP_Query( $args );
while ( $writing_loop->have_posts() ) : $writing_loop->the_post(); ?>

	<div class="entry-content">

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<!--featured image-->

	<div class="archive-thumbnail">
		<?php if (has_post_thumbnail()) { ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
		<?php } else { ?>

		<?php } ?>
	</div>

	<div class="archive-text">
		<?php the_excerpt(); ?>
	</div>

		</div>
	<?php endwhile; ?>
	    </div>
    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>