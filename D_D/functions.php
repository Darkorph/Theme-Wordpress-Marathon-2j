<?php
add_theme_support( 'post-thumbnails' );
add_theme_support('menus');
add_theme_support( 'woocommerce' );

function register_new_menus() {
 register_nav_menus(
   array(
     'main'    => 'Main Menu',
     'footer'    => 'Footer Menu'
   )
 );
}
add_action( 'init', 'register_new_menus' );


function binary_styles()
{
   // REGISTER
   wp_register_style('fontawesome', get_template_directory_uri() . '/assets/fonts/font-awesome.min.css');
   wp_register_style('binary_styles', get_template_directory_uri() . '/assets/css/main.css');
    
    // ENQUEUE
   wp_enqueue_style('fontawesome');
   wp_enqueue_style('binary_styles');
    wp_enqueue_style( 'Bootstrap_css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
    wp_enqueue_style( 'MDB', get_template_directory_uri() . '/assets/css/mdb.min.css' );
    wp_enqueue_style( 'Font_Awesome', 'https://use.fontawesome.com/releases/v5.6.1/css/all.css' );
    wp_enqueue_style( 'Style', get_template_directory_uri() . '/assets/style.css' );

   if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {
        
        // REGISTER
   		wp_register_script('jquery', get_template_directory_uri() . '/assets/js/jquery.min.js','' ,'' ,'', true);
       wp_register_script('scrolly', get_template_directory_uri() . '/assets/js/jquery.scrolly.min.js','' ,'' ,'', true);
       wp_register_script('skel', get_template_directory_uri() . '/assets/js/skel.min.js','' ,'' ,'', true);
       wp_register_script('util', get_template_directory_uri() . '/assets/js/util.js','' ,'' ,'', true);
       wp_register_script('flexslider', get_template_directory_uri() . '/assets/js/jquery.flexslider-min.js','' ,'' ,'', true);

       wp_enqueue_script( 'jQuery', get_template_directory_uri() . '/assets/js/jquery-3.3.1.min.js', array(), '3.3.1', true );
       wp_enqueue_script( 'Tether', get_template_directory_uri() . '/assets/js/popper.min.js', array(), '1.0.0', true );
       wp_enqueue_script( 'Bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array(), '1.0.0', true );
       wp_enqueue_script( 'MDB', get_template_directory_uri() . '/assets/js/mdb.min.js', array(), '1.0.0', true );
       wp_register_script('binary_scripts', get_template_directory_uri() . '/assets/js/main.js','' ,'' ,'', true);

        // ENQUEUE
       wp_enqueue_script('jquery');
       wp_enqueue_script('scrolly');
       wp_enqueue_script('skel');
       wp_enqueue_script('util');
       wp_enqueue_script('flexslider');
       wp_enqueue_script('binary_scripts');
        
   }
}
add_action('wp_enqueue_scripts', 'binary_styles');
function wpdocs_custom_excerpt_length( $length ) {
   return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

function bongo_wp_pagination() {
   global $wp_query;
   $big = 999999999;
   echo paginate_links(array(
       'base' => str_replace($big, '%#%', get_pagenum_link($big)),
       'format' => '?paged=%#%',
       'current' => max(1, get_query_var('paged')),
       'total' => $wp_query->max_num_pages
   ));
}
add_action('init', 'bongo_wp_pagination');
function leftbar_widgets_init() {
 
 register_sidebar( array(

 'name' => 'leftbar widget zone',
 'id' => 'new-widget-area',
 'before_widget' => '<div class="nwa-widget">',
 'after_widget' => '</div>',
 'before_title' => '<h2 class="nwa-title">',
 'after_title' => '</h2>',
 ) );
}

add_action( 'widgets_init', 'leftbar_widgets_init' );

function leftbar_widgets_albums_init() {

    register_sidebar( array(

        'name' => 'leftbar widget albums',
        'id' => 'new-widget-albums',
        'before_widget' => '<div class="nwa-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h2 class="nwa-title">',
        'after_title' => '</h2>',
    ) );
}

add_action( 'widgets_init', 'leftbar_widgets_albums_init' );

function my_add_scripts() {
    wp_enqueue_script('jquery');
    wp_enqueue_script('flexslider', get_stylesheet_directory_uri().'/js/jquery.flexslider-min.js', array('jquery'));
    wp_enqueue_script('flexslider-init', get_stylesheet_directory_uri().'/js/flexslider-init.js', array('jquery', 'flexslider'));
}
add_action('wp_enqueue_scripts', 'my_add_scripts');

function my_add_styles() {
    wp_enqueue_style('flexslider', get_stylesheet_directory_uri().'/assets/css/flexslider.css');
}
add_action('wp_enqueue_scripts', 'my_add_styles');


//filtre pour the_archive_title pour enlever la clé
add_filter( 'get_the_archive_title', function ($title) {
    if (is_category()) {
        $title = single_cat_title('', false);
    } elseif (is_tag()) {
        $title = single_tag_title('', false);
    } elseif (is_author()) {
        $title = '<span class="vcard">' . get_the_author() . '</span>';
    }
    return $title;
});
?>


