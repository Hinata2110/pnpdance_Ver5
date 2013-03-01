{if isset($fusion)}
	{assign var="layout" scope="global" value=$fusion->get("page_layout_{$SECTION_NAME}")}
	{if !$layout} {assign var="layout" value=$fusion->get("page_layout_default")} {/if}
	<!doctype html>
	<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
	<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
	<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
	<!--[if gt IE 8]><!--> <html class="no-js" dir="{$TEXT_DIRECTION}" lang="{$HTML_LANG}"> <!--<![endif]-->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title>{$META_TITLE}</title>
		<meta name="description" content="{$META_DESCRIPTION}" />
		<meta name="keywords" content="{$META_KEYWORDS}" />
		<meta name="robots" content="index, follow" />
		<meta name="author" content="">

		<link rel="canonical" href="{$VAL_SELF}" />
		
		<!-- Compiled LESS Stylesheet -->
		<link rel="stylesheet" href="{$STORE_URL}/index.php?compile=less/styles/{$SKIN_SUBSET}/style.less">
		
		<!-- Page Width -->
		<style type="text/css">
			body .container-fluid {
				max-width: {$fusion->get('page_max_width')};
				min-width: {$fusion->get('page_min_width')};
			}
		</style>
		
		<!-- Plugin Stylesheets -->
		{if isset($CSS)}
			{foreach from=$CSS key=css_keys item=css_files}
				<link rel="stylesheet" href="{$STORE_URL}{$css_files}" />
			{/foreach}
	    {/if}
	
		<!-- Global JavaScript Variables -->
		<script>
			// Global path variables
			var store_url	= '{$STORE_URL}',
				skin_folder	= '{$SKIN_FOLDER}',
				skin_path	= '{$STORE_URL}/skins/{$SKIN_FOLDER}';
				
			// Javascript access to Fusion settings
			var skin_config = {$fusion->getJSON(array(
				'lightbox_animation_effect',
				'lightbox_animation_speed',
				'lightbox_overlay_opacity',
				'image_magnification',
				'image_slider_animation_effect',
				'image_slider_animation_direction',
				'image_slider_animation_speed',
				'image_slider_frame_duration',
				'image_slider_autostart',
				'image_slider_pause_on_hover',
				'image_slider_pause_on_action',
				'image_slider_randomize',
				'image_slider_loop',
				'tagline_slider_animation_effect',
				'tagline_slider_animation_speed',
				'tagline_slider_frame_duration',
				'tagline_slider_pause_on_hover',
				'align_product_actions'
			))};
		</script>
		
		<!--[if (gte IE 6)&(lte IE 8)]>
			<script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/libs/selectivizr.min.js?v=1"></script>
		<![endif]-->
		
		<!-- Script Loader -->
		<script src="//cdnjs.cloudflare.com/ajax/libs/headjs/0.96/head.min.js"></script>
		<script>window.head || document.write('<script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/libs/head.min.js"><\/script>')</script>
		
		<!-- Asynchronous Google Analytics -->
		{if $ANALYTICS}
			{literal}
				<script>
					var _gaq = _gaq || [];
				  	_gaq.push(['_setAccount', '{/literal}{$ANALYTICS}{literal}']);
				  	_gaq.push(['_trackPageview']);
					_gaq.push(['_trackPageLoadTime']);
			
				  	(function() {
				    	var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
				    	ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				    	var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
				  	})();
				</script>
			{/literal}
		{/if}
	</head>
	<body id="section-{$SECTION_NAME}">

		<div class="container-fluid">
			<div id="page">
				<header id="page-header">
					<nav id="headertop">
						<div class="row-fluid">
							<div class="span6">
								{include file="skins/{$SKIN_FOLDER}/templates/element.tagline_slider.php"}
							</div>
							<div id="widget-header-upper" class="span6">
								{foreach from=$layout.regions.header_upper item=widget}
									{if file_exists("skins/{$SKIN_FOLDER}/templates/widgets/{$widget}.php")}
										{include file="skins/{$SKIN_FOLDER}/templates/widgets/{$widget}.php"}
									{else if file_exists("skins/{$SKIN_FOLDER}/templates/widgets/global/{$widget}.php")}
										{include file="skins/{$SKIN_FOLDER}/templates/widgets/global/{$widget}.php"}
									{else}
										{${$widget|upper}}
									{/if}
								{/foreach}
							</div>
						</div>
					</nav>
					<nav id="headerbottom">
						<div class="row-fluid">
							<div id="logo" align="center" class="span12">
								<a href="{$STORE_URL}/index.php" title="{$LANG.common.home}">
									{if $STORE_LOGO}
										<img src="{$STORE_LOGO}" alt="{$META_TITLE}" />
									{else}
										<img src="{$STORE_URL}/images/logos/{$SKIN_FOLDER}-{$SKIN_SUBSET}.php" alt="{$META_TITLE}" />
									{/if}
								</a>
							</div>
							<div id="widget-header-lower" class="span0">
								{foreach from=$layout.regions.header_lower item=widget}
									{if file_exists("skins/{$SKIN_FOLDER}/templates/widgets/{$widget}.php")}
										{include file="skins/{$SKIN_FOLDER}/templates/widgets/{$widget}.php"}
									{else if file_exists("skins/{$SKIN_FOLDER}/templates/widgets/global/{$widget}.php")}
										{include file="skins/{$SKIN_FOLDER}/templates/widgets/global/{$widget}.php"}
									{else}
										{${$widget|upper}}
									{/if}
								{/foreach}
							</div>
						</div>
					</nav>
				</header><!-- /#page-header -->
				<div id="page-layout">
					{* Include image slider *}
					{include file="skins/{$SKIN_FOLDER}/templates/element.image_slider.php"}
					
					{* Include the template *}
					{include scope=parent file="skins/{$SKIN_FOLDER}/templates/layouts/{$layout.template}.php"}
				</div><!-- /#page-content -->
				<footer id="page-footer">
					<nav id="footertop">
						{foreach from=$layout.regions.footer item=widget}
							{if (($widget@iteration - 1) % 3) == 0}
								<div class="row-fluid">
							{/if}
								<aside class="span4 {if ($widget@iteration % 3) == 0}lastInRow{/if} {if (($widget@iteration - 1) % 3) == 0}firstInRow{/if}">
									{if file_exists("skins/{$SKIN_FOLDER}/templates/widgets/{$widget}.php")}
										{include file="skins/{$SKIN_FOLDER}/templates/widgets/{$widget}.php"}
									{else if file_exists("skins/{$SKIN_FOLDER}/templates/widgets/global/{$widget}.php")}
										{include file="skins/{$SKIN_FOLDER}/templates/widgets/global/{$widget}.php"}
									{else}
										{${$widget|upper}}
									{/if}
								</aside>
							{if ($widget@iteration % 3) == 0}
								</div>
							{/if}
						{/foreach}
					</nav>
					<div id="footerbottom">
						<div class="row-fluid">
							<div id="copyright" class="span6"></div>
							<div id="badges" class="span6">
								<a href="#">
									<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/secure_shopping.gif" alt="" />
								</a>
							</div>
						</div>
					</div>
				</footer><!-- /#page-footer -->
			</div>
		</div>
	
		<!-- Plugin JavaScripts -->
		{foreach from=$JS_SCRIPTS key=k item=script}
			<script src="{$STORE_URL}/{$script}"></script>
		{/foreach}

		<!-- JanRain JavaScript -->
		{if isset($JANRAIN)}{$JANRAIN}{/if}

		<!-- Live Help JavaScript -->
		{if isset($LIVE_HELP)}{$LIVE_HELP}{/if}
	
		<!-- EU Cookie Compliance -->
		{if $COOKIE_DIALOGUE}
			<form id="cookieControl" action="{$VAL_SELF}" style="display: none;" method="POST">
				<input type="checkbox" name="accept_cookies" checked="checked" value="1" />
				<input type="text" name="accept_cookies_submit" value="{$LANG.common.continue}" />
			</form>
			<script src="http://www.geoplugin.net/javascript.gp" type="text/javascript"></script>
			<script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/libs/cookieControl-4.1.min.js"></script>
			{literal}
				<script type="text/javascript">//<![CDATA[
					cookieControl({
						introText: '<p>This site uses some unobtrusive cookies to store information on your computer.</p>',
						fullText: '<p>Some cookies on this site are essential, and the site won\'t work as expected without them. These cookies are set when you submit a form, login or interact with the site by doing something that goes beyond clicking on simple links.</p><p>We also use some non-essential cookies to anonymously track visitors or enhance your experience of the site. If you\'re not happy with this, we won\'t set these cookies but some nice features of the site may be unavailable.</p><p>By using our site you accept the terms of our <a href="http://www.pnpdance.com/privacy-policy.html">Privacy Policy</a>.</p>',
						position: 'left', // left or right
						shape: 'diamond', // triangle or diamond
						theme: 'light', // light or dark
						startOpen: true,
						autoHide: 10000,
						subdomains: true,
						consentModel:'implicit',
						onAccept: function() {
							$('#cookieControl').submit();
						},
						onReady: function(){},
						onCookiesAllowed: function(){},
						onCookiesNotAllowed: function(){},
						countries: '' // Or supply a list ['United Kingdom', 'Greece']
					});
					
					function ccAddAnalytics() {
					  jQuery.getScript("http://www.google-analytics.com/ga.js", function() {
						var GATracker = _gat._createTracker('UA-22399941-1');
						GATracker._trackPageview();
					  });
					}
					
				//]]></script>
			{/literal}
		{/if}
	
		<!-- Debugging -->
		{if $fusion->get('smarty_debug')} {debug} {/if}
		{if isset($DEBUG_INFO)} {$DEBUG_INFO} {/if}
		
		<!-- Used for styling CubeCart credits -->
		<div class="credits-sep"></div>
	</body>
	</html>
{else}
	<!doctype html><html><head></head><body>Fusion Framework Required</body></html>
{/if}