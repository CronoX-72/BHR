<?php

    // Carga de la cabecera
    get_header();

    // Loop de Wordpress
    $CategoriaLibro = new WP_Query ( 'category_name=libros' );

    if( $CategoriaLibro->have_posts() ){
        while( $CategoriaLibro->have_posts() ){
            $CategoriaLibro->the_post();
            get_template_part( 'template-parts/extracto/extracto-general' );
        }
    }
    else{
        get_template_part( 'template-parts/extracto/extracto-noencontrado' );
    }    
    
    // Siguiente y Anterior en la paguina de archivos
    get_template_part( 'template-parts/rxtracto/paguinado' );

    // Carga del pie de paguina
    get_footer();
    
?>