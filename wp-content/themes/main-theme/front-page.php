

<?php get_header(); ?>

<div id="home-content">
    <div class="section recent-posts">
        <div class="recent-posts-container">
            <h3 class="recent-posts-heading">Recent Blog Posts</h3>
<?php 
                $homePostsQuery = new WP_Query(array(
                    'posts_per_page' => 4
                ));
                while($homePostsQuery->have_posts()){
                    $homePostsQuery->the_post();
?>
                    <div class="recent-post-panel">
                        <div class="recent-post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="recent-post-body">
                            <h3 class="recent-post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p class="recent-post-author">
                                By <a href="#"><?php the_author(); ?></a>
                            </p>          
                            <h4 class="recent-post-excerpt">
                                <?php
                                    // if(has_excerpt())
                                    //     echo get_the_excerpt();
                                    // else
                                        echo wp_trim_words(get_the_content(), 20);
                                    ?>
                            </h4>
                            <p class="recent-post-date"><?php the_date(); ?></p>
                        </div>  
                    </div>       
<?php 
                }
?>
        </div>
        <div class="view-posts">
            <a class="big-btn" href="<?php echo site_url('/blog'); ?>">
                View All Posts
            </a>
        </div>        
    </div>
        
    <div class="section sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>