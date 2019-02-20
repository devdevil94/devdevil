
<?php

/*

*/

function devdevil_add_admin_page(){
//add_menu_page($page_title, $menu_title, $capability, $menu_slug,
//$function, $icon_url, $position)
    add_menu_page('devDevil Theme Options', 'devDevil','manage_options',
    'devdevil_options', 'devdevil_create_page', 'dashicons-admin-customizer', 112);
//add_submenu_page($parent_slug, $page_title, $menu_title, $capability,
//$menu_slug, $function)
    add_submenu_page('devdevil_options', 'devDevil Settings', 'Settings',
    'manage_options', 'devdevil_options', 'devdevil_create_page');

    add_submenu_page('devdevil_options', 'devDevil Social Media', 'Social Media',
    'manage_options', 'devdevil_social_media', 'devdevil_create_social_media_page');
}

add_action('admin_menu', 'devdevil_custom_settings');
add_action('admin_menu', 'devdevil_add_admin_page');

function devdevil_custom_settings(){
//register_setting($option_group, $option_name, $sanitize_callback)
    register_setting('devdevil-settings-group', 'first_name');
    register_setting('devdevil-settings-group', 'last_name');
    register_setting('devdevil-settings-group', 'twitter_handler',
    'devdevil_sanitize_twitter_handler');
//add_settings_section($id, $title, $callback, $page)
    add_settings_section('devdevil-sidebar-options', 'Sidebar Options',
    'devdevil_create_sidebar_options', 'devdevil_options');

//add_settings_field($id, $title, $callback, $page, $section, $args)
    add_settings_field('sidebar-name', 'Full Name', 'devdevil_sidebar_name',
    'devdevil_options', 'devdevil-sidebar-options');
    add_settings_field('sidebar-twitter', 'Twitter Handler', 'devdevil_sidebar_twitter',
    'devdevil_options', 'devdevil-sidebar-options');
    
}

function devdevil_sanitize_twitter_handler($input){
    $output = sanitize_text_field($input);
    $output = str_replace('@', '', $output);
    return $output; //Always return, Never echo
}

function devdevil_sidebar_twitter(){
    $twitter = esc_attr(get_option('twitter_handler'));
    //name sould be the $option_name of the registered setting
    echo '<input type="text" name="twitter_handler" value="'.$twitter.'
    "placeholder="Twitter Handler" />
    <p class="description">Enter your twitter username without the \'@\' character</p>';
}

function devdevil_sidebar_name(){
    //esc_attr used with user input to protect the database from attacks
    $firstName = esc_attr(get_option('first_name'));
    $lastName = esc_attr(get_option('last_name'));
    //name sould be the $option_name of the registered setting
    echo '<input type="text" name="first_name" value="'.$firstName.'
    " placeholder="First Name" />';
    echo '<input type="text" name="last_name" value="'.$lastName.'
    " placeholder="Last Name" />';

}


function devdevil_create_sidebar_options(){
    echo 'Customize your sidebar information';
}

function devdevil_create_page(){
    require_once(get_template_directory().'/inc/templates/devdevil-admin.php');
}

function devdevil_create_social_media_page(){
    require_once(get_template_directory().'/inc/templates/devdevil-social-media.php');
    
}