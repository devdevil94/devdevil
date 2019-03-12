<?php
$action = 'devdevil_save_user_contact';

add_action('wp_ajax_nopriv_'.$action, $action);
add_action('wp_ajax_'.$action, $action);


function devdevil_save_user_contact(){
    $title = wp_strip_all_tags($_POST['name']);
    $email = wp_strip_all_tags($_POST['email']);
    $message = wp_strip_all_tags($_POST['message']);

    echo $email.','.$message.','.$title;
    // wp_insert_post();

    die();
}


?>