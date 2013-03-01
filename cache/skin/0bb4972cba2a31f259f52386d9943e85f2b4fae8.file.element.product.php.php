<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:21
         compiled from "skins/vector/templates/element.product.php" */ ?>
<?php /*%%SmartyHeaderCode:148763809550aa051525e4c5-35345228%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bb4972cba2a31f259f52386d9943e85f2b4fae8' => 
    array (
      0 => 'skins/vector/templates/element.product.php',
      1 => 1352290521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '148763809550aa051525e4c5-35345228',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'columns' => 0,
    'iteration' => 0,
    'firstInRow' => 0,
    'product' => 0,
    'span' => 0,
    'lastInRow' => 0,
    'VAL_SELF' => 0,
    'GLOBALS' => 0,
    'skinData' => 0,
    'height' => 0,
    'i' => 0,
    'STORE_URL' => 0,
    'SKIN_FOLDER' => 0,
    'CATALOGUE_MODE' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa05154a2447_84445025',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa05154a2447_84445025')) {function content_50aa05154a2447_84445025($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['span'] = new Smarty_variable(floor(12/(int)$_smarty_tpl->tpl_vars['columns']->value), null, 0);?>
<?php $_smarty_tpl->tpl_vars['firstInRow'] = new Smarty_variable(($_smarty_tpl->tpl_vars['iteration']->value-1)%$_smarty_tpl->tpl_vars['columns']->value==0 ? "firstInRow" : '', null, 0);?>
<?php $_smarty_tpl->tpl_vars['lastInRow'] = new Smarty_variable($_smarty_tpl->tpl_vars['iteration']->value%$_smarty_tpl->tpl_vars['columns']->value==0 ? "lastInRow" : '', null, 0);?>
<?php if ($_smarty_tpl->tpl_vars['firstInRow']->value){?><div class="products-row"><?php }?>
<div id="product-<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
" class="span<?php echo $_smarty_tpl->tpl_vars['span']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['firstInRow']->value;?>
 <?php echo $_smarty_tpl->tpl_vars['lastInRow']->value;?>
 product">
	<div class="wrapper">
		<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="application/x-www-form-urlencoded" class="ajax">
			<input type="hidden" name="add[<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
][quantity]" value="1" class="quantity" />
			<div class="product-image">
				<?php $_smarty_tpl->tpl_vars['skinData'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBALS']->value['gui']->getSkinData(), null, 0);?>
				<?php $_smarty_tpl->tpl_vars['height'] = new Smarty_variable($_smarty_tpl->tpl_vars['skinData']->value['images']['small']['maximum'], null, 0);?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['height']->value){?>style="height: <?php echo $_smarty_tpl->tpl_vars['height']->value;?>
px; line-height: <?php echo $_smarty_tpl->tpl_vars['height']->value;?>
px;"<?php }?>>
  					<img src="<?php if ($_smarty_tpl->tpl_vars['product']->value['small']){?><?php echo $_smarty_tpl->tpl_vars['product']->value['small'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
				</a>
			</div><!-- /.product-image -->
			<div class="product-details">
				<div class="product-title">
					<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
</a>
				</div>
				<?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['product']->value['description_short'];?>
<?php $_tmp1=ob_get_clean();?><?php if (strlen($_tmp1)){?>
					<div class="product-description">
						<?php echo strip_tags($_smarty_tpl->tpl_vars['product']->value['description_short']);?>

					</div>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['product']->value['review_score']){?>
					<div class="product-rating">
						<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=5){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=5; $_smarty_tpl->tpl_vars['i']->value++){
?>
							<?php if ($_smarty_tpl->tpl_vars['product']->value['review_score']>=$_smarty_tpl->tpl_vars['i']->value||($_smarty_tpl->tpl_vars['product']->value['review_score']>($_smarty_tpl->tpl_vars['i']->value-1)&&$_smarty_tpl->tpl_vars['product']->value['review_score']<$_smarty_tpl->tpl_vars['i']->value)){?>
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
				<?php if (!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value){?>
					<div class="product-price">
						<?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_sale']){?><?php echo $_smarty_tpl->tpl_vars['product']->value['sale_price'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
<?php }?>
					</div>
				<?php }?>
			</div><!-- /.product-details -->
			<?php if (!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value){?>
				<div class="product-actions">
					<?php if (($_smarty_tpl->tpl_vars['product']->value['ctrl_stock']||$_smarty_tpl->tpl_vars['product']->value['ctrl_purchase'])&&!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value){?>
						<a href="#submit" class="btn btn-small btn-primary" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
">
							<i class="icon-shopping-cart icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>

						</a>
					<?php }elseif(!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value&&$_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short']){?>
						<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="btn btn-small btn-danger">
							<i class="icon-shopping-cart icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short'];?>

						</a>
					<?php }?>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_sale']){?>
				<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" class="sale-badge"><span class="saving"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['saving'];?>
</span><span class="value"><?php echo round(100*($_smarty_tpl->tpl_vars['product']->value['price_unformatted']-$_smarty_tpl->tpl_vars['product']->value['sale_price_unformatted'])/$_smarty_tpl->tpl_vars['product']->value['price_unformatted']);?>
</span><span class="percentage">%</span></a>
			<?php }?>
		</form>
	</div><!-- /.wrapper -->
</div><!-- /.product -->
<?php if ($_smarty_tpl->tpl_vars['lastInRow']->value){?></div><?php }?><?php }} ?>