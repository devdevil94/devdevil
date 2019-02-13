<?php
function load_bootstrap(){
    // wp_enqueue_style('bootstrap-css','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    // wp_enqueue_script('bootstrap-js','//stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array( 'jquery' ), true);

    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/js/bootstrap-4.0.0/dist/css/bootstrap.css'));
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap-4.0.0/dist/js/bootstrap.js'), array('jquery'), '1.0', true);
}

function load_fontawesome(){
    wp_enqueue_style('fontawsome-css', get_theme_file_uri('/lib/fontawesome/css/all.css'));
}

function load_custom_files(){     
    wp_enqueue_script('responsive-nav-menu', get_template_directory_uri().'/js/main.js', NULL, '1.0', true);
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri(), NULL, microtime());
}

function add_theme_features(){
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'home-post-thumbnail', 350, 350, true );
}

add_action('after_setup_theme', 'add_theme_features');
add_action('wp_enqueue_scripts', 'load_custom_files');
add_action('wp_enqueue_scripts', 'load_fontawesome');
?>