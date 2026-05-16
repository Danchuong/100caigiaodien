<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package h5game
 */

$footer_title = get_field( 'title', 'option' );
$footer_desc  = get_field( 'description', 'option' );
$copyright    = get_field( 'copyright', 'option' );

$footer_blog_query = new WP_Query(
	array(
		'post_type'           => 'blog',
		'posts_per_page'      => 2,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$footer_review_query = new WP_Query(
	array(
		'post_type'           => 'review',
		'posts_per_page'      => 2,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$footer_game_query = new WP_Query(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => 2,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);
?>
</main>
	<footer class="site-footer-newspaper">
		<div class="container">
			<div class="foot-wrapper">
				<div class="foot-masthead">
					<div>
						<a class="foot-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
							<?php echo esc_html( $footer_title ? $footer_title : get_bloginfo( 'name' ) ); ?>
						</a>
						<?php if ( $footer_desc ) : ?>
							<p><?php echo esc_html( wp_trim_words( $footer_desc, 18 ) ); ?></p>
						<?php endif; ?>
					</div>
					<nav class="foot-links foot-primary-links" aria-label="<?php esc_attr_e( 'Footer Sections', 'h5game' ); ?>">
						<a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>"><?php esc_html_e( 'Blogs', 'h5game' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>"><?php esc_html_e( 'Reviews', 'h5game' ); ?></a>
						<a href="<?php echo esc_url( home_url( '/html5-games/' ) ); ?>"><?php esc_html_e( 'Games', 'h5game' ); ?></a>
					</nav>
				</div>

				<div class="foot-index">
					<div class="foot-section">
						<h2><?php esc_html_e( 'Front Page', 'h5game' ); ?></h2>
						<div class="foot-links">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html_e( 'Home', 'h5game' ); ?></a>
							<a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>"><?php esc_html_e( 'Latest Blogs', 'h5game' ); ?></a>
							<a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>"><?php esc_html_e( 'Review Archive', 'h5game' ); ?></a>
							<a href="<?php echo esc_url( home_url( '/html5-games/' ) ); ?>"><?php esc_html_e( 'Game Archive', 'h5game' ); ?></a>
						</div>
					</div>

					<div class="foot-section foot-feed">
						<h2><?php esc_html_e( 'Latest Blogs', 'h5game' ); ?></h2>
						<?php if ( $footer_blog_query->have_posts() ) : ?>
							<div class="foot-entry-list">
								<?php
								while ( $footer_blog_query->have_posts() ) :
									$footer_blog_query->the_post();
									?>
									<a class="foot-entry" href="<?php echo esc_url( get_permalink() ); ?>">
										<span><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
										<strong><?php echo esc_html( get_the_title() ); ?></strong>
									</a>
									<?php
								endwhile;
								wp_reset_postdata();
								?>
							</div>
						<?php endif; ?>
					</div>

					<div class="foot-section foot-feed">
						<h2><?php esc_html_e( 'Review Picks', 'h5game' ); ?></h2>
						<?php if ( $footer_review_query->have_posts() ) : ?>
							<div class="foot-entry-list">
								<?php
								while ( $footer_review_query->have_posts() ) :
									$footer_review_query->the_post();
									?>
									<a class="foot-entry" href="<?php echo esc_url( get_permalink() ); ?>">
										<span><?php esc_html_e( 'Review', 'h5game' ); ?></span>
										<strong><?php echo esc_html( get_the_title() ); ?></strong>
									</a>
									<?php
								endwhile;
								wp_reset_postdata();
								?>
							</div>
						<?php endif; ?>
					</div>

					<div class="foot-section foot-feed">
						<h2><?php esc_html_e( 'Game Queue', 'h5game' ); ?></h2>
						<?php if ( $footer_game_query->have_posts() ) : ?>
							<div class="foot-entry-list">
								<?php
								while ( $footer_game_query->have_posts() ) :
									$footer_game_query->the_post();
									?>
									<a class="foot-entry" href="<?php echo esc_url( get_permalink() ); ?>">
										<span><?php esc_html_e( 'Game', 'h5game' ); ?></span>
										<strong><?php echo esc_html( get_the_title() ); ?></strong>
									</a>
									<?php
								endwhile;
								wp_reset_postdata();
								?>
							</div>
						<?php endif; ?>
					</div>
				</div>

				<div class="foot-bottom">
					<span><?php esc_html_e( 'Copyright', 'h5game' ); ?></span>
					<p>
						<?php echo esc_html( $copyright ? $copyright : sprintf( '%s %s', date_i18n( 'Y' ), get_bloginfo( 'name' ) ) ); ?>
					</p>
				</div>
			</div>
		</div>
	</footer>
<?php wp_footer(); ?>
<script>
	document.addEventListener("click", function (event) {
		const menuBtn = document.querySelector(".head-btn");
		const menu = document.querySelector(".head-menu");
		const searchBtn = document.querySelector(".head-search-btn");
		const search = document.querySelector(".head-search");
		const setExpanded = function (button, isExpanded) {
			if (button) button.setAttribute("aria-expanded", String(isExpanded));
		};

		if (menuBtn && menu) {
			if (menuBtn.contains(event.target)) {
				const isActive = !menu.classList.contains("active");
				menu.classList.toggle("active", isActive);
				setExpanded(menuBtn, isActive);
				if (search) search.classList.remove("active");
				setExpanded(searchBtn, false);
			} else if (!menu.contains(event.target)) {
				menu.classList.remove("active");
				setExpanded(menuBtn, false);
			}
		}

		if (searchBtn && search) {
			if (searchBtn.contains(event.target)) {
				const isActive = !search.classList.contains("active");
				search.classList.toggle("active", isActive);
				setExpanded(searchBtn, isActive);
				if (menu) menu.classList.remove("active");
				setExpanded(menuBtn, false);
				if (isActive) {
					const input = search.querySelector("input");
					if (input) input.focus();
				}
			} else if (!search.contains(event.target)) {
				search.classList.remove("active");
				setExpanded(searchBtn, false);
			}
		}
	});
</script>
</body>
</html>
