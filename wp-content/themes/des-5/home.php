<?php
/**
 * Template Name: Home
 */

get_header();

$des5_link = function( $field_name, $fallback_path ) {
    $field_value = function_exists( 'get_field' ) ? get_field( $field_name ) : '';

    if ( is_array( $field_value ) && ! empty( $field_value['url'] ) ) {
        return esc_url( $field_value['url'] );
    }

    if ( is_string( $field_value ) && '' !== $field_value ) {
        return esc_url( $field_value );
    }

    return esc_url( home_url( $fallback_path ) );
};

$des5_image = function( $post_id, $size = 'large' ) {
    $image = get_the_post_thumbnail_url( $post_id, $size );

    if ( $image ) {
        return esc_url( $image );
    }

    return esc_url( get_stylesheet_directory_uri() . '/images/android.png' );
};

$des5_label = function( $post_id, $fallback = 'Article' ) {
    $categories = get_the_category( $post_id );

    if ( ! empty( $categories ) && 'uncategorized' !== $categories[0]->slug ) {
        return esc_html( $categories[0]->name );
    }

    $tags = get_the_tags( $post_id );

    if ( ! empty( $tags ) ) {
        return esc_html( $tags[0]->name );
    }

    return esc_html( $fallback );
};

$des5_excerpt = function( $post_id, $words = 24 ) {
    $raw_excerpt = has_excerpt( $post_id ) ? get_the_excerpt( $post_id ) : get_post_field( 'post_content', $post_id );
    $clean_text   = wp_strip_all_tags( strip_shortcodes( $raw_excerpt ) );

    return esc_html( wp_trim_words( $clean_text, $words ) );
};

$blog_link   = $des5_link( 'latest_blog', '/blogs/' );
$review_link = $des5_link( 'latest_review', '/reviews/' );
$game_link   = $des5_link( 'popular_games', '/html5-games/' );
$game_ids    = array();

$blog_query = new WP_Query(
    array(
        'post_type'      => 'blog',
        'posts_per_page' => 3,
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
        'post__not_in'   => $game_ids,
        'orderby'        => 'rand',
        'order'          => 'DESC',
        'post_status'    => 'publish',
    )
);

$blog_posts   = $blog_query->posts;
$review_posts = $review_query->posts;
$game_posts   = $game_query->posts;
$lead_blog    = ! empty( $blog_posts ) ? $blog_posts[0] : null;
?>

