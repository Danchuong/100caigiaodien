<?php
/**
 * The template for displaying the footer
 *
 * @package h5game
 */

$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );
$blog_archive_url   = home_url( '/blogs/' );
?>
</main>
        <footer class="site-footer">
            <div class="container">
                <div class="foot-wrapper">
                    <div class="foot-brand">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php echo esc_html( get_field( 'title', 'option' ) ); ?></a>
                        <p>Directory-style access to games, reviews and blog updates.</p>
                        <div class="foot-muted"><?php echo esc_html( get_field( 'copyright', 'option' ) ); ?></div>
                    </div>

                    <div class="foot-columns">
                        <div class="foot-column">
                            <div class="foot-title">Explore</div>
                            <ul>
                                <li><a href="<?php echo esc_url( $games_archive_url ); ?>">Games</a></li>
                                <li><a href="<?php echo esc_url( $review_archive_url ); ?>">Reviews</a></li>
                                <li><a href="<?php echo esc_url( $blog_archive_url ); ?>">Blogs</a></li>
                            </ul>
                        </div>

                        <div class="foot-column">
                            <div class="foot-title">Platforms</div>
                            <ul>
                                <li><a href="<?php echo esc_url( add_query_arg( 'key', 'pc', $review_archive_url ) ); ?>">PC</a></li>
                                <li><a href="<?php echo esc_url( add_query_arg( 'key', 'console', $review_archive_url ) ); ?>">Console</a></li>
                                <li><a href="<?php echo esc_url( add_query_arg( 'key', 'mobile', $review_archive_url ) ); ?>">Mobile</a></li>
                            </ul>
                        </div>

                        <div class="foot-column">
                            <div class="foot-title">Latest reviews</div>
                            <ul>
                                <?php
                                $review_query = new WP_Query(
                                    array(
                                        'post_type'           => 'review',
                                        'posts_per_page'      => 4,
                                        'post_status'         => 'publish',
                                        'ignore_sticky_posts' => true,
                                    )
                                );

                                if ( $review_query->have_posts() ) :
                                    while ( $review_query->have_posts() ) :
                                        $review_query->the_post();
                                        ?>
                                        <li>
                                            <a href="<?php echo esc_url( get_permalink() ); ?>">
                                                <?php echo esc_html( get_the_title() ); ?>
                                            </a>
                                        </li>
                                        <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                                ?>
                            </ul>
                        </div>
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
            const search = document.querySelector(".head-directory-bar");

            if (menuBtn && menu && menuBtn.contains(e.target)) {
                menu.classList.toggle("active");
                if (search) search.classList.remove("active");
            } else if (menu && !menu.contains(e.target)) {
                menu.classList.remove("active");
            }

            if (searchBtn && search && searchBtn.contains(e.target)) {
                search.classList.toggle("active");
                if (menu) menu.classList.remove("active");
            } else if (search && !search.contains(e.target)) {
                search.classList.remove("active");
            }
        });
    </script>
</body>
</html>
