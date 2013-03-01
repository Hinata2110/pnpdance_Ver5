<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:42:49
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.language.php" */ ?>
<?php /*%%SmartyHeaderCode:1421074109509a57495eeeb6-51088339%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2debf75ff58b72cd6817e1f501d13fbe69838bc5' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.language.php',
      1 => 1352290516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1421074109509a57495eeeb6-51088339',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'LANGUAGES' => 0,
    'language' => 0,
    'STORE_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a574969cbb2_34801505',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a574969cbb2_34801505')) {function content_509a574969cbb2_34801505($_smarty_tpl) {?><div class="regional-language">
	<form id="language_select" action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="get" class="input-prepend">
		<span class="add-on"><?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?><?php if ($_smarty_tpl->tpl_vars['language']->value['selected']){?><img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/language/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
.png" alt="" /><?php }?><?php } ?></span><select name="set_language" id="language" class="input-fill chzn-select" onchange="this.form.submit();"><?php  $_smarty_tpl->tpl_vars['language'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['language']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['LANGUAGES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['language']->key => $_smarty_tpl->tpl_vars['language']->value){
$_smarty_tpl->tpl_vars['language']->_loop = true;
?><option value="<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
" <?php echo $_smarty_tpl->tpl_vars['language']->value['selected'];?>
 data-code="<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
" data-image="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/language/flags/<?php echo $_smarty_tpl->tpl_vars['language']->value['code'];?>
.png"><?php echo $_smarty_tpl->tpl_vars['language']->value['title'];?>
</option><?php } ?></select>
	</form>
</div><?php }} ?>