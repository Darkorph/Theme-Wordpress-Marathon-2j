<!-- Card -->
<article id="post-<?php the_id(); ?>" class="m-0">

<div class=" card text-center radius z-depth-1 ">

    <!-- Card image -->
    <img class="card-img-top img-fluid radius-img " src="<?php echo get_the_post_thumbnail_url();?>
" alt="Card image cap">
    <div class="comment-bubble mx-auto d-flex justify-content-center">
            <p class="m-0 text-white align-self-center"><?php echo comments_number('0', '1', '%');  ?></p>
    </div>
    <!-- Card content -->
    <div class="card-body">

        <!-- Title -->
        <h3 class="card-title"><a class="text-dark hvr-grow" href="<?php the_permalink();?>"><?php the_title();?></a></h3>
        <!-- Text -->
        <h5 class="greylink font-weight-bold"><?php echo get_the_date() ?></h5>
        <!-- Button -->
        <p class="greylink h5"><?php the_category(" | "); ?></p>

    </div>

</div>
</article>