<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package h5game
 */
if(has_post_thumbnail(get_the_ID())) {
	$item_img = wp_get_attachment_url(get_post_thumbnail_id(get_the_ID()));
}else {
	$item_img = get_stylesheet_directory_uri() . '/images/android.png';
}
?>
<a href="<?php the_permalink()?>" class="post-item">
	<div class="item-thumb"><img src="<?php echo $item_img?>" alt="<?php the_title();?>"></div>
	<div class="item-content">
		<h3><?php the_title()?></h3>
		<?php if($number==1):?>
			<div class="desc"><?php the_excerpt()?></div>
		<?php endif;?>
		<div class="meta"><?php echo get_the_date();?></div>
	</div>
</a>