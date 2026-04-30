<?php
/**
 * The template for displaying the footer
 *
 * @package h5game
 */

$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );
$blog_archive_url   = home_url( '/blogs/' );
$about_url          = home_url( '/about-us/' );

$site_title = function_exists( 'get_field' ) ? get_field( 'title', 'option' ) : '';
$copyright  = function_exists( 'get_field' ) ? get_field( 'copyright', 'option' ) : '';

$site_title = $site_title ? $site_title : get_bloginfo( 'name' );
$copyright  = $copyright ? $copyright : '&copy; ' . gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' );

$footer_reviews = get_posts(
	array(
		'post_type'           => 'review',
		'posts_per_page'      => 4,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$footer_blogs = get_posts(
	array(
		'post_type'           => 'blog',
		'posts_per_page'      => 3,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);

$footer_games = get_posts(
	array(
		'post_type'           => 'post',
		'posts_per_page'      => 3,
		'post_status'         => 'publish',
		'ignore_sticky_posts' => true,
	)
);
?>
</main>
        <footer class="site-footer">
            <div class="container">
                <div class="foot-wrapper">
                    <div class="foot-brand">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php echo esc_html( $site_title ); ?></a>
                        <p>Reviews, playable games, and blog updates for finding what to play next.</p>
                        <div class="foot-muted"><?php echo wp_kses_post( $copyright ); ?></div>
                    </div>

                    <div class="foot-columns">
                        <nav class="foot-column" aria-label="<?php esc_attr_e( 'Footer primary navigation', 'h5game' ); ?>">
                            <div class="foot-title">Explore</div>
                            <ul>
                                <li><a href="<?php echo esc_url( $games_archive_url ); ?>">Games</a></li>
                                <li><a href="<?php echo esc_url( $review_archive_url ); ?>">Reviews</a></li>
                                <li><a href="<?php echo esc_url( $blog_archive_url ); ?>">Blogs</a></li>
                                <li><a href="<?php echo esc_url( $about_url ); ?>">About Us</a></li>
                            </ul>
                        </nav>

                        <?php if ( ! empty( $footer_reviews ) ) : ?>
                            <div class="foot-column">
                                <div class="foot-title">Latest reviews</div>
                                <ul>
                                    <?php foreach ( $footer_reviews as $footer_review ) : ?>
                                        <li>
                                            <a href="<?php echo esc_url( get_permalink( $footer_review->ID ) ); ?>">
                                                <?php echo esc_html( get_the_title( $footer_review->ID ) ); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php if ( ! empty( $footer_blogs ) ) : ?>
                            <div class="foot-column">
                                <div class="foot-title">Latest blogs</div>
                                <ul>
                                    <?php foreach ( $footer_blogs as $footer_blog ) : ?>
                                        <li>
                                            <a href="<?php echo esc_url( get_permalink( $footer_blog->ID ) ); ?>">
                                                <?php echo esc_html( get_the_title( $footer_blog->ID ) ); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>

                        <?php if ( ! empty( $footer_games ) ) : ?>
                            <div class="foot-column">
                                <div class="foot-title">Latest games</div>
                                <ul>
                                    <?php foreach ( $footer_games as $footer_game ) : ?>
                                        <li>
                                            <a href="<?php echo esc_url( get_permalink( $footer_game->ID ) ); ?>">
                                                <?php echo esc_html( get_the_title( $footer_game->ID ) ); ?>
                                            </a>
                                        </li>
                                    <?php endforeach; ?>
                                </ul>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </footer>
<?php wp_footer(); ?>
<script>
        document.addEventListener("click", function (e) {
            const menuBtn = document.querySelector(".head-btn");
            const menu = document.querySelector(".head-menu");
            const searchBtn = document.querySelector(".head-search-btn");
            const search = document.querySelector(".head-search");

            if (menuBtn && menu && menuBtn.contains(e.target)) {
                const isActive = !menu.classList.contains("active");
                menu.classList.toggle("active", isActive);
                menuBtn.setAttribute("aria-expanded", isActive ? "true" : "false");
                if (search) search.classList.remove("active");
                if (searchBtn) searchBtn.setAttribute("aria-expanded", "false");
            } else if (menu && !menu.contains(e.target)) {
                menu.classList.remove("active");
                if (menuBtn) menuBtn.setAttribute("aria-expanded", "false");
            }

            if (searchBtn && search && searchBtn.contains(e.target)) {
                const isActive = !search.classList.contains("active");
                search.classList.toggle("active", isActive);
                searchBtn.setAttribute("aria-expanded", isActive ? "true" : "false");
                if (menu) menu.classList.remove("active");
                if (menuBtn) menuBtn.setAttribute("aria-expanded", "false");
            } else if (search && !search.contains(e.target)) {
                search.classList.remove("active");
                if (searchBtn) searchBtn.setAttribute("aria-expanded", "false");
            }
        });
    </script>
</body>
</html>
