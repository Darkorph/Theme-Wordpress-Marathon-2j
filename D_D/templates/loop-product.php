<!-- Card -->
<article id="post-<?php the_id(); ?>" class="m-0">

<div class=" card text-center radius z-depth-1 ">

    <!-- Card image -->
    <a href="<?php the_permalink()?>"><img class="card-img-top img-fluid radius-img " src="<?php echo get_the_post_thumbnail_url();?>
" alt="Card image cap"></a>
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
        <?php


        if ( ! defined( 'ABSPATH' ) ) {
            exit;
        }

        global $product;

        ?>
        <p class="price"><?php echo $product->get_price_html(); ?></p>

        <p class="stock <?php echo esc_attr( $class ); ?>"><?php echo wp_kses_post( $availability ); ?></p>

        <p class="greylink h5"><?php the_category(" | "); ?></p>

    </div>

</div>
</article>