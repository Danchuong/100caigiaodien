<?php
/**
 * Template Name: Home
 */

get_header();

$home_id = get_queried_object_id();
$hero_image = $home_id ? get_the_post_thumbnail_url( $home_id, 'full' ) : '';

$field_value = function ( $name ) {
	return function_exists( 'get_field' ) ? get_field( $name ) : '';
};

$get_image = function ( $post_id ) {
	return get_the_post_thumbnail_url( $post_id, 'large' );
};

$get_image_style = function ( $image_url ) {
	return $image_url ? 'background-image: url(' . esc_url_raw( $image_url ) . ');' : '';
};

$get_label = function ( $post_id ) {
	$tags = get_the_tags( $post_id );
	return ! empty( $tags ) ? $tags[0]->name : 'Featured';
};

$blog_url = $field_value( 'latest_blog' );
$review_url = $field_value( 'latest_review' );
$game_url = $field_value( 'popular_games' );

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

$game_ids = array();
?>

<div class="home-wrapper">
	<section class="home-hero" style="<?php echo esc_attr( $get_image_style( $hero_image ) ); ?>">
		<div class="container">
			<div class="home-hero-content">
				<div class="home-kicker">Game updates, reviews and quick play</div>
				<h1><?php echo esc_html( $field_value( 'description' ) ); ?></h1>
				<?php if ( $blog_url ) : ?>
					<a class="home-button" href="<?php echo esc_url( $blog_url ); ?>">Explore stories</a>
				<?php endif; ?>
			</div>
		</div>
	</section>

	<div class="container">
		<section class="home-section home-review-section">
			<div class="home-section-head">
				<div>
					<span>Reviews</span>
					<h2>Latest Reviews</h2>
				</div>
				<?php if ( $review_url ) : ?>
					<a href="<?php echo esc_url( $review_url ); ?>">View more</a>
				<?php endif; ?>
			</div>

			<?php if ( $review_query->have_posts() ) : ?>
				<div class="home-review-list">
					<?php
					$review_index = 0;
					while ( $review_query->have_posts() ) :
						$review_query->the_post();
						$review_index++;
						$game_ids[] = get_the_ID();
						$review_class = 1 === $review_index ? 'home-review-card is-large' : 'home-review-card';
						?>
						<a class="<?php echo esc_attr( $review_class ); ?>" href="<?php echo esc_url( get_permalink() ); ?>">
							<div class="home-card-image" style="<?php echo esc_attr( $get_image_style( $get_image( get_the_ID() ) ) ); ?>"></div>
							<div class="home-card-body">
								<div class="home-card-label"><?php echo esc_html( $get_label( get_the_ID() ) ); ?></div>
								<h3><?php the_title(); ?></h3>
								<span class="rating"><span class="rating-stars r45"></span></span>
								<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
							</div>
						</a>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</section>

		<section class="home-section home-game-section">
			<div class="home-section-head">
				<div>
					<span>Games</span>
					<h2>Popular Games</h2>
				</div>
				<?php if ( $game_url ) : ?>
					<a href="<?php echo esc_url( $game_url ); ?>">View more</a>
				<?php endif; ?>
			</div>

			<?php
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
			<?php if ( $game_query->have_posts() ) : ?>
				<div class="home-game-list">
					<?php
					while ( $game_query->have_posts() ) :
						$game_query->the_post();
						?>
						<a class="home-game-card" href="<?php echo esc_url( get_permalink() ); ?>">
							<div class="home-card-image" style="<?php echo esc_attr( $get_image_style( $get_image( get_the_ID() ) ) ); ?>"></div>
							<h3><?php the_title(); ?></h3>
						</a>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</section>

		<section class="home-section home-blog-section">
			<div class="home-section-head">
				<div>
					<span>Blog</span>
					<h2>Fresh Blog Posts</h2>
				</div>
				<?php if ( $blog_url ) : ?>
					<a href="<?php echo esc_url( $blog_url ); ?>">View more</a>
				<?php endif; ?>
			</div>

			<?php if ( $blog_query->have_posts() ) : ?>
				<div class="home-blog-list">
					<?php
					while ( $blog_query->have_posts() ) :
						$blog_query->the_post();
						?>
						<a class="home-blog-card" href="<?php echo esc_url( get_permalink() ); ?>">
							<div class="home-card-image" style="<?php echo esc_attr( $get_image_style( $get_image( get_the_ID() ) ) ); ?>"></div>
							<div class="home-card-body">
								<div class="home-card-label"><?php echo esc_html( $get_label( get_the_ID() ) ); ?></div>
								<h3><?php the_title(); ?></h3>
								<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
							</div>
						</a>
					<?php endwhile; ?>
				</div>
				<?php wp_reset_postdata(); ?>
			<?php endif; ?>
		</section>
	</div>
</div>

<?php
get_footer();
