<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.navigation.php" */ ?>
<?php /*%%SmartyHeaderCode:1850080378509a4f04609244-67781493%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a0dc2a6bd16c39aa5ae9e867a916c4fad33cc87' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.navigation.php',
      1 => 1352288797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1850080378509a4f04609244-67781493',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'STORE_URL' => 0,
    'NAVIGATION_TREE' => 0,
    'CTRL_CERTIFICATES' => 0,
    'CATALOGUE_MODE' => 0,
    'URL' => 0,
    'CTRL_SALE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f04684500_05569496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f04684500_05569496')) {function content_509a4f04684500_05569496($_smarty_tpl) {?><div>
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['title'];?>
</h3>
  <ul id="menu" class="accordion">
	<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['homepage'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['homepage'];?>
</a></li>

	<?php echo $_smarty_tpl->tpl_vars['NAVIGATION_TREE']->value;?>


	<?php if ($_smarty_tpl->tpl_vars['CTRL_CERTIFICATES']->value&&!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value){?>
	<li class="li-nav"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['certificates'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['giftcerts'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['giftcerts'];?>
</a></li>
	<?php }?>
	<?php if ($_smarty_tpl->tpl_vars['CTRL_SALE']->value){?>
	<li class="li-nav"><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['saleitems'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['saleitems'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['saleitems'];?>
</a></li>
	<?php }?>
  </ul>
</div><?php }} ?>