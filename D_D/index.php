<?php get_header(); ?>
<main role="main">
    <?php
    if (!is_home() && is_front_page()) { ?>

        <section class="header">
            <h1 class="page-title"><?php the_title();?></h1>
        </section>
    <?php } ?>


    <section class="content">
        <?php
        if (is_home()) {
            if (have_posts()) {
                while (have_posts()) {
                    the_post();
                    get_template_part('templates/loop');
                }
                get_template_part('templates/pagination');


            }
            else {
                get_template_part('templates/loop', 'none');
            }

        }
        else {
            if (have_posts()) {
                while(have_posts()) {
                    the_post();
                    the_content();
                }
            }
        } ?>

        <?php if(is_404()) { ?>
            <article id="post-404">
                <section class="section-content inner">
                    <div class="header" >
                        <h1 class="page-title"><h1>Page introuvable</h1></h1>
                    </div>

                    <p style="padding-left:20px;">La page n'a pas été trouvée ou elle a changé de nom, <br>ou peut etre qu'elle n'a simplement jamais existé !</p>
                    <a class="bouton" style="padding-left:20px;" href="<?php echo home_url();?>">Retour a l'accueil</a>

                </section>
            </article>
        <?php } ?>
    </section>
</main>


<!-- Footer -->
<?php get_footer(); ?>