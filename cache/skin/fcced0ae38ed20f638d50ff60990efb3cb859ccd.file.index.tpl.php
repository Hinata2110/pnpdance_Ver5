<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:32:55
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/skin/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1188168289509a54f7d5aec5-94432275%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fcced0ae38ed20f638d50ff60990efb3cb859ccd' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/skin/admin/index.tpl',
      1 => 1352290484,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1188168289509a54f7d5aec5-94432275',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'LANG' => 0,
    'MODULE' => 0,
    'MODULE_ZONES' => 0,
    'SESSION_TOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a54f7df16f1_98677574',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a54f7df16f1_98677574')) {function content_509a54f7df16f1_98677574($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="multipart/form-data">
	<div id="Fusion" class="tab_content">
		<h3>Fusion Framework</h3>
	  	<fieldset>
			<legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['config_settings'];?>
</legend>
			<div>
				<label for="fusion_status"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</label>
				<span><input type="hidden" name="module[status]" id="fusion_status" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value['status'];?>
" />&nbsp;</span>
			</div>
  		</fieldset>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['MODULE_ZONES']->value;?>

  <div class="form_control">
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
" />
  </div>
  <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
" />
</form><?php }} ?>