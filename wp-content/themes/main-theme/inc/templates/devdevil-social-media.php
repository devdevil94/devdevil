

<h1>devDevil Social Media Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php
        settings_fields('devdevil-settings-group');
        do_settings_sections('devdevil_options');
        submit_button();
    ?>
</form>