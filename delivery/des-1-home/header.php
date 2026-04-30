<?php
/**
 * The header for our theme
 *
 * @package h5game
 */

$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );
$blog_archive_url   = home_url( '/blogs/' );
$is_home_header     = is_front_page() || is_home();

$des1_nav_title_filter = static function ( $items ) {
	foreach ( $items as $item ) {
		if ( 'HTML5 Games' === $item->title ) {
			$item->title = 'Games';
		}

		if ( in_array( $item->title, array( 'Reviews Games', 'Review Games' ), true ) ) {
			$item->title = 'Reviews';
		}
	}

	return $items;
};
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
        <header class="site-header">
            <div class="container">
                <div class="head-wrapper">
                    <div class="head-left">
                        <div class="head-logo">
                           <a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
                        </div>
                    </div>
                    <div class="head-center">
                        <nav id="primary-menu" class="main-navigation">
                            <?php
                            add_filter( 'wp_nav_menu_objects', $des1_nav_title_filter );
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'main-menu',
                                    'menu_id'         => 'main-menu',
                                    'container_class' => 'head-menu',
                                )
                            );
                            remove_filter( 'wp_nav_menu_objects', $des1_nav_title_filter );
                            ?>
                        </nav>
                    </div>
                    <div class="head-right">
                        <?php if ( $is_home_header ) : ?>
                            <div class="head-search">
                                <div class="head-search-wrapper">
                                    <form action="<?php echo esc_url( $review_archive_url ); ?>">
                                        <?php $key = isset( $_GET['key'] ) ? sanitize_text_field( $_GET['key'] ) : ''; ?>
                                        <input type="text" class="form-control" placeholder="Search games or reviews" aria-label="Search" value="<?php echo esc_attr( $key ); ?>" name="key" />
                                        <button type="submit" class="head-search-submit">Search</button>
                                    </form>
                                </div>
                            </div>
                            <button class="btn head-search-btn" type="button" aria-label="Open search">
                                <div class="icon-search"><div></div></div>
                            </button>
                        <?php endif; ?>
                        <button class="btn head-btn" type="button" aria-label="Open menu">
                            <div class="icon-menu"><div></div></div>
                        </button>
                    </div>
                </div>
            </div>
        </header>
        <main class="site-body">
