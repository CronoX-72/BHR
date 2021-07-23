<div class="widget publicidad publi-izq">
    <?php dynamic_sidebar( 'anuncio-uno' ); ?>
</div>
<div class="widget publicidad publi-der">
    <?php dynamic_sidebar( 'anuncio-dos' ); ?>
</div>
<div class="widget publi-movil">
    <?php 
        if(is_active_sidebar( 'anuncio-uno' )){
            dynamic_sidebar( 'anuncio-uno' );
        }
        else{
            
        }
    ?>
</div>
<div class="widget publi-movil">
<?php 
        if(is_active_sidebar( 'anuncio-dos' )){
            dynamic_sidebar( 'anuncio-dos' );
        }
    ?>
</div>