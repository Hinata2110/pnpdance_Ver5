<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.currency.php" */ ?>
<?php /*%%SmartyHeaderCode:1669968894509a4f04281f39-97795278%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5874a7fd75debad42128f5d5dca56b5a916c46af' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.currency.php',
      1 => 1352288797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1669968894509a4f04281f39-97795278',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'CURRENCIES' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f0430e591_28078818',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f0430e591_28078818')) {function content_509a4f0430e591_28078818($_smarty_tpl) {?><div id="currency_select">
  <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['change_currency'];?>
:
  <?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CURRENCIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?>
	<a href="<?php echo $_smarty_tpl->tpl_vars['currency']->value['url'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['currency']->value['css'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
</a>
  <?php } ?>
  </p>
</div><?php }} ?>