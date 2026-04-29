<?php
/**
 * The template for displaying the footer
 *
 * @package h5game
 */

$des5_footer_title       = function_exists( 'get_field' ) ? get_field( 'title', 'option' ) : '';
$des5_footer_copyright   = function_exists( 'get_field' ) ? get_field( 'copyright', 'option' ) : '';
$des5_footer_description = function_exists( 'get_field' ) ? get_field( 'description', 'option' ) : '';
?>
</main>
        <footer class="issue-foot">
            <div class="container">
                <div class="foot-wrapper">
                    <div class="foot-brand">
                        <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="foot-logo">
                            <?php echo esc_html( $des5_footer_title ? $des5_footer_title : get_bloginfo( 'name' ) ); ?>
                        </a>
                        <?php if ( $des5_footer_description ) : ?>
                            <p><?php echo esc_html( wp_trim_words( $des5_footer_description, 18 ) ); ?></p>
                        <?php endif; ?>
                    </div>

                    <nav class="foot-links" aria-label="Footer links">
                        <a href="<?php echo esc_url( home_url( '/blogs' ) ); ?>">Blogs</a>
                        <a href="<?php echo esc_url( home_url( '/reviews' ) ); ?>">Reviews</a>
                        <a href="<?php echo esc_url( home_url( '/html5-games' ) ); ?>">Games</a>
                    </nav>
                </div>

                <div class="foot-bottom">
                    <?php echo esc_html( $des5_footer_copyright ? $des5_footer_copyright : 'Copyright ' . date_i18n( 'Y' ) ); ?>
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
