

<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php
        settings_fields('devdevil-contact-form');
        do_settings_sections('devdevil_contact_options');
        submit_button();
    ?>
</form>