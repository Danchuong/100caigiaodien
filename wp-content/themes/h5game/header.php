<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package h5game
 */

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
        <header>
            <div class="container">
                <div class="head-wrapper">
                    <div class="head-left">
                        <div class="head-logo">
                           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        </div>
                        <div class="head-search input-group">
                            <div class="head-search-wrapper">
                                <form action="<?php echo home_url('/reviews')?>">
                                    <?php $key = isset( $_GET['key'] ) ? sanitize_text_field( $_GET['key'] ) : ''; ?>
                                    <input type="text" class="form-control" placeholder="Search games" aria-label="Search" value="<?= $key; ?>" name="key" />
                                    <div class="icon-search">
                                        <div></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="head-right">
                        <nav id="primary-menu" class="main-navigation">
                            <!-- <button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php //. esc_html_e( 'Primary Menu', 'h5game' ); ?></button> -->
                            <?php
                            wp_nav_menu(
                                array(
                                    'theme_location' => 'main-menu',
                                    'menu_id'        => 'main-menu',
                                    'container_class' => 'head-menu'
                                )
                            );
                            ?>
                        </nav>
                        <button class="btn head-search-btn">
                            <div class="icon-search"><div></div></div>
                        </button>
                        <button class="btn head-btn">
                            <div class="icon-menu"><div></div></div>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <main class="site-body">