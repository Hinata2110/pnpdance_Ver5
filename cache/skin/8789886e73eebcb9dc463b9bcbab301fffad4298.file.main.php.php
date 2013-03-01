<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/main.php" */ ?>
<?php /*%%SmartyHeaderCode:21338940450aa051e25c172-14300090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8789886e73eebcb9dc463b9bcbab301fffad4298' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/main.php',
      1 => 1352478428,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '21338940450aa051e25c172-14300090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fusion' => 0,
    'SECTION_NAME' => 0,
    'layout' => 0,
    'TEXT_DIRECTION' => 0,
    'HTML_LANG' => 0,
    'META_TITLE' => 0,
    'META_DESCRIPTION' => 0,
    'META_KEYWORDS' => 0,
    'VAL_SELF' => 0,
    'STORE_URL' => 0,
    'SKIN_SUBSET' => 0,
    'CSS' => 0,
    'css_files' => 0,
    'SKIN_FOLDER' => 0,
    'ANALYTICS' => 0,
    'widget' => 0,
    '(mb_strtoupper($_smarty_tpl->tpl_vars[\'widget\']->value, \'UTF-8\'))' => 0,
    'LANG' => 0,
    'STORE_LOGO' => 0,
    'COPYRIGHT' => 0,
    'JS_SCRIPTS' => 0,
    'script' => 0,
    'JANRAIN' => 0,
    'LIVE_HELP' => 0,
    'COOKIE_DIALOGUE' => 0,
    'DEBUG_INFO' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051e64c587_85901268',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051e64c587_85901268')) {function content_50aa051e64c587_85901268($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['fusion']->value)){?>
	<?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable($_smarty_tpl->tpl_vars['fusion']->value->get("page_layout_".($_smarty_tpl->tpl_vars['SECTION_NAME']->value)), null, 3);
$_ptr = $_smarty_tpl->parent; while ($_ptr != null) {$_ptr->tpl_vars["layout"] = clone $_smarty_tpl->tpl_vars["layout"]; $_ptr = $_ptr->parent; }
Smarty::$global_tpl_vars["layout"] = clone $_smarty_tpl->tpl_vars["layout"];?>
	<?php if (!$_smarty_tpl->tpl_vars['layout']->value){?> <?php $_smarty_tpl->tpl_vars["layout"] = new Smarty_variable($_smarty_tpl->tpl_vars['fusion']->value->get("page_layout_default"), null, 0);?> <?php }?>
	<!doctype html>
	<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
	<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
	<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" dir="<?php echo $_smarty_tpl->tpl_vars['TEXT_DIRECTION']->value;?>
" lang="<?php echo $_smarty_tpl->tpl_vars['HTML_LANG']->value;?>
"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php echo $_smarty_tpl->tpl_vars['META_TITLE']->value;?>
</title>
		<meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['META_DESCRIPTION']->value;?>
" />
		<meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['META_KEYWORDS']->value;?>
" />
		<meta name="robots" content="index, follow" />
		<meta name="author" content="">

		<link rel="canonical" href="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" />
		
		<!-- Compiled LESS Stylesheet -->
		<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?compile=less/styles/<?php echo $_smarty_tpl->tpl_vars['SKIN_SUBSET']->value;?>
/style.less">
		
		<!-- Page Width -->
		<style type="text/css">
			body .container-fluid {
				max-width: <?php echo $_smarty_tpl->tpl_vars['fusion']->value->get('page_max_width');?>
;
				min-width: <?php echo $_smarty_tpl->tpl_vars['fusion']->value->get('page_min_width');?>
;
			}
		</style>
		
		<!-- Plugin Stylesheets -->
		<?php if (isset($_smarty_tpl->tpl_vars['CSS']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['css_files'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['css_files']->_loop = false;
 $_smarty_tpl->tpl_vars['css_keys'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['CSS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['css_files']->key => $_smarty_tpl->tpl_vars['css_files']->value){
$_smarty_tpl->tpl_vars['css_files']->_loop = true;
 $_smarty_tpl->tpl_vars['css_keys']->value = $_smarty_tpl->tpl_vars['css_files']->key;
?>
				<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
<?php echo $_smarty_tpl->tpl_vars['css_files']->value;?>
" />
			<?php } ?>
	    <?php }?>
	
		<!-- Global JavaScript Variables -->
		<script>
			// Global path variables
			var store_url	= '<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
',
				skin_folder	= '<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
',
				skin_path	= '<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
';
				
			// Javascript access to Fusion settings
			var skin_config = <?php echo $_smarty_tpl->tpl_vars['fusion']->value->getJSON(array('lightbox_animation_effect','lightbox_animation_speed','lightbox_overlay_opacity','image_magnification','image_slider_animation_effect','image_slider_animation_direction','image_slider_animation_speed','image_slider_frame_duration','image_slider_autostart','image_slider_pause_on_hover','image_slider_pause_on_action','image_slider_randomize','image_slider_loop','tagline_slider_animation_effect','tagline_slider_animation_speed','tagline_slider_frame_duration','tagline_slider_pause_on_hover','align_product_actions'));?>
;
		</script>
		
		<!--[if (gte IE 6)&(lte IE 8)]>
			<script src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/js/libs/selectivizr.min.js?v=1"></script>
		<![endif]-->
		
		<!-- Script Loader -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/headjs/0.96/head.min.js"></script>
		<script>window.head || document.write('<script src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/js/libs/head.min.js"><\/script>')</script>
		
		<!-- Asynchronous Google Analytics -->
		<?php if ($_smarty_tpl->tpl_vars['ANALYTICS']->value){?>
			
				<script>
					var _gaq = _gaq || [];
				  	_gaq.push(['_setAccount', '<?php echo $_smarty_tpl->tpl_vars['ANALYTICS']->value;?>
']);
				  	_gaq.push(['_trackPageview']);
					_gaq.push(['_trackPageLoadTime']);
			
				  	(function() {
				    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  	})();
				</script>
			
		<?php }?>
	</head>
	<body id="section-<?php echo $_smarty_tpl->tpl_vars['SECTION_NAME']->value;?>
">

		<div class="container-fluid">
			<div id="page">
				<header id="page-header">
					<nav id="headertop">
						<div class="row-fluid">
							<div class="span6">
								<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.tagline_slider.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

							</div>
							<div id="widget-header-upper" class="span6">
								<?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layout']->value['regions']['header_upper']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['widget']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
 $_smarty_tpl->tpl_vars['widget']->iteration++;
?>
									<?php if (file_exists("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/".($_smarty_tpl->tpl_vars['widget']->value).".php")){?>
										<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/".($_smarty_tpl->tpl_vars['widget']->value).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									<?php }elseif(file_exists("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/global/".($_smarty_tpl->tpl_vars['widget']->value).".php")){?>
										<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/global/".($_smarty_tpl->tpl_vars['widget']->value).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									<?php }else{ ?>
										<?php echo $_smarty_tpl->tpl_vars[(mb_strtoupper($_smarty_tpl->tpl_vars['widget']->value, 'UTF-8'))]->value;?>

									<?php }?>
								<?php } ?>
							</div>
						</div>
					</nav>
					<nav id="headerbottom">
						<div class="row-fluid">
							<div id="logo" align="center" class="span12">
								<a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['home'];?>
">
									<?php if ($_smarty_tpl->tpl_vars['STORE_LOGO']->value){?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_LOGO']->value;?>
" alt="<?php echo $_smarty_tpl->tpl_vars['META_TITLE']->value;?>
" />
									<?php }else{ ?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/images/logos/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['SKIN_SUBSET']->value;?>
.php" alt="<?php echo $_smarty_tpl->tpl_vars['META_TITLE']->value;?>
" />
									<?php }?>
								</a>
							</div>
							<div id="widget-header-lower" class="span0">
								<?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layout']->value['regions']['header_lower']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['widget']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
 $_smarty_tpl->tpl_vars['widget']->iteration++;
?>
									<?php if (file_exists("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/".($_smarty_tpl->tpl_vars['widget']->value).".php")){?>
										<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/".($_smarty_tpl->tpl_vars['widget']->value).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									<?php }elseif(file_exists("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/global/".($_smarty_tpl->tpl_vars['widget']->value).".php")){?>
										<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/global/".($_smarty_tpl->tpl_vars['widget']->value).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									<?php }else{ ?>
										<?php echo $_smarty_tpl->tpl_vars[(mb_strtoupper($_smarty_tpl->tpl_vars['widget']->value, 'UTF-8'))]->value;?>

									<?php }?>
								<?php } ?>
							</div>
						</div>
					</nav>
				</header><!-- /#page-header -->
				<div id="page-layout">
					
					<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.image_slider.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

					
					
					<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/layouts/".($_smarty_tpl->tpl_vars['layout']->value['template']).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>

				</div><!-- /#page-content -->
				<footer id="page-footer">
					<nav id="footertop">
						<?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layout']->value['regions']['footer']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['widget']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
 $_smarty_tpl->tpl_vars['widget']->iteration++;
?>
							<?php if ((($_smarty_tpl->tpl_vars['widget']->iteration-1)%3)==0){?>
								<div class="row-fluid">
							<?php }?>
								<aside class="span4 <?php if (($_smarty_tpl->tpl_vars['widget']->iteration%3)==0){?>lastInRow<?php }?> <?php if ((($_smarty_tpl->tpl_vars['widget']->iteration-1)%3)==0){?>firstInRow<?php }?>">
									<?php if (file_exists("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/".($_smarty_tpl->tpl_vars['widget']->value).".php")){?>
										<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/".($_smarty_tpl->tpl_vars['widget']->value).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									<?php }elseif(file_exists("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/global/".($_smarty_tpl->tpl_vars['widget']->value).".php")){?>
										<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/global/".($_smarty_tpl->tpl_vars['widget']->value).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

									<?php }else{ ?>
										<?php echo $_smarty_tpl->tpl_vars[(mb_strtoupper($_smarty_tpl->tpl_vars['widget']->value, 'UTF-8'))]->value;?>

									<?php }?>
								</aside>
							<?php if (($_smarty_tpl->tpl_vars['widget']->iteration%3)==0){?>
								</div>
							<?php }?>
						<?php } ?>
					</nav>
					<div id="footerbottom">
						<div class="row-fluid">
							<div id="copyright" class="span6">
								<?php echo $_smarty_tpl->tpl_vars['COPYRIGHT']->value;?>

							
								
											
								Designed by <a href="http://www.shopdev.co.uk">ShopDev</a>
								
							</div>
							<div id="badges" class="span6">
								<a href="#">
									<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/img/secure_shopping.gif" alt="" />
								</a>
							</div>
						</div>
					</div>
				</footer><!-- /#page-footer -->
			</div>
		</div>
	
		<!-- Plugin JavaScripts -->
		<?php  $_smarty_tpl->tpl_vars['script'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['script']->_loop = false;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['JS_SCRIPTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['script']->key => $_smarty_tpl->tpl_vars['script']->value){
$_smarty_tpl->tpl_vars['script']->_loop = true;
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['script']->key;
?>
			<script src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['script']->value;?>
"></script>
		<?php } ?>

		<!-- JanRain JavaScript -->
		<?php if (isset($_smarty_tpl->tpl_vars['JANRAIN']->value)){?><?php echo $_smarty_tpl->tpl_vars['JANRAIN']->value;?>
<?php }?>

		<!-- Live Help JavaScript -->
		<?php if (isset($_smarty_tpl->tpl_vars['LIVE_HELP']->value)){?><?php echo $_smarty_tpl->tpl_vars['LIVE_HELP']->value;?>
<?php }?>
	
		<!-- EU Cookie Compliance -->
		<?php if ($_smarty_tpl->tpl_vars['COOKIE_DIALOGUE']->value){?>
			<form id="cookieControl" action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" style="display: none;" method="POST">
				<input type="checkbox" name="accept_cookies" checked="checked" value="1" />
				<input type="text" name="accept_cookies_submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['continue'];?>
" />
			</form>
			<script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
			<script src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/js/libs/cookieControl-4.1.min.js"></script>
			
				<script type="text/javascript">//<![CDATA[
					cookieControl({
						introText: '<p>This site uses some unobtrusive cookies to store information on your computer.</p>',
						fullText: '<p>Some cookies on this site are essential, and the site won\'t work as expected without them. These cookies are set when you submit a form, login or interact with the site by doing something that goes beyond clicking on simple links.</p><p>We also use some non-essential cookies to anonymously track visitors or enhance your experience of the site. If you\'re not happy with this, we won\'t set these cookies but some nice features of the site may be unavailable.</p><p>By using our site you accept the terms of our Privacy Policy.</p>',
						position: 'left', // left or right
						shape: 'triangle', // triangle or diamond
						theme: 'light', // light or dark
						startOpen: true,
						autoHide: 6000,
						subdomains: true,
						onAccept: function() {
							$('#cookieControl').submit();
						},
						onReady: function(){},
						onCookiesAllowed: function(){},
						onCookiesNotAllowed: function(){},
						countries: '' // Or supply a list ['United Kingdom', 'Greece']
					});
				//]]></script>
			
		<?php }?>
	
		<!-- Debugging -->
		<?php if ($_smarty_tpl->tpl_vars['fusion']->value->get('smarty_debug')){?> <?php $_smarty_tpl->smarty->loadPlugin('Smarty_Internal_Debug'); Smarty_Internal_Debug::display_debug($_smarty_tpl); ?> <?php }?>
		<?php if (isset($_smarty_tpl->tpl_vars['DEBUG_INFO']->value)){?> <?php echo $_smarty_tpl->tpl_vars['DEBUG_INFO']->value;?>
 <?php }?>
		
		<!-- Used for styling CubeCart credits -->
		<div class="credits-sep"></div>
	</body>
	</html>
<?php }else{ ?>
	<!doctype html><html><head></head><body>Fusion Framework Required</body></html>
<?php }?><?php }} ?>