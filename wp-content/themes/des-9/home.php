<?php
/**
 * Template Name: Home
 */
get_header();

$fallback_img = get_stylesheet_directory_uri() . '/images/android.png';

$blog_archive_url   = home_url( '/blogs/' );
$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );

$latest_blog_url   = function_exists( 'get_field' ) ? get_field( 'latest_blog' ) : '';
$latest_review_url = function_exists( 'get_field' ) ? get_field( 'latest_review' ) : '';
$popular_games_url = function_exists( 'get_field' ) ? get_field( 'popular_games' ) : '';

$latest_blog_url   = $latest_blog_url ? $latest_blog_url : $blog_archive_url;
$latest_review_url = $latest_review_url ? $latest_review_url : $review_archive_url;
$popular_games_url = $popular_games_url ? $popular_games_url : $games_archive_url;

$get_image = function ( $post_id ) use ( $fallback_img ) {
    return has_post_thumbnail( $post_id ) ? wp_get_attachment_url( get_post_thumbnail_id( $post_id ) ) : $fallback_img;
};

$get_label = function ( $post_id ) {
    $post_type = get_post_type( $post_id );

    if ( 'review' === $post_type ) {
        return 'Review';
    }

    if ( 'blog' === $post_type ) {
        $tags = get_the_tags( $post_id );
        return ! empty( $tags ) ? $tags[0]->name : 'Blog';
    }

    return 'Game';
};

$featured_query = new WP_Query(
    array(
        'post_type'      => array( 'blog', 'review', 'post' ),
        'posts_per_page' => 1,
        'orderby'        => 'rand',
        'post_status'    => 'publish',
    )
);

$featured_post    = ! empty( $featured_query->posts ) ? $featured_query->posts[0] : null;
$featured_post_id = $featured_post ? $featured_post->ID : 0;

$blog_query = new WP_Query(
    array(
        'post_type'      => 'blog',
        'posts_per_page' => 3,
        'post__not_in'   => $featured_post_id ? array( $featured_post_id ) : array(),
        'orderby'        => 'rand',
        'order'          => 'DESC',
        'post_status'    => 'publish',
    )
);

$review_query = new WP_Query(
    array(
        'post_type'      => 'review',
        'posts_per_page' => 5,
        'orderby'        => 'rand',
        'order'          => 'DESC',
        'post_status'    => 'publish',
    )
);

$game_query = new WP_Query(
    array(
        'post_type'      => 'post',
        'posts_per_page' => 5,
        'orderby'        => 'rand',
        'order'          => 'DESC',
        'post_status'    => 'publish',
    )
);
?>
<div class="band-magazine">
    <?php if ( $featured_post ) : ?>
        <section class="band-hero">
            <div class="container">
                <div class="band-hero-layout">
                    <div class="band-hero-copy">
                        <span class="band-kicker"><?php echo esc_html( $get_label( $featured_post_id ) ); ?> lead</span>
                        <h1><?php echo esc_html( get_the_title( $featured_post_id ) ); ?></h1>
                        <div class="band-hero-actions">
                            <a class="band-primary-link" href="<?php echo esc_url( get_permalink( $featured_post_id ) ); ?>">Read feature</a>
                            <a class="band-secondary-link" href="<?php echo esc_url( $latest_review_url ); ?>">Browse reviews</a>
                        </div>
                    </div>
                    <a class="band-hero-media" href="<?php echo esc_url( get_permalink( $featured_post_id ) ); ?>">
                        <span style="background-image: url(<?php echo esc_url( $get_image( $featured_post_id ) ); ?>)"></span>
                    </a>
                </div>
            </div>
        </section>
    <?php endif; ?>
    <?php wp_reset_postdata(); ?>

    <section class="magazine-band news-band">
        <div class="container">
            <div class="band-section-head">
                <div>
                    <span class="band-kicker">Latest News</span>
                    <h2>Latest blog dispatches</h2>
                </div>
                <a href="<?php echo esc_url( $latest_blog_url ); ?>">View blogs</a>
            </div>

            <?php if ( $blog_query->have_posts() ) : ?>
                <div class="news-band-grid">
                    <?php
                    $blog_index = 0;
                    while ( $blog_query->have_posts() ) :
                        $blog_query->the_post();
                        $blog_index++;
                        $blog_class = 1 === $blog_index ? 'news-band-card is-wide' : 'news-band-card is-compact';
                        ?>
                        <a class="<?php echo esc_attr( $blog_class ); ?>" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span class="band-card-image" style="background-image: url(<?php echo esc_url( $get_image( get_the_ID() ) ); ?>)"></span>
                            <span class="band-card-copy">
                                <span><?php echo esc_html( $get_label( get_the_ID() ) ); ?></span>
                                <strong><?php echo esc_html( get_the_title() ); ?></strong>
                            </span>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="magazine-band review-band">
        <div class="container">
            <div class="band-section-head">
                <div>
                    <span class="band-kicker">Reviews</span>
                    <h2>Score ledger</h2>
                </div>
                <a href="<?php echo esc_url( $latest_review_url ); ?>">All reviews</a>
            </div>

            <?php if ( $review_query->have_posts() ) : ?>
                <div class="review-band-grid">
                    <?php
                    $review_index = 0;
                    while ( $review_query->have_posts() ) :
                        $review_query->the_post();
                        $review_index++;
                        ?>
                        <a class="review-band-card review-card-<?php echo esc_attr( $review_index ); ?>" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span class="review-band-score">Review</span>
                            <span class="band-card-image" style="background-image: url(<?php echo esc_url( $get_image( get_the_ID() ) ); ?>)"></span>
                            <span class="band-card-copy">
                                <span>Review</span>
                                <strong><?php echo esc_html( get_the_title() ); ?></strong>
                            </span>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="magazine-band games-band">
        <div class="container">
            <div class="band-section-head">
                <div>
                    <span class="band-kicker">Games</span>
                    <h2>Play shelf</h2>
                </div>
                <a href="<?php echo esc_url( $popular_games_url ); ?>">Browse games</a>
            </div>

            <?php if ( $game_query->have_posts() ) : ?>
                <div class="games-band-grid">
                    <?php
                    $game_index = 0;
                    while ( $game_query->have_posts() ) :
                        $game_query->the_post();
                        $game_index++;
                        $game_class = 0 === $game_index % 2 ? 'game-band-card is-square' : 'game-band-card is-tall';
                        ?>
                        <a class="<?php echo esc_attr( $game_class ); ?>" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span class="band-card-image" style="background-image: url(<?php echo esc_url( $get_image( get_the_ID() ) ); ?>)"></span>
                            <span class="band-card-copy">
                                <span>Game profile</span>
                                <strong><?php echo esc_html( get_the_title() ); ?></strong>
                            </span>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="magazine-band archive-band">
        <div class="container">
            <div class="archive-band-grid">
                <a href="<?php echo esc_url( $popular_games_url ); ?>">
                    <span>Games archive</span>
                    <strong>Browse playable titles</strong>
                </a>
                <a href="<?php echo esc_url( $latest_review_url ); ?>">
                    <span>Review archive</span>
                    <strong>Read scored coverage</strong>
                </a>
                <a href="<?php echo esc_url( $latest_blog_url ); ?>">
                    <span>Blog archive</span>
                    <strong>Follow news updates</strong>
                </a>
            </div>
        </div>
    </section>
</div>
<?php
get_footer();
