<?php
/* Page Template - tpl_footer_menu.php
*Display the Footer Menu
 * @package templateSystem
 * @copyright Copyright 2003-2006 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V2.0
 * @version $Id: tpl_footer_menu.php 1.0 5/9/2009 Clyde Jones $
*/
?>

<dl>
<?php echo QUICKLINKS; ?>
<?php echo INFORMATION; ?>
<?php echo CUSTOMER_SERVICE; ?>
<?php if (EZPAGES_STATUS_FOOTER == '1' or (EZPAGES_STATUS_FOOTER == '2' and (strstr(EXCLUDE_ADMIN_IP_FOR_MAINTENANCE, $_SERVER['REMOTE_ADDR'])))) { ?>
<?php echo IMPORTANT; ?>
<?php require($template->get_template_dir('tpl_ezpages_footer_menu.php',DIR_WS_TEMPLATE, $current_page_base,'templates'). '/tpl_ezpages_footer_menu.php'); ?>
<?php echo IMPORTANT_END; ?>
<?php } ?>
</dl>

