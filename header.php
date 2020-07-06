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
    </header>