<div class="des5-home-page">
    <section class="des5-front-page" aria-label="Front page">
        <div class="container">
            <div class="des5-issue-rule">
                <span>Front Page</span>
                <a href="<?php echo $review_link; ?>">Review Archive</a>
            </div>

            <div class="des5-front-grid">
                <?php if ( $lead_blog ) : ?>
                    <article class="des5-lead-story">
                        <a class="des5-lead-media" href="<?php echo esc_url( get_permalink( $lead_blog ) ); ?>">
                            <img src="<?php echo $des5_image( $lead_blog->ID, 'large' ); ?>" alt="<?php echo esc_attr( get_the_title( $lead_blog ) ); ?>" loading="eager">
                        </a>
                        <div class="des5-kicker"><?php echo $des5_label( $lead_blog->ID, 'Blog' ); ?></div>
                        <h1>
                            <a href="<?php echo esc_url( get_permalink( $lead_blog ) ); ?>"><?php echo esc_html( get_the_title( $lead_blog ) ); ?></a>
                        </h1>
                        <p><?php echo $des5_excerpt( $lead_blog->ID, 16 ); ?></p>
                        <div class="des5-meta"><?php echo esc_html( get_the_date( 'M j, Y', $lead_blog ) ); ?></div>
                    </article>
                <?php endif; ?>

                <?php if ( ! empty( $review_posts ) || ! empty( $game_posts ) ) : ?>
                    <aside class="des5-front-stack" aria-label="Front page queue">
                        <?php if ( ! empty( $review_posts ) ) : ?>
                            <section class="des5-front-stack-block des5-wire-list" aria-label="Review wire">
                                <div class="des5-ribbon">Review Wire</div>
                                <?php foreach ( array_slice( $review_posts, 0, 3 ) as $index => $review_post ) : ?>
                                    <a class="des5-wire-item" href="<?php echo esc_url( get_permalink( $review_post ) ); ?>">
                                        <span><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
                                        <h2><?php echo esc_html( get_the_title( $review_post ) ); ?></h2>
                                    </a>
                                <?php endforeach; ?>
                            </section>
                        <?php endif; ?>

                        <?php if ( ! empty( $game_posts ) ) : ?>
                            <section class="des5-front-stack-block des5-game-rail" aria-label="Game rail">
                                <div class="des5-ribbon">Game Queue</div>
                                <?php foreach ( array_slice( $game_posts, 0, 2 ) as $game_post ) : ?>
                                    <a class="des5-game-rail-item" href="<?php echo esc_url( get_permalink( $game_post ) ); ?>">
                                        <img src="<?php echo $des5_image( $game_post->ID, 'medium' ); ?>" alt="<?php echo esc_attr( get_the_title( $game_post ) ); ?>" loading="lazy">
                                        <h2><?php echo esc_html( get_the_title( $game_post ) ); ?></h2>
                                    </a>
                                <?php endforeach; ?>
                            </section>
                        <?php endif; ?>
                    </aside>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <?php if ( ! empty( $blog_posts ) ) : ?>
        <section class="des5-home-section des5-blog-ledger" aria-labelledby="des5-blogs-title">
            <div class="container">
                <div class="des5-section-head">
                    <p>Blogs</p>
                    <h2 id="des5-blogs-title">Notebook</h2>
                    <a href="<?php echo $blog_link; ?>">All blogs</a>
                </div>

                <div class="des5-ledger-list">
                    <?php foreach ( $blog_posts as $index => $blog_post ) : ?>
                        <article class="des5-ledger-item">
                            <span><?php echo esc_html( str_pad( (string) ( $index + 1 ), 2, '0', STR_PAD_LEFT ) ); ?></span>
                            <div class="des5-ledger-copy">
                                <div class="des5-kicker"><?php echo $des5_label( $blog_post->ID, 'Blog' ); ?></div>
                                <h3>
                                    <a href="<?php echo esc_url( get_permalink( $blog_post ) ); ?>"><?php echo esc_html( get_the_title( $blog_post ) ); ?></a>
                                </h3>
                                <p><?php echo $des5_excerpt( $blog_post->ID, 16 ); ?></p>
                                <div class="des5-meta"><?php echo esc_html( get_the_date( 'M j, Y', $blog_post ) ); ?></div>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ( ! empty( $review_posts ) ) : ?>
        <section class="des5-home-section des5-review-desk" aria-labelledby="des5-reviews-title">
            <div class="container">
                <div class="des5-section-head">
                    <p>Reviews</p>
                    <h2 id="des5-reviews-title">Critic Picks</h2>
                    <a href="<?php echo $review_link; ?>">All reviews</a>
                </div>

                <div class="des5-review-grid">
                    <?php foreach ( $review_posts as $index => $review_post ) : ?>
                        <article class="des5-review-tile<?php echo 0 === $index ? ' is-featured' : ''; ?>">
                            <a class="des5-review-media" href="<?php echo esc_url( get_permalink( $review_post ) ); ?>">
                                <img src="<?php echo $des5_image( $review_post->ID, 0 === $index ? 'large' : 'medium' ); ?>" alt="<?php echo esc_attr( get_the_title( $review_post ) ); ?>" loading="lazy">
                            </a>
                            <div class="des5-kicker">Review</div>
                            <h3>
                                <a href="<?php echo esc_url( get_permalink( $review_post ) ); ?>"><?php echo esc_html( get_the_title( $review_post ) ); ?></a>
                            </h3>
                            <?php if ( 0 === $index ) : ?>
                                <p><?php echo $des5_excerpt( $review_post->ID, 18 ); ?></p>
                            <?php endif; ?>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>

    <?php if ( ! empty( $game_posts ) ) : ?>
        <section class="des5-home-section des5-game-index" aria-labelledby="des5-games-title">
            <div class="container">
                <div class="des5-section-head">
                    <p>Games</p>
                    <h2 id="des5-games-title">Game Shelf</h2>
                    <a href="<?php echo $game_link; ?>">All games</a>
                </div>

                <div class="des5-game-grid">
                    <?php foreach ( $game_posts as $index => $game_post ) : ?>
                        <article class="des5-game-tile">
                            <a class="des5-game-media" href="<?php echo esc_url( get_permalink( $game_post ) ); ?>">
                                <img src="<?php echo $des5_image( $game_post->ID, 'medium' ); ?>" alt="<?php echo esc_attr( get_the_title( $game_post ) ); ?>" loading="lazy">
                            </a>
                            <div>
                                <div class="des5-kicker"><?php echo $des5_label( $game_post->ID, 'Game' ); ?></div>
                                <h3>
                                    <a href="<?php echo esc_url( get_permalink( $game_post ) ); ?>"><?php echo esc_html( get_the_title( $game_post ) ); ?></a>
                                </h3>
                            </div>
                        </article>
                    <?php endforeach; ?>
                </div>
            </div>
        </section>
    <?php endif; ?>
</div>

<?php
wp_reset_postdata();
get_footer();
