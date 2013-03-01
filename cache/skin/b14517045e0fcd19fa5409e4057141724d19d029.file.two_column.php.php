<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "skins/vector/templates/layouts/two_column.php" */ ?>
<?php /*%%SmartyHeaderCode:189879119050aa051e8fa2d0-68515568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b14517045e0fcd19fa5409e4057141724d19d029' => 
    array (
      0 => 'skins/vector/templates/layouts/two_column.php',
      1 => 1352290531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '189879119050aa051e8fa2d0-68515568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'layout' => 0,
    'SKIN_FOLDER' => 0,
    'widget' => 0,
    '(mb_strtoupper($_smarty_tpl->tpl_vars[\'widget\']->value, \'UTF-8\'))' => 0,
    'PAGE_CONTENT' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051e9a1c35_35203294',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051e9a1c35_35203294')) {function content_50aa051e9a1c35_35203294($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.content_header.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>


<div class="row-fluid">
	<div class="span4">
		<aside id="widget-sidebar-left" class="sidebar">
			<?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['layout']->value['regions']['sidebar_left']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>
				<?php if (file_exists("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/".($_smarty_tpl->tpl_vars['widget']->value).".php")){?>
					<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/".($_smarty_tpl->tpl_vars['widget']->value).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }elseif(file_exists("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/global/".($_smarty_tpl->tpl_vars['widget']->value).".php")){?>
					<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/widgets/global/".($_smarty_tpl->tpl_vars['widget']->value).".php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				<?php }else{ ?>
					<?php echo $_smarty_tpl->tpl_vars[(mb_strtoupper($_smarty_tpl->tpl_vars['widget']->value, 'UTF-8'))]->value;?>

				<?php }?>
			<?php } ?>
		</aside>
	</div>
	<div class="span8">
		<div id="widget-content">
			<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/box.errors.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			<?php echo $_smarty_tpl->tpl_vars['PAGE_CONTENT']->value;?>

		</div>
	</div>
</div><?php }} ?>