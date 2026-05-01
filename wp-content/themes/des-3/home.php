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

<div class="des3-home-page">
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

	<section class="des3-latest-blogs">
		<div class="container">
			<div class="des3-section-head">
				<div>
					<span class="des3-section-kicker">Latest Blogs</span>
					<h2>Long-form updates with room to breathe</h2>
				</div>
				<a href="<?php echo esc_url( $blog_link ); ?>">View Blogs</a>
			</div>

			<?php
			$blog_query = new WP_Query(
				array(
					'post_type'           => 'blog',
					'posts_per_page'      => 5,
					'post__not_in'        => array_filter( array( $lead_id ) ),
					'orderby'             => 'rand',
					'order'               => 'DESC',
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
				)
			);
			if ( $blog_query->have_posts() ) :
				$blog_index = 0;
				?>
				<div class="des3-blog-layout">
					<?php
					while ( $blog_query->have_posts() ) :
						$blog_query->the_post();
						$shown_blog_ids[] = get_the_ID();
						?>
						<?php if ( 0 === $blog_index ) : ?>
							<article class="des3-blog-feature<?php echo has_post_thumbnail() ? ' has-thumb' : ''; ?>">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="des3-blog-feature-media">
											<?php the_post_thumbnail( 'large', array( 'loading' => 'lazy' ) ); ?>
										</div>
									<?php endif; ?>
									<div class="des3-blog-feature-copy">
										<span><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></span>
										<h3><?php echo esc_html( get_the_title() ); ?></h3>
										<p><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></p>
									</div>
								</a>
							</article>
						<?php else : ?>
							<?php if ( 1 === $blog_index ) : ?>
								<div class="des3-blog-list">
							<?php endif; ?>
							<article class="des3-blog-row<?php echo has_post_thumbnail() ? ' has-thumb' : ''; ?>">
								<a href="<?php echo esc_url( get_permalink() ); ?>">
									<?php if ( has_post_thumbnail() ) : ?>
										<div class="des3-blog-row-media">
											<?php the_post_thumbnail( 'thumbnail', array( 'loading' => 'lazy' ) ); ?>
										</div>
									<?php endif; ?>
									<div class="des3-blog-row-copy">
										<span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
										<strong><?php echo esc_html( get_the_title() ); ?></strong>
									</div>
								</a>
							</article>
						<?php endif; ?>
						<?php
						$blog_index++;
					endwhile;
					if ( 1 < $blog_index ) :
						?>
						</div>
					<?php endif; ?>
				</div>
				<?php
				wp_reset_postdata();
			endif;
			?>
		</div>
	</section>

	<section class="des3-review-picks">
		<div class="container">
			<div class="des3-section-head">
				<div>
					<span class="des3-section-kicker">Review Picks</span>
					<h2>Quick reads without score clutter</h2>
				</div>
				<a href="<?php echo esc_url( $review_link ); ?>">View Reviews</a>
			</div>

			<?php
			$review_query = new WP_Query(
				array(
					'post_type'           => 'review',
					'posts_per_page'      => 6,
					'orderby'             => 'rand',
					'order'               => 'DESC',
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
				)
			);
			if ( $review_query->have_posts() ) :
				?>
				<div class="des3-review-list">
					<?php
					while ( $review_query->have_posts() ) :
						$review_query->the_post();
						$shown_review_ids[] = get_the_ID();
						?>
						<article class="des3-review-card<?php echo has_post_thumbnail() ? ' has-thumb' : ''; ?>">
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="des3-review-media">
										<?php the_post_thumbnail( 'thumbnail', array( 'loading' => 'lazy' ) ); ?>
									</div>
								<?php else : ?>
									<div class="des3-review-media des3-review-media-fallback" aria-hidden="true">
										<span><?php echo esc_html( strtoupper( substr( wp_strip_all_tags( get_the_title() ), 0, 1 ) ) ); ?></span>
									</div>
								<?php endif; ?>
								<div class="des3-review-copy">
									<strong><?php echo esc_html( get_the_title() ); ?></strong>
								</div>
							</a>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			<?php endif; ?>
		</div>
	</section>

	<section class="des3-game-queue">
		<div class="container">
			<div class="des3-section-head">
				<div>
					<span class="des3-section-kicker">Game Queue</span>
					<h2>Compact browsing for playable titles</h2>
				</div>
				<a href="<?php echo esc_url( $game_link ); ?>">View Games</a>
			</div>

			<?php
			$game_query = new WP_Query(
				array(
					'post_type'           => 'post',
					'posts_per_page'      => 8,
					'post__not_in'        => array_filter( $shown_game_ids ),
					'orderby'             => 'rand',
					'order'               => 'DESC',
					'post_status'         => 'publish',
					'ignore_sticky_posts' => true,
				)
			);
			if ( $game_query->have_posts() ) :
				?>
				<div class="des3-game-grid">
					<?php
					while ( $game_query->have_posts() ) :
						$game_query->the_post();
						$shown_game_ids[] = get_the_ID();
						?>
						<article class="des3-game-card<?php echo has_post_thumbnail() ? ' has-thumb' : ''; ?>">
							<a href="<?php echo esc_url( get_permalink() ); ?>">
								<?php if ( has_post_thumbnail() ) : ?>
									<div class="des3-game-media">
										<?php the_post_thumbnail( 'medium', array( 'loading' => 'lazy' ) ); ?>
									</div>
								<?php endif; ?>
								<strong><?php echo esc_html( get_the_title() ); ?></strong>
							</a>
						</article>
						<?php
					endwhile;
					wp_reset_postdata();
					?>
				</div>
			<?php endif; ?>
		</div>
	</section>
</div>

<?php
get_footer();
