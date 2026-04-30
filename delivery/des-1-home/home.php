<?php
/**
 * Template Name: Home
 */
get_header();

$fallback_img       = get_stylesheet_directory_uri() . '/images/des-1-generated-hero.png';
$blog_archive_url   = home_url( '/blogs/' );
$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );

$latest_blog_url   = function_exists( 'get_field' ) ? get_field( 'latest_blog' ) : '';
$latest_review_url = function_exists( 'get_field' ) ? get_field( 'latest_review' ) : '';
$popular_games_url = function_exists( 'get_field' ) ? get_field( 'popular_games' ) : '';

$latest_blog_url   = is_string( $latest_blog_url ) && $latest_blog_url ? $latest_blog_url : $blog_archive_url;
$latest_review_url = is_string( $latest_review_url ) && $latest_review_url ? $latest_review_url : $review_archive_url;
$popular_games_url = is_string( $popular_games_url ) && $popular_games_url ? $popular_games_url : $games_archive_url;

$des1_image_url = static function ( $post_id, $size = 'large' ) use ( $fallback_img ) {
	$image_url = get_the_post_thumbnail_url( $post_id, $size );
	return $image_url ? $image_url : $fallback_img;
};

$des1_type_label = static function ( $post_id ) {
	$post_type = get_post_type( $post_id );

	if ( 'post' === $post_type ) {
		return 'Game';
	}

	if ( 'review' === $post_type ) {
		return 'Review';
	}

	if ( 'blog' === $post_type ) {
		return 'Blog';
	}

	$post_type_object = get_post_type_object( $post_type );
	return $post_type_object ? $post_type_object->labels->singular_name : 'Story';
};

$des1_excerpt = static function ( $post_id, $words = 20 ) {
	return wp_trim_words( get_the_excerpt( $post_id ), $words, '...' );
};

$des1_review_badge = static function ( $post_id ) {
	if ( function_exists( 'get_field' ) ) {
		$rating = get_field( 'rating', $post_id );

		if ( $rating ) {
			return $rating;
		}
	}

	return 'Review';
};

