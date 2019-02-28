<?php
wp_enqueue_style('mailchimp-css', 
get_template_directory_uri().'/css/social-media-accounts.css'
,array(), version_id(), 'all'); 
?>


<div id="social-icons-container">
    <h3 class="social-heading">Follow Me</h3>
    <div class="social-icons">
        <div class="fab fa-facebook"></div>
        <div class="fab fa-twitter"></div>
        <div class="fab fa-github"></div>
    </div>
</div>