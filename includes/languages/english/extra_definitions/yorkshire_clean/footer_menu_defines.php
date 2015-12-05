<?php
/**
 * Footer Menu Definitions
 *
 * @package templateSystem
 * @copyright Copyright 2003-2005 Zen Cart Development Team
 * @copyright Portions Copyright 2003 osCommerce
 * @license http://www.zen-cart.com/license/2_0.txt GNU Public License V3.0
 * @version $Id: footer_menu_deines.php 1.0 5/9/2009 Clyde Jones $
 */

/*BOF Menu Column 1 link Definitions*/
Define('TITLE_ONE', '<li class="menuTitle">Contact Information</li>');
Define('PHONE', '<li class="footer-phone"><a href="">555.555.5555</a></li>');
Define('EMAIL', '<li class="footer-email"><a href="' . zen_href_link(FILENAME_CONTACT_US) . '">Email Us</a></li>');
/*EOF Menu Column 1 link Definitions*/

/*OF Menu Column 2 link Definitions*/
Define('TITLE_TWO', '<li class="menuTitle">Information</li>');
Define('ABOUT', '<li><a href="' . zen_href_link(FILENAME_ABOUT_US) . '">' . BOX_INFORMATION_ABOUT_US . '</a></li>');
Define('SITEMAP', '<li><a href="' . zen_href_link(FILENAME_SITE_MAP) . '">' . BOX_INFORMATION_SITE_MAP . '</a></li>');
Define('GVFAQ', '<li><a href="' . zen_href_link(FILENAME_GV_FAQ) . '">' . BOX_INFORMATION_GV . '</a></li>');
Define('COUPON', '<li><a href="' . zen_href_link(FILENAME_DISCOUNT_COUPON) . '">' .  BOX_INFORMATION_DISCOUNT_COUPONS . '</a></li>');
Define('UNSUBSCRIBE', '<li><a href="' . zen_href_link(FILENAME_UNSUBSCRIBE) . '">' . BOX_INFORMATION_UNSUBSCRIBE . '</a></li>');
/*EOF Menu Column 2 link Definitions*/

/*BOF Menu Column 3 link Definitions*/
Define('TITLE_THREE', '<li class="menuTitle">Customer Support</li>');
Define('CONTACT','<li><a href="' . zen_href_link(FILENAME_CONTACT_US) . '">' . BOX_INFORMATION_CONTACT . '</a></li>');
Define('SHIPPING', '<li><a href="' . zen_href_link(FILENAME_SHIPPING) . '">' . BOX_INFORMATION_SHIPPING . '</a></li>');
Define('PRIVACY', '<li><a href="' . zen_href_link(FILENAME_PRIVACY) . '">' . BOX_INFORMATION_PRIVACY . '</a></li>');
Define('CONDITIONS','<li><a href="' . zen_href_link(FILENAME_CONDITIONS) . '">' . BOX_INFORMATION_CONDITIONS . '</a></li>');
Define('ACCOUNT', '<li><a href="' . zen_href_link(FILENAME_ACCOUNT, '', 'SSL') .'">' . HEADER_TITLE_MY_ACCOUNT . '</a></li>');
/*EOF Menu Column 3 link Definitions*/

/*BOF Menu Column 4 link Definitions*/
Define('TITLE_FOUR', '<li class="menuTitle">Useful Links</li>');
/*The actual links are determined by "footer links" set in EZ-Pages
*EOF Menu Column 4 link Definitions
*/

/*bof bottom footer definitions*/
Define('FOOTER_PAYMENT_ICON', 'paypal.png');
Define('FACEBOOK_ICON', 'facebook.png');
Define('TWITTER_ICON', 'twitter.png');
Define('YOUTUBE_ICON', 'youtube.png');
Define('PINTEREST_ICON', 'pinterest.png');
Define('GOOGLE_ICON', 'google.png');
Define('BLOG_ICON', 'blog.png');

/*bof bottom footer text definitions*/
Define('FACEBOOK_TEXT', 'Become a Fan');
Define('TWITTER_TEXT', 'Follow Us');
Define('YOUTUBE_TEXT', 'Subscribe');
Define('PINTEREST_TEXT', 'Pin with Us');
Define('GOOGLE_TEXT', 'Recommend Us');
Define('BLOG_TEXT', 'Our Blog');

/*bof bottom footer urls*/
Define('FACEBOOK','http://www.facebook.com/Custom.Zen.Cart.Design');
Define('TWITTER', 'http://www.twitter.com/picaflorazul');
Define('YOUTUBE', 'http://www.youtube.com/user/ZenCartEasyHelp');
Define('PINTEREST', 'http://www.pinterest.com/picaflorazul');
Define('GOOGLE', 'https://plus.google.com/113609090217058276980/posts');
Define('BLOG', 'http://www.picaflor-azul.com/blog');

/*BOF Footer Menu Definitions*/
Define('QUICKLINKS', '<dd class="first">
<ul>' . TITLE_ONE . PHONE . EMAIL . '</ul></dd>');
Define('INFORMATION', '<dd class="second">
<ul>' . TITLE_TWO . ABOUT . SITEMAP . GVFAQ . COUPON . UNSUBSCRIBE . '</ul></dd>');
Define('CUSTOMER_SERVICE', '<dd class="third">
<ul>' . TITLE_THREE . CONTACT . SHIPPING . PRIVACY . CONDITIONS . ACCOUNT . '</ul></dd>');
Define('IMPORTANT', '<dd><ul>' . TITLE_FOUR);
Define('IMPORTANT_END', '</ul></dd>');
/*EOF Footer Menu Definitions*/

 

//EOF