<?php

class Devdevil_Advert_Area extends WP_Widget{

    public function __construct(){
        $widget_options = array(
            'classname' => 'devdevil-advert-area',
            'description' => 'Add an advertisement here'
        );
        parent::__construct('devdevil_advert_area', 'Advertisement Area',
        $widget_options);
    }

    public function widget($args, $instance){
        echo $args['before_widget'];

        if(!empty($instance['title'])):
            echo $args['before_title']
            .apply_filters('widget_title', $instance['title'])
            .$args['after_title'];
        endif;
        
        wp_enqueue_style('ad-area-style', 
        get_template_directory_uri().'/css/ad-area.css',
        array(), microtime(), 'all'); 

        echo '
        <div class="ad-container">
            <div class="ad-area">
                Advertisement here
            </div>
        </div>
        ';

        echo $args['after_widget'];
    }

    public function form($instance){
        $title = (!empty($instance['title']) ? $instance['title'] : 'Advertisement Area');
        $thisTitle = esc_attr($this->get_field_id('title'));

        $result .= '
        <p>
            <label for="'.$thisTitle.'">Title:</label>
            <input type="text" class="widefat" id="'.$thisTitle.'"
            name="'.$thisTitle.'" value="'.esc_attr($title).'">
        </p>
        ';

        echo $result;
    }

    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ? strip_tags($new_instance['title']) : '');

        return $instance;
    }
}

add_action('widgets_init', function(){register_widget('Devdevil_Advert_Area');});




?>