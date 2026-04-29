<?php
get_header(); ?>
    <div class="container">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo home_url(); ?>">Home</a>
                </li>
                <?php
                $tags = get_the_tags();
                if ( $tags && ! is_wp_error( $tags ) ) : 
                    $first_tag = $tags[0];
                ?>
                    <li class="breadcrumb-item">
                        <a href="/blogs/?tag=<?php echo $first_tag->slug; ?>">
                            <?php echo esc_html( $first_tag->name ); ?>
                        </a>
                    </li>
                <?php endif; ?>
                <li class="breadcrumb-item active">
                    <?php echo get_the_title(); ?>
                </li>
            </ol>
        </nav>
    </div>
<div class="single-blog-wrapper main-area">
    <div class="container">
        <div class="single-blog-content main-content">
             <div class="info-head mb-4">
                <h2 class="info-head-title"><?php echo get_the_title(); ?></h2>
            </div>
            <div class="mini-related mb-3">
                <h3>Popular Now</h3>
                <div class="mini-related-wrapper">
                <?php
                $related = new WP_Query(array(
                    'post_type' => 'post',
                    'posts_per_page' => 6,
                    'orderby' => 'rand'
                ));

                if ($related->have_posts()) :
                    while($related->have_posts()) : $related->the_post(); ?>
                    <a href="<?php the_permalink(); ?>" class="mini-related-item">
                        <div class="mini-related-bg"
                                style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>')">
                        </div>
                        <div class="mini-related-title"><?php echo get_the_title(); ?></div>
                    </a>
                <?php endwhile; endif; wp_reset_postdata(); ?>
                </div>
            </div>
                <?php echo get_the_content(); ?>
        </div>
    </div>
    <div class="related-section-lg">
    <div class="container">
        <h2 class="text-center mb-3">Latest Posts</h2>

        <div class="related-section-lg-wrapper">

            <div class="swiper related-section">

                <div class="swiper-wrapper">

                    <?php
                    $blog_args = array(
                        'post_type'      => 'blog',
                        'posts_per_page' => 9,
                        'post_status'    => 'publish',
                        'orderby'        => 'rand',
                        'order'          => 'DESC',
                    );
                    $blog_query = new WP_Query($blog_args);

                    if ($blog_query->have_posts()) :
                        while ($blog_query->have_posts()) : $blog_query->the_post();
                    ?>

                    <a href="<?php the_permalink(); ?>" class="swiper-slide related-section-item">
                        <div class="related-section-inner">

                            <div class="related-section-bg"
                                 style="background-image: url('<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: 'https://via.placeholder.com/600x400'); ?>')">
                            </div>

                            <div class="related-section-detail">
                                <div class="related-section-title">
                                    <?php the_title(); ?>
                                </div>
                                <div class="related-section-desc">
                                    <?php echo wp_trim_words(get_the_excerpt(), 12); ?>
                                </div>
                            </div>

                        </div>
                    </a>

                    <?php
                        endwhile;
                        wp_reset_postdata();
                    endif;
                    ?>

                </div> <!-- swiper-wrapper -->

            </div> <!-- swiper -->

        </div>
    </div>
</div>
    <div class="reviews-section-blog">
        <div class="container">
            <h2 class="title-list">Latest Reviews</h2>
            <div class="reviews-list slide3">
                <?php
                $review_args = array(
                    'post_type'      => 'review',
                    'posts_per_page' => 6,
                    'post_status'    => 'publish',
                    'orderby'   => 'rand',
                    'order' => 'DESC',
                );
                $review_query = new WP_Query($review_args);
                if ($review_query->have_posts()) : 
                    while ($review_query->have_posts()) : $review_query->the_post(); ?>
                        <a href="<?php the_permalink(); ?>" class="review-card">
                            <div class="review-card-inner">
                                <div class="review-card-head">
                                    <?php
                                    $thumb = get_the_post_thumbnail_url(get_the_ID(), 'medium') ?: 'https://via.placeholder.com/600x400';
                                    ?>
                                    <div class="review-card-bg"
                                            style="background-image: url('<?php echo esc_url($thumb); ?>')">
                                    </div>
                                    <div class="review-card-title">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                                <div class="review-card-desc">
                                    <?php echo wp_trim_words(get_the_excerpt(), 18); ?>
                                </div>
                                <div class="review-card-foot">
                                    <span class="rating">
                                        <span class="rating-stars r45"></span> 
                                    </span>
                                    <span class="review-card-btn">Read More</span>
                                </div>
                            </div>
                        </a>
                    <?php endwhile; 
                    wp_reset_postdata();
                else: ?>
                    <p>No reviews found.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>