$lead_posts = get_posts(
	array(
		'post_type'           => array( 'review', 'post', 'blog' ),
		'posts_per_page'      => 1,
		'orderby'             => 'date',
		'order'               => 'DESC',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$lead_post = ! empty( $lead_posts ) ? $lead_posts[0] : null;
$lead_id   = $lead_post ? $lead_post->ID : 0;
$exclude   = $lead_id ? array( $lead_id ) : array();

$review_posts = get_posts(
	array(
		'post_type'           => 'review',
		'posts_per_page'      => 5,
		'post__not_in'        => $exclude,
		'orderby'             => 'date',
		'order'               => 'DESC',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$game_posts = get_posts(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => 5,
		'post__not_in'        => $exclude,
		'orderby'             => 'date',
		'order'               => 'DESC',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$blog_posts = get_posts(
	array(
		'post_type'           => 'blog',
		'posts_per_page'      => 3,
		'post__not_in'        => $exclude,
		'orderby'             => 'date',
		'order'               => 'DESC',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);
?>
<div class="home-review-desk">
	<section class="desk-lead-section">
		<div class="container">
			<div class="desk-lead-grid">
				<?php if ( $lead_post ) : ?>
					<article class="desk-lead-card">
						<a class="desk-lead-media" href="<?php echo esc_url( get_permalink( $lead_id ) ); ?>">
							<img src="<?php echo esc_url( $des1_image_url( $lead_id, 'full' ) ); ?>" alt="<?php echo esc_attr( get_the_title( $lead_id ) ); ?>" loading="eager" decoding="async">
						</a>
						<div class="desk-lead-content">
							<span class="desk-kicker"><?php echo esc_html( $des1_type_label( $lead_id ) ); ?> desk</span>
							<h1><?php echo esc_html( get_the_title( $lead_id ) ); ?></h1>
							<p><?php echo esc_html( $des1_excerpt( $lead_id, 22 ) ); ?></p>
							<a class="desk-primary-link" href="<?php echo esc_url( get_permalink( $lead_id ) ); ?>">Open story</a>
						</div>
					</article>
				<?php endif; ?>

				<?php if ( ! empty( $review_posts ) ) : ?>
					<aside class="review-ledger" aria-label="Review ledger">
						<div class="desk-section-head">
							<div>
								<span>Review ledger</span>
								<h2>Fresh verdicts</h2>
							</div>
							<a href="<?php echo esc_url( $latest_review_url ); ?>">All reviews</a>
						</div>
						<ol class="ledger-list">
							<?php foreach ( array_slice( $review_posts, 0, 4 ) as $index => $review_post ) : ?>
								<li>
									<a class="ledger-item" href="<?php echo esc_url( get_permalink( $review_post->ID ) ); ?>">
										<span class="ledger-rank"><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
										<span class="ledger-title"><?php echo esc_html( get_the_title( $review_post->ID ) ); ?></span>
										<span class="ledger-badge"><?php echo esc_html( $des1_review_badge( $review_post->ID ) ); ?></span>
									</a>
								</li>
							<?php endforeach; ?>
						</ol>
					</aside>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<div class="container">
		<?php if ( ! empty( $review_posts ) ) : ?>
			<section class="home-section review-stack-section">
				<div class="home-section-head">
					<div>
						<span class="home-section-label">Reviews</span>
						<h2 class="home-section-title">What to read before you play</h2>
					</div>
					<a class="home-view-more" href="<?php echo esc_url( $latest_review_url ); ?>">View all</a>
				</div>
				<div class="review-stack">
					<?php foreach ( $review_posts as $review_post ) : ?>
						<a class="review-stack-card" href="<?php echo esc_url( get_permalink( $review_post->ID ) ); ?>">
							<span class="review-stack-image">
								<img src="<?php echo esc_url( $des1_image_url( $review_post->ID, 'medium_large' ) ); ?>" alt="<?php echo esc_attr( get_the_title( $review_post->ID ) ); ?>" loading="lazy" decoding="async">
							</span>
							<span class="review-stack-content">
								<span class="ledger-badge"><?php echo esc_html( $des1_review_badge( $review_post->ID ) ); ?></span>
								<strong><?php echo esc_html( get_the_title( $review_post->ID ) ); ?></strong>
							</span>
						</a>
					<?php endforeach; ?>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( ! empty( $game_posts ) ) : ?>
			<section class="home-section game-shelf-section">
				<div class="home-section-head">
					<div>
						<span class="home-section-label">Games</span>
						<h2 class="home-section-title">Current shelf</h2>
					</div>
					<a class="home-view-more" href="<?php echo esc_url( $popular_games_url ); ?>">View games</a>
				</div>
				<div class="game-shelf">
					<?php foreach ( $game_posts as $game_post ) : ?>
						<a class="game-shelf-card" href="<?php echo esc_url( get_permalink( $game_post->ID ) ); ?>">
							<span class="game-shelf-image">
								<img src="<?php echo esc_url( $des1_image_url( $game_post->ID, 'medium_large' ) ); ?>" alt="<?php echo esc_attr( get_the_title( $game_post->ID ) ); ?>" loading="lazy" decoding="async">
							</span>
							<span class="game-shelf-title"><?php echo esc_html( get_the_title( $game_post->ID ) ); ?></span>
							<span class="game-shelf-action">Open game</span>
						</a>
					<?php endforeach; ?>
				</div>
			</section>
		<?php endif; ?>

		<?php if ( ! empty( $blog_posts ) ) : ?>
			<section class="home-section blog-notebook-section">
				<div class="home-section-head">
					<div>
						<span class="home-section-label">Blogs</span>
						<h2 class="home-section-title">Notebook</h2>
					</div>
					<a class="home-view-more" href="<?php echo esc_url( $latest_blog_url ); ?>">View blogs</a>
				</div>
				<div class="blog-notebook">
					<?php foreach ( $blog_posts as $blog_post ) : ?>
						<a class="blog-note" href="<?php echo esc_url( get_permalink( $blog_post->ID ) ); ?>">
							<span class="blog-note-type"><?php echo esc_html( get_the_date( 'M j', $blog_post->ID ) ); ?></span>
							<strong><?php echo esc_html( get_the_title( $blog_post->ID ) ); ?></strong>
							<span><?php echo esc_html( $des1_excerpt( $blog_post->ID, 16 ) ); ?></span>
						</a>
					<?php endforeach; ?>
				</div>
			</section>
		<?php endif; ?>
	</div>
</div>
<?php
get_footer();
