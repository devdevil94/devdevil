

<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php
        settings_fields('devdevil-social-media');
        do_settings_sections('devdevil_social_media_options');
        submit_button();
    ?>
</form>