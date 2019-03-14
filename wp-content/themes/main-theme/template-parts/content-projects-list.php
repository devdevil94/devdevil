<div class="project-panel">
    <div class="project-thumbnail">
        <a href="<?php the_permalink(); ?>">
            <?php the_post_thumbnail(); ?>
        </a>
    </div>
    <div class="project-content">
        <h3 class="project-title">
            <a href="<?php the_permalink(); ?>">
                <?php the_title(); ?>
            </a>
        </h3>
        <p class="project-info">
            <?php the_date(); ?>
                By <?php the_author_posts_link(); ?>
        </p>          
        <p class="project-excerpt">
<?php                           
            if(has_excerpt())
                the_excerpt();
            else
                echo wp_trim_words(get_the_content(), 20); 
?>
        </p>   
    </div>  
</div>    