<?php
get_header();
?>

    <div class=" p-5 card-columns">


        <?php

        if (have_posts()) {
            while (have_posts()) {
                the_post();
                get_template_part('templates/loop-product');
            }

        }
        ?>
    </div>
<?php get_template_part('templates/pagination'); ?>



<?php
get_footer();
?>