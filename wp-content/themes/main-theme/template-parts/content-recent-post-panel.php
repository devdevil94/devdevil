
<div class="recent-post-panel">
    <div class="recent-post-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail();?>
        </a>
    </div>
    <div class="recent-post-body">
        <h4 class="recent-post-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h4>
        <div class="recent-post-info hide-info">
            <p class="recent-post-author">By <?php the_author_posts_link(); ?></p>          
            <p class="recent-post-date"><?php the_date(); ?></p>
        </div>
        
    </div>  
</div>  