<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.popular.php" */ ?>
<?php /*%%SmartyHeaderCode:196417681509a4f04decbb8-32349609%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '86f9dd66b3f313004ccbbfea3a03132cca4c24ce' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.popular.php',
      1 => 1352288797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '196417681509a4f04decbb8-32349609',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'POPULAR' => 0,
    'product' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f04e34a67_56825701',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f04e34a67_56825701')) {function content_509a4f04e34a67_56825701($_smarty_tpl) {?><div id="popular_products">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_popular'];?>
</h3>
  <ol>
	<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['POPULAR']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a></li>
	<?php } ?>
  </ol>
</div><?php }} ?>