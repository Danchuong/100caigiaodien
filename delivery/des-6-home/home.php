<?php
/**
 * Template Name: Home
 */

get_header();

$blog_archive_url   = home_url( '/blogs/' );
$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );
$search_key         = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
$game_ids           = array();

$des6_post_label = function ( $post_id, $fallback ) {
	$tags = get_the_tags( $post_id );

	if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
		$tag_name = $tags[0]->name;

		if ( strtolower( $tag_name ) !== strtolower( $fallback ) && strtolower( $tag_name ) !== strtolower( $fallback . 's' ) ) {
			return $tag_name;
		}
	}

	$categories = get_the_category( $post_id );

	if ( ! empty( $categories ) && ! is_wp_error( $categories ) ) {
		$category = $categories[0];

		if ( 'uncategorized' !== $category->slug && strtolower( $category->name ) !== strtolower( $fallback ) && strtolower( $category->name ) !== strtolower( $fallback . 's' ) ) {
			return $category->name;
		}
	}

	return $fallback;
};

$des6_meta_label = function ( $type_label, $item_label ) {
	if ( strtolower( $item_label ) === strtolower( $type_label ) ) {
		return $type_label;
	}

	return $type_label . ' / ' . $item_label;
};

$des6_type_label = function ( $post_type ) {
	if ( 'blog' === $post_type ) {
		return 'Blog';
	}

	if ( 'review' === $post_type ) {
		return 'Review';
	}

	return 'Game';
};

