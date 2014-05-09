<?php get_header(); ?>

    <!-- Top Content -->
    <section id="top-content" role="content">




    <!--Featured Image-->
			<article id="feature-slider" class="feature-content">

    <!--+++++++++++++++++++++++++++++News Ticker+++++++++++++++++++++++++-->

            <section id="news-ticker-box">
                <h3 class="news-box-latest">Latest: </h3>
            <div id="news-ticker">
                <div class="marquee">
                <!--++++++++++++++++Latest Post++++++++++++++++++-->
            <?php   $args = array('post_type' => array('news', 'writing', 'video', 'pages'), 'posts_per_page' => 10, 'order_by' => 'rand' );
            $latest_loop = new WP_Query( $args );
            while ( $latest_loop->have_posts() ) : $latest_loop->the_post();?>

                <a class="marquee-item" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>


            <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>
                </div>

        </div>
            </section><!--#news-ticker-box-->

<div class="flexslider">
    <ul class="slides">
        <?php   $args = array( 'post_type' => 'slider', 'posts_per_page' => 10 );
    $latest_loop = new WP_Query( $args );
    while ( $latest_loop->have_posts() ) : $latest_loop->the_post();?>

        <li>    <!--featured image-->

            <?php if (has_post_thumbnail()) { ?>
            <?php the_post_thumbnail('slider-image'); ?>
            <?php } else { ?>
            <?php } ?>
                        </li>
    <?php endwhile; ?>
    </ul>

