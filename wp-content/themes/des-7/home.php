<?php
/**
 * Template Name: Home
 *
 * @package h5game
 */

get_header();

$des7_blog_url   = home_url( '/blogs/' );
$des7_review_url = home_url( '/reviews/' );
$des7_game_url   = home_url( '/html5-games/' );
$des7_site_desc  = get_bloginfo( 'description' ) ? get_bloginfo( 'description' ) : __( 'Game stories, review picks, and playable discoveries in one editorial feed.', 'h5game' );

$des7_blog_query = new WP_Query(
	array(
		'post_type'      => 'blog',
		'posts_per_page' => 3,
		'orderby'        => 'rand',
		'order'          => 'DESC',
		'post_status'    => 'publish',
	)
);

$des7_review_query = new WP_Query(
	array(
		'post_type'      => 'review',
		'posts_per_page' => 5,
		'orderby'        => 'rand',
		'order'          => 'DESC',
		'post_status'    => 'publish',
	)
);

$des7_game_ids   = array();
$des7_game_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 5,
		'post__not_in'   => $des7_game_ids,
		'orderby'        => 'rand',
		'order'          => 'DESC',
		'post_status'    => 'publish',
	)
);

$des7_blog_posts   = $des7_blog_query->posts;
$des7_review_posts = $des7_review_query->posts;
$des7_game_posts   = $des7_game_query->posts;

$des7_post_label = function( $post_id ) {
	$post_type = get_post_type( $post_id );

	if ( 'post' === $post_type ) {
		return __( 'Game', 'h5game' );
	}

	if ( 'blog' === $post_type ) {
		return __( 'Blog', 'h5game' );
	}

	if ( 'review' === $post_type ) {
		return __( 'Review', 'h5game' );
	}

	$post_type_object = get_post_type_object( $post_type );
	return $post_type_object ? $post_type_object->labels->singular_name : __( 'Story', 'h5game' );
};

$des7_excerpt = function( $post_id, $words = 18 ) {
	$raw_excerpt = get_post_field( 'post_excerpt', $post_id );
	$raw_content = $raw_excerpt ? $raw_excerpt : get_post_field( 'post_content', $post_id );

	return wp_trim_words( wp_strip_all_tags( strip_shortcodes( $raw_content ) ), $words );
};

$des7_media = function( $post_id, $class_name, $size = 'large', $loading = 'lazy' ) {
	$image_url = get_the_post_thumbnail_url( $post_id, $size );

	if ( ! $image_url ) {
		printf(
			'<span class="%1$s is-empty" aria-hidden="true"></span>',
			esc_attr( $class_name )
		);
		return;
	}

	printf(
		'<span class="%1$s"><img src="%2$s" alt="%3$s" loading="%4$s"></span>',
		esc_attr( $class_name ),
		esc_url( $image_url ),
		esc_attr( get_the_title( $post_id ) ),
		esc_attr( $loading )
	);
};

$des7_cover_blog   = ! empty( $des7_blog_posts ) ? $des7_blog_posts[0] : null;
$des7_cover_review = ! empty( $des7_review_posts ) ? $des7_review_posts[0] : null;
$des7_cover_game   = ! empty( $des7_game_posts ) ? $des7_game_posts[0] : null;
?>

