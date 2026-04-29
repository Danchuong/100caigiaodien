<?php
/**
 * The footer for the des-7 newsletter layout.
 *
 * @package h5game
 */

$des7_review_url = home_url( '/reviews/' );
$des7_blog_url   = home_url( '/blogs/' );
$des7_game_url   = home_url( '/html5-games/' );
?>
</main>
	<footer class="des7-footer">
		<div class="container">
			<div class="foot-wrapper">
				<div class="foot-newsletter">
					<div>
						<span class="foot-kicker">Weekly Roundup</span>
						<h2>Editor picks, review notes, and new games in one place.</h2>
					</div>
					<form class="foot-newsletter-form" action="<?php echo esc_url( $des7_review_url ); ?>" method="get">
						<input type="text" name="key" placeholder="Search reviews" aria-label="<?php esc_attr_e( 'Search reviews', 'h5game' ); ?>">
						<button type="submit">Search</button>
					</form>
				</div>

				<div class="foot-columns">
					<div class="foot-brand">
						<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="foot-logo"><?php bloginfo( 'name' ); ?></a>
						<p><?php echo esc_html( function_exists( 'get_field' ) && get_field( 'description', 'option' ) ? get_field( 'description', 'option' ) : 'Games, reviews, and editorial picks for quick browsing.' ); ?></p>
					</div>

					<div class="foot-column">
						<h3>Explore</h3>
						<ul>
							<li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
							<li><a href="<?php echo esc_url( $des7_blog_url ); ?>">Blog</a></li>
							<li><a href="<?php echo esc_url( $des7_review_url ); ?>">Reviews</a></li>
							<li><a href="<?php echo esc_url( $des7_game_url ); ?>">Games</a></li>
						</ul>
					</div>

					<div class="foot-column">
						<h3>Latest Reviews</h3>
						<ul>
							<?php
							$review_query = new WP_Query(
								array(
									'post_type'           => 'review',
									'posts_per_page'      => 4,
									'post_status'         => 'publish',
									'ignore_sticky_posts' => true,
								)
							);
							if ( $review_query->have_posts() ) :
								while ( $review_query->have_posts() ) :
									$review_query->the_post();
									?>
									<li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></li>
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
					<a href="<?php echo esc_url( $des7_review_url ); ?>">Search reviews</a>
				</div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
<script>
	document.addEventListener("click", function (event) {
		const menuBtn = document.querySelector(".head-btn");
		const menu = document.querySelector(".head-menu");
		const searchBtn = document.querySelector(".head-search-btn");
		const search = document.querySelector(".head-search");

		if (menuBtn && menu && menuBtn.contains(event.target)) {
			menu.classList.toggle("active");
			if (search) {
				search.classList.remove("active");
			}
			return;
		}

		if (searchBtn && search && searchBtn.contains(event.target)) {
			search.classList.toggle("active");
			if (menu) {
				menu.classList.remove("active");
			}
			return;
		}

		if (menu && !menu.contains(event.target)) {
			menu.classList.remove("active");
		}

		if (search && !search.contains(event.target)) {
			search.classList.remove("active");
		}
	});
</script>
</body>
</html>
