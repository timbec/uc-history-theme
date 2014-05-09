<?php
/**
 * Page
 *
 * Loop container for page content
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */

get_header(); ?>

    <!-- Main Content -->
    <div class="large-9 columns" role="main">

		<?php if ( have_posts() ) : ?>

			<?php while ( have_posts() ) : the_post(); ?>
				<article id="page-<?php the_ID(); ?>" <?php post_class(); ?>>

			<header>
				<h1><?php the_title(); ?></h1>
			</header>

			<?php if ( has_post_thumbnail()) : ?>
				<a href="<?php the_permalink(); ?>" class="th" title="<?php the_title_attribute(); ?>" ><?php the_post_thumbnail(); ?></a>
			<?php endif; ?>

			<?php the_content(); ?>

			</article>
			<?php endwhile; ?>

		<?php endif; ?>

    </div>
    <!-- End Main Content -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>