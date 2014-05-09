<?php
/*
Inside News Carousel Sub-Footer
*/
?>

<section id="inside-carousel" class="group">
		<header class="inside">
			<h1>Inside Uranium City History</h1>
		</header>
		<section class="inside-boxes">
			<?php   $args = array( 'post_type' => array('photos','news','video','writing'), 'item-type' => 'home-carousel', 'posts_per_page' => -1 );
                $home_carousel_loop = new WP_Query( $args );
                while ( $home_carousel_loop->have_posts() ) : $home_carousel_loop->the_post(); ?>
			<div class="inside-box">
				<figure>
						<!--featured image-->

						<?php if (has_post_thumbnail()) { ?>
						<?php the_post_thumbnail('photo-carousel'); ?>
						<?php } else { ?>

						<?php } ?>

				</figure>
				<h3 class="carousel-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
			</div>
			<?php endwhile; ?>
		</section>
</section>