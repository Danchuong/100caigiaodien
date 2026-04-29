<?php
/**
 * The template for displaying the footer
 *
 * @package h5game
 */

$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );
$blog_archive_url   = home_url( '/blogs/' );

$footer_title       = function_exists( 'get_field' ) ? get_field( 'title', 'option' ) : '';
$footer_copyright   = function_exists( 'get_field' ) ? get_field( 'copyright', 'option' ) : '';
$footer_description = function_exists( 'get_field' ) ? get_field( 'description', 'option' ) : '';

$footer_title = $footer_title ? $footer_title : get_bloginfo( 'name' );

$latest_query = new WP_Query(
    array(
        'post_type'           => array( 'blog', 'review', 'post' ),
        'posts_per_page'      => 5,
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true,
    )
);
?>
</main>
        <footer class="site-footer news-footer">
            <div class="container">
                <div class="foot-wrapper">
                    <div class="foot-brand">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php echo esc_html( $footer_title ); ?></a>
                        <?php if ( $footer_description ) : ?>
                            <p><?php echo esc_html( $footer_description ); ?></p>
                        <?php else : ?>
                            <p>Latest gaming stories, reviews and playable game picks.</p>
                        <?php endif; ?>
                    </div>

                    <div class="foot-latest">
                        <div class="foot-title">Latest posts</div>
                        <?php if ( $latest_query->have_posts() ) : ?>
                            <div class="foot-latest-list">
                                <?php
                                while ( $latest_query->have_posts() ) :
                                    $latest_query->the_post();
                                    ?>
                                    <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
                                <?php endwhile; ?>
                            </div>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </div>

                    <div class="foot-links">
                        <div class="foot-title">Browse</div>
                        <ul>
                            <li><a href="<?php echo esc_url( $blog_archive_url ); ?>">Blogs</a></li>
                            <li><a href="<?php echo esc_url( $review_archive_url ); ?>">Reviews</a></li>
                            <li><a href="<?php echo esc_url( $games_archive_url ); ?>">Games</a></li>
                        </ul>
                    </div>
                </div>

                <?php if ( $footer_copyright ) : ?>
                    <div class="foot-bottom"><?php echo esc_html( $footer_copyright ); ?></div>
                <?php endif; ?>
            </div>
        </footer>
<?php wp_footer(); ?>
<script>
        document.addEventListener("click", function (event) {
            const menuBtn = document.querySelector(".head-btn");
            const menu = document.querySelector(".head-menu");
            const searchBtn = document.querySelector(".head-search-btn");
            const search = document.querySelector(".head-news-row");

            if (menuBtn && menu && menuBtn.contains(event.target)) {
                menu.classList.toggle("active");
                if (search) search.classList.remove("active");
            } else if (menu && !menu.contains(event.target)) {
                menu.classList.remove("active");
            }

            if (searchBtn && search && searchBtn.contains(event.target)) {
                search.classList.toggle("active");
                if (menu) menu.classList.remove("active");
            } else if (search && !search.contains(event.target)) {
                search.classList.remove("active");
            }
        });
    </script>
</body>
</html>
