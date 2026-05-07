<?php
/**
 * The header for our theme
 *
 * @package h5game
 */

$des5_search_key = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
        <header class="site-head des5-editorial-head">
            <div class="des5-head-strip" aria-label="Site desk note">
                <div class="container">
                    <span>Game Reviews / Playable Picks / Blog Briefing</span>
                    <span><?php echo esc_html( date_i18n( 'M j, Y' ) ); ?></span>
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
                        <nav id="primary-menu" class="main-navigation" aria-label="Primary navigation">
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'main-menu',
                                    'menu_id'         => 'main-menu',
                                    'container_id'     => 'des5-menu-panel',
                                    'container_class' => 'head-menu',
                                    'fallback_cb'     => false,
                                )
                            );
                            ?>
                        </nav>
                    </div>

                    <div class="head-right">
                        <div id="des5-search-panel" class="head-search">
                            <div class="head-search-wrapper">
                                <form action="<?php echo esc_url( home_url( '/reviews/' ) ); ?>" method="get" role="search">
                                    <input type="search" placeholder="Search reviews" aria-label="Search reviews" value="<?php echo esc_attr( $des5_search_key ); ?>" name="key">
                                    <button class="head-search-submit" type="submit" aria-label="Submit search">
                                        <span class="icon-search"><span></span></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                        <button class="head-search-btn" type="button" aria-label="Open search" aria-controls="des5-search-panel" aria-expanded="false">
                            <span class="icon-search"><span></span></span>
                        </button>
                        <button class="head-btn" type="button" aria-label="Open menu" aria-controls="des5-menu-panel" aria-expanded="false">
                            <span class="icon-menu"><span></span></span>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <main class="site-body">
