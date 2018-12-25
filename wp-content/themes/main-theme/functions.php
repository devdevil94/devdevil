<?php

function theme_files(){
    wp_enqueue_style('bootstrap-css', get_theme_file_uri('/js/bootstrap-4.0.0/dist/css/bootstrap.css'));
    wp_enqueue_script('bootstrap-js', get_theme_file_uri('/js/bootstrap-4.0.0/dist/js/bootstrap.js'), array('jquery'), '1.0', true);
    // wp_enqueue_style('bootstrap-css','//stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css');
    // wp_enqueue_script('bootstrap-js','//stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js', array( 'jquery' ), true);
    wp_enqueue_style('main-style', get_template_directory_uri() . '/style.css', false, '1.0', 'all');
}

function theme_features(){

}


add_action('after_setup_theme', 'theme_features');
add_action('wp_enqueue_scripts', 'theme_files'); 
?>