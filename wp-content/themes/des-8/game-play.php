<?php
get_header();
?>

<div id="primary" class="main-area">

<?php while ( have_posts() ) : the_post(); ?>

<div class="container lg">

    <div class="game-play-layout">

        <!-- SIDEBAR LEFT -->
        <aside class="sidebar">
            <div class="games-grid">
                <?php
                $related = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 20,
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

        <!-- MAIN GAME -->
        <section class="game-main-content">

            <!-- GAME IFRAME -->
            <div class="game-frame">
                <?php
                $iframe = get_field('iframe');
                ?>

                <div class="iframe-wrapper">

                <iframe
                    src="<?php echo esc_url($iframe); ?>"
                    frameborder="0"
                    allowfullscreen>
                </iframe>

            </div>
            </div>

            <!-- INFO -->
            <div class="info-head bg-white p-3 mb-3">

                <div class="info-head-left">

                    <div class="info-head-bg"
                         style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>')">
                    </div>

                    <div class="info-head-detail">
                        <div class="info-head-title"><?php the_title(); ?></div>

                        <span class="rating">
                            <span class="rating-stars r45"></span>
                        </span>

                        <div class="info-head-desc">
                            All trademarks belong to their respective owners.
                        </div>
                    </div>

                </div>
            </div>
            <!-- RELATED GAMES -->
            <div class="games-grid">

            <?php
            $related = new WP_Query([
                'post_type' => 'post',
                'posts_per_page' => 12,
                'post__not_in' => [get_the_ID()],
                'orderby' => 'rand'
            ]);

            while($related->have_posts()) : $related->the_post();
            ?>

            <a class="item"
               href="<?php the_permalink(); ?>"
               style="background-image: url('<?php echo get_the_post_thumbnail_url(get_the_ID(),'medium'); ?>')">
                <span><?php the_title(); ?></span>
            </a>

            <?php endwhile; wp_reset_postdata(); ?>

            </div>

        </section>

        <!-- SIDEBAR RIGHT -->
        <aside class="sidebar">
            <div class="games-grid">
                <?php
                $related2 = new WP_Query([
                    'post_type' => 'post',
                    'posts_per_page' => 20,
                    'offset' => 20
                ]);
                while($related2->have_posts()) : $related2->the_post();
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