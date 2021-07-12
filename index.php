<?php
/*
    * Plantilla princiapl
    * Este tema esta realizado a petición de Helena Saenz por CronoX RdlC
    * Para usarse exclusivamente en el blog: BasadoEnHechosReales.mx
    * Autor del blog: @TroyaDeHelena
    * Creador del tema: @CronoX_RdlC
*/
    //Cabecera
    get_header();

    // Loop de Wordpress
    if( have_posts() ){
        while( have_posts() ){
            the_post();
            get_template_part( 'template-parts/excerpt/excerpt' );
        }
    }
    else{
        get_template_part( 'template-parts/excerpt/excerpt-none' );
    }
    
    // Siguiente y Anterior en la paguina de archivos
    get_template_part( 'template-parts/excerpt/paguinado' );

    // Pie de paguina
    get_footer();
?>