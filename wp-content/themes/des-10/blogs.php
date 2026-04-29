<?php /* Template Name: Blog */
get_header();

$current_tag = isset( $_GET['tag'] ) ? sanitize_text_field( $_GET['tag'] ) : '';
$paged       = get_query_var( 'paged' ) ? (int) get_query_var( 'paged' ) : 1;

$args = array(
    'post_type'      => 'blog',
    'post_status'    => 'publish',
    'posts_per_page' => 12,
    'paged'          => $paged,
);

if ( ! empty( $current_tag ) ) {
    $args['tax_query'] = array(
        array(
            'taxonomy' => 'post_tag',
            'field'    => 'slug',
            'terms'    => $current_tag,
        ),
    );
}

$blog_query  = new WP_Query( $args );
$total_pages = (int) $blog_query->max_num_pages;
?>

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo home_url(); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active">
                <?php the_title(); ?>
            </li>
        </ol>
    </nav>

    <?php while ( have_posts() ) : the_post(); ?>
        <div class="section-title text-center">
            <?php the_content(); ?>
        </div>
    <?php endwhile; ?>

    <?php
    $selected_tag_ids = false;
    if ( function_exists( 'get_field' ) ) {
        $field_value = get_field( 'blog_tag' );
        if ( ! empty( $field_value ) && is_array( $field_value ) ) {
            $selected_tag_ids = array_map( fn( $t ) => $t->term_id, $field_value );
        }
    }

    $tag_args = array( 'hide_empty' => true );
    if ( ! empty( $selected_tag_ids ) ) {
        $tag_args['include'] = $selected_tag_ids;
        $tag_args['orderby'] = 'include';
    } else {
        $tag_args['orderby'] = 'count';
        $tag_args['order']   = 'DESC';
        $tag_args['number']  = 5;
    }
    $tags        = get_tags( $tag_args );
    $page_url    = trailingslashit( get_permalink() );
    ?>

    <div class="blogs-tags-scroll">
        <div class="blogs-tags-wrapper">
            <?php
            $active_all = empty( $current_tag ) ? ' active-tag' : '';
            echo '<a href="' . esc_url( $page_url ) . '" class="blogs-tag-link' . $active_all . '">All</a>';

            if ( ! empty( $tags ) && ! is_wp_error( $tags ) ) {
                foreach ( $tags as $tag ) {
                    $active = ( $current_tag === $tag->slug ) ? ' active-tag' : '';
                    printf(
                        '<a href="%1$s" class="blogs-tag-link%3$s">%2$s</a>',
                        esc_url( add_query_arg( 'tag', $tag->slug, $page_url ) ),
                        esc_html( $tag->name ),
                        $active
                    );
                }
            }
            ?>
        </div>
    </div>

    <?php if ( $blog_query->have_posts() ) : ?>
        <div class="blogs-grid">
            <?php
            $index = 0;
            while ( $blog_query->have_posts() ) :
                $blog_query->the_post();

                $tags_post = get_the_tags();
                $tag_name  = ! empty( $tags_post ) ? $tags_post[0]->name : 'Uncategorized';
                $thumbnail = get_the_post_thumbnail_url( get_the_ID(), 'large' );
                if ( ! $thumbnail ) {
                    $thumbnail = 'https://via.placeholder.com/800x600?text=No+Image';
                }

                $big_class = ( $index % 12 === 0 || $index % 12 === 7 ) ? ' grid-big' : '';
            ?>
                <a class="blogs-item<?php echo $big_class; ?>" href="<?php the_permalink(); ?>">
                    <div class="blogs-img-wrap">
                        <span class="blogs-cat"><?php echo esc_html( $tag_name ); ?></span>
                        <img class="blogs-img" src="<?php echo esc_url( $thumbnail ); ?>" alt="<?php the_title_attribute(); ?>">
                    </div>
                    <h3 class="blogs-title"><?php the_title(); ?></h3>
                    <div class="blogs-desc"><p><?php echo wp_trim_words( get_the_excerpt(), 30, '...' ); ?></p></div>
                    <div class="blogs-date"><?php the_date(); ?></div>
                </a>
            <?php
                $index++;
            endwhile;
            wp_reset_postdata();
            ?>
        </div>

        <?php if ( $total_pages > 1 ) : ?>
        <nav aria-label="Page navigation">
            <ul class="pagination">
                <?php
                $base = $current_tag
                    ? add_query_arg( 'tag', $current_tag, $page_url )
                    : $page_url;
                $page_link = function( $n ) use ( $base, $page_url, $current_tag ) {
                    $url = trailingslashit( $page_url ) . ( $n > 1 ? 'page/' . $n . '/' : '' );
                    return $current_tag ? add_query_arg( 'tag', $current_tag, $url ) : $url;
                };
                $start = max( 1, $paged - 1 );
                $end   = min( $total_pages, $start + 3 );
                if ( $end - $start < 3 ) $start = max( 1, $end - 3 );
                if ( $paged > 1 ) {
                    echo '<li class="page-item"><a href="' . esc_url( $page_link( $paged - 1 ) ) . '" class="prev page-link">&lt;</a></li>';
                }
                for ( $i = $start; $i <= $end; $i++ ) {
                    if ( $i === $paged ) {
                        echo '<li class="page-item active"><span aria-current="page" class="page-link current">' . $i . '</span></li>';
                    } else {
                        echo '<li class="page-item"><a class="page-link" href="' . esc_url( $page_link( $i ) ) . '">' . $i . '</a></li>';
                    }
                }
                if ( $paged < $total_pages ) {
                    echo '<li class="page-item"><a href="' . esc_url( $page_link( $paged + 1 ) ) . '" class="next page-link">&gt;</a></li>';
                }
                ?>
            </ul>
        </nav>
        <?php endif; ?>

    <?php else : ?>
        <p class="blogs-empty">No posts found.</p>
    <?php endif; ?>
</div>

<?php get_footer(); ?>