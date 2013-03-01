<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:55
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/multiselect/multiselect.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2054449602509a556fcc80d4-03143199%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8cbf15c72d763c548d0e518a76f5c755ed0cf034' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/multiselect/multiselect.tpl',
      1 => 1352290529,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2054449602509a556fcc80d4-03143199',
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
  'unifunc' => 'content_509a556fd6b385_13753108',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a556fd6b385_13753108')) {function content_509a556fd6b385_13753108($_smarty_tpl) {?><label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
<select multiple id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[]" title="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
">
	<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['options']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
		<option value="<?php echo $_smarty_tpl->tpl_vars['option']->value['attributes']['name'];?>
" <?php if (in_array($_smarty_tpl->tpl_vars['option']->value['attributes']['name'],$_smarty_tpl->tpl_vars['selected']->value)){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['option']->value['attributes']['title'];?>
</option>
	<?php } ?>
</select><?php }} ?>