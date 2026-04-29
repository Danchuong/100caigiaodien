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
			$lead_id = get_the_ID();
			$shown_blog_ids[] = $lead_id;
			?>
		<section class="newspaper-lead">
			<div class="container">
				<div class="newspaper-lead-inner">
					<div class="newspaper-date"><?php echo esc_html( get_the_date() ); ?></div>
					<div class="newspaper-lead-kicker">
						<a href="<?php echo esc_url( $blog_link ); ?>">Latest Blog</a>
					</div>
					<h1>
						<a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
					</h1>
					<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 24 ) ); ?></p>
					<?php if ( has_post_thumbnail() ) : ?>
						<a class="newspaper-lead-image" href="<?php echo esc_url( get_permalink() ); ?>">
							<?php the_post_thumbnail( 'large', array( 'loading' => 'eager' ) ); ?>
						</a>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<?php wp_reset_postdata(); ?>
	<?php endif; ?>

	<section class="newspaper-briefs">
		<div class="container">
			<div class="newspaper-columns">
				<div class="newspaper-column">
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
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
						)
					);
					if ( $blog_query->have_posts() ) :
						while ( $blog_query->have_posts() ) :
							$blog_query->the_post();
								$shown_blog_ids[] = get_the_ID();
								?>
							<article class="newspaper-note">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
									<strong><?php echo esc_html( get_the_title() ); ?></strong>
								</a>
							</article>
							<?php
						endwhile;
						wp_reset_postdata();
					endif;
					?>
				</div>

				<div class="newspaper-column newspaper-column-center">
					<div class="newspaper-band-head">
						<h2>Review Column</h2>
						<a href="<?php echo esc_url( $review_link ); ?>">View Reviews</a>
					</div>
					<?php
					$review_query = new WP_Query(
						array(
							'post_type'           => 'review',
							'posts_per_page'      => 3,
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
						)
					);
						if ( $review_query->have_posts() ) :
							while ( $review_query->have_posts() ) :
								$review_query->the_post();
								$shown_review_ids[] = get_the_ID();
								?>
								<article class="newspaper-review-note">
									<a href="<?php echo esc_url( get_permalink() ); ?>">
										<span class="newspaper-score">Review</span>
										<strong><?php echo esc_html( get_the_title() ); ?></strong>
									</a>
								</article>
								<?php
							endwhile;
							wp_reset_postdata();
					endif;
					?>
				</div>

				<div class="newspaper-column">
					<div class="newspaper-band-head">
						<h2>Game Index</h2>
						<a href="<?php echo esc_url( $game_link ); ?>">View Games</a>
					</div>
					<?php
					$game_query = new WP_Query(
						array(
							'post_type'           => 'post',
							'posts_per_page'      => 3,
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
						)
					);
					if ( $game_query->have_posts() ) :
							while ( $game_query->have_posts() ) :
								$game_query->the_post();
								$shown_game_ids[] = get_the_ID();
								?>
							<article class="newspaper-note newspaper-note-game">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<span>Game</span>
									<strong><?php echo esc_html( get_the_title() ); ?></strong>
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

	<section class="newspaper-band">
		<div class="container">
			<div class="newspaper-band-head newspaper-band-head-large">
				<h2>Latest Reports</h2>
				<a href="<?php echo esc_url( $blog_link ); ?>">All Blogs</a>
			</div>
			<div class="newspaper-card-grid">
				<?php
				$report_query = new WP_Query(
					array(
						'post_type'           => 'blog',
						'posts_per_page'      => 6,
						'post__not_in'        => array_filter( $shown_blog_ids ),
						'post_status'         => 'publish',
						'ignore_sticky_posts' => true,
					)
				);
					if ( $report_query->have_posts() ) :
						while ( $report_query->have_posts() ) :
							$report_query->the_post();
							$shown_blog_ids[] = get_the_ID();
							?>
						<article class="newspaper-card">
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<div class="newspaper-card-copy">
									<span><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
									<h3><?php echo esc_html( get_the_title() ); ?></h3>
									<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></p>
								</div>
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="newspaper-card-media">
										<?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy' ) ); ?>
									</div>
								<?php endif; ?>
							</a>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
				endif;
				?>
			</div>
		</div>
	</section>

	<section class="newspaper-band newspaper-band-muted">
		<div class="container">
			<div class="newspaper-band-head newspaper-band-head-large">
				<h2>Reviews Desk</h2>
				<a href="<?php echo esc_url( $review_link ); ?>">All Reviews</a>
			</div>
			<div class="newspaper-card-grid newspaper-review-grid">
				<?php
				$desk_query = new WP_Query(
					array(
							'post_type'           => 'review',
							'posts_per_page'      => 6,
							'post__not_in'        => array_filter( $shown_review_ids ),
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
						)
					);
					if ( $desk_query->have_posts() ) :
						while ( $desk_query->have_posts() ) :
							$desk_query->the_post();
							$shown_review_ids[] = get_the_ID();
							?>
						<article class="newspaper-card newspaper-card-review">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<div class="newspaper-card-copy">
										<span class="newspaper-decimal-score">Verdict</span>
										<h3><?php echo esc_html( get_the_title() ); ?></h3>
									<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 16 ) ); ?></p>
								</div>
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="newspaper-card-media">
										<?php the_post_thumbnail( 'medium_large', array( 'loading' => 'lazy' ) ); ?>
									</div>
								<?php endif; ?>
							</a>
							</article>
							<?php
						endwhile;
						wp_reset_postdata();
				endif;
				?>
			</div>
		</div>
	</section>

	<section class="newspaper-band">
		<div class="container">
			<div class="newspaper-band-head newspaper-band-head-large">
				<h2>Games Ledger</h2>
				<a href="<?php echo esc_url( $game_link ); ?>">All Games</a>
			</div>
			<div class="newspaper-game-ledger">
				<?php
				$ledger_query = new WP_Query(
					array(
							'post_type'           => 'post',
							'posts_per_page'      => 6,
							'post__not_in'        => array_filter( $shown_game_ids ),
							'post_status'         => 'publish',
							'ignore_sticky_posts' => true,
						)
				);
					if ( $ledger_query->have_posts() ) :
						while ( $ledger_query->have_posts() ) :
							$ledger_query->the_post();
							$shown_game_ids[] = get_the_ID();
							?>
						<article class="newspaper-game-row">
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="newspaper-game-thumb">
										<?php the_post_thumbnail( 'thumbnail', array( 'loading' => 'lazy' ) ); ?>
									</div>
								<?php endif; ?>
								<div>
									<span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
									<h3><?php echo esc_html( get_the_title() ); ?></h3>
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
	</section>
</div>

<?php
get_footer();
