<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:22
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.featured.php" */ ?>
<?php /*%%SmartyHeaderCode:100843501650aa051676c180-30687059%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1281206a1a4bfd96d5815161c6e0f4db7fe5575d' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.featured.php',
      1 => 1352290516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '100843501650aa051676c180-30687059',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'VAL_SELF' => 0,
    'featured' => 0,
    'i' => 0,
    'STORE_URL' => 0,
    'SKIN_FOLDER' => 0,
    'CATALOGUE_MODE' => 0,
    'fusion' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa05168d00d9_67891301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa05168d00d9_67891301')) {function content_50aa05168d00d9_67891301($_smarty_tpl) {?><div class="box box-featured">
	<div class="wrapper">
		<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_feature'];?>
</h3>
		<div class="product">
			<div class="wrapper">
				<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="application/x-www-form-urlencoded" class="ajax">
					<input type="hidden" name="add[<?php echo $_smarty_tpl->tpl_vars['featured']->value['product_id'];?>
][quantity]" value="1" class="quantity" />
					<div class="product-image">
						<a href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
">
		  					<img src="<?php echo $_smarty_tpl->tpl_vars['featured']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
" />
						</a>
					</div><!-- /.product-image -->
					<div class="product-details">
						<div class="product-title">
							<a href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
</a>
						</div>
						<?php if ($_smarty_tpl->tpl_vars['featured']->value['review_score']){?>
							<div class="product-rating">
								<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=5){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=5; $_smarty_tpl->tpl_vars['i']->value++){
?>
									<?php if ($_smarty_tpl->tpl_vars['featured']->value['review_score']>=$_smarty_tpl->tpl_vars['i']->value||($_smarty_tpl->tpl_vars['featured']->value['review_score']>($_smarty_tpl->tpl_vars['i']->value-1)&&$_smarty_tpl->tpl_vars['featured']->value['review_score']<$_smarty_tpl->tpl_vars['i']->value)){?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/img/star-on.png" alt="" />
									<?php }else{ ?>
										<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/img/star-off.png" alt="" />
									<?php }?>
								<?php }} ?>
							</div>
						<?php }?>
						<?php if (!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value&&isset($_smarty_tpl->tpl_vars['fusion']->value)&&$_smarty_tpl->tpl_vars['fusion']->value->get("featured_product_add_to_cart")){?>
							<div class="product-price">
								<?php if ($_smarty_tpl->tpl_vars['featured']->value['ctrl_sale']){?><?php echo $_smarty_tpl->tpl_vars['featured']->value['sale_price'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['featured']->value['price'];?>
<?php }?>
							</div>
			  				<div class="product-actions">
								<?php if ($_smarty_tpl->tpl_vars['featured']->value['ctrl_stock']||$_smarty_tpl->tpl_vars['featured']->value['ctrl_purchase']){?>
									<a href="#submit" class="btn btn-small btn-primary" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
">
										<i class="icon-shopping-cart icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>

									</a>
								<?php }elseif($_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short']){?>
									<span class="btn btn-small btn-danger btn-disabled">
										<i class="icon-shopping-cart icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short'];?>

									</span>
								<?php }?>
			  				</div>
						<?php }?>
					</div><!-- /.product-details -->
					<?php if ($_smarty_tpl->tpl_vars['featured']->value['ctrl_sale']){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" class="sale-badge"><span class="saving"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['saving'];?>
</span><span class="value"><?php echo round(100*($_smarty_tpl->tpl_vars['featured']->value['price_unformatted']-$_smarty_tpl->tpl_vars['featured']->value['sale_price_unformatted'])/$_smarty_tpl->tpl_vars['featured']->value['price_unformatted']);?>
</span><span class="percentage">%</span></a>
					<?php }?>
				</form>
			</div><!-- /.wrapper -->
		</div><!-- /.product -->
	</div><!-- /.wrapper -->
</div><!-- /.box .box-featured --><?php }} ?>