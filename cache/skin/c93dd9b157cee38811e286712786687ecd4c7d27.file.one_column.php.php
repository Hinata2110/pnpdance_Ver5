<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:43:18
         compiled from "skins/vector/templates/layouts/one_column.php" */ ?>
<?php /*%%SmartyHeaderCode:1394539712509a576632d334-00677663%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c93dd9b157cee38811e286712786687ecd4c7d27' => 
    array (
      0 => 'skins/vector/templates/layouts/one_column.php',
      1 => 1352290531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1394539712509a576632d334-00677663',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SKIN_FOLDER' => 0,
    'PAGE_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a5766386b97_71791004',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a5766386b97_71791004')) {function content_509a5766386b97_71791004($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.content_header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row-fluid">
	<div id="widget-content" class="padding">
		<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/box.errors.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<?php echo $_smarty_tpl->tpl_vars['PAGE_CONTENT']->value;?>

	</div>
</div><?php }} ?>