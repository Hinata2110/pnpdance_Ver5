<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.popular.php" */ ?>
<?php /*%%SmartyHeaderCode:62302949450aa051e0e40f5-10656446%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b80579ce1b1e663a7eebba87f22ab16dc3c08918' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.popular.php',
      1 => 1352290516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '62302949450aa051e0e40f5-10656446',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'POPULAR' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051e120fb7_32471017',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051e120fb7_32471017')) {function content_50aa051e120fb7_32471017($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['POPULAR']->value)&&count($_smarty_tpl->tpl_vars['POPULAR']->value)>0){?>
	<div class="box box-popular">
		<div class="wrapper">
			<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_popular'];?>
</h3>
			<div class="content">
				<nav>
					<ul class="product-list">
				  		<?php  $_smarty_tpl->tpl_vars['product'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['product']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['POPULAR']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['product']->key => $_smarty_tpl->tpl_vars['product']->value){
$_smarty_tpl->tpl_vars['product']->_loop = true;
?>
							<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.product_listing.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array('actions'=>true), 0);?>

						<?php } ?>
					</ul>
				</nav>
			</div><!-- /.content -->
		</div><!-- /.wrapper -->
	</div><!-- /.box -->
<?php }?><?php }} ?>