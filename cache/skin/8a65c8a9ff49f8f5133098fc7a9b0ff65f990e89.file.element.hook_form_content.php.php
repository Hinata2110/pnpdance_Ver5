<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:08:30
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/admin/skins/default/templates/element.hook_form_content.php" */ ?>
<?php /*%%SmartyHeaderCode:1823788124509a4f3e4a3fb4-63078090%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a65c8a9ff49f8f5133098fc7a9b0ff65f990e89' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/admin/skins/default/templates/element.hook_form_content.php',
      1 => 1352288030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1823788124509a4f3e4a3fb4-63078090',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HOOK_TAB_CONTENT' => 0,
    'tabfile' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f3e4fd326_75371563',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f3e4fd326_75371563')) {function content_509a4f3e4fd326_75371563($_smarty_tpl) {?><!-- Bring in Tab Content for plugin hooks. -->
<?php if ($_smarty_tpl->tpl_vars['HOOK_TAB_CONTENT']->value){?>
  <?php  $_smarty_tpl->tpl_vars['tabfile'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tabfile']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HOOK_TAB_CONTENT']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tabfile']->key => $_smarty_tpl->tpl_vars['tabfile']->value){
$_smarty_tpl->tpl_vars['tabfile']->_loop = true;
?>
  	  <?php echo $_smarty_tpl->getSubTemplate ($_smarty_tpl->tpl_vars['tabfile']->value, $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  <?php } ?>
<?php }?><?php }} ?>