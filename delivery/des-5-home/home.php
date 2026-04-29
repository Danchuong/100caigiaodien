<?php
/**
 * Template Name: Home
 */

get_header();

$des5_link = function( $field_name, $fallback_path ) {
    $field_value = function_exists( 'get_field' ) ? get_field( $field_name ) : '';

    return $field_value ? esc_url( $field_value ) : esc_url( home_url( $fallback_path ) );
};

$des5_image = function( $post_id ) {
    if ( has_post_thumbnail( $post_id ) ) {
        return esc_url( wp_get_attachment_url( get_post_thumbnail_id( $post_id ) ) );
    }

    return esc_url( get_stylesheet_directory_uri() . '/images/android.png' );
};

$des5_label = function( $post_id, $fallback = 'Article' ) {
    $tags = get_the_tags( $post_id );

    if ( ! empty( $tags ) ) {
        return esc_html( $tags[0]->name );
    }

    return esc_html( $fallback );
};

$blog_link   = $des5_link( 'latest_blog', '/blogs' );
$review_link = $des5_link( 'latest_review', '/reviews' );
$game_link   = $des5_link( 'popular_games', '/html5-games' );
$cover_ids   = array();

$cover_query = new WP_Query(
    array(
        'post_type'           => 'blog',
        'posts_per_page'      => 1,
        'orderby'             => 'date',
        'order'               => 'DESC',
        'post_status'         => 'publish',
        'ignore_sticky_posts' => true,
    )
);
?>

<div class="home-issue">
    <?php if ( $cover_query->have_posts() ) : ?>
        <?php
        $cover_query->the_post();
        $cover_ids[] = get_the_ID();
        ?>
        <section class="issue-cover" aria-label="Editorial cover">
            <div class="container">
                <div class="issue-cover-grid">
                    <aside class="issue-cover-index" aria-label="Issue index">
                        <div class="issue-small-title">Issue Index</div>
                        <a href="<?php echo $blog_link; ?>">Latest Blogs</a>
                        <a href="<?php echo $review_link; ?>">Reviews</a>
                        <a href="<?php echo $game_link; ?>">Games</a>
                    </aside>

                    <a class="issue-cover-art" href="<?php echo esc_url( get_permalink() ); ?>">
                        <img src="<?php echo $des5_image( get_the_ID() ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                    </a>

                    <div class="issue-cover-copy">
                        <div class="issue-kicker"><?php echo $des5_label( get_the_ID(), 'Latest Blog' ); ?></div>
                        <h1 class="issue-cover-title">
                            <a href="<?php echo esc_url( get_permalink() ); ?>"><?php echo esc_html( get_the_title() ); ?></a>
                        </h1>
                        <div class="issue-cover-meta"><?php echo esc_html( get_the_date( 'M j, Y' ) ); ?></div>
                        <a class="issue-link" href="<?php echo esc_url( get_permalink() ); ?>">Read article</a>
                    </div>
                </div>
            </div>
        </section>
        <?php wp_reset_postdata(); ?>
    <?php endif; ?>

    <section class="issue-section issue-editor-picks" aria-label="Editor picks">
        <div class="container">
            <div class="issue-section-head">
                <p>Editor Picks</p>
                <a href="<?php echo $review_link; ?>">View reviews</a>
            </div>

            <?php
            $editor_query = new WP_Query(
                array(
                    'post_type'           => 'review',
                    'posts_per_page'      => 3,
                    'orderby'             => 'date',
                    'order'               => 'DESC',
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true,
                )
            );
            ?>

            <?php if ( $editor_query->have_posts() ) : ?>
                <div class="editor-pick-grid">
                    <?php
                    $pick_number = 1;
                    while ( $editor_query->have_posts() ) :
                        $editor_query->the_post();
                        ?>
                        <a class="editor-pick-card" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span><?php echo esc_html( str_pad( $pick_number, 2, '0', STR_PAD_LEFT ) ); ?></span>
                            <h2><?php echo esc_html( get_the_title() ); ?></h2>
                            <p><?php echo esc_html( get_the_date( 'M j' ) ); ?></p>
                        </a>
                        <?php
                        $pick_number++;
                    endwhile;
                    ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="issue-section issue-notebook" aria-label="Latest blog notebook">
        <div class="container">
            <div class="issue-section-head">
                <p>Notebook</p>
                <a href="<?php echo $blog_link; ?>">All blogs</a>
            </div>

            <?php
            $blog_query = new WP_Query(
                array(
                    'post_type'           => 'blog',
                    'posts_per_page'      => 4,
                    'post__not_in'        => $cover_ids,
                    'orderby'             => 'date',
                    'order'               => 'DESC',
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true,
                )
            );
            ?>

            <?php if ( $blog_query->have_posts() ) : ?>
                <div class="notebook-list">
                    <?php
                    $note_number = 1;
                    while ( $blog_query->have_posts() ) :
                        $blog_query->the_post();
                        ?>
                        <a class="notebook-item" href="<?php echo esc_url( get_permalink() ); ?>">
                            <span><?php echo esc_html( str_pad( $note_number, 2, '0', STR_PAD_LEFT ) ); ?></span>
                            <div>
                                <p><?php echo $des5_label( get_the_ID(), 'Blog' ); ?></p>
                                <h3><?php echo esc_html( get_the_title() ); ?></h3>
                            </div>
                        </a>
                        <?php
                        $note_number++;
                    endwhile;
                    ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="issue-section issue-review-index" aria-label="Review index">
        <div class="container">
            <div class="issue-section-head">
                <p>Review Index</p>
                <a href="<?php echo $review_link; ?>">All reviews</a>
            </div>

            <?php
            $review_query = new WP_Query(
                array(
                    'post_type'           => 'review',
                    'posts_per_page'      => 4,
                    'orderby'             => 'rand',
                    'order'               => 'DESC',
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true,
                )
            );
            ?>

            <?php if ( $review_query->have_posts() ) : ?>
                <div class="review-index-grid">
                    <?php while ( $review_query->have_posts() ) : ?>
                        <?php $review_query->the_post(); ?>
                        <a class="review-index-card" href="<?php echo esc_url( get_permalink() ); ?>">
                            <img src="<?php echo $des5_image( get_the_ID() ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            <div>
                                <span>Review</span>
                                <h3><?php echo esc_html( get_the_title() ); ?></h3>
                            </div>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>

    <section class="issue-section issue-game-shelf" aria-label="Game shelf">
        <div class="container">
            <div class="issue-section-head">
                <p>Game Shelf</p>
                <a href="<?php echo $game_link; ?>">All games</a>
            </div>

            <?php
            $game_query = new WP_Query(
                array(
                    'post_type'           => 'post',
                    'posts_per_page'      => 6,
                    'orderby'             => 'rand',
                    'order'               => 'DESC',
                    'post_status'         => 'publish',
                    'ignore_sticky_posts' => true,
                )
            );
            ?>

            <?php if ( $game_query->have_posts() ) : ?>
                <div class="game-shelf-grid">
                    <?php while ( $game_query->have_posts() ) : ?>
                        <?php $game_query->the_post(); ?>
                        <a class="game-shelf-card" href="<?php echo esc_url( get_permalink() ); ?>">
                            <img src="<?php echo $des5_image( get_the_ID() ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
                            <h3><?php echo esc_html( get_the_title() ); ?></h3>
                        </a>
                    <?php endwhile; ?>
                </div>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php
get_footer();
