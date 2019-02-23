
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
//add_settings_section($id, $title, $callback, $page)
    add_settings_section('devdevil-general-options', 'General Information',
    'devdevil_general_info_options', 'devdevil_options');
//add_settings_field($id, $title, $callback, $page, $section, $args)
    add_settings_field('sidebar-name', 'Full Name', 'devdevil_full_name',
    'devdevil_options', 'devdevil-general-options');
 

    register_setting('devdevil-social-media', 'twitter',
    'devdevil_sanitize_twitter');
    register_setting('devdevil-social-media', 'facebook');
    register_setting('devdevil-social-media', 'google_plus');
    register_setting('devdevil-social-media', 'github');


    add_settings_section('devdevil-social-media', 'Social Media Options',
    'devdevil_social_media_options', 'devdevil_options');
    
    add_settings_field('sidebar-twitter', 'Twitter', 'devdevil_twitter',
    'devdevil_options', 'devdevil-social-media');
    add_settings_field('sidebar-facebook', 'Facebook', 'devdevil_facebook',
    'devdevil_options', 'devdevil-social-media');
    add_settings_field('sidebar-google-plus', 'Google Plus', 'devdevil_google_plus',
    'devdevil_options', 'devdevil-social-media');
    add_settings_field('sidebar-github', 'Git Hub', 'devdevil_github',
    'devdevil_options', 'devdevil-social-media');
}


function devdevil_theme_options(){
    echo 'Activate theme options.';
}

function devdevil_post_formats_callback($input){
    return $input;
}

function devdevil_sanitize_twitter($input){
    $output = sanitize_text_field($input);
    $output = str_replace('@', '', $output);
    return $output; //Always return, Never echo
}

function devdevil_twitter(){
    $twitter = esc_attr(get_option('twitter'));
    //name sould be the $option_name of the registered setting
    echo '<input type="text" name="twitter" value="'.$twitter.'
    "placeholder="Twitter" />
    <p class="description">Enter your twitter username without the \'@\' character</p>';
}
function devdevil_facebook(){
    $facebook = esc_attr(get_option('facebook'));
    echo '<input type="text" name="facebook" value="'.$facebook.'
    "placeholder="Facebook" />';
}
function devdevil_google_plus(){
    $google_plus = esc_attr(get_option('google_plus'));
    echo '<input type="text" name="google_plus" value="'.$google_plus.'
    "placeholder="Google+" />';
}

function devdevil_github(){
    $github = esc_attr(get_option('github'));
    echo '<input type="text" name="github" value="'.$github.'
    "placeholder="GitHub" />';
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


function devdevil_social_media_options(){
    echo 'Customize your social media accounts.';
}

function devdevil_general_info_options(){
    echo 'General information about you.';
}

function devdevil_create_page(){
    require_once(get_template_directory().'/inc/templates/devdevil-admin.php');
}

function devdevil_create_social_media_page(){
    require_once(get_template_directory().'/inc/templates/devdevil-social-media.php');
}