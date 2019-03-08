<?php 
    get_header();

    while(have_posts()){
        the_post();
        store_post_views(get_the_ID()); 
?>
    <div id="single-post-body">
        <div class="section single-post">
            <div class="single-post-container">
                <h2 class="single-post-title"><?php the_title(); ?></h2>
                <div class="single-post-info">
                    <span class="sinple-post-date">
                        <?php the_date(); ?>
                    </span>
                    <span class="single-post-author">
                        by <a href="#"><?php the_author(); ?></a>
                    </span>
                </div>
                <div class="single-post-content"><?php the_content(); ?></div>
                <div class="single-post-pag">
<?php               
                    if(get_previous_post()){
?>
                        <div class="prev"><?php previous_post_link('&laquo; %link'); ?></div>
<?php
                    } 
?>
<?php               
                    if(get_next_post()){
?>
                        <div class="next"><?php next_post_link('%link &raquo;'); ?></div>
<?php
                    } 
?>                           
                </div>
<?php
                // if(comments_open())
                //     comments_template();
?>
            </div>
        </div>
             
<?php       
    }
?>
        <div class="section sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>



<?php get_footer(); ?>