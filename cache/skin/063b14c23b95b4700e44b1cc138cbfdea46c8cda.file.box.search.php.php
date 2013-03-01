<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:22
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.search.php" */ ?>
<?php /*%%SmartyHeaderCode:22315594250aa051606b5f5-03235722%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '063b14c23b95b4700e44b1cc138cbfdea46c8cda' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.search.php',
      1 => 1352290517,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22315594250aa051606b5f5-03235722',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'ROOT_PATH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa0516098158_80919610',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa0516098158_80919610')) {function content_50aa0516098158_80919610($_smarty_tpl) {?><nav class="box box-search">
	<div class="wrapper">
		<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['title_search_products'];?>
</h3>
		<div class="content">
			<form action="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
index.php?_a=category" method="post" class="input-append">
				<input name="search[keywords]" type="text" class="input-fill" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['input_default'];?>
" /><button class="btn" type="button" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['title_search_products'];?>
" onclick="$(this).getForm().submit()"><span class="icon-search"></span></button>
			</form>
		</div>
	</div>
</nav><?php }} ?>