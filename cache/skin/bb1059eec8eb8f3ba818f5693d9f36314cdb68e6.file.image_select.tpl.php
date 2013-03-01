<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:56
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/image_select/image_select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:731223950509a5570a06d32-95291543%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bb1059eec8eb8f3ba818f5693d9f36314cdb68e6' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/image_select/image_select.tpl',
      1 => 1352290530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '731223950509a5570a06d32-95291543',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'title' => 0,
    'description' => 0,
    'background_images' => 0,
    'background_image' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a5570a5b580_69655396',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a5570a5b580_69655396')) {function content_509a5570a5b580_69655396($_smarty_tpl) {?><label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
<select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
	<option value="">None</option>
	<?php  $_smarty_tpl->tpl_vars['background_image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['background_image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['background_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['background_image']->key => $_smarty_tpl->tpl_vars['background_image']->value){
$_smarty_tpl->tpl_vars['background_image']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['background_image']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value==$_smarty_tpl->tpl_vars['background_image']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['background_image']->value;?>
</option>
	<?php } ?>
</select><?php }} ?>