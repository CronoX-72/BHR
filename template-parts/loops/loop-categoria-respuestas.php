<div class="listado-respuestas">
<h3 class="titulo-categoria">Respuestas:</h3>
<?php
    $CategoriaLibro = new WP_Query ( 'category_name=respuestas&showposts=4' );

    if( $CategoriaLibro->have_posts() ){
        while( $CategoriaLibro->have_posts() ){
            $CategoriaLibro->the_post();
            $do_not_duplicate = $post->ID;
            get_template_part( 'template-parts/listado/listado-respuestas' );
        }
    }   
?>

</div>