<?php
/**
 * The header for our theme
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
<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
?>
	<header class="newspaper-header">
		<div class="container">
			<div class="head-wrapper">
				<div class="head-left">
					<a class="head-edition-link" href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">Today Edition</a>
				</div>
				<div class="head-center">
					<div class="head-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
					<p class="head-tagline">Games, reviews, updates</p>
				</div>
				<div class="head-right">
					<div class="head-search input-group">
						<div class="head-search-wrapper">
							<form class="head-search-form" action="<?php echo esc_url( home_url( '/reviews' ) ); ?>" method="get">
								<input type="text" class="form-control" placeholder="Search reviews" aria-label="Search reviews" value="<?php echo esc_attr( $search_key ); ?>" name="key" />
								<button type="submit">Search</button>
							</form>
						</div>
					</div>
					<button class="btn head-search-btn" type="button" aria-label="Open search">
						<div class="icon-search"><div></div></div>
					</button>
					<button class="btn head-btn" type="button" aria-label="Open menu">
						<div class="icon-menu"><div></div></div>
					</button>
				</div>
			</div>
			<div class="head-directory-bar">
				<nav id="primary-menu" class="main-navigation" aria-label="Primary navigation">
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
								<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
								<li><a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">Blogs</a></li>
								<li><a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Reviews</a></li>
								<li><a href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">Games</a></li>
							</ul>
						</div>
						<?php
					}
					?>
				</nav>
				<div class="head-quick-links" aria-label="Quick links">
					<a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Reviews</a>
					<a href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">Games</a>
					<a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">Blogs</a>
				</div>
			</div>
		</div>
	</header>
	<main class="site-body">
