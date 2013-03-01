<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:33
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.errors.php" */ ?>
<?php /*%%SmartyHeaderCode:43836970509a4f0520d1c0-28239635%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30b66592bd1a5e86461fd1a029879e3ca0c9b1a3' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.errors.php',
      1 => 1352288797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '43836970509a4f0520d1c0-28239635',
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
  'unifunc' => 'content_509a4f052b3e67_97361615',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f052b3e67_97361615')) {function content_509a4f052b3e67_97361615($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value)){?>
<div id="gui_message">
  <?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['error'])){?>
  <div class="gui_message-error">
	<?php echo $_smarty_tpl->tpl_vars['LANG']->value['gui_message']['errors_detected'];?>

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
  	<div class="gui_message-notice"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</div>
	<?php } ?>
  <?php }?>
</div>
<?php }?><?php }} ?>