<?php
/**
 * The template for displaying the footer
 *
 * @package h5game
 */

$footer_title       = function_exists( 'get_field' ) && get_field( 'title', 'option' ) ? get_field( 'title', 'option' ) : get_bloginfo( 'name' );
$footer_description = function_exists( 'get_field' ) && get_field( 'description', 'option' ) ? get_field( 'description', 'option' ) : get_bloginfo( 'description' );
$footer_copyright   = function_exists( 'get_field' ) && get_field( 'copyright', 'option' ) ? get_field( 'copyright', 'option' ) : '&copy; ' . gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' );

$footer_reviews = new WP_Query(
	array(
		'post_type'           => 'review',
		'posts_per_page'      => 4,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);
?>
</main>
	<footer class="newspaper-footer">
		<div class="container">
			<div class="foot-wrapper">
				<div class="foot-brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="foot-logo"><?php echo esc_html( $footer_title ); ?></a>
					<p><?php echo esc_html( $footer_description ); ?></p>
					<div class="foot-copy"><?php echo wp_kses_post( $footer_copyright ); ?></div>
				</div>

				<nav class="foot-column" aria-label="Explore">
					<h2>Explore</h2>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">Blogs</a></li>
						<li><a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Reviews</a></li>
						<li><a href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">HTML5 Games</a></li>
					</ul>
				</nav>

				<nav class="foot-column" aria-label="Categories">
					<h2>Categories</h2>
					<ul>
						<li><a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Review Desk</a></li>
						<li><a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">Gaming News</a></li>
						<li><a href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">Game Index</a></li>
					</ul>
				</nav>

				<div class="foot-column foot-latest">
					<h2>Latest Reviews</h2>
					<ul>
						<?php if ( $footer_reviews->have_posts() ) : ?>
							<?php foreach ( $footer_reviews->posts as $post_item ) : ?>
								<li>
									<a href="<?php echo esc_url( get_permalink( $post_item ) ); ?>">
										<?php echo esc_html( get_the_title( $post_item ) ); ?>
									</a>
								</li>
							<?php endforeach; ?>
						<?php else : ?>
							<li><a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Browse all reviews</a></li>
						<?php endif; ?>
					</ul>
				</div>
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

		if (menuButton && menu) {
			if (menuButton.contains(event.target)) {
				menu.classList.toggle("active");
				if (search) {
					search.classList.remove("active");
				}
			} else if (!menu.contains(event.target)) {
				menu.classList.remove("active");
			}
		}

		if (searchButton && search) {
			if (searchButton.contains(event.target)) {
				search.classList.toggle("active");
				if (menu) {
					menu.classList.remove("active");
				}
			} else if (!search.contains(event.target)) {
				search.classList.remove("active");
			}
		}
	});
</script>
</body>
</html>
