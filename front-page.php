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
                <div class="card-body">
                    <p>Escrito el: <span><?php the_time(get_option('date_format')); ?></span></p>
                    <p>Por: <span><?php the_author(); ?></span></p>
                    <a href="<?php the_permalink(); ?>" class="btn btn-primary">Leer más</a>
                </div>
            </div>
        </div>
        <?php endwhile; wp_reset_postdata();?>
    </div>

</section>

<section class="categorias-blog container">
    <h2 class="text-center">Entradas por Categoría: </h2>
    <?php $categorias = get_categories(); ?>
    <div class="row">
        <?php foreach($categorias as $categoria): ?>
        <div class="col-6 col-md-6 col-lg-3 categoria">
            <a href="<?php echo get_category_link($categoria->cat_ID)?>">
                <i class="<?php echo $categoria->description; ?>"></i>
                <div class="clearfix mb-3 categoria_nombre">
                    <?php echo $categoria->name; ?>
                </div>
            </a>
        </div>
        <?php endforeach;?>
    </div>
</section>

<?php get_footer(); ?>