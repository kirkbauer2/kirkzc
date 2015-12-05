<?php
//
// +----------------------------------------------------------------------+
// |zen-cart Open Source E-commerce                                       |
// +----------------------------------------------------------------------+
// | Copyright (c) 2003 The zen-cart developers                           |
// |                                                                      |
// | http://www.zen-cart.com/index.php                                    |
// |                                                                      |
// | Portions Copyright (c) 2003 osCommerce                               |
// +----------------------------------------------------------------------+
// | This source file is subject to version 2.0 of the GPL license,       |
// | that is bundled with this package in the file LICENSE, and is        |
// | available through the world-wide-web at the following url:           |
// | http://www.zen-cart.com/license/2_0.txt.                             |
// | If you did not receive a copy of the zen-cart license and are unable |
// | to obtain it through the world-wide-web, please send a note to       |
// | license@zen-cart.com so we can mail you a copy immediately.          |
// +----------------------------------------------------------------------+
// $Id: tpl_drop_menu.php  2005/06/15 15:39:05 DrByte Exp $
//

?>


<div id="mega-wrapper"><!-- bof mega-wrapper -->

    <ul class="mega-menu menu_red"><!-- bof mega-menu -->
       
       <li class="quicklinks-li"><a href="<?php echo zen_href_link(FILENAME_DEFAULT); ?>" class="drop"><?php echo HEADER_TITLE_QUICK_LINKS; ?></a><!-- bof quick links  -->
             <div class="dropdown_1column">
                <div class="col_1 firstcolumn">
                   <ul class="levels">
                       <li><a href="<?php echo zen_href_link(FILENAME_DEFAULT); ?>"><?php echo HEADER_TITLE_CATALOG; ?></a></li>
                       <li><a href="<?php echo zen_href_link(FILENAME_PRODUCTS_NEW); ?>"><?php echo HEADER_TITLE_NEW_PRODUCTS; ?></a></li>
                       <li><a href="<?php echo zen_href_link(FILENAME_PRODUCTS_ALL); ?>"><?php echo HEADER_TITLE_ALL_PRODUCTS; ?></a></li>
                       <li><a href="<?php echo zen_href_link(FILENAME_SPECIALS); ?>"><?php echo HEADER_TITLE_SPECIALS; ?></a></li>
                       <li><a href="<?php echo zen_href_link(FILENAME_ADVANCED_SEARCH); ?>"><?php echo HEADER_TITLE_SEARCH; ?></a></li>                        
                   </ul>   
                </div>
               </div>
        </li><!-- eof quick links -->


        <li class="categories-li"><a href="<?php echo zen_href_link(FILENAME_DEFAULT); ?>" class="drop"><?php echo HEADER_TITLE_CATEGORIES; ?></a><!-- bof cateories    -->
     
            <div class="dropdown_1column">
                <div class="col_1 firstcolumn">
                   <div class="levels">
                       <?php

 // load the UL-generator class and produce the menu list dynamically from there
 require_once (DIR_WS_CLASSES . 'categories_ul_generator.php');
 $zen_CategoriesUL = new zen_categories_ul_generator;
 $menulist = $zen_CategoriesUL->buildTree(true);
 $menulist = str_replace('"level4"','"level5"',$menulist);
 $menulist = str_replace('"level3"','"level4"',$menulist);
 $menulist = str_replace('"level2"','"level3"',$menulist);
 $menulist = str_replace('"level1"','"level2"',$menulist);
 $menulist = str_replace('<li class="submenu">','<li class="submenu">',$menulist);
 $menulist = str_replace("</li>\n</ul>\n</li>\n</ul>\n","</li>\n</ul>\n",$menulist);
 echo $menulist;
