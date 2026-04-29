<?php
/**
 * Template Name: Home
 */
get_header();

$fallback_img = get_stylesheet_directory_uri() . '/images/no_img.jpg';
$hero_img     = get_stylesheet_directory_uri() . '/images/des-1-featured-background.png';

$blog_archive_url   = home_url( '/blogs/' );
$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );

$latest_blog_url   = function_exists( 'get_field' ) ? get_field( 'latest_blog' ) : '';
$latest_review_url = function_exists( 'get_field' ) ? get_field( 'latest_review' ) : '';
$popular_games_url = function_exists( 'get_field' ) ? get_field( 'popular_games' ) : '';

$latest_blog_url   = $latest_blog_url ? $latest_blog_url : $blog_archive_url;
$latest_review_url = $latest_review_url ? $latest_review_url : $review_archive_url;
$popular_games_url = $popular_games_url ? $popular_games_url : $games_archive_url;

$featured_query = new WP_Query(
    array(
        'post_type'      => array( 'blog', 'review', 'post' ),
        'posts_per_page' => 1,
        'orderby'        => 'rand',
        'post_status'    => 'publish',
    )
);

$featured_post       = ! empty( $featured_query->posts ) ? $featured_query->posts[0] : null;
$featured_post_id    = $featured_post ? $featured_post->ID : 0;
$featured_post_url   = $featured_post ? get_permalink( $featured_post_id ) : '';
$featured_post_title = $featured_post ? get_the_title( $featured_post_id ) : '';
$featured_tags       = $featured_post ? get_the_tags( $featured_post_id ) : array();
$featured_post_type  = $featured_post ? get_post_type( $featured_post_id ) : '';
$featured_label      = ! empty( $featured_tags ) ? $featured_tags[0]->name : '';

if ( ! $featured_label ) {
    $featured_label_map = array(
        'blog'   => 'Blog',
        'review' => 'Review',
        'post'   => 'Game',
    );
    $featured_label     = isset( $featured_label_map[ $featured_post_type ] ) ? $featured_label_map[ $featured_post_type ] : '';
}
?>
<section class="home-hero" style="background-image: url(<?php echo esc_url( $hero_img ); ?>)">
    <div class="container">
        <div class="home-hero-wrapper">
            <div class="home-hero-content">
                <?php if ( $featured_post ) : ?>
                    <?php if ( $featured_label ) : ?>
                        <div class="home-hero-label"><?php echo esc_html( $featured_label ); ?></div>
                    <?php endif; ?>
                    <h1><?php echo esc_html( $featured_post_title ); ?></h1>
                    <a href="<?php echo esc_url( $featured_post_url ); ?>" class="home-hero-button">View feature</a>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<div class="home-wrapper">
    <div class="container">
        <section class="home-section home-blog-section">
            <div class="home-section-head">
                <div>
                    <span class="home-section-label">Latest Blog</span>
                    <h2 class="home-section-title">Fresh stories</h2>
                </div>
                <a class="home-view-more" href="<?php echo esc_url( $latest_blog_url ); ?>">View more</a>
            </div>
            <?php
            $blog_query = new WP_Query(
                array(
                    'post_type'      => 'blog',
                    'posts_per_page' => 3,
                    'post__not_in'   => $featured_post ? array( $featured_post_id ) : array(),
                    'orderby'        => 'rand',
                    'order'          => 'DESC',
                    'post_status'    => 'publish',
                )
            );

            if ( $blog_query->have_posts() ) :
                $blog_index = 0;
                ?>
                <div class="home-blog-list">
                    <?php
                    while ( $blog_query->have_posts() ) :
                        $blog_query->the_post();
                        $blog_index++;
                        $item_img   = has_post_thumbnail( get_the_ID() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : $fallback_img;
                        $tags_post  = get_the_tags( get_the_ID() );
                        $tag_name   = ! empty( $tags_post ) ? $tags_post[0]->name : 'Uncategorized';
                        $card_class = 1 === $blog_index ? 'home-blog-card home-blog-card-large' : 'home-blog-card';
                        ?>
                        <a class="<?php echo esc_attr( $card_class ); ?>" href="<?php echo esc_url( get_permalink() ); ?>" style="background-image: url(<?php echo esc_url( $item_img ); ?>)">
                            <span class="home-card-category"><?php echo esc_html( $tag_name ); ?></span>
                            <div class="home-card-content">
                                <h3><?php echo esc_html( get_the_title() ); ?></h3>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php
                wp_reset_postdata();
            endif;
            ?>
        </section>

        <section class="home-section home-review-section">
            <div class="home-section-head">
                <div>
                    <span class="home-section-label">Latest Reviews</span>
                    <h2 class="home-section-title">Editor picks</h2>
                </div>
                <a class="home-view-more" href="<?php echo esc_url( $latest_review_url ); ?>">View more</a>
            </div>
            <?php
            $game_ids     = array();
            $review_query = new WP_Query(
                array(
                    'post_type'      => 'review',
                    'posts_per_page' => 5,
                    'orderby'        => 'rand',
                    'order'          => 'DESC',
                    'post_status'    => 'publish',
                )
            );

            if ( $review_query->have_posts() ) :
                $review_index = 0;
                ?>
                <div class="home-review-list">
                    <?php
                    while ( $review_query->have_posts() ) :
                        $review_query->the_post();
                        $review_index++;
                        $game_ids[] = get_the_ID();
                        $item_img   = has_post_thumbnail( get_the_ID() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : $fallback_img;
                        $card_class = 1 === $review_index ? 'home-review-card home-review-card-large' : 'home-review-card';
                        ?>
                        <a class="<?php echo esc_attr( $card_class ); ?>" href="<?php echo esc_url( get_permalink() ); ?>">
                            <div class="home-review-image" style="background-image: url(<?php echo esc_url( $item_img ); ?>)"></div>
                            <div class="home-review-content">
                                <h3><?php echo esc_html( get_the_title() ); ?></h3>
                                <span class="rating">
                                    <span class="rating-stars r45"></span>
                                </span>
                                <div class="home-review-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 22 ) ); ?></div>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php
                wp_reset_postdata();
            endif;
            ?>
        </section>

        <section class="home-section home-game-section">
            <div class="home-section-head">
                <div>
                    <span class="home-section-label">Popular Games</span>
                    <h2 class="home-section-title">Play queue</h2>
                </div>
                <a class="home-view-more" href="<?php echo esc_url( $popular_games_url ); ?>">View more</a>
            </div>
            <?php
            $game_query = new WP_Query(
                array(
                    'post_type'      => 'post',
                    'posts_per_page' => 5,
                    'post__not_in'   => $game_ids,
                    'orderby'        => 'rand',
                    'order'          => 'DESC',
                    'post_status'    => 'publish',
                )
            );

            if ( $game_query->have_posts() ) :
                ?>
                <div class="home-game-list">
                    <?php
                    while ( $game_query->have_posts() ) :
                        $game_query->the_post();
                        $item_img = has_post_thumbnail( get_the_ID() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : $fallback_img;
                        ?>
                        <a class="home-game-card" href="<?php echo esc_url( get_permalink() ); ?>">
                            <div class="home-game-image" style="background-image: url(<?php echo esc_url( $item_img ); ?>)"></div>
                            <h3><?php echo esc_html( get_the_title() ); ?></h3>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php
                wp_reset_postdata();
            endif;
            ?>
        </section>
    </div>
</div>
<?php
get_footer();
