<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package h5game
 */

get_header();

$search_query = get_search_query();
?>

	<main id="primary" class="site-main">

		<?php if ( have_posts() ) : ?>

			<header class="page-header">
				<p class="page-kicker"><?php esc_html_e( 'Search', 'h5game' ); ?></p>
				<h1 class="page-title"><?php esc_html_e( 'Search results', 'h5game' ); ?></h1>
				<?php if ( $search_query ) : ?>
					<p class="page-desc">
						<?php
						printf(
							/* translators: %s: search query. */
							esc_html__( 'Showing matches for "%s".', 'h5game' ),
							esc_html( $search_query )
						);
						?>
					</p>
				<?php endif; ?>
			</header><!-- .page-header -->

			<?php
			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/**
				 * Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called content-search.php and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'search' );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
