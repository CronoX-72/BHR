<?php

    // Cargando la paguina de estilos
    function bhr_load_styles(){
        wp_register_style('theme_style',get_stylesheet_uri(),'','1.0','all');
        wp_enqueue_style('theme_style');
    }
    add_action('wp_enqueue_scripts','bhr_load_styles');

    // Registrando menus - Serán 2, uno para el header que es el principal y otro para el footer
    function register_bhr_menus(){
        register_nav_menus(
            array(
                'header-menu' => __('Menu Principal'),
                'footer-menu' => __('Menu Secundario')
            )
        );
    }
    add_action( 'init', 'register_bhr_menus' );

    // Siderbar
    function bhr_register_sidebars(){
        register_sidebar(
            array(
                'name'          => __( 'Sidebar','bhr' ),
                'id'            => 'sidebar_grl',
                'description'   => __( 'Este es el sidebar general','bhr' ),
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
            )
        );

        register_sidebar(
            array(
                'name'          => __( 'Anuncio Superior Uno','bhr' ),
                'id'            => 'anuncio-uno',
                'description'   => __( 'Colocar aqui los anuncios de la cabecera','bhr' ),
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
                'before_widget' => '<div id="%1$s" class="widget %2$s">',
                'after_widget'  => '</div>',
            )
        );

        register_sidebar(
            array(
                'name'          => __( 'Anuncio Superior dos','bhr' ),
                'id'            => 'anuncio-dos',
                'description'   => __( 'Colocar aqui los anuncios de la cabecera','bhr' ),
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
            )
        );

        register_sidebar(
            array(
                'name'          => __( 'Anuncio del pie de paguina','bhr' ),
                'id'            => 'anuncio-pie',
                'description'   => __( 'Colocar aqui los anuncios del píe de paguina','bhr' ),
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
            )
        );

    }
    add_action( 'widgets_init','bhr_register_sidebars' );

    // Habilitando imagenes destacadas
    add_theme_support('post-thumbnails');
    
?>