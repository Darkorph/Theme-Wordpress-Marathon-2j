<?php
/*
Template Name: Static Page
*/
?>
<?php
get_header();
?>

    <article id="post-<?php the_id(); ?>" class="m-0 p-3 p-lg-5 radius">
        <?php the_post() ?>
        <div class=" card text-center radius z-depth-1 ">
            <!-- Title -->
            <h2 class="card-title my-4 my-md-5"><a class="text-dark" href="<?php the_permalink();?>"><?php the_title();?></a></h2>


            <!-- Card content -->
            <div class="card-body card-page">


                <!-- Text -->


                <div class="px-p-70 text-left textcolor">

                    <?php echo the_content(); ?>

                </div>



            </div>

        </div>
    </article>
    <div class="navigation-post pb-5 d-flex justify-content-between px-5">
        <?php previous_post_link('%link', '← %title'); ?>
        <?php next_post_link('%link', '%title →');?>
    </div>



<?php
get_footer();
?>