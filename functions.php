<?php


// SCRIPTS
function blogviajes_scripts(){
    wp_enqueue_script('jquery');

     /* BOOTSTRAP */
     wp_enqueue_script('bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), '4.5.0', true);

     //SCRIPTS
     wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'));
}
add_action('wp_enqueue_scripts', 'blogviajes_scripts');


//STYLES
function blogviajes_styles() {

    /* NORMALIZE */
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    /* BOOTSTRAP */
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css',array(), '4.5.0');

    /* STYLE.CSS */
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'blogviajes_Styles');


//AÑADIMOS SOPORTE DE MENUS AL TEMA
register_nav_menus( array(
    'menu_principal' => __('Menu Principal', 'blogviajes')
) );

//AÑADIMOS SOPORTE DE IMAGEN DESTACADA AK TEMA
add_theme_support( 'post-thumbnails' );