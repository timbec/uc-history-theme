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
    <div id="photo-gallery" class="single-content role="main">

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

<article class="photo-thumbnails">

	<header>
		<hgroup>
			<h2><a href="<?php the_permalink(); ?>" title="<?php echo esc_attr( sprintf( __( 'Permalink to %s', 'foundation' ), the_title_attribute( 'echo=0' ) ) ); ?>" rel="bookmark"><?php the_title(); ?></a></h2>
			<h6><?php _e('Posted on ', 'foundation' );?><?php the_time(get_option('date_format')); ?></h6>

			<figcaption class="attribution">
            <!--Adds custom field for photograhp source-->
            <?php if ( get_post_meta($post->ID, 'credit_name', true) ) : ?>
       <h5>Photograph source: <a href="
            <?php if ( get_post_meta($post->ID, 'credit_link', true) ) : ?>
        <?php echo get_post_meta($post->ID, 'credit_link', true) ?>

        <?php endif; ?>

       " target="_blank"><?php echo get_post_meta($post->ID, 'credit_name', true) ?></a></h5>

        <?php endif; ?>

            
        </figcaption>
		</hgroup>
	</header>
	
	<?php the_content(); ?>

	<footer>

		<p><?php wp_link_pages(); ?></p>

	</footer>

</article>


			<?php endwhile; ?>
			
		<?php endif; ?>

	 <?php comments_template(); ?>
    </div>
    <!-- End Main Content -->

 


<?php get_footer(); ?>