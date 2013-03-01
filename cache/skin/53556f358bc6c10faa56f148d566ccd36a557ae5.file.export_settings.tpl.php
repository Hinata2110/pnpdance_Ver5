<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:56
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/export_settings/export_settings.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1487660889509a5570ba8aa0-07557718%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '53556f358bc6c10faa56f148d566ccd36a557ae5' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/export_settings/export_settings.tpl',
      1 => 1352290531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1487660889509a5570ba8aa0-07557718',
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
  'unifunc' => 'content_509a5570c2a7b6_51167410',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a5570c2a7b6_51167410')) {function content_509a5570c2a7b6_51167410($_smarty_tpl) {?><label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
<input type="submit" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="Export" class="button" title="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" /><?php }} ?>