<?php 
    get_header();


    while(have_posts()){
        the_post();
?>
    <div id="single-page-body" class="main-body">
        <div class="section single-page"> 
            <div class="single-page-container">
                <h2 class="single-page-title"><?php the_title(); ?></h2>
                <p><?php the_content(); ?></p>
                <div id="contact-form-container">
                    <form action="#" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control"
                            placeholder="Your Name" id="contact_name" name="contact_name"
                            required="required">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control"
                            placeholder="Your Email" id="contact_email"
                            name="contact_email" required="required">
                        </div>
                        <div class="form-group">
                            <textarea name="contact_message" id="contact_message"
                            class="form-control" required="required"
                            placeholder="Your Message" rows="15"></textarea>
                        </div>
                        <button type="submit" id="contact-form-submit">Submit</button>
                    </form>
                </div> 
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