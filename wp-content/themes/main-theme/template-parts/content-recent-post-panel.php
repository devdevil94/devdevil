
<div class="recent-post-panel">
    <div class="recent-post-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail();?>
        </a>
    </div>
    <div class="recent-post-body">
        <h3 class="recent-post-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <p class="recent-post-author hide-info">
            By <?php the_author_posts_link(); ?>
        </p>          
        <p class="recent-post-date hide-info"><?php the_date(); ?></p>
    </div>  
</div>  