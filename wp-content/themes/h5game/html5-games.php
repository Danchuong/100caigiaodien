<?php /* Template Name: Html5 Games */

get_header();

$top_games_data = [];
$pinned_ids     = [];

for ( $i = 1; $i <= 3; $i++ ) {
    $post_id = get_field( "top_game_{$i}", 'option' );
    if ( $post_id ) {
        $thumbnail = get_the_post_thumbnail_url( $post_id, 'full' );
        if ( ! $thumbnail ) {
            $thumbnail = 'https://via.placeholder.com/512x384?text=No+Image';
        }
        $top_games_data[] = [
            'id'    => (int) $post_id,
            'title' => get_the_title( $post_id ),
            'link'  => get_permalink( $post_id ),
            'image' => $thumbnail,
        ];
        $pinned_ids[] = (int) $post_id;
    }
}
?>

<div class="container">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
                <a href="<?php echo home_url(); ?>">Home</a>
            </li>
            <li class="breadcrumb-item active" aria-current="page">
                <?php the_title(); ?>
            </li>
        </ol>
    </nav>
    <div class="page-head mb-4">
        <h1 class="page-title"><?php the_title(); ?></h1>
        <div class="page-desc">
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post();
                the_content();
            endwhile; endif;
            ?>
        </div>
    </div>
</div>

<div class="main-area">
    <div class="container">
        <div class="games-grid" id="postsGrid"></div>
        <div id="postsLoading" class="text-center my-4" style="display:none; width:100%; color:#eee;">
            <p>Loading more games...</p>
        </div>
    </div>
</div>
<script>
const ajax_blog = {
    ajax_url: '<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>',
    nonce:    '<?php echo wp_create_nonce( 'tour_filter_nonce' ); ?>'
};

window.gamesPageData = {
    top_games:  <?php echo wp_json_encode( $top_games_data ); ?>,
    pinned_ids: <?php echo wp_json_encode( $pinned_ids ); ?>
};

const PINNED_POSITIONS    = [0, 4, 13];
const LG_OFFSETS_IN_BATCH = [0, 4, 13];
const POSTS_PER_BATCH     = 28;

const topGames  = window.gamesPageData.top_games  || [];
const pinnedIds = window.gamesPageData.pinned_ids || [];

const pinnedMap = {};
PINNED_POSITIONS.forEach( (pos, i) => {
    if ( topGames[i] ) pinnedMap[pos] = topGames[i];
});

let postsGrid, postsLoading;
let postsPage          = 1;
let totalItems         = 0;
let regularBuffer      = [];
let postsIsLoading     = false;
let postsHasMore       = true;
let firstBatchDone        = false;
let firstBatchRegularUsed = 0;
let batchRelativeIdx      = 0;

function createPostItem( postData, isLg, page ) {
    const a = document.createElement('a');
    a.className = 'item' + ( isLg ? ' lg' : '' );
    a.href = postData.link;
    a.style.backgroundImage = `url('${ postData.image }')`;
    a.dataset.page = page;
    const span = document.createElement('span');
    span.textContent = postData.title;
    a.appendChild( span );
    return a;
}
function flushBuffer() {
    const fragment = document.createDocumentFragment();
    if ( ! firstBatchDone ) {
        while ( true ) {
            if ( pinnedMap[ totalItems ] !== undefined ) {
                fragment.appendChild( createPostItem( pinnedMap[ totalItems ], true, 0 ) );
                totalItems++;
            } else if ( regularBuffer.length > 0 && firstBatchRegularUsed < POSTS_PER_BATCH ) {
                fragment.appendChild( createPostItem( regularBuffer.shift(), false, postsPage ) );
                totalItems++;
                firstBatchRegularUsed++;
            } else {
                break;
            }
        }
        if ( firstBatchRegularUsed >= POSTS_PER_BATCH ) {
            firstBatchDone = true;
        }
    } else {
        while ( regularBuffer.length > 0 ) {
            const relPos = batchRelativeIdx % POSTS_PER_BATCH;
            const isLg   = LG_OFFSETS_IN_BATCH.includes( relPos );
            fragment.appendChild( createPostItem( regularBuffer.shift(), isLg, postsPage ) );
            totalItems++;
            batchRelativeIdx++;
        }
    }
    postsGrid.appendChild( fragment );
}
async function loadMoreScrollPosts() {
    if ( postsIsLoading || ! postsHasMore ) return;
    postsIsLoading = true;
    postsLoading.style.display = 'block';
    try {
        const formData = new FormData();
        formData.append( 'action',     'load_posts_scroll' );
        formData.append( 'page',       postsPage );
        formData.append( 'pinned_ids', JSON.stringify( pinnedIds ) );
        const response = await fetch( ajax_blog.ajax_url, {
            method: 'POST',
            body:   formData
        });
        const result = await response.json();
        if ( result.success && result.data.length > 0 ) {
            result.data.forEach( post => regularBuffer.push( post ) );
            flushBuffer();
            postsPage++;
            observeLastPost();
        } else {
            postsHasMore = false;
            scrollObserver.disconnect();
        }
    } catch ( error ) {
        console.error( 'Error loading posts:', error );
    } finally {
        postsIsLoading = false;
        postsLoading.style.display = 'none';
    }
}
const scrollObserver = new IntersectionObserver(
    ( entries ) => {
        if ( entries[0].isIntersecting ) loadMoreScrollPosts();
    },
    { rootMargin: '200px', threshold: 0.1 }
);
function observeLastPost() {
    scrollObserver.disconnect();
    const items = postsGrid.querySelectorAll('.item');
    if ( items.length > 0 && postsHasMore ) {
        scrollObserver.observe( items[ items.length - 1 ] );
    }
}
document.addEventListener( 'DOMContentLoaded', () => {
    postsGrid    = document.getElementById('postsGrid');
    postsLoading = document.getElementById('postsLoading');

    if ( postsGrid && postsLoading ) {
        flushBuffer();
        loadMoreScrollPosts();
    }
});
</script>
<?php get_footer(); ?>