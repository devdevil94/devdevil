

<?php settings_errors(); ?>
<!-- <p>Use this <strong>shortcode</strong></p><code>[contact_form]</code> -->
<form method="post" action="options.php">
    <?php
        settings_fields('devdevil-contact-form');
        do_settings_sections('devdevil_contact_options');
        submit_button();
    ?>
</form>