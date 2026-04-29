<?php
/**
 * The header for des-10.
 *
 * @package h5game
 */

$des10_search_key = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
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
	<header class="score-head">
		<div class="container">
			<div class="head-wrapper">
				<div class="head-left">
					<div class="head-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
					<a class="head-kicker" href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Review Hub</a>
				</div>

				<div class="head-center">
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
									<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
									<li><a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Reviews</a></li>
									<li><a href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">Games</a></li>
									<li><a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">Blog</a></li>
								</ul>
							</div>
							<?php
						}
						?>
					</nav>
				</div>

				<div class="head-right">
					<div class="head-search input-group">
						<div class="head-search-wrapper">
							<form action="<?php echo esc_url( home_url( '/reviews' ) ); ?>" method="get">
								<input type="text" class="form-control" placeholder="Search reviews" aria-label="Search reviews" value="<?php echo esc_attr( $des10_search_key ); ?>" name="key" />
								<button class="head-search-submit" type="submit" aria-label="Submit search">
									<span class="icon-search"><span></span></span>
								</button>
							</form>
						</div>
					</div>
					<a class="head-score-link" href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Scores</a>
					<button class="btn head-search-btn" type="button" aria-label="Open search">
						<span class="icon-search"><span></span></span>
					</button>
					<button class="btn head-btn" type="button" aria-label="Open menu">
						<span class="icon-menu"><span></span></span>
					</button>
				</div>
			</div>

			<div class="head-score-strip" aria-label="Review shortcuts">
				<a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Latest Reviews</a>
				<a href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">Game Library</a>
				<a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">Guides</a>
				<a href="<?php echo esc_url( home_url( '/reviews?key=mobile' ) ); ?>">Mobile Scores</a>
				<a href="<?php echo esc_url( home_url( '/reviews?key=pc' ) ); ?>">PC Picks</a>
			</div>
		</div>
	</header>
	<main class="site-body">
