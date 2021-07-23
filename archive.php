<?php
    get_header();
    
    if (have_posts()){
        get_template_part( 'template-parts/header/site-archive' );
    
        while ( have_posts() ){
            the_post();
            get_template_part( 'template-parts/listado/listado-ultimos-agregados' );
        }

        get_template_part( 'template-parts/listado/paguinado' );
        
    }
        else{
            get_template_part( 'templalte-parts/listado/no-encontrado' );
        }
    get_footer();
?>