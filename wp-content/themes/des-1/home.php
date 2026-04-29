<?php 
/**
 * Template Name: Home
 */
get_header(); 
if(has_post_thumbnail(get_the_ID())) {
    $bg_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
}else {
    $bg_img = get_stylesheet_directory_uri() . '/images/no_img.jpg';
}
?>
<section class="featured" style="background-image: url(<?php echo $bg_img?>)">
    <div class="container">
        <div class="featured-wrapper">
            <h1 class="mb-4 text-white"><?php the_field('description'); ?></h1>
            <div>
                <a href="<?php the_field('latest_blog')?>" class="btn btn-light px-5 fw-semibold btn-lg rounded-pill">EXPLORE</a>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <section>
        <div class="section-head">
            <h2 class="section-title">
                LATEST
                <b>BLOG</b>
            </h2>
            <a class="btn-viewmore" href="<?php the_field('latest_blog')?>">View more</a>
        </div>
        <?php
        $blog_ids = [];
        $wp_query = new WP_Query(array(
            'post_type' =>  'blog',
            'posts_per_page' => 3,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',
        ));
        if($wp_query->have_posts()): $number == 0; ?>
        <div class="item-grid">
            <?php  while ($wp_query->have_posts()): 
                    $wp_query->the_post();
                    array_push( $blog_ids, get_the_ID() );
                    $number++;
                    if(has_post_thumbnail(get_the_ID())) {
                        $item_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                    }else {
                        $item_img = get_stylesheet_directory_uri() . '/images/no_img.jpg';
                    }
                    $item_class = ($number == 1) ? "lg":"md";

                    $tags_post = get_the_tags(get_the_ID());
                    $tag_name  = ! empty( $tags_post ) ? $tags_post[0]->name : 'Uncategorized';
                    ?>
                <a class="post-item <?php echo $item_class?>" href="<?php the_permalink();?>" style="background-image: url(<?php echo $item_img;?>)">
                    <div class="item-cate"><?php echo $tag_name;?></div>
                    <div class="item-content">
                        <h3><?php the_title()?></h3>
                        <div class="desc"><?php the_excerpt()?></div>
                    </div>
                </a>
            <?php endwhile;?>
        </div>
        <?php wp_reset_query();
        endif; ?>
        <?php
            $wp_query = new WP_Query(array(
            'post_type' =>  'blog',
            'posts_per_page' => 2,
            'offset' => 4,
            'post__not_in' => $blog_ids,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',
        ));
        if($wp_query->have_posts()): ?>
        <div class="item-grid-xl">
             <?php  while ($wp_query->have_posts()): $wp_query->the_post();
                $tags_post = get_the_tags(get_the_ID());
                $tag_name  = ! empty( $tags_post ) ? $tags_post[0]->name : 'Uncategorized';
                if(has_post_thumbnail(get_the_ID())) {
                    $item_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                }else {
                    $item_img = get_stylesheet_directory_uri() . '/images/no_img.jpg';
                }
                ?>
            <a class="post-item xl" href="<?php the_permalink();?>" style="background-image: url(<?php echo $item_img;?>)">
                <div class="item-cate"><?php echo $tag_name; ?></div>
                <div class="item-content">
                    <h3><?php the_title()?></h3>
                    <div class="desc"><?php the_excerpt()?></div>
                </div>
            </a>
            <?php endwhile;?>
        </div>
        <?php wp_reset_query();
        endif; ?>
        <?php
            $wp_query = new WP_Query(array(
            'post_type' =>  'blog',
            'posts_per_page' => 6,
            'post__not_in' => $blog_ids,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',
        ));
        if($wp_query->have_posts()): ?>
        <div class="item-grid-sm">
            <?php  while ($wp_query->have_posts()): $wp_query->the_post();
                array_push( $blog_ids, get_the_ID() );
                $tags_post = get_the_tags(get_the_ID());
                $tag_name  = ! empty( $tags_post ) ? $tags_post[0]->name : 'Uncategorized';
                if(has_post_thumbnail(get_the_ID())) {
                    $item_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                }else {
                    $item_img = get_stylesheet_directory_uri() . '/images/no_img.jpg';
                }
                ?>
            <a class="post-item sm" href="<?php the_permalink();?>" style="background-image: url(<?php echo $item_img;?>)">
                <div class="item-cate"><?php echo $tag_name; ?></div>
                <div class="item-content">
                    <h3><?php the_title()?></h3>
                    <div class="desc"><?php the_excerpt()?></div>
                </div>
            </a>
            <?php endwhile;?>
        </div>
        <?php wp_reset_query();
        endif; ?>
    </section>
    <section>
        <div class="section-head">
            <h2 class="section-title">
                LATEST
                <b>REVIEWS</b>
            </h2>
            <a class="btn-viewmore" href="<?php the_field('latest_review')?>">View more</a>
        </div>
        <?php
            $game_ids = [];
            $wp_query = new WP_Query(array(
            'post_type' =>  'review',
            'posts_per_page' => 5,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',
        ));
        if($wp_query->have_posts()): $number = 0;?>
        <div class="review-grid">
            <?php while ($wp_query->have_posts()): 
                $wp_query->the_post();
                array_push($game_ids,get_the_ID());
                $number++;
                $item_class = ($number == 1) ? "lg" : "md";;
                if(has_post_thumbnail(get_the_ID())) {
                    $item_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                }else {
                    $item_img = get_stylesheet_directory_uri() . '/images/no_img.jpg';
                }
                ?>
            <a class="review-item <?php echo $item_class?>" href="<?php the_permalink();?>">
                <div class="review-bg" style="background-image: url(<?php echo $item_img?>)"></div>
                <div class="review-content">
                    <h3><?php the_title(); ?></h3>
                    <span class="rating">
                        <span class="rating-stars r45"></span>
                    </span>
                    <div class="desc"><?php echo wp_trim_words(get_the_excerpt(), 25); ?></div>
                </div>
            </a>
            <?php endwhile; wp_reset_query();
        endif; ?>
        </div>
    </section>
    <section>
        <div class="section-head">
            <h2 class="section-title">
                POPULAR
                <b>GAMES</b>
            </h2>
            <a class="btn-viewmore" href="<?php the_field('popular_games')?>">View more</a>
        </div>
        <?php
            $wp_query = new WP_Query(array(
            'post_type' =>  'post',
            'posts_per_page' => 5,
            'post__not_in' => $game_ids,
            'orderby'   => 'rand',
            'order' => 'DESC',
            'post_status' => 'publish',
        ));
        if($wp_query->have_posts()): $number = 0;?>
        <div class="game-grid">
            <?php  while ($wp_query->have_posts()): 
                $wp_query->the_post();
                if(has_post_thumbnail(get_the_ID())) {
                    $item_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
                }else {
                    $item_img = get_stylesheet_directory_uri() . '/images/no_img.jpg';
                }
            ?>
            <a class="game-item lg" href="<?php the_permalink(); ?>">
                <div class="game-inner">
                    <div class="game-bg" style="background-image: url(<?php echo $item_img?>)"></div>
                    <div class="game-content">
                        <h3><?php the_title();?></h3>
                    </div>
                </div>
            </a>
            <?php endwhile; wp_reset_query();?>
        </div>
        <?php endif;?>
    </section>
</div>
<?php
get_footer();
