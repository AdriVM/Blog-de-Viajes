<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <?php 
        $destacada = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full');
        $fondo = $destacada[0];
    ?>

    <header class="site-header" style="background-image: url(<?php echo $fondo ?>);">

        <nav class="navbar navbar-expand-lg navegacion">

            <div class="navbar-header ml-auto mr-auto">
                <a class="navbar-brand" href="<?php echo esc_url(home_url('/')); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="logo img-fluid"
                        alt="Logo Apprendre Espagnol">
                </a>
                <button class="navbar-toggler col-sm-1" type="button" data-toggle="collapse" data-target="#navbar"
                    aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>

            <?php wp_nav_menu(array(
                        'theme_location' => 'menu_principal',
                        'container_id' => 'navbar',
                        'container_class' => 'collapse navbar-collapse',  
                        'menu_class' => 'navbar-nav ml-auto' 
                    )); 
            ?>

        </nav>

        <div class="contenedor-title container">
            <div class="row">
                <div class="col-md-6">
                    <div class="titulo">
                        <?php $descripcion = get_bloginfo('description', 'display')?>
                        <h1 class="site-title"><span><?php echo $descripcion;?></span></h1>
                    </div><!-- Cierre titulo -->
                </div><!-- Cierre col-md-6 -->
            </div><!-- Cierre row -->
        </div><!-- Cierre container -->
        <svg preserveAspectRatio="none" width="1440" height="74" viewBox="0 0 100 10" class="separador_ondulado">
            <?php  // path 0 0 1440 74?>
            <?php //polygon  0 0 100 10?>
            <!--<path
            
            
                d="M456.464 0.0433865C277.158 -1.70575 0 50.0141 0 50.0141V74H1440V50.0141C1440 50.0141 1320.4 31.1925 1243.09 27.0276C1099.33 19.2816 1019.08 53.1981 875.138 50.0141C710.527 46.3727 621.108 1.64949 456.464 0.0433865Z">
            </path>-->
            <!--<polygon points="100 0 100 10 0 10 0 0 100 10 0 10" /><?php //pico hacia addentro ?>-->
            <polygon points="50 0, 0 10, 100 10" /> <?php //pico hacia afuera ?>
        </svg>
    </header>