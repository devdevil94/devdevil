<?php
wp_enqueue_style('widgets-style', 
get_template_directory_uri().'/css/widgets-style.css',
array(), microtime(), 'all'); 

require get_template_directory().'/inc/widgets/popular-posts-widget.php';
require get_template_directory().'/inc/widgets/signup-form-widget.php';
require get_template_directory().'/inc/widgets/social-media-widget.php';
require get_template_directory().'/inc/widgets/advertisement-area-widget.php';

require get_template_directory().'/inc/general-settings-admin.php';
require get_template_directory().'/inc/social-media-settings-admin.php';
require get_template_directory().'/inc/contact-form-admin.php';

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
    if(WP_DEBUG) return microtime();

    return VERSION;
}
function load_google_fonts(){
    wp_enqueue_style('fonts-style', '//fonts.googleapis.com/css?family=Roboto',
    array(), microtime(), 'all');
}

function load_custom_files(){ 
    wp_enqueue_style('main-stylesheet', get_stylesheet_uri(),
    array(), microtime(), 'all');
    
    wp_enqueue_style('single-post-style', 
    get_template_directory_uri().'/css/single-post.css',
    array(), microtime(), 'all');

    wp_enqueue_style('footer-section-style', 
    get_template_directory_uri().'/css/footer-section.css',
    array(), microtime(), 'all');

    wp_enqueue_style('recent-posts-section-style', 
    get_template_directory_uri().'/css/recent-posts-section.css',
    array(), microtime(), 'all');

    wp_enqueue_style('blog-posts-list-style', 
    get_template_directory_uri().'/css/blog-posts-list.css',
    array(), microtime(), 'all');

    wp_enqueue_style('projects-list-style', 
    get_template_directory_uri().'/css/projects-list.css',
    array(), microtime(), 'all');

    wp_enqueue_style('search-style', 
    get_template_directory_uri().'/css/search.css',
    array(), microtime(), 'all');

    wp_enqueue_script('devdevil-mainjs', get_template_directory_uri().'/js/main.js',
    array('jquery'), microtime(), true);
}

function devdevil_theme_support(){
    add_theme_support('html5', array('comment-list', 'comment-form', 'search-form'));
    add_theme_support( 'post-thumbnails' );
    add_image_size('blog-post-thumbnail', 550, 400, true);
}

function devdevil_widgets_setup(){
    register_sidebar(array(
        'name' => 'sidebar',
        'id' => 'sidebar-right',
        'class' => 'custom',
        'description' => 'Right Sidebar',
        'before_widget' => '<aside id="%1$s" class="widget %2$s widget-devdevil-sidebar">',
        'after_widget' => '</aside>',
        'before_title' => '<h1 class="widget-title">',
        'after_title' => '</h1>'
    ));

}

add_action('after_setup_theme', 'devdevil_theme_support');
add_action('widgets_init', 'devdevil_widgets_setup');
add_action('wp_enqueue_scripts', 'load_custom_files');
add_action('wp_enqueue_scripts', 'load_fontawesome');
add_action('wp_enqueue_scripts', 'load_google_fonts');

?>