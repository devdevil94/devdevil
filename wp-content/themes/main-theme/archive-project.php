

<?php get_header(); ?>

<div id="projects-body">
    <div class="section projects">
        <div class="projects-container">
            <h3 class="projects-heading">Projects</h3>
<?php 
            $projectsListQuery = new WP_Query(array(
                'posts_per_page' => 1,
                'post_type' => 'project'
            ));
            if($projectsListQuery->have_posts()){
                while($projectsListQuery->have_posts()){
                    $projectsListQuery->the_post();
?>
                    <div class="project-panel">
                        <div class="project-thumbnail">
                            <a href="<?php the_permalink(); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <div class="project-content">
                            <h3 class="project-title">
                                <a href="<?php the_permalink(); ?>">
                                    <?php the_title(); ?>
                                </a>
                            </h3>
                            <p class="project-info">
                                <?php the_date(); ?> By <a href="#"><?php the_author(); ?></a>
                            </p>          
                            <h4 class="project-excerpt">
                                <?php echo wp_trim_words(get_the_content(), 20); ?>
                            </h4>
                            
                        </div>  
                    </div>       
<?php 
                }
?>
                <div class="project-pag">
<?php
                    echo paginate_links();                   
?>
                </div>
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