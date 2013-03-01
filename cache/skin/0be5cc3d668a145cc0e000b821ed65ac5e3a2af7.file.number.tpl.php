<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:56
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/number/number.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1298834106509a55707dc331-45085101%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0be5cc3d668a145cc0e000b821ed65ac5e3a2af7' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/number/number.tpl',
      1 => 1352290528,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1298834106509a55707dc331-45085101',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'title' => 0,
    'value' => 0,
    'min' => 0,
    'max' => 0,
    'step' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a557081e277_41455734',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a557081e277_41455734')) {function content_509a557081e277_41455734($_smarty_tpl) {?><label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
	<input id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="number" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" min="<?php echo $_smarty_tpl->tpl_vars['min']->value;?>
" max="<?php echo $_smarty_tpl->tpl_vars['max']->value;?>
" step="<?php echo $_smarty_tpl->tpl_vars['step']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" /><?php }} ?>