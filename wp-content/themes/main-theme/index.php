

<?php get_header(); ?>

<div id="blog-posts-body">
    <div class="section blog-posts">
        <div class="blog-posts-container">
            <h3 class="blog-posts-heading">Blog Posts</h3>
<?php 
            $postsListQuery = new WP_Query(array(
                'posts_per_page' => 4,
                'post_type' => 'post'
            ));
            while($postsListQuery->have_posts()){
                $postsListQuery->the_post();
?>
                <div class="blog-post-panel">
                    <div class="blog-post-thumbnail">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                    </div>
                    <div class="blog-post-content">
                        <h3 class="blog-post-title">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_title(); ?>
                            </a>
                        </h3>
                        <p class="blog-post-author">
                            By <a href="#"><?php the_author(); ?></a>
                        </p>          
                        <h4 class="blog-post-excerpt">
<?php
                            if(has_excerpt()) echo get_the_excerpt();
                            else echo wp_trim_words(get_the_content(), 20);
?>
                        </h4>
                        <p class="blog-post-date"><?php the_date(); ?></p>
                    </div>  
                </div>       
<?php 
            }
?>      
        </div>
    </div>
    
    <div class="section sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>