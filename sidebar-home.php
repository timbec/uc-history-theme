<?php
/**
 * Home Sidebar
 *
 */
?>

<!-- Sidebar -->
<aside class="home-sidebar">

	<section class="about-uc-history">
		<div class="uc-pin"></div>
		<header class="sidebar-header about-header">
		<h1><a href="">About Uranium City History</a></h1>
		</header>

		<figure class="about-uc">
			<img src="<?php bloginfo('template_directory'); ?>/images/Sign-to-UC.png" />
			<figcaption>Entrance to Uranium City, 1957</figcaption>
		</figure>

		<div class="about-uc-text">
			<p>This site is dedicated to recording the history of Uranium City, Saskatchewan. This is very much a work in progress, and will evolve with the material I can gather, and whatever historical material people send in.</p>
			<p>Eventually, I would like to make this a proper historical site, with interactive timelines, galleries grouped by place and era, and possibly a forum. However, I'm building the site in my spare time, so progress is a little slow.</p>
			<p>Do check back often, to see the site as it evolves. And send in your own memories, photos, whatever you have. </p>
		</div>
	</section>

	<ul>
		<li>
			<header class="sidebar-header">
		<h1><a href="">Recent Posts</a></h1>
		</header>


		<?php   $args = array('post_type' => array('news', 'writing', 'video'), 'posts_per_page' => 5 );
    $latest_loop = new WP_Query( $args );
    while ( $latest_loop->have_posts() ) : $latest_loop->the_post();?>

    <li class="recent-posts">
    		<!--featured image-->

    		<?php if (has_post_thumbnail()) { ?>
    						<div class="recent-posts-thumbnail">
    							<?php the_post_thumbnail('recent-posts'); ?>
    						</div>
    						<?php } else { ?>



    						<?php } ?>

    	<h4 class="recent-posts-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
    </li>

    <?php endwhile; ?>
		</li>
		<li>
			<header class="sidebar-header">
		<h1><a href="">Recent Comments</a></h1>
		</header>

		<?php if ( dynamic_sidebar('Sidebar Right') ) : elseif( current_user_can( 'edit_theme_options' ) ) : ?>

	<h5><?php _e( 'No widgets found.', 'foundaton' ); ?></h5>
	<p><?php printf( __( 'It seems you don\'t have any widgets in your sidebar! Would you like to %s now?', 'foundation' ), '<a href=" '. get_admin_url( '', 'widgets.php' ) .' ">populate your sidebar</a>' ); ?></p>

<?php endif; ?>
		</li>
	</ul>






</aside>
<!-- End Sidebar -->