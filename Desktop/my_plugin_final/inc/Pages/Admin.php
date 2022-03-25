<?php

/**
 * 
 * @package EffyisPayPlugin
 */

namespace Inc\Pages;

use \Inc\Api\SettingsApi;
use \Inc\Base\BaseController;
use \Inc\Api\Callbacks\AdminCallbacks;

class Admin extends BaseController
{
    public $settings;

    public $callbacks;

    public $pages = array();

    public $subpages = array();

    public function register()
    {
        $this->settings = new SettingsApi();

        $this->callbacks = new AdminCallbacks();

        $this->setPages();

        $this->setSubPages();

        $this->setSettings();

        $this->setSections();

        $this->setFields();

        // add_action('admin_menu', array($this, 'add_admin_pages'));
        $this->settings->addPages($this->pages)->withSubPage('Paramètres généraux')->addSubPages($this->subpages)->register();
    }

    public function setPages()
    {
        $this->pages = array(
            array(
                'page_title' => 'EffyisPay Plugin',
                'menu_title' => 'EffyisPay',
                'capability' => 'manage_options',
                'menu_slug' => 'effyispay_plugin',
                'callback' => array($this->callbacks, 'adminDashboard'),
                'icon_url' => 'dashicons-money-alt',
                'position' => 110
            )
        );
    }

    public function setSubPages()
    {
        $this->subpages = array(
            array(
                'parent_slug' => 'effyispay_plugin',
                'page_title' => 'Custom Post Types',
                'menu_title' => 'Contactez-nous',
                'capability' => 'manage_options',
                'menu_slug' => 'effyispay_cpt',
                'callback' => array($this->callbacks, 'adminCpt')
                // ),
                // array(
                //     'parent_slug' => 'effyispay_plugin',
                //     'page_title' => 'Custom Taxonomies',
                //     'menu_title' => 'Taxonomies',
                //     'capability' => 'manage_options',
                //     'menu_slug' => 'effyispay_taxonomies',
                //     'callback' => array($this->callbacks, 'adminTax')
                // ),
                // array(
                //     'parent_slug' => 'effyispay_plugin',
                //     'page_title' => 'Custom Widgets',
                //     'menu_title' => 'Widgets',
                //     'capability' => 'manage_options',
                //     'menu_slug' => 'effyispay_widgets',
                //     'callback' => array($this->callbacks, 'adminWid')
            )
        );
    }

    public function setSettings()
    {
        $args = array(
            array(
                'option_group' => 'effyispay_options_group',
                'option_name' => 'id_marchand',
                'callback' => array($this->callbacks, 'effyispayOptionsGroup')
            ),
            array(
                'option_group' => 'effyispay_options_group',
                'option_name' => 'secret_marchand'
            )
        );

        $this->settings->setSettings($args);
    }

    public function setSections()
    {
        $args = array(
            array(
                'id' => 'effyispay_admin_index',
                'title' => '',
                'callback' => array($this->callbacks, 'effyispayAdminSection'),
                'page' => 'effyispay_plugin'
            )
        );

        $this->settings->setSections($args);
    }

    public function setFields()
    {
        $args = array(
            array(
                'id' => 'id_marchand',
                'title' => 'ID du marchand',
                'callback' => array($this->callbacks, 'idMarchand'),
                'page' => 'effyispay_plugin',
                'section' => 'effyispay_admin_index',
                'args' => array(
                    'label_for' => 'id_marchand',
                    'class' => 'example-class'
                )
            ),
            array(
                'id' => 'secret_marchand',
                'title' => 'Code du marchand',
                'callback' => array($this->callbacks, 'secretMarchand'),
                'page' => 'effyispay_plugin',
                'section' => 'effyispay_admin_index',
                'args' => array(
                    'label_for' => 'secret_marchand',
                    'class' => 'example-class'
                )
            )
        );

        $this->settings->setFields($args);
    }


    // public function add_admin_pages()
    // {
    //     add_menu_page(
    //         'EffyisPay Plugin',
    //         'EffyisPay',
    //         'manage_options',
    //         'effyispay_plugin',
    //         array($this, 'admin_index'),
    //         'dashicons-money-alt',
    //         110
    //     );
    // }

    // public function admin_index()
    // {
    //     require_once $this->plugin_path . './templates/admin.php';
    // }
}
