<!-- El header se divide en 3 partes: Logo, Menu de navegación y la publicidad de la cabecera -->
<header>
    <div class="logo-publicidad">
        <?php get_template_part('template-parts/header/header-publicidad'); ?>
        <?php get_template_part('template-parts/header/header-nombre'); ?>
    </div>
    <?php get_template_part('template-parts/header/menu-principal'); ?>
</header>
