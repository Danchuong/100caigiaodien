<?php
/**
 * The template for displaying the des-2 footer.
 *
 * @package h5game
 */

$footer_news = get_posts(
	array(
		'post_type'           => 'blog',
		'posts_per_page'      => 4,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$footer_reviews = get_posts(
	array(
		'post_type'           => 'review',
		'posts_per_page'      => 4,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$footer_games = get_posts(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => 4,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$footer_title       = get_field( 'title', 'option' );
$footer_description = get_field( 'description', 'option' );
$footer_copyright   = get_field( 'copyright', 'option' );
?>
	</main>
	<footer class="site-footer latest-footer">
		<div class="container">
			<div class="foot-wrapper">
				<div class="foot-brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="foot-logo"><?php echo esc_html( $footer_title ); ?></a>
					<p class="foot-description"><?php echo wp_kses_post( $footer_description ); ?></p>
					<div class="foot-actions">
						<a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">News</a>
						<a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Reviews</a>
						<a href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">Games</a>
					</div>
				</div>
				<div class="foot-latest-grid">
					<div class="foot-column">
						<div class="foot-title">Latest News</div>
						<ul class="foot-link-list">
							<?php foreach ( $footer_news as $footer_post ) : ?>
								<li><a href="<?php echo esc_url( get_permalink( $footer_post ) ); ?>"><?php echo esc_html( get_the_title( $footer_post ) ); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="foot-column">
						<div class="foot-title">Fresh Reviews</div>
						<ul class="foot-link-list">
							<?php foreach ( $footer_reviews as $footer_post ) : ?>
								<li><a href="<?php echo esc_url( get_permalink( $footer_post ) ); ?>"><?php echo esc_html( get_the_title( $footer_post ) ); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
					<div class="foot-column">
						<div class="foot-title">Popular Games</div>
						<ul class="foot-link-list">
							<?php foreach ( $footer_games as $footer_post ) : ?>
								<li><a href="<?php echo esc_url( get_permalink( $footer_post ) ); ?>"><?php echo esc_html( get_the_title( $footer_post ) ); ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
			<div class="foot-bottom">
				<span><?php echo wp_kses_post( $footer_copyright ); ?></span>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	<script>
		document.addEventListener("click", function (event) {
			const menuButton = document.querySelector(".head-btn");
			const menu = document.querySelector(".head-menu");
			const searchButton = document.querySelector(".head-search-btn");
			const search = document.querySelector(".head-search");

			if (menuButton && menu && menuButton.contains(event.target)) {
				menu.classList.toggle("active");
				menuButton.setAttribute("aria-expanded", menu.classList.contains("active") ? "true" : "false");
				if (search) search.classList.remove("active");
				if (searchButton) searchButton.setAttribute("aria-expanded", "false");
				return;
			}

			if (searchButton && search && searchButton.contains(event.target)) {
				search.classList.toggle("active");
				searchButton.setAttribute("aria-expanded", search.classList.contains("active") ? "true" : "false");
				if (menu) menu.classList.remove("active");
				if (menuButton) menuButton.setAttribute("aria-expanded", "false");
				return;
			}

			if (menu && !menu.contains(event.target)) {
				menu.classList.remove("active");
				if (menuButton) menuButton.setAttribute("aria-expanded", "false");
			}

			if (search && !search.contains(event.target)) {
				search.classList.remove("active");
				if (searchButton) searchButton.setAttribute("aria-expanded", "false");
			}
		});
	</script>
</body>
</html>
