<?php


class Devdevil_Signup_Form extends WP_Widget{

    public function __construct(){
        $widget_options = array(
            'classname' => 'devdevil-signup-widget',
            'description' => 'Mailchimp Signup Form Widget'
        );
        parent::__construct('devdevil_signup_form', 'Signup Form', $widget_options);
    }

    public function widget($args, $instance){
        echo $args['before_widget'];
        
        if(!empty($instance['title'])):
            echo $args['before_title'].apply_filters('widget_title',
            $instance['title']).$args['after_title'];
        endif;
       
        require_once(get_template_directory().'/inc/templates/signup-form.php');
 
        echo $args['after_widget'];
    }

    public function form($instance){
        $title = (!empty($instance['title']) ? $instance['title'] : 'Signup Form');
        $thisTitle = esc_attr($this->get_field_id('title'));

        $output = '<p>';
        $output .= '<label for="'.$thisTitle.'">Title:</label>';
        $output .= '<input type="text" class="widefat" id="'.$thisTitle.'" name="'.$thisTitle.'" value="'.esc_attr($title).'">';
        $output .='</p>';

        $apiKey = (!empty($instance['apiKey']) ? $instance['apiKey'] : '');
        $thisApi = esc_attr($this->get_field_id('apiKey'));

        $output .= '<p>';
        $output .= '<label for="'.$thisApi.'">API Key:</label>';
        $output .= '<input type="text" class="widefat" id="'.$thisApi.'" name="'.$thisApi.'" value="'.esc_attr($total).'">';
        $output .='</p>';

        echo $output;
    }

    public function update($new_instance, $old_instance){
        $instance = array();
        $instance['title'] = (!empty($new_instance['title']) ? strip_tags($new_instance['title']) : '');
        $instance['apiKey'] = (!empty($new_instance['apiKey']) ? strip_tags($new_instance['apiKey']) : 0);
        //API key can be removed
        return $instance;
    }

}

add_action('widgets_init', function(){register_widget('Devdevil_Signup_Form');});
?>