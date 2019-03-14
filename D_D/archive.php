<?php
get_header();
?>
<h2 class="p-5"><?php echo get_the_archive_title(); ?></h2>
    <div class=" pl-5 pb-5 pr-5 pt-0 card-columns">


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