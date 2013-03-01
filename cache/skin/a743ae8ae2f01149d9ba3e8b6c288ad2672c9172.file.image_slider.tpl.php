<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:56
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/image_slider/image_slider.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1894727891509a5570096a13-40477519%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a743ae8ae2f01149d9ba3e8b6c288ad2672c9172' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/image_slider/image_slider.tpl',
      1 => 1352290530,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1894727891509a5570096a13-40477519',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'title' => 0,
    'slides' => 0,
    'images' => 0,
    'image' => 0,
    'slide' => 0,
    'background_images' => 0,
    'background_image' => 0,
    'enabled' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a557031e967_86013548',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a557031e967_86013548')) {function content_509a557031e967_86013548($_smarty_tpl) {?><script>
	
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
							<div class="submodule">
								<label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
_image">Image</label>
								<select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
_image" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[slides][<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
][image]">
									<option value="">-- Please Select --</option>
									<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['slide']->value['image']==$_smarty_tpl->tpl_vars['image']->value){?>selected="selected"<?php }?>><?php echo basename($_smarty_tpl->tpl_vars['image']->value);?>
</option>
									<?php } ?>
								</select>
							</div>
							<div class="submodule">
								<label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
_background_color">Background Color</label>
								<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
_background_color" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[slides][<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
][background_color]" class="colorpicker miniColors" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['background_color'];?>
" />
							</div>
							<div class="submodule">
								<label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
_background_image">Background Image</label>
								<select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
_background_image" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[slides][<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
][background_image]">
									<option value="">None</option>
									<?php  $_smarty_tpl->tpl_vars['background_image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['background_image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['background_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['background_image']->key => $_smarty_tpl->tpl_vars['background_image']->value){
$_smarty_tpl->tpl_vars['background_image']->_loop = true;
?>
										<option value="<?php echo $_smarty_tpl->tpl_vars['background_image']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['slide']->value['background_image']==$_smarty_tpl->tpl_vars['background_image']->value){?>selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['background_image']->value;?>
</option>
									<?php } ?>
								</select>
							</div>
							<div class="submodule">
								<label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
_url">Link</label>
								<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
_url" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[slides][<?php echo $_smarty_tpl->tpl_vars['slide']->iteration;?>
][url]" value="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
" />
							</div>
						</div>
					<?php } ?>
					
					<div id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new">
						<div class="submodule">
							<label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new_image">Image</label>
							<select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new_image" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[slides][<?php echo count($_smarty_tpl->tpl_vars['slides']->value)+1;?>
][image]">
								<option value="">-- Please Select --</option>
								<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['image']->value;?>
"><?php echo basename($_smarty_tpl->tpl_vars['image']->value);?>
</option>
								<?php } ?>
							</select>
						</div>
						<div class="submodule">
							<label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new_background_color">Background Color</label>
							<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new_background_color" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[slides][<?php echo count($_smarty_tpl->tpl_vars['slides']->value)+1;?>
][background_color]" class="colorpicker miniColors" value="#FFFFFF" />
						</div>
						<div class="submodule">
							<label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new_background_image">Background Image</label>
							<select id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new_background_image" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[slides][<?php echo count($_smarty_tpl->tpl_vars['slides']->value)+1;?>
][background_image]">
								<option value="">None</option>
								<?php  $_smarty_tpl->tpl_vars['background_image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['background_image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['background_images']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['background_image']->key => $_smarty_tpl->tpl_vars['background_image']->value){
$_smarty_tpl->tpl_vars['background_image']->_loop = true;
?>
									<option value="<?php echo $_smarty_tpl->tpl_vars['background_image']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['background_image']->value;?>
</option>
								<?php } ?>
							</select>
						</div>
						<div class="submodule">
							<label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new_url">Link</label>
							<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
_slide_new_url" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
[slides][<?php echo count($_smarty_tpl->tpl_vars['slides']->value)+1;?>
][url]" value="" />
						</div>
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