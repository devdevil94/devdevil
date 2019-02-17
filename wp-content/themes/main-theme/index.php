

<?php get_header(); ?>

<div id="home">
    <div class="section">
        <h4 class="section-heading">Recent Blog Posts</h4>
        <div class="posts-container">
            <?php 
                $homePostsQuery = new WP_Query(array(
                    'posts_per_page' => 4
                ));

                while($homePostsQuery->have_posts()){
                    $homePostsQuery->the_post();
                ?>
                    <div class="post-panel">
                        <div class="post-thumbnail"><?php the_post_thumbnail('home-post-thumbnail'); ?></div>
                        <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        <p class="post-author"> By <a href="#"><?php the_author(); ?></a></p>          
                        <h4 class="post-excerpt">
                            <?php
                                if(has_excerpt())
                                    echo get_the_excerpt();
                                else
                                    echo wp_trim_words(get_the_content(), 20);
                                ?>
                        </h4>
                        <p class="post-date"><?php the_date(); ?></p>
                        
                    </div>
            <?php 
                }
                ?>
        </div>
    </div>
</div>


<?php get_footer(); ?>