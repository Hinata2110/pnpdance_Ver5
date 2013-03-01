<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "skins/vector/templates/element.tagline_slider.php" */ ?>
<?php /*%%SmartyHeaderCode:213055771150aa051e694b32-57793806%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b949f256eae6c3eaabebb18f64a4c188e348ffbe' => 
    array (
      0 => 'skins/vector/templates/element.tagline_slider.php',
      1 => 1352290521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '213055771150aa051e694b32-57793806',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fusion' => 0,
    'SECTION_NAME' => 0,
    'slides' => 0,
    'slide' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051e705734_01032096',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051e705734_01032096')) {function content_50aa051e705734_01032096($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['fusion']->value)){?>
	<?php $_smarty_tpl->tpl_vars['slides'] = new Smarty_variable($_smarty_tpl->tpl_vars['fusion']->value->get("tagline_slider_".($_smarty_tpl->tpl_vars['SECTION_NAME']->value)), null, 0);?>
	<?php if (empty($_smarty_tpl->tpl_vars['slides']->value)){?> <?php $_smarty_tpl->tpl_vars['slides'] = new Smarty_variable($_smarty_tpl->tpl_vars['fusion']->value->get("tagline_slider_global"), null, 0);?> <?php }?>

	<?php if ((is_array($_smarty_tpl->tpl_vars['slides']->value)&&!empty($_smarty_tpl->tpl_vars['slides']->value))){?>
		<ul class="tagline-slider">
			<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
				<li><?php echo $_smarty_tpl->tpl_vars['slide']->value;?>
</li>
			<?php } ?>
		</ul>
	<?php }else{ ?>
		&nbsp;
	<?php }?>
<?php }?><?php }} ?>