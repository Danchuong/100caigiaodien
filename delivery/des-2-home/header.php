<?php
/**
 * The header for the des-2 theme.
 *
 * @package h5game
 */

$review_archive_url = home_url( '/reviews/' );
$blog_archive_url   = home_url( '/blogs/' );
$search_key         = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
$latest_blog_posts  = get_posts(
	array(
		'post_type'           => 'blog',
		'posts_per_page'      => 2,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$des2_nav_title_filter = static function ( $items ) {
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
	<header class="site-masthead">
		<div class="head-kicker">
			<div class="container">
				<div class="head-kicker-wrapper">
					<span class="head-kicker-label"><?php esc_html_e( 'Latest Blogs', 'h5game' ); ?></span>
					<div class="head-kicker-feed">
						<?php if ( ! empty( $latest_blog_posts ) ) : ?>
							<?php foreach ( $latest_blog_posts as $latest_blog_post ) : ?>
								<a class="head-kicker-link" href="<?php echo esc_url( get_permalink( $latest_blog_post ) ); ?>">
									<?php echo esc_html( get_the_title( $latest_blog_post ) ); ?>
								</a>
							<?php endforeach; ?>
						<?php else : ?>
							<a class="head-kicker-link" href="<?php echo esc_url( $blog_archive_url ); ?>"><?php esc_html_e( 'Open blog archive', 'h5game' ); ?></a>
						<?php endif; ?>
					</div>
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
						add_filter( 'wp_nav_menu_objects', $des2_nav_title_filter );
						wp_nav_menu(
							array(
								'theme_location'  => 'main-menu',
								'menu_id'         => 'main-menu',
								'container_class' => 'head-menu',
							)
						);
						remove_filter( 'wp_nav_menu_objects', $des2_nav_title_filter );
						?>
					</nav>
				</div>
				<div class="head-right">
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
