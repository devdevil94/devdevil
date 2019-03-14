

<?php get_header(); ?>

<div id="home-content" class="main-body">
    <div class="section recent-posts">
        <div class="recent-posts-container">
            <h3 class="recent-posts-heading">Recent Blog Posts</h3>

            <div class="recent-posts-outer">
                <div class="recent-posts-inner">
<?php 
                    $homePostsQuery = new WP_Query(array(
                        'posts_per_page' => 1
                    ));
                    if($homePostsQuery->have_posts()){
                        while($homePostsQuery->have_posts()){
                            $homePostsQuery->the_post();
                            get_template_part('template-parts/content', 'recent-post-panel');
                        }
                    }
                    wp_reset_postdata();
?>
                </div>

                <div class="recent-posts-inner two-rows">
<?php 
                    $homePostsQuery = new WP_Query(array(
                        'posts_per_page' => 2,
                        'offset' => 1
                    ));
                    if($homePostsQuery->have_posts()){
                        while($homePostsQuery->have_posts()){
                            $homePostsQuery->the_post();
                            get_template_part('template-parts/content', 'recent-post-panel');    
                        }
                    }
                    wp_reset_postdata();
?>
                </div>
            </div>
            <div class="recent-posts-outer marginTop">
<?php
                $homePostsQuery = new WP_Query(array(
                    'posts_per_page' => 2,
                    'offset' => 2
                ));
                if($homePostsQuery->have_posts()){
                    while($homePostsQuery->have_posts()){
                        $homePostsQuery->the_post();
                        echo '<div class="recent-posts-inner">';
                        get_template_part('template-parts/content', 'recent-post-panel');
                        echo '</div>';
                    }
                }
                wp_reset_postdata();
?>
                </div>
        </div>
        <div class="view-posts">
            <a class="big-btn" href="<?php echo site_url('/blog'); ?>">View All Posts</a>
        </div>        
    </div>
        
    <div class="section sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>