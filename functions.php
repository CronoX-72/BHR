<?php
    /* Cargando la hoja de estilos */
    function bhr_load_styles(){
        wp_register_style('theme_style',get_stylesheet_uri(),'','1.0','all');
        wp_enqueue_style('theme_style');
    }
    add_action('wp_enqueue_scripts','bhr_load_styles');

    /* Registrando menus - Serán 2, uno para el header que es el principal y otro para el footer */
    function register_bhr_menus(){
        register_nav_menus(
            array(
                'header-menu' => __('Menu Principal'),
                'footer-menu' => __('Menu Secundario')
            )
        );
    }
    add_action( 'init', 'register_bhr_menus' );

    /* Sidebar */
    
?>