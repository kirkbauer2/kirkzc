<?php
/**
 * Common Template - tpl_footer.php
 *
 * this file can be copied to /templates/your_template_dir/pagename<br />
 * example: to override the privacy page<br />
 * make a directory /templates/my_template/privacy<br />
 * copy /templates/templates_defaults/common/tpl_footer.php to /templates/my_template/privacy/tpl_footer.php<br />
 * to override the global settings and turn off the footer un-comment the following line:<br />
 * <br />
 * $flag_disable_footer = true;<br />
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_footer.php 4821 2006-10-23 10:54:15Z drbyte $
 */
require(DIR_WS_MODULES . zen_get_module_directory('footer.php'));
?>

<?php
if (!isset($flag_disable_footer) || !$flag_disable_footer) {
?>

<script type="text/javascript">
$(function() {
  $('#bottom_menu').click(function(e) {
    $('#about_popup').slideToggle();
  });
});
</script>





<div id="container">


  <div id="about_popup">


<!--bof-navigation display -->
<div id="footer">
<div id="navSuppWrapper">
<!--BOF footer menu display-->
<?php require($template->get_template_dir('tpl_footer_menu.php',DIR_WS_TEMPLATE, $current_page_base,'common'). '/tpl_footer_menu.php');?>
<!--EOF footer menu display-->
</div>
</div>

  </div>
</div>

<div id="bottom_bar">
<div id="bottom-wrapper">

<!--
  <ul id="bottom_menu">
    <li>EXPAND<img src="includes/templates/yorkshire_clean/images/plus.png" class="plus" /></li>
  </ul>


<div id="social-media">
<a href="<?php echo FACEBOOK; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.FACEBOOK_ICON ?>"  alt="facebook link" class="smi facebook" /></a>
<a href="<?php echo TWITTER; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.TWITTER_ICON ?>"  alt="twitter link" class="smi twitter" /></a>
<a href="<?php echo YOUTUBE; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.YOUTUBE_ICON ?>"  alt="youtube link" class="smi youtube" /></a>
<a href="<?php echo PINTEREST; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.PINTEREST_ICON ?>"  alt="pinterest link" class="smi pinterest" /></a>
<a href="<?php echo GOOGLE; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.GOOGLE_ICON ?>"  alt="google link" class="smi google" /></a>
<a href="<?php echo BLOG; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.BLOG_ICON ?>"  alt="blog link" class="smi blog" /></a>
<img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.FOOTER_PAYMENT_ICON ?>"   alt="payments we accept" class="payments-image" /> 
</div>
-->

<!--bof- site copyright display -->
<div id="siteinfoLegal" class="legalCopyright"><?php echo FOOTER_TEXT_BODY; ?></div>
<!--eof- site copyright display -->
</div>
</div>






<!--bof-ip address display -->
<?php
if (SHOW_FOOTER_IP == '1') {
?>
<?php
}
?>
<!--eof-ip address display -->

<!--bof-banner #5 display -->
<?php
  if (SHOW_BANNERS_GROUP_SET5 != '' && $banner = zen_banner_exists('dynamic', SHOW_BANNERS_GROUP_SET5)) {
    if ($banner->RecordCount() > 0) {
?>
<div id="bannerFive" class="banners"><?php echo zen_display_banner('static', $banner); ?></div>
<?php
    }
  }
?>
<!--eof-banner #5 display -->


<?php
} // flag_disable_footer
?>
