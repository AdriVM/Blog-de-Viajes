<?php



function blogviajes_scripts(){
    wp_enqueue_script('jquery');

     /* BOOTSTRAP */
     wp_enqueue_script('bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), '4.5.0', true);
}
add_action('wp_enqueue_scripts', 'blogviajes_scripts');



function blogviajes_styles() {

    /* NORMALIZE */
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    /* BOOTSTRAP */
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css',array(), '4.5.0');

    /* STYLE.CSS */
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'blogviajes_Styles');