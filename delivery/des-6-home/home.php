<?php
/**
 * Template Name: Home
 */
get_header();

$blog_archive_url   = home_url( '/blogs/' );
$review_archive_url = home_url( '/reviews/' );
$games_archive_url  = home_url( '/html5-games/' );

$latest_blog_url   = function_exists( 'get_field' ) ? get_field( 'latest_blog' ) : '';
$latest_review_url = function_exists( 'get_field' ) ? get_field( 'latest_review' ) : '';
$popular_games_url = function_exists( 'get_field' ) ? get_field( 'popular_games' ) : '';

$latest_blog_url   = $latest_blog_url ? $latest_blog_url : $blog_archive_url;
$latest_review_url = $latest_review_url ? $latest_review_url : $review_archive_url;
$popular_games_url = $popular_games_url ? $popular_games_url : $games_archive_url;

$shown_post_ids = array();
$track_posts    = function ( $query ) use ( &$shown_post_ids ) {
    if ( ! empty( $query->posts ) ) {
        $shown_post_ids = array_values( array_unique( array_merge( $shown_post_ids, wp_list_pluck( $query->posts, 'ID' ) ) ) );
    }
};

$feature_query = new WP_Query(
    array(
        'post_type'      => array( 'blog', 'review', 'post' ),
        'posts_per_page' => 5,
        'orderby'        => 'rand',
        'post_status'    => 'publish',
    )
);
$track_posts( $feature_query );

$blog_query = new WP_Query(
    array(
        'post_type'      => 'blog',
        'posts_per_page' => 4,
        'orderby'        => 'rand',
        'order'          => 'DESC',
        'post_status'    => 'publish',
        'post__not_in'   => $shown_post_ids,
    )
);
$track_posts( $blog_query );

$headline_query = new WP_Query(
    array(
        'post_type'           => array( 'blog', 'review', 'post' ),
        'posts_per_page'      => 6,
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true,
        'post__not_in'        => $shown_post_ids,
    )
);
$track_posts( $headline_query );

$review_query = new WP_Query(
    array(
        'post_type'      => 'review',
        'posts_per_page' => 5,
        'orderby'        => 'rand',
        'order'          => 'DESC',
        'post_status'    => 'publish',
        'post__not_in'   => $shown_post_ids,
    )
);
$track_posts( $review_query );

