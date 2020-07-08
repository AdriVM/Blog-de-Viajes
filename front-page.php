<?php get_header(); ?>
<h2 class="text-center">Últimas Entradas</h2>
<section class="container contenido">
    <div class="row">
        <?php 
            $args = array(
                'posts_per_page' => 6
            );

            $entradas = new WP_Query($args); while($entradas->have_posts()):
                $entradas->the_post();
        ?>
        <div class="col-md-6 col-lg-4 entrada">
            <?php 
                the_post_thumbnail( 'entradas', array('class' => 'img-fluid card-img-top') );
            ?>
            <div class="contenido-entrada card">
                <h3><?php the_title(); ?></h3>
                <p>Escrito el: <span><?php the_time(get_option('date_format')); ?></span></p>
                <p>Por: <span><?php the_author(); ?></span></p>
                <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más</a>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>
    </div>

</section>

<?php get_footer(); ?>