<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:22
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.documents.php" */ ?>
<?php /*%%SmartyHeaderCode:78914828050aa0516674b96-31306217%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b61d8cd3b0e732112d7dc20ccd2d536ae9ea4c59' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/box.documents.php',
      1 => 1352290516,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '78914828050aa0516674b96-31306217',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'LANG' => 0,
    'STORE_URL' => 0,
    'DOCUMENTS' => 0,
    'document' => 0,
    'CONTACT_URL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa0516708175_23180463',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa0516708175_23180463')) {function content_50aa0516708175_23180463($_smarty_tpl) {?><div class="box box-navgation box-documents">
	<div class="wrapper">
		<h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['information'];?>
</h3>
		<div class="content">
			<nav>
				<ul class="nav nav-list">
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['home'];?>
"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['home'];?>
</a></li>
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
				</ul>
			</nav>
		</div><!-- /.content -->
	</div><!-- /.wrapper -->
</div><!-- /.box --><?php }} ?>