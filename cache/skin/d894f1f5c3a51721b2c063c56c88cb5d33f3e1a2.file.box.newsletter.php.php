<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.newsletter.php" */ ?>
<?php /*%%SmartyHeaderCode:166060783509a4f046fae11-22224965%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd894f1f5c3a51721b2c063c56c88cb5d33f3e1a2' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.newsletter.php',
      1 => 1352288797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '166060783509a4f046fae11-22224965',
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
  'unifunc' => 'content_509a4f0478d014_09163706',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f0478d014_09163706')) {function content_509a4f0478d014_09163706($_smarty_tpl) {?><div id="mailing_list">
  <h3><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['mailing_list'];?>
</h3>
  <?php if ($_smarty_tpl->tpl_vars['IS_USER']->value){?>
	<?php if (($_smarty_tpl->tpl_vars['CTRL_SUBSCRIBED']->value)){?>
	<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['customer_is_subscribed'];?>
<br /><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=newsletter&amp;action=unsubscribe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['click_to_unsubscribe'];?>
</a></p>
	<?php }else{ ?>
	<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['customer_not_subscribed'];?>
<br /><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=newsletter&amp;action=subscribe"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['click_to_subscribe'];?>
</a></p>
	<?php }?>
  <?php }else{ ?>
  <form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post">
	<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['enter_email_signup'];?>
</p>
	<p class="input"><input name="subscribe" type="text" class="textbox required" size="18" maxlength="250" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['user']['email_address'];?>
"/></p>
	<p><input type="submit" class="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['newsletter']['subscribe_now'];?>
" /></p>
  </form>
  <?php }?>
</div><?php }} ?>