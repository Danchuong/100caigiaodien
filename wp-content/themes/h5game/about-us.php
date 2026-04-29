<?php 
/**
 * Template Name: About Us
 */
get_header(); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <!-- Title -->
            <div class="text-center mb-3">
                <h1 class="fw-bold"><?php the_title();?></h1>
                <p class="text-muted"><?php the_field('title_top');?></p>
            </div>

            <!-- Content -->
            <div class="card shadow-sm bg-white border-0">
                <div class="card-body p-4">
                    <?php while ( have_posts() ) :
                        the_post();
                        the_content();
                    endwhile; // End of the loop.?>
                    

                    <p class="fw-semibold text-center mt-4"><?php the_field('title_bottom');?> 🚀</p>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer();