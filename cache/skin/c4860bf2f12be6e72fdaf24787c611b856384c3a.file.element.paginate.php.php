<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:46:02
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/element.paginate.php" */ ?>
<?php /*%%SmartyHeaderCode:2030336312509a580a605b96-92063015%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c4860bf2f12be6e72fdaf24787c611b856384c3a' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/element.paginate.php',
      1 => 1352290521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2030336312509a580a605b96-92063015',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'page' => 0,
    'show' => 0,
    'var_name' => 0,
    'current' => 0,
    'params' => 0,
    'anchor' => 0,
    'i' => 0,
    'total' => 0,
    'view_all' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a580a8dbaf2_64313943',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a580a8dbaf2_64313943')) {function content_509a580a8dbaf2_64313943($_smarty_tpl) {?><ul class="pagination">
	<?php if (($_smarty_tpl->tpl_vars['page']->value>=$_smarty_tpl->tpl_vars['show']->value-1)){?>
		<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value] = 1;?>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
" class="first" data-page="1" rel="first">1</a></li>
		<li class="disabled"><a href="#">&hellip;</a></li>
	<?php }?>

	<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['total']->value){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['total']->value; $_smarty_tpl->tpl_vars['i']->value++){
?>
		<?php if (($_smarty_tpl->tpl_vars['i']->value<$_smarty_tpl->tpl_vars['page']->value-floor($_smarty_tpl->tpl_vars['show']->value/2))){?>
			<?php continue 1?>
		<?php }?>

		<?php if (($_smarty_tpl->tpl_vars['i']->value>$_smarty_tpl->tpl_vars['page']->value+floor($_smarty_tpl->tpl_vars['show']->value/2))){?>
			<?php break 1?>
		<?php }?>

		<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value] = $_smarty_tpl->tpl_vars['i']->value;?>
		<?php if (($_smarty_tpl->tpl_vars['i']->value==$_smarty_tpl->tpl_vars['page']->value)){?>
			<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
		<?php }else{ ?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
" data-page="<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['i']->value;?>
</a></li>
		<?php }?>
	<?php }} ?>

	<?php if (($_smarty_tpl->tpl_vars['i']->value<=$_smarty_tpl->tpl_vars['total']->value)){?>
		<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value] = $_smarty_tpl->tpl_vars['total']->value;?>
		<li class="disabled"><a href="#">&hellip;</a></li>
		<li><a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
" class="last" data-page="<?php echo $_smarty_tpl->tpl_vars['total']->value;?>
" rel="last"><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
</a></li>
	<?php }?>

	<?php if (($_smarty_tpl->tpl_vars['view_all']->value)){?>
		<?php if ((strtolower($_smarty_tpl->tpl_vars['page']->value)!='all')){?>
			<?php $_smarty_tpl->createLocalArrayVariable('params', null, 0);
$_smarty_tpl->tpl_vars['params']->value[$_smarty_tpl->tpl_vars['var_name']->value] = 'all';?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
" class="view-all" rel="all"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['view_all'];?>
</a></li>
		<?php }else{ ?>
			<li class="active"><a href="<?php echo $_smarty_tpl->tpl_vars['current']->value;?>
<?php echo http_build_query($_smarty_tpl->tpl_vars['params']->value);?>
<?php echo $_smarty_tpl->tpl_vars['anchor']->value;?>
" class="view-all" rel="all"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['view_all'];?>
</a></li>
		<?php }?>
	<?php }?>
</ul><?php }} ?>