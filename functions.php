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
                'id'            => 'main_sidebar',
                'description'   => __( 'Este es el sidebar Pincipal','bhr' ),
                'before_widget' => '<aside id="%1$s" class="widget %2$s">',
                'after_widget'  => '</aside>',
                'before_title'  => '<h3 class="widget-title">',
                'after_title'   => '</h3>',
            )
        );
    }
    add_action( 'widgets_init','bhr_register_sidebars' );

    // Habilitando imagenes destacadas
    add_theme_support('post-thumbnails');
    
?>