</div><!--end flexslider-->

            </article>

    <!--++++++++++++++++Latest Post++++++++++++++++++-->
    <?php   $args = array( 'post_type' => 'news', 'item-type' => 'latest', 'posts_per_page' => 1 );
    $latest_loop = new WP_Query( $args );
    while ( $latest_loop->have_posts() ) : $latest_loop->the_post();?>

            <article id="latest-posts" class="feature-content">

                <header>
                    <h2 class="latest-title"><a href="">News</a></h2>
                    <h3 class="latest-post"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <time>April 17, 2013</time>
                </header>

                <figure>
                <?php if (has_post_thumbnail()) { ?>
                <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                <?php } else { ?>
                <?php } ?>
                </figure>
                <div class="latest-text">
                    <p><?php the_excerpt(); ?></p>
                </div>
            </article>
    <?php endwhile; ?>
    </section><!--end .top-content-->

    <div id="bottom-container">
        <!--First Row Bottom-->
    	<section class="bottom-content">
    		<section class="top-boxes">

                <?php   $args = array( 'post_type' => 'writing','item-type' => 'primary', 'posts_per_page' => 1 );
                $latest_loop = new WP_Query( $args );
                while ( $latest_loop->have_posts() ) : $latest_loop->the_post();
                    $do_not_duplicate[] = $post->ID;
                    $LatestPost = $post->ID;?>

          <article class="articles">
                <header class="article-info">
                    <h1><a href="">Articles, News, Errata</a></h1>
                    <h3 class="article-title"><a href=""><?php the_title(); ?></a></h3>
                    <time>June 24, 2011</time>
                </header>
                    <figure>
                            <!--featured image-->

                            <?php if (has_post_thumbnail()) { ?>
                            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                            <?php } else { ?>

                            <?php } ?>
        <!--Adds credit if one exists-->
        <figcaption class="attribution">
            <!--Adds custom field for photograhp source-->
            <?php if ( get_post_meta($post->ID, 'credit_name', true) ) : ?>
       Photograph from <a href="
            <?php if ( get_post_meta($post->ID, 'credit_link', true) ) : ?>
        <?php echo get_post_meta($post->ID, 'credit_link', true) ?>

        <?php endif; ?>

       " target="_blank"><?php echo get_post_meta($post->ID, 'credit_name', true) ?></a>

        <?php endif; ?>


        </figcaption>
                    </figure>
                    <div class="article-text">
                        <?php the_excerpt(); ?>
                    </div>

            </article><!--end.articles-->
               <?php endwhile; ?>
        <!--end latest Articles, News, Errata-->

        <!--end latest Photographs-->
        <?php   $args = array( 'post_type' => 'photos', 'item-type' => 'primary', 'posts_per_page' => 1 );
                $latest_loop = new WP_Query( $args );
                while ( $latest_loop->have_posts() ) : $latest_loop->the_post();
                    $do_not_duplicate[] = $post->ID;
                    $LatestPost = $post->ID;?>

            <article class="articles">

                <header class="article-info">
                    <h1><a href="">Photographs</a></h1>
                <h3 class="article-title"><a href="">
                 Photographs: 1996 - 2003:
                </a>
                </h3>
                <time>April 23, 2013</time>
                </header>
               <figure>
                        <!--featured image-->

                          <?php if (has_post_thumbnail()) { ?>
                          <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                          <?php } else { ?>

                          <?php } ?>

        <figcaption class="attribution">
            <!--Adds custom field for photograhp source-->
            <?php if ( get_post_meta($post->ID, 'credit_name', true) ) : ?>
       Photograph from <a href="
            <?php if ( get_post_meta($post->ID, 'credit_link', true) ) : ?>
        <?php echo get_post_meta($post->ID, 'credit_link', true) ?>

        <?php endif; ?>

       " target="_blank"><?php echo get_post_meta($post->ID, 'credit_name', true) ?></a>

        <?php endif; ?>


        </figcaption>
                </figure>
                <div class="article-text">
                        <?php the_excerpt(); ?>
                    </div>
            </article>
        <?php endwhile; ?>
        <!--end Photographs-->
            </section><!--.top-boxes-->

        <!--Bottom Three Boxes-->
            <section class="bottom-boxes large-12 columns">

            <!--++++++++++VIDEOS+++++++++++-->
                <?php   $args = array( 'post_type' => 'video', 'posts_per_page' => 1 );
                $video_loop = new WP_Query( $args );
                while ( $video_loop->have_posts() ) : $video_loop->the_post(); ?>

                <article class="videos bottom-box">
                <header class="article-info">
                    <h1><a href="">Videos</a></h1>
                <h3 class="article-title"><a href="<?php the_permalink(); ?>">
                 <?php the_title(); ?>
                </a>
                </h3>
                <time>April 23, 2013</time>
                </header>
               <figure>
                    <!--featured image-->

                    <?php if (has_post_thumbnail()) { ?>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('video-image'); ?></a>
                    <?php } else { ?>

                    <?php } ?>

            <figcaption class="attribution">
            <!--Adds custom field for photograhp source-->
            <?php if ( get_post_meta($post->ID, 'credit_name', true) ) : ?>
       Video from <a href="
            <?php if ( get_post_meta($post->ID, 'credit_link', true) ) : ?>
        <?php echo get_post_meta($post->ID, 'credit_link', true) ?>

        <?php endif; ?>

       " target="_blank"><?php echo get_post_meta($post->ID, 'credit_name', true) ?></a>

        <?php endif; ?>


        </figcaption>
                </figure>
                <div class="article-text">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
                <?php endwhile; ?>

            <!--++++++++++MORE ARTICLES+++++++++++-->
            <?php   $args = array( 'post_type' => 'writing', 'item-type' => 'secondary','posts_per_page' => 1 );
                $writing_loop = new WP_Query( $args );
                while ( $writing_loop->have_posts() ) : $writing_loop->the_post();
                    if( $post->ID == $LatestPost) continue; ?>
                <article class="more-articles bottom-box">
                <header class="article-info">
                    <h1><a href="">More Articles</a></h1>
                <h3 class="article-title"><a href="<?php the_permalink(); ?>">
                 <?php the_title(); ?>
                </a>
                </h3>
                <time>April 23, 2013</time>
                </header>
               <figure>
                        <!--featured image-->

                        <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('video-image'); ?></a>
                        <?php } else { ?>

                        <?php } ?>

                    <figcaption class="attribution">
                        Photograph by Tim Beckett. See <a href="">more</a>
                    </figcaption>
                </figure>
                <div class="article-text">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>

            <!--+++++++++++MORE PHOTOGRAPHS++++++++++++++-->

            <?php   $args = array( 'post_type' => 'photos', 'item-type' => 'secondary', 'posts_per_page' => 2 );
                $more_photos_loop = new WP_Query( $args );
                while ( $more_photos_loop->have_posts() ) : $more_photos_loop->the_post();
                    if( $post->ID == $LatestPost) continue; ?>
                <article class="more-photographs bottom-box">
                <header class="article-info">
                    <h1><a href="">More Photographs</a></h1>
                <h3 class="article-title"><a href="<?php the_permalink(); ?>">
                 <?php the_title(); ?>
                </a>
                </h3>
                <time>April 23, 2013</time>
                </header>
               <figure>
                        <!--featured image-->

                        <?php if (has_post_thumbnail()) { ?>
                        <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('video-image'); ?></a>
                        <?php } else { ?>

                        <?php } ?>

                    <figcaption class="attribution">
                        Photograph by Tim Beckett. See <a href="">more</a>
                    </figcaption>
                </figure>
                <div class="article-text">
                        <?php the_excerpt(); ?>
                    </div>
                </article>
            <?php endwhile; ?>
            </section><!--end .bottom-boxes-->
    	</section><!--end .bottom-content-->

        <?php get_sidebar('home'); ?>

    </div><!--end .bottom-container-->
    <!-- End Bottom Content -->

<?php get_footer('home'); ?>