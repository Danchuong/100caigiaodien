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

$review_archive_url = home_url( '/reviews/' );
$search_key         = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
$has_primary_menu   = has_nav_menu( 'main-menu' );
$site_description   = get_bloginfo( 'description', 'display' );
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
			<div class="head-wall">
				<div class="head-topline">
					<div class="head-edition">
						<span><?php echo esc_html( date_i18n( get_option( 'date_format' ) ) ); ?></span>
						<?php if ( $site_description ) : ?>
							<span><?php echo esc_html( $site_description ); ?></span>
						<?php endif; ?>
					</div>
					<div class="head-actions">
						<div class="head-search">
							<div class="head-search-wrapper">
								<form action="<?php echo esc_url( $review_archive_url ); ?>" method="get" role="search">
									<input type="text" class="head-search-input" placeholder="Search reviews" aria-label="Search reviews" value="<?php echo esc_attr( $search_key ); ?>" name="key" />
									<button class="head-search-submit" type="submit" aria-label="<?php esc_attr_e( 'Submit search', 'h5game' ); ?>">
										<span class="icon-search"><span></span></span>
									</button>
								</form>
							</div>
						</div>
						<button class="btn head-search-btn" type="button" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open search', 'h5game' ); ?>">
							<span class="icon-search"><span></span></span>
						</button>
						<?php if ( $has_primary_menu ) : ?>
							<button class="btn head-btn" type="button" aria-expanded="false" aria-label="<?php esc_attr_e( 'Open menu', 'h5game' ); ?>">
								<span class="icon-menu"><span></span></span>
							</button>
						<?php endif; ?>
					</div>
				</div>
				<div class="head-logo">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
				</div>
				<?php if ( $has_primary_menu ) : ?>
					<div class="head-nav-row">
						<nav id="primary-menu" class="main-navigation head-menu" aria-label="<?php esc_attr_e( 'Primary Menu', 'h5game' ); ?>">
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'main-menu',
									'menu_id'        => 'main-menu',
									'menu_class'     => 'menu',
									'container'      => false,
									'fallback_cb'    => false,
								)
							);
							?>
						</nav>
					</div>
				<?php endif; ?>
			</div>
		</div>
	</header>
	<main class="site-body">
