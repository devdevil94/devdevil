

<?php get_header(); ?>

<div id="projects-body" class="main-body">
    <div class="section projects">
        <div class="projects-container">
            <h3 class="projects-heading">Projects</h3>
<?php 
            $projectsListQuery = new WP_Query(array(
                'posts_per_page' => 10,
                'post_type' => 'project',
                'paged' => (get_query_var('paged')) ? absint(get_query_var('paged')) : 1
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
                                <?php the_date(); ?> By <a href="#">Admin</a>
                            </p>          
                            <h4 class="project-excerpt">
                                <?php echo wp_trim_words(get_the_content(), 20); ?>
                            </h4>   
                        </div>  
                    </div>       
<?php 
                }
?>
                <div class="list-pag">
<?php
//Pagination for this file DOES NOT Work..
//Needs fixing before you have more than 10 projects
                    $big = 999999999;
                    $projectsPagArgs = array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, get_query_var('paged')),
                        'total' => $projectsListQuery->max_num_pages
                    );
                    echo paginate_links($projectsPagArgs);                   
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