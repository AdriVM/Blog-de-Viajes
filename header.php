<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <?php wp_head(); ?>
</head>

<body>
    <header>
        <nav class="navegacion navbar navbar-expand-lg navbar-light">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php home_url(); ?>">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/logo.png" class="img-fluid"
                        alt="Logo Apprendre Espagnol">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
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
    </header>