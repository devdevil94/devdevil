<?php 
    get_header();

    while(have_posts()){
        the_post();
?>
    <div id="single-post-body">
        <div class="section single-post">
            <div class="single-post-container">
                <h2 class="single-post-title"><?php the_title(); ?></h2>
                <div class="single-post-info">
                    <span class="sinple-post-date">
                        <?php the_date(); ?>
                    </span>
                    <span class="single-post-author">
                        by <a href="#"><?php the_author(); ?></a>
                    </span>
                </div>
                <div class="single-post-content"><?php the_content(); ?></div>
                <div class="single-post-pag">
                    <?php get_template_part('content', 'single-pagination'); ?>                         
                </div>
<?php
                $relatedPosts = get_field('related_posts');

                // if(comments_open())
                //     comments_template();
                if($relatedPosts){
?>     
                    <div class="related-posts-container">
                        <h4 class="related-posts-heading">Related Posts</h4>
                        <ul class="related-posts-list">
<?php
                        foreach($relatedPosts as $post){
?>
                            <li class="related-post">
                                <a href="<?php echo get_the_permalink($post); ?>">
                                    <?php echo get_the_title($post); ?>
                                </a>
                            </li>
<?php
                        }
?>
                        </ul>
                    </div>
<?php
                }
?>
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