<?php 
    get_header();


    while(have_posts()){
        the_post();
?>
    <div id="single-page-body" class="main-body">
        <div class="section single-page"> 
            <div class="single-page-container">
                <h2 class="single-page-title"><?php the_title(); ?></h2>
                <div class="single-page-content"><?php the_content(); ?></div>
            </div>
        </div>
<?php       
    }
?>
        <div class="section sidebar">
            <?php get_sidebar(); ?>
        </div>
    </div>



<?php get_footer(); ?>