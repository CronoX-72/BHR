<?php $description = get_the_archive_description(); ?>
<header class="header-archive">
    <h3><?php the_archive_title(); ?></h3>
    <?php if( $description ) : ?>
        <div class="archive-descripcion">
            <?php echo wp_kses_post( wpautop( $description ) ); ?>
        </div>
    <?php endif; ?>
</header>