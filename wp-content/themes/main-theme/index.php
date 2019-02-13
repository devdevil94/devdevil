

<?php get_header(); ?>

<div class="section services">
    <div class="services-container">
        <div class="service-panel">
            <div class="service-icons">
                <i class="fab fa-wordpress fa-2x"></i>                
            </div>
            <h4 class="service-title">Wordpress</h4>
            <p class="service-text">
                Lorem ipsum dolor sit amet, nam purto etiam veniam in,
                placerat scribentur delicatissimi ei cum.Id wisi quaestio volutpat usu.
                Platonem referrentur ea mel, est fuisset appellantur cu, equidem concludaturque quo ei.
            </p>
        </div>
        <div class="service-panel">
            <div class="service-icons">
                <i class="fab fa-html5 fa-2x"></i>
                <i class="fab fa-css3-alt fa-2x"></i>
                <i class="fab fa-js-square fa-2x"></i>
            </div>
            <h4 class="service-title">Front End</h4>
            <p class="service-text">
                Lorem ipsum dolor sit amet, nam purto etiam veniam in,
                placerat scribentur delicatissimi ei cum.Id wisi quaestio volutpat usu.
                Platonem referrentur ea mel, est fuisset appellantur cu, equidem concludaturque quo ei. 
            </p>
        </div>
        <div class="service-panel">
            <div class="service-icons">
                <i class="fas fa-desktop fa-2x"></i>
                <i class="fas fa-tablet-alt fa-2x"></i>
                <i class="fas fa-mobile-alt fa-2x"></i>
            </div>
            <h4 class="service-title">Web Application</h4>
            <p class="service-text">
                Lorem ipsum dolor sit amet, nam purto etiam veniam in,
                placerat scribentur delicatissimi ei cum.Id wisi quaestio volutpat usu.
                Platonem referrentur ea mel, est fuisset appellantur cu, equidem concludaturque quo ei.
            </p>
        </div>
    </div>
</div>

<div class="section posts">
    <div class="posts-container">
        <?php 
            $homePostsQuery = new WP_Query(array(
                'posts_per_page' => 4
            ));

            while($homePostsQuery->have_posts()){
                $homePostsQuery->the_post();
            ?>
                <div class="post-panel">
                    <div class="post-thumbnail"><?php the_post_thumbnail('home-post-thumbnail'); ?></div>
                    <h3 class="post-title"><?php the_title(); ?></h3>
                    <p class="post-author"> By <a href="#"><?php the_author(); ?></a></p>          
                    <h4 class="post-excerpt">
                        <?php
                            if(has_excerpt())
                                echo get_the_excerpt();
                            else
                                echo wp_trim_words(get_the_content(), 20);
                            ?>
                    </h4>
                    <p class="post-date">Date Here</p>  
                </div>
        <?php 
            }
            ?>

    </div>
</div>



<div id="fixed">
    
</div>

<?php get_footer(); ?>