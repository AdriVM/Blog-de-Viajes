<?php

/* ADMIN */
function admin_styles() {
    /*wp_enqueue_style( 'vegasCSS', get_template_directory_uri() . '/login/css/vegas.min.css', false );*/
    wp_enqueue_style( 'loginCSS', get_template_directory_uri() . '/login/css/loginStyles.css', false );
  
    wp_enqueue_script( 'jquery' );
    /*wp_enqueue_script( 'vegasJS', get_template_directory_uri() . '/login/js/vegas.min.js', array('jquery'), '1.0.0', true);*/
    wp_enqueue_script('TweenMaxJS', 'https://cdnjs.cloudflare.com/ajax/libs/gsap/1.19.0/TweenMax.min.js', array(), '1.0.0', true);
    wp_enqueue_script( 'loginjs', get_template_directory_uri() . '/login/js/login.js', array('jquery'), '1.0.0', true);
  
  
    wp_localize_script(
      'loginjs',
      'login_imagenes',
      array(
        "ruta_plantilla" => get_template_directory_uri()
      )
    );
  }
  add_action('login_enqueue_scripts', 'admin_styles', 10 ); //la prioridad define cual se ejecuta primero

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
    'menu_principal' => __('Menu Principal', 'blogviajes'),
    'sociales_menu' => __('Menu Redes Sociales', 'blogviajes')
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
    register_sidebar(array(
        'name' => __('Sidebar Widgets'),
        'id' => __('sidebar_widgets'),
        'description' => 'widgets para el sidebar',
        'before_widget' => '<div id="&1$s" class="widget %2$s">',
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