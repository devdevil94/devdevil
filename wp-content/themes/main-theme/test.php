<?php
$componentsNames = explode(',', get_field('components_names'));
                $componentsLinks = explode(',', get_field('components_links'));

                if($componentsNames && $componentsLinks){
?>
                    <div class="components-list-container">
                        <ul class="components-list">
<?php
                            for($i = 0; $i < count($componentsNames); ++$i){
?>
                                <li>
<?php 
                                    if($componentsLinks[$i] != '-'){
?>
                                        <a href="<?php echo $componentsLinks[$i]; ?>">
                                            <?php echo $componentsNames[$i]; ?>
                                        </a>
<?php
                                    }else echo $componentsNames[$i];
?>
                                </li>
<?php
                            }
?>
                        </ul>
                    </div>
<?php
                }