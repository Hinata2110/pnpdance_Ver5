<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:21
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/element.navigation_tree.php" */ ?>
<?php /*%%SmartyHeaderCode:72322872750aa0515d73334-75254296%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b92031cfb556f57653f67838eba91acc3a59c9c3' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/element.navigation_tree.php',
      1 => 1352290521,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72322872750aa0515d73334-75254296',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'BRANCH' => 0,
    'category' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa0515de5d88_59730192',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa0515de5d88_59730192')) {function content_50aa0515de5d88_59730192($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars['class'] = new Smarty_variable($_smarty_tpl->tpl_vars['BRANCH']->value['cat_id']==$_smarty_tpl->tpl_vars['category']->value['cat_id'] ? "active" : '', null, 0);?>
<li class="<?php if (isset($_smarty_tpl->tpl_vars['BRANCH']->value['children'])){?>node<?php }?> <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
">
	<a href="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
</a>
	<?php if (isset($_smarty_tpl->tpl_vars['BRANCH']->value['children'])){?>
		<ul>
			<li><a href="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
"><?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['name'];?>
</a></li>
			<?php echo $_smarty_tpl->tpl_vars['BRANCH']->value['children'];?>

		</ul>
	<?php }?>
</li><?php }} ?>