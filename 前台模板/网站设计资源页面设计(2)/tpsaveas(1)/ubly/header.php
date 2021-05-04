<?php
/**
 * @package WordPress
 * @subpackage Default_Theme
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php wp_title('&laquo;', true, 'right'); ?> <?php bloginfo('name'); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

<?php wp_head(); ?>
</head>
<body>
<div id="main_container">

<div id="page">


	<div id="header">
    	<div id="logo"><a href="<?php echo get_option('home'); ?>/"><img src="<?php bloginfo('template_directory'); ?>/images/logo.gif" alt="" title="" border="0" /></a></div>
    </div>
    
	<div class="top_menu">
    
            <ul>
            <li><a href="<?php echo get_option('home'); ?>/">Home</a></li>
    		<?php wp_list_pages('title_li=' ); ?>
            </ul>

            <div id="search_top">
            <form method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" class="searchfield" />
            <input type="submit" value="Search" class="searchbutton" id="searchsubmit" />
            </form>
            </div>
            
			<div class="rss">
            <a href="<?php bloginfo('rss_url'); ?>"><img src="<?php bloginfo('template_directory'); ?>/images/rss.gif" alt="" title="" border="0" /></a>
            </div>
    </div>
    
    <div class="main_content">

