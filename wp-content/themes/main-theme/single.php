<?php 
    get_header();


    while(have_posts()){
        the_post();
        store_post_views(get_the_ID()); 
?>
    <div id="single-post-body">
        <div class="single-post-container">
            <h2 class="single-post-title"><?php the_title(); ?></h2>
            <p class="single-post-info">
                Posted on <?php the_date(); ?>
                by <a href="#"><?php the_author(); ?></a>
            </p>
            <div class="single-post-content"><?php the_content(); ?></div>
        </div>     
<?php       
    }
?>
        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>



<?php get_footer(); ?>