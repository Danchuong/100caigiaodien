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
?>

<section class="mosaic-home">
    <div class="container">
        <div class="mosaic-lead">
            <div class="mosaic-lead-left">
                <div class="mosaic-kicker">News Wall</div>
                <h1 class="mosaic-title">Gaming stories, reviews, and playable picks in one fast scan.</h1>
            </div>
            <div class="mosaic-lead-links" aria-label="Home sections">
                <a href="<?php echo esc_url( $latest_blog_link ); ?>">Blogs</a>
                <a href="<?php echo esc_url( $latest_review_link ); ?>">Reviews</a>
                <a href="<?php echo esc_url( $popular_games_link ); ?>">Games</a>
            </div>
        </div>

        <?php
        $mosaic_query = new WP_Query(
            array(
                'post_type'           => 'blog',
                'posts_per_page'      => 5,
                'orderby'             => 'date',
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
                    $tag_name     = ! empty( $tags_post ) ? $tags_post[0]->name : 'News';
                    $card_class   = 1 === $mosaic_count ? 'mosaic-card mosaic-card-large' : 'mosaic-card mosaic-card-small';
                    ?>
                    <a class="<?php echo esc_attr( $card_class ); ?>" href="<?php echo esc_url( get_permalink() ); ?>">
                        <span class="mosaic-image" style="background-image: url(<?php echo esc_url( $image_url ); ?>)"></span>
                        <span class="mosaic-content">
                            <span class="mosaic-meta"><?php echo esc_html( $tag_name ); ?></span>
                            <span class="mosaic-heading"><?php echo esc_html( get_the_title() ); ?></span>
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
                <span class="portal-section-kicker">Latest Blogs</span>
                <h2>Fresh headlines</h2>
            </div>
            <a href="<?php echo esc_url( $latest_blog_link ); ?>">View all</a>
        </div>

        <?php
        $blog_query = new WP_Query(
            array(
                'post_type'           => 'blog',
                'posts_per_page'      => 6,
                'post__not_in'        => $mosaic_ids,
                'orderby'             => 'date',
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
                <span class="portal-section-kicker">Reviews</span>
                <h2>Critic lane</h2>
            </div>
            <a href="<?php echo esc_url( $latest_review_link ); ?>">View all</a>
        </div>

        <?php
        $review_query = new WP_Query(
            array(
                'post_type'           => 'review',
                'posts_per_page'      => 5,
                'orderby'             => 'date',
                'order'               => 'DESC',
                'post_status'         => 'publish',
                'ignore_sticky_posts' => true,
            )
        );
        if ( $review_query->have_posts() ) :
            $review_number = 0;
            ?>
            <div class="review-lane">
                <?php
                while ( $review_query->have_posts() ) :
                    $review_query->the_post();
                    $review_number++;
                    $image_url = has_post_thumbnail() ? wp_get_attachment_url( get_post_thumbnail_id() ) : $fallback_image;
                    ?>
                    <a class="review-lane-item" href="<?php echo esc_url( get_permalink() ); ?>">
                        <span class="review-rank"><?php echo esc_html( str_pad( (string) $review_number, 2, '0', STR_PAD_LEFT ) ); ?></span>
                        <span class="review-lane-image" style="background-image: url(<?php echo esc_url( $image_url ); ?>)"></span>
                        <span class="review-lane-content">
                            <span class="review-label">Review</span>
                            <span class="review-title"><?php echo esc_html( get_the_title() ); ?></span>
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
                <h2>Popular picks</h2>
            </div>
            <a href="<?php echo esc_url( $popular_games_link ); ?>">View all</a>
        </div>

        <?php
        $game_query = new WP_Query(
            array(
                'post_type'           => 'post',
                'posts_per_page'      => 8,
                'orderby'             => 'date',
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
                        <span class="game-tile-title"><?php echo esc_html( get_the_title() ); ?></span>
                    </a>
                <?php endwhile; ?>
            </div>
            <?php
            wp_reset_postdata();
        endif;
        ?>
    </div>
</section>

<?php
get_footer();
