

<h1>devDevil Theme Options</h1>
<?php settings_errors(); ?>
<form method="post" action="options.php">
    <?php
        settings_fields('devdevil-settings-group');
        do_settings_sections('devdevil_general_options');
        submit_button();
    ?>
</form>