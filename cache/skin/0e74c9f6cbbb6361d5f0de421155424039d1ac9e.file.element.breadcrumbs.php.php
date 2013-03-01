<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "skins/vector/templates/element.breadcrumbs.php" */ ?>
<?php /*%%SmartyHeaderCode:191629307550aa051ec6e1d4-39155691%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e74c9f6cbbb6361d5f0de421155424039d1ac9e' => 
    array (
      0 => 'skins/vector/templates/element.breadcrumbs.php',
      1 => 1352290518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '191629307550aa051ec6e1d4-39155691',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CRUMBS' => 0,
    'GLOBALS' => 0,
    'fusion' => 0,
    'SECTION_NAME' => 0,
    'STORE_URL' => 0,
    'LANG' => 0,
    'crumb' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051ed75891_52653287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051ed75891_52653287')) {function content_50aa051ed75891_52653287($_smarty_tpl) {?><?php if (!isset($_smarty_tpl->tpl_vars['CRUMBS']->value)){?><?php $_smarty_tpl->tpl_vars['CRUMBS'] = new Smarty_variable($_smarty_tpl->tpl_vars['GLOBALS']->value['gui']->getBreadcrumbs(), null, 0);?><?php }?>
<?php if (isset($_smarty_tpl->tpl_vars['fusion']->value)&&count($_smarty_tpl->tpl_vars['CRUMBS']->value)>=1){?>
	<?php if (in_array($_smarty_tpl->tpl_vars['SECTION_NAME']->value,$_smarty_tpl->tpl_vars['fusion']->value->get("breadcrumbs"))||($_smarty_tpl->tpl_vars['SECTION_NAME']->value==''&&in_array("default",$_smarty_tpl->tpl_vars['fusion']->value->get("breadcrumbs")))){?>
		<nav>
			<ul class="breadcrumbs">
				<li itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
					<a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php" itemprop="url">
						<span itemprop="title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['home'];?>
</span>
					</a>
				</li>
				<?php  $_smarty_tpl->tpl_vars['crumb'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['crumb']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['CRUMBS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['crumb']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['crumb']->iteration=0;
foreach ($_from as $_smarty_tpl->tpl_vars['crumb']->key => $_smarty_tpl->tpl_vars['crumb']->value){
$_smarty_tpl->tpl_vars['crumb']->_loop = true;
 $_smarty_tpl->tpl_vars['crumb']->iteration++;
 $_smarty_tpl->tpl_vars['crumb']->last = $_smarty_tpl->tpl_vars['crumb']->iteration === $_smarty_tpl->tpl_vars['crumb']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']["crumbs"]['last'] = $_smarty_tpl->tpl_vars['crumb']->last;
?>
					<li itemprop="child" itemscope itemtype="http://data-vocabulary.org/Breadcrumb" class="<?php if ($_smarty_tpl->getVariable('smarty')->value['foreach']['crumbs']['last']){?>active<?php }?>">
						<span class="divider"><?php echo $_smarty_tpl->tpl_vars['GLOBALS']->value['config']->get('config','default_directory_symbol');?>
</span>
						<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['crumbs']['last']){?><a href="<?php echo $_smarty_tpl->tpl_vars['crumb']->value['url'];?>
" itemprop="url"><?php }?>
							<span itemprop="title"><?php echo $_smarty_tpl->tpl_vars['crumb']->value['title'];?>
</span>
						<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['crumbs']['last']){?></a><?php }?>
					</li>
				<?php } ?>
			</ul>
		</nav>
	<?php }?>
<?php }?><?php }} ?>