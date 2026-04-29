<?php
/**
 * The header for the des-2 theme.
 *
 * @package h5game
 */

$search_key = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
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
	<header class="site-masthead">
		<div class="head-kicker">
			<div class="container">
				<div class="head-kicker-wrapper">
					<a class="head-kicker-link" href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">Latest news</a>
					<a class="head-kicker-link" href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Reviews</a>
					<a class="head-kicker-link" href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">Games</a>
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
					<nav id="primary-menu" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary menu', 'h5game' ); ?>">
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
				</div>
				<div class="head-right">
					<div class="head-search input-group">
						<div class="head-search-wrapper">
							<form action="<?php echo esc_url( home_url( '/reviews' ) ); ?>" method="get">
								<input type="text" class="form-control" placeholder="Search reviews" aria-label="Search reviews" value="<?php echo esc_attr( $search_key ); ?>" name="key" />
								<button class="head-search-submit" type="submit" aria-label="<?php esc_attr_e( 'Submit search', 'h5game' ); ?>">
									<span class="icon-search"><span></span></span>
								</button>
							</form>
						</div>
					</div>
					<div class="head-actions">
						<button class="btn head-search-btn" type="button" aria-label="<?php esc_attr_e( 'Open search', 'h5game' ); ?>" aria-expanded="false">
							<span class="icon-search"><span></span></span>
						</button>
						<button class="btn head-btn" type="button" aria-label="<?php esc_attr_e( 'Open menu', 'h5game' ); ?>" aria-expanded="false">
							<span class="icon-menu"><span></span></span>
						</button>
					</div>
				</div>
			</div>
		</div>
	</header>
	<main class="site-body">
