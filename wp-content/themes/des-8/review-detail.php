<?php get_header(); ?>

<div class="container">

    <!-- Breadcrumb -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo home_url(); ?>">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="<?php echo home_url('/review'); ?>">HTML5 Games</a>
            </li>
            <li class="breadcrumb-item active">
                <?php the_title(); ?>
            </li>
        </ol>
    </nav>
</div>

<div class="main-area">
<?php
$slug = get_query_var('review_detail_slug');
$review = get_page_by_path($slug, OBJECT, 'review');

if ($review):

global $post;
$post = $review;
setup_postdata($post);

$thumb = get_the_post_thumbnail_url(get_the_ID(), 'large');
?>

<div class="container">

    <div class="page-wrapper">

        <!-- MAIN -->
        <aside class="main-content">

            <div class="info-head mb-4">
                <div class="info-head-left">

                    <div class="info-head-bg"
                         style="background-image:url('<?php echo esc_url($thumb); ?>')">
                    </div>

                    <div class="info-head-detail">
                        <h1 class="info-head-title"><?php the_title(); ?></h1>

                        <span class="rating">
                            <span class="rating-stars r45"></span>
                        </span>

                        <div class="info-head-desc">
                            All trademarks belong to their respective owners.
                        </div>
                    </div>
                </div>

                <!-- CTA -->
                <a class="btn btn-lg primary-btn glow-on-hover adsver" href="<?php echo esc_url( home_url( '/html5-games/' ) ); ?>">
                    <div>🔒 UNLOCK BONUS</div>
                    <div class="primary-btn-sub">Watch a rewarded ad to discover curated HTML5 games</div>
                </a>
            </div>

            <!-- SCREENSHOTS -->
            <?php
            $gallery = get_field('review_gallery'); // ACF

            if ($gallery):
            ?>

            <h3>Screenshots</h3>
            <div class="screenshots-wrapper mb-5">
                <div class="swiper screenshots">
                    <div class="swiper-wrapper">

                        <?php foreach ($gallery as $image):

                            if (!empty($image['thumbnail_image_url'])) {
                                $image_url = $image['thumbnail_image_url'];
                            } elseif (!empty($image['full_image_url'])) {
                                $image_url = $image['full_image_url'];
                            } else {
                                continue;
                            }

                        ?>
                            <div class="swiper-slide screenshot-item">
                                <div class="screenshot-bg"
                                     style="background-image: url('<?php echo esc_url($image_url); ?>')">
                                </div>
                            </div>
                        <?php endforeach; ?>

                    </div>
                </div>
            </div>

            <!-- ✅ chỉ load khi có data -->
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    new Swiper(".screenshots", {
                        slidesPerView: "auto",
                    });
                });
            </script>

            <?php endif; ?>

            <!-- summary -->
            <h2>Summary</h2>
            <div class="mb-5">
                <?php the_excerpt(); ?>
            </div>

            <!-- rating -->
            <?php
            $post_id = get_the_ID();

            $fields = [
                'Graphics and Sound' => get_field('graphics_and_sound', $post_id),
                'Controls' => get_field('controls', $post_id),
                'Gameplay' => get_field('gameplay', $post_id),
                'Lasting Appeal' => get_field('lasting_appeal', $post_id),
            ];
            ?>

            <div class="rating-lines mb-5">

            <?php foreach ($fields as $label => $value):

                if ($value === null || $value === '') continue;

                $value = floatval($value);
                $percent = ($value / 5) * 100;
            ?>

                <div class="rating-line-item">
                    <div class="rating-title"><?php echo esc_html($label); ?></div>

                    <div class="pro-line">
                        <div style="width: <?php echo esc_attr($percent); ?>%"></div>
                    </div>

                    <div class="scores">
                        <?php echo esc_html($value); ?>
                    </div>
                </div>

            <?php endforeach; ?>

            </div>
            <!-- pro cons -->
            <?php
            $pros = get_field('pros');
            $cons = get_field('cons');
            ?>

            <div class="pros-cons mb-5">

                <!-- PROS -->
                <div class="pros">
                    <h3>PROS</h3>
                    <?php echo $pros; ?>
                </div>

                <!-- CONS -->
                <div class="cons">
                    <h3>CONS</h3>
                    <?php echo $cons; ?>
                </div>

            </div>

            <?php
            $weblink = get_field('weblink');
            $android = get_field('android');
            $ios = get_field('ios');
            ?>

            <?php if ($weblink || $android || $ios): ?>

            <h3>Get Game Links from Digital Markets</h3>
            <div class="mb-3 text-muted">All trademarks belong to their respective owners.</div>

            <div class="platform-wrapper">

                <?php if ($android): ?>
                <a href="<?php echo esc_url($android); ?>" class="btn btn-platform">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/android.png'); ?>" width="20px" height="20px" alt="android icon" />
                    <span>Get Android Version</span>
                </a>
                <?php endif; ?>

                <?php if ($ios): ?>
                <a href="<?php echo esc_url($ios); ?>" class="btn btn-platform">
                    <img src="<?php echo esc_url(get_stylesheet_directory_uri() . '/images/ios.png'); ?>" width="20px" height="20px" alt="ios icon" />
                    <span>Get iOS Version</span>
                </a>
                <?php endif; ?>

                <?php if ($weblink): ?>
                <a href="<?php echo esc_url($weblink); ?>" class="btn btn-platform website">
                    Get Game Website Link
                </a>
                <?php endif; ?>

            </div>

            <?php endif; ?>
        </aside>

        <!-- SIDEBAR -->
        <aside class="sidebar">

            <h3 class="mb-3">Popular Now</h3>

            <div class="sidebar-item-wrapper mb-5">

                <?php
                $popular = new WP_Query([
                    'post_type' => 'review',
                    'posts_per_page' => 5,
                    'post__not_in' => [get_the_ID()],
                    'orderby' => 'rand'
                ]);

                while ($popular->have_posts()) : $popular->the_post();
                ?>

                <a href="<?php echo home_url('/detail/' . get_post_field('post_name', get_the_ID())); ?>" class="sidebar-item">

                    <div class="sidebar-item-bg"
                         style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'thumbnail'); ?>')">
                    </div>

                    <div class="sidebar-item-detail">
                        <div class="sidebar-item-title"><?php the_title(); ?></div>
                        <div class="sidebar-item-desc">
                            <?php echo wp_trim_words(get_the_excerpt(), 10); ?>
                        </div>
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
</div>

