<?php
/**
 * The header for the des-7 split editor picks design.
 *
 * @package h5game
 */

$des7_review_url = home_url( '/reviews/' );
$des7_blog_url   = home_url( '/blogs/' );
$des7_game_url   = home_url( '/html5-games/' );
$des7_key        = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
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
	<header class="des7-header">
		<div class="container">
			<div class="head-wrapper">
				<div class="head-left">
					<nav class="head-nav head-nav-left" aria-label="<?php esc_attr_e( 'Primary left navigation', 'h5game' ); ?>">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
						<a href="<?php echo esc_url( $des7_review_url ); ?>">Reviews</a>
					</nav>
				</div>

				<div class="head-center">
					<div class="head-logo">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
					</div>
				</div>

				<div class="head-right">
					<nav class="head-nav head-nav-right" aria-label="<?php esc_attr_e( 'Primary right navigation', 'h5game' ); ?>">
						<a href="<?php echo esc_url( $des7_game_url ); ?>">Games</a>
						<a href="<?php echo esc_url( $des7_blog_url ); ?>">Blog</a>
					</nav>
					<button class="btn head-search-btn" type="button" aria-label="<?php esc_attr_e( 'Open search', 'h5game' ); ?>">
						<span class="icon-search"><span></span></span>
					</button>
					<button class="btn head-btn" type="button" aria-label="<?php esc_attr_e( 'Open menu', 'h5game' ); ?>">
						<span class="icon-menu"><span></span></span>
					</button>
				</div>

				<div class="head-search input-group" id="des7-site-search">
					<div class="head-search-wrapper">
						<form action="<?php echo esc_url( $des7_review_url ); ?>" method="get">
							<input type="text" class="form-control" placeholder="Search reviews and games" aria-label="<?php esc_attr_e( 'Search reviews and games', 'h5game' ); ?>" value="<?php echo esc_attr( $des7_key ); ?>" name="key" />
							<button class="head-search-submit" type="submit" aria-label="<?php esc_attr_e( 'Submit search', 'h5game' ); ?>">
								<span class="icon-search"><span></span></span>
							</button>
						</form>
					</div>
				</div>

				<nav id="primary-menu" class="main-navigation" aria-label="<?php esc_attr_e( 'Mobile navigation', 'h5game' ); ?>">
					<div class="head-menu">
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
							<li><a href="<?php echo esc_url( $des7_review_url ); ?>">Reviews</a></li>
							<li><a href="<?php echo esc_url( $des7_game_url ); ?>">Games</a></li>
							<li><a href="<?php echo esc_url( $des7_blog_url ); ?>">Blog</a></li>
						</ul>
					</div>
				</nav>
			</div>
		</div>
	</header>
	<main class="site-body">
