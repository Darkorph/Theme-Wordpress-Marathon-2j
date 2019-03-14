<?php
/*
Template Name: Contact
*/
?>
<?php
get_header();
?>

    <article id="post-<?php the_id(); ?>" class="m-0 p-5 radius">
        <?php the_post() ?>
        <div class=" card text-center radius z-depth-1 ">

            <!-- Card image -->


            <!-- Card content -->
            <div class="card-body">

                <!-- Title -->
                <h2 class="card-title my-5"><a class="text-dark" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
                <!-- Text -->
                <p class="textcolor px-p-50 text-left">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aspernatur deleniti ea earum esse expedita fugiat hic, impedit in ipsum magni nesciunt odit optio sapiente soluta sunt. Atque hic magnam omnis. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi neque rem sed sint. Aut eligendi explicabo iste perferendis praesentium quam soluta vel. Accusamus delectus ex minima modi nihil. Officia, tenetur?</p>
                <!-- Button -->
                <p class="greylink h6 mb-4"><?php the_category(" "); ?></p>

                <div class="px-p-50 text-left textcolor">
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