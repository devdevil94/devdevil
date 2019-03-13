

<?php get_header(); ?>

<div id="archive-body" class="main-body">
    <div class="section archive-posts">
        <div class="blog-posts-container">
<?php
            add_filter('get_the_archive_title', function ($title) {
                if(is_author()){
                    $title = 'Posts By '.get_the_author();
                }elseif(is_category()){
                    $title = single_cat_title();
                }
                return $title;
            });
            the_archive_title('<h3 class="blog-posts-heading">', '</h3>');
            
            $archivePostsQuery = new WP_Query(array(
                'post_type' => array('post', 'project'),
                'posts_per_page' => 10,
                'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1
            ));
            if($archivePostsQuery->have_posts()){
                while($archivePostsQuery->have_posts()){
                    $archivePostsQuery->the_post();
?>
                    <div class="archive-post-panel">
                        <div class="archive-post-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="archive-post-content">
                            <h3 class="archive-post-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <h4 class="archive-post-date">
                                <?php the_date(); ?> <!-- Change this when cats. are added-->
                            </h4>          
                            <p class="archive-post-excerpt">
<?php                           if(has_excerpt())
                                    the_excerpt();
                                else
                                    echo wp_trim_words(get_the_content(), 20); 
?>
                            </p>
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
                        'total' => $archivePostsQuery->max_num_pages
                    );
                    echo paginate_links($pagArgs);
                echo '</div>';
              
            }
            wp_reset_postdata();
?>          
        </div>
    </div>
    
    <div class="section sidebar">
        <?php get_sidebar(); ?>
    </div>
</div>

<?php get_footer(); ?>