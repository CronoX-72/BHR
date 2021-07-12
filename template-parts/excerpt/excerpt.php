<article class="resumen">
    <figure>
        <a href=" <?php the_permalink(); ?> " alt=" <?php the_title_attribute(); ?> ">
            <?php
                if( has_post_thumbnail() ){
                    the_post_thumbnail( 'post-thumbnails', array( 'class' => 'imagen-destacada' ) );                }
            ?>
        </a>
    </figure>
    <header class="titulo-resumen">
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
        <p> Fecha: <?php the_time(get_option('date_format')); ?> </p>
        <p> Autor: <?php the_author(); ?> </p>
        <p> Categorias: <?php the_category(', '); ?> </p>
    </header>
    <div class="post-contenido">
        <?php the_excerpt(); ?>
        <a href=" <?php the_permalink(); ?> "><?php _e('Abrir Archivo','bhr'); ?></a>
    </div>
</article>