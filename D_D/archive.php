<?php
get_header();
?>
<h2 class="p-md-5 p-4 text-center text-lg-left"><?php echo get_the_archive_title(); ?></h2>
    <div class=" pl-3 pl-lg-5 pb-3 pb-lg-5 pr-3 pr-lg-5 pt-0 card-columns">


        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('templates/loop');
            }

        }
        ?>
    </div>
<?php get_template_part('templates/pagination'); ?>



<?php
get_footer();
?>