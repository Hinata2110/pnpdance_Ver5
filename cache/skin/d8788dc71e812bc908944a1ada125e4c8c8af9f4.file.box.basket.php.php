<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:21
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.basket.php" */ ?>
<?php /*%%SmartyHeaderCode:87052307150aa051570ff40-49050016%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd8788dc71e812bc908944a1ada125e4c8c8af9f4' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.basket.php',
      1 => 1352290516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '87052307150aa051570ff40-49050016',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'CONTENTS' => 0,
    'CART_TOTAL' => 0,
    'BUTTON' => 0,
    'STORE_URL' => 0,
    'CART_ITEMS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa0515824276_00990439',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa0515824276_00990439')) {function content_50aa0515824276_00990439($_smarty_tpl) {?><div class="ajax-root">
	<div class="box box-basket" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout']['your_basket'];?>
">
		<div class="wrapper">
			<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout']['your_basket'];?>
</h3>
			<div class="content">
				<?php if (isset($_smarty_tpl->tpl_vars['CONTENTS']->value)&&count($_smarty_tpl->tpl_vars['CONTENTS']->value)>0){?>
					<nav class="basket-products">
						<ul class="product-list">
					  		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CONTENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
								<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.product_listing.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('quantities'=>true), 0);?>

							<?php } ?>
							<li class="basket-total">
								<strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['total'];?>
: </strong>
								<span class="price"><?php echo $_smarty_tpl->tpl_vars['CART_TOTAL']->value;?>
</span>
							</li>
						</ul>
					</nav>
					<div class="basket-actions">
						<a href="<?php echo $_smarty_tpl->tpl_vars['BUTTON']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['BUTTON']->value['text'];?>
" class="btn"><?php echo $_smarty_tpl->tpl_vars['BUTTON']->value['text'];?>
</a>
						<a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
?_a=confirm" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_checkout'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_checkout'];?>
 <i class="icon-circle-arrow-right icon-white"></i></a>
					</div>
				<?php }else{ ?>
					<div class="alert alert-info">
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_is_empty'];?>

					</div>
				<?php }?>
			</div><!-- /.content -->
		</div><!-- /.wrapper -->
	</div><!-- /.box -->

	<!-- Widget Cart -->
	<?php if ($_GET['_g']=='ajaxadd'){?>
		<a id="widget-cart" href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
?_a=basket" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_checkout'];?>
"><i class="icon-shopping-cart icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout']['your_basket'];?>
 (<?php echo $_smarty_tpl->tpl_vars['CART_ITEMS']->value;?>
)</a>
	<?php }?>
	
	<!-- Success Notification -->
	<?php if ($_GET['_g']=='ajaxadd'){?>
		<div id="widget-notification">
			<div class="basket-count"><?php echo $_smarty_tpl->tpl_vars['CART_ITEMS']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_item_count'];?>
</div>
			<a href="<?php echo $_smarty_tpl->tpl_vars['BUTTON']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['BUTTON']->value['text'];?>
" class="btn btn-primary"><?php echo $_smarty_tpl->tpl_vars['BUTTON']->value['text'];?>
</a>
			<a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
?_a=confirm" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_checkout'];?>
" class="btn btn-danger"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_checkout'];?>
 <i class="icon-circle-arrow-right icon-white"></i></a>
		</div>
	<?php }?>
</div><?php }} ?>