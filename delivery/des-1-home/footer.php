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
	<footer class="site-footer">
            <div class="container">
                <div class="footer-wrapper footer-wrap">
                    <div class="footer-info">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php echo esc_html( get_field( 'title', 'option' ) ); ?></a>
                        <div class="footer-tagline">Game news, reviews and guides</div>
                        <div class="text-muted"><?php echo esc_html( get_field( 'copyright', 'option' ) ); ?></div>
                        <div class="desc"><?php echo esc_html( get_field( 'description', 'option' ) ); ?></div>
                    </div>
                    <?php
                    $locations = get_nav_menu_locations();
                    $contact_title = 'Contact Us';
                    if ( isset( $locations['footer_contact'] ) && $locations['footer_contact'] != 0 ) {
                        $contact_menu = wp_get_nav_menu_object( $locations['footer_contact'] );
                        if ( $contact_menu ) $contact_title = $contact_menu->name;
                    }
                    ?>
                    <div class="footer-menu">
                        <div class="footer-menu-title"><?php echo esc_html( $contact_title ); ?></div>
                        <?php
                        if ( has_nav_menu( 'footer_contact' ) ) {
                            wp_nav_menu( array(
                                'theme_location' => 'footer_contact',
                                'container'      => false,
                                'items_wrap'     => '<ul>%3$s</ul>',
                                'depth'          => 1,
                            ) );
                        } else {
                            echo '<ul><li><a href="#">Vui lòng chọn menu Contact</a></li></ul>';
                        }
                        ?>
                    </div>
                    <?php
                    $blog_title = 'Blog';
                    if ( isset( $locations['footer_blog'] ) && $locations['footer_blog'] != 0 ) {
                        $blog_menu = wp_get_nav_menu_object( $locations['footer_blog'] );
                        if ( $blog_menu ) $blog_title = $blog_menu->name;
                    }
                    ?>
                    <div class="footer-menu">
                        <div class="footer-menu-title"><?php echo esc_html( $blog_title ); ?></div>
                        <?php
                        if ( has_nav_menu( 'footer_blog' ) ) {
                            wp_nav_menu( array(
                                'theme_location' => 'footer_blog',
                                'container'      => false,
                                'items_wrap'     => '<ul>%3$s</ul>',
                                'depth'          => 1,
                            ) );
                        } else {
                            echo '<ul><li><a href="#">Vui lòng chọn menu Blog</a></li></ul>';
                        }
                        ?>
                    </div>
                    <?php
                    ?>
                    <div class="footer-menu">
                        <div class="footer-menu-title">Latest Reviews</div>
                        <ul>
                            <?php
                            $review_args = array(
                                'post_type'           => 'review',
                                'posts_per_page'      => 5,
                                'post_status'         => 'publish',
                                'ignore_sticky_posts' => true
                            );
                            $review_query = new WP_Query( $review_args );

                            if ( $review_query->have_posts() ) :
                                while ( $review_query->have_posts() ) : $review_query->the_post();
                                    ?>
                                    <li>
                                        <a href="<?php echo esc_url( get_permalink() ); ?>">
                                            <?php echo esc_html( get_the_title() ); ?>
                                        </a>
                                    </li>
                                    <?php
                                endwhile;
                                wp_reset_postdata();
                            else :
                                echo '<li><a href="#">No reviews found</a></li>';
                            endif;
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
<?php wp_footer(); ?>
<script>
        document.addEventListener("click", function (e) {
            const menuBtn = document.querySelector(".head-btn");
            const menu = document.querySelector(".head-menu");

            if (menuBtn && menu && menuBtn.contains(e.target)) {
                menu.classList.toggle("active");
            } else if (menu && !menu.contains(e.target)) {
                menu.classList.remove("active");
            }

            const searchBtn = document.querySelector(".head-search-btn");
            const search = document.querySelector(".head-search");

            if (searchBtn && search && searchBtn.contains(e.target)) {
                search.classList.toggle("active");
            } else if (search && !search.contains(e.target)) {
                search.classList.remove("active");
            }
        });
    </script>
</body>
</html>
