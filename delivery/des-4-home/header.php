<?php
/**
 * The header for our theme
 *
 * @package h5game
 */

$review_search_url   = home_url( '/reviews/' );
$key                 = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
$has_primary_menu    = has_nav_menu( 'main-menu' );
$latest_blog_items   = get_posts(
    array(
        'post_type'           => 'blog',
        'posts_per_page'      => 1,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    )
);
$latest_review_items = get_posts(
    array(
        'post_type'           => 'review',
        'posts_per_page'      => 1,
        'post_status'         => 'publish',
        'orderby'             => 'date',
        'order'               => 'DESC',
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    )
);
$latest_blog         = ! empty( $latest_blog_items ) ? $latest_blog_items[0] : null;
$latest_review       = ! empty( $latest_review_items ) ? $latest_review_items[0] : null;
$latest_blog_url     = $latest_blog ? get_permalink( $latest_blog ) : home_url( '/blogs/' );
$latest_review_url   = $latest_review ? get_permalink( $latest_review ) : home_url( '/reviews/' );
$latest_blog_title   = $latest_blog ? get_the_title( $latest_blog ) : 'Browse latest blogs';
$latest_review_title = $latest_review ? get_the_title( $latest_review ) : 'Browse latest reviews';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head class="site-header">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header class="site-head">
        <div class="head-topline">
            <div class="container">
                <div class="head-topline-inner">
                    <span class="head-topline-label">Channel desk</span>
                    <a class="head-topline-story" href="<?php echo esc_url( $latest_blog_url ); ?>">
                        <span>Blog</span>
                        <?php echo esc_html( $latest_blog_title ); ?>
                    </a>
                    <a class="head-topline-story" href="<?php echo esc_url( $latest_review_url ); ?>">
                        <span>Review</span>
                        <?php echo esc_html( $latest_review_title ); ?>
                    </a>
                </div>
            </div>
        </div>
        <div class="head-main">
            <div class="container">
                <div class="head-wrapper">
                    <div class="head-left">
                        <div class="head-logo">
                            <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        </div>
                    </div>
                    <div class="head-center">
                        <div class="head-search" id="head-search-panel">
                            <div class="head-search-wrapper">
                                <form action="<?php echo esc_url( $review_search_url ); ?>" method="get">
                                    <input type="search" class="head-search-input" placeholder="Search reviews" aria-label="Search reviews" value="<?php echo esc_attr( $key ); ?>" name="key" />
                                    <button class="head-search-submit" type="submit" aria-label="Submit search">
                                        <span class="icon-search"><span></span></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="head-right">
                        <button class="btn head-search-btn" type="button" aria-label="Open search" aria-controls="head-search-panel" aria-expanded="false">
                            <span class="icon-search"><span></span></span>
                        </button>
                        <?php if ( $has_primary_menu ) : ?>
                            <button class="btn head-btn" type="button" aria-label="Open menu" aria-controls="main-menu" aria-expanded="false">
                                <span class="icon-menu"><span></span></span>
                            </button>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php if ( $has_primary_menu ) : ?>
            <div class="head-nav-row">
                <div class="container">
                    <nav id="primary-menu" class="main-navigation" aria-label="Primary menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'main-menu',
                                'menu_id'         => 'main-menu',
                                'menu_class'      => 'menu',
                                'container'       => 'div',
                                'container_class' => 'head-menu',
                                'fallback_cb'     => false,
                            )
                        );
                        ?>
                    </nav>
                </div>
            </div>
        <?php endif; ?>
    </header>
    <main class="site-body">
