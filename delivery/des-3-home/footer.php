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

?>
</main>
	<footer class="site-footer-legal">
		<div class="container">
			<div class="foot-wrapper">
				<div class="foot-brand">
					<a class="foot-logo" href="<?php echo esc_url( home_url( '/' ) ); ?>">
						<?php
						$footer_title = get_field( 'title', 'option' );
						echo esc_html( $footer_title ? $footer_title : get_bloginfo( 'name' ) );
						?>
					</a>
					<?php
					$footer_desc = get_field( 'description', 'option' );
					if ( $footer_desc ) :
						?>
						<p><?php echo esc_html( wp_trim_words( $footer_desc, 18 ) ); ?></p>
					<?php endif; ?>
				</div>
				<nav class="foot-links" aria-label="<?php esc_attr_e( 'Footer Links', 'h5game' ); ?>">
					<a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>">Blogs</a>
					<a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Reviews</a>
					<a href="<?php echo esc_url( home_url( '/html5-games/' ) ); ?>">Games</a>
				</nav>
				<div class="foot-bottom">
					<?php
					$copyright = get_field( 'copyright', 'option' );
					echo esc_html( $copyright ? $copyright : sprintf( '%s %s', date_i18n( 'Y' ), get_bloginfo( 'name' ) ) );
					?>
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

		if (menuBtn && menu) {
			if (menuBtn.contains(event.target)) {
				menu.classList.toggle("active");
				if (search) search.classList.remove("active");
			} else if (!menu.contains(event.target)) {
				menu.classList.remove("active");
			}
		}

		if (searchBtn && search) {
			if (searchBtn.contains(event.target)) {
				search.classList.toggle("active");
				if (menu) menu.classList.remove("active");
			} else if (!search.contains(event.target)) {
				search.classList.remove("active");
			}
		}
	});
</script>
</body>
</html>
