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
        $total = absint($instance['total']);
        $posts_args = array(
            'post_type' => 'post',
            'post_per_page' => $total,
            'meta_key' => 'devdevil_post_views',
            'orderby' => 'meta_value_num',
            'order' => 'DESC'
        );

        $posts_query = new WP_Query($posts_args);

        echo $args['before_widget'];

        if(!empty($instance['title'])):
            echo $args['before_title'].apply_filters('widget_title',
            $instance['title']).$args['after_title'];
        endif;

        wp_enqueue_style('popular-posts-style', 
        get_template_directory_uri().'/css/popular-posts.css',
        array(), version_id(), 'all'); 

        if($posts_query->have_posts()):
            echo '<div class="popular-posts-container">';
            echo '<h3 class="popular-posts-heading">Popular Posts</h3>';
                while($posts_query->have_posts()):
                    $posts_query->the_post();
                    echo '<div class="popular-post-panel">';
                        echo '<a href="'.get_the_permalink().'
                        " class="popular-post-title">'.get_the_title().'</a>';
                    echo '</div>';
                endwhile;
            echo '</div>';
        endif;

        echo $args['after_widget'];
    }
    //Handling the back-end display
    public function form($instance){
        $title = (!empty($instance['title']) ? $instance['title'] : 'Popular Posts');
        $total = (!empty($instance['total']) ? absint($instance['total']) : 4);
        $thisTitle = esc_attr($this->get_field_id('title'));

        $output = '<p>';
        $output .= '<label for="'.$thisTitle.'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.$thisTitle.'" name="'.$thisTitle.'" value="'.esc_attr($title).'">';
        $output .='</p>';

        $thisTotal = esc_attr($this->get_field_id('total'));

        $output .= '<p>';
        $output .= '<label for="'.$thisTotal.'">Number of Posts:</label>';
        $output .= '<input type="number" class="widefat" id="'.$thisTotal.'" name="'.$thisTotal.'" value="'.esc_attr($total).'">';
        $output .='</p>';

        echo $output;
    }

    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ? strip_tags($new_instance['title']) : '');
        $instance['total'] = (!empty($new_instance['total']) ? absint(strip_tags($new_instance['total'])) : 0);

        return $instance;
    }


}

add_action('widgets_init', function(){register_widget('Devdevil_Popular_Posts');});

function store_post_views($postId){
    $metaKey = 'devdevil_post_views';
    $views = get_post_meta($postId, $metaKey, true);

    $count = (empty($views) ? 0 : $views);
    $count++;

    update_post_meta($postId, $metaKey, $count);
}
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
?>