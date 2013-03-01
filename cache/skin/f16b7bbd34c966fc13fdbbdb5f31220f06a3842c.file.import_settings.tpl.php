<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:56
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/import_settings/import_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1438725421509a5570ade917-63063271%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f16b7bbd34c966fc13fdbbdb5f31220f06a3842c' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/import_settings/import_settings.tpl',
      1 => 1352290529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1438725421509a5570ade917-63063271',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'title' => 0,
    'description' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a5570b4d0e1_18591034',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a5570b4d0e1_18591034')) {function content_509a5570b4d0e1_18591034($_smarty_tpl) {?><label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
<input id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="file" title="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" /><?php }} ?>