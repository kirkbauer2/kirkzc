<?php 	  

 
	  define(IMAGE1,'slide1.jpg');// default width 550px height 300px /
	  define(IMAGE2,'slide2.jpg');
	  define(IMAGE3,'slide3.jpg');
	  define(IMAGE4,'slide4.jpg');
	  define(IMAGE5,'slide5.jpg');

	  define(URL1,'http://www.boardgamestorage.com');
	  define(URL2,'http://www.boardgamestorage.com');
	  define(URL3,'http://www.boardgamestorage.com');
	  define(URL4,'http://www.boardgamestorage.com');
	  define(URL5,'http://www.boardgamestorage.com');


	 
?>
	

	<script type="text/javascript">
		$(document).ready(function(){	
		    
			$("#slider").easySlider({
				auto: true, 
				continuous: true,
				numeric: true
			});
			
		});	
	</script>

		<div id="slider">
			<ul>				
				<li><a href="<?php echo URL1 ?>"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.IMAGE1 ?>"   alt="first slide image" /></a></li>
				<li><a href="<?php echo URL2 ?>"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.IMAGE2 ?>"   alt="second slide image" /></a></li>
				<li><a href="<?php echo URL3 ?>"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.IMAGE3 ?>"   alt="third slide image" /></a></li> 
				<li><a href="<?php echo URL4 ?>"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.IMAGE4 ?>"   alt="fourth slide image" /></a></li>
				<li><a href="<?php echo URL5 ?>"><img src="<?php  echo $template->get_template_dir('',DIR_WS_TEMPLATE, $current_page_base,'images').'/'.IMAGE5 ?>"   alt="fifth slide image" /></a></li>			
			</ul>
		</div>
