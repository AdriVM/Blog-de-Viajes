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
        <div class="col-xs-6 col-md-4 entrada">
            <?php 
                the_post_thumbnail( 'entradas', array('class' => 'img-fluid') );
            ?>
            <div class="contenido-entrada">
                <h3 class=""><?php the_title(); ?></h3>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>
    </div>

</section>

<?php get_footer(); ?>
<!--<svg preserveAspectRatio="none" width="1440" height="74" viewBox="0 0 1440 74" class="separador_ondulado">
    <path
        d="M456.464 0.0433865C277.158 -1.70575 0 50.0141 0 50.0141V74H1440V50.0141C1440 50.0141 1320.4 31.1925 1243.09 27.0276C1099.33 19.2816 1019.08 53.1981 875.138 50.0141C710.527 46.3727 621.108 1.64949 456.464 0.0433865Z">
    </path>
</svg>-->