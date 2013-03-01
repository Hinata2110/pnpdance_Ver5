<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.session.php" */ ?>
<?php /*%%SmartyHeaderCode:756110921509a4f04322b31-36612554%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4695e84131fc571af71f8d01a3043c8ee3603969' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.session.php',
      1 => 1352288798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '756110921509a4f04322b31-36612554',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'IS_USER' => 0,
    'LANG_WELCOME_BACK' => 0,
    'STORE_URL' => 0,
    'LANG' => 0,
    'URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f0441caf8_74940301',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f0441caf8_74940301')) {function content_509a4f0441caf8_74940301($_smarty_tpl) {?><div id="session">
  <?php if ($_smarty_tpl->tpl_vars['IS_USER']->value){?>
  <p>
	<?php echo $_smarty_tpl->tpl_vars['LANG_WELCOME_BACK']->value;?>
 ::
	<a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=logout" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['logout'];?>
</a>
	<a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=account" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>
</a>
  </p>
  <?php }else{ ?>
  <p>
	<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['login'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
</a> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['or'];?>

	<a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value['register'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>
</a>
  </p>
  <?php }?>
</div><?php }} ?>