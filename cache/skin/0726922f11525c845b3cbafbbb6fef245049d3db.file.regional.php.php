<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "skins/vector/templates/widgets/regional.php" */ ?>
<?php /*%%SmartyHeaderCode:5518845550aa051ee17e62-23458258%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0726922f11525c845b3cbafbbb6fef245049d3db' => 
    array (
      0 => 'skins/vector/templates/widgets/regional.php',
      1 => 1352290523,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5518845550aa051ee17e62-23458258',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'CURRENCY' => 0,
    'LANGUAGE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051ee433c3_98862282',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051ee433c3_98862282')) {function content_50aa051ee433c3_98862282($_smarty_tpl) {?><div class="box box-regional">
	<div class="wrapper">
		<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['country']['title_country'];?>
 &amp; <?php echo $_smarty_tpl->tpl_vars['LANG']->value['country']['title_zone'];?>
</h3>
		<div class="content">
			<?php echo $_smarty_tpl->tpl_vars['CURRENCY']->value;?>

			<?php echo $_smarty_tpl->tpl_vars['LANGUAGE']->value;?>

		</div>
	</div>
</div><?php }} ?>