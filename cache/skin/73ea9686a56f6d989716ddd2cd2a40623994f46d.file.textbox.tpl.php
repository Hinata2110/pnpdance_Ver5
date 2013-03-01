<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:55
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/textbox/textbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1056327391509a556fbb93f5-81804160%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '73ea9686a56f6d989716ddd2cd2a40623994f46d' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/textbox/textbox.tpl',
      1 => 1352290525,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1056327391509a556fbb93f5-81804160',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'title' => 0,
    'value' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a556fc54fb7_06573048',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a556fc54fb7_06573048')) {function content_509a556fc54fb7_06573048($_smarty_tpl) {?><label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
<input id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="text" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" /><?php }} ?>