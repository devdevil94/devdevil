<?php
wp_enqueue_style('social-accounts-style', 
get_template_directory_uri().'/css/social-media-accounts.css'
,array(), microtime(), 'all');

$twitterLink = 'https://www.twitter.com/'.esc_attr(get_option('twitter'));
$googleLink = 'https://plus.google.com/'.esc_attr(get_option('google'));
$facebookLink = 'https://www.facebook.com/'.esc_attr(get_option('facebook'));
?>


<div id="social-icons-container">
    <h3 class="social-heading">Follow Me</h3>
    <div class="social-icons">
        <a href="<?php echo $twitterLink; ?>">
            <i class="fab fa-twitter fa-2x"></i>
        </a>
        <a href="<?php echo $googleLink; ?>">
            <i class="fab fa-google fa-2x"></i>
        </a>
        <a href=" <?php echo $facebookLink; ?>">
            <i class="fab fa-facebook fa-2x"></i>
        </a>
    </div>
</div>