<article class="respuesta">
    <header class="titulo-respuesta">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p> Fecha: <?php the_time(get_option('date_format')); ?> </p>
        <p> Remitente: <?php the_author(); ?> </p>
    </header>
</article>