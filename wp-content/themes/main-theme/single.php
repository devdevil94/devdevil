<?php 
    get_header();


    while(have_posts()){
        the_post();
        store_post_views(get_the_ID()); 
?>
    <div id="post-body">
        <div class="single-post-container">
            <h4 class="single-post-title"><?php the_title(); ?></h4>
            <p class="single-post-content"><?php the_content(); ?></p>
        </div>
        
<?php       
    }
?>




<?php get_footer(); ?>