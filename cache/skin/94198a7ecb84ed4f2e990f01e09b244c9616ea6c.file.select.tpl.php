<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:55
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/select/select.tpl" */ ?>
<?php /*%%SmartyHeaderCode:14196122509a556fdea711-28214448%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '94198a7ecb84ed4f2e990f01e09b244c9616ea6c' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/select/select.tpl',
      1 => 1352290527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '14196122509a556fdea711-28214448',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'title' => 0,
    'description' => 0,
    'options' => 0,
    'option' => 0,
    'selected' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a556fe6d3b4_46851351',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a556fe6d3b4_46851351')) {function content_509a556fe6d3b4_46851351($_smarty_tpl) {?><label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
<select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
	<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['attributes']['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['attributes']['name']==$_smarty_tpl->tpl_vars['selected']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['attributes']['title'];?>
</option>
	<?php } ?>
</select><?php }} ?>