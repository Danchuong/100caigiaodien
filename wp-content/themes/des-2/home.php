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

if ( ! function_exists( 'des2_post_label' ) ) {
	function des2_post_label( $post_id, $fallback ) {
		$tags = get_the_terms( $post_id, 'post_tag' );

		if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
			return $tags[0]->name;
		}

		return $fallback;
	}
}

$blog_posts    = des2_get_posts( 'blog', 12 );
$review_posts  = des2_get_posts( 'review', 5 );
$game_posts    = des2_get_posts( 'post', 5 );
$lead_post     = ! empty( $blog_posts ) ? $blog_posts[0] : null;
$trending_news = array_slice( $blog_posts, 1, 4 );
$desk_news     = array_slice( $blog_posts, 5, 6 );
$platforms     = array( 'PC', 'Console', 'Mobile', 'Switch', 'Browser' );
?>

<div class="lead-left-home">
	<section class="lead-news-section">
		<div class="container">
			<div class="lead-news-wrapper">
				<div class="lead-left">
					<div class="lead-section-kicker">Blog Front Page</div>
					<?php if ( $lead_post ) : ?>
						<a class="lead-story-card" href="<?php echo esc_url( get_permalink( $lead_post ) ); ?>">
							<div class="lead-story-media">
								<?php echo des2_post_image( $lead_post->ID, 'lead-story-media' ); ?>
							</div>
							<div class="lead-story-content">
								<span class="story-label"><?php echo esc_html( des2_post_label( $lead_post->ID, 'Blog' ) ); ?></span>
								<h1><?php echo esc_html( get_the_title( $lead_post ) ); ?></h1>
								<p><?php echo esc_html( wp_trim_words( get_the_excerpt( $lead_post ), 24 ) ); ?></p>
							</div>
						</a>
					<?php endif; ?>
				</div>
				<aside class="trending-rail" aria-label="<?php esc_attr_e( 'Trending stories', 'h5game' ); ?>">
					<div class="rail-head">
						<span>Trending</span>
						<a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">All blogs</a>
					</div>
					<div class="rail-list">
						<?php foreach ( $trending_news as $index => $rail_post ) : ?>
							<a class="rail-item" href="<?php echo esc_url( get_permalink( $rail_post ) ); ?>">
								<span class="rail-number"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
								<span class="rail-title"><?php echo esc_html( get_the_title( $rail_post ) ); ?></span>
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
					<span class="section-eyebrow">Blogs first</span>
					<h2 class="section-title">Latest Briefing</h2>
				</div>
				<a class="btn-viewmore" href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">View all</a>
			</div>
			<div class="news-mixed-grid">
				<?php foreach ( $desk_news as $index => $news_post ) : ?>
					<a class="<?php echo 0 === $index ? 'news-large-card' : 'news-small-card'; ?>" href="<?php echo esc_url( get_permalink( $news_post ) ); ?>">
						<div class="news-card-media">
							<?php echo des2_post_image( $news_post->ID, 'news-card-media' ); ?>
						</div>
						<div class="news-card-content">
							<span><?php echo esc_html( des2_post_label( $news_post->ID, 'Blog' ) ); ?></span>
							<h3><?php echo esc_html( get_the_title( $news_post ) ); ?></h3>
							<?php if ( 0 === $index ) : ?>
								<p><?php echo esc_html( wp_trim_words( get_the_excerpt( $news_post ), 18 ) ); ?></p>
							<?php endif; ?>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>

	<section class="review-score-section">
		<div class="container">
			<div class="section-head">
				<div>
					<span class="section-eyebrow">Critic desk</span>
					<h2 class="section-title">Review Scores</h2>
				</div>
				<a class="btn-viewmore" href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">View all</a>
			</div>
			<div class="review-score-grid">
				<?php foreach ( $review_posts as $index => $review_post ) : ?>
					<a class="review-score-card" href="<?php echo esc_url( get_permalink( $review_post ) ); ?>">
						<div class="score-badge">Review</div>
						<div>
							<span>Review</span>
							<h3><?php echo esc_html( get_the_title( $review_post ) ); ?></h3>
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
				<a class="btn-viewmore" href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">View all</a>
			</div>
			<div class="game-strip-list">
				<?php foreach ( $game_posts as $index => $game_post ) : ?>
					<a class="game-strip-card" href="<?php echo esc_url( get_permalink( $game_post ) ); ?>">
						<div class="game-strip-media">
							<?php echo des2_post_image( $game_post->ID, 'game-strip-media' ); ?>
						</div>
						<div class="game-strip-content">
							<span><?php echo esc_html( $platforms[ $index ] ?? 'Game' ); ?></span>
							<h3><?php echo esc_html( get_the_title( $game_post ) ); ?></h3>
						</div>
					</a>
				<?php endforeach; ?>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
