

<?php get_header(); ?>

<div id="blog-posts-body" class="main-body">
    <div class="section blog-posts">
        <div class="blog-posts-container">
<?php
            if(is_author()){
                the_post();
                echo '<h3 class="blog-posts-heading>Posts by '.get_the_author().'</h3>';
                rewind_posts();
            }elseif(is_category()){
                echo '<h3 class="blog-posts-heading">Posts on '.single_cat_title().'</h3>';                
            }
            $postsListQuery = new WP_Query(array(
                'post_type' => array('post', 'project'),
                'posts_per_page' => 10,
                'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1
            ));
            if($postsListQuery->have_posts()){
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
                                <?php the_date(); ?> By <?php the_author_posts_link(); ?>
                            </p>          
                            <h4 class="blog-post-excerpt">
                                <?php echo wp_trim_words(get_the_content(), 20); ?>
                            </h4>
                        </div>  
                    </div>       
<?php 
                }

                echo '<div class="list-pag">';
                    $big = 999999999;
                    $pagArgs = array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $postsListQuery->max_num_pages
                    );
                    echo paginate_links($pagArgs);
                echo '</div>';
              
            }
?>          
        </div>
    </div>
    
    <div class="section sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>