<div class="ultimos-agregados">
<h3 class="titulo-categoria">Ultimos archivos agregados:</h3>
<?php
    // Loop de los ultimos agregados
    if( have_posts() ){
        while( have_posts() ){
            the_post();
            get_template_part( 'template-parts/listado/listado-ultimos-agregados' );
        }
    }
    else{
        get_template_part( 'template-parts/listado/no-encontrado' );
    }
    get_template_part( 'template-parts/listado/paguinado' );
?>
</div>