

<?php get_header(); ?>

<div id="blog-posts-body">
    <div class="section blog-posts">
        <div class="blog-posts-container">
            <h3 class="blog-posts-heading">
                Search results for: <?php echo get_search_query(); ?>
            </h3>
<?php 
            if(have_posts()){
                while(have_posts()){
                    the_post();
?>
                    <div class="blog-post-panel">
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
?>
                <div class="blog-post-pag">
<?php
                    echo paginate_links();
// next_post_link('<span>Next</span><h3>%link</h3>', '%title', false);
// previous_posts_link('<span>Prev</span><h3>%link</h3>', '%title', false);
?>
                </div>
<?php               
            }else{
?>
                <p style="margin-bottom: 150px;">No results found</p>
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