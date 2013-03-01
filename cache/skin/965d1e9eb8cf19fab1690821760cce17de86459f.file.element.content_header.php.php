<?php /* Smarty version Smarty-3.1.8, created on 2012-11-19 10:08:30
         compiled from "skins/vector/templates/element.content_header.php" */ ?>
<?php /*%%SmartyHeaderCode:207401413250aa051e9b7e86-01243164%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '965d1e9eb8cf19fab1690821760cce17de86459f' => 
    array (
      0 => 'skins/vector/templates/element.content_header.php',
      1 => 1352461075,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '207401413250aa051e9b7e86-01243164',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'SECTION_NAME' => 0,
    'category' => 0,
    'title' => 0,
    'DOCUMENT' => 0,
    'PRODUCT' => 0,
    'LANG' => 0,
    'IS_USER' => 0,
    'ROOT_PATH' => 0,
    'SUBCATS' => 0,
    'subcat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_50aa051ec55852_62759421',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50aa051ec55852_62759421')) {function content_50aa051ec55852_62759421($_smarty_tpl) {?><header class="content-header">
	<div class="row-fluid">
		<div class="<?php if ($_smarty_tpl->tpl_vars['SECTION_NAME']->value=='checkout'||$_smarty_tpl->tpl_vars['SECTION_NAME']->value=='gateway'){?>span6<?php }else{ ?>span8<?php }?>">
			<?php if ($_smarty_tpl->tpl_vars['category']->value['image']){?>
				<div class="content-image">
					<img src="<?php echo $_smarty_tpl->tpl_vars['category']->value['image'];?>
" alt="" />
				</div>
			<?php }?>
			<div class="content-details">
				<h1 class="content-title">
					<?php if ($_smarty_tpl->tpl_vars['title']->value){?>
						<?php echo $_smarty_tpl->tpl_vars['title']->value;?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="category"){?>
						<?php echo $_smarty_tpl->tpl_vars['category']->value['cat_name'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="document"){?>
						<?php echo $_smarty_tpl->tpl_vars['DOCUMENT']->value['doc_name'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="product"){?>
						<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="register"||$_smarty_tpl->tpl_vars['SECTION_NAME']->value=="login"){?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['log_in'];?>
 / <?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['register'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="recover"||$_smarty_tpl->tpl_vars['SECTION_NAME']->value=="recovery"){?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['recover_password'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="search"){?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['advanced'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="giftcertificate"){?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['gift_certificates'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="contact"){?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['documents']['document_contact'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="account"){?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_account'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="download"){?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_downloads'];?>

					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="order"){?>
						<?php if ($_smarty_tpl->tpl_vars['IS_USER']->value){?>
							<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['your_orders'];?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['LANG']->value['account']['lookup_order'];?>

						<?php }?>
					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="checkout"){?>
						<?php if ($_GET['_a']=="basket"){?>
							<?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout']['your_basket'];?>

						<?php }else{ ?>
							<?php echo $_smarty_tpl->tpl_vars['LANG']->value['checkout']['checkout'];?>

						<?php }?>
					<?php }elseif($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="gateway"){?>
						<?php echo $_smarty_tpl->tpl_vars['LANG']->value['gateway']['select'];?>

					<?php }?>
				</h1>
				<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.breadcrumbs.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>

			</div>
		</div>
		<?php if ($_smarty_tpl->tpl_vars['SECTION_NAME']->value=="checkout"||$_smarty_tpl->tpl_vars['SECTION_NAME']->value=="gateway"){?>
			<div class="span6">
				<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/box.progress.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

			</div>
		<?php }else{ ?>
			<div class="span4">
				<div class="search">
					<form action="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
index.php?_a=category" method="post" class="input-append">
						<input name="search[keywords]" type="search" class="input-fill" placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['input_default'];?>
" /><button class="btn" type="button" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['title_search_products'];?>
" onclick="$(this).getForm().submit()"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['search'];?>
</button><button class="btn advanced-search" data-modal-name="advanced-search" data-modal-url="<?php echo $_smarty_tpl->tpl_vars['ROOT_PATH']->value;?>
index.php?_a=search" data-modal-body=".content-search form" type="button" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['search']['advanced'];?>
"><span class="caret"></span></button>
					</form>
				</div>
			</div>
		<?php }?>
	</div>
</header>
<?php if (isset($_smarty_tpl->tpl_vars['SUBCATS']->value)&&$_smarty_tpl->tpl_vars['SUBCATS']->value){?>
	<div class="row-fluid">
		<nav class="category-subcats">
			<ul class="nav nav-pills">
				<?php  $_smarty_tpl->tpl_vars['subcat'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['subcat']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SUBCATS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['subcat']->key => $_smarty_tpl->tpl_vars['subcat']->value){
$_smarty_tpl->tpl_vars['subcat']->_loop = true;
?>
					<li><a href="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['url'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['subcat']->value['cat_name'];?>
"><?php echo $_smarty_tpl->tpl_vars['subcat']->value['cat_name'];?>
</a></li>
				<?php } ?>
			</ul>
		</nav>
	</div>
<?php }?><?php }} ?>