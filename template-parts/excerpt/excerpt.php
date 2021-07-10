<article class="resumen">
    <header class="titulo-resumen">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p> <?php the_time(get_option('date_format')); ?> <?php the_category(', '); ?> </p>
    </header>
    <div class="post-contenido">
        <?php the_excerpt(); ?>
        <a href=" <?php the_permalink(); ?> "><?php _e('Abrir Archivo','bhr'); ?></a>
    </div>
</article>