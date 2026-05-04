<?php
/**
 * Template Name: Home
 *
 * @package h5game
 */

get_header();

if ( ! function_exists( 'des2_get_posts' ) ) {
	function des2_get_posts( $post_type, $posts_per_page, $exclude_ids = array() ) {
		return get_posts(
			array(
				'post_type'           => $post_type,
				'posts_per_page'      => $posts_per_page,
				'post_status'         => 'publish',
				'post__not_in'        => $exclude_ids,
				'orderby'             => 'rand',
				'order'               => 'DESC',
				'ignore_sticky_posts' => true,
			)
		);
	}
}

if ( ! function_exists( 'des2_post_image' ) ) {
	function des2_post_image( $post_id, $class_name ) {
		$image_url = get_the_post_thumbnail_url( $post_id, 'large' );

		if ( $image_url ) {
			return sprintf(
				'<img src="%1$s" alt="%2$s" loading="lazy" />',
				esc_url( $image_url ),
				esc_attr( get_the_title( $post_id ) )
			);
		}

		return sprintf(
			'<div class="%1$s-placeholder" aria-hidden="true"><span>%2$s</span></div>',
			esc_attr( $class_name ),
			esc_html( substr( get_the_title( $post_id ), 0, 1 ) )
		);
	}
}

if ( ! function_exists( 'des2_post_excerpt' ) ) {
	function des2_post_excerpt( $post_id, $word_count = 24 ) {
		$excerpt = get_the_excerpt( $post_id );

		if ( ! $excerpt ) {
			$excerpt = get_post_field( 'post_content', $post_id );
		}

		return wp_trim_words( wp_strip_all_tags( strip_shortcodes( $excerpt ) ), $word_count );
	}
}

if ( ! function_exists( 'des2_post_description' ) ) {
	function des2_post_description( $post_id, $class_name, $word_count = 14 ) {
		$description = des2_post_excerpt( $post_id, $word_count );

		if ( ! $description ) {
			return '';
		}

		return sprintf(
			'<p class="%1$s">%2$s</p>',
			esc_attr( $class_name ),
			esc_html( $description )
		);
	}
}

if ( ! function_exists( 'des2_post_label' ) ) {
	function des2_post_label( $post_id, $fallback ) {
		$tags = get_the_terms( $post_id, 'post_tag' );

		if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
			return $tags[0]->name;
		}

		return $fallback;
	}
}

if ( ! function_exists( 'des2_game_rating' ) ) {
	function des2_game_rating( $post_id ) {
		$ratings = array( 35, 40, 45, 50 );

		return $ratings[ absint( $post_id ) % count( $ratings ) ];
	}
}

if ( ! function_exists( 'des2_render_game_stars' ) ) {
	function des2_render_game_stars( $post_id ) {
		$rating       = des2_game_rating( $post_id );
		$rating_label = number_format_i18n( $rating / 10, 1 );
		$full_stars   = (int) floor( $rating / 10 );
		$has_half     = 5 === $rating % 10;
		ob_start();
		?>
		<div class="game-rating" aria-label="<?php echo esc_attr( sprintf( __( '%s out of 5 stars', 'h5game' ), $rating_label ) ); ?>">
			<span class="game-stars" aria-hidden="true">
				<?php for ( $star = 1; $star <= 5; $star++ ) : ?>
					<span class="game-star <?php echo esc_attr( $star <= $full_stars ? 'is-filled' : ( $has_half && $star === $full_stars + 1 ? 'is-half' : '' ) ); ?>">&#9733;</span>
				<?php endfor; ?>
			</span>
			<span class="game-rating-value"><?php echo esc_html( $rating_label ); ?></span>
		</div>
		<?php
		return ob_get_clean();
	}
}

$blog_posts         = des2_get_posts( 'blog', 20 );
$all_review_posts   = des2_get_posts( 'review', 12 );
$all_game_posts     = des2_get_posts( 'post', 12 );
$review_posts       = array_slice( $all_review_posts, 0, 8 );
$game_posts         = array_slice( $all_game_posts, 0, 8 );
$lead_post          = ! empty( $blog_posts ) ? $blog_posts[0] : null;
$trending_news      = array_slice( $blog_posts, 1, 5 );
$desk_news          = array_slice( $blog_posts, 6, 6 );
$pulse_news         = array_slice( $blog_posts, 12, 4 );
$pulse_review_posts = array_slice( $all_review_posts, 8, 4 );
$pulse_game_posts   = array_slice( $all_game_posts, 8, 4 );

