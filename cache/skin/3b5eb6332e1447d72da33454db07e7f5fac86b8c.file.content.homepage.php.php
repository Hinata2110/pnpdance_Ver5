<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:21
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/content.homepage.php" */ ?>
<?php /*%%SmartyHeaderCode:200767130850aa0515164268-97272674%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3b5eb6332e1447d72da33454db07e7f5fac86b8c' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/content.homepage.php',
      1 => 1352460716,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200767130850aa0515164268-97272674',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DOCUMENT' => 0,
    'fusion' => 0,
    'LATEST_PRODUCTS' => 0,
    'SKIN_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051523a169_48380713',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051523a169_48380713')) {function content_50aa051523a169_48380713($_smarty_tpl) {?><h1><?php echo $_smarty_tpl->tpl_vars['DOCUMENT']->value['title'];?>
</h1>
  <?php echo $_smarty_tpl->tpl_vars['DOCUMENT']->value['content'];?>

<!-- Latest Products Listings -->
<div class="row-fluid">
	<div class="products latest-products" data-columns="<?php echo $_smarty_tpl->tpl_vars['fusion']->value->get('latest_product_listings_grid_columns');?>
">
		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LATEST_PRODUCTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['product']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
 $_smarty_tpl->tpl_vars['product']->iteration++;
?>
			<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.product.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('iteration'=>($_smarty_tpl->tpl_vars['product']->iteration),'columns'=>($_smarty_tpl->tpl_vars['fusion']->value->get('latest_products_per_row'))), 0);?>

		<?php } ?>
	</div>
</div><?php }} ?>