<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:56
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/content_slider/content_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1854693816509a55703c0619-02676179%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ee84a760643cf072a1bbd1378d5ad1bc4f0d8d53' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/content_slider/content_slider.tpl',
      1 => 1352290531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1854693816509a55703c0619-02676179',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'title' => 0,
    'slides' => 0,
    'slide' => 0,
    'enabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a55704881f1_93596648',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a55704881f1_93596648')) {function content_509a55704881f1_93596648($_smarty_tpl) {?><script>
	
		head.ready(function() {
			var $tabs = $("#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
").find(".tabs_container");
			
			// Function for updating tab numbering
			var update_tab_numbering = function($tabs) {
				$tabs.find("ul.tabs li").each(function(index) {
					$(this).find("a:first:not(.new)").html("Slide " + (index+1));
				});
			};
			
			// Build existing tabs
			$tabs.tabs({
				closable: true,
				closableClick: function(event, ui) {
					if ($(ui.tab).hasClass('new')) return false;
							
					if (confirm('Are you sure you want to remove this slide?')) {
						return true;
					}
					
					return false;
				},
				closeComplete: function() {
					update_tab_numbering($tabs);
				}
			});
			
			// Remove close icon for "New Slide" tab
			$tabs.find('a.new').siblings('.ui-close-tab').remove();
			
			// Load and apply CKEditor
			head.js('includes/ckeditor/ckeditor.js', 'includes/ckeditor/adapters/jquery.js', function() {
				$('.<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_ckeditor').ckeditor({
					path: 'includes/ckeditor/',
					config: {
						fullPage: ($(this).hasClass("ckeditor-full")) ? true : false
					},
					toolbar: "CubeCart",
					selector: "textarea.slider_ckeditor",
					resize_dir: "vertical",
					enterMode: CKEDITOR.ENTER_BR,
					shiftEnterMode: CKEDITOR.ENTER_P,
					toolbarStartupExpanded: false
				});
			});	
		});
	
</script>

<table id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" class="formatted slider">
	<thead>
		<tr>
			<th><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</th>
		</tr>
	</thead>
	<tbody>
		<tr>
			<td style="padding: 0">
				<div class="tabs_container">
					<ul class="tabs">
						<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slide']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['slide']->iteration++;
?>
							<li><a href="#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
">Slide <?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
</a></li>
						<?php } ?>
						<li><a href="#<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new" class="new">New Slide</a></li>
					</ul>
					
					<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['slide']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
 $_smarty_tpl->tpl_vars['slide']->iteration++;
?>
						<div id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
">
							<textarea name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[slides][<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
][content_html]" class="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_ckeditor" style="width: 100%;"><?php echo $_smarty_tpl->tpl_vars['slide']->value['content_html'];?>
</textarea>
						</div>
					<?php } ?>
					
					<div id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new">
						<textarea name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[slides][<?php echo count($_smarty_tpl->tpl_vars['slides']->value)+1;?>
][content_html]" class="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_ckeditor" style="width: 100%;"></textarea>
					</div>
				</div>
			</td>
		</tr>
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2">
				<input type="checkbox" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_enabled" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[enabled]" value="on" class="toggle-switch" title="Enable <?php echo $_smarty_tpl->tpl_vars['title']->value;?>
?" <?php if ($_smarty_tpl->tpl_vars['enabled']->value){?>checked="checked"<?php }?> />
			</td>
		</tr>
	</tfoot>
</table><?php }} ?>