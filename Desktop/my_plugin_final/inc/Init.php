<?php

/**
 * 
 * @package EffyisPayPlugin
 */

namespace Inc;

final class Init
{
    /**
     * Store all the classes inside an array
     * @return array Full list of classes
     */
    public static function get_services()
    {
        return [
            Pages\Admin::class,
            Base\Enqueue::class,
            Base\Activate::class,
            // Base\GetTotal::class,
            // Base\AddBtn::class,
            // Base\WidgetController::class,
            Base\SettingsLinks::class
        ];
    }

    /**
     * Loop through the classes, initialize them,
     * and call the register() method if it exists
     * @return 
     */
    public static function register_services()
    {
        foreach (self::get_services() as $class) {
            $service = self::instantiate($class);
            if (method_exists($service, 'register')) {
                $service->register();
            }
        }
    }

    /**
     * Initialize the class
     * @param class $class      class from the services array
     * @return class instance       new instance of the class
     */
    private static function instantiate($class)
    {
        $service = new $class();
        return $service;
    }
}


// use Inc\Activate;
// use Inc\Deactivate;
// use Inc\Admin\

// if (!class_exists('EffyisPayPlugin')) {

//     class EffyisPayPlugin
//     {
//         public $plugin;

//         
//         public function register()
//         {
//             //back (plugins place)
//             add_action('admin_enqueue_scripts', array($this, 'enqueue'));
//             //front (site e-commerce... etc)
//             // add_action('wp_enqueue_scripts', array($this, 'enqueue'));
//             add_action('admin_menu', array($this, 'add_admin_pages'));

//             add_filter("plugin_action_links_$this->plugin", array($this, 'settings_link'));
//         }

//       
//   
//         protected function create_post_type()
//         {
//             add_action('init', array($this, 'custom_post'));
//         }

//         public function custom_post()
//         {
//             register_post_type('book', ['public' => true, 'label' => 'Books']);
//         }

//      

//     $effyisPayPlugin = new EffyisPayPlugin();
//     $effyisPayPlugin->register();
        
//     //activation
//     register_activation_hook(__FILE__, array( $effyisPayPlugin, 'activate' ));

//     //deactivation
//     // require_once plugin_dir_path(__FILE__) . './inc/effyispay-plugin-deactivate.php';
//     register_deactivation_hook(__FILE__, array('Deactivate', 'deactivate'));
// }
