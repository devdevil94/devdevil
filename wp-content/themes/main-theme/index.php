

<?php get_header(); ?>

<div class="section services">
    <div class="services-container">
        <div class="service-panel">
            <div class="service-icons">
                <i class="fab fa-wordpress fa-2x"></i>                
            </div>
            <h4 class="service-title">Wordpress</h4>
            <p class="service-text">Lorem ipsum dolor sit amet, id enum nisl congue, ut pro tamquam
                delicata. Usu errem offiis accumsan nam impetus id nusquam.
            </p>
        </div>
        <div class="service-panel">
            <div class="service-icons">
                <i class="fab fa-html5 fa-2x"></i>
                <i class="fab fa-css3-alt fa-2x"></i>
                <i class="fab fa-js-square fa-2x"></i>
            </div>
            <h4 class="service-title">Front End</h4>
            <p class="service-text">Lorem ipsum dolor sit amet, id enum nisl congue, ut pro tamquam
                delicata. Usu errem offiis accumsan nam impetus id nusquam.
            </p>
        </div>
        <div class="service-panel">
            <div class="service-icons">
                <i class="fas fa-desktop fa-2x"></i>
                <i class="fas fa-tablet-alt fa-2x"></i>
                <i class="fas fa-mobile-alt fa-2x"></i>
            </div>
            <h4 class="service-title">Web Application</h4>
            <p class="service-text">Lorem ipsum dolor sit amet, id enum nisl congue, ut pro tamquam
                delicata. Usu errem offiis accumsan nam impetus id nusquam.
            </p>
        </div>
    </div>
</div>

<div class="section posts">
    <div class="posts-container">
        <?php while(have_posts()){}
            
            ?>
        <div class="post">
            <img src="#" alt="post-image">
            <h3 class="post-title">Post Title</h3>
            <h4 class="post-excerpt">Excerpt</h4>
            <p class="post-author">Author name</p>
        </div>
    </div>
</div>



<div id="fixed">
    
</div>

<?php get_footer(); ?>