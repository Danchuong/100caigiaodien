<?php
/**
 * The template for displaying the footer
 *
 * @package h5game
 */

$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );
$blog_archive_url   = home_url( '/blogs/' );

$footer_title       = function_exists( 'get_field' ) ? get_field( 'title', 'option' ) : '';
$footer_copyright   = function_exists( 'get_field' ) ? get_field( 'copyright', 'option' ) : '';
$footer_description = function_exists( 'get_field' ) ? get_field( 'description', 'option' ) : '';
$search_key         = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';

$footer_title = $footer_title ? $footer_title : get_bloginfo( 'name' );

$latest_query = new WP_Query(
	array(
		'post_type'           => array( 'blog', 'review', 'post' ),
		'posts_per_page'      => 5,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);
?>
	</main>
	<footer class="site-footer des6-discovery-footer">
		<div class="des6-foot-shell">
			<div class="foot-wrapper">
				<div class="foot-brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php echo esc_html( $footer_title ); ?></a>
					<?php if ( $footer_description ) : ?>
						<p><?php echo esc_html( $footer_description ); ?></p>
					<?php else : ?>
						<p>Image-first game coverage, reviews, and playable picks collected for quick browsing.</p>
					<?php endif; ?>
				</div>

				<div class="foot-links" aria-label="Primary footer navigation">
					<div class="foot-title">Browse</div>
					<ul>
						<li><a href="<?php echo esc_url( $games_archive_url ); ?>">Games</a></li>
						<li><a href="<?php echo esc_url( $review_archive_url ); ?>">Reviews</a></li>
						<li><a href="<?php echo esc_url( $blog_archive_url ); ?>">Blogs</a></li>
					</ul>
				</div>

				<div class="foot-latest">
					<div class="foot-title">Fresh discoveries</div>
					<?php if ( $latest_query->have_posts() ) : ?>
						<div class="foot-latest-list">
							<?php
							while ( $latest_query->have_posts() ) :
								$latest_query->the_post();
								?>
								<a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
							<?php endwhile; ?>
						</div>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>

				<div class="foot-search">
					<div class="foot-title">Find a review</div>
					<form class="foot-search-form" action="<?php echo esc_url( $review_archive_url ); ?>" method="get" role="search">
						<label class="screen-reader-text" for="des6-footer-search">Search reviews</label>
						<input id="des6-footer-search" type="search" name="key" value="<?php echo esc_attr( $search_key ); ?>" placeholder="Search reviews" />
						<button type="submit">Search</button>
					</form>
				</div>
			</div>

			<div class="foot-bottom">
				<?php if ( $footer_copyright ) : ?>
					<?php echo esc_html( $footer_copyright ); ?>
				<?php else : ?>
					<?php echo esc_html( 'Copyright ' . gmdate( 'Y' ) . ' ' . $footer_title . '. All rights reserved.' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</footer>
	<?php wp_footer(); ?>
	<script>
		document.addEventListener("DOMContentLoaded", function () {
			var header = document.querySelector(".des6-discovery-header");

			if (!header) {
				return;
			}

			var searchButton = header.querySelector(".head-search-btn");
			var searchPanel = header.querySelector(".head-center");
			var menuButton = header.querySelector(".head-btn");
			var menuPanel = header.querySelector(".head-menu");

			function setExpanded(button, expanded) {
				if (button) {
					button.setAttribute("aria-expanded", expanded ? "true" : "false");
				}
			}

			function closePanels() {
				if (searchPanel) {
					searchPanel.classList.remove("active");
				}

				if (menuPanel) {
					menuPanel.classList.remove("active");
				}

				setExpanded(searchButton, false);
				setExpanded(menuButton, false);
			}

			if (searchButton && searchPanel) {
				searchButton.addEventListener("click", function (event) {
					event.stopPropagation();
					var shouldOpen = !searchPanel.classList.contains("active");
					closePanels();
					searchPanel.classList.toggle("active", shouldOpen);
					setExpanded(searchButton, shouldOpen);
				});
			}

			if (menuButton && menuPanel) {
				menuButton.addEventListener("click", function (event) {
					event.stopPropagation();
					var shouldOpen = !menuPanel.classList.contains("active");
					closePanels();
					menuPanel.classList.toggle("active", shouldOpen);
					setExpanded(menuButton, shouldOpen);
				});
			}

			document.addEventListener("click", function (event) {
				if (!header.contains(event.target)) {
					closePanels();
				}
			});

			document.addEventListener("keydown", function (event) {
				if ("Escape" === event.key) {
					closePanels();
				}
			});
		});
	</script>
</body>
</html>
