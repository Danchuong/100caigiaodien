<?php
/**
 * The global header for the des-7 editorial stream design.
 *
 * @package h5game
 */

$des7_review_url = home_url( '/reviews/' );
$des7_key        = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
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
	<?php
	if ( function_exists( 'wp_body_open' ) ) {
		wp_body_open();
	}
	?>
	<header class="des7-header">
		<div class="des7-head-inner">
			<div class="head-wrapper">
				<div class="head-left">
					<a class="head-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home">
						<?php echo esc_html( get_bloginfo( 'name' ) ); ?>
					</a>
					<span class="head-edition"><?php esc_html_e( 'Game Desk', 'h5game' ); ?></span>
				</div>

				<nav id="site-navigation" class="head-menu" aria-label="<?php esc_attr_e( 'Primary navigation', 'h5game' ); ?>">
					<?php
					wp_nav_menu(
						array(
							'theme_location' => 'main-menu',
							'menu_class'     => 'head-menu-list',
							'container'      => false,
							'fallback_cb'    => false,
							'depth'          => 1,
						)
					);
					?>
				</nav>

				<div class="head-right">
					<form id="des7-site-search" class="head-search" action="<?php echo esc_url( $des7_review_url ); ?>" method="get">
						<label class="screen-reader-text" for="des7-search-key"><?php esc_html_e( 'Search reviews', 'h5game' ); ?></label>
						<input id="des7-search-key" type="search" name="key" value="<?php echo esc_attr( $des7_key ); ?>" placeholder="<?php esc_attr_e( 'Search reviews', 'h5game' ); ?>">
						<button class="head-search-submit" type="submit" aria-label="<?php esc_attr_e( 'Submit search', 'h5game' ); ?>">
							<span class="icon-search" aria-hidden="true"><span></span></span>
						</button>
					</form>

					<button class="head-search-btn" type="button" aria-controls="des7-site-search" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open search', 'h5game' ); ?>">
						<span class="icon-search" aria-hidden="true"><span></span></span>
					</button>
					<button class="head-btn" type="button" aria-controls="site-navigation" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open menu', 'h5game' ); ?>">
						<span class="icon-menu" aria-hidden="true"><span></span></span>
					</button>
				</div>
			</div>
		</div>
	</header>
	<main class="site-body">
