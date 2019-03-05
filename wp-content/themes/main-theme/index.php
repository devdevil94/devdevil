

<?php get_header(); ?>

<div id="blog-posts-body">
    <div class="section blog-posts">
        <div class="blog-posts-container">
            <h3 class="blog-posts-heading">Blog Posts</h3>
<?php 
            $postsListQuery = new WP_Query(array(
                'posts_per_page' => 1,
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
                        <p class="blog-post-info">
                            <?php the_date(); ?> By <a href="#"><?php the_author(); ?></a>
                        </p>          
                        <h4 class="blog-post-excerpt">
                            <?php echo wp_trim_words(get_the_content(), 20); ?>
                        </h4>
                        
                    </div>  
                </div>       
<?php 
            }
            echo paginate_links();
?>      
        </div>
    </div>
    
    <div class="section sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>