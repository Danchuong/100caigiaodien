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
	<header class="site-header-newspaper">
		<div class="container">
			<div class="head-wrapper">
				<div class="head-left">
					<nav id="primary-menu" class="main-navigation" aria-label="<?php esc_attr_e( 'Primary Menu', 'h5game' ); ?>">
						<?php
						if ( has_nav_menu( 'main-menu' ) ) {
							wp_nav_menu(
								array(
									'theme_location'  => 'main-menu',
									'menu_id'         => 'main-menu',
									'container_class' => 'head-menu',
								)
							);
						} else {
							?>
							<div class="head-menu">
								<ul id="main-menu" class="menu">
									<li><a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>">Blogs</a></li>
									<li><a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Reviews</a></li>
									<li><a href="<?php echo esc_url( home_url( '/html5-games/' ) ); ?>">Games</a></li>
								</ul>
							</div>
							<?php
						}
						?>
					</nav>
				</div>
				<div class="head-center">
					<div class="head-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
				</div>
				<div class="head-right">
					<div class="head-search input-group">
						<div class="head-search-wrapper">
							<form action="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">
								<?php $key = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : ''; ?>
								<input type="text" class="form-control" placeholder="Search reviews" aria-label="Search reviews" value="<?php echo esc_attr( $key ); ?>" name="key" />
								<button class="head-search-submit" type="submit" aria-label="<?php esc_attr_e( 'Submit search', 'h5game' ); ?>">
									<span class="icon-search"><span></span></span>
								</button>
							</form>
						</div>
					</div>
					<button class="btn head-search-btn" type="button" aria-label="<?php esc_attr_e( 'Open search', 'h5game' ); ?>">
						<span class="icon-search"><span></span></span>
					</button>
					<button class="btn head-btn" type="button" aria-label="<?php esc_attr_e( 'Open menu', 'h5game' ); ?>">
						<span class="icon-menu"><span></span></span>
					</button>
				</div>
			</div>
		</div>
	</header>
	<main class="site-body">
