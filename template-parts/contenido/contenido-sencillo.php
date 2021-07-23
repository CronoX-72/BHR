<div class="post">
    <header class="header-post-simple">
        <?php the_title( '<h1 class="titulo-post-simple">', '</h1>' ); ?>
        <div class="datos-post">
            <p> Fecha: <?php the_time(get_option('date_format')); ?> </p>
            <p> Autor: <?php the_author(); ?> </p>
            <p> Categorias: <?php the_category(', '); ?> </p>
        </div>
    </header>
    <div class="contenido-simple">
        <?php
            if( has_post_thumbnail() ){
                the_post_thumbnail( 'post-thumbnails', array( 'class' => 'imagen-destacada' ) );
            }
        ?>
        <?php the_content(); ?>
    </div>
    <aside class="spost">
        <?php dynamic_sidebar( 'sidebar_grl' ); ?>
    </aside>
</div>