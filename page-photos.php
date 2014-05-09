<?php
/**
*Template Name: Photos Archive Page
 */

get_header(); ?>

      <!-- Main Content -->
    <div id="photos" class="archive-content" role="main">

	<h1 class="page-title">Photo Pages</h1>

<section id="environmental-stewardship" class="text-section">

			<?php while ( have_posts() ) : the_post(); ?>

			<article class="opening-text">
				<?php the_content(); ?>
			</article>


			<?php endwhile; // end of the loop. ?>

			<?php wp_reset_postdata(); ?>

	<!--++++++++++Images to provide navigation to lower half of page. Calls thumbnails from sub-pages then links to the page it belongs to.+++++-->

		<nav class="navigation-thumbnails">

			<ul>
				<?php $args=array(
						  'showposts' => -1,
						  'post_type' => 'page',
						  'post_parent' => 26
						);

					$nav_thumbnail_query = new WP_Query($args);

			if ( $nav_thumbnail_query->have_posts() ):
			while ( $nav_thumbnail_query->have_posts() ) : $nav_thumbnail_query->the_post(); ?>


				<li class="nav-thumbnail-image"><a href="#<?php echo $post->post_name; ?>" class="nav-scroll">

					<?php if (has_post_thumbnail()) { ?>
					<figure class="nav-image">
						<?php the_post_thumbnail(); ?>
					<figcaption><?php the_title(); ?></figcaption>
					</figure>
					<span class="read-more">Read More</span></a>
					<?php } else { ?>

					<?php } ?>
				</li><!--end .nav-thumbnail-image-->


		<?php endwhile; ?>

		</ul>

		</nav>


</section><!--end .text-section-->

	<!--+++++++++++++++Sub Pages++++++++++++++++++-->

	<!--+++Grabs all the subpages of Environmental Stewardship and displays in the order set up in page admin++++++++++++++++++++++++++++++++++++++++++++-->


		<?php

		$child_pages = get_posts($args);
		if ($child_pages) {
			foreach($child_pages as $post): setup_postdata($post); ?>


				<section id="<?php echo $post->post_name; ?>" class="text-section">
					<h3 class="sub-page-title"><?php the_title(); ?></h3>

					<article class="sub-pages">
						<?php the_content(); ?>
					</article>


				</section>

		<?php endforeach;
		wp_reset_postdata();?>

				    <?php
				  } // foreach($pages

				?>

<?php endif; //ends child pages 'if' statement ?>
	</div><!-- End Main Content -->


<?php get_footer(); ?>