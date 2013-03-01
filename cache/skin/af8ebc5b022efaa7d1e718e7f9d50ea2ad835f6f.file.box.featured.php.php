<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.featured.php" */ ?>
<?php /*%%SmartyHeaderCode:1421612654509a4f04c20c42-76006094%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'af8ebc5b022efaa7d1e718e7f9d50ea2ad835f6f' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.featured.php',
      1 => 1352288797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1421612654509a4f04c20c42-76006094',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'featured' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f04c94d33_58626051',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f04c94d33_58626051')) {function content_509a4f04c94d33_58626051($_smarty_tpl) {?><div id="featured_product">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['title_feature'];?>
</h3>
  <p class="image">
	<a href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
">
	  <img src="<?php echo $_smarty_tpl->tpl_vars['featured']->value['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
" />
	</a>
  </p>
  <p class="title"><a href="<?php echo $_smarty_tpl->tpl_vars['featured']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['featured']->value['name'];?>
</a></p>
</div><?php }} ?>