<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:34:55
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/single_switch/single_switch.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1710240674509a556fecc4f2-29729508%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ab2479fac8c8136a652335b04d9a0e527aa1bda7' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/modules/plugins/Fusion/modules/single_switch/single_switch.tpl',
      1 => 1352290526,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1710240674509a556fecc4f2-29729508',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'name' => 0,
    'title' => 0,
    'description' => 0,
    'value' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a556ff37d08_48832070',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a556ff37d08_48832070')) {function content_509a556ff37d08_48832070($_smarty_tpl) {?><label for="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</label>
<input id="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" type="checkbox" class="toggle-switch" name="<?php echo $_smarty_tpl->tpl_vars['name']->value;?>
" value="on" title="<?php echo $_smarty_tpl->tpl_vars['description']->value;?>
" <?php if ($_smarty_tpl->tpl_vars['value']->value){?>checked="checked"<?php }?> /><?php }} ?>