<?php

/**
 * 
 * @package EffyisPayPlugin
 */

namespace Inc\Api\Callbacks;

use Inc\Base\BaseController;

class AdminCallbacks extends BaseController
{
    public function adminDashboard()
    {
        return require_once("$this->plugin_path/templates/admin.php");
    }

    public function adminCpt()
    {
        return require_once("$this->plugin_path/templates/cpt.php");
    }

    public function adminTax()
    {
        return require_once("$this->plugin_path/templates/tax.php");
    }

    public function adminWid()
    {
        return require_once("$this->plugin_path/templates/wid.php");
    }

    public function effyispayOptionsGroup($input)
    {
        return $input;
    }

    public function effyispayAdminSection()
    {
        // echo 'Beautiful section !';
    }

    public function idMarchand()
    {
        $value = esc_attr(get_option('id_marchand'));
        echo '<input type="text" class="regular-text" name="id_marchand" value="' . $value . '" placeholder="ID du marchand">';
    }

    public function secretMarchand()
    {
        $value = esc_attr(get_option('secret_marchand'));
        echo '<input type="text" class="regular-text" name="secret_marchand" value="' . $value . '" placeholder="Code du marchand">';
    }
}
