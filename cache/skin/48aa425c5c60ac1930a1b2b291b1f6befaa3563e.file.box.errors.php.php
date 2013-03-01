<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "skins/vector/templates/box.errors.php" */ ?>
<?php /*%%SmartyHeaderCode:198722367350aa051ed8c508-44656821%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '48aa425c5c60ac1930a1b2b291b1f6befaa3563e' => 
    array (
      0 => 'skins/vector/templates/box.errors.php',
      1 => 1352290516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '198722367350aa051ed8c508-44656821',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GUI_MESSAGE' => 0,
    'LANG' => 0,
    'error' => 0,
    'notice' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051ee021f5_35472749',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051ee021f5_35472749')) {function content_50aa051ee021f5_35472749($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value)){?>
	<div id="gui-message">
		<?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['error'])){?>
			<div class="alert alert-error">
				<a class="close" data-dismiss="alert">&times;</a>
				<h4 class="alert-heading"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['gui_message']['errors_detected'];?>
</h4>
				<ul>
					<?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value){
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
						<li><?php echo $_smarty_tpl->tpl_vars['error']->value;?>
</li>
					<?php } ?>
				</ul>
			</div>
		<?php }?>

		<?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['notice'])){?>
			<?php  $_smarty_tpl->tpl_vars['notice'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notice']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['notice']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notice']->key => $_smarty_tpl->tpl_vars['notice']->value){
$_smarty_tpl->tpl_vars['notice']->_loop = true;
?>
				<div class="alert alert-info">
					<a class="close" data-dismiss="alert">&times;</a>
					<?php echo $_smarty_tpl->tpl_vars['notice']->value;?>

				</div>
			<?php } ?>
		<?php }?>
	</div>
<?php }?><?php }} ?>