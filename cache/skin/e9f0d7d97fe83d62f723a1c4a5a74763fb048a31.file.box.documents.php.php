<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.documents.php" */ ?>
<?php /*%%SmartyHeaderCode:255523993509a4f047f5f00-30117603%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9f0d7d97fe83d62f723a1c4a5a74763fb048a31' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/box.documents.php',
      1 => 1352288797,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '255523993509a4f047f5f00-30117603',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'DOCUMENTS' => 0,
    'document' => 0,
    'CONTACT_URL' => 0,
    'LANG' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f04891ac1_54772023',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f04891ac1_54772023')) {function content_509a4f04891ac1_54772023($_smarty_tpl) {?><ul class="documents">
  <?php if (isset($_smarty_tpl->tpl_vars['DOCUMENTS']->value)&&count($_smarty_tpl->tpl_vars['DOCUMENTS']->value)>0){?>
  	<?php  $_smarty_tpl->tpl_vars['document'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['document']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['DOCUMENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['document']->key => $_smarty_tpl->tpl_vars['document']->value){
$_smarty_tpl->tpl_vars['document']->_loop = true;
?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['document']->value['doc_url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['document']->value['doc_name'];?>
" <?php if ($_smarty_tpl->tpl_vars['document']->value['doc_url_openin']){?>target="_blank"<?php }?>><?php echo $_smarty_tpl->tpl_vars['document']->value['doc_name'];?>
</a></li>
	<?php } ?>
  <?php }?>
  <?php if (isset($_smarty_tpl->tpl_vars['CONTACT_URL']->value)){?>
  <li><a href="<?php echo $_smarty_tpl->tpl_vars['CONTACT_URL']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['documents']['document_contact'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['documents']['document_contact'];?>
</a></li>
  <?php }?>
</ul><?php }} ?>