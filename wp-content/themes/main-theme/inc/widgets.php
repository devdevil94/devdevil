<?php 
    
    class Devdevil_Popular_Posts extends WP_Widget{
        public function __construct(){
            $widget_options = array(
                'classname' => 'devdevil-popular-posts',
                'description' => 'Custom Popular Posts Widget'
            );
            parent::__construct('devdevil_popular_posts', 'Popular Posts', $widget_options);
        }    
    }

    add_action('widgets_init', function(){
        register_widget('Devdevil_Popular_Posts');
    })

?>