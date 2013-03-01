<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:46:02
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/content.category.php" */ ?>
<?php /*%%SmartyHeaderCode:1984255674509a580aabb385-30859665%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '455963052f4c4bb84ada3e8c9a820d8b32a9f9cd' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/content.category.php',
      1 => 1352290517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1984255674509a580aabb385-30859665',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'category' => 0,
    'PRODUCTS' => 0,
    'fusion' => 0,
    'SKIN_FOLDER' => 0,
    'PAGINATION' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a580ab96747_81690314',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a580ab96747_81690314')) {function content_509a580ab96747_81690314($_smarty_tpl) {?><!-- Category Description -->
<?php if ($_smarty_tpl->tpl_vars['category']->value['cat_desc']){?>
	<div class="category-description">
		<blockquote>
			<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_desc'];?>

		</blockquote>
	</div>
<?php }?>

<!-- Category Products Listings -->
<div class="row-fluid padding-r">
	<?php if (isset($_smarty_tpl->tpl_vars['PRODUCTS']->value)&&isset($_smarty_tpl->tpl_vars['fusion']->value)){?>
		<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.control.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="products category-products" data-columns="<?php echo $_smarty_tpl->tpl_vars['fusion']->value->get('category_product_listings_grid_columns');?>
">
			<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRODUCTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
?>
				<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.product.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('iteration'=>($_smarty_tpl->tpl_vars['product']->iteration),'columns'=>($_smarty_tpl->tpl_vars['fusion']->value->get('category_products_per_row'))), 0);?>

			<?php } ?>
		</div>
		<?php if (isset($_smarty_tpl->tpl_vars['PAGINATION']->value)){?>
			<nav class="products-pagination"><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
</nav>
		<?php }?>
	<?php }else{ ?>
		<p class="alert">
			<?php echo $_smarty_tpl->tpl_vars['LANG']->value['category']['no_products'];?>

		</p>
	<?php }?>
</div><?php }} ?>