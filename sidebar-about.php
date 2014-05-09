<?php
/**
 * Home Sidebar
 *
 */
?>

<!-- Sidebar -->
<aside class="home-sidebar large-4 small-12 columns">

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