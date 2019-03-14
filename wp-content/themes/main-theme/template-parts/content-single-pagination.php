<?php               
    if(get_previous_post()){
        $trimedTitle = wp_trim_words(get_the_title(get_previous_post()), 5);
?>
        <div class="post-prev">
            <?php previous_post_link('&laquo; %link', $trimedTitle, false); ?>
        </div>
<?php
    } 
?>
<?php               
    if(get_next_post()){
        $trimedTitle = wp_trim_words(get_the_title(get_next_post()), 5);
?>
        <div class="post-next">
            <?php next_post_link('%link &raquo;', $trimedTitle, false); ?>
        </div>
<?php
    } 
?> 