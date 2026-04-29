<?php
/**
 * The template for displaying the footer
 *
 * @package h5game
 */

$footer_title       = function_exists( 'get_field' ) && get_field( 'title', 'option' ) ? get_field( 'title', 'option' ) : get_bloginfo( 'name' );
$footer_desc        = function_exists( 'get_field' ) && get_field( 'description', 'option' ) ? get_field( 'description', 'option' ) : get_bloginfo( 'description' );
$footer_copyright   = function_exists( 'get_field' ) && get_field( 'copyright', 'option' ) ? get_field( 'copyright', 'option' ) : '&copy; ' . gmdate( 'Y' ) . ' ' . get_bloginfo( 'name' );
$latest_blog_link   = function_exists( 'get_field' ) && get_field( 'latest_blog' ) ? get_field( 'latest_blog' ) : home_url( '/blogs/' );
$latest_review_link = function_exists( 'get_field' ) && get_field( 'latest_review' ) ? get_field( 'latest_review' ) : home_url( '/reviews/' );
$popular_games_link = function_exists( 'get_field' ) && get_field( 'popular_games' ) ? get_field( 'popular_games' ) : home_url( '/html5-games/' );
?>
</main>
    <footer class="site-foot">
        <div class="container">
            <div class="foot-wrapper">
                <div class="foot-brand">
                    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="foot-logo"><?php echo esc_html( $footer_title ); ?></a>
                    <?php if ( ! empty( $footer_desc ) ) : ?>
                        <p><?php echo esc_html( $footer_desc ); ?></p>
                    <?php endif; ?>
                </div>

                <div class="foot-mega">
                    <div class="foot-column">
                        <div class="foot-title">Explore</div>
                        <ul>
                            <li><a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a></li>
                            <li><a href="<?php echo esc_url( $latest_blog_link ); ?>">Blogs</a></li>
                            <li><a href="<?php echo esc_url( $latest_review_link ); ?>">Reviews</a></li>
                            <li><a href="<?php echo esc_url( $popular_games_link ); ?>">Games</a></li>
                        </ul>
                    </div>

                    <div class="foot-column">
                        <div class="foot-title">Latest Blogs</div>
                        <ul>
                            <?php
                            $footer_blog_query = new WP_Query(
                                array(
                                    'post_type'           => 'blog',
                                    'posts_per_page'      => 4,
                                    'post_status'         => 'publish',
                                    'ignore_sticky_posts' => true,
                                )
                            );
                            if ( $footer_blog_query->have_posts() ) :
                                while ( $footer_blog_query->have_posts() ) :
                                    $footer_blog_query->the_post();
                                    ?>
                                    <li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></li>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                    </div>

                    <div class="foot-column">
                        <div class="foot-title">Latest Reviews</div>
                        <ul>
                            <?php
                            $footer_review_query = new WP_Query(
                                array(
                                    'post_type'           => 'review',
                                    'posts_per_page'      => 4,
                                    'post_status'         => 'publish',
                                    'ignore_sticky_posts' => true,
                                )
                            );
                            if ( $footer_review_query->have_posts() ) :
                                while ( $footer_review_query->have_posts() ) :
                                    $footer_review_query->the_post();
                                    ?>
                                    <li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></li>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                    </div>

                    <div class="foot-column">
                        <div class="foot-title">Popular Games</div>
                        <ul>
                            <?php
                            $footer_game_query = new WP_Query(
                                array(
                                    'post_type'           => 'post',
                                    'posts_per_page'      => 4,
                                    'post_status'         => 'publish',
                                    'ignore_sticky_posts' => true,
                                )
                            );
                            if ( $footer_game_query->have_posts() ) :
                                while ( $footer_game_query->have_posts() ) :
                                    $footer_game_query->the_post();
                                    ?>
                                    <li><a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a></li>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>

                <div class="foot-bottom">
                    <span><?php echo wp_kses_post( $footer_copyright ); ?></span>
                    <a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Search reviews</a>
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

        if (menuBtn && menu) {
            if (menuBtn.contains(e.target)) {
                menu.classList.toggle("active");
                if (search) search.classList.remove("active");
            } else if (!menu.contains(e.target)) {
                menu.classList.remove("active");
            }
        }

        if (searchBtn && search) {
            if (searchBtn.contains(e.target)) {
                search.classList.toggle("active");
                if (menu) menu.classList.remove("active");
            } else if (!search.contains(e.target)) {
                search.classList.remove("active");
            }
        }
    });
</script>
</body>
</html>
