<?php

function devdevil_add_social_media_page(){

    add_submenu_page('devdevil_general_options', 'devDevil Social Media', 'Social Media',
    'manage_options', 'devdevil_social_media_options', 'devdevil_create_social_media_page');
}

function devdevil_social_media_settings(){
    register_setting('devdevil-social-media', 'twitter','devdevil_sanitize_twitter');
    register_setting('devdevil-social-media', 'facebook');
    register_setting('devdevil-social-media', 'google_plus');
    register_setting('devdevil-social-media', 'github');


    add_settings_section('devdevil-social-media', 'Social Media Options',
    'devdevil_social_media_options', 'devdevil_social_media_options');
    
    add_settings_field('sidebar-twitter', 'Twitter', 'devdevil_twitter',
    'devdevil_social_media_options', 'devdevil-social-media');
    add_settings_field('sidebar-facebook', 'Facebook', 'devdevil_facebook',
    'devdevil_social_media_options', 'devdevil-social-media');
    add_settings_field('sidebar-google-plus', 'Google Plus', 'devdevil_google_plus',
    'devdevil_social_media_options', 'devdevil-social-media');
    add_settings_field('sidebar-github', 'Git Hub', 'devdevil_github',
    'devdevil_social_media_options', 'devdevil-social-media');
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

function devdevil_create_social_media_page(){
    require_once(get_template_directory().'/inc/templates/devdevil-social-media.php');
}

function devdevil_social_media_options(){
    echo 'Customize your social media accounts.';
}

add_action('admin_menu', 'devdevil_social_media_settings');
add_action('admin_menu', 'devdevil_add_social_media_page');


?>