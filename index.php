<?php

    // Carga de la cabecera principal - Se carga el menu tambien
    get_header();

    // Seccion de destacados
    get_template_part( 'template-parts/listado-destacado' );
    
    // Seccion de respuestas
    get_template_part( 'template-parts/listado-respuestas' );

    // Seccion de rescientes
    get_template_part( 'template-parts/listado-recientes' );

    // Carga del pie de paguina principal
    get_footer();

?>