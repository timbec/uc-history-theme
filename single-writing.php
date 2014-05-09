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
    <div class="single-content role="main">

    	<nav id="nav-above" class="navigation">
		<span class="previous post-link">

			<?php previous_post_link( '%link', '' . _x( '&larr;', 'Previous post link', 'boilerplate' ) . ' %title' ); ?>
			
		</span>

		<span class="next post-link">
			<?php next_post_link( '%link', '%title ' . _x( '&rarr;', 'Next post link', 'boilerplate' ) . '' ); ?>
		</span>
				</nav><!-- #nav-above -->

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>


<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header>
		<hgroup>
			<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<h6><?php _e('Written by', 'foundation' );?> <?php the_author_link(); ?> on <?php the_time(get_option('date_format')); ?></h6>
		</hgroup>
	</header>
	
	<?php the_content(); ?>

	<?php if ( get_post_meta($post->ID, 'pdf_link', true) ) : ?>
                <p><a href="<?php echo get_post_meta($post->ID, 'pdf_link', true) ?>" >Click Here for Link</a></p>

                <?php endif; ?>

	<footer>

		<p><?php wp_link_pages(); ?></p>

		<h6><?php _e('Posted Under:', 'foundation' );?> <?php the_category(', '); ?></h6>
		<?php the_tags('<span class="radius secondary label">','</span><span class="radius secondary label">','</span>'); ?>

		<?php get_template_part('author-box'); ?>
		<?php comments_template(); ?>

	</footer>

</article>

<hr />

			<?php endwhile; ?>
			
		<?php endif; ?>

    </div>
    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>