<!-- 🔥 LATEST POSTS -->
<div class="related-section-lg">
    <div class="container">
        <h2 class="text-center mb-3">Latest Post</h2>

        <div class="related-section-lg-wrapper">
            <div class="swiper related-section">
                <div class="swiper-wrapper">

                    <?php
                    $blogs = new WP_Query([
                        'post_type' => 'post',
                        'posts_per_page' => 6
                    ]);

                    while ($blogs->have_posts()) : $blogs->the_post();
                    ?>

                    <a href="<?php the_permalink(); ?>" class="swiper-slide related-section-item">
                        <div class="related-section-inner">

                            <div class="related-section-bg"
                                 style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>')">
                            </div>

                            <div class="related-section-detail">
                                <div class="related-section-title"><?php the_title(); ?></div>
                                <div class="related-section-desc">
                                    <?php echo wp_trim_words(get_the_excerpt(), 12); ?>
                                </div>
                            </div>

                        </div>
                    </a>

                    <?php endwhile; wp_reset_postdata(); ?>

                </div>
            </div>
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
        $latest = new WP_Query([
            'post_type' => 'review',
            'posts_per_page' => 6
        ]);

        while ($latest->have_posts()) : $latest->the_post();
        ?>

        <a href="<?php the_permalink(); ?>" class="review-card">
            <div class="review-card-inner">

                <div class="review-card-head">
                    <div class="review-card-bg"
                         style="background-image:url('<?php echo get_the_post_thumbnail_url(get_the_ID(), 'medium'); ?>')">
                    </div>

                    <div class="review-card-title"><?php the_title(); ?></div>
                </div>

                <div class="review-card-desc">
                    All trademarks belong to their respective owners.
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

<?php wp_reset_postdata(); endif; ?>

</div>

<?php get_footer(); ?>