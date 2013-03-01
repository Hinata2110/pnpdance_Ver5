<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:32:55
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/admin/skins/default/templates/modules.zones-disabled.php" */ ?>
<?php /*%%SmartyHeaderCode:1746154858509a54f7c50984-99479554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '49d674adea99e0008141d428bdd5e32eee5b674a' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/admin/skins/default/templates/modules.zones-disabled.php',
      1 => 1352288030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1746154858509a54f7c50984-99479554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'DISABLED_COUNTRIES' => 0,
    'SKIN_VARS' => 0,
    'country' => 0,
    'ALL_COUNTRIES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a54f7d3b689_61894497',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a54f7d3b689_61894497')) {function content_509a54f7d3b689_61894497($_smarty_tpl) {?>  <div id="disabled-zone-list" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['disabled_zones'];?>
</h3>
	<fieldset id="disabled-zones" class="list"><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['title_regions_disabled'];?>
</legend>
	  <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DISABLED_COUNTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
	  <div>
		<span class="actions"><a href="#" class="remove dynamic" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['messages']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a></span>
		<input type="hidden" name="disabled_zones[]" value="<?php echo $_smarty_tpl->tpl_vars['country']->value['numcode'];?>
" />
		<?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>

	  </div>
	  <?php } ?>
	</fieldset>

	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['title_regions_add'];?>
</legend>
	  <div class="inline-add">
		<label for="add-zone-disabled"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['country']['title_zone_add'];?>
</label>
		<span>
		  <select id="add-zone-disabled" name="disabled_zones[]" class="textbox add display">
			<option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
			<?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ALL_COUNTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['country']->value['numcode'];?>
"><?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>
</option>
			<?php } ?>
		  </select>
		  <a href="#" class="add" target="disabled-zones"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/add.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['add'];?>
" /></a>
		</span>
	  </div>
	</fieldset>
  </div><?php }} ?>