<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:22
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.newsletter.php" */ ?>
<?php /*%%SmartyHeaderCode:85554050350aa05160ab946-40126198%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '526a964c889c2a8861d2cb96b9fa196a46f96f9f' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.newsletter.php',
      1 => 1352290516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85554050350aa05160ab946-40126198',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'IS_USER' => 0,
    'CTRL_SUBSCRIBED' => 0,
    'STORE_URL' => 0,
    'VAL_SELF' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa05161466d9_02465896',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa05161466d9_02465896')) {function content_50aa05161466d9_02465896($_smarty_tpl) {?><div class="box box-mailinglist">
	<div class="wrapper">
		<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['mailing_list'];?>
</h3>
		<div class="content">
			<?php if ($_smarty_tpl->tpl_vars['IS_USER']->value){?>
				<?php if (($_smarty_tpl->tpl_vars['CTRL_SUBSCRIBED']->value)){?>
					<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['customer_is_subscribed'];?>
</p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=newsletter&amp;action=unsubscribe" class="btn" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['click_to_unsubscribe'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['click_to_unsubscribe'];?>
</a>
				<?php }else{ ?>
					<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['customer_not_subscribed'];?>
</p>
					<a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=newsletter&amp;action=subscribe" class="btn" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['click_to_subscribe'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['subscribe_now'];?>
</a>
				<?php }?>
			<?php }else{ ?>
				<p class="help-block"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['enter_email_signup'];?>
</p>
				<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" class="input-append">
					<input name="subscribe" id="subscribe" type="email" class="input-fill" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['email_address'];?>
" required maxlength="250" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['email_address'];?>
"/><button type="button" class="btn" onclick="$(this).getForm().submit()" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['subscribe'];?>
"><i class="icon-envelope"></i></button>
				</form>
			<?php }?>
		</div>
	</div>
</div><?php }} ?>