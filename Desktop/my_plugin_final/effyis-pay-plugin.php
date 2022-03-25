<?php

/**
 * @package EffyisPayPlugin
 */

/**
 * Plugin Name: EffyisPay
 * Description: En quelques clics seulement, les paiements seront effectués en un clin d'œil.
 * Version: 1.0
 * Author: Effyis Europe
 * Author URI: http://effyispay.com/
 * Plugin URI: http://effyispay.com/
 */

//If called directly, abort !
defined('ABSPATH') or die('Wrong place !');

//Require once the composer Autoload
if (file_exists(dirname(__FILE__) . '/vendor/autoload.php')) {
    require_once dirname(__FILE__) . '/vendor/autoload.php';
}

//During activation
function activate_effyispay_plugin()
{
    Inc\Base\Activate::activate();
}
register_activation_hook(__FILE__, 'activate_effyispay_plugin');

//During deactivation
function deactivate_effyispay_plugin()
{
    Inc\Base\Deactivate::deactivate();
}
register_deactivation_hook(__FILE__, 'deactivate_effyispay_plugin');

//Initialize all the core classes of the plugin
if (class_exists('Inc\\Init')) {
    Inc\Init::register_services();
}
