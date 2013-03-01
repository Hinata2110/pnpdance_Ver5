<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:56
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/color/color.tpl" */ ?>
<?php /*%%SmartyHeaderCode:798577669509a55708cc887-02827157%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '40fa20f53900cee0801f336c68a1110d6105f0e0' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/color/color.tpl',
      1 => 1352290532,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '798577669509a55708cc887-02827157',
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
  'unifunc' => 'content_509a557098f130_15071250',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a557098f130_15071250')) {function content_509a557098f130_15071250($_smarty_tpl) {?><label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
<input id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="text" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="<?php echo $_smarty_tpl->tpl_vars['value']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" class="colorpicker" /><?php }} ?>