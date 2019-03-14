
<div class="recent-post-panel">
    <span class="recent-post-category"><?php the_category(); ?></span>
    <div class="recent-post-thumbnail">
        <a href="<?php the_permalink(); ?>">
<?php       $postIndex = $homePostsQuery->current_post;

            if($postIndex == 1) the_post_thumbnail('post-thumbnail-tall');
            else the_post_thumbnail();
            
?>
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