<div class="des7-home-page">
	<section class="des7-home-hero" aria-label="<?php esc_attr_e( 'Editorial cover', 'h5game' ); ?>">
		<div class="des7-home-container">
			<div class="des7-masthead">
				<div class="des7-masthead-copy">
					<span class="des7-kicker"><?php esc_html_e( 'Games / Reviews / Blogs', 'h5game' ); ?></span>
					<h1><?php echo esc_html( get_bloginfo( 'name' ) ); ?></h1>
					<p><?php echo esc_html( $des7_site_desc ); ?></p>
				</div>
				<nav class="des7-issue-links" aria-label="<?php esc_attr_e( 'Browse sections', 'h5game' ); ?>">
					<a href="<?php echo esc_url( $des7_blog_url ); ?>"><?php esc_html_e( 'Blogs', 'h5game' ); ?></a>
					<a href="<?php echo esc_url( $des7_review_url ); ?>"><?php esc_html_e( 'Reviews', 'h5game' ); ?></a>
					<a href="<?php echo esc_url( $des7_game_url ); ?>"><?php esc_html_e( 'Games', 'h5game' ); ?></a>
				</nav>
			</div>

			<?php if ( $des7_cover_blog || $des7_cover_review || $des7_cover_game ) : ?>
				<div class="des7-cover-board">
					<?php if ( $des7_cover_blog ) : ?>
						<a class="des7-cover-lead" href="<?php echo esc_url( get_permalink( $des7_cover_blog ) ); ?>">
							<?php $des7_media( $des7_cover_blog->ID, 'des7-cover-media', 'large', 'eager' ); ?>
							<span class="des7-cover-copy">
								<span class="des7-tile-label"><?php echo esc_html( $des7_post_label( $des7_cover_blog->ID ) ); ?></span>
								<strong><?php echo esc_html( get_the_title( $des7_cover_blog ) ); ?></strong>
								<em><?php echo esc_html( $des7_excerpt( $des7_cover_blog->ID, 24 ) ); ?></em>
							</span>
						</a>
					<?php endif; ?>

					<div class="des7-cover-stack">
						<?php if ( $des7_cover_review ) : ?>
							<a class="des7-cover-tile is-mint" href="<?php echo esc_url( get_permalink( $des7_cover_review ) ); ?>">
								<span class="des7-tile-label"><?php echo esc_html( $des7_post_label( $des7_cover_review->ID ) ); ?></span>
								<strong><?php echo esc_html( get_the_title( $des7_cover_review ) ); ?></strong>
								<small><?php echo esc_html( get_the_date( 'M j', $des7_cover_review ) ); ?></small>
							</a>
						<?php endif; ?>

						<?php if ( $des7_cover_game ) : ?>
							<a class="des7-cover-tile is-purple" href="<?php echo esc_url( get_permalink( $des7_cover_game ) ); ?>">
								<span class="des7-tile-label"><?php echo esc_html( $des7_post_label( $des7_cover_game->ID ) ); ?></span>
								<strong><?php echo esc_html( get_the_title( $des7_cover_game ) ); ?></strong>
								<small><?php esc_html_e( 'Play now', 'h5game' ); ?></small>
							</a>
						<?php endif; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<section class="des7-home-section des7-story-section" aria-labelledby="des7-blog-heading">
		<div class="des7-home-container">
			<div class="des7-section-head">
				<div>
					<span class="des7-kicker"><?php esc_html_e( 'Dispatch Rail', 'h5game' ); ?></span>
					<h2 id="des7-blog-heading"><?php esc_html_e( 'Blogs on the wire', 'h5game' ); ?></h2>
				</div>
				<a class="des7-section-link" href="<?php echo esc_url( $des7_blog_url ); ?>"><?php esc_html_e( 'All blogs', 'h5game' ); ?></a>
			</div>

			<?php if ( ! empty( $des7_blog_posts ) ) : ?>
				<div class="des7-story-timeline">
					<?php foreach ( $des7_blog_posts as $des7_index => $des7_blog ) : ?>
						<a class="des7-timeline-item" href="<?php echo esc_url( get_permalink( $des7_blog ) ); ?>">
							<span class="des7-timeline-time"><?php echo esc_html( get_the_date( 'M j', $des7_blog ) ); ?></span>
							<span class="des7-timeline-card">
								<span class="des7-tile-label"><?php echo esc_html( $des7_post_label( $des7_blog->ID ) ); ?></span>
								<strong><?php echo esc_html( get_the_title( $des7_blog ) ); ?></strong>
								<em><?php echo esc_html( $des7_excerpt( $des7_blog->ID, 20 ) ); ?></em>
							</span>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<section class="des7-home-section des7-review-section" aria-labelledby="des7-review-heading">
		<div class="des7-home-container">
			<div class="des7-section-head">
				<div>
					<span class="des7-kicker"><?php esc_html_e( 'Review Desk', 'h5game' ); ?></span>
					<h2 id="des7-review-heading"><?php esc_html_e( 'Critic picks on deck', 'h5game' ); ?></h2>
				</div>
				<a class="des7-section-link" href="<?php echo esc_url( $des7_review_url ); ?>"><?php esc_html_e( 'All reviews', 'h5game' ); ?></a>
			</div>

			<?php if ( ! empty( $des7_review_posts ) ) : ?>
				<div class="des7-review-ledger">
					<?php $des7_feature_review = $des7_review_posts[0]; ?>
					<a class="des7-review-feature" href="<?php echo esc_url( get_permalink( $des7_feature_review ) ); ?>">
						<?php $des7_media( $des7_feature_review->ID, 'des7-review-media', 'large' ); ?>
						<span class="des7-review-copy">
							<span class="des7-tile-label"><?php echo esc_html( $des7_post_label( $des7_feature_review->ID ) ); ?></span>
							<strong><?php echo esc_html( get_the_title( $des7_feature_review ) ); ?></strong>
							<em><?php echo esc_html( $des7_excerpt( $des7_feature_review->ID, 26 ) ); ?></em>
						</span>
					</a>

					<div class="des7-review-stack">
						<?php foreach ( array_slice( $des7_review_posts, 1 ) as $des7_review ) : ?>
							<a class="des7-review-note" href="<?php echo esc_url( get_permalink( $des7_review ) ); ?>">
								<span><?php echo esc_html( get_the_date( 'M j', $des7_review ) ); ?></span>
								<strong><?php echo esc_html( get_the_title( $des7_review ) ); ?></strong>
							</a>
						<?php endforeach; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<section class="des7-home-section des7-game-section" aria-labelledby="des7-game-heading">
		<div class="des7-home-container">
			<div class="des7-section-head">
				<div>
					<span class="des7-kicker"><?php esc_html_e( 'Game Shelf', 'h5game' ); ?></span>
					<h2 id="des7-game-heading"><?php esc_html_e( 'Playable picks', 'h5game' ); ?></h2>
				</div>
				<a class="des7-section-link" href="<?php echo esc_url( $des7_game_url ); ?>"><?php esc_html_e( 'All games', 'h5game' ); ?></a>
			</div>

			<?php if ( ! empty( $des7_game_posts ) ) : ?>
				<div class="des7-game-collage">
					<?php foreach ( $des7_game_posts as $des7_index => $des7_game ) : ?>
						<a class="des7-game-card <?php echo 0 === $des7_index ? 'is-wide' : ''; ?>" href="<?php echo esc_url( get_permalink( $des7_game ) ); ?>">
							<?php $des7_media( $des7_game->ID, 'des7-game-media', 'medium' ); ?>
							<span class="des7-game-copy">
								<span class="des7-tile-label"><?php echo esc_html( $des7_post_label( $des7_game->ID ) ); ?></span>
								<strong><?php echo esc_html( get_the_title( $des7_game ) ); ?></strong>
							</span>
						</a>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</div>
	</section>
</div>

<?php
wp_reset_postdata();
get_footer();
