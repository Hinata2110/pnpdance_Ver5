<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "skins/vector/templates/element.product_listing.php" */ ?>
<?php /*%%SmartyHeaderCode:147816204850aa051e175507-37573642%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '438f23762eb47a34dfb206bbd5fb94b18074222e' => 
    array (
      0 => 'skins/vector/templates/element.product_listing.php',
      1 => 1352290521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '147816204850aa051e175507-37573642',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'product' => 0,
    'item' => 0,
    'quantities' => 0,
    'actions' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051e23db38_69466730',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051e23db38_69466730')) {function content_50aa051e23db38_69466730($_smarty_tpl) {?><li>
	<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="application/x-www-form-urlencoded" class="ajax">
		<input type="hidden" name="add[<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
][quantity]" value="1" class="quantity" />
		<?php if ($_smarty_tpl->tpl_vars['product']->value['thumbnail']||$_smarty_tpl->tpl_vars['product']->value['image']){?>
			<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="product-image">
				<img src="<?php if ($_smarty_tpl->tpl_vars['product']->value['thumbnail']){?><?php echo $_smarty_tpl->tpl_vars['product']->value['thumbnail'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
<?php }?>" alt="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
" />
			</a>
		<?php }?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="product-title">
			<?php if ($_smarty_tpl->tpl_vars['quantities']->value&&$_smarty_tpl->tpl_vars['product']->value['quantity']){?><?php echo $_smarty_tpl->tpl_vars['product']->value['quantity'];?>
 &times; <?php }?><?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>

		</a><br />
		<span class="product-price">&rarr; <?php if ($_smarty_tpl->tpl_vars['product']->value['total']){?><?php echo $_smarty_tpl->tpl_vars['product']->value['total'];?>
<?php }elseif($_smarty_tpl->tpl_vars['product']->value['ctrl_sale']){?><?php echo $_smarty_tpl->tpl_vars['product']->value['sale_price'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
<?php }?></span><br />
		<?php if ($_smarty_tpl->tpl_vars['actions']->value){?>
			<div class="product-actions">
				<a href="#submit" class="btn btn-primary btn-mini" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
"><i class="icon-shopping-cart icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
</a>
			</div>
		<?php }?>
	</form>
</li><?php }} ?>