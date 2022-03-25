<?php

/**
 * 
 * @package EffyisPayPlugin
 */

namespace Inc\Base;

use \Inc\Base\BaseController;

class AddBtn extends BaseController
{
    public static function addBtn()
    {
        flush_rewrite_rules();
    }

    public function register()
    {
        add_filter('the_content', array($this, 'pippin_filter_content_sample'));
    }

    function pippin_filter_content_sample($content)
    {
        $new_content = '
        <style>
            .effyis {
                margin-top: 8px;
                font-size: 17px !important;
                font-family: poppins;
                width: 100% !important;
                height: 45px;
                color: #fff !important;
                background: #5c4ea0 !important;
            }
        </style>
        <script src=https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js></script>
        <script src=https://unpkg.com/axios/dist/axios.min.js></script>
        <script src= http://localhost/wordpress/wp-content/plugins/command/axiosGetUrl.js defer></script>
        <script>
            jQuery(document).ready(function($) {

                var total = document.getElementsByClassName("woocommerce-Price-amount amount");
                var lastTotal = total[total.length - 1];
                var totalText = lastTotal.innerText;

                totalTextNumber = totalText.replace("$","");

                console.log(totalTextNumber);

                localStorage.setItem("total", totalTextNumber);

                console.log(localStorage.getItem("total"));

                $(".wc-proceed-to-checkout").append("<button onclick=getToken() class=effyis>EffyisPay</button>");
                $(".wc-proceed-to-checkout").append("<form method=post action=http://localhost/wordpress/wp-content/plugins/my_plugin/ValidationBtn.php><input type=submit value=EffyisPay></form>");
                $(".woocommerce-checkout-review-order").append("<button>EffyisPay</button>");
                
            });
        </script>
    ';
        $content = $content . $new_content;

        return $content;
    }
}
