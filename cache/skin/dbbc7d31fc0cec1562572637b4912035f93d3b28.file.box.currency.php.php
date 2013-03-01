<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:21
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.currency.php" */ ?>
<?php /*%%SmartyHeaderCode:100888698550aa05155c77a9-96468748%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbbc7d31fc0cec1562572637b4912035f93d3b28' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.currency.php',
      1 => 1352290516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100888698550aa05155c77a9-96468748',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'CURRENCIES' => 0,
    'currency' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa0515625aa0_65362371',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa0515625aa0_65362371')) {function content_50aa0515625aa0_65362371($_smarty_tpl) {?><div class="regional-currency">
	<form id="currency_select" action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="get" class="input-prepend">
		<span class="add-on"><?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CURRENCIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['currency']->value['selected']){?><?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol_left'];?>
<?php }?><?php }
if (!$_smarty_tpl->tpl_vars['currency']->_loop) {
?><?php echo $_smarty_tpl->tpl_vars['currency']->value['symbol_right'];?>
<?php } ?></span><select name="set_currency" id="currency" class="input-fill chzn-select" onchange="this.form.submit();"><?php  $_smarty_tpl->tpl_vars['currency'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['currency']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CURRENCIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['currency']->key => $_smarty_tpl->tpl_vars['currency']->value){
$_smarty_tpl->tpl_vars['currency']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['currency']->value['code'];?>
" <?php echo $_smarty_tpl->tpl_vars['currency']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['currency']->value['name'];?>
</option><?php } ?></select>
	</form>
</div><?php }} ?>