<?php

/**
 * 
 * @package EffyisPayPlugin
 */

// namespace Inc\Api\Widgets;

// use WP_Widget;

// /**
//  * 
//  */
// class MediaWidget extends WP_Widget
// {
//     public $widget_ID;

//     public $widget_name;

//     public $widget_options = array();

//     public $control_options = array();

//     function __construct()
//     {

//         $this->widget_ID = 'EffyisPay_Widget';
//         $this->widget_name = 'EffyisPay Widget';

//         $this->widget_options = array(
//             'classname' => $this->widget_ID,
//             'description' => $this->widget_name,
//             'customize_selective_refresh' => true,
//         );

//         $this->control_options = array(
//             'width' => 400,
//             'height' => 350,
//         );
//     }

//     public function register()
//     {
//         parent::__construct($this->widget_ID, $this->widget_name, $this->widget_options, $this->control_options);

//         add_action('widgets_init', array($this, 'widgetsInit'));
//     }

//     public function widgetsInit()
//     {
//         register_widget($this);
//     }

//     public function widget($args, $instance)
//     {
//         echo $args['before_widget'];
//         if (!empty($instance['title'])) {
//             echo $args['before_title'] . apply_filters('widget_title', $instance['title']) . $args['after_title'];
//         }

//         echo "<button style='background: #5c4ea0 !important; width: 70%; border: none; height: 55px'>
//         <img style='width: 100px' src='http://localhost/wordpress/wp-content/plugins/my_plugin/assets/images/logo_typo_white.svg'>
//         </button>";

//         echo $args['after_widget'];
//     }
// }
