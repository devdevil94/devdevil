

<?php get_header(); ?>


<div class="section">
    <div class="services-container">
        <div class="service-panel">
            <div class="service-icons">
                <i class="fab fa-wordpress fa-2x"></i>                
            </div>
            <h4 class="service-title">Wordpress</h4>
            <p class="service-content">
                Lorem ipsum dolor sit amet, nam purto etiam veniam in,
                placerat scribentur delicatissimi ei cum.
                Id wisi quaestio volutpat usu. Platonem referrentur ea mel,
                est fuisset appellantur cu, equidem concludaturque quo ei.
            </p>
        </div>
        <div class="service-panel">
            <div class="service-icons">
                <i class="fab fa-html5 fa-2x"></i>
                <i class="fab fa-css3-alt fa-2x"></i>
                <i class="fab fa-js-square fa-2x"></i>
            </div>
            <h4 class="service-title">Front End</h4>
            <p class="service-content">
                Lorem ipsum dolor sit amet, nam purto etiam veniam in,
                placerat scribentur delicatissimi ei cum.
                Id wisi quaestio volutpat usu. Platonem referrentur ea mel,
                est fuisset appellantur cu, equidem concludaturque quo ei.            </p>
        </div>
        <div class="service-panel">
            <div class="service-icons">
                <i class="fas fa-desktop fa-2x"></i>
                <i class="fas fa-tablet-alt fa-2x"></i>
                <i class="fas fa-mobile-alt fa-2x"></i>
            </div>
            <h4 class="service-title">Web Application</h4>
            <p class="service-content">
                Lorem ipsum dolor sit amet, nam purto etiam veniam in,
                placerat scribentur delicatissimi ei cum.
                Id wisi quaestio volutpat usu. Platonem referrentur ea mel,
                est fuisset appellantur cu, equidem concludaturque quo ei.            </p>
        </div>
    </div>
</div>

<div class="section">
    <div class="about-container">
        <h4 id="about-heading">About Me</h4>
        <p id="about-content">
            Lorem ipsum dolor sit amet, nam purto etiam veniam in, 
            placerat scribentur delicatissimi ei cum.
            Id wisi quaestio volutpat usu. Platonem referrentur ea mel,
            est fuisset appellantur cu, equidem concludaturque quo ei.
            Est et tractatos referrentur, ut porro epicurei pertinacia eos.
            Doming dissentiunt mea ut, labores phaedrum abhorreant ei mea,
            eam id tota elitr. Labores delectus ea mei, ne corpora interpretaris mei.
            Quo inimicus conceptam ad, sed id iudicabit molestiae,
            his at posse velit legere. Mei eu vide legimus assentior,
            alienum mnesarchum duo ex, an eam quis similique.
            Inermis urbanitas efficiantur no sed. Zril adolescens honestatis ea quo,
            evertitur interesset ex nam, saepe accusam sed in.
            Vim ut ipsum malis omnes, quot aliquip inermis ei vix.
            Ea quo fabulas utroque, nam agam malorum diceret in,
            ius ut tollit epicurei pertinacia.Commune ocurreret elaboraret cu mea,
            te sit intellegat posidonium,sonet contentiones reprehendunt ne est.
            Vim at assum dicunt apeirian. Platonem reformidans vis id,
            nemore melius nusquam ut duo, dolores adversarium vel in.
            Duo ad eros dicit soluta. Ex mutat laudem per,
            case copiosae dissentias sea ex, assum laudem pericula ne ius.
        </p>
    </div>
</div>

<div class="section">
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
                    <h3 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                    <p class="post-author"> By <a href="#"><?php the_author(); ?></a></p>          
                    <h4 class="post-excerpt">
                        <?php
                            if(has_excerpt())
                                echo get_the_excerpt();
                            else
                                echo wp_trim_words(get_the_content(), 20);
                            ?>
                    </h4>
                    <p class="post-date"><?php the_date(); ?></p>
                     
                </div>
        <?php 
            }
            ?>
    </div>
</div>

<?php get_footer(); ?>