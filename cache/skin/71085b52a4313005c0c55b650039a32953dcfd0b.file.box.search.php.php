<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.search.php" */ ?>
<?php /*%%SmartyHeaderCode:1589947035509a4f04697f47-66816615%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '71085b52a4313005c0c55b650039a32953dcfd0b' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.search.php',
      1 => 1352288798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1589947035509a4f04697f47-66816615',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ROOT_PATH' => 0,
    'LANG' => 0,
    'SEARCH_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f046e7893_46523340',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f046e7893_46523340')) {function content_509a4f046e7893_46523340($_smarty_tpl) {?><div id="quick_search">
  <form action="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
index.php" method="get">
	<span class="search"><input name="search[keywords]" type="text" id="keywords" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['input_default'];?>
" size="18" /></span>
	<input type="hidden" name="_a" value="category" />
	<input class="search" type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['search'];?>
" />
	<p class="advanced"><a href="<?php echo $_smarty_tpl->tpl_vars['SEARCH_URL']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['advanced'];?>
</a></p>
	  </form>
</div><?php }} ?>