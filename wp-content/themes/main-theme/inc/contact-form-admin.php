<?php

function devdevil_add_contact_form_page(){
    add_submenu_page('devdevil_general_options', 'devDevil Contact Form', 'Contact Form',
    'manage_options', 'devdevil_contact_options', 'devdevil_create_contact_form_page');
}

function devdevil_create_contact_form_page(){
    require_once(get_template_directory().'/inc/templates/devdevil-contact-form-admin.php');
}

function devdevil_contact_form_settings(){
    register_setting('devdevil-contact-form', 'activate_contact_form');
    
    add_settings_section('devdevil-contact-form-options', 'Contact Form',
    'devdevil_contact_options_callback', 'devdevil_contact_options');

    add_settings_field('activate-form', 'Activate Contact Form',
    'devdevil_activate_contact_callback', 'devdevil_contact_options',
    'devdevil-contact-form-options');
}
function devdevil_activate_contact_callback(){
    $option = get_option('activate_contact_form');
    $checked = (@$option == 1 ? 'checked' : '');
    echo '
        <label>
            <input type="checkbox" id="activate_contact_form" name="activate_contact_form"
            value="1"'.$checked.' />
        </label>
    ';
}

function devdevil_contact_options_callback(){
    echo 'Activate and Deactivate the Contact Form';
}

add_action('admin_menu', 'devdevil_contact_form_settings');
add_action('admin_menu', 'devdevil_add_contact_form_page');

?>