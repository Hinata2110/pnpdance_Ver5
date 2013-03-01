<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

<title><?php bloginfo('name'); ?> <?php if ( is_single() ) { ?> &raquo; Blog Archive <?php } ?> <?php wp_title(); ?></title>

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_head(); ?>
</head>
<body>
<!-- Start Alexa Certify Javascript -->
<script type="text/javascript" src="https://d31qbv1cthcecs.cloudfront.net/atrk.js"></script><script type="text/javascript">_atrk_opts = { atrk_acct: "Mgaof1a0CM0081", domain:"pnpdance.com"}; atrk ();</script><noscript><img src="https://d5nxst8fruw4z.cloudfront.net/atrk.gif?account=Mgaof1a0CM0081" style="display:none" height="1" width="1" alt="" /></noscript>
<!-- End Alexa Certify Javascript -->

<div id="container">

    <div id="header">
        
        <a href="<?php bloginfo('rss2_url'); ?>" id="feed"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/rss.png" alt="rss" class="img_rss"/></a>
        <h1><a href="<?php echo get_option('home'); ?>/"><?php bloginfo('name'); ?></a></h1>
            <p class="description"><?php bloginfo('description'); ?></p>
            
        <div id="search_form">
        <form method="get" id="searchform" action="<?php bloginfo('url'); ?>/">
        <label class="hidden" for="s"><?php _e('Search for:'); ?></label>
        <input type="text" value="<?php the_search_query(); ?>" name="s" id="s" />
        <input type="submit" id="searchsubmit" value="Search" />
        </form>
        </div><!--search_form-->
        
        <div id="navigation">
            <li><a href="/index.php">Shop</a>
            <li><a href="/forum/index.php">Forums</a>
            <li><?php wp_list_pages('title_li='); ?></li>
        </div><!--navigation-->
        
    </div><!--header-->

