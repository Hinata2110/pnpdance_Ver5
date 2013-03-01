<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:56
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/page_layout/page_layout.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1174837499509a55704f89a1-48130623%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26cbbd989f14cc95754282f0799922a0f7f00dfd' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/page_layout/page_layout.tpl',
      1 => 1352290527,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1174837499509a55704f89a1-48130623',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'can_use_default' => 0,
    'value' => 0,
    'templates' => 0,
    'template' => 0,
    'region' => 0,
    'images_path' => 0,
    'widgetName' => 0,
    'widget' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a5570709ae8_35589607',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a5570709ae8_35589607')) {function content_509a5570709ae8_35589607($_smarty_tpl) {?>
	<script>
		head.ready(function() {
			$(".<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_tabs_container").tabs();
		
			$('select[name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[template]"]').each(function() {
				$('#' + $(this).attr('id') + '_' + $(this).val()).show();
			}).change(function() {
				$('.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_template_regions').hide();
				$('#' + $(this).attr('id') + '_' + $(this).val()).show();
			});
		});
	</script>


<div class="submodule">
	<label>Layout</label>
	<select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="page_layout_template" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[template]">
		<?php if ($_smarty_tpl->tpl_vars['can_use_default']->value){?><option value="" <?php if (!$_smarty_tpl->tpl_vars['value']->value['template']){?>selected="selected"<?php }?>>(use default)</option><?php }?>
		<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
			<option value="<?php echo $_smarty_tpl->tpl_vars['template']->value['attributes']['name'];?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value['template']==$_smarty_tpl->tpl_vars['template']->value['attributes']['name']){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['template']->value['attributes']['title'];?>
</option>
		<?php } ?>
	</select>
</div>

<?php  $_smarty_tpl->tpl_vars['template'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['template']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['templates']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['template']->key => $_smarty_tpl->tpl_vars['template']->value){
$_smarty_tpl->tpl_vars['template']->_loop = true;
?>
	<div id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['template']->value['attributes']['name'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_template_regions" style="border: 1px solid #B6B6B6; display: none;">
		<div class="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_tabs_container">
			<ul class="tabs">
				<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template']->value['region']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value){
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
					<?php if (count($_smarty_tpl->tpl_vars['region']->value['widget'])>0){?>
						<li><a href="#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['template']->value['attributes']['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['region']->value['attributes']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['region']->value['attributes']['title'];?>
</a></li>
					<?php }?>
				<?php } ?>
			</ul>
			<?php  $_smarty_tpl->tpl_vars['region'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['region']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['template']->value['region']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['region']->key => $_smarty_tpl->tpl_vars['region']->value){
$_smarty_tpl->tpl_vars['region']->_loop = true;
?>
				<?php if (count($_smarty_tpl->tpl_vars['region']->value['widget'])>0){?>
					<div id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_<?php echo $_smarty_tpl->tpl_vars['template']->value['attributes']['name'];?>
_<?php echo $_smarty_tpl->tpl_vars['region']->value['attributes']['name'];?>
" class="tab_content">
						<?php if ($_smarty_tpl->tpl_vars['region']->value['attributes']['image']){?>
							<label><img src="<?php echo $_smarty_tpl->tpl_vars['images_path']->value;?>
/<?php echo $_smarty_tpl->tpl_vars['region']->value['attributes']['image'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['region']->value['attributes']['title'];?>
" /></label>
						<?php }else{ ?>
							<label><?php echo $_smarty_tpl->tpl_vars['region']->value['attributes']['title'];?>
</label>
						<?php }?>
					
						<select name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[<?php echo $_smarty_tpl->tpl_vars['template']->value['attributes']['name'];?>
][<?php echo $_smarty_tpl->tpl_vars['region']->value['attributes']['name'];?>
][]" class="multiselect" multiple>
							
							<?php  $_smarty_tpl->tpl_vars['widgetName'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widgetName']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['template']->value['attributes']['name']][$_smarty_tpl->tpl_vars['region']->value['attributes']['name']]; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widgetName']->key => $_smarty_tpl->tpl_vars['widgetName']->value){
$_smarty_tpl->tpl_vars['widgetName']->_loop = true;
?>
								<?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['region']->value['widget']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>
									<?php if ($_smarty_tpl->tpl_vars['widgetName']->value==$_smarty_tpl->tpl_vars['widget']->value['attributes']['name']){?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['widget']->value['attributes']['name'];?>
" selected><?php echo $_smarty_tpl->tpl_vars['widget']->value['attributes']['title'];?>
</option>
									<?php }?>
								<?php } ?>
							<?php } ?>
							
							<?php  $_smarty_tpl->tpl_vars['widget'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['widget']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['region']->value['widget']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['widget']->key => $_smarty_tpl->tpl_vars['widget']->value){
$_smarty_tpl->tpl_vars['widget']->_loop = true;
?>
								<?php if (!is_array($_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['template']->value['attributes']['name']][$_smarty_tpl->tpl_vars['region']->value['attributes']['name']])||!in_array($_smarty_tpl->tpl_vars['widget']->value['attributes']['name'],$_smarty_tpl->tpl_vars['value']->value[$_smarty_tpl->tpl_vars['template']->value['attributes']['name']][$_smarty_tpl->tpl_vars['region']->value['attributes']['name']])){?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['widget']->value['attributes']['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['widget']->value['attributes']['title'];?>
</option>
								<?php }?>
							<?php } ?>
						</select>
					</div>
				<?php }?>
			<?php } ?>
		</div>
	</div>
<?php } ?>
<?php }} ?>