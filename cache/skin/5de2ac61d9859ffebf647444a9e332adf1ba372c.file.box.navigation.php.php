<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:21
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.navigation.php" */ ?>
<?php /*%%SmartyHeaderCode:180495848250aa0515f05d26-03368531%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5de2ac61d9859ffebf647444a9e332adf1ba372c' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.navigation.php',
      1 => 1352290516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '180495848250aa0515f05d26-03368531',
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
  'unifunc' => 'content_50aa0516043968_81051541',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa0516043968_81051541')) {function content_50aa0516043968_81051541($_smarty_tpl) {?><div class="box box-navgation box-categories">
	<div class="wrapper">
		<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['title'];?>
</h3>
		<div class="content">
			<nav>
				<ul class="nav nav-list">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['home'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['home'];?>
</a></li>

					<?php echo $_smarty_tpl->tpl_vars['NAVIGATION_TREE']->value;?>

		
					<?php if ($_smarty_tpl->tpl_vars['CTRL_CERTIFICATES']->value&&!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value){?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['certificates'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['giftcerts'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['giftcerts'];?>
</a></li>
					<?php }?>
					
					<?php if ($_smarty_tpl->tpl_vars['CTRL_SALE']->value){?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['saleitems'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['saleitems'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navigation']['saleitems'];?>
</a></li>
					<?php }?>
				</ul>
			</nav>
		</div><!-- /.content -->
	</div><!-- /.wrapper -->
</div><!-- /.box --><?php }} ?>