$game_query = new WP_Query(
    array(
        'post_type'      => 'post',
        'posts_per_page' => 5,
        'orderby'        => 'rand',
        'order'          => 'DESC',
        'post_status'    => 'publish',
        'post__not_in'   => $shown_post_ids,
    )
);
$track_posts( $game_query );
?>
<div class="home-news-desk">
    <section class="latest-rail-section">
        <div class="container">
            <div class="latest-rail-head">
                <div>
                    <span class="section-kicker">Latest rotation</span>
                    <h1>Today's gaming headlines in one fast rail.</h1>
                </div>
                <div class="latest-rail-actions">
                    <a href="<?php echo esc_url( $latest_blog_url ); ?>">Blogs</a>
                    <a href="<?php echo esc_url( $latest_review_url ); ?>">Reviews</a>
                    <a href="<?php echo esc_url( $popular_games_url ); ?>">Games</a>
                </div>
            </div>

            <?php if ( $feature_query->have_posts() ) : ?>
                <div class="feature-rail" aria-label="Featured stories">
                    <?php
                    $feature_index = 0;
                    while ( $feature_query->have_posts() ) :
                        $feature_query->the_post();
                        $feature_index++;
                        $post_type  = get_post_type();
                        $type_label = 'Game';

                        if ( 'blog' === $post_type ) {
                            $type_label = 'Blog';
                        } elseif ( 'review' === $post_type ) {
                            $type_label = 'Review';
                        }

                        $feature_img = has_post_thumbnail( get_the_ID() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : '';
                        $image_class = $feature_img ? ' has-image' : ' no-image';
                        ?>
                        <a class="feature-card<?php echo 1 === $feature_index ? ' feature-card-lead' : ''; ?>" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span class="feature-card-image<?php echo esc_attr( $image_class ); ?>"<?php echo $feature_img ? ' style="background-image: url(' . esc_url( $feature_img ) . ')"' : ''; ?>></span>
                            <span class="feature-card-body">
                                <span><?php echo esc_html( $type_label ); ?></span>
                                <strong><?php echo esc_html( get_the_title() ); ?></strong>
                            </span>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

    <div class="container">
        <section class="home-section news-desk-section">
            <div class="home-section-head">
                <div>
                    <span class="section-kicker">Latest</span>
                    <h2>News desk</h2>
                </div>
                <a class="section-link" href="<?php echo esc_url( $latest_blog_url ); ?>">View blogs</a>
            </div>

            <div class="news-desk-grid">
                <?php if ( $blog_query->have_posts() ) : ?>
                    <div class="blog-card-grid" aria-label="Latest blog stories">
                        <?php
                        while ( $blog_query->have_posts() ) :
                            $blog_query->the_post();
                            $blog_img   = has_post_thumbnail( get_the_ID() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : '';
                            $image_class = $blog_img ? ' has-image' : ' no-image';
                            $tags_post   = get_the_tags( get_the_ID() );
                            $tag_name    = ! empty( $tags_post ) ? $tags_post[0]->name : 'Blog';
                            ?>
                            <a class="blog-desk-card" href="<?php echo esc_url( get_permalink() ); ?>">
                                <span class="blog-desk-image<?php echo esc_attr( $image_class ); ?>"<?php echo $blog_img ? ' style="background-image: url(' . esc_url( $blog_img ) . ')"' : ''; ?>></span>
                                <span class="blog-desk-body">
                                    <span><?php echo esc_html( $tag_name ); ?></span>
                                    <strong><?php echo esc_html( get_the_title() ); ?></strong>
                                </span>
                            </a>
                        <?php endwhile; ?>
                    </div>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>

                <?php if ( $headline_query->have_posts() ) : ?>
                    <aside class="headline-list-panel">
                        <div class="headline-list-title">Headlines</div>
                        <div class="headline-list">
                            <?php
                            $headline_index = 0;
                            while ( $headline_query->have_posts() ) :
                                $headline_query->the_post();
                                $headline_index++;
                                ?>
                                <a class="headline-item" href="<?php echo esc_url( get_permalink() ); ?>">
                                    <span><?php echo esc_html( str_pad( (string) $headline_index, 2, '0', STR_PAD_LEFT ) ); ?></span>
                                    <strong><?php echo esc_html( get_the_title() ); ?></strong>
                                </a>
                            <?php endwhile; ?>
                        </div>
                    </aside>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </section>

        <?php if ( $review_query->have_posts() ) : ?>
            <section class="home-section review-desk-section">
                <div class="home-section-head">
                    <div>
                        <span class="section-kicker">Reviews</span>
                        <h2>Score lane</h2>
                    </div>
                    <a class="section-link" href="<?php echo esc_url( $latest_review_url ); ?>">View reviews</a>
                </div>
                <div class="review-lane">
                    <?php
                    while ( $review_query->have_posts() ) :
                        $review_query->the_post();
                        $review_img  = has_post_thumbnail( get_the_ID() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : '';
                        $image_class = $review_img ? ' has-image' : ' no-image';
                        $tags_post   = get_the_tags( get_the_ID() );
                        $categories  = get_the_category( get_the_ID() );
                        $review_label = ! empty( $tags_post ) ? $tags_post[0]->name : 'Review';

                        if ( 'Review' === $review_label && ! empty( $categories ) ) {
                            $review_label = $categories[0]->name;
                        }
                        ?>
                        <a class="review-lane-card" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span class="review-lane-image<?php echo esc_attr( $image_class ); ?>"<?php echo $review_img ? ' style="background-image: url(' . esc_url( $review_img ) . ')"' : ''; ?>></span>
                            <span class="review-lane-body">
                                <span class="score-pill"><?php echo esc_html( $review_label ); ?></span>
                                <strong><?php echo esc_html( get_the_title() ); ?></strong>
                            </span>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            </section>
        <?php endif; ?>

        <?php if ( $game_query->have_posts() ) : ?>
            <section class="home-section game-desk-section">
                <div class="home-section-head">
                    <div>
                        <span class="section-kicker">Games</span>
                        <h2>Play queue</h2>
                    </div>
                    <a class="section-link" href="<?php echo esc_url( $popular_games_url ); ?>">View games</a>
                </div>
                <div class="game-queue-list">
                    <?php
                    while ( $game_query->have_posts() ) :
                        $game_query->the_post();
                        $game_img    = has_post_thumbnail( get_the_ID() ) ? wp_get_attachment_url( get_post_thumbnail_id( get_the_ID() ) ) : '';
                        $image_class = $game_img ? ' has-image' : ' no-image';
                        ?>
                        <a class="game-queue-item" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span class="game-queue-image<?php echo esc_attr( $image_class ); ?>"<?php echo $game_img ? ' style="background-image: url(' . esc_url( $game_img ) . ')"' : ''; ?>></span>
                            <span class="game-queue-body">
                                <strong><?php echo esc_html( get_the_title() ); ?></strong>
                                <span>Open game</span>
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
