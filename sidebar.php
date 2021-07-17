<aside>
    <?php 
        if( is_active_sidebar( 'main_sidebar' ) ){
            dynamic_sidebar( 'main_sidebar' );
        }
        else{
            //Se colocara en caso de que no haya widgets que colocar
        }
    ?>
</aside>