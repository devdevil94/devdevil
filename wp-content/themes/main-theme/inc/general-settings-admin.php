
<?php

/*

*/

function devdevil_add_admin_page(){
//add_menu_page($page_title, $menu_title, $capability, $menu_slug,
//$function, $icon_url, $position)
    add_menu_page('devDevil Theme Options', 'devDevil','manage_options',
    'devdevil_general_options', 'devdevil_create_page', 'dashicons-admin-customizer', 112);
//add_submenu_page($parent_slug, $page_title, $menu_title, $capability,
//$menu_slug, $function)
    add_submenu_page('devdevil_general_options', 'devDevil Settings', 'Settings',
    'manage_options', 'devdevil_general_options', 'devdevil_create_page');

}

add_action('admin_menu', 'devdevil_add_admin_page');
add_action('admin_menu', 'devdevil_general_settings');

function devdevil_general_settings(){
//register_setting($option_group, $option_name, $sanitize_callback)
    register_setting('devdevil-settings-group', 'first_name');
    register_setting('devdevil-settings-group', 'last_name');
//add_settings_section($id, $title, $callback, $page)
    add_settings_section('devdevil-general-options', 'General Information',
    'devdevil_general_options', 'devdevil_general_options');
//add_settings_field($id, $title, $callback, $page, $section, $args)
    add_settings_field('sidebar-name', 'Full Name', 'devdevil_full_name',
    'devdevil_general_options', 'devdevil-general-options');
 
}


function devdevil_theme_general_options(){
    echo 'Activate theme options.';
}

function devdevil_post_formats_callback($input){
    return $input;
}

function devdevil_full_name(){
    //esc_attr used with user input to protect the database from attacks
    $firstName = esc_attr(get_option('first_name'));
    $lastName = esc_attr(get_option('last_name'));
    //name sould be the $option_name of the registered setting
    echo '<input type="text" name="first_name" value="'.$firstName.'
    " placeholder="First Name" />';
    echo '<input type="text" name="last_name" value="'.$lastName.'
    " placeholder="Last Name" />';
}

function devdevil_general_options(){
    echo 'General information about you.';
}

function devdevil_create_page(){
    require_once(get_template_directory().'/inc/templates/devdevil-admin.php');
}