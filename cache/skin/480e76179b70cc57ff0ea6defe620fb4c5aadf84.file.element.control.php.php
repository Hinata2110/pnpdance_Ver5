<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:46:02
         compiled from "skins/vector/templates/element.control.php" */ ?>
<?php /*%%SmartyHeaderCode:1670014518509a580abab2f0-95525613%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '480e76179b70cc57ff0ea6defe620fb4c5aadf84' => 
    array (
      0 => 'skins/vector/templates/element.control.php',
      1 => 1352290521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1670014518509a580abab2f0-95525613',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRODUCTS' => 0,
    'VAL_SELF' => 0,
    'SORTING' => 0,
    'LANG' => 0,
    'sort' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a580ac78114_31640255',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a580ac78114_31640255')) {function content_509a580ac78114_31640255($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['PRODUCTS']->value)&&count($_smarty_tpl->tpl_vars['PRODUCTS']->value)>=1){?>
	<div class="products-control">
		<form name="sort" action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" class="form-inline">
			<?php if (isset($_smarty_tpl->tpl_vars['SORTING']->value)){?>
				<label for="products-sort"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['sort_by'];?>
: </label>
				<select id="products-sort" name="sort" onchange="$(this).getForm().submit()" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['sort'];?>
" class="chzn-select products-sort">
					<option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
					<?php  $_smarty_tpl->tpl_vars['sort'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['sort']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SORTING']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['sort']->key => $_smarty_tpl->tpl_vars['sort']->value){
$_smarty_tpl->tpl_vars['sort']->_loop = true;
?>
						<option value="<?php echo $_smarty_tpl->tpl_vars['sort']->value['field'];?>
|<?php echo $_smarty_tpl->tpl_vars['sort']->value['order'];?>
" <?php echo $_smarty_tpl->tpl_vars['sort']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['sort']->value['name'];?>
 (<?php echo $_smarty_tpl->tpl_vars['sort']->value['direction'];?>
)</option>
					<?php } ?>
				</select>
			<?php }?>
		</form>
	</div>
<?php }?><?php }} ?>