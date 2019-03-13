<?php
$componentsNames = explode(',', get_field('components_names'));
                $componentsLinks = explode(',', get_field('components_links'));

                if($componentsNames && $componentsLinks){
?>
                    <div class="components-list-container">
                        <ul class="components-list">
<?php
                            for($i = 0; $i < count($componentsNames); ++$i){
?>
                                <li>
<?php 
                                    if($componentsLinks[$i] != '-'){
?>
                                        <a href="<?php echo $componentsLinks[$i]; ?>">
                                            <?php echo $componentsNames[$i]; ?>
                                        </a>
<?php
                                    }else echo $componentsNames[$i];
?>
                                </li>
<?php
                            }
?>
                        </ul>
                    </div>
<?php
                }
?>





<?php get_header(); ?>

<div id="home-content" class="main-body">
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
                                <?php the_post_thumbnail();?>
                            </a>
                        </div>
                        <div class="recent-post-body">
                            <h3 class="recent-post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p class="recent-post-author">
                                By <?php the_author_posts_link(); ?>
                            </p>          
                            <h4 class="recent-post-excerpt">
<?php                           if(has_excerpt())
                                    the_excerpt();
                                else
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
            <a class="big-btn" href="<?php echo site_url('/blog'); ?>">View All Posts</a>
        </div>        
    </div>
        
    <div class="section sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>