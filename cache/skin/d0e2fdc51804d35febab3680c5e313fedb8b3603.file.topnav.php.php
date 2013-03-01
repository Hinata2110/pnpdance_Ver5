<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "skins/vector/templates/widgets/topnav.php" */ ?>
<?php /*%%SmartyHeaderCode:170570903950aa051e729f95-40507984%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd0e2fdc51804d35febab3680c5e313fedb8b3603' => 
    array (
      0 => 'skins/vector/templates/widgets/topnav.php',
      1 => 1352474976,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '170570903950aa051e729f95-40507984',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IS_USER' => 0,
    'STORE_URL' => 0,
    'LANG' => 0,
    'CART_ITEMS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051e7d6f41_07775641',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051e7d6f41_07775641')) {function content_50aa051e7d6f41_07775641($_smarty_tpl) {?><nav>
	<ul>
		<?php if ($_smarty_tpl->tpl_vars['IS_USER']->value){?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=profile" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
"><i class="icon-user icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=logout" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
"><i class="icon-off icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
</a></li>
		<?php }else{ ?>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=register" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
 / <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
"><i class="icon-user icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
 / <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
</a></li>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=vieworder" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['lookup_order'];?>
"><i class="icon-road icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['lookup_order'];?>
</a></li>
		<?php }?>
		<li>
			<a id="widget-cart" href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
?_a=basket" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_checkout'];?>
"><i class="icon-shopping-cart icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout']['your_basket'];?>
 (<?php echo $_smarty_tpl->tpl_vars['CART_ITEMS']->value;?>
)</a><!-- /#widget-cart -->
		</li>
	</ul>
</nav><?php }} ?>