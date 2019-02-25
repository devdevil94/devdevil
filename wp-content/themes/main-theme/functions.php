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

define('VERSION', '1.0');
function version_id(){
    if(WP_DEBUG)
        return microtime();
    return VERSION;
}

function load_custom_files(){     
    wp_enqueue_script('devdevil-mainjs', get_template_directory_uri().'/js/main.js', array('jquery'), version_id(), true);
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri(), array(), version_id(), 'all');
}

function devdevil_features_setup(){
    add_theme_support( 'post-thumbnails' );
    add_image_size( 'home-post-thumbnail', 550, 320, true);
}

function devdevil_widgets_setup(){
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar-right',
        'class' => 'custom',
        'description' => 'Right Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>'
    ));

}


add_action('after_setup_theme', 'devdevil_features_setup');
add_action('widgets_init', 'devdevil_widgets_setup');
add_action('wp_enqueue_scripts', 'load_custom_files');
add_action('wp_enqueue_scripts', 'load_fontawesome');

require get_template_directory().'/inc/widgets/popular-posts-widget.php';
require get_template_directory().'/inc/widgets/signup-form-widget.php';
require get_template_directory().'/inc/general-settings-admin.php';
require get_template_directory().'/inc/social-media-settings-admin.php';

?>