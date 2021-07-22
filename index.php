<?php

    // Carga de la cabecera principal - Se carga el menu tambien
    get_header();

?>
<div class="contenido-landingpage">

<?php

    // Loop de los destacados
    get_template_part( 'template-parts/loops/loop-categoria-destacados' );

    // Loop de respuestas a otros posts ajenos
    get_template_part( 'template-parts/loops/loop-categoria-respuestas' );

    // Loop de ultimas entradas
    get_template_part( 'template-parts/loops/loop-ultimos-agregados' );

?>

</div>

<?php
    // Carga del pie de paguina principal
    get_footer();

?>