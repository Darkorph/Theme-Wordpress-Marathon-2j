<?php
get_header();
?>
    <article id="post-<?php the_id(); ?>" class="m-0 p-5 radius">

        <div class=" card text-center radius z-depth-1 ">

            <!-- Card image -->
            <?php while ( have_posts() ) : the_post(); ?>

                <?php wc_get_template_part( 'content', 'single-product' ); ?>

            <?php endwhile; // end of the loop. ?>

        </div>
    </article>
    <div class="navigation-post pb-5 d-flex justify-content-between px-5">
        <?php previous_post_link('%link', '← %title'); ?>
        <?php next_post_link('%link', '%title →');?>
    </div>

<?php
get_footer();
?>