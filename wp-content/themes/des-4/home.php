<?php
/**
 * Template Name: Home
 */
get_header();

$latest_blog_link   = function_exists( 'get_field' ) && get_field( 'latest_blog' ) ? get_field( 'latest_blog' ) : home_url( '/blogs/' );
$latest_review_link = function_exists( 'get_field' ) && get_field( 'latest_review' ) ? get_field( 'latest_review' ) : home_url( '/reviews/' );
$popular_games_link = function_exists( 'get_field' ) && get_field( 'popular_games' ) ? get_field( 'popular_games' ) : home_url( '/html5-games/' );
$fallback_image     = get_stylesheet_directory_uri() . '/images/android.png';
$mosaic_ids         = array();
$game_ids           = array();

if ( ! function_exists( 'des4_post_excerpt' ) ) {
    function des4_post_excerpt( $post_id, $word_count = 16 ) {
        $excerpt = get_the_excerpt( $post_id );

        if ( ! $excerpt ) {
            $excerpt = get_post_field( 'post_content', $post_id );
        }

        $excerpt = html_entity_decode( wp_strip_all_tags( strip_shortcodes( $excerpt ) ), ENT_QUOTES, get_bloginfo( 'charset' ) );
        $excerpt = trim( preg_replace( '/[*_`#>]+/', '', $excerpt ) );

        return wp_trim_words( $excerpt, $word_count, '...' );
    }
}

if ( ! function_exists( 'des4_game_rating' ) ) {
    function des4_game_rating( $post_id ) {
        $ratings = array( 35, 40, 45, 50 );

        return $ratings[ absint( $post_id ) % count( $ratings ) ];
    }
}

if ( ! function_exists( 'des4_render_game_stars' ) ) {
    function des4_render_game_stars( $post_id ) {
        $rating       = des4_game_rating( $post_id );
        $rating_label = number_format_i18n( $rating / 10, 1 );
        $full_stars   = (int) floor( $rating / 10 );
        $has_half     = 5 === $rating % 10;
        ?>
        <span class="game-tile-rating" aria-label="<?php echo esc_attr( sprintf( __( '%s out of 5 stars', 'h5game' ), $rating_label ) ); ?>">
            <span class="game-tile-stars" aria-hidden="true">
                <?php for ( $star = 1; $star <= 5; $star++ ) : ?>
                    <span class="<?php echo esc_attr( $star <= $full_stars || ( $has_half && $star === $full_stars + 1 ) ? 'is-filled' : '' ); ?>">&#9733;</span>
                <?php endfor; ?>
            </span>
            <span><?php echo esc_html( $rating_label ); ?></span>
        </span>
        <?php
    }
}
?>

<div class="des4-home-page">
<section class="mosaic-home">
    <div class="container">
        <div class="mosaic-lead">
            <div class="mosaic-lead-left">
                <div class="mosaic-kicker">Blog Picks</div>
                <h1 class="mosaic-title">Game picks for today.</h1>
            </div>
        </div>

        <?php
        $mosaic_query = new WP_Query(
            array(
                'post_type'           => 'blog',
                'posts_per_page'      => 5,
                'orderby'             => 'rand',
                'order'               => 'DESC',
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true,
            )
        );
        if ( $mosaic_query->have_posts() ) :
            $mosaic_count = 0;
            ?>
            <div class="mosaic-grid">
                <?php
                while ( $mosaic_query->have_posts() ) :
                    $mosaic_query->the_post();
                    $mosaic_count++;
                    $mosaic_ids[] = get_the_ID();
                    $image_url    = has_post_thumbnail() ? wp_get_attachment_url( get_post_thumbnail_id() ) : $fallback_image;
                    $tags_post    = get_the_tags();
                    $tag_name     = ! empty( $tags_post ) ? $tags_post[0]->name : 'Blog';
                    $card_class   = 1 === $mosaic_count ? 'mosaic-card mosaic-card-large' : 'mosaic-card mosaic-card-small';
                    ?>
                    <a class="<?php echo esc_attr( $card_class ); ?>" href="<?php echo esc_url( get_permalink() ); ?>">
                        <span class="mosaic-image" style="background-image: url(<?php echo esc_url( $image_url ); ?>)"></span>
                        <span class="mosaic-content">
                            <span class="mosaic-meta"><?php echo esc_html( $tag_name ); ?></span>
                            <span class="mosaic-heading"><?php echo esc_html( get_the_title() ); ?></span>
                            <?php if ( 1 === $mosaic_count ) : ?>
                                <span class="mosaic-description"><?php echo esc_html( des4_post_excerpt( get_the_ID(), 20 ) ); ?></span>
                            <?php endif; ?>
                        </span>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<section class="portal-section portal-section-blog">
    <div class="container">
        <div class="portal-section-head">
            <div>
                <span class="portal-section-kicker">Blog Picks</span>
                <h2>More to read</h2>
            </div>
            <a href="<?php echo esc_url( $latest_blog_link ); ?>">View all</a>
        </div>

        <?php
        $blog_query = new WP_Query(
            array(
                'post_type'           => 'blog',
                'posts_per_page'      => 6,
                'post__not_in'        => $mosaic_ids,
                'orderby'             => 'rand',
                'order'               => 'DESC',
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true,
            )
        );
        if ( $blog_query->have_posts() ) :
            ?>
            <div class="blog-wall">
                <?php
                while ( $blog_query->have_posts() ) :
                    $blog_query->the_post();
                    $image_url = has_post_thumbnail() ? wp_get_attachment_url( get_post_thumbnail_id() ) : $fallback_image;
                    ?>
                    <a class="blog-wall-item" href="<?php echo esc_url( get_permalink() ); ?>">
                        <span class="blog-wall-image" style="background-image: url(<?php echo esc_url( $image_url ); ?>)"></span>
                        <span class="blog-wall-content">
                            <span class="blog-wall-date"><?php echo esc_html( get_the_date( 'M j' ) ); ?></span>
                            <span class="blog-wall-title"><?php echo esc_html( get_the_title() ); ?></span>
                            <span class="blog-wall-description"><?php echo esc_html( des4_post_excerpt( get_the_ID(), 15 ) ); ?></span>
                        </span>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<section class="portal-section portal-section-reviews">
    <div class="container">
        <div class="portal-section-head">
            <div>
                <span class="portal-section-kicker">Review Picks</span>
                <h2>Review Desk</h2>
            </div>
            <a href="<?php echo esc_url( $latest_review_link ); ?>">View all</a>
        </div>

        <?php
        $review_query = new WP_Query(
            array(
                'post_type'           => 'review',
                'posts_per_page'      => 8,
                'orderby'             => 'rand',
                'order'               => 'DESC',
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true,
            )
        );
        if ( $review_query->have_posts() ) :
            ?>
            <div class="review-lane">
                <?php
                while ( $review_query->have_posts() ) :
                    $review_query->the_post();
                    $image_url = has_post_thumbnail() ? wp_get_attachment_url( get_post_thumbnail_id() ) : $fallback_image;
                    ?>
                    <a class="review-lane-item" href="<?php echo esc_url( get_permalink() ); ?>">
                        <span class="review-lane-image" style="background-image: url(<?php echo esc_url( $image_url ); ?>)"></span>
                        <span class="review-lane-content">
                            <span class="review-label">Review</span>
                            <span class="review-title"><?php echo esc_html( get_the_title() ); ?></span>
                            <span class="review-description"><?php echo esc_html( des4_post_excerpt( get_the_ID(), 13 ) ); ?></span>
                        </span>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<section class="portal-section portal-section-games">
    <div class="container">
        <div class="portal-section-head">
            <div>
                <span class="portal-section-kicker">Games</span>
                <h2>Playable Picks</h2>
            </div>
            <a href="<?php echo esc_url( $popular_games_link ); ?>">View all</a>
        </div>

        <?php
        $game_query = new WP_Query(
            array(
                'post_type'           => 'post',
                'posts_per_page'      => 8,
                'post__not_in'        => $game_ids,
                'orderby'             => 'rand',
                'order'               => 'DESC',
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true,
            )
        );
        if ( $game_query->have_posts() ) :
            ?>
            <div class="game-tile-grid">
                <?php
                while ( $game_query->have_posts() ) :
                    $game_query->the_post();
                    $image_url = has_post_thumbnail() ? wp_get_attachment_url( get_post_thumbnail_id() ) : $fallback_image;
                    ?>
                    <a class="game-tile" href="<?php echo esc_url( get_permalink() ); ?>">
                        <span class="game-tile-image" style="background-image: url(<?php echo esc_url( $image_url ); ?>)"></span>
                        <span class="game-tile-body">
                            <span class="game-tile-title"><?php echo esc_html( get_the_title() ); ?></span>
                            <span class="game-tile-description"><?php echo esc_html( des4_post_excerpt( get_the_ID(), 11 ) ); ?></span>
                            <?php des4_render_game_stars( get_the_ID() ); ?>
                        </span>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>
</div>

<?php
get_footer();
