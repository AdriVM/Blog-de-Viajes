<?php


// SCRIPTS
function blogviajes_scripts(){
    wp_enqueue_script('jquery');

     /* BOOTSTRAP */
     wp_enqueue_script('bootstrapJS', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js', array('jquery'), '4.5.0', true);

     /* FONT AWESOME */
     wp_enqueue_script('fontawesomeJS', get_template_directory_uri() . '/js/all.min.js', array('jquery'), '5.13.1', true);

     //SCRIPTS
     wp_enqueue_script('scripts', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);
}
add_action('wp_enqueue_scripts', 'blogviajes_scripts');


//STYLES
function blogviajes_styles() {

    /* NORMALIZE */
    wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css', array(), '8.0.1');

    /* BOOTSTRAP */
    wp_enqueue_style('bootstrap', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css',array(), '4.5.0');

    /* GOOGLE FONTS */
    wp_enqueue_style('ralewayFont', 'https://fonts.googleapis.com/css2?family=Raleway:wght@900&display=swap', array(),'1.0.0');
    wp_enqueue_style('baskervilleFont', 'https://fonts.googleapis.com/css2?family=Libre+Baskerville:wght@700&display=swap', array(), '1.0.0');

    /* FONT AWESOME */
    wp_enqueue_style('fontawesomeCSS', get_stylesheet_directory_uri() . '/css/all.min.css', array(), '5.13.1');

    /* STYLE.CSS */
    wp_enqueue_style('style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'blogviajes_Styles');


//AÑADIMOS SOPORTE DE MENUS AL TEMA
register_nav_menus( array(
    'menu_principal' => __('Menu Principal', 'blogviajes')
) );

// WIDGET
function blogviajes_widgets(){
    register_sidebar(array(
        'name' => __('Footer Widgets'),
        'id' => __('footer_widget'),
        'description' => 'widgets para el footer',
        'before_widget' => '<div id="&1$s" class="widget col-6 %2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>'

    ));
}
add_action( 'widgets_init', 'blogviajes_widgets' );

//AÑADIMOS SOPORTE DE IMAGEN DESTACADA AK TEMA
add_theme_support( 'post-thumbnails' );

/* TAMAÑOS DE IMAGEN */
add_image_size('entradas', 750, 490, true);