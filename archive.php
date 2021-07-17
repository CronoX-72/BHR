<?php
    get_header();
    
    if (have_posts()){
        get_template_part( 'template-parts/header/site-archive' );
    
        while ( have_posts() ){
            the_post();
            get_template_part( 'template-parts/excerpt/excerpt' );
        }

        get_template_part( 'template-parts/excerpt/paguinado' );
        
    }
        else{
            get_template_part( 'templalte-parts/excerpt-none' );
        }
    get_footer();
?>