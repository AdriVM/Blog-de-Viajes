<footer>
    <div class="container">
        <div class="row">
            <div class="col-8">
                <div class="row">
                    <?php dynamic_sidebar( 'footer_widget' ); ?>
                </div>
            </div>
            <div class="col-4">
                <h3>Redes Sociales</h3>
            </div>
        </div><!-- cierre row -->
    </div><!-- cierre container -->
    <p class="text-center footer_end">Blog de Viajes &copy; <?php echo date('Y'); ?></p>
</footer>

<?php wp_footer(); ?>
</body>

</html>