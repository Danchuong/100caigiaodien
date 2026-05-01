<?php get_header(); ?>
    <div class="container">

        <!-- Breadcrumb -->
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="<?php echo home_url(); ?>">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="<?php echo esc_url( home_url( '/reviews/' ) ); ?>">Reviews</a>
                </li>
                <li class="breadcrumb-item active"><?php the_title(); ?></li>
            </ol>
        </nav>

    </div>

<div class="main-area">
    <div class="container">

        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <div class="page-wrapper">

            <!-- MAIN -->
            <aside class="main-content">

                <!-- HEAD -->
                <div class="info-head mb-4">
                    <div class="info-head-left">

                        <?php $thumb = get_the_post_thumbnail_url(get_the_ID(), 'large'); ?>

                        <div class="info-head-bg"
                             style="background-image: url('<?php echo esc_url($thumb); ?>')">
                        </div>

                        <div class="info-head-detail">
                            <div class="info-head-title"><?php the_title(); ?></div>

                            <span class="rating">
                                <span class="rating-stars r45"></span>
                            </span>

                            <div class="info-head-desc">All trademarks belong to their respective owners.
                            </div>
                        </div>
                    </div>

                    <!-- CTA -->
                    <a class="btn btn-lg primary-btn glow-on-hover"
                       href="<?php echo home_url('/detail/' . $post->post_name); ?>">
                        Get Game Links
                    </a>
                </div>
                <div class="mini-related mb-4">
                    <h2 class="mb-2">Popular Now</h2>

                    <div class="mini-related-wrapper">

                        <?php
                        $popular_reviews = new WP_Query([
                            'post_type' => 'review',
                            'posts_per_page' => 8,
                            'orderby' => 'rand' // hoặc 'date' nếu muốn bài mới
                        ]);

                        while ($popular_reviews->have_posts()) : $popular_reviews->the_post();
                        ?>

                        <a href="<?php echo home_url('/detail/' . get_post_field('post_name', get_the_ID())); ?>" class="mini-related-item">

                            <div class="mini-related-bg"
                                 style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>')">
                            </div>

                            <div class="mini-related-title">
                                <?php the_title(); ?>
                            </div>

                        </a>

                        <?php endwhile; wp_reset_postdata(); ?>

                    </div>
                </div>
                <!-- CONTENT -->
                <div class="post-content">
                    <?php the_content(); ?>
                </div>

            </aside>

            <!-- SIDEBAR -->
            <aside class="sidebar">

                <h3 class="mb-3">Popular Reviews</h3>

                <div class="sidebar-item-wrapper mb-5">

                    <?php
                    $popular = new WP_Query([
                        'post_type' => 'review',
                        'posts_per_page' => 5,
                        'orderby' => 'rand'
                    ]);

                    while ($popular->have_posts()) : $popular->the_post();
                    ?>

                    <a href="<?php the_permalink(); ?>" class="sidebar-item">
                        <div class="sidebar-item-bg"
                             style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>')">
                        </div>
                        <div class="sidebar-item-detail">
                            <div class="sidebar-item-title"><?php the_title(); ?></div>
                            <div class="sidebar-item-desc">
                                <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
                            </div>

                            <span class="rating">
                                <span class="rating-stars r45"></span>
                            </span>
                        </div>
                    </a>

                    <?php endwhile; wp_reset_postdata(); ?>
                </div>

                <h2 class="mb-3">More Games</h2>

                <div class="games-grid">

                    <?php
                    $related = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 20,
                        'post__not_in' => array(get_the_ID()),
                        'orderby'        => 'rand'
                    ));

                    while($related->have_posts()) : $related->the_post();
                    ?>

                    <a class="item"
                       href="<?php the_permalink(); ?>"
                       style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>')">
                        <span><?php the_title(); ?></span>
                    </a>

                    <?php endwhile; wp_reset_postdata(); ?>
                </div>
            </aside>

        </div>

        <?php endwhile; endif; ?>

    </div>

    <!-- 🔥 LATEST BLOG POSTS -->
    <div class="related-section-lg">
        <div class="container">
            <h2 class="text-center mb-3">Latest Posts</h2>

            <div class="related-section-lg-wrapper">

                <!-- ✅ THÊM swiper -->
                <div class="swiper related-section">

                    <!-- ✅ THÊM swiper-wrapper -->
                    <div class="swiper-wrapper">

                        <?php
                        $blogs = new WP_Query([
                            'post_type' => 'post',
                            'posts_per_page' => 8
                        ]);

                        while ($blogs->have_posts()) : $blogs->the_post();
                        ?>

                        <a href="<?php the_permalink(); ?>" class="swiper-slide related-section-item">
                            <div class="related-section-inner">

                                <div class="related-section-bg"
                                     style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>')">
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

                        <?php endwhile; wp_reset_postdata(); ?>

                    </div> <!-- swiper-wrapper -->

                </div> <!-- swiper -->

            </div>
        </div>
    </div>

    <!-- 🔥 LATEST REVIEWS -->
    <div class="container">
        <div class="page-head">
            <h2 class="page-title">Latest Reviews</h2>
        </div>

        <div class="reviews-list slide3">

            <?php
            $latest_reviews = new WP_Query([
                'post_type' => 'review',
                'posts_per_page' => 6
            ]);

            while ($latest_reviews->have_posts()) : $latest_reviews->the_post();
            ?>

            <a href="<?php the_permalink(); ?>" class="review-card">
                <div class="review-card-inner">

                    <div class="review-card-head">
                        <div class="review-card-bg"
                             style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>')">
                        </div>

                        <div class="review-card-title">
                            <?php the_title(); ?>
                        </div>
                    </div>

                    <div class="review-card-desc">
                        <?php echo wp_trim_words(get_the_excerpt(), 15); ?>
                    </div>

                    <div class="review-card-foot">
                        <span class="rating">
                           <span class="rating-stars r45"></span>
                        </span>

                        <span class="review-card-btn">Read More</span>
                    </div>

                </div>
            </a>

            <?php endwhile; wp_reset_postdata(); ?>

        </div>
    </div>

</div>

<?php get_footer(); ?>
