<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:31
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/content.homepage.php" */ ?>
<?php /*%%SmartyHeaderCode:1543388345509a4f03da5475-22036140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a97bbb0e61de76dcea846a78c8ff3f44d134b5b2' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/content.homepage.php',
      1 => 1352288798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1543388345509a4f03da5475-22036140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DOCUMENT' => 0,
    'LATEST_PRODUCTS' => 0,
    'LANG' => 0,
    'VAL_SELF' => 0,
    'product' => 0,
    'CATALOGUE_MODE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f040c7285_21876022',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f040c7285_21876022')) {function content_509a4f040c7285_21876022($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_truncate')) include '/hermes/bosweb26a/b1803/ipg.pnpdancecom/includes/lib/smarty/plugins/modifier.truncate.php';
?><?php if (isset($_smarty_tpl->tpl_vars['DOCUMENT']->value)){?>
<div id="announcement">
  <h1><?php echo $_smarty_tpl->tpl_vars['DOCUMENT']->value['title'];?>
</h1>
  <?php echo $_smarty_tpl->tpl_vars['DOCUMENT']->value['content'];?>

</div>
<?php }?>

<?php if (isset($_smarty_tpl->tpl_vars['LATEST_PRODUCTS']->value)){?>
<div>
  <h2><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['latest_products'];?>
</h2>
  <?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LATEST_PRODUCTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
  <div class="latest_product">
	<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" class="addForm">
	  <p class="image">
		<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
">
		  <img src="<?php echo $_smarty_tpl->tpl_vars['product']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" />
		</a>
	  </p>
	  <p class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
"><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value['name'],38,"&hellip;");?>
</a></p>
	  <?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_sale']){?>
	  <p class="price"><span class="price_previous"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</span> <span class="price_sale"><?php echo $_smarty_tpl->tpl_vars['product']->value['sale_price'];?>
</span></p>
	  <?php }else{ ?>
	  <p class="price"><?php echo $_smarty_tpl->tpl_vars['product']->value['price'];?>
</p>
	  <?php }?>
	  <p class="actions">
		<a href="<?php echo $_smarty_tpl->tpl_vars['product']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['product']->value['name'];?>
" class="button_black"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['info'];?>
</a>
		<input type="hidden" name="add" value="<?php echo $_smarty_tpl->tpl_vars['product']->value['product_id'];?>
" />
		<?php if ($_smarty_tpl->tpl_vars['product']->value['ctrl_stock']&&!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value){?>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
" class="button_white" />
		<?php }elseif(!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value){?>
		<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short'];?>
" class="button_white disabled" disabled="disabled" />
		<?php }?>
	  </p>
	  	</form>
  </div>
  <?php } ?>
</div>
<?php }?><?php }} ?>