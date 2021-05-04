<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>

		<?php wp_footer(); ?>
        
    <div class="footer">
    	<div class="footer_left">
            <ul>
            <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
    		<?php wp_list_pages('title_li=' ); ?>
            </ul>
        </div>
        <div class="footer_center">
	&copy; Copyright Website.com. All Rights Reserved.<br />
Powered by <a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a>.
		</div>
        
        <div class="right_footer">
        <a href="http://csstemplatesmarket.com" target="_blank"><img src="<?php bloginfo('template_directory'); ?>/images/csstemplatesmarket.gif" alt="" title="" border="0" /></a>
        </div>
        <div class="clear"></div>
    </div> 
    
    <div class="clear"></div>
  </div> <!--end of main_content-->

</div> <!--end of page-->
</div><!--end of main container-->  
  
        
</body>
</html>
