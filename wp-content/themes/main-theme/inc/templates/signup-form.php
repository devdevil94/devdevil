<?php 
wp_enqueue_script('mailchimp-js',
'//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js', array( 'jquery' ), true);
wp_enqueue_style('mailchimp-css', get_template_directory_uri().'/css/signup-form.css'
,array(), version_id(), 'all'); 
?>

<div id="mc_embed_signup">
    <form id="mc-embedded-subscribe-form" class="validate"
    action="https:devdevil.us20.list-manage.com/subscribe/post?u=a935696707051141c0f557e8f&amp;id=a076571c2f"
    method="post" name="mc-embedded-subscribe-form" novalidate="" target="_blank">
        <div id="mc_embed_signup_scroll">
            <h2>Subscribe</h2>
            <div class="indicates-required">
                <span class="asterisk">*</span>
                indicates required
            </div>
            <div class="mc-field-group">
                <label for="mce-EMAIL">
                    Email Address 
                    <span class="asterisk">*</span>
                </label>
                <input id="mce-EMAIL" class="required email" name="EMAIL"
                type="email" value="" />
            </div>
            <div class="mc-field-group">
                <label for="mce-FNAME">First Name </label>
                <input id="mce-FNAME" class="" name="FNAME" type="text" value="" />
            </div>
            <div id="mce-responses" class="clear">
                <div id="mce-error-response" class="response" style="display: none;"></div>
                <div id="mce-success-response" class="response" style="display: none;"></div>
            </div>
            <!-- real people should not fill this in and expect good things - 
            do not remove this or risk form bot signups-->
            <div style="position: absolute; left: -5000px;" aria-hidden="true">
                <input tabindex="-1" name="b_a935696707051141c0f557e8f_a076571c2f"
                type="text" value="" />
            </div>
            <div class="clear">
                <input id="mc-embedded-subscribe" name="subscribe" type="submit" 
                value="Subscribe" />
            </div>
        </div>
    </form>
</div>