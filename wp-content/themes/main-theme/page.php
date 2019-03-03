<?php 
    get_header();


    while(have_posts()){
        the_post();
?>
    <div id="single-page-body">
        <div class="single-page-container">
            <h2 class="single-page-title"><?php the_title(); ?></h2>
            <div class="single-page-content"><?php the_content(); ?></div>
        </div>     
<?php       
    }
?>
        <div class="sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>



<?php get_footer(); ?>