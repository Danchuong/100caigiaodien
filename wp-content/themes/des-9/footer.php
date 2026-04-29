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
        <footer class="site-footer partner-footer">
            <div class="container">
                <div class="partner-footer-top">
                    <div class="partner-footer-brand">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo"><?php echo esc_html( get_field( 'title', 'option' ) ); ?></a>
                        <p><?php echo esc_html( get_field( 'description', 'option' ) ); ?></p>
                    </div>

                    <div class="partner-footer-network">
                        <a href="<?php echo esc_url( $games_archive_url ); ?>">
                            <span>01</span>
                            <strong>Games</strong>
                        </a>
                        <a href="<?php echo esc_url( $review_archive_url ); ?>">
                            <span>02</span>
                            <strong>Reviews</strong>
                        </a>
                        <a href="<?php echo esc_url( $blog_archive_url ); ?>">
                            <span>03</span>
                            <strong>Blogs</strong>
                        </a>
                    </div>
                </div>

                <div class="partner-footer-bottom">
                    <div class="partner-footer-copy"><?php echo esc_html( get_field( 'copyright', 'option' ) ); ?></div>
                    <nav class="partner-footer-links" aria-label="Footer links">
                        <a href="<?php echo esc_url( $blog_archive_url ); ?>">Blogs</a>
                        <a href="<?php echo esc_url( $review_archive_url ); ?>">Reviews</a>
                        <a href="<?php echo esc_url( $games_archive_url ); ?>">Games</a>
                    </nav>
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
