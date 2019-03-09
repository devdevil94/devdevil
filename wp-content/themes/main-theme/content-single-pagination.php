<?php               
    if(get_previous_post()){
?>
        <div class="post-prev">
            <?php previous_post_link('&laquo; %link'); ?>
        </div>
<?php
    } 
?>
<?php               
    if(get_next_post()){
?>
        <div class="post-next">
            <?php next_post_link('%link &raquo;'); ?>
        </div>
<?php
    } 
?> 