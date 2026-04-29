<?php
/**
 * Template Name: Home
 */
get_header();

$latest_blog_field   = function_exists( 'get_field' ) ? get_field( 'latest_blog' ) : '';
$latest_review_field = function_exists( 'get_field' ) ? get_field( 'latest_review' ) : '';
$popular_games_field = function_exists( 'get_field' ) ? get_field( 'popular_games' ) : '';

$latest_blog_link   = $latest_blog_field ? $latest_blog_field : home_url( '/blogs' );
$latest_review_link = $latest_review_field ? $latest_review_field : home_url( '/reviews' );
$popular_games_link = $popular_games_field ? $popular_games_field : home_url( '/html5-games' );

$blog_query = new WP_Query(
	array(
		'post_type'           => 'blog',
		'posts_per_page'      => 7,
		'orderby'             => 'date',
		'order'               => 'DESC',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$review_query = new WP_Query(
	array(
		'post_type'           => 'review',
		'posts_per_page'      => 5,
		'orderby'             => 'date',
		'order'               => 'DESC',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$game_query = new WP_Query(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => 5,
		'orderby'             => 'date',
		'order'               => 'DESC',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$blog_posts   = $blog_query->posts;
$review_posts = $review_query->posts;
$game_posts   = $game_query->posts;
?>

<div class="newspaper-home">
	<section class="newspaper-edition">
		<div class="container">
			<div class="edition-topline">
				<a href="<?php echo esc_url( $latest_blog_link ); ?>">Latest Blog</a>
				<a href="<?php echo esc_url( $latest_review_link ); ?>">Reviews</a>
				<a href="<?php echo esc_url( $popular_games_link ); ?>">HTML5 Games</a>
			</div>
			<div class="edition-masthead">
				<p class="edition-kicker">Daily gaming digest</p>
				<h1><?php bloginfo( 'name' ); ?></h1>
				<p>Fresh gaming headlines, reviews, and game picks from our latest coverage.</p>
			</div>
		</div>
	</section>

	<div class="container">
		<section class="front-page-grid" aria-label="Front page stories">
			<div class="news-column news-column-main">
				<div class="column-head">
					<span>Front Page</span>
					<a href="<?php echo esc_url( $latest_blog_link ); ?>">All blog posts</a>
				</div>
				<?php if ( ! empty( $blog_posts ) ) : ?>
					<?php $lead_post = $blog_posts[0]; ?>
					<article class="lead-headline">
						<a href="<?php echo esc_url( get_permalink( $lead_post ) ); ?>">
							<span class="story-date"><?php echo esc_html( get_the_date( 'M j', $lead_post ) ); ?></span>
							<h2><?php echo esc_html( get_the_title( $lead_post ) ); ?></h2>
							<p><?php echo esc_html( wp_trim_words( get_the_excerpt( $lead_post ), 26 ) ); ?></p>
						</a>
					</article>
					<div class="headline-stack">
						<?php foreach ( array_slice( $blog_posts, 1, 4 ) as $index => $post_item ) : ?>
							<article class="headline-card">
								<a href="<?php echo esc_url( get_permalink( $post_item ) ); ?>">
									<span class="story-number"><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
									<h3><?php echo esc_html( get_the_title( $post_item ) ); ?></h3>
									<p><?php echo esc_html( wp_trim_words( get_the_excerpt( $post_item ), 14 ) ); ?></p>
								</a>
							</article>
						<?php endforeach; ?>
					</div>
				<?php else : ?>
					<p class="paper-empty">No blog posts found.</p>
				<?php endif; ?>
			</div>

			<div class="news-column review-column">
				<div class="column-head">
					<span>Review Desk</span>
					<a href="<?php echo esc_url( $latest_review_link ); ?>">All reviews</a>
				</div>
				<?php if ( ! empty( $review_posts ) ) : ?>
					<div class="review-brief-list">
						<?php foreach ( $review_posts as $post_item ) : ?>
							<article class="review-brief">
								<a href="<?php echo esc_url( get_permalink( $post_item ) ); ?>">
									<span class="review-score">Review</span>
									<div>
										<h3><?php echo esc_html( get_the_title( $post_item ) ); ?></h3>
										<p><?php echo esc_html( wp_trim_words( get_the_excerpt( $post_item ), 15 ) ); ?></p>
									</div>
								</a>
							</article>
						<?php endforeach; ?>
					</div>
				<?php else : ?>
					<p class="paper-empty">No reviews found.</p>
				<?php endif; ?>
			</div>

			<div class="news-column games-column">
				<div class="column-head">
					<span>Games Index</span>
					<a href="<?php echo esc_url( $popular_games_link ); ?>">All games</a>
				</div>
				<?php if ( ! empty( $game_posts ) ) : ?>
					<ol class="game-wire-list">
						<?php foreach ( $game_posts as $index => $post_item ) : ?>
							<li>
								<a href="<?php echo esc_url( get_permalink( $post_item ) ); ?>">
									<span><?php echo esc_html( sprintf( '%02d', $index + 1 ) ); ?></span>
									<strong><?php echo esc_html( get_the_title( $post_item ) ); ?></strong>
									<small><?php echo esc_html( get_the_date( 'M j', $post_item ) ); ?></small>
								</a>
							</li>
						<?php endforeach; ?>
					</ol>
				<?php else : ?>
					<p class="paper-empty">No games found.</p>
				<?php endif; ?>
			</div>
		</section>

		<section class="chronicle-section" aria-label="Latest dispatches">
			<div class="chronicle-head">
				<div>
					<span>Chronicle</span>
					<h2>Latest dispatches</h2>
				</div>
				<a href="<?php echo esc_url( $latest_blog_link ); ?>">Read the archive</a>
			</div>
			<div class="chronicle-list">
				<?php foreach ( array_slice( $blog_posts, 4, 3 ) as $post_item ) : ?>
					<article class="chronicle-item">
						<a href="<?php echo esc_url( get_permalink( $post_item ) ); ?>">
							<time><?php echo esc_html( get_the_date( 'M j', $post_item ) ); ?></time>
							<h3><?php echo esc_html( get_the_title( $post_item ) ); ?></h3>
							<p><?php echo esc_html( wp_trim_words( get_the_excerpt( $post_item ), 18 ) ); ?></p>
						</a>
					</article>
				<?php endforeach; ?>
			</div>
		</section>
	</div>
</div>

<?php
get_footer();
