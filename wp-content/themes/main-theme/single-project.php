<?php 
    get_header();

    while(have_posts()){
        the_post();
        store_post_views(get_the_ID()); 
?>
    <div id="single-post-body">
        <div class="section single-post-container">
            <h2 class="single-post-title"><?php the_title(); ?></h2>
            <div class="single-post-info">
                <span class="sinple-post-date">
                    <?php the_date(); ?>
                </span>
                <span class="single-post-author">
                    by <a href="#"><?php the_author_posts_link(); ?></a>
                </span>
            </div>
            <div class="single-post-content"><?php the_content(); ?></div>
        </div>     
<?php       
    }
?>
        <div class="section sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>



<?php get_footer(); ?>