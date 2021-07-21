<div class="listado-destacados">
    <?php
        $CategoriaLibro = new WP_Query ( 'category_name=destacados&showposts=4' );

        if( $CategoriaLibro->have_posts() ){
            while( $CategoriaLibro->have_posts() ){
                $CategoriaLibro->the_post();
                $do_not_duplicate = $post->ID;
                get_template_part( 'template-parts/listado/listado-destacados' );
            }
        }   
    ?>
</div>