<?php
/**
 * Template Name: Home
 */

get_header();

$des10_field_link = function ( $field_name, $fallback_path ) {
	$value = function_exists( 'get_field' ) ? get_field( $field_name ) : '';

	if ( is_array( $value ) && isset( $value['url'] ) ) {
		$value = $value['url'];
	}

	return esc_url( $value ? $value : home_url( $fallback_path ) );
};

$des10_thumb = function ( $post_id ) {
	if ( has_post_thumbnail( $post_id ) ) {
		return esc_url( wp_get_attachment_url( get_post_thumbnail_id( $post_id ) ) );
	}

	return esc_url( get_stylesheet_directory_uri() . '/images/android.png' );
};

$des10_label = function ( $post_id, $fallback = 'Review' ) {
	$tags = get_the_tags( $post_id );

	if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
		return esc_html( $tags[0]->name );
	}

	$categories = get_the_category( $post_id );

	if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
		return esc_html( $categories[0]->name );
	}

	return esc_html( $fallback );
};

$des10_score = function ( $post_id ) {
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

	return null;
};

$des10_reviews_url = $des10_field_link( 'latest_review', '/reviews' );
$des10_games_url   = $des10_field_link( 'popular_games', '/html5-games' );
$des10_blog_url    = $des10_field_link( 'latest_blog', '/blogs' );
$des10_hero_id     = 0;

$des10_hero_query = new WP_Query(
	array(
		'post_type'           => 'review',
		'posts_per_page'      => 1,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);
?>
<div class="score-home">
	<section class="score-hero-section">
		<div class="container">
			<?php if ( $des10_hero_query->have_posts() ) : ?>
				<?php
				while ( $des10_hero_query->have_posts() ) :
					$des10_hero_query->the_post();
					$des10_hero_id = get_the_ID();
					$hero_score    = $des10_score( $des10_hero_id );
					?>
					<div class="score-hero-layout">
						<div class="score-hero-panel">
							<div class="score-hero-meta">
								<span><?php echo $des10_label( $des10_hero_id, 'Featured Review' ); ?></span>
								<span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
							</div>
							<div class="score-badge-large">
								<?php if ( null !== $hero_score ) : ?>
									<span><?php echo esc_html( number_format( $hero_score, 1 ) ); ?></span>
									<small>Review Score</small>
								<?php else : ?>
									<span class="score-badge-word">Review</span>
									<small>Verdict</small>
								<?php endif; ?>
							</div>
							<h1><?php the_title(); ?></h1>
							<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
							<div class="score-hero-actions">
								<a class="score-primary-link" href="<?php the_permalink(); ?>">Read Review</a>
								<a class="score-secondary-link" href="<?php echo $des10_reviews_url; ?>">All Reviews</a>
							</div>
						</div>
						<a class="score-hero-media" href="<?php the_permalink(); ?>" aria-label="<?php echo esc_attr( get_the_title() ); ?>">
							<img src="<?php echo $des10_thumb( $des10_hero_id ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
							<div class="score-hero-facts">
								<span>Critic Focus</span>
								<strong><?php echo null !== $hero_score ? esc_html( number_format( $hero_score, 1 ) ) . '/10' : esc_html__( 'Verdict', 'h5game' ); ?></strong>
							</div>
						</a>
					</div>
					<?php
				endwhile;
				wp_reset_postdata();
				?>
			<?php else : ?>
				<div class="score-empty-state">
					<h1>Latest review scores</h1>
					<p>Reviews will appear here as soon as they are published.</p>
					<a class="score-primary-link" href="<?php echo $des10_reviews_url; ?>">Browse Reviews</a>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<section class="review-score-section">
		<div class="container">
			<div class="score-section-head">
				<div>
					<span>Reviews First</span>
					<h2>Fresh scores from the review desk</h2>
				</div>
				<a href="<?php echo $des10_reviews_url; ?>">View all reviews</a>
			</div>

			<?php
			$des10_review_query = new WP_Query(
				array(
					'post_type'           => 'review',
					'posts_per_page'      => 5,
					'post__not_in'        => array_filter( array( $des10_hero_id ) ),
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
				)
			);
			?>
			<?php if ( $des10_review_query->have_posts() ) : ?>
				<div class="review-score-list">
					<?php
					while ( $des10_review_query->have_posts() ) :
						$des10_review_query->the_post();
						$review_id    = get_the_ID();
						$review_score = $des10_score( $review_id );
						?>
						<a class="review-score-card" href="<?php the_permalink(); ?>">
							<img src="<?php echo $des10_thumb( $review_id ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
							<div class="review-score-content">
								<div class="review-score-meta">
									<span><?php echo $des10_label( $review_id, 'Review' ); ?></span>
									<strong><?php echo null !== $review_score ? esc_html( number_format( $review_score, 1 ) ) : esc_html__( 'Review', 'h5game' ); ?></strong>
								</div>
								<h3><?php the_title(); ?></h3>
								<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 16 ) ); ?></p>
							</div>
						</a>
						<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<section class="score-support-section">
		<div class="container">
			<div class="score-support-grid">
				<div class="score-panel game-rank-panel">
					<div class="score-section-head compact">
						<div>
							<span>Game Library</span>
							<h2>Popular games to check next</h2>
						</div>
						<a href="<?php echo $des10_games_url; ?>">Browse games</a>
					</div>
					<?php
					$des10_game_query = new WP_Query(
						array(
							'post_type'           => 'post',
							'posts_per_page'      => 5,
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
						)
					);
					?>
					<?php if ( $des10_game_query->have_posts() ) : ?>
						<div class="game-rank-list">
							<?php
							$game_rank = 0;
							while ( $des10_game_query->have_posts() ) :
								$des10_game_query->the_post();
								$game_rank++;
								?>
								<a class="game-rank-item" href="<?php the_permalink(); ?>">
									<span class="game-rank-number"><?php echo esc_html( str_pad( (string) $game_rank, 2, '0', STR_PAD_LEFT ) ); ?></span>
									<img src="<?php echo $des10_thumb( get_the_ID() ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
									<span class="game-rank-title"><?php the_title(); ?></span>
								</a>
								<?php
							endwhile;
							wp_reset_postdata();
							?>
						</div>
					<?php endif; ?>
				</div>

				<div class="score-panel news-brief-panel">
					<div class="score-section-head compact">
						<div>
							<span>Guides & News</span>
							<h2>Short reads after the scores</h2>
						</div>
						<a href="<?php echo $des10_blog_url; ?>">Read blog</a>
					</div>
					<?php
					$des10_blog_query = new WP_Query(
						array(
							'post_type'           => 'blog',
							'posts_per_page'      => 3,
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
						)
					);
					?>
					<?php if ( $des10_blog_query->have_posts() ) : ?>
						<div class="news-brief-list">
							<?php
							while ( $des10_blog_query->have_posts() ) :
								$des10_blog_query->the_post();
								?>
								<a class="news-brief-item" href="<?php the_permalink(); ?>">
									<span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
									<h3><?php the_title(); ?></h3>
								</a>
								<?php
							endwhile;
							wp_reset_postdata();
							?>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
</div>
<?php
get_footer();