if ( empty( $desk_news ) ) {
	$desk_news = array_slice( $blog_posts, 1, 6 );
}

if ( empty( $pulse_news ) ) {
	$pulse_news = array_slice( $blog_posts, 1, 4 );
}

if ( empty( $pulse_review_posts ) ) {
	$pulse_review_posts = array_slice( $all_review_posts, 0, 4 );
}

if ( empty( $pulse_game_posts ) ) {
	$pulse_game_posts = array_slice( $all_game_posts, 0, 4 );
}
?>

<div class="lead-left-home">
	<section class="lead-news-section">
		<div class="container">
			<div class="lead-news-wrapper">
				<div class="lead-left">
					<div class="lead-section-kicker">Featured Brief</div>
					<?php if ( $lead_post ) : ?>
						<a class="lead-story-card" href="<?php echo esc_url( get_permalink( $lead_post ) ); ?>">
							<div class="lead-story-media">
								<?php echo des2_post_image( $lead_post->ID, 'lead-story-media' ); ?>
							</div>
							<div class="lead-story-content">
								<span class="story-label"><?php echo esc_html( des2_post_label( $lead_post->ID, 'Blog' ) ); ?></span>
								<h1><?php echo esc_html( get_the_title( $lead_post ) ); ?></h1>
								<p><?php echo esc_html( des2_post_excerpt( $lead_post->ID, 24 ) ); ?></p>
								<span class="lead-story-date"><?php echo esc_html( get_the_date( 'M j', $lead_post ) ); ?></span>
							</div>
						</a>
					<?php endif; ?>
				</div>
				<aside class="trending-rail" aria-label="<?php esc_attr_e( 'Trending stories', 'h5game' ); ?>">
					<div class="rail-head">
						<span>Trending</span>
						<a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>">All blogs</a>
					</div>
					<div class="rail-list">
						<?php foreach ( $trending_news as $index => $rail_post ) : ?>
							<a class="rail-item" href="<?php echo esc_url( get_permalink( $rail_post ) ); ?>">
								<span class="rail-number"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
								<div class="rail-media"><?php echo des2_post_image( $rail_post->ID, 'rail-media' ); ?></div>
								<div class="rail-copy">
									<span class="rail-title"><?php echo esc_html( get_the_title( $rail_post ) ); ?></span>
									<?php echo des2_post_description( $rail_post->ID, 'rail-description', 10 ); ?>
								</div>
							</a>
						<?php endforeach; ?>
					</div>
				</aside>
			</div>
		</div>
	</section>

	<section class="news-desk-section">
		<div class="container">
			<div class="section-head news-desk-head">
				<div>
					<span class="section-eyebrow">Blogs</span>
					<h2 class="section-title">Briefing Board</h2>
				</div>
				<a class="btn-viewmore" href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>">View all</a>
			</div>
			<div class="news-mixed-grid">
				<?php foreach ( $desk_news as $index => $news_post ) : ?>
					<a class="news-small-card" href="<?php echo esc_url( get_permalink( $news_post ) ); ?>">
						<div class="news-card-media">
							<?php echo des2_post_image( $news_post->ID, 'news-card-media' ); ?>
						</div>
						<div class="news-card-content">
							<span><?php echo esc_html( des2_post_label( $news_post->ID, 'Blog' ) ); ?></span>
							<h3><?php echo esc_html( get_the_title( $news_post ) ); ?></h3>
							<?php echo des2_post_description( $news_post->ID, 'news-card-description', 16 ); ?>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="review-pick-section">
		<div class="container">
			<div class="section-head">
				<div>
					<span class="section-eyebrow">Reviews</span>
					<h2 class="section-title">Review Picks</h2>
				</div>
				<a class="btn-viewmore" href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">View all</a>
			</div>
			<div class="review-pick-grid">
				<?php foreach ( $review_posts as $index => $review_post ) : ?>
					<a class="review-pick-card" href="<?php echo esc_url( get_permalink( $review_post ) ); ?>">
						<div class="review-pick-media">
							<?php echo des2_post_image( $review_post->ID, 'review-pick-media' ); ?>
							<span class="review-pick-number"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
						</div>
						<div class="review-pick-content">
							<span><?php echo esc_html( des2_post_label( $review_post->ID, 'Review' ) ); ?></span>
							<h3><?php echo esc_html( get_the_title( $review_post ) ); ?></h3>
							<?php echo des2_post_description( $review_post->ID, 'review-pick-description', 12 ); ?>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="game-strip-section">
		<div class="container">
			<div class="section-head">
				<div>
					<span class="section-eyebrow">Play queue</span>
					<h2 class="section-title">Games To Watch</h2>
				</div>
				<a class="btn-viewmore" href="<?php echo esc_url( home_url( '/html5-games/' ) ); ?>">View all</a>
			</div>
			<div class="game-strip-list">
				<?php foreach ( $game_posts as $index => $game_post ) : ?>
					<a class="game-strip-card" href="<?php echo esc_url( get_permalink( $game_post ) ); ?>">
						<div class="game-strip-media">
							<?php echo des2_post_image( $game_post->ID, 'game-strip-media' ); ?>
						</div>
						<div class="game-strip-content">
							<span><?php echo esc_html( des2_post_label( $game_post->ID, 'Game' ) ); ?></span>
							<h3><?php echo esc_html( get_the_title( $game_post ) ); ?></h3>
							<?php echo des2_post_description( $game_post->ID, 'game-strip-description', 12 ); ?>
							<?php echo des2_render_game_stars( $game_post->ID ); ?>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="media-pulse-section">
		<div class="container">
			<div class="section-head">
				<div>
					<span class="section-eyebrow">Latest updates</span>
					<h2 class="section-title">More Game Coverage</h2>
				</div>
			</div>
			<div class="media-pulse-grid">
				<div class="pulse-column pulse-column-large">
					<div class="pulse-column-head">
						<span>Latest Blogs</span>
						<a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>">View all</a>
					</div>
					<div class="pulse-list">
						<?php foreach ( $pulse_news as $pulse_post ) : ?>
							<a class="pulse-story-card" href="<?php echo esc_url( get_permalink( $pulse_post ) ); ?>">
								<div class="pulse-media">
									<?php echo des2_post_image( $pulse_post->ID, 'pulse-media' ); ?>
								</div>
								<div class="pulse-content">
									<span><?php echo esc_html( get_the_date( 'M j', $pulse_post ) ); ?></span>
									<h3><?php echo esc_html( get_the_title( $pulse_post ) ); ?></h3>
									<?php echo des2_post_description( $pulse_post->ID, 'pulse-description', 13 ); ?>
								</div>
							</a>
						<?php endforeach; ?>
					</div>
				</div>

				<div class="pulse-column">
					<div class="pulse-column-head">
						<span>Review Watch</span>
						<a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">View all</a>
					</div>
					<div class="pulse-list">
						<?php foreach ( $pulse_review_posts as $pulse_post ) : ?>
							<a class="pulse-row-card" href="<?php echo esc_url( get_permalink( $pulse_post ) ); ?>">
								<div class="pulse-media">
									<?php echo des2_post_image( $pulse_post->ID, 'pulse-media' ); ?>
								</div>
								<div class="pulse-content">
									<span><?php echo esc_html( des2_post_label( $pulse_post->ID, 'Review' ) ); ?></span>
									<h3><?php echo esc_html( get_the_title( $pulse_post ) ); ?></h3>
									<?php echo des2_post_description( $pulse_post->ID, 'pulse-description', 10 ); ?>
								</div>
							</a>
						<?php endforeach; ?>
					</div>
				</div>

				<div class="pulse-column">
					<div class="pulse-column-head">
						<span>Game Queue</span>
						<a href="<?php echo esc_url( home_url( '/html5-games/' ) ); ?>">View all</a>
					</div>
					<div class="pulse-list">
						<?php foreach ( $pulse_game_posts as $pulse_post ) : ?>
							<a class="pulse-row-card" href="<?php echo esc_url( get_permalink( $pulse_post ) ); ?>">
								<div class="pulse-media">
									<?php echo des2_post_image( $pulse_post->ID, 'pulse-media' ); ?>
								</div>
								<div class="pulse-content">
									<span><?php echo esc_html( des2_post_label( $pulse_post->ID, 'Game' ) ); ?></span>
									<h3><?php echo esc_html( get_the_title( $pulse_post ) ); ?></h3>
									<?php echo des2_post_description( $pulse_post->ID, 'pulse-description', 10 ); ?>
									<?php echo des2_render_game_stars( $pulse_post->ID ); ?>
								</div>
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
