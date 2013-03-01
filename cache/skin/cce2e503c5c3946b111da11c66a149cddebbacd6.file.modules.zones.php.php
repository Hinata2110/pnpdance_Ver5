<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:32:55
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/admin/skins/default/templates/modules.zones.php" */ ?>
<?php /*%%SmartyHeaderCode:475717991509a54f7ad5de2-00147788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cce2e503c5c3946b111da11c66a149cddebbacd6' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/admin/skins/default/templates/modules.zones.php',
      1 => 1352288030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '475717991509a54f7ad5de2-00147788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'ENABLED_COUNTRIES' => 0,
    'SKIN_VARS' => 0,
    'country' => 0,
    'ALL_COUNTRIES' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a54f7c2c3c7_03022329',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a54f7c2c3c7_03022329')) {function content_509a54f7c2c3c7_03022329($_smarty_tpl) {?>  <div id="zone-list" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['settings']['allowed_zones'];?>
</h3>
	<fieldset id="enabled-zones" class="list"><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['title_regions_enabled'];?>
</legend>
	  <?php  $_smarty_tpl->tpl_vars['country'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['country']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ENABLED_COUNTRIES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['country']->key => $_smarty_tpl->tpl_vars['country']->value){
$_smarty_tpl->tpl_vars['country']->_loop = true;
?>
	  <div>
		<span class="actions"><a href="#" class="remove dynamic" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['messages']['confirm_delete'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/delete.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['delete'];?>
" /></a></span>
		<input type="hidden" name="zones[]" value="<?php echo $_smarty_tpl->tpl_vars['country']->value['numcode'];?>
" />
		<?php echo $_smarty_tpl->tpl_vars['country']->value['name'];?>

	  </div>
	  <?php } ?>
	</fieldset>

	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['title_regions_add'];?>
</legend>
	  <div class="inline-add">
		<label for="add-zone"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['country']['title_zone_add'];?>
</label>
		<span>
		  <select id="add-zone" name="zones[]" class="textbox add display">
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
		  <a href="#" class="add" target="enabled-zones"><img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/add.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['add'];?>
" /></a>
		</span>
	  </div>
	</fieldset>
  </div><?php }} ?>