?>                        
                   </div>   
                </div>
               </div>
        </li><!-- eof categories  -->
        
	<li class="aboutus-li"><a href="<?php echo zen_href_link(FILENAME_ABOUT_US); ?>" class="drop"><?php echo HEADER_TITLE_ABOUT_US; ?></a><!-- bof about us -->
                
            <div class="dropdown_aboutus">
                    
                <div class="col_aboutus">
                    <h2><?php echo TITLE_ABOUT_US;?></h2>
                </div>
 
		<div class="col_cs">
                     <p class="mega-about"><?php echo TEXT_ABOUT_US;?></p>             
                     	<img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.ABOUT_US_IMAGE ?>"   class="imgshadow_light aboutus-image" alt="about us"  />    
             	</div>
            </div>
        </li><!-- eof about us -->

        

          <li class="information-li"><a href="<?php echo zen_href_link(FILENAME_DEFAULT); ?>" class="drop"><?php echo HEADER_TITLE_INFORMATION; ?></a><!-- bof information -->
 
	    <div class="dropdown_info">
        
		<div class="col_1">
            	    <h3><?php echo TITLE_GENERAL; ?></h3>
                    <ul>
			<li><a href="<?php echo zen_href_link(FILENAME_ABOUT_US); ?>"><?php echo BOX_INFORMATION_ABOUT_US; ?></a></li>
                	<?php if (DEFINE_SITE_MAP_STATUS <= 1) { ?>
                	<li><a href="<?php echo zen_href_link(FILENAME_SITE_MAP); ?>"><?php echo BOX_INFORMATION_SITE_MAP; ?></a></li>
                	<?php } ?>
              		<?php if (MODULE_ORDER_TOTAL_GV_STATUS == 'true') { ?>
                	<li><a href="<?php echo zen_href_link(FILENAME_GV_FAQ, '', 'NONSSL'); ?>"><?php echo BOX_INFORMATION_GV; ?></a></li>
                	<?php } ?>
                	<?php if (MODULE_ORDER_TOTAL_COUPON_STATUS == 'true') { ?>
                	<li><a href="<?php echo zen_href_link(FILENAME_DISCOUNT_COUPON, '', 'NONSSL'); ?>"><?php echo BOX_INFORMATION_DISCOUNT_COUPONS; ?></a></li>
                	<?php } ?>
               		<?php if (SHOW_NEWSLETTER_UNSUBSCRIBE_LINK == 'true') { ?>
                	<li><a href="<?php echo zen_href_link(FILENAME_UNSUBSCRIBE, '', 'NONSSL'); ?>"><?php echo BOX_INFORMATION_UNSUBSCRIBE; ?></a></li>
                	<?php } ?>
                     </ul>   
                 </div>
    
		<div class="col_1">
                     <h3><?php echo TITLE_CUSTOMERS; ?></h3>
                     <ul>
			<?php if ($_SESSION['customer_id']) { ?>
                	<li><a href="<?php echo zen_href_link(FILENAME_ACCOUNT, '', 'SSL'); ?>"><?php echo HEADER_TITLE_MY_ACCOUNT; ?></a></li>
                	<li><a href="<?php echo zen_href_link(FILENAME_LOGOFF, '', 'SSL'); ?>"><?php echo HEADER_TITLE_LOGOFF; ?></a></li>
                	<li><a href="<?php echo zen_href_link(FILENAME_ACCOUNT_NEWSLETTERS, '', 'SSL'); ?>"><?php echo TITLE_NEWSLETTERS; ?></a></li>
                	<?php } else { ?>
                	<li><a href="<?php echo zen_href_link(FILENAME_LOGIN, '', 'SSL'); ?>"><?php echo HEADER_TITLE_LOGIN; ?></a></li>
                	<li><a href="<?php echo zen_href_link(FILENAME_CREATE_ACCOUNT, '', 'SSL'); ?>"><?php echo HEADER_TITLE_CREATE_ACCOUNT; ?></a></li>
                	<?php } ?>
                    	<li><a href="<?php echo zen_href_link(FILENAME_CONTACT_US, '', 'NONSSL'); ?>"><?php echo BOX_INFORMATION_CONTACT; ?></a></li>
                        <?php if (DEFINE_SHIPPINGINFO_STATUS <= 1) { ?>
                	<li><a href="<?php echo zen_href_link(FILENAME_SHIPPING); ?>"><?php echo BOX_INFORMATION_SHIPPING; ?></a></li>
                        <?php } ?>
                        <?php if (DEFINE_PRIVACY_STATUS <= 1)  { ?>
                	<li><a href="<?php echo zen_href_link(FILENAME_PRIVACY); ?>"><?php echo BOX_INFORMATION_PRIVACY; ?></a></li>
                        <?php } ?>
                        <?php if (DEFINE_CONDITIONS_STATUS <= 1) { ?>
                	<li><a href="<?php echo zen_href_link(FILENAME_CONDITIONS); ?>"><?php echo BOX_INFORMATION_CONDITIONS; ?></a></li>
                        <?php } ?>
                     </ul>   
                 </div>

            	 <div class="col_1">
                      <h3><?php echo TITLE_EZ_PAGES; ?></h3>
		      <ul> 
		      <?php require(DIR_WS_MODULES . 'sideboxes/' . $template_dir . '/' . 'ezpages_drop_menu.php'); ?>
		      </ul>
            	 </div>
           </div>

  	</li><!-- eof information -->
 
    
