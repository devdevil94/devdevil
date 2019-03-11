<?php

function devdevil_add_social_media_page(){

    add_submenu_page('devdevil_general_options', 'devDevil Social Media', 'Social Media',
    'manage_options', 'devdevil_social_media_options', 'devdevil_create_social_media_page');
}

function devdevil_social_media_settings(){
    register_setting('devdevil-social-media-options', 'twitter','devdevil_sanitize_twitter');
    register_setting('devdevil-social-media-options', 'facebook');
    register_setting('devdevil-social-media-options', 'google');
    register_setting('devdevil-social-media-options', 'github');

    // register_setting('devdevil-social-media', 'social_media_accounts',
    // 'social_media_accounts_callback');

    add_settings_section('devdevil-social-media', 'Social Media Options',
    'devdevil_social_media_options', 'devdevil_social_media_options');
    
    // add_settings_field('sidebar-social-media', 'Social Media Accounts',
    // 'devdevil_social_media_accounts','devdevil_social_media_options','devdevil-social-media');

    add_settings_field('sidebar-twitter', 'Twitter', 'devdevil_twitter',
    'devdevil_social_media_options', 'devdevil-social-media');
    add_settings_field('sidebar-facebook', 'Facebook', 'devdevil_facebook',
    'devdevil_social_media_options', 'devdevil-social-media');
    add_settings_field('sidebar-google-plus', 'Google', 'devdevil_google',
    'devdevil_social_media_options', 'devdevil-social-media');
    add_settings_field('sidebar-github', 'GitHub', 'devdevil_github',
    'devdevil_social_media_options', 'devdevil-social-media');
}

function social_media_accounts_callback($input){
    return $input;
}

function devdevil_social_media_accounts(){
    $options = get_option('social_media_accounts');
    $accounts = array('twitter', 'facebook', 'google', 'github');
    $result = '<br>';
    foreach($accounts as $account){
        $checked = (@$options[$account] == 1 ? 'checked' : '');

        $result .= '
        <label>
            <input type="checkbox" id="'.$account.'" name="social_media_accounts['.$account.']"
            value="1"'.$checked.' />
            '.$account.'
        </label><br>';
    }
    echo $result;
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
    " placeholder="Twitter" />
    <p class="description">Enter your twitter username without the \'@\' character</p>';
}
function devdevil_facebook(){
    $facebook = esc_attr(get_option('facebook'));
    echo '<input type="text" name="facebook" value="'.$facebook.'
    " placeholder="Facebook" />';
}
function devdevil_google(){
    $google = esc_attr(get_option('google'));
    echo '<input type="text" name="google" value="'.$google.'
    " placeholder="Google+" />';
}

function devdevil_github(){
    $github = esc_attr(get_option('github'));
    echo '<input type="text" name="github" value="'.$github.'
    " placeholder="GitHub" />';
}

function devdevil_create_social_media_page(){
    require_once(get_template_directory().'/inc/templates/devdevil-social-media-admin.php');
}

function devdevil_social_media_options(){
    echo 'Customize your social media accounts.';
}

add_action('admin_menu', 'devdevil_social_media_settings');
add_action('admin_menu', 'devdevil_add_social_media_page');


?>