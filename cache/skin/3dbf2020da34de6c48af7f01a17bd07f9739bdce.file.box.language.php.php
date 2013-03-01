<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.language.php" */ ?>
<?php /*%%SmartyHeaderCode:1856055990509a4f041db968-00546790%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3dbf2020da34de6c48af7f01a17bd07f9739bdce' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.language.php',
      1 => 1352288797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1856055990509a4f041db968-00546790',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'LANGUAGES' => 0,
    'language' => 0,
    'STORE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f04251208_78950603',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f04251208_78950603')) {function content_509a4f04251208_78950603($_smarty_tpl) {?><div id="language_select">
  <span class="title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['change_language'];?>
</span>:
  <?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?>
  <a href="<?php echo $_smarty_tpl->tpl_vars['language']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
" class="<?php echo $_smarty_tpl->tpl_vars['language']->value['css'];?>
">
	<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/language/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
.png" alt="<?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
" id="language_<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
" />
  </a>
  <?php } ?>
</div><?php }} ?>