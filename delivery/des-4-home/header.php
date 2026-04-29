<?php
/**
 * The header for our theme
 *
 * @package h5game
 */

$review_search_url = home_url( '/reviews/' );
$blog_url          = function_exists( 'get_field' ) && get_field( 'latest_blog' ) ? get_field( 'latest_blog' ) : home_url( '/blogs/' );
$review_url        = function_exists( 'get_field' ) && get_field( 'latest_review' ) ? get_field( 'latest_review' ) : home_url( '/reviews/' );
$game_url          = function_exists( 'get_field' ) && get_field( 'popular_games' ) ? get_field( 'popular_games' ) : home_url( '/html5-games/' );
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
                    <span>Daily gaming portal</span>
                    <div class="head-topline-links">
                        <a href="<?php echo esc_url( $blog_url ); ?>">Blogs</a>
                        <a href="<?php echo esc_url( $review_url ); ?>">Reviews</a>
                        <a href="<?php echo esc_url( $game_url ); ?>">Games</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="head-wrapper">
                <div class="head-left">
                    <div class="head-logo">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                    </div>
                </div>
                <div class="head-center">
                    <div class="head-search input-group">
                        <div class="head-search-wrapper">
                            <form action="<?php echo esc_url( $review_search_url ); ?>">
                                <?php $key = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : ''; ?>
                                <input type="text" class="form-control" placeholder="Search games or reviews" aria-label="Search games or reviews" value="<?php echo esc_attr( $key ); ?>" name="key" />
                                <button class="head-search-submit" type="submit" aria-label="Submit search">
                                    <span class="icon-search"><span></span></span>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="head-right">
                    <nav id="primary-menu" class="main-navigation" aria-label="Primary menu">
                        <?php
                        wp_nav_menu(
                            array(
                                'theme_location'  => 'main-menu',
                                'menu_id'         => 'main-menu',
                                'container_class' => 'head-menu',
                            )
                        );
                        ?>
                    </nav>
                    <button class="btn head-search-btn" type="button" aria-label="Open search">
                        <span class="icon-search"><span></span></span>
                    </button>
                    <button class="btn head-btn" type="button" aria-label="Open menu">
                        <span class="icon-menu"><span></span></span>
                    </button>
                </div>
            </div>
            <div class="head-portal-rail">
                <a href="<?php echo esc_url( $blog_url ); ?>">News Wall</a>
                <a href="<?php echo esc_url( $review_url ); ?>">Latest Reviews</a>
                <a href="<?php echo esc_url( $game_url ); ?>">Popular Games</a>
                <a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Search Reviews</a>
            </div>
        </div>
    </header>
    <main class="site-body">
