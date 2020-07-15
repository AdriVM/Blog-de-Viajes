<?php get_header(); ?>
<section class="container contenido">
    <div class="row">
        <?php 


             while(have_posts()):
                the_post();
        ?>
        <div class="col-md-6 col-lg-4 entrada">
            <?php 
                the_post_thumbnail( 'entradas', array('class' => 'img-fluid card-img-top') );
            ?>
            <div class="contenido-entrada card">
                <h3><?php the_title(); ?></h3>
                <div class="card-body">
                    <p>Escrito el: <span><?php the_time(get_option('date_format')); ?></span></p>
                    <p>Por: <span><?php the_author(); ?></span></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>
        <?php endwhile;?>
    </div>

</section>
<?php get_footer();?>