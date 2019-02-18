<?php
while(have_posts()){
    the_post();
    store_post_views(get_the_ID());
}




?>