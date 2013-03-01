<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "skins/vector/templates/element.image_slider.php" */ ?>
<?php /*%%SmartyHeaderCode:76924776550aa051e7edcd9-94041118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5b92482b5f56ce7611757788f381f3a9d1106016' => 
    array (
      0 => 'skins/vector/templates/element.image_slider.php',
      1 => 1352290521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '76924776550aa051e7edcd9-94041118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'fusion' => 0,
    'SECTION_NAME' => 0,
    'slides' => 0,
    'slide' => 0,
    'STORE_URL' => 0,
    'SKIN_FOLDER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051e8ca6b0_25691796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051e8ca6b0_25691796')) {function content_50aa051e8ca6b0_25691796($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['fusion']->value)){?>
	<?php $_smarty_tpl->tpl_vars['slides'] = new Smarty_variable($_smarty_tpl->tpl_vars['fusion']->value->get("image_slider_".($_smarty_tpl->tpl_vars['SECTION_NAME']->value)), null, 0);?>
	<?php if (empty($_smarty_tpl->tpl_vars['slides']->value)){?> <?php $_smarty_tpl->tpl_vars['slides'] = new Smarty_variable($_smarty_tpl->tpl_vars['fusion']->value->get("image_slider_global"), null, 0);?> <?php }?>

	<?php if ((is_array($_smarty_tpl->tpl_vars['slides']->value)&&!empty($_smarty_tpl->tpl_vars['slides']->value))){?>	
		<div class="flexslider-container">
			<div class="flexslider">
				<ul class="slides">
					<?php  $_smarty_tpl->tpl_vars['slide'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['slide']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['slides']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['slide']->key => $_smarty_tpl->tpl_vars['slide']->value){
$_smarty_tpl->tpl_vars['slide']->_loop = true;
?>
						<li style="<?php if ($_smarty_tpl->tpl_vars['slide']->value['background_color']){?>background-color: <?php echo $_smarty_tpl->tpl_vars['slide']->value['background_color'];?>
;<?php }?> <?php if ($_smarty_tpl->tpl_vars['slide']->value['background_image']){?>background-image: url(<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/images/backgrounds/<?php echo $_smarty_tpl->tpl_vars['slide']->value['background_image'];?>
);<?php }?>">
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['url']){?><a href="<?php echo $_smarty_tpl->tpl_vars['slide']->value['url'];?>
"><?php }?>
								<img src="<?php echo $_smarty_tpl->tpl_vars['slide']->value['image'];?>
" alt="" />
							<?php if ($_smarty_tpl->tpl_vars['slide']->value['url']){?></a><?php }?>
						</li>
					<?php } ?>
				</ul>
			</div>
		</div>
	<?php }?>
<?php }?><?php }} ?>