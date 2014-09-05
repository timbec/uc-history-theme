<?php
/**
 * Single
 *
 * Loop container for single post content
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>

    <!-- Main Content -->
    <div class="single-places-content" role="main">

    	<nav id="nav-above" class="navigation">
			<span class="previous post-link">
				<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'boilerplate' ) . ' %title' ); ?>
			</span>

			<span class="next post-link">
				<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'boilerplate' ) . '' ); ?>
			</span>
		</nav><!-- #nav-above -->

<section class="content-container">




		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<figure id="main-image">
					<?php 
					if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
					  the_post_thumbnail('full-width');
					} 
					?>
				</figure>

	<section class="places-main-content">
				<header id="places-header">
				<h1><?php the_title(); ?></h1>
				<!-- <h6><?php _e('Written by', 'foundation' );?> <?php the_author_link(); ?> on <?php the_time(get_option('date_format')); ?></h6> -->
				</header>
				
		<article id="places-content">
		
		<?php the_content(); ?>

		<?php if ( get_post_meta($post->ID, 'pdf_link', true) ) : ?>
	                <p><a href="<?php echo get_post_meta($post->ID, 'pdf_link', true) ?>" >Click Here for Link</a></p>

	                <?php endif; ?>

			<footer>
				<p><?php wp_link_pages(); ?></p>


				<?php //get_template_part('author-box'); ?>
				<?php comments_template(); ?>
			</footer>

		</article>

	</section><!--places-main-content-->

			<?php endwhile; ?>
			
		<?php endif; ?>
</section><!--#content-container-->

    </div>
    <!-- End Main Content -->

<?php get_footer(); ?>