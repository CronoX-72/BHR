<?php
    if( get_next_posts_link() || get_previous_posts_link() ){
?>

<div class="post-nav pona-total ">
    <?php next_posts_link( __(' <i class="fas fa-arrow-circle-left"></i> Anterior ','bhr'  ) ); ?>
    <?php previous_posts_link( __( ' Siguiente <i class="fas fa-arrow-circle-right"></i> ','bhr' ) ); ?>
</div>
<div class="post-nav pona-movil">
    <?php next_posts_link( __(' <i class="fas fa-arrow-circle-left"></i> ','bhr'  ) ); ?>
    <?php previous_posts_link( __( ' <i class="fas fa-arrow-circle-right"></i> ','bhr' ) ); ?>
</div>

<?php } ?>