<?php

function devdevil_project_post_type(){
    $labels = array(
        'name' => 'Projects',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'all_items' => 'All Projects',
        'singular_name' => 'Project'
    );

    $supports = array('title', 'editor', 'excerpt', 'custom-fields', 'thumbnail');

    register_post_type('project', array( 
        'has_archive' => true,
        'supports' => $supports,
        'rewrite' => array('slug' => 'projects'),
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-calendar'
    ));
}

add_action('init', 'devdevil_project_post_type');
?>