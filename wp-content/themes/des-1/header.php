<?php
/**
 * The header for our theme
 *
 * @package h5game
 */

$review_archive_url = home_url( '/reviews/' );
$search_key         = '';

if ( isset( $_GET['key'] ) && is_scalar( $_GET['key'] ) ) {
	$search_key = sanitize_text_field( wp_unslash( $_GET['key'] ) );
}

$des1_nav_title_filter = static function ( $items ) {
	$seen_nav_titles = array();

	foreach ( $items as $item_index => $item ) {
		if ( 'HTML5 Games' === $item->title ) {
			$item->title = 'Games';
		}

		if ( in_array( $item->title, array( 'Reviews Games', 'Review Games' ), true ) ) {
			$item->title = 'Reviews';
		}

		if ( ! in_array( $item->title, array( 'Games', 'Reviews', 'Blogs', 'About Us' ), true ) ) {
			unset( $items[ $item_index ] );
			continue;
		}

		if ( isset( $seen_nav_titles[ $item->title ] ) ) {
			unset( $items[ $item_index ] );
			continue;
		}

		$seen_nav_titles[ $item->title ] = true;
	}

	return array_values( $items );
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
                        <nav id="primary-menu" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary navigation', 'h5game' ); ?>">
                            <?php
                            add_filter( 'wp_nav_menu_objects', $des1_nav_title_filter );
                            wp_nav_menu(
                                array(
                                    'theme_location'  => 'main-menu',
                                    'menu_id'         => 'main-menu',
                                    'menu_class'      => 'head-menu-list',
                                    'container_class' => 'head-menu',
                                    'fallback_cb'     => false,
                                )
                            );
                            remove_filter( 'wp_nav_menu_objects', $des1_nav_title_filter );
                            ?>
                        </nav>
                    </div>
                    <div class="head-right">
                        <button class="btn head-search-btn" type="button" aria-label="<?php esc_attr_e( 'Open search', 'h5game' ); ?>" aria-controls="site-header-search" aria-expanded="false">
                            <div class="icon-search"><div></div></div>
                        </button>
                        <button class="btn head-btn" type="button" aria-label="<?php esc_attr_e( 'Open menu', 'h5game' ); ?>" aria-controls="main-menu" aria-expanded="false">
                            <div class="icon-menu"><div></div></div>
                        </button>
                    </div>
                </div>

                <div class="head-search" id="site-header-search">
                    <div class="head-search-wrapper">
                        <form action="<?php echo esc_url( $review_archive_url ); ?>" method="get" role="search">
                            <input type="text" class="form-control" placeholder="<?php esc_attr_e( 'Search reviews', 'h5game' ); ?>" aria-label="<?php esc_attr_e( 'Search reviews', 'h5game' ); ?>" value="<?php echo esc_attr( $search_key ); ?>" name="key" />
                            <button type="submit" class="head-search-submit"><?php esc_html_e( 'Search', 'h5game' ); ?></button>
                        </form>
                    </div>
                </div>
            </div>
        </header>
        <main class="site-body">
