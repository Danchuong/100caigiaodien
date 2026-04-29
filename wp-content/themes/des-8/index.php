<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package h5game
 */

get_header();
?>
<div class="container">
	<nav aria-label="breadcrumb">
		<ol class="breadcrumb">
			<li class="breadcrumb-item">
				<a href="<?php echo home_url()?>">Home</a>
			</li>
			<li class="breadcrumb-item active"><?php the_title();?></li>
		</ol>
	</nav>
	<div class="page-head">
		<h1 class="page-title">Discover Our Blog</h1>
		<div class="page-desc">
			Our team made a great research and handpicked the best Android and iOS apps so that you could enjoy your experience with any of them.
		</div>
	</div>
	<?php if ( have_posts() ) : $number == 0;?>
	<div class="articles">
		<?php
			while ( have_posts() ) :
				the_post();
				$number++;
				get_template_part( 'template-parts/content', get_post_type());
			endwhile;
		?>
	</div>
	<?php endif;?>
</div>
<?php
get_footer();