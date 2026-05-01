<?php
/**
 * The template for displaying the footer
 *
 * @package h5game
 */

$des5_footer_title       = function_exists( 'get_field' ) ? get_field( 'title', 'option' ) : '';
$des5_footer_copyright   = function_exists( 'get_field' ) ? get_field( 'copyright', 'option' ) : '';
$des5_footer_description = function_exists( 'get_field' ) ? get_field( 'description', 'option' ) : '';
$des5_footer_description = is_string( $des5_footer_description ) ? wp_strip_all_tags( $des5_footer_description ) : '';

if ( ! $des5_footer_description ) {
    $des5_footer_description = wp_strip_all_tags( get_bloginfo( 'description' ) );
}

if ( ! $des5_footer_description ) {
    $des5_footer_description = 'Games, reviews, and blog dispatches filed from the editorial desk.';
}

$des5_footer_reviews = new WP_Query(
    array(
        'post_type'           => 'review',
        'posts_per_page'      => 3,
        'orderby'             => 'date',
        'order'               => 'DESC',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    )
);

$des5_footer_blogs = new WP_Query(
    array(
        'post_type'           => 'blog',
        'posts_per_page'      => 3,
        'orderby'             => 'date',
        'order'               => 'DESC',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    )
);

$des5_footer_games = new WP_Query(
    array(
        'post_type'           => 'post',
        'posts_per_page'      => 3,
        'orderby'             => 'date',
        'order'               => 'DESC',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true,
        'no_found_rows'       => true,
    )
);
?>
</main>
        <footer class="des5-editorial-foot">
            <div class="container">
                <div class="des5-foot-masthead">
                    <div class="foot-brand">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="foot-logo">
                            <?php echo esc_html( $des5_footer_title ? $des5_footer_title : get_bloginfo( 'name' ) ); ?>
                        </a>
                        <?php if ( $des5_footer_description ) : ?>
                            <p><?php echo esc_html( wp_trim_words( $des5_footer_description, 24 ) ); ?></p>
                        <?php endif; ?>
                    </div>
                    <div class="des5-foot-stamp">
                        <span>Issue Desk</span>
                        <time datetime="<?php echo esc_attr( date_i18n( 'Y-m-d' ) ); ?>"><?php echo esc_html( date_i18n( 'M j, Y' ) ); ?></time>
                    </div>
                </div>

                <div class="des5-foot-grid">
                    <nav class="des5-foot-section des5-foot-primary" aria-label="Footer primary navigation">
                        <h2>Section Index</h2>
                        <a href="<?php echo esc_url( home_url( '/blogs/' ) ); ?>">Blogs</a>
                        <a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Reviews</a>
                        <a href="<?php echo esc_url( home_url( '/html5-games/' ) ); ?>">Games</a>
                        <a href="<?php echo esc_url( home_url( '/about-us/' ) ); ?>">About Us</a>
                    </nav>

                    <?php if ( $des5_footer_reviews->have_posts() ) : ?>
                        <section class="des5-foot-section" aria-label="Latest reviews">
                            <h2>Review File</h2>
                            <?php while ( $des5_footer_reviews->have_posts() ) : ?>
                                <?php $des5_footer_reviews->the_post(); ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
                            <?php endwhile; ?>
                        </section>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                    <?php if ( $des5_footer_blogs->have_posts() ) : ?>
                        <section class="des5-foot-section" aria-label="Latest blogs">
                            <h2>Blog Ledger</h2>
                            <?php while ( $des5_footer_blogs->have_posts() ) : ?>
                                <?php $des5_footer_blogs->the_post(); ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
                            <?php endwhile; ?>
                        </section>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>

                    <?php if ( $des5_footer_games->have_posts() ) : ?>
                        <section class="des5-foot-section" aria-label="Latest games">
                            <h2>Game Queue</h2>
                            <?php while ( $des5_footer_games->have_posts() ) : ?>
                                <?php $des5_footer_games->the_post(); ?>
                                <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
                            <?php endwhile; ?>
                        </section>
                        <?php wp_reset_postdata(); ?>
                    <?php endif; ?>
                </div>

                <div class="des5-foot-bottom">
                    <?php echo esc_html( $des5_footer_copyright ? $des5_footer_copyright : 'Copyright ' . date_i18n( 'Y' ) ); ?>
                </div>
            </div>
        </footer>
<?php wp_footer(); ?>
<script>
        (function () {
            const header = document.querySelector(".des5-editorial-head");

            if (!header) {
                return;
            }

            const menuBtn = header.querySelector(".head-btn");
            const menu = header.querySelector(".head-menu");
            const searchBtn = header.querySelector(".head-search-btn");
            const search = header.querySelector(".head-search");

            const closePanel = function (panel, button) {
                if (panel) {
                    panel.classList.remove("active");
                }

                if (button) {
                    button.setAttribute("aria-expanded", "false");
                }
            };

            const togglePanel = function (panel, button) {
                const willOpen = panel && !panel.classList.contains("active");

                if (panel) {
                    panel.classList.toggle("active", willOpen);
                }

                if (button) {
                    button.setAttribute("aria-expanded", willOpen ? "true" : "false");
                }
            };

            document.addEventListener("click", function (event) {
                if (menuBtn && menu && menuBtn.contains(event.target)) {
                    togglePanel(menu, menuBtn);
                    closePanel(search, searchBtn);
                    return;
                }

                if (searchBtn && search && searchBtn.contains(event.target)) {
                    togglePanel(search, searchBtn);
                    closePanel(menu, menuBtn);
                    return;
                }

                if (menu && !menu.contains(event.target)) {
                    closePanel(menu, menuBtn);
                }

                if (search && !search.contains(event.target)) {
                    closePanel(search, searchBtn);
                }
            });

            document.addEventListener("keydown", function (event) {
                if ("Escape" !== event.key) {
                    return;
                }

                closePanel(menu, menuBtn);
                closePanel(search, searchBtn);
            });
        })();
    </script>
</body>
</html>
