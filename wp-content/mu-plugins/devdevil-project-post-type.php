<?php

function devdevil_project_post_type(){
    $labels = array(
        'name' => 'Projects',
        'add_new_item' => 'Add New Project',
        'edit_item' => 'Edit Project',
        'all_items' => 'All Projects',
        'singular_name' => 'Project'
    );

    $supports = array('title', 'editor', 'excerpt',
    'custom-fields', 'thumbnail', 'show_in_rest');

    register_post_type('project', array( 
        'has_archive' => true,
        'supports' => $supports,
        'rewrite' => array('slug' => 'projects'),
        'public' => true,
        'labels' => $labels,
        'menu_icon' => 'dashicons-calendar',
        'taxonomies' => array('category', 'post_tag')
    ));
}


function devdevil_custom_taxonomies(){
    //Hierarchical
    $labels = array(
        'name' => 'Types',
        'singular_name' => 'Type',
        'search_items' => 'Search Types',
        'all_items' => 'All Types',
        'parent_item' => 'Parent Type',
        'parent_item_colon' => 'Parent Type:',
        'edit_item' => 'Edit Type',
        'update_item' => 'Update Type',
        'add_new_item' => 'Add New Type',
        'new_item_name' => 'New Type Name',
        'menu_name' => 'Types'
    );

    $args = array(
        'hierarchical' => true,
        'labels' => $labels,
        'show_ui' => true,
        'show_admin_column' => true,
        'query_var' => true,
        'rewrite' => array('slug' => 'type')
    );

    register_taxonomy('type', array('project'), $args);
    
    //Non Hierarchical
    
}
// add_action('init', 'devdevil_custom_taxonomies');
add_action('init', 'devdevil_project_post_type');
?>