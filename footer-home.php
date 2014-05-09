<?php
/**
 * Footer
 *
 * Displays content shown in the footer section
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 4.0
 */
?>

<section id="inside-carousel" class="group">
		<header class="inside">
			<h1>Inside Uranium City History</h1>
		</header>
<section class="inside-boxes">
	<ul id="carousel-boxes">
		<?php   $args = array( 'post_type' => array('photos', 'news', 'writing', 'video'), 'posts_per_page' => -1 );
                $home_carousel_loop = new WP_Query( $args );
                while ( $home_carousel_loop->have_posts() ) : $home_carousel_loop->the_post(); ?>
			<li class="inside-box">
				<figure>
						<!--featured image-->

						<?php if (has_post_thumbnail()) { ?>
						<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('photo-carousel'); ?></a>
						<?php } else { ?>

						<?php } ?>

				</figure>
				<h3 class="carousel-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</li>
			<?php endwhile; ?>
	</ul>
		</section>

</section>

</div>
<!-- End Page -->

<!-- Footer -->
<footer id="main-footer">

<div class="large-12 columns">

	<ul>
		<ul class="uc-links">
			<h5>Uranium City Links</h5>
			<li></li>
			<li></li>
			<li></li>
		</ul>
		<ul class="about">
			<h5>About</h5>
		</ul>
		<ul class="contact">
			<h5>Contact</h5>
		</ul>
	</ul>
</div>

</footer>
<!-- End Footer -->

<?php wp_footer(); ?>

</body>
</html>