<?php
/**
 * Template Name: Home
 */
get_header();

$fallback_img = get_stylesheet_directory_uri() . '/images/no_img.jpg';

$blog_archive_url   = home_url( '/blogs/' );
$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );

$latest_blog_url   = function_exists( 'get_field' ) ? get_field( 'latest_blog' ) : '';
$latest_review_url = function_exists( 'get_field' ) ? get_field( 'latest_review' ) : '';
$popular_games_url = function_exists( 'get_field' ) ? get_field( 'popular_games' ) : '';

$latest_blog_url   = $latest_blog_url ? $latest_blog_url : $blog_archive_url;
$latest_review_url = $latest_review_url ? $latest_review_url : $review_archive_url;
$popular_games_url = $popular_games_url ? $popular_games_url : $games_archive_url;

$quick_links = array(
    array(
        'label' => 'Blogs',
        'url'   => $latest_blog_url,
    ),
    array(
        'label' => 'Reviews',
        'url'   => $latest_review_url,
    ),
    array(
        'label' => 'Games',
        'url'   => $popular_games_url,
    ),
);

$featured_query = new WP_Query(
    array(
        'post_type'      => array( 'review', 'post', 'blog' ),
        'posts_per_page' => 1,
        'orderby'        => 'rand',
        'post_status'    => 'publish',
    )
);

$featured_post    = ! empty( $featured_query->posts ) ? $featured_query->posts[0] : null;
$featured_post_id = $featured_post ? $featured_post->ID : 0;
$featured_img     = $featured_post && has_post_thumbnail( $featured_post_id ) ? wp_get_attachment_url( get_post_thumbnail_id( $featured_post_id ) ) : $fallback_img;

$review_query = new WP_Query(
    array(
        'post_type'      => 'review',
        'posts_per_page' => 5,
        'orderby'        => 'rand',
        'order'          => 'DESC',
        'post_status'    => 'publish',
    )
);

$game_ids = array();

