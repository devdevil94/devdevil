<?php
wp_enqueue_style('social-accounts-style', 
get_template_directory_uri().'/css/social-media-accounts.css'
,array(), microtime(), 'all'); 
?>


<div id="social-icons-container">
    <h3 class="social-heading">Follow Me</h3>
    <div class="social-icons">
        <a href="mailto:devdevilstudio@gmail.com">
            <div class="fa fa-envelope fa-2x"></div>
        </a>
        <a href="#"><div class="fab fa-twitter fa-2x"></div></a>
        <a href="#"><div class="fab fa-google fa-2x"></div></a>
        <a href="#"><div class="fab fa-github fa-2x"></div></a>
    </div>
</div>