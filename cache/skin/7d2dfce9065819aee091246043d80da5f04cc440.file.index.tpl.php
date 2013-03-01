<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:47:37
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Google_Checkout/skin/admin/index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1647482116509a586990fe71-79498114%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7d2dfce9065819aee091246043d80da5f04cc440' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Google_Checkout/skin/admin/index.tpl',
      1 => 1352288577,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1647482116509a586990fe71-79498114',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'LANG' => 0,
    'MODULE' => 0,
    'SELECT_scope_both' => 0,
    'SELECT_scope_main' => 0,
    'SELECT_scope_mobile' => 0,
    'buttons' => 0,
    'button' => 0,
    'modes' => 0,
    'mode' => 0,
    'show_ssl' => 0,
    'API_URL' => 0,
    'MODULE_ZONES' => 0,
    'SESSION_TOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a5869afe2f2_05610718',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a5869afe2f2_05610718')) {function content_509a5869afe2f2_05610718($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" enctype="multipart/form-data">
  <div id="Google_Checkout" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['google_checkout']['module_title'];?>
</h3>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['config_settings'];?>
</legend>
	  <div><label for="google_status"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['status'];?>
</label><span><input type="hidden" name="module[status]" id="google_status" class="toggle" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value['status'];?>
" />&nbsp;</span></div>
	  <div>
		<label for="scope"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['scope'];?>
</label>
		<span>
			<select name="module[scope]">
						<option value="both" <?php echo $_smarty_tpl->tpl_vars['SELECT_scope_both']->value;?>
><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['both'];?>
</option>
						<option value="main" <?php echo $_smarty_tpl->tpl_vars['SELECT_scope_main']->value;?>
><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['main'];?>
</option>
						<option value="mobile" <?php echo $_smarty_tpl->tpl_vars['SELECT_scope_mobile']->value;?>
><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['mobile'];?>
</option>
				</select>
		</span>
	</div>
	  <div><label for="google_merchid"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['module']['merchant_id'];?>
</label><span><input name="module[merchId]" id="google_merchid" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value['merchId'];?>
" /></span></div>
	  <div><label for="google_merchkey"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['google_checkout']['merchant_key'];?>
</label><span><input name="module[merchKey]" id="google_merchkey" class="textbox" type="text" value="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value['merchKey'];?>
" /></span></div>
	  <div>
		<label for="google_sizesize"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['google_checkout']['button_size'];?>
</label>
		<span>
		  <select name="module[size]" id="google_size">
		    <?php  $_smarty_tpl->tpl_vars['button'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['button']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['buttons']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['button']->key => $_smarty_tpl->tpl_vars['button']->value){
$_smarty_tpl->tpl_vars['button']->_loop = true;
?>
			  <option value="<?php echo $_smarty_tpl->tpl_vars['button']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['button']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['button']->value['title'];?>
</option>
			<?php } ?>
		  </select>
		</span>
	  </div>

	  <div>
		<label for="google_mode"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['google_checkout']['mode'];?>
</label>
		<span>
		  <select name="module[mode]" id="google_mode">
			<?php  $_smarty_tpl->tpl_vars['mode'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['mode']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modes']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['mode']->key => $_smarty_tpl->tpl_vars['mode']->value){
$_smarty_tpl->tpl_vars['mode']->_loop = true;
?>
			  <option value="<?php echo $_smarty_tpl->tpl_vars['mode']->value['value'];?>
"<?php echo $_smarty_tpl->tpl_vars['mode']->value['selected'];?>
><?php echo $_smarty_tpl->tpl_vars['mode']->value['title'];?>
</option>
			<?php } ?>
		  </select>
		</span>
	  </div>
	</fieldset>

	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['google_checkout']['settings'];?>
</legend>
	  <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['google_checkout']['settings_info'];?>
</p>
	  <p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['google_checkout']['advanced_info'];?>
</p>
	</fieldset>
	<?php if ($_smarty_tpl->tpl_vars['show_ssl']->value){?>
	<fieldset><legend><?php echo $_smarty_tpl->tpl_vars['LANG']->value['google_checkout']['callback_url'];?>
</legend>
	<?php echo $_smarty_tpl->tpl_vars['API_URL']->value;?>

	</fieldset>
	<?php }?>
  </div>
  <?php echo $_smarty_tpl->tpl_vars['MODULE_ZONES']->value;?>

  <div class="form_control">
	<input type="submit" name="save" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
" />
  </div>
  <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
" />
</form><?php }} ?>