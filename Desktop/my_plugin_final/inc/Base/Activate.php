<?php

/**
 * 
 * @package EffyisPayPlugin
 */

namespace Inc\Base;

$clientID = get_option('id_marchand');;
$clientSecret = get_option('code_marchand');

if (!empty($clientID) && !empty($clientSecret)) {
    $url = 'https://engin.effyispayment.com/ecom-sandbox-service/oauth/token';
    $myvars = 'client_id=' . $clientID . '&client_secret=' . $clientSecret . '&grant_type=client_credentials';
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $myvars);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($ch);
    $decodedJS = json_decode($response, true);

    if (curl_errno($ch)) {
        $error_msg = curl_error($ch);
    } else {
        // $_SESSION['accessToken'] = $decodedJS['access_token'];
        $access_token = $decodedJS['access_token'];
    }
} else {
    $access_token = null;
}

?>

<script>
    var access_token = <?php echo json_encode($access_token); ?>;

    if (access_token == null) {
        localStorage.setItem('show', 'notshow')
    } else {
        localStorage.setItem('show', 'show')
    }

    const getToken = () => {

        total = localStorage.getItem("total")

        basket = {
            "amount": total,
            "currency": "EUR",
            "successfulURL": "test",
            "unsuccessfulURL": "test",
            "productItemDTOList": [{
                "itemName": "test",
                "itemPrice": "test"
            }]
        }

        axios.post('https://engin.effyispayment.com/ecom-sandbox-service/pay/order', basket, {
            headers: {
                Authorization: 'Bearer ' + access_token
            }
        }).then(response => {
            width = 500;
            height = 700;
            if (window.innerWidth) {
                var left = (window.innerWidth - width) / 2;
                var top = (window.innerHeight - height) / 2;
            } else {
                var left = (document.body.clientWidth - width) / 2;
                var top = (document.body.clientHeight - height) / 2;
            }
            effyispayWindow = window.open(response.data.url, 'onboarding-popup', 'menubar=no, scrollbars=no, top=' + top + ', left=' + left + ', width=' + width + ', height=' + height + '');

        }).catch(error => {
            console.log(error)
        })

    }
</script>

<?php


use \Inc\Base\BaseController;

class Activate extends BaseController
{
    public static function activate()
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
        <script>
            jQuery(document).ready(function($) {

                var total = document.getElementsByClassName("woocommerce-Price-amount amount");
                var lastTotal = total[total.length - 1];
                var totalText = lastTotal.innerText;

                totalTextNumber = totalText.replace("$","");

                localStorage.setItem("total", totalTextNumber);

                if (localStorage.getItem("show") == "show") {
                    $(".wc-proceed-to-checkout").append("<button onclick=getToken() class=effyis>EffyisPay</button>");
                    $(".woocommerce-checkout-review-order").append("<button onclick=getToken() class=effyis>EffyisPay</button>");
                }
            
                // $(".wc-proceed-to-checkout").append("<form method=post action=http://localhost/wordpress/wp-content/plugins/my_plugin_final/ValidationBtn.php><input type=submit value=EffyisPay></form>");
                // $(".wc-proceed-to-checkout").append("<button class=effyis>EffyisPay</button>");
                
            });
        </script>
    ';
        $content = $content . $new_content;

        return $content;
    }
}

?>