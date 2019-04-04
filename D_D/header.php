<!DOCTYPE HTML>

<html <?php language_attributes(); ?>>
<head>
    <title><?php bloginfo('name'); ?></title>
    <meta charset=<?php bloginfo('charset'); ?> />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>
<body <?php body_class('wrapper'); ?>>

<!-- Header -->

<header id="header wrapper">

    <nav class="navbar navbar-expand-lg navbar-dark nav_color p-0">
        <a class="navbar-brand" href="#" id="menu_mobile">Menu</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02"
                aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-center" id="navbarTogglerDemo02">
            <ul class="navbar-nav mt-lg-0">
                <?php wp_nav_menu( array(
                    'theme_location' => 'main',
                    'menu_class' => 'links',
                    'container' =>false ) ); ?>
            </ul>
        </div>
    </nav>

    <div class="text-center p-4 bg-white">
        <div>
            <h1 class="h1 col-lg-2 mx-auto m-0 font-weight-bold header-title">D&D</h1>
            <h4 class="greylink m-1">Design et Développement Web</h4>
        </div>
        <div class="greylink">
            <a target="_blank" href="https://www.facebook.com/Yohann.Serdadu.Crochon"><i class="fab fa-facebook-square fa-2x px-2"></i></a>
            <a><i class="fab fa-twitter fa-2x px-2"></i> </a>
            <a><i class="fab fa-dribbble fa-2x px-2"></i> </a>
            <a target="_blank" href="https://github.com/Darkorph"><i class="fab fa-github-alt fa-2x px-2"></i> </a>
            <a><i class="fab fa-codepen fa-2x px-2"></i></a>
            <a target="_blank" href="https://fr.linkedin.com/in/yohann-crochon-0a72a3163"><i class="fab fa-linkedin fa-2x px-2"></i></a>
        </div>
    </div>


</header>
<main>
<!-- Nav -->