<?php
 /*
        <li class="connect-li"><a href="<?php echo zen_href_link(FILENAME_ABOUT_US); ?>" class="drop"><?php echo TITLE_CONNECT;?></a><!-- bof connect -->
                <div class="dropdown_1column">
                <div class="col_1 firstcolumn">
                   <ul class="levels">
                       <li class="hfacebook"><a href="<?php echo FACEBOOK; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.FACEBOOK_ICON ?>"  alt="facebook link" class="h-sm" /><?php echo FACEBOOK_TEXT; ?></a></li>
                       <li class="htwitter"><a href="<?php echo TWITTER; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.TWITTER_ICON ?>"  alt="twitter link" class="h-sm" /><?php echo TWITTER_TEXT; ?></a></li>
                       <li class="hyoutube"><a href="<?php echo YOUTUBE; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.YOUTUBE_ICON ?>"  alt="youtube link" class="h-sm" /><?php echo YOUTUBE_TEXT; ?></a></li>
                       <li class="hpinterest"><a href="<?php echo PINTEREST; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.PINTEREST_ICON ?>"  alt="pinterest link" class="h-sm" /><?php echo PINTEREST_TEXT; ?></a></li>
                       <li class="hgoogle"><a href="<?php echo GOOGLE; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.GOOGLE_ICON ?>"  alt="google link" class="h-sm" /><?php echo GOOGLE_TEXT; ?></a></li>
                       <li class="hblog"><a href="<?php echo BLOG; ?>" target="_blank"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.BLOG_ICON ?>"  alt="blog link" class="h-sm" /><?php echo BLOG_TEXT; ?></a></li>                        
                   </ul>   
                </div>
               </div>
              
        </li><!-- eof connect-->
  */
?>
    
	<li class="customer_service"><a href="<?php echo zen_href_link(FILENAME_SHIPPING); ?>" class="drop"><?php echo HEADER_TITLE_CUSTOMER_SERVICE; ?></a><!-- bof customer service -->
        
            <div class="dropdown_customer_service align_right">
           
                <div class="col_cs">
                    <h2><?php echo TITLE_SHIPPING;?></h2>
                </div>

                <div class="col_cs">
      		     <p><?php echo TEXT_SHIPPING_INFO;?></p>             
                </div>
       
                <div class="col_cs">
                      <h2><?php echo TITLE_CONFIDENCE;?></h2>
		</div>

		<div class="col_cs">
                      <img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.PAYMENT_ICON ?>"   alt="payments we accept" /> 
		      <p class="mega-confidence"><?php echo TEXT_CONFIDENCE;?></p>             
                </div>
      
            </div><!-- eof customer service -->

	 </li>



    </ul><!-- eof mega-menu -->

</div><!-- eof mega-wrapper -->
