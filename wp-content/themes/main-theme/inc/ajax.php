<?php
$action = 'devdevil_save_user_contact';

add_action('wp_ajax_nopriv_'.$action, $action);
add_action('wp_ajax_'.$action, $action);


function devdevil_save_user_contact(){
    $title = wp_strip_all_tags($_POST['name']);
    $email = wp_strip_all_tags($_POST['email']);
    $message = wp_strip_all_tags($_POST['message']);

    $args = array(
        'post_title' => $title,
        'post_content' => $message,
        'post_author' => 1,
        'post_status' => 'publish',
        'post_type' => 'devdevil-contact',
        'meta_input' => array(
            '_contact_email_key' => $email
        )
    );

    // wp_insert_post($args, $wp_error); For debugging and testing
    $postID = wp_insert_post($args);

    echo $postID;

    die();
}


?>