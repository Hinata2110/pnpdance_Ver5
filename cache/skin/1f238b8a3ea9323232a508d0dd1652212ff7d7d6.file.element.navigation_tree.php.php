<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:07:32
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/element.navigation_tree.php" */ ?>
<?php /*%%SmartyHeaderCode:926912754509a4f0455ce76-90037173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1f238b8a3ea9323232a508d0dd1652212ff7d7d6' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/kurouto/templates/element.navigation_tree.php',
      1 => 1352288798,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '926912754509a4f0455ce76-90037173',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BRANCH' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a4f045e2407_64314253',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a4f045e2407_64314253')) {function content_509a4f045e2407_64314253($_smarty_tpl) {?><li>
  <a href="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
</a>
  <?php if (isset($_smarty_tpl->tpl_vars['BRANCH']->value['children'])){?>
  <ul><?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['children'];?>
</ul>
  <?php }?>
</li><?php }} ?>