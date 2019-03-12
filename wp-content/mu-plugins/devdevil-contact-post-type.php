<?php


$contact = get_option('activate_contact_form');

if(@$contact == 1){
    add_action('init', 'devdevil_contact_post_type');

    add_filter('manage_devdevil-contact_posts_columns',
    'devdevil_set_contact_columns');

    add_action('manage_devdevil-contact_posts_custom_column',
    'devdevil_contact_custom_column', 10, 2);

    add_action('add_meta_boxes', 'devdevil_contact_add_mata_box');

    add_action('save_post', 'devdevil_save_contact_email_data');
}

function devdevil_contact_add_mata_box(){
    add_meta_box('contact_email', 'User Email', 'devdevil_contact_email',
    'devdevil-contact', 'side');
}

function devdevil_contact_email($post){
    wp_nonce_field('devdevil_save_contact_email_data',
    'devdevil_contact_email_meta_box_nonce');
    $value = get_post_meta($post->ID, '_contact_email_key', true);

    echo '
        <label for="devdevil_contact_email_field">User Emaill Address: </label>
        <input type="email" id="devdevil_contact_email_field"
        name="devdevil_contact_email_field" value="'.esc_attr($value).'" size="25" />
    ';
}
function devdevil_save_contact_email_data($post_id){
    if(!isset($_POST['devdevil_contact_email_meta_box_nonce'])) return;
    
    if(!wp_verify_nonce($_POST['devdevil_contact_email_meta_box_nonce'],
    'devdevil_save_contact_email_data')) return;

    if(defined('DOING_AUTOSAVE') && DOING_AUTOSAVE) return;

    if(!current_user_can('edit_post', $post_id)) return;

    if(!isset($_POST['devdevil_contact_email_field'])) return;

    $email_data = sanitize_text_field($_POST['devdevil_contact_email_field']);
    update_post_meta($post_id, '_contact_email_key', $email_data);

}
function devdevil_contact_custom_column($column, $post_id){
    switch($column){
        case 'message':
            echo get_the_excerpt();
            break;
        case 'email':
            $email = get_post_meta($post_id, '_contact_email_key', true);
            echo '<a href="mailto:'.$email.'" >'.$email.'</a>';
            break;
    }
}
function devdevil_set_contact_columns($columns){
    $newColumns = array();
    $newColumns['title'] = 'Full Name';
    $newColumns['message'] = 'Message';
    $newColumns['email'] = 'Email';
    $newColumns['date'] = 'Date';
    return $newColumns;
}

function devdevil_contact_post_type(){
    $labels = array(
        'name' => 'Messages',
        'singular_name' => 'Message',
        'menu_name' => 'Messages',
        'name_admin_bar' => 'Message'
    );

    register_post_type('devdevil-contact', array( 
        'supports' => array('title', 'editor', 'author'),
        'hierarchical' => false,
        'show_ui' => true,
        'show_in_menu' => true,
        'capability_type' => 'post',
        'menu_position' => 26,
        'labels' => $labels,
        'menu_icon' => 'dashicons-email-alt',
    ));
    
}




?>