<?php
function your_theme_setup() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'title-tag' );
    register_nav_menus( array(
        'primary' => __( 'Primary Menu', 'Header-menu' ),
    ) );
}
add_action( 'after_setup_theme', 'your_theme_setup' );

function your_theme_scripts() {
    wp_enqueue_style( 'bootstrap-css', 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css' );
    wp_enqueue_style( 'theme-style', get_stylesheet_uri() );
    wp_enqueue_script( 'bootstrap-js', 'https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js', array('jquery'), '', true );
    wp_enqueue_script( 'theme-scripts', get_template_directory_uri() . '/scripts.js', array('jquery'), '', true );
}
add_action( 'wp_enqueue_scripts', 'your_theme_scripts' );
?>
