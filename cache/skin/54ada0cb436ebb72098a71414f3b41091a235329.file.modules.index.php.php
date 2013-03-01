<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:32:38
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/admin/skins/default/templates/modules.index.php" */ ?>
<?php /*%%SmartyHeaderCode:2042973016509a54e6c4dc59-51354334%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54ada0cb436ebb72098a71414f3b41091a235329' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/admin/skins/default/templates/modules.index.php',
      1 => 1352288030,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2042973016509a54e6c4dc59-51354334',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'VAL_SELF' => 0,
    'MODULES_TYPE' => 0,
    'MODULES' => 0,
    'module' => 0,
    'SKIN_VARS' => 0,
    'LANG' => 0,
    'SESSION_TOKEN' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a54e6d8ed83_51976367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a54e6d8ed83_51976367')) {function content_509a54e6d8ed83_51976367($_smarty_tpl) {?><form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post">
  <div id="modules" class="tab_content">
	<h3><?php echo $_smarty_tpl->tpl_vars['MODULES_TYPE']->value;?>
</h3>
	<div class="list">
	<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['MODULES']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value){
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
	  <div class="module">
		<span class="actions">
		  <a href="?_g=modules&amp;type=<?php echo $_smarty_tpl->tpl_vars['module']->value['type'];?>
&amp;module=<?php echo $_smarty_tpl->tpl_vars['module']->value['node'];?>
" class="edit">
			<img src="<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['admin_folder'];?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_VARS']->value['skin_folder'];?>
/images/edit.png" alt="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['edit'];?>
" />
		  </a>
		</span>
		<span class="toggle"><input type="hidden" id="status_<?php echo $_smarty_tpl->tpl_vars['module']->value['node'];?>
" name="status[<?php echo $_smarty_tpl->tpl_vars['module']->value['node'];?>
]" value="<?php echo $_smarty_tpl->tpl_vars['module']->value['status'];?>
" class="toggle" /></span>
		<a href="?_g=modules&amp;type=<?php echo $_smarty_tpl->tpl_vars['module']->value['type'];?>
&amp;module=<?php echo $_smarty_tpl->tpl_vars['module']->value['node'];?>
"><?php echo $_smarty_tpl->tpl_vars['module']->value['title'];?>
</a>
	  </div>
	<?php } ?>
	</div>
  </div>
  
  <?php echo $_smarty_tpl->getSubTemplate ('templates/element.hook_form_content.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

  
  <div class="form_control">
	<input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['save'];?>
" />
  </div>
  <input type="hidden" name="token" value="<?php echo $_smarty_tpl->tpl_vars['SESSION_TOKEN']->value;?>
" />
</form><?php }} ?>