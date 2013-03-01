<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:45
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/skin/templates/main.php" */ ?>
<?php /*%%SmartyHeaderCode:1046874431509a5566002659-13910768%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71df1eecb25efcf740103cdcc20cdd5dc622643b' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/skin/templates/main.php',
      1 => 1352290484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1046874431509a5566002659-13910768',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PUBLIC_PATH' => 0,
    'PANELS_NAVIGATION' => 0,
    'panel' => 0,
    'VAL_SELF' => 0,
    'PANELS' => 0,
    'tab' => 0,
    'section' => 0,
    'setting' => 0,
    'VALIDATION' => 0,
    'fusion' => 0,
    'SKINS' => 0,
    'SKIN' => 0,
    'skinName' => 0,
    'STORE_URL' => 0,
    'skinTitle' => 0,
    'INCOMPATIBLE' => 0,
    'LOADED_DEFAULT' => 0,
    'SESSION_TOKEN' => 0,
    'LICENSE_ERROR' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a5566385d95_51017858',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a5566385d95_51017858')) {function content_509a5566385d95_51017858($_smarty_tpl) {?><!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title>Fusion Configuration Panel</title>
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PUBLIC_PATH']->value;?>
/css/lib/jquery/ui/themes/Aristo/jquery-ui-1.8.7.custom.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PUBLIC_PATH']->value;?>
/css/lib/jquery/layout/aristo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PUBLIC_PATH']->value;?>
/css/reset.css">
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PUBLIC_PATH']->value;?>
/css/lib/jquery/uniform/uniform.aristo.css" />
		<link rel="stylesheet" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PUBLIC_PATH']->value;?>
/css/lib/jquery/tipsy/tipsy.css" />
		<link rel="stylesheet/less" type="text/css" href="<?php echo $_smarty_tpl->tpl_vars['PUBLIC_PATH']->value;?>
/css/application.less">
		<script src="<?php echo $_smarty_tpl->tpl_vars['PUBLIC_PATH']->value;?>
/lib/less/less.js"></script>
		
		<!-- Script Loader (head.js) -->
		<script src="<?php echo $_smarty_tpl->tpl_vars['PUBLIC_PATH']->value;?>
/lib/head/head.min.js"></script>
		
		<script>
			var public_path = "<?php echo $_smarty_tpl->tpl_vars['PUBLIC_PATH']->value;?>
";
		</script>
	</head>
	
	<body>
		<header class="ui-layout-north" id="toolkit">
			<div id="panels">
				<?php  $_smarty_tpl->tpl_vars['panel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['panel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PANELS_NAVIGATION']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['panel']->iteration=0;
 $_smarty_tpl->tpl_vars['panel']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['panel']->key => $_smarty_tpl->tpl_vars['panel']->value){
$_smarty_tpl->tpl_vars['panel']->_loop = true;
 $_smarty_tpl->tpl_vars['panel']->iteration++;
 $_smarty_tpl->tpl_vars['panel']->index++;
 $_smarty_tpl->tpl_vars['panel']->first = $_smarty_tpl->tpl_vars['panel']->index === 0;
?>
					<input type="radio" id="panel_<?php echo $_smarty_tpl->tpl_vars['panel']->iteration;?>
" name="panels" value="panel_<?php echo $_smarty_tpl->tpl_vars['panel']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['panel']->first){?>checked="checked"<?php }?> data-icon="<?php echo $_smarty_tpl->tpl_vars['panel']->value['icon'];?>
" />
					<label for="panel_<?php echo $_smarty_tpl->tpl_vars['panel']->iteration;?>
"><?php echo $_smarty_tpl->tpl_vars['panel']->value['title'];?>
</label>
				<?php } ?>
			</div>
			<div id="exit">
				<a href="admin.php" class="button admin-home">Back to CubeCart</a>
			</div>
		</header>
		<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="multipart/form-data">
			<div class="ui-layout-center">
				<?php  $_smarty_tpl->tpl_vars['panel'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['panel']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PANELS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['panel']->iteration=0;
 $_smarty_tpl->tpl_vars['panel']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['panel']->key => $_smarty_tpl->tpl_vars['panel']->value){
$_smarty_tpl->tpl_vars['panel']->_loop = true;
 $_smarty_tpl->tpl_vars['panel']->iteration++;
 $_smarty_tpl->tpl_vars['panel']->index++;
 $_smarty_tpl->tpl_vars['panel']->first = $_smarty_tpl->tpl_vars['panel']->index === 0;
?>
					<div id="panel_<?php echo $_smarty_tpl->tpl_vars['panel']->value['attributes']['name'];?>
" class="panel" <?php if (!$_smarty_tpl->tpl_vars['panel']->first){?>style="display: none;"<?php }?>>
						<aside class="ui-layout-west" id="tabs">
					        <ul>
								<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['panel']->value['tab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->index++;
 $_smarty_tpl->tpl_vars['tab']->first = $_smarty_tpl->tpl_vars['tab']->index === 0;
?>
					        		<li <?php if ($_smarty_tpl->tpl_vars['tab']->first){?>class="active"<?php }?>><a href="#tab_<?php echo $_smarty_tpl->tpl_vars['tab']->value['attributes']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['tab']->value['attributes']['title'];?>
</a></li>
					        	<?php } ?>
					        </ul>
						</aside>
						<section class="ui-layout-center panel-content">
							<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['panel']->value['tab']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['tab']->index=-1;
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
 $_smarty_tpl->tpl_vars['tab']->index++;
 $_smarty_tpl->tpl_vars['tab']->first = $_smarty_tpl->tpl_vars['tab']->index === 0;
?>
								<div class="tab" id="tab_<?php echo $_smarty_tpl->tpl_vars['tab']->value['attributes']['name'];?>
" <?php if (!$_smarty_tpl->tpl_vars['tab']->first){?>style="display: none;"<?php }?>>
									<?php  $_smarty_tpl->tpl_vars['section'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['section']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['section']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['section']->key => $_smarty_tpl->tpl_vars['section']->value){
$_smarty_tpl->tpl_vars['section']->_loop = true;
?>
										<fieldset>
											<legend><?php echo $_smarty_tpl->tpl_vars['section']->value['attributes']['title'];?>
</legend>
											<?php if (isset($_smarty_tpl->tpl_vars['section']->value['attributes']['description'])&&$_smarty_tpl->tpl_vars['section']->value['attributes']['description']!=''){?>
												<div class="section-description">
													<?php echo $_smarty_tpl->tpl_vars['section']->value['attributes']['description'];?>

												</div>
											<?php }?>
											<?php  $_smarty_tpl->tpl_vars['setting'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['section']->value['setting']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->key => $_smarty_tpl->tpl_vars['setting']->value){
$_smarty_tpl->tpl_vars['setting']->_loop = true;
?>
												<?php if (isset($_smarty_tpl->tpl_vars['setting']->value['attributes']['module'])){?>
													<div id="module_<?php echo $_smarty_tpl->tpl_vars['setting']->value['attributes']['module'];?>
" class="module <?php if ((isset($_smarty_tpl->tpl_vars['VALIDATION']->value[$_smarty_tpl->tpl_vars['setting']->value['attributes']['name']]))){?>invalid<?php }?>">
														<?php echo $_smarty_tpl->tpl_vars['fusion']->value->module($_smarty_tpl->tpl_vars['setting']->value);?>

														<?php if ((isset($_smarty_tpl->tpl_vars['VALIDATION']->value[$_smarty_tpl->tpl_vars['setting']->value['attributes']['name']]))){?>
															<span class="validation-error-msg"><?php echo $_smarty_tpl->tpl_vars['VALIDATION']->value[$_smarty_tpl->tpl_vars['setting']->value['attributes']['name']];?>
</span>
														<?php }?>
													</div>
												<?php }?>
											<?php } ?>
										</fieldset>
									<?php }
if (!$_smarty_tpl->tpl_vars['section']->_loop) {
?>
										<?php  $_smarty_tpl->tpl_vars['setting'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['setting']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab']->value['setting']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['setting']->key => $_smarty_tpl->tpl_vars['setting']->value){
$_smarty_tpl->tpl_vars['setting']->_loop = true;
?>
											<?php if (isset($_smarty_tpl->tpl_vars['setting']->value['attributes']['module'])){?>
												<div id="module_<?php echo $_smarty_tpl->tpl_vars['setting']->value['attributes']['module'];?>
" class="module">
													<?php echo $_smarty_tpl->tpl_vars['fusion']->value->module($_smarty_tpl->tpl_vars['setting']->value);?>

													<?php if ((isset($_smarty_tpl->tpl_vars['VALIDATION']->value[$_smarty_tpl->tpl_vars['setting']->value['attributes']['name']]))){?>
														<span class="validation-error-msg"><?php echo $_smarty_tpl->tpl_vars['VALIDATION']->value[$_smarty_tpl->tpl_vars['setting']->value['attributes']['name']];?>
</span>
													<?php }?>
												</div>
											<?php }?>
										<?php } ?>
									<?php } ?>									
								</div>
							<?php } ?>
						</section>
					</div>
				<?php } ?>
				<!-- Check skin can be configured -->
				<?php if (!isset($_smarty_tpl->tpl_vars['SKINS']->value)||empty($_smarty_tpl->tpl_vars['SKINS']->value)){?>
			        <div title="No Compatible Themes" class="fatal-error">
			        	<p>No compatible themes were detected.</p>
			        </div>
				<?php }elseif((!$_smarty_tpl->tpl_vars['SKIN']->value&&!empty($_smarty_tpl->tpl_vars['SKINS']->value))){?>
					<div title="Select Theme" class="select-theme">
						<?php  $_smarty_tpl->tpl_vars['skinTitle'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['skinTitle']->_loop = false;
 $_smarty_tpl->tpl_vars['skinName'] = new Smarty_Variable;
 $_from = $_smarty_tpl->tpl_vars['SKINS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['skinTitle']->key => $_smarty_tpl->tpl_vars['skinTitle']->value){
$_smarty_tpl->tpl_vars['skinTitle']->_loop = true;
 $_smarty_tpl->tpl_vars['skinName']->value = $_smarty_tpl->tpl_vars['skinTitle']->key;
?>
							<a href="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
&amp;skin=<?php echo $_smarty_tpl->tpl_vars['skinName']->value;?>
" class="theme">
								<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['skinName']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['skinName']->value;?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['skinTitle']->value;?>
" />
								<span><?php echo $_smarty_tpl->tpl_vars['skinTitle']->value;?>
</span>
							</a>
						<?php } ?>
			        </div>
				<?php }elseif(!isset($_smarty_tpl->tpl_vars['SKINS']->value[$_smarty_tpl->tpl_vars['SKIN']->value])){?>
			        <div title="Incompatible Theme" class="fatal-error">
			        	<p>The selected theme is not compatible with Fusion.</p>
			        </div>
				<?php }elseif(isset($_smarty_tpl->tpl_vars['INCOMPATIBLE']->value)){?>
					<div title="Update Required" class="fatal-error">
			        	<p>This theme requires Fusion V<?php echo $_smarty_tpl->tpl_vars['INCOMPATIBLE']->value;?>
.</p>
			        </div>
				<?php }elseif(isset($_smarty_tpl->tpl_vars['LOADED_DEFAULT']->value)){?>
					<div title="Default Configuration Loaded" class="non-fatal-error">
			        	<p>Fusion has loaded the default configuration included with this theme.  You can now proceed to edit any settings.</p>
			        </div>
				<?php }elseif(isset($_smarty_tpl->tpl_vars['VALIDATION']->value)){?>
					<!-- Check for validation errors -->
					<div title="Invalid Settings" class="non-fatal-error">
						<p>
							One or more validation errors occurred.  Please review and amend your changes before trying again.
							<span style="display: none;"><?php echo var_dump($_smarty_tpl->tpl_vars['VALIDATION']->value);?>
</span>
						</p>
					</div>
				<?php }?>
			</div>
			<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
" />
		</form>
		<?php if (isset($_smarty_tpl->tpl_vars['LICENSE_ERROR']->value)){?>
			<div title="<?php echo $_smarty_tpl->tpl_vars['LICENSE_ERROR']->value;?>
" class="license-error">
				<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="multipart/form-data">
					<p>
						<label for="licensekey">License Key</label>
						<input type="text" id="licensekey" name="licensekey" value="<?php echo $_smarty_tpl->tpl_vars['fusion']->value->getSetting('licensekey');?>
" />
					</p>
					<input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
" />
				</form>
	        </div>
		<?php }?>
		<footer class="ui-layout-south" id="footer">
			<span class="version">Fusion V<?php echo $_smarty_tpl->tpl_vars['fusion']->value->getVersion();?>
</span>
			<a href="#save" class="button" data-icon="ui-icon-disk">Save All</a>
		</footer>
	</body>
	
	<!-- Application JS -->
	<script src="<?php echo $_smarty_tpl->tpl_vars['PUBLIC_PATH']->value;?>
/application.js"></script>
</html><?php }} ?>