<?php
get_header(); 
?>
<section class="container contenido">
    <div class="row">
        <?php 
            while(have_posts()): 
                the_post();
        ?>
        <div class="col-sm-8 offset-sm-2 contenido_pagina_no_sidebar">
            <?php the_content(); ?>
        </div>
        <?php
            endwhile;
        ?>
    </div>
</section>
<?php get_footer();?>