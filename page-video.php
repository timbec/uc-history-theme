<?php
/**
*Template Name: Video Archive Page
 */

get_header(); ?>

<header>
	<h1>Video</h1>
</header>

<!-- Main Content -->
    <div id="video" class="archive-content" role="main">

	<?php	$args = array( 'post_type' => 'video', 'posts_per_page' => 10 );
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post(); ?>


	<div class="video-thumbnail">
		<?php if (has_post_thumbnail()) { ?>
		<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('news-archive'); ?></a>
		<?php } else { ?>

		<?php } ?>

		<figcaption>
			<a href="
            <?php if ( get_post_meta($post->ID, 'credit_link', true) ) : ?>
        Video Source: <?php echo get_post_meta($post->ID, 'credit_link', true) ?>

        <?php endif; ?>

       " target="_blank"><?php echo get_post_meta($post->ID, 'credit_name', true) ?></a>
		</figcaption>

		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
	</div>


	<?php endwhile; ?>
	    </div>
    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>