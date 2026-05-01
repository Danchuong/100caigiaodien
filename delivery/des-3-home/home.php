<?php
/**
 * Template Name: Home
 */

get_header();

$blog_link   = get_field( 'latest_blog' ) ? get_field( 'latest_blog' ) : home_url( '/blogs/' );
$review_link = get_field( 'latest_review' ) ? get_field( 'latest_review' ) : home_url( '/reviews/' );
$game_link   = get_field( 'popular_games' ) ? get_field( 'popular_games' ) : home_url( '/html5-games/' );

$lead_query = new WP_Query(
	array(
		'post_type'           => 'blog',
		'posts_per_page'      => 1,
		'orderby'             => 'rand',
		'order'               => 'DESC',
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$lead_id          = 0;
$shown_blog_ids   = array();
$shown_review_ids = array();
$shown_game_ids   = array();
?>

<div class="home-newspaper">
	<?php if ( $lead_query->have_posts() ) : ?>
		<?php
		$lead_query->the_post();
		$lead_id          = get_the_ID();
		$shown_blog_ids[] = $lead_id;
		?>
		<section class="newspaper-lead">
			<div class="container">
				<article class="newspaper-lead-inner">
					<div class="newspaper-lead-copy">
						<div class="newspaper-lead-meta">
							<a href="<?php echo esc_url( $blog_link ); ?>">Featured Blog</a>
							<span><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
						</div>
						<h1>
							<a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
						</h1>
						<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
					</div>
					<?php if ( has_post_thumbnail() ) : ?>
						<a class="newspaper-lead-image" href="<?php echo esc_url( get_permalink() ); ?>">
							<?php the_post_thumbnail( 'large', array( 'loading' => 'eager' ) ); ?>
						</a>
					<?php endif; ?>
				</article>
			</div>
		</section>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

	<section class="newspaper-briefs">
		<div class="container">
			<div class="newspaper-band-head newspaper-band-head-large">
				<div>
					<span class="newspaper-section-kicker">Current Issue</span>
					<h2>Games, reviews and blogs in one front-page edit</h2>
				</div>
			</div>

			<div class="newspaper-columns">
				<div class="newspaper-column newspaper-column-blog">
					<div class="newspaper-band-head">
						<h2>Blog Briefing</h2>
						<a href="<?php echo esc_url( $blog_link ); ?>">View Blogs</a>
					</div>
					<?php
					$blog_query = new WP_Query(
						array(
							'post_type'           => 'blog',
							'posts_per_page'      => 3,
							'post__not_in'        => array_filter( array( $lead_id ) ),
							'orderby'             => 'rand',
							'order'               => 'DESC',
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
						)
					);
					if ( $blog_query->have_posts() ) :
						while ( $blog_query->have_posts() ) :
							$blog_query->the_post();
							$shown_blog_ids[] = get_the_ID();
							?>
							<article class="newspaper-note<?php echo has_post_thumbnail() ? ' has-thumb' : ''; ?>">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="newspaper-note-thumb">
											<?php the_post_thumbnail( 'thumbnail', array( 'loading' => 'lazy' ) ); ?>
										</div>
									<?php endif; ?>
									<div>
										<span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
										<strong><?php echo esc_html( get_the_title() ); ?></strong>
									</div>
								</a>
							</article>
							<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>

				<div class="newspaper-column newspaper-column-review">
					<div class="newspaper-band-head">
						<h2>Review Picks</h2>
						<a href="<?php echo esc_url( $review_link ); ?>">View Reviews</a>
					</div>
					<?php
					$review_query = new WP_Query(
						array(
							'post_type'           => 'review',
							'posts_per_page'      => 5,
							'orderby'             => 'rand',
							'order'               => 'DESC',
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
						)
					);
					if ( $review_query->have_posts() ) :
						while ( $review_query->have_posts() ) :
							$review_query->the_post();
							$shown_review_ids[] = get_the_ID();
							?>
							<article class="newspaper-note newspaper-review-note<?php echo has_post_thumbnail() ? ' has-thumb' : ''; ?>">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="newspaper-note-thumb">
											<?php the_post_thumbnail( 'thumbnail', array( 'loading' => 'lazy' ) ); ?>
										</div>
									<?php endif; ?>
									<div>
										<span>Review</span>
										<strong><?php echo esc_html( get_the_title() ); ?></strong>
									</div>
								</a>
							</article>
							<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>

				<div class="newspaper-column newspaper-column-game">
					<div class="newspaper-band-head">
						<h2>Game Queue</h2>
						<a href="<?php echo esc_url( $game_link ); ?>">View Games</a>
					</div>
					<?php
					$game_query = new WP_Query(
						array(
							'post_type'           => 'post',
							'posts_per_page'      => 5,
							'post__not_in'        => $shown_game_ids,
							'orderby'             => 'rand',
							'order'               => 'DESC',
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
						)
					);
					if ( $game_query->have_posts() ) :
						while ( $game_query->have_posts() ) :
							$game_query->the_post();
							$shown_game_ids[] = get_the_ID();
							?>
							<article class="newspaper-note newspaper-note-game<?php echo has_post_thumbnail() ? ' has-thumb' : ''; ?>">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="newspaper-note-thumb">
											<?php the_post_thumbnail( 'thumbnail', array( 'loading' => 'lazy' ) ); ?>
										</div>
									<?php endif; ?>
									<div>
										<span>Game</span>
										<strong><?php echo esc_html( get_the_title() ); ?></strong>
									</div>
								</a>
							</article>
							<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>
			</div>
		</div>
	</section>
</div>

<?php
get_footer();
