<?php 
    
    class Devdevil_Popular_Posts extends WP_Widget{
        public function __construct(){
            $widget_options = array(
                'classname' => 'devdevil-popular-posts',
                'description' => 'Custom Popular Posts Widget'
            );
            parent::__construct('devdevil_popular_posts', 'Popular Posts', $widget_options);
        }  
        //Handling the front-end display
        public function widget($args, $instance){

        }
        //Handling the back-end display
        public function form($instance){

        }

    }

    add_action('widgets_init', function(){
        register_widget('Devdevil_Popular_Posts');
    });

    function store_post_views($postId){
        $metaKey = 'devdevil_post_views';
        $views = get_post_meta($postId, $metaKey, true);

        $count = (empty($views) ? 0 : $views);
        $count++;

        update_post_meta($postId, $metaKey, $count);

        // echo $views;
    }
    remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
    
?>