<?php

class Devdevil_Social_Media extends WP_Widget{

    public function __construct(){
        $widget_options = array(
            'classname' => 'devdevil-social-media',
            'description' => 'Social Media Accounts Widget'
        );
        parent::__construct('devdevil_social_media', 'Social Media Accounts',
        $widget_options);
    }

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
            echo $args['before_title']
            .apply_filters('widget_title', $instance['title'])
            .$args['after_title'];
        endif;
        
        require_once(get_template_directory().'/inc/templates/devdevil-social-media.php');
        echo $args['after_widget'];
    }

    public function form($instance){
        $title = (!empty($instance['title']) ? $instance['title'] : 'Social Media Accounts');
        $thisTitle = esc_attr($this->get_field_id('title'));

        $result .= 
        '
        <p>
            <label for="'.$thisTitle.'">Title:</label>
            <input type="text" class="widefat" id="'.$thisTitle.'"
            name="'.$thisTitle.'" value="'.esc_attr($title).'">
        </p>
        ';

        // $accounts = array('twitter', 'facebook', 'google', 'github');
        
        // $result .= '<br>';
        // foreach($accounts as $account){
        //     $accountId = $this->get_field_id($account);
        //     $result .= '
        //     <label for="'.$accountId.'">
        //         <input type="checkbox" '.checked($instance[$account], 1, true).' 
        //         id="'.$accountId.'" name="'.$accountId.'" value="1" />'.$account.'
        //     </label><br>';
        // }

        echo $result;
    }

    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ? strip_tags($new_instance['title']) : '');

        $accounts = array('twitter', 'facebook', 'google', 'github');
        foreach($accounts as $account){
            $instance[$account] = $new_instance[$account];
        }
        return $instance;
    }
}

add_action('widgets_init', function(){register_widget('Devdevil_Social_Media');});




?>