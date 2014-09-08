<?php
/**
 * Header
 *
 * Setup the header for our theme
 *
 * @package WordPress
 * @subpackage Foundation, for WordPress
 * @since Foundation, for WordPress 1.0
 */
?>

<!DOCTYPE html>

<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/custom.modernizr.js"></script>

<!-- Set the viewport width to device width for mobile -->
<meta name="viewport" content="width=device-width" />

<title><?php wp_title(); ?></title>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <div id="outer-wrap">
    <div id="inner-wrap">


	<header id="main-header">
        <div class="block">
            <nav class="search-bar">
        <?php get_template_part('searchform'); ?>
            </nav>

            <div id="minehead-image"></div>
            <div class="title-block">
                <h1><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <h3 class="subheader"><?php bloginfo('description'); ?></h3>
            <h4 class="tagline">"Helping Keep Uranium City alive on the web"</h4>
            </div><!--end .title-block-->

            <div id="atomic-symbol"></div>
                <a class="nav-btn" id="nav-open-btn" href="#nav">Book Navigation</a>
            </div><!--end .block-->
    </header>

                <nav id="nav" class="main-navigation group" role="navigation">
            <h1 class="menu-toggle"><?php _e( 'Menu', 'underscores' ); ?></h1>
            
            <div class="block">
            <a class="skip-link screen-reader-text" href="#content"><?php _e( 'Skip to content', 'underscores' ); ?></a>

            <?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
            <a class="close-btn" id="nav-close-btn" href="#top">Return to Content</a>
            </div>
        </nav><!-- #site-navigation -->


<!-- Begin Page -->
<div class="container group">