<?php
    // Loop de los ultimos agregados
    if( have_posts() ){
        while( have_posts() ){
            the_post();
            get_template_part( 'template-parts/listado/listado-general' );
        }
    }
    else{
        get_template_part( 'template-parts/listado/no-encontrado' );
    }
    
?>