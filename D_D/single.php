<?php
get_header();
?>
<article id="post-<?php the_id(); ?>" class="m-0 p-5 radius">
<?php the_post() ?>
    <div class=" card text-center radius z-depth-1 ">

        <!-- Card image -->
        <img class="card-img-top img-fluid radius-img" src="<?php echo get_the_post_thumbnail_url();?>
" alt="Card image cap">
        <div class="comment-bubble mx-auto d-flex justify-content-center">
            <p class="m-0 text-white align-self-center"><?php echo comments_number('0', '1', '%');  ?></p>
        </div>
        <!-- Card content -->
        <div class="card-body">

            <!-- Title -->
            <h2 class="card-title"><a class="text-dark" href="<?php the_permalink();?>"><?php the_title();?></a></h2>
            <!-- Text -->
            <h5 class="greylink font-weight-bold"><?php echo get_the_date() ?></h5>
            <!-- Button -->
            <p class="greylink h6 mb-4"><?php the_category(" "); ?></p>

            <div class="px-p-50 text-left textcolor">
                <?php echo the_content(); ?>
                <p class="my-4">Par : <?php echo the_author_posts_link(); ?></p>
                <p class=""> Tags : <?php echo get_tag_link(the_tags(""," | "));?></p>

                <div class="separator my-5"></div>

                <?php comments_template(); ?>
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
