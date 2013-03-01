<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:21
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.session.php" */ ?>
<?php /*%%SmartyHeaderCode:121015515950aa051564f947-76723986%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a1ce14b73114a27b8a43bc4ffc0748e6df92b1a' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.session.php',
      1 => 1352290517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '121015515950aa051564f947-76723986',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'IS_USER' => 0,
    'STORE_URL' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa05156f9c88_81372688',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa05156f9c88_81372688')) {function content_50aa05156f9c88_81372688($_smarty_tpl) {?><div class="box box-session">
	<div class="wrapper">
		<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
</h3>
		<div class="content">
			<nav>
				<ul class="nav nav-list">
					<?php if ($_smarty_tpl->tpl_vars['IS_USER']->value){?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=profile" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
"><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=vieworder" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_orders'];?>
"><i class="icon-book"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_orders'];?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=logout" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
"><i class="icon-off"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
</a></li>
					<?php }else{ ?>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['register'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
 / <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
"><i class="icon-user"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
 / <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
</a></li>
						<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=vieworder" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['lookup_order'];?>
"><i class="icon-road"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['lookup_order'];?>
</a></li>
					<?php }?>
				</ul>
			</nav>
		</div><!-- /.content -->
	</div><!-- /.wrapper -->
</div><!-- /.box --><?php }} ?>