<?php
/**
 * The global footer for the des-7 editorial stream design.
 *
 * @package h5game
 */

$des7_review_url = home_url( '/reviews/' );
$des7_blog_url   = home_url( '/blogs/' );
$des7_game_url   = home_url( '/html5-games/' );
$des7_key        = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
$des7_desc       = function_exists( 'get_field' ) && get_field( 'description', 'option' ) ? get_field( 'description', 'option' ) : __( 'Games, reviews, and editorial picks for quick browsing.', 'h5game' );
?>
</main>
	<footer class="des7-footer">
		<div class="des7-foot-inner">
			<div class="foot-wrapper">
				<section class="foot-masthead" aria-label="<?php esc_attr_e( 'Site archive search', 'h5game' ); ?>">
					<div class="foot-brand">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="foot-logo"><?php echo esc_html( get_bloginfo( 'name' ) ); ?></a>
						<p><?php echo esc_html( $des7_desc ); ?></p>
					</div>
					<form class="foot-search-form" action="<?php echo esc_url( $des7_review_url ); ?>" method="get">
						<label class="screen-reader-text" for="des7-footer-key"><?php esc_html_e( 'Search reviews', 'h5game' ); ?></label>
						<input id="des7-footer-key" type="search" name="key" value="<?php echo esc_attr( $des7_key ); ?>" placeholder="<?php esc_attr_e( 'Search reviews', 'h5game' ); ?>">
						<button type="submit"><?php esc_html_e( 'Search', 'h5game' ); ?></button>
					</form>
				</section>

				<div class="foot-columns">
					<nav class="foot-column foot-column-nav" aria-label="<?php esc_attr_e( 'Footer navigation', 'h5game' ); ?>">
						<h3><?php esc_html_e( 'Explore', 'h5game' ); ?></h3>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'h5game' ); ?></a></li>
							<li><a href="<?php echo esc_url( $des7_blog_url ); ?>"><?php esc_html_e( 'Blogs', 'h5game' ); ?></a></li>
							<li><a href="<?php echo esc_url( $des7_review_url ); ?>"><?php esc_html_e( 'Reviews', 'h5game' ); ?></a></li>
							<li><a href="<?php echo esc_url( $des7_game_url ); ?>"><?php esc_html_e( 'Games', 'h5game' ); ?></a></li>
						</ul>
					</nav>

					<div class="foot-column foot-column-stream">
						<h3><?php esc_html_e( 'Latest Reviews', 'h5game' ); ?></h3>
						<ul>
							<?php
							$des7_footer_reviews = new WP_Query(
								array(
									'post_type'           => 'review',
									'posts_per_page'      => 4,
									'post_status'         => 'publish',
									'ignore_sticky_posts' => true,
								)
							);

							if ( $des7_footer_reviews->have_posts() ) :
								while ( $des7_footer_reviews->have_posts() ) :
									$des7_footer_reviews->the_post();
									?>
									<li>
										<a href="<?php echo esc_url( get_permalink() ); ?>">
											<span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
											<?php echo esc_html( get_the_title() ); ?>
										</a>
									</li>
									<?php
								endwhile;
								wp_reset_postdata();
							endif;
							?>
						</ul>
					</div>

					<div class="foot-column foot-column-stream">
						<h3><?php esc_html_e( 'Fresh Blogs', 'h5game' ); ?></h3>
						<ul>
							<?php
							$des7_footer_blogs = new WP_Query(
								array(
									'post_type'           => 'blog',
									'posts_per_page'      => 3,
									'post_status'         => 'publish',
									'ignore_sticky_posts' => true,
								)
							);

							if ( $des7_footer_blogs->have_posts() ) :
								while ( $des7_footer_blogs->have_posts() ) :
									$des7_footer_blogs->the_post();
									?>
									<li>
										<a href="<?php echo esc_url( get_permalink() ); ?>">
											<span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
											<?php echo esc_html( get_the_title() ); ?>
										</a>
									</li>
									<?php
								endwhile;
								wp_reset_postdata();
							endif;
							?>
						</ul>
					</div>
				</div>

				<div class="foot-bottom">
					<span><?php echo esc_html( function_exists( 'get_field' ) && get_field( 'copyright', 'option' ) ? get_field( 'copyright', 'option' ) : sprintf( 'Copyright %s', gmdate( 'Y' ) ) ); ?></span>
					<a href="<?php echo esc_url( $des7_review_url ); ?>"><?php esc_html_e( 'Review archive', 'h5game' ); ?></a>
				</div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
<script>
	document.addEventListener("DOMContentLoaded", function () {
		const header = document.querySelector(".des7-header");

		if (!header) {
			return;
		}

		const menuBtn = header.querySelector(".head-btn");
		const menu = header.querySelector(".head-menu");
		const searchBtn = header.querySelector(".head-search-btn");
		const search = header.querySelector(".head-search");

		const closeMenu = function () {
			if (menu) {
				menu.classList.remove("active");
			}
			if (menuBtn) {
				menuBtn.setAttribute("aria-expanded", "false");
			}
		};

		const closeSearch = function () {
			if (search) {
				search.classList.remove("active");
			}
			if (searchBtn) {
				searchBtn.setAttribute("aria-expanded", "false");
			}
		};

		if (menuBtn && menu) {
			menuBtn.addEventListener("click", function (event) {
				event.stopPropagation();
				const isOpen = menu.classList.toggle("active");
				menuBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");
				closeSearch();
			});
		}

		if (searchBtn && search) {
			searchBtn.addEventListener("click", function (event) {
				event.stopPropagation();
				const isOpen = search.classList.toggle("active");
				searchBtn.setAttribute("aria-expanded", isOpen ? "true" : "false");
				closeMenu();
			});
		}

		document.addEventListener("click", function (event) {
			if (!header.contains(event.target)) {
				closeMenu();
				closeSearch();
			}
		});

		document.addEventListener("keydown", function (event) {
			if ("Escape" === event.key) {
				closeMenu();
				closeSearch();
			}
		});
	});
</script>
</body>
</html>
