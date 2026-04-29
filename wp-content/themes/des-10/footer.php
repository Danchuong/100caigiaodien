<?php
/**
 * The template for displaying the des-10 footer.
 *
 * @package h5game
 */

$des10_footer_score = function ( $post_id ) {
	$score_fields = array( 'graphics_and_sound', 'controls', 'gameplay', 'lasting_appeal' );
	$values       = array();

	if ( function_exists( 'get_field' ) ) {
		foreach ( $score_fields as $score_field ) {
			$value = get_field( $score_field, $post_id );

			if ( is_numeric( $value ) ) {
				$values[] = (float) $value;
			}
		}
	}

	if ( ! empty( $values ) ) {
		return min( 10, max( 1, round( array_sum( $values ) / count( $values ), 1 ) ) );
	}

	return round( 8 + ( ( $post_id % 18 ) / 10 ), 1 );
};
?>
</main>
	<footer class="review-footer">
		<div class="container">
			<div class="foot-wrapper">
				<div class="foot-brand">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="foot-logo">
						<?php echo esc_html( function_exists( 'get_field' ) && get_field( 'title', 'option' ) ? get_field( 'title', 'option' ) : get_bloginfo( 'name' ) ); ?>
					</a>
					<p><?php echo esc_html( function_exists( 'get_field' ) && get_field( 'description', 'option' ) ? wp_trim_words( get_field( 'description', 'option' ), 20 ) : get_bloginfo( 'description' ) ); ?></p>
				</div>

				<div class="foot-column foot-leaderboard">
					<div class="foot-title">Review Leaderboard</div>
					<ul class="foot-score-list">
						<?php
						$footer_review_query = new WP_Query(
							array(
								'post_type'           => 'review',
								'posts_per_page'      => 5,
								'post_status'         => 'publish',
								'ignore_sticky_posts' => true,
							)
						);

						if ( $footer_review_query->have_posts() ) :
							while ( $footer_review_query->have_posts() ) :
								$footer_review_query->the_post();
								?>
								<li>
									<a href="<?php the_permalink(); ?>">
										<span><?php the_title(); ?></span>
										<strong><?php echo esc_html( number_format( $des10_footer_score( get_the_ID() ), 1 ) ); ?></strong>
									</a>
								</li>
								<?php
							endwhile;
							wp_reset_postdata();
						endif;
						?>
					</ul>
				</div>

				<div class="foot-column">
					<div class="foot-title">Explore</div>
					<ul class="foot-link-list">
						<li><a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Reviews</a></li>
						<li><a href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">Games</a></li>
						<li><a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">Blog</a></li>
						<li><a href="<?php echo esc_url( home_url( '/reviews?key=mobile' ) ); ?>">Mobile Reviews</a></li>
					</ul>
				</div>

				<div class="foot-column">
					<div class="foot-title">Score Desk</div>
					<ul class="foot-link-list">
						<li><a href="<?php echo esc_url( home_url( '/reviews?key=pc' ) ); ?>">PC Scores</a></li>
						<li><a href="<?php echo esc_url( home_url( '/reviews?key=console' ) ); ?>">Console Scores</a></li>
						<li><a href="<?php echo esc_url( home_url( '/reviews?key=android' ) ); ?>">Android Picks</a></li>
						<li><a href="<?php echo esc_url( home_url( '/reviews?key=ios' ) ); ?>">iOS Picks</a></li>
					</ul>
				</div>
			</div>

			<div class="foot-bottom">
				<span><?php echo esc_html( function_exists( 'get_field' ) && get_field( 'copyright', 'option' ) ? get_field( 'copyright', 'option' ) : 'Copyright ' . get_bloginfo( 'name' ) ); ?></span>
				<a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Review archive</a>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
<script>
	document.addEventListener("click", function (e) {
		const menuBtn = document.querySelector(".head-btn");
		const menu = document.querySelector(".head-menu");
		const searchBtn = document.querySelector(".head-search-btn");
		const search = document.querySelector(".head-search");

		if (menuBtn && menu) {
			if (menuBtn.contains(e.target)) {
				menu.classList.toggle("active");
				if (search) {
					search.classList.remove("active");
				}
			} else if (!menu.contains(e.target)) {
				menu.classList.remove("active");
			}
		}

		if (searchBtn && search) {
			if (searchBtn.contains(e.target)) {
				search.classList.toggle("active");
				if (menu) {
					menu.classList.remove("active");
				}
			} else if (!search.contains(e.target)) {
				search.classList.remove("active");
			}
		}
	});
</script>
</body>
</html>