$feature_query = new WP_Query(
	array(
		'post_type'           => array( 'blog', 'review', 'post' ),
		'posts_per_page'      => 6,
		'orderby'             => 'date',
		'order'               => 'DESC',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$blog_query = new WP_Query(
	array(
		'post_type'      => 'blog',
		'posts_per_page' => 3,
		'orderby'        => 'rand',
		'order'          => 'DESC',
		'post_status'    => 'publish',
	)
);

$review_query = new WP_Query(
	array(
		'post_type'      => 'review',
		'posts_per_page' => 5,
		'orderby'        => 'rand',
		'order'          => 'DESC',
		'post_status'    => 'publish',
	)
);

$game_query = new WP_Query(
	array(
		'post_type'      => 'post',
		'posts_per_page' => 5,
		'post__not_in'   => $game_ids,
		'orderby'        => 'rand',
		'order'          => 'DESC',
		'post_status'    => 'publish',
	)
);
?>
<div class="des6-home-page">
	<section class="des6-discovery-hero">
		<div class="des6-home-shell">
			<div class="des6-hero-layout">
				<div class="des6-hero-copy">
					<span class="des6-section-kicker">Visual discovery</span>
					<h1>Find the next game, review, or story worth opening.</h1>
					<p>Browse image-led picks from the latest blogs, reviews, and playable game posts.</p>

					<form class="des6-hero-search" action="<?php echo esc_url( $review_archive_url ); ?>" method="get" role="search">
						<label class="screen-reader-text" for="des6-home-search">Search reviews</label>
						<input id="des6-home-search" type="search" name="key" value="<?php echo esc_attr( $search_key ); ?>" placeholder="Search reviews" />
						<button type="submit">Search</button>
					</form>

				</div>

				<?php if ( $feature_query->have_posts() ) : ?>
					<div class="des6-pin-board" aria-label="Featured discoveries">
						<?php
						while ( $feature_query->have_posts() ) :
							$feature_query->the_post();
							$post_id      = get_the_ID();
							$post_type    = get_post_type( $post_id );
							$type_label   = $des6_type_label( $post_type );
							$item_label   = $des6_post_label( $post_id, $type_label );
							$thumbnail    = get_the_post_thumbnail_url( $post_id, 'large' );
							$image_class  = $thumbnail ? ' has-image' : ' no-image';
							?>
							<a class="des6-pin-card" href="<?php echo esc_url( get_permalink() ); ?>">
								<span class="des6-pin-media<?php echo esc_attr( $image_class ); ?>"<?php echo $thumbnail ? ' style="background-image: url(' . esc_url( $thumbnail ) . ')"' : ''; ?>></span>
								<span class="des6-pin-body">
									<span class="des6-pin-meta"><?php echo esc_html( $des6_meta_label( $type_label, $item_label ) ); ?></span>
									<strong><?php echo esc_html( get_the_title() ); ?></strong>
								</span>
							</a>
						<?php endwhile; ?>
					</div>
					<?php wp_reset_postdata(); ?>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<div class="des6-home-shell">
		<?php if ( $blog_query->have_posts() ) : ?>
			<section class="des6-home-section des6-blog-section">
				<div class="des6-section-head">
					<div>
						<span class="des6-section-kicker">Blogs</span>
						<h2>Longer reads from the feed</h2>
					</div>
					<a class="des6-section-link" href="<?php echo esc_url( $blog_archive_url ); ?>">View blogs</a>
				</div>

				<div class="des6-blog-grid">
					<?php
					while ( $blog_query->have_posts() ) :
						$blog_query->the_post();
						$post_id     = get_the_ID();
						$blog_label  = $des6_post_label( $post_id, 'Blog' );
						$thumbnail   = get_the_post_thumbnail_url( $post_id, 'large' );
						$image_class = $thumbnail ? ' has-image' : ' no-image';
						$excerpt     = wp_trim_words( get_the_excerpt(), 18, '...' );
						?>
						<a class="des6-blog-card" href="<?php echo esc_url( get_permalink() ); ?>">
							<span class="des6-blog-media<?php echo esc_attr( $image_class ); ?>"<?php echo $thumbnail ? ' style="background-image: url(' . esc_url( $thumbnail ) . ')"' : ''; ?>></span>
							<span class="des6-blog-body">
								<span><?php echo esc_html( $blog_label ); ?></span>
								<strong><?php echo esc_html( get_the_title() ); ?></strong>
								<?php if ( $excerpt ) : ?>
									<em><?php echo esc_html( $excerpt ); ?></em>
								<?php endif; ?>
							</span>
						</a>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			</section>
		<?php endif; ?>

		<?php if ( $review_query->have_posts() ) : ?>
			<section class="des6-home-section des6-review-section">
				<div class="des6-section-head">
					<div>
						<span class="des6-section-kicker">Reviews</span>
						<h2>Review picks to compare</h2>
					</div>
					<a class="des6-section-link" href="<?php echo esc_url( $review_archive_url ); ?>">View reviews</a>
				</div>

				<div class="des6-review-grid">
					<?php
					while ( $review_query->have_posts() ) :
						$review_query->the_post();
						$post_id      = get_the_ID();
						$review_label = $des6_post_label( $post_id, 'Review' );
						$thumbnail    = get_the_post_thumbnail_url( $post_id, 'large' );
						$image_class  = $thumbnail ? ' has-image' : ' no-image';
						?>
						<a class="des6-review-card" href="<?php echo esc_url( get_permalink() ); ?>">
							<span class="des6-review-media<?php echo esc_attr( $image_class ); ?>"<?php echo $thumbnail ? ' style="background-image: url(' . esc_url( $thumbnail ) . ')"' : ''; ?>></span>
							<span class="des6-review-body">
								<span><?php echo esc_html( $review_label ); ?></span>
								<strong><?php echo esc_html( get_the_title() ); ?></strong>
							</span>
						</a>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			</section>
		<?php endif; ?>

		<?php if ( $game_query->have_posts() ) : ?>
			<section class="des6-home-section des6-game-section">
				<div class="des6-section-head">
					<div>
						<span class="des6-section-kicker">Games</span>
						<h2>Playable tiles for the next click</h2>
					</div>
					<a class="des6-section-link" href="<?php echo esc_url( $games_archive_url ); ?>">View games</a>
				</div>

				<div class="des6-game-grid">
					<?php
					while ( $game_query->have_posts() ) :
						$game_query->the_post();
						$post_id     = get_the_ID();
						$game_label  = $des6_post_label( $post_id, 'Game' );
						$thumbnail   = get_the_post_thumbnail_url( $post_id, 'large' );
						$image_class = $thumbnail ? ' has-image' : ' no-image';
						?>
						<a class="des6-game-card" href="<?php echo esc_url( get_permalink() ); ?>">
							<span class="des6-game-media<?php echo esc_attr( $image_class ); ?>"<?php echo $thumbnail ? ' style="background-image: url(' . esc_url( $thumbnail ) . ')"' : ''; ?>></span>
							<span class="des6-game-body">
								<span><?php echo esc_html( $game_label ); ?></span>
								<strong><?php echo esc_html( get_the_title() ); ?></strong>
								<em>Open game</em>
							</span>
						</a>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			</section>
		<?php endif; ?>
	</div>
</div>
<?php
get_footer();
