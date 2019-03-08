

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
                    <div class="search-result-panel">
                        <div class="search-result-content">
                            <h3 <?php if(get_post_type() == 'page')
                            echo 'style="margin-bottom: 15px;"'; ?>
                            class="search-result-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
<?php
                            if(get_post_type() == 'post' || get_post_type() == 'project'){
?>
                                <p class="search-result-info">
                                    <?php the_date(); ?> By
                                    <a href="#"><?php the_author(); ?></a>
                                </p>     
<?php
                            }
?>
                            <p class="search-result-excerpt">
                                <?php echo wp_trim_words(get_the_content(), 30); ?>
                            </p>
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