<?php
$order_total = 1;

if( isset( $orders->fields['order_total'] ) )
{
    $order_total = $orders->fields['order_total'];
}
?>

<!-- Google Code for Purchase Conversion Page -->
<script type="text/javascript">
/* <![CDATA[ */
var google_conversion_id = 1071741341;
var google_conversion_language = "en";
var google_conversion_format = "3";
var google_conversion_color = "ffffff";
var google_conversion_label = "Yc-lCImbqQUQnfOF_wM";
var google_conversion_value = <?php echo( $order_total ); ?>;
var google_conversion_currency = "USD";
var google_remarketing_only = false;
/* ]]> */
</script>
<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
</script>
<noscript>
<div style="display:inline;">
<img height="1" width="1" style="border-style:none;" alt="" src="//www.googleadservices.com/pagead/conversion/1071741341/?value=1.00&amp;currency_code=USD&amp;label=Yc-lCImbqQUQnfOF_wM&amp;guid=ON&amp;script=0"/>
</div>
</noscript>

<p><strong>Thank you for your purchase!</strong></p><p>In most cases I ship orders out in the morning on the next business day.  You will receive an email from Stamps.com providing you with your tracking number.</p>
