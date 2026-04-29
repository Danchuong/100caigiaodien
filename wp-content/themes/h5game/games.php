<?php
get_header();
?>

<div class="container">

    <!-- BREADCRUMB -->
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo home_url(); ?>">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="#">Reviews Game</a>
            </li>
            <li class="breadcrumb-item active">
                <?php the_title(); ?>
            </li>
        </ol>
    </nav>
</div>
<div id="primary" class="site-main main-area">

<?php while ( have_posts() ) : the_post(); ?>

<div class="container">

    <div class="page-wrapper">

        <!-- MAIN CONTENT -->
        <aside class="main-content">

            <div class="info-head mb-4">
                <div class="info-head-left">

                    <!-- BACKGROUND IMAGE -->
                    <div class="info-head-bg" style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'full'); ?>')"></div>

                    <div class="info-head-detail">
                        <div class="info-head-title"><?php the_title(); ?></div>

                        <!-- RATING (ACF) -->
                        <span class="rating">
                            <span class="rating-stars r<?php the_field('rating'); ?>"></span>
                        </span>

                        <!-- SHORT DESC -->
                        <div class="info-head-desc">
                            <?php the_field('short_description'); ?>
                        </div>
                    </div>
                </div>

                <!-- PLAY BUTTON -->
                <a class="btn btn-lg primary-btn glow-on-hover" 
                   href="/play-<?php echo get_post_field('post_name'); ?>">
                   Go To Game
                </a>
            </div>

            <!-- DESCRIPTION -->
            <div class="post-content mb-4">
                <h2>Description</h2>
                <?php the_content(); ?>
            </div>

            <!-- GAME META -->
            <h2>Game Details</h2>
<section class="game-meta">

    <div>
        <div class="label">Language</div>
        <div class="value">English</div>
    </div>

    <div>
        <div class="label">Type</div>
        <div class="value"><?php the_field('type'); ?></div>
    </div>

    <div>
        <div class="label">Width</div>
        <div class="value"><?php the_field('width'); ?></div>
    </div>

    <div>
        <div class="label">Height</div>
        <div class="value"><?php the_field('height'); ?></div>
    </div>

</section>

        </aside>

        <!-- SIDEBAR -->
        <aside class="sidebar">
            <h2 class="mb-3">More Games</h2>

            <div class="games-grid">

                <?php
                $related = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 10,
                    'post__not_in' => [get_the_ID()]
                ]);

                while($related->have_posts()) : $related->the_post();
                ?>

                <a class="item" href="<?php the_permalink(); ?>"
                   style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>')">
                    <span><?php the_title(); ?></span>
                </a>

                <?php endwhile; wp_reset_postdata(); ?>

            </div>
        </aside>

    </div>
</div>

<?php endwhile; ?>

</div>

<?php
get_footer();