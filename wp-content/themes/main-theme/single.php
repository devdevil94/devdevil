<?php 
    get_header();

    while(have_posts()){
        the_post();
        store_post_views(get_the_ID()); 
?>
    <div id="single-post-body" class="main-body">
        <div class="section single-post-section">
            <div class="single-post-container">
                <h2 class="single-post-title"><?php the_title(); ?></h2>
                <div class="single-post-info">
                    <span class="sinple-post-date">
                        <?php the_date(); ?>
                    </span>
                    <span class="single-post-author">
                        by <a href="#">Admin</a>
                    </span>
                </div>
                <div class="single-post-content"><?php the_content(); ?></div>
                <div class="single-post-pag">
                    <?php get_template_part('content', 'single-pagination'); ?>                         
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