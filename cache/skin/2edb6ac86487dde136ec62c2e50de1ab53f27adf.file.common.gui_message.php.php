<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:07:59
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/admin/skins/default/templates/common.gui_message.php" */ ?>
<?php /*%%SmartyHeaderCode:168515743850aa04ff4311d6-97069358%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2edb6ac86487dde136ec62c2e50de1ab53f27adf' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/admin/skins/default/templates/common.gui_message.php',
      1 => 1352288030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '168515743850aa04ff4311d6-97069358',
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
  'unifunc' => 'content_50aa04ff4a8165_68445326',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa04ff4a8165_68445326')) {function content_50aa04ff4a8165_68445326($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value)){?>
<div id="gui_message">
  <?php if (isset($_smarty_tpl->tpl_vars['GUI_MESSAGE']->value['error'])){?>
  <div class="warnText" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_to_close'];?>
">
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
  	<div class="infoText" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['click_to_close'];?>
"><?php echo $_smarty_tpl->tpl_vars['notice']->value;?>
</div>
	<?php } ?>
  <?php }?>
</div>
<?php }?><?php }} ?>