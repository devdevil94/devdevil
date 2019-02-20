
<?php

/*

*/

function devdevil_add_admin_page(){
    add_menu_page('devDevil Theme Options', 'devDevil','manage_options',
    'devdevil_options', 'devdevil_create_page', 'dashicons-admin-customizer', 112);

    add_submenu_page('devdevil_options', 'devDevil Settings', 'Settings',
    'manage_options', 'devdevil_options', 'devdevil_create_page');

    add_submenu_page('devdevil_options', 'devDevil Social Media', 'Social Media',
    'manage_options', 'devdevil_social_media', 'devdevil_social_media_page');

    add_action('admin_menu', 'devdevil_custom_settings');
}

add_action('admin_menu', 'devdevil_add_admin_page');

function devdevil_custom_settings(){
    register_setting('devdevil-settings-group', 'first_name');
}


function devdevil_create_page(){
    require_once(get_template_directory().'/inc/templates/devdevil-admin.php');
}

function devdevil_social_media_page(){
    
}