$game_query = new WP_Query(
    array(
        'post_type'      => 'post',
        'posts_per_page' => 5,
        'orderby'        => 'rand',
        'order'          => 'DESC',
        'post_status'    => 'publish',
    )
);

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
?>
<div class="home-directory">
    <section class="directory-hero">
        <div class="container">
            <div class="directory-wrapper">
                <div class="directory-left">
                    <span class="directory-kicker">Game directory</span>
                    <h1 class="directory-title">Find games, reviews and guides faster.</h1>
                    <form class="directory-search" action="<?php echo esc_url( $review_archive_url ); ?>">
                        <?php $key = isset( $_GET['key'] ) ? sanitize_text_field( $_GET['key'] ) : ''; ?>
                        <input type="text" name="key" value="<?php echo esc_attr( $key ); ?>" placeholder="Search games or reviews" aria-label="Search games or reviews" />
                        <button type="submit">Search</button>
                    </form>
                    <div class="directory-quick-links" aria-label="Quick links">
                        <?php foreach ( $quick_links as $quick_link ) : ?>
                            <a href="<?php echo esc_url( $quick_link['url'] ); ?>"><?php echo esc_html( $quick_link['label'] ); ?></a>
                        <?php endforeach; ?>
                    </div>
                </div>

                <aside class="directory-right top-rated-panel">
                    <div class="top-rated-head">
                        <span>Top rated</span>
                        <a href="<?php echo esc_url( $latest_review_url ); ?>">All reviews</a>
                    </div>
                    <?php if ( $review_query->have_posts() ) : ?>
                        <div class="top-rated-list">
                            <?php
                            $top_index = 0;
                            while ( $review_query->have_posts() && $top_index < 3 ) :
                                $review_query->the_post();
                                $top_index++;
                                $game_ids[] = get_the_ID();
                                ?>
                                <a class="top-rated-item" href="<?php echo esc_url( get_permalink() ); ?>">
                                    <span class="top-rated-rank"><?php echo esc_html( str_pad( (string) $top_index, 2, '0', STR_PAD_LEFT ) ); ?></span>
                                    <span class="top-rated-title"><?php echo esc_html( get_the_title() ); ?></span>
                                    <span class="score-badge">4.5</span>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                    <?php wp_reset_postdata(); ?>
                </aside>
            </div>
        </div>
    </section>

    <div class="container">
        <?php if ( $featured_post ) : ?>
            <section class="home-section featured-compact-section">
                <a class="featured-compact-card" href="<?php echo esc_url( get_permalink( $featured_post_id ) ); ?>">
                    <span class="featured-compact-image" style="background-image: url(<?php echo esc_url( $featured_img ); ?>)"></span>
                    <span class="featured-compact-content">
                        <span class="home-section-label">Featured pick</span>
                        <strong><?php echo esc_html( get_the_title( $featured_post_id ) ); ?></strong>
                    </span>
                </a>
            </section>
        <?php endif; ?>

        <section class="home-section platform-section">
            <div class="home-section-head">
                <div>
                    <span class="home-section-label">Browse</span>
                    <h2 class="home-section-title">Start by platform</h2>
                </div>
                <a class="home-view-more" href="<?php echo esc_url( $popular_games_url ); ?>">View games</a>
            </div>
            <div class="platform-grid">
                <a class="platform-card" href="<?php echo esc_url( add_query_arg( 'key', 'pc', $review_archive_url ) ); ?>">
                    <span>PC</span>
                    <strong>Desktop picks</strong>
                </a>
                <a class="platform-card" href="<?php echo esc_url( add_query_arg( 'key', 'console', $review_archive_url ) ); ?>">
                    <span>Console</span>
                    <strong>Big screen games</strong>
                </a>
                <a class="platform-card" href="<?php echo esc_url( add_query_arg( 'key', 'mobile', $review_archive_url ) ); ?>">
                    <span>Mobile</span>
                    <strong>Play anywhere</strong>
                </a>
                <a class="platform-card" href="<?php echo esc_url( $latest_review_url ); ?>">
                    <span>Reviews</span>
                    <strong>Rated by editors</strong>
                </a>
            </div>
        </section>

        <?php if ( $game_query->have_posts() ) : ?>
            <section class="home-section game-directory-section">
                <div class="home-section-head">
                    <div>
                        <span class="home-section-label">Popular games</span>
                        <h2 class="home-section-title">Game rows</h2>
                    </div>
                    <a class="home-view-more" href="<?php echo esc_url( $popular_games_url ); ?>">View all</a>
                </div>
                <div class="game-row-list">
                    <?php
                    while ( $game_query->have_posts() ) :
                        $game_query->the_post();
                        $item_img = has_post_thumbnail( get_the_ID() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : $fallback_img;
                        ?>
                        <a class="game-row-item" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span class="game-row-image" style="background-image: url(<?php echo esc_url( $item_img ); ?>)"></span>
                            <span class="game-row-content">
                                <strong><?php echo esc_html( get_the_title() ); ?></strong>
                                <span>Game profile</span>
                            </span>
                            <span class="game-row-action">Open</span>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </section>
        <?php endif; ?>

        <?php
        $review_query->rewind_posts();
        if ( $review_query->have_posts() ) :
            ?>
            <section class="home-section review-score-section">
                <div class="home-section-head">
                    <div>
                        <span class="home-section-label">Reviews</span>
                        <h2 class="home-section-title">Score cards</h2>
                    </div>
                    <a class="home-view-more" href="<?php echo esc_url( $latest_review_url ); ?>">View all</a>
                </div>
                <div class="review-score-list">
                    <?php
                    while ( $review_query->have_posts() ) :
                        $review_query->the_post();
                        $item_img = has_post_thumbnail( get_the_ID() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : $fallback_img;
                        ?>
                        <a class="review-score-card" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span class="review-score-image" style="background-image: url(<?php echo esc_url( $item_img ); ?>)"></span>
                            <span class="review-score-content">
                                <span class="score-badge">4.5</span>
                                <strong><?php echo esc_html( get_the_title() ); ?></strong>
                            </span>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </section>
        <?php endif; ?>

        <?php if ( $blog_query->have_posts() ) : ?>
            <section class="home-section news-guide-section">
                <div class="home-section-head">
                    <div>
                        <span class="home-section-label">Blogs</span>
                        <h2 class="home-section-title">Latest notes</h2>
                    </div>
                    <a class="home-view-more" href="<?php echo esc_url( $latest_blog_url ); ?>">View all</a>
                </div>
                <div class="news-guide-list">
                    <?php
                    while ( $blog_query->have_posts() ) :
                        $blog_query->the_post();
                        $item_img  = has_post_thumbnail( get_the_ID() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : $fallback_img;
                        $tags_post = get_the_tags( get_the_ID() );
                        $tag_name  = ! empty( $tags_post ) ? $tags_post[0]->name : 'Blog';
                        ?>
                        <a class="news-guide-item" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span class="news-guide-image" style="background-image: url(<?php echo esc_url( $item_img ); ?>)"></span>
                            <span class="news-guide-content">
                                <span><?php echo esc_html( $tag_name ); ?></span>
                                <strong><?php echo esc_html( get_the_title() ); ?></strong>
                            </span>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </section>
        <?php endif; ?>
    </div>
</div>
<?php
get_footer();
