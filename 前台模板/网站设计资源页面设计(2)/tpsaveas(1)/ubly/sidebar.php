<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
	<div id="sidebar">
    <div class="sidebar_top"></div>
		<ul>
			<?php 	/* Widgetized sidebar, if you have the plugin installed. */
			if ( function_exists('dynamic_sidebar') && dynamic_sidebar(2) ) : else : ?>
            
             <li>
                <div class="sidebar_block">  
                <h2>About Us</h2>                      
				<p class="about">A little something about you, the author. Nothing lengthy, just an overview.</p>
                </div>
            </li> 
            
            <li>
            <div class="sidebar_divider"></div>
            </li>           
            
            <li>
                <div class="sidebar_block">  
                <h2>Categories</h2>                      
                 <ul>
                <?php wp_list_categories('title_li='); ?>
                 
                </ul> 
                </div>
            </li>          

            <li>
            <div class="sidebar_divider"></div>
            </li> 
            
            <li>
                <div class="sidebar_block">  
                <h2>Archives</h2>                
                    <ul>
                    <?php wp_get_archives('type=monthly'); ?>
                    </ul> 
                </div>            
            </li>

            <li>
            <div class="sidebar_divider"></div>
            </li>

            
			<li>
            	<div class="sidebar_block">
           		 <h2>Meta</h2>
				<ul>
					<?php wp_register(); ?>
					<li><?php wp_loginout(); ?></li>
					<li><a href="http://validator.w3.org/check/referer" title="This page validates as XHTML 1.0 Transitional">Valid <abbr title="eXtensible HyperText Markup Language">XHTML</abbr></a></li>
					<li><a href="http://gmpg.org/xfn/"><abbr title="XHTML Friends Network">XFN</abbr></a></li>
					<li><a href="http://wordpress.org/" title="Powered by WordPress, state-of-the-art semantic personal publishing platform.">WordPress</a></li>
					<?php wp_meta(); ?>
				</ul>
                </div>
			</li>


			<?php endif; ?>
		</ul>
        
    <div class="sidebar_bottom"></div>
	</div>

