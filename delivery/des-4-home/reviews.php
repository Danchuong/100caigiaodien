<?php /* Template Name: Reviews */
get_header();

$key   = isset( $_GET['key'] ) ? sanitize_text_field( wp_unslash( $_GET['key'] ) ) : '';
$paged = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;

$review_args = array(
    'post_type'      => 'review',
    'post_status'    => 'publish',
    'posts_per_page' => get_option( 'posts_per_page' ),
    'paged'          => $paged,
);

if (!empty( $key ) ) {
    $review_args['s'] = $key;
}

$review_query = new WP_Query( $review_args );
?>
<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="<?php echo esc_url( home_url() ); ?>">Home</a></li>
            <li class="breadcrumb-item active">Reviews</li>
        </ol>
    </nav>

    <?php if ( empty( $key ) ) : ?>
        <div class="page-head">
            <h1 class="page-title">Reviews</h1>
            <div class="page-desc">Browse recent game reviews and critic notes.</div>
        </div>
    <?php else : ?>
        <div class="page-head">
            <h1 class="page-title">Review search</h1>
            <div class="page-desc">Showing review matches for "<?php echo esc_html( $key ); ?>".</div>
        </div>
    <?php endif; ?>

    <div class="main-area <?php echo $key ? 'have-search' : ''; ?>">
        <div>
            <?php if ( $key ) : ?>
                <p class="search-title">Reviews</p>
            <?php endif; ?>
            <div class="reviews-list">
                <?php if ( $review_query->have_posts() ) : while ( $review_query->have_posts() ) : $review_query->the_post();
                    $thumb = get_the_post_thumbnail_url( get_the_ID(), 'medium' );
                ?>
                    <a href="<?php the_permalink(); ?>" class="review-card">
                        <div class="review-card-inner">
                            <div class="review-card-head">
                                <?php if ( $thumb ) : ?>
                                <div class="review-card-bg" style="background-image:url('<?php echo esc_url( $thumb ); ?>')"></div>
                                <?php endif; ?>
                                <div class="review-card-title"><?php echo esc_html( get_the_title() ); ?></div>
                            </div>
                            <div class="review-card-desc"><?php echo esc_html( wp_trim_words( get_the_excerpt(), 18 ) ); ?></div>
                            <div class="review-card-foot">
                                <span class="review-card-btn">Read Review</span>
                            </div>
                        </div>
                    </a>
                <?php endwhile; else: ?>
                    <p><?php echo $key ? 'No reviews found for "' . esc_html( $key ) . '".' : 'No reviews found.'; ?></p>
                <?php endif; wp_reset_postdata(); ?>
            </div>

            <nav aria-label="Page navigation">
                <ul class="pagination">

                    <?php
                    $links = paginate_links([
                        'total'     => $review_query->max_num_pages,
                        'current'   => $paged,
                        'prev_text' => '&lt;',
                        'next_text' => '&gt;',
                        'type'      => 'array',
                        'add_args'  => $key ? ['key' => $key] : [],
                    ]);

                    if ($links) {
                        foreach ($links as $link) {
                            $active = strpos($link, 'current') !== false ? ' active' : '';
                            echo '<li class="page-item' . $active . '">';
                            echo str_replace('page-numbers', 'page-link', $link);
                            echo '</li>';
                        }
                    }
                    ?>

                </ul>
            </nav>
        </div>
        <?php if ( $key ) : ?>
        <div class="sidebar-searchgames">
            <p class="search-title">Games</p>
            <div class="sidebar-gameitems">
                <?php
                $sidebar_posts = new WP_Query([
                    'post_type'      => 'post',
                    'post_status'    => 'publish',
                    'posts_per_page' => 12,
                    'orderby'   => 'rand',
                    'order' => 'DESC',
                    's'              => $key,
                ]);
                if ( $sidebar_posts->have_posts() ) :
                    while ( $sidebar_posts->have_posts() ) : $sidebar_posts->the_post();
                        $s_thumb = get_the_post_thumbnail_url( get_the_ID(), 'full' ); ?>
                    <a href="<?php the_permalink(); ?>">
                        <div class="sidebar-gameitem">
                            <?php if ( $s_thumb ) : ?>
                            <img src="<?php echo esc_url( $s_thumb ); ?>"
                                class="sidebar-gameitem-thumb"
                                alt="<?php the_title_attribute(); ?>">
                            <?php endif; ?>
                            <div>
                                <p class="sidebar-gameitem-title"><?php echo esc_html( get_the_title() ); ?></p>
                            </div>
                        </div>
                    </a>
                <?php endwhile; endif; wp_reset_postdata(); ?>
            </div>
        </div>
        <?php endif; ?>
    </div>
</div>

<?php get_footer(); ?>
