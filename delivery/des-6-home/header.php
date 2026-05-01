<?php
/**
 * The header for our theme
 *
 * @package h5game
 */

$review_archive_url = home_url( '/reviews/' );
$search_key         = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
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
<?php wp_body_open(); ?>
	<header class="site-header des6-discovery-header">
		<div class="des6-head-shell">
			<div class="head-wrapper">
				<div class="head-left">
					<div class="head-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
				</div>

				<div class="head-center" id="des6-header-search-panel">
					<form class="head-search-form" action="<?php echo esc_url( $review_archive_url ); ?>" method="get" role="search">
						<label class="screen-reader-text" for="des6-header-search">Search reviews</label>
						<input id="des6-header-search" class="head-search-input" type="search" name="key" value="<?php echo esc_attr( $search_key ); ?>" placeholder="Search reviews" />
						<button class="head-search-submit" type="submit">Search</button>
					</form>
				</div>

				<div class="head-right">
					<nav id="site-navigation" class="main-navigation head-navigation" aria-label="Primary navigation">
						<?php
						wp_nav_menu(
							array(
								'theme_location'  => 'main-menu',
								'menu_id'         => 'main-menu',
								'container_class' => 'head-menu',
								'fallback_cb'     => false,
							)
						);
						?>
					</nav>

					<button class="head-search-btn" type="button" aria-label="Open search" aria-controls="des6-header-search-panel" aria-expanded="false">
						<span class="icon-search" aria-hidden="true"><span></span></span>
					</button>
					<button class="head-btn" type="button" aria-label="Open menu" aria-controls="main-menu" aria-expanded="false">
						<span class="icon-menu" aria-hidden="true"><span></span></span>
					</button>
				</div>
			</div>
		</div>
	</header>
	<main class="site-body">
