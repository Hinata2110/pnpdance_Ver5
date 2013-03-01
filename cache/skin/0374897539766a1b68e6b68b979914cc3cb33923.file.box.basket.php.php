<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.basket.php" */ ?>
<?php /*%%SmartyHeaderCode:342291802509a4f04432be4-12884033%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0374897539766a1b68e6b68b979914cc3cb33923' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.basket.php',
      1 => 1352288797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '342291802509a4f04432be4-12884033',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'CONTENTS' => 0,
    'item' => 0,
    'CART_ITEMS' => 0,
    'CART_TOTAL' => 0,
    'BUTTON' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f044f7a23_00042673',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f044f7a23_00042673')) {function content_509a4f044f7a23_00042673($_smarty_tpl) {?><div id="basket_summary">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout']['your_basket'];?>
</h3>
  <?php if (isset($_smarty_tpl->tpl_vars['CONTENTS']->value)&&count($_smarty_tpl->tpl_vars['CONTENTS']->value)>0){?>
  <ul>
  	<?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CONTENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value){
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
	<li>
	  <span class="price"><?php echo $_smarty_tpl->tpl_vars['item']->value['total'];?>
</span>
	  <a href="<?php echo $_smarty_tpl->tpl_vars['item']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['quantity'];?>
 &times; <?php echo $_smarty_tpl->tpl_vars['item']->value['name_abbrev'];?>
</a>
	</li>
	<?php } ?>
  </ul>
  <p class="basket_items">
	<span class="price"><?php echo $_smarty_tpl->tpl_vars['CART_ITEMS']->value;?>
</span>
	<?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_item_count'];?>

  </p>
  <p class="basket_total">
	<span class="price"><?php echo $_smarty_tpl->tpl_vars['CART_TOTAL']->value;?>
</span>
	<strong><?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['total'];?>
</strong>
  </p>
  <p class="view_basket animate_basket"><a href="<?php echo $_smarty_tpl->tpl_vars['BUTTON']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['BUTTON']->value['text'];?>
"><?php echo $_smarty_tpl->tpl_vars['BUTTON']->value['text'];?>
</a></p>
  <?php }else{ ?>
  <p style="text-align: center;"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['basket']['basket_is_empty'];?>
</p>
  <?php }?>
</div><?php }} ?>