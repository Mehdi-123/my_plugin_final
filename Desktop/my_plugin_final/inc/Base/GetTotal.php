<?php

add_action('woocommerce_thankyou', 'action_woocommerce_thankyou', 10, 1);

function getTotal($order_id)
{
    $order = wc_get_order($order_id);
?>
    <script type="text/javascript">
        var order_total = <?php echo $order->get_total(); ?>;
        console.log("total", order_total);
    </script>
<?php
}
