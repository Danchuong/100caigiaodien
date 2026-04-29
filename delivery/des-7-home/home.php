<?php
/**
 * Template Name: Home
 */

get_header();

$des7_blog_url   = function_exists( 'get_field' ) && get_field( 'latest_blog' ) ? get_field( 'latest_blog' ) : home_url( '/blogs/' );
$des7_review_url = function_exists( 'get_field' ) && get_field( 'latest_review' ) ? get_field( 'latest_review' ) : home_url( '/reviews/' );
$des7_game_url   = function_exists( 'get_field' ) && get_field( 'popular_games' ) ? get_field( 'popular_games' ) : home_url( '/html5-games/' );

$des7_image = function( $post_id ) {
	$image = get_the_post_thumbnail_url( $post_id, 'large' );
	return $image ? esc_url( $image ) : '';
};

$des7_tag = function( $post_id, $fallback = 'Story' ) {
	$tags = get_the_tags( $post_id );
	return ! empty( $tags ) ? esc_html( $tags[0]->name ) : esc_html( $fallback );
};

$feature_query = new WP_Query(
	array(
		'post_type'           => 'blog',
		'posts_per_page'      => 1,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$pick_query = new WP_Query(
	array(
		'post_type'           => 'review',
		'posts_per_page'      => 4,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);
?>

<section class="home-editor-picks">
	<div class="container">
		<div class="editor-grid">
			<?php if ( $feature_query->have_posts() ) : ?>
				<?php
				$feature_query->the_post();
				$feature_image = $des7_image( get_the_ID() );
				?>
				<a class="editor-feature" href="<?php echo esc_url( get_permalink() ); ?>">
					<div class="editor-feature-media <?php echo $feature_image ? '' : 'is-empty'; ?>" <?php if ( $feature_image ) : ?>style="background-image: url('<?php echo esc_url( $feature_image ); ?>')"<?php endif; ?>></div>
					<div class="editor-feature-content">
						<span class="home-kicker"><?php echo $des7_tag( get_the_ID(), 'Featured' ); ?></span>
						<h1><?php echo esc_html( get_the_title() ); ?></h1>
						<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
						<span class="editor-feature-link">Read feature</span>
					</div>
				</a>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>

			<aside class="editor-picks-panel" aria-label="<?php esc_attr_e( 'Editor picks', 'h5game' ); ?>">
				<div class="editor-picks-head">
					<span class="home-kicker">Editor Picks</span>
					<a href="<?php echo esc_url( $des7_review_url ); ?>">All reviews</a>
				</div>
				<?php if ( $pick_query->have_posts() ) : ?>
					<div class="editor-pick-list">
						<?php
						$pick_number = 0;
						while ( $pick_query->have_posts() ) :
							$pick_query->the_post();
							$pick_number++;
							?>
							<a class="editor-pick-item" href="<?php echo esc_url( get_permalink() ); ?>">
								<span class="editor-pick-number"><?php echo esc_html( sprintf( '%02d', $pick_number ) ); ?></span>
								<span class="editor-pick-copy">
									<strong><?php echo esc_html( get_the_title() ); ?></strong>
									<small>Review pick</small>
								</span>
							</a>
						<?php endwhile; ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</aside>
		</div>
	</div>
</section>

<section class="home-section home-story-section">
	<div class="container">
		<div class="home-section-head">
			<div>
				<span class="home-kicker">Dispatch</span>
				<h2>Latest stories</h2>
			</div>
			<a class="home-view-link" href="<?php echo esc_url( $des7_blog_url ); ?>">View blog</a>
		</div>
		<?php
		$story_query = new WP_Query(
			array(
				'post_type'           => 'blog',
				'posts_per_page'      => 4,
				'offset'              => 1,
				'post_status'         => 'publish',
				'ignore_sticky_posts' => true,
			)
		);
		if ( $story_query->have_posts() ) :
			?>
			<div class="article-row-list">
				<?php
				while ( $story_query->have_posts() ) :
					$story_query->the_post();
					$story_image = $des7_image( get_the_ID() );
					?>
					<a class="article-row-card" href="<?php echo esc_url( get_permalink() ); ?>">
						<span class="article-card-media <?php echo $story_image ? '' : 'is-empty'; ?>" <?php if ( $story_image ) : ?>style="background-image: url('<?php echo esc_url( $story_image ); ?>')"<?php endif; ?>></span>
						<span class="article-card-copy">
							<small><?php echo $des7_tag( get_the_ID(), 'Blog' ); ?></small>
							<strong><?php echo esc_html( get_the_title() ); ?></strong>
							<em><?php echo esc_html( wp_trim_words( get_the_excerpt(), 14 ) ); ?></em>
						</span>
					</a>
				<?php endwhile; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</section>

<section class="home-section home-review-section">
	<div class="container">
		<div class="home-section-head">
			<div>
				<span class="home-kicker">Review Desk</span>
				<h2>Critic notes</h2>
			</div>
			<a class="home-view-link" href="<?php echo esc_url( $des7_review_url ); ?>">View reviews</a>
		</div>
		<?php
		$review_query = new WP_Query(
			array(
				'post_type'           => 'review',
				'posts_per_page'      => 4,
				'offset'              => 4,
				'post_status'         => 'publish',
				'ignore_sticky_posts' => true,
			)
		);
		if ( $review_query->have_posts() ) :
			?>
			<div class="article-row-list article-row-list-alt">
				<?php
				$review_number = 0;
				while ( $review_query->have_posts() ) :
					$review_query->the_post();
					$review_number++;
					$review_image = $des7_image( get_the_ID() );
					?>
					<a class="article-row-card review-row-card" href="<?php echo esc_url( get_permalink() ); ?>">
						<span class="review-score-badge"><?php echo esc_html( sprintf( 'R%d', $review_number ) ); ?></span>
						<span class="article-card-media <?php echo $review_image ? '' : 'is-empty'; ?>" <?php if ( $review_image ) : ?>style="background-image: url('<?php echo esc_url( $review_image ); ?>')"<?php endif; ?>></span>
						<span class="article-card-copy">
							<small>Review</small>
							<strong><?php echo esc_html( get_the_title() ); ?></strong>
							<em><?php echo esc_html( wp_trim_words( get_the_excerpt(), 12 ) ); ?></em>
						</span>
					</a>
				<?php endwhile; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</section>

<section class="home-section home-game-section">
	<div class="container">
		<div class="home-section-head">
			<div>
				<span class="home-kicker">Game Shelf</span>
				<h2>Popular games</h2>
			</div>
			<a class="home-view-link" href="<?php echo esc_url( $des7_game_url ); ?>">View games</a>
		</div>
		<?php
		$game_query = new WP_Query(
			array(
				'post_type'           => 'post',
				'posts_per_page'      => 5,
				'post_status'         => 'publish',
				'ignore_sticky_posts' => true,
			)
		);
		if ( $game_query->have_posts() ) :
			?>
			<div class="game-shelf-list">
				<?php
				while ( $game_query->have_posts() ) :
					$game_query->the_post();
					$game_image = $des7_image( get_the_ID() );
					?>
					<a class="game-shelf-card" href="<?php echo esc_url( get_permalink() ); ?>">
						<span class="game-shelf-media <?php echo $game_image ? '' : 'is-empty'; ?>" <?php if ( $game_image ) : ?>style="background-image: url('<?php echo esc_url( $game_image ); ?>')"<?php endif; ?>></span>
						<span>
							<strong><?php echo esc_html( get_the_title() ); ?></strong>
							<small>Play now</small>
						</span>
					</a>
				<?php endwhile; ?>
			</div>
			<?php wp_reset_postdata(); ?>
		<?php endif; ?>
	</div>
</section>

<?php
get_footer();
