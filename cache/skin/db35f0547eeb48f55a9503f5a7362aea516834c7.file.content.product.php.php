<?php /* Smarty version Smarty-3.1.8, created on 2012-11-07 12:51:01
         compiled from "/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/content.product.php" */ ?>
<?php /*%%SmartyHeaderCode:2103767484509a59353ee384-67217764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'db35f0547eeb48f55a9503f5a7362aea516834c7' => 
    array (
      0 => '/hermes/bosweb26a/b1803/ipg.pnpdancecom/skins/vector/templates/content.product.php',
      1 => 1352290518,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2103767484509a59353ee384-67217764',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PRODUCT' => 0,
    'GALLERY' => 0,
    'image' => 0,
    'LANG' => 0,
    'GALLERY_JSON' => 0,
    'VAL_SELF' => 0,
    'MANUFACTURER' => 0,
    'CTRL_REVIEW' => 0,
    'i' => 0,
    'STORE_URL' => 0,
    'SKIN_FOLDER' => 0,
    'REVIEWS' => 0,
    'SHARE' => 0,
    'fusion' => 0,
    'html' => 0,
    'OPTIONS' => 0,
    'option' => 0,
    'value' => 0,
    'price' => 0,
    'OPT' => 0,
    'CTRL_ALLOW_PURCHASE' => 0,
    'CATALOGUE_MODE' => 0,
    'CTRL_HIDE_PRICES' => 0,
    'CTRL_OUT_OF_STOCK' => 0,
    'COMMENTS' => 0,
    'TABS' => 0,
    'TAB' => 0,
    'discount' => 0,
    'PAGINATION' => 0,
    'WRITE' => 0,
    'RATING_STARS' => 0,
    'star' => 0,
    'IS_USER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.8',
  'unifunc' => 'content_509a5935be2bd9_97179256',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509a5935be2bd9_97179256')) {function content_509a5935be2bd9_97179256($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['PRODUCT']->value)&&$_smarty_tpl->tpl_vars['PRODUCT']->value){?>
	<div id="product-<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['product_id'];?>
" class="hproduct row-fluid">
		<div class="row-fluid product-upper">
			<div class="span6">
				<div class="product-images">
					<div class="product-image">
						<a href="<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['source']){?><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['source'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['medium'];?>
<?php }?>" class="product-image-primary <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['magnify']){?>magnify<?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
">
							<img src="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['medium'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
" />
						</a>
					</div>
					<?php if ($_smarty_tpl->tpl_vars['GALLERY']->value&&count($_smarty_tpl->tpl_vars['GALLERY']->value)>1){?>
						<div class="product-gallery">
							<?php  $_smarty_tpl->tpl_vars['image'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['image']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['GALLERY']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['image']->key => $_smarty_tpl->tpl_vars['image']->value){
$_smarty_tpl->tpl_vars['image']->_loop = true;
?>
								<div class="product-thumb">
									<a href="<?php if ($_smarty_tpl->tpl_vars['image']->value['source']){?><?php echo $_smarty_tpl->tpl_vars['image']->value['source'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['image']->value['large'];?>
<?php }?>" data-swap="<?php echo $_smarty_tpl->tpl_vars['image']->value['medium'];?>
" id="image-<?php echo $_smarty_tpl->tpl_vars['image']->value['id'];?>
" rel="gallery" title="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
">
										<img src="<?php echo $_smarty_tpl->tpl_vars['image']->value['gallery'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['click_enlarge'];?>
" />
									</a>
								</div>
							<?php } ?>
						</div>
						<script> var gallery_json = <?php echo $_smarty_tpl->tpl_vars['GALLERY_JSON']->value;?>
 </script>
					<?php }?>
				</div>
			</div>
			<div class="span6">
				<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
" method="post" class="ajax">
					<input type="hidden" name="add" value="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['product_id'];?>
" />
					<div class="product-box">
						<div class="product-information form-horizontal">
							<div class="product-price">
								<span class="price <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['ctrl_sale']){?>sale<?php }?>"><?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['ctrl_sale']){?><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['sale_price'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['price'];?>
<?php }?></span>
							</div>
							<div class="product-details">
								<ul>
									<!-- Product Identification -->
									<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['product_code']){?>
										<li class="product-code" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_code'];?>
">
											<strong class="product-detail-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_code'];?>
</strong>
											<span class="product-detail-value code"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['product_code'];?>
</span>
										</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['upc']){?>
										<li class="product-upc" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_upc'];?>
">
											<strong class="product-detail-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_upc'];?>
</strong>
											<span class="product-detail-value upc"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['upc'];?>
</span>
										</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['ean']){?>
										<li class="product-ean" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_ean'];?>
">
											<strong class="product-detail-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_ean'];?>
</strong>
											<span class="product-detail-value ean"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['ean'];?>
</span>
										</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['jan']){?>
										<li class="product-jan" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_jan'];?>
">
											<strong class="product-detail-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_jan'];?>
</strong>
											<span class="product-detail-value jan"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['jan'];?>
</span>
										</li>
									<?php }?>
									<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['isbn']){?>
										<li class="product-isbn" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_isbn'];?>
">
											<strong class="product-detail-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_isbn'];?>
</strong>
											<span class="product-detail-value isbn"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['isbn'];?>
</span>
										</li>
									<?php }?>
									<!-- Manufacturer / Brand -->
									<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['manufacturer']){?>
										<li class="product-manufacturer" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['manufacturer'];?>
">
											<strong class="product-detail-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['manufacturer'];?>
</strong>
											<span class="product-detail-value manufacturer brand"><?php echo $_smarty_tpl->tpl_vars['MANUFACTURER']->value;?>
</span>
										</li>
									<?php }?>
									<!-- Availability -->
									<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['use_stock_level']&&$_smarty_tpl->tpl_vars['PRODUCT']->value['stock_level']!=false){?>
										<li class="product-stock" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['stock_level'];?>
">
											<strong class="product-detail-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['stock_level'];?>
</strong>
											<span class="product-detail-value availability">
												<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['stock_level']>0){?>
													<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['stock_available'];?>

												<?php }else{ ?>
													<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short'];?>

												<?php }?>
											</span>
										</li>
									<?php }?>
									<!-- Review Aggregate -->
									<?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['review_score']&&$_smarty_tpl->tpl_vars['CTRL_REVIEW']->value){?>
										<li class="hreview-aggregate" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['average_rating'];?>
">
											<strong class="product-detail-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['average_rating'];?>
</strong>
											<a href="javascript:;" onclick="$('a[href=#reviews]').tab('show')" class="stars">
												<?php  $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['i']->value = 1;
  if ($_smarty_tpl->tpl_vars['i']->value<=5){ for ($_foo=true;$_smarty_tpl->tpl_vars['i']->value<=5; $_smarty_tpl->tpl_vars['i']->value++){
?>
													<?php if (($_smarty_tpl->tpl_vars['PRODUCT']->value['review_score']>=$_smarty_tpl->tpl_vars['i']->value)||($_smarty_tpl->tpl_vars['PRODUCT']->value['review_score']>($_smarty_tpl->tpl_vars['i']->value-1)&&$_smarty_tpl->tpl_vars['PRODUCT']->value['review_score']<$_smarty_tpl->tpl_vars['i']->value)){?>
														<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/img/star-on.png" alt="" />
													<?php }else{ ?>
														<img src="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/skins/<?php echo $_smarty_tpl->tpl_vars['SKIN_FOLDER']->value;?>
/img/star-off.png" alt="" />
													<?php }?>
												<?php }} ?>
											</a>
											<span class="item"><span class="fn"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['name'];?>
</span></span>
											<span class="rating">
												<span class="average"><?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['review_score'];?>
</span>
												<span class="best">5</span>
												<span class="count"><?php echo count($_smarty_tpl->tpl_vars['REVIEWS']->value);?>
</span>
											</span>
										</li>
									<?php }?>
									<!-- Social Bookmarks -->
									<?php if ($_smarty_tpl->tpl_vars['SHARE']->value&&isset($_smarty_tpl->tpl_vars['fusion']->value)){?>
										<li class="product-bookmarks">
											<?php  $_smarty_tpl->tpl_vars['html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['html']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['SHARE']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['html']->key => $_smarty_tpl->tpl_vars['html']->value){
$_smarty_tpl->tpl_vars['html']->_loop = true;
?>
												<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

											<?php } ?>
										</li>
									<?php }?>
								</ul>
							</div><!-- /.product-details -->
							<div class="product-options">
								<?php if (isset($_smarty_tpl->tpl_vars['OPTIONS']->value)&&is_array($_smarty_tpl->tpl_vars['OPTIONS']->value)){?>
									<?php  $_smarty_tpl->tpl_vars['option'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['option']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['OPTIONS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['option']->key => $_smarty_tpl->tpl_vars['option']->value){
$_smarty_tpl->tpl_vars['option']->_loop = true;
?>
										<div class="control-group">
											<label class="control-label" for="product-option-<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
">
												<?php echo $_smarty_tpl->tpl_vars['option']->value['option_name'];?>

											</label>
											<div class="controls">
												<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=='0'){?>
													<select id="product-option-<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" name="productOptions[<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
]" <?php if ($_smarty_tpl->tpl_vars['option']->value['required']){?>required<?php }?> class="input-fill chzn-select">
														<option value="" data-symbol="" data-price=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['form']['please_select'];?>
</option>
														<?php  $_smarty_tpl->tpl_vars['value'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['value']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['option']->value['values']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['value']->key => $_smarty_tpl->tpl_vars['value']->value){
$_smarty_tpl->tpl_vars['value']->_loop = true;
?>
															<option value="<?php echo $_smarty_tpl->tpl_vars['value']->value['assign_id'];?>
" data-symbol="<?php echo $_smarty_tpl->tpl_vars['value']->value['symbol'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
">
																<?php echo $_smarty_tpl->tpl_vars['value']->value['value_name'];?>

																<?php if ($_smarty_tpl->tpl_vars['value']->value['price']){?>(<?php echo $_smarty_tpl->tpl_vars['value']->value['symbol'];?>
<?php echo $_smarty_tpl->tpl_vars['value']->value['price'];?>
)<?php }?>
															</option>
														<?php } ?>
													</select>
												<?php }else{ ?>
													<?php $_smarty_tpl->tpl_vars['price'] = new Smarty_variable(preg_replace('/[^0-9-.]/','',$_smarty_tpl->tpl_vars['option']->value['price']), null, 0);?>
													<?php if ($_smarty_tpl->tpl_vars['price']->value>0){?><div class="input-append"><?php }?>
														<?php if ($_smarty_tpl->tpl_vars['option']->value['type']=='1'){?><input type="text" id="product-option-<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" name="productOptions[<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
][<?php echo $_smarty_tpl->tpl_vars['OPT']->value['assign_id'];?>
]" data-symbol="<?php echo $_smarty_tpl->tpl_vars['option']->value['symbol'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['option']->value['price'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['required']){?>required<?php }?> class="input-fill" /><?php }elseif($_smarty_tpl->tpl_vars['option']->value['type']=='2'){?><textarea id="product-option-<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
" name="productOptions[<?php echo $_smarty_tpl->tpl_vars['option']->value['option_id'];?>
][<?php echo $_smarty_tpl->tpl_vars['OPT']->value['assign_id'];?>
]" data-symbol="<?php echo $_smarty_tpl->tpl_vars['option']->value['symbol'];?>
" data-price="<?php echo $_smarty_tpl->tpl_vars['option']->value['price'];?>
" <?php if ($_smarty_tpl->tpl_vars['option']->value['required']){?>required<?php }?> class="input-fill" style="margin: 0;"></textarea><?php }?><?php if ($_smarty_tpl->tpl_vars['price']->value>0){?><span class="add-on"><?php echo $_smarty_tpl->tpl_vars['option']->value['symbol'];?>
<?php echo $_smarty_tpl->tpl_vars['option']->value['price'];?>
</span><?php }?>
													<?php if ($_smarty_tpl->tpl_vars['price']->value>0){?></div><?php }?>												
												<?php }?>
											</div><!-- /.controls -->
										</div><!-- /.control-group -->
									<?php } ?>
								<?php }?>
								<div class="control-group">
									<label for="product-quantity" class="control-label"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['quantity'];?>
</label>
									<div class="controls">
										<input type="number" id="product-quantity" name="quantity" value="1" min="1" <?php if ($_smarty_tpl->tpl_vars['PRODUCT']->value['stock_level']){?>max="<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['stock_level'];?>
"<?php }?> class="input-mini" required />
									</div>
								</div>
							</div><!-- /.product-options -->
						</div><!-- /.product-information -->
						<div class="product-actions">
							<?php if (($_smarty_tpl->tpl_vars['CTRL_ALLOW_PURCHASE']->value)&&(!$_smarty_tpl->tpl_vars['CATALOGUE_MODE']->value)){?>
								<a href="#submit" class="btn btn-primary btn-large" title="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>
">
									<i class="icon-shopping-cart icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['add_to_basket'];?>

								</a>
							<?php }elseif($_smarty_tpl->tpl_vars['CTRL_HIDE_PRICES']->value){?>
							  	<a href="<?php echo $_smarty_tpl->tpl_vars['STORE_URL']->value;?>
/index.php?_a=login" class="btn btn-primary btn-large"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['login_to_view'];?>
</a>
							<?php }elseif($_smarty_tpl->tpl_vars['CTRL_OUT_OF_STOCK']->value){?>
							  	<span class="btn btn-large btn-danger disabled"><?php if ($_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short']){?><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['out_of_stock_short'];?>
<?php }else{ ?><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['stock_unavailable'];?>
<?php }?></span>
							<?php }?>
						</div><!-- /.product-actions -->
					</div><!-- /.product-box -->
				</form>
			</div>
		</div><!-- /.product-upper -->
		<div class="row-fluid product-lower">
			<div class="product-content">
				<div class="tabbable">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#description" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['description'];?>
</a></li>
						<?php if (isset($_smarty_tpl->tpl_vars['PRODUCT']->value['discounts'])){?>
							<li><a href="#discounts" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['quantity_discounts'];?>
</a></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['CTRL_REVIEW']->value){?>
							<li><a href="#reviews" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['customer_reviews'];?>
</a></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['COMMENTS']->value&&isset($_smarty_tpl->tpl_vars['fusion']->value)&&$_smarty_tpl->tpl_vars['fusion']->value->get("tabbed_social_comments")){?>
							<li><a href="#comments" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['comments'];?>
</a></li>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['TABS']->value){?>
							<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TABS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
								<li><a href="#<?php echo $_smarty_tpl->tpl_vars['TAB']->value['anchor'];?>
" data-toggle="tab"><?php echo $_smarty_tpl->tpl_vars['TAB']->value['name'];?>
</a></li>
							<?php } ?>
						<?php }?>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active content-typography" id="description">
							<?php echo $_smarty_tpl->tpl_vars['PRODUCT']->value['description'];?>

						</div>
						<?php if (isset($_smarty_tpl->tpl_vars['PRODUCT']->value['discounts'])){?>
							<div class="tab-pane" id="discounts">
								<p><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['quantity_discounts_explained'];?>
</p>
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['quantity'];?>
</th>
											<th><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['price_per_unit'];?>
</th>
										</tr>
									</thead>
									<tbody>
										<?php  $_smarty_tpl->tpl_vars['discount'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['discount']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['PRODUCT']->value['discounts']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['discount']->key => $_smarty_tpl->tpl_vars['discount']->value){
$_smarty_tpl->tpl_vars['discount']->_loop = true;
?>
											<tr>
												<td><?php echo $_smarty_tpl->tpl_vars['discount']->value['quantity'];?>
+</td>
												<td><?php echo $_smarty_tpl->tpl_vars['discount']->value['price'];?>
</td>
											</tr>
										<?php } ?>
									</tbody>
								</table>
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['CTRL_REVIEW']->value){?>
							<div class="tab-pane" id="reviews">
								<?php if (isset($_smarty_tpl->tpl_vars['REVIEWS']->value)){?>
									<div class="product-reviews">
										<?php  $_smarty_tpl->tpl_vars['review'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['review']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['REVIEWS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['review']->key => $_smarty_tpl->tpl_vars['review']->value){
$_smarty_tpl->tpl_vars['review']->_loop = true;
?>
											<?php echo $_smarty_tpl->getSubTemplate ("skins/".($_smarty_tpl->tpl_vars['SKIN_FOLDER']->value)."/templates/element.review.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 1);?>

										<?php } ?>
										<?php if (isset($_smarty_tpl->tpl_vars['PAGINATION']->value)){?><?php echo $_smarty_tpl->tpl_vars['PAGINATION']->value;?>
<?php }?>
									</div><!-- /.product-reviews -->
								<?php }?>
								<div class="product-reviews-write">
									<form action="<?php echo $_smarty_tpl->tpl_vars['VAL_SELF']->value;?>
#reviews" method="post">
										<h3 class="product-reviews-write-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['write_review'];?>
</h3>
										<div class="row-fluid">
											<div class="span6">
												<div class="row-fluid">
													<label for="review-title"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['review_title'];?>
</label>
													<input type="text" name="review[title]" value="<?php echo $_smarty_tpl->tpl_vars['WRITE']->value['title'];?>
" required placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['review_title'];?>
" id="review-title" class="input-fill" />
												</div>
												<div class="row-fluid">
													<label for="review-text" class="return"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['review'];?>
</label>
													<textarea id="review-text" name="review[review]" required placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['review'];?>
" class="input-fill"><?php echo $_smarty_tpl->tpl_vars['WRITE']->value['review'];?>
</textarea>
												</div>
												<?php echo $_smarty_tpl->getSubTemplate ('templates/content.recaptcha.php', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

											</div>
											<div class="span6">
												<div class="row-fluid">
													<label for="review-stars"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['documents']['rating'];?>
</label>
													<div id="rating">
														<?php  $_smarty_tpl->tpl_vars['star'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['star']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['RATING_STARS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['star']->key => $_smarty_tpl->tpl_vars['star']->value){
$_smarty_tpl->tpl_vars['star']->_loop = true;
?>
															<input type="radio" id="rating-<?php echo $_smarty_tpl->tpl_vars['star']->value['value'];?>
" name="rating" value="<?php echo $_smarty_tpl->tpl_vars['star']->value['value'];?>
" class="rating" <?php echo $_smarty_tpl->tpl_vars['star']->value['checked'];?>
 />
														<?php } ?>
													</div>
												</div>
												<?php if ($_smarty_tpl->tpl_vars['IS_USER']->value){?>
													<div class="row-fluid">
														<div class="form-inline">
															<label for="review-anonymous"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['post_anonymously'];?>
</label>
															<input type="checkbox" name="review[anon]" value="1" id="review-anonymous" />
														</div>
													</div>
												<?php }else{ ?>
													<div class="row-fluid">
														<label for="review-name"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['name'];?>
</label>
														<input type="text" name="review[name]" value="<?php echo $_smarty_tpl->tpl_vars['WRITE']->value['name'];?>
" required placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['your_name'];?>
" id="review-name" class="input-fill" />
													</div>
													<div class="row-fluid">
														<label for="review-email"><?php echo $_smarty_tpl->tpl_vars['LANG']->value['common']['email'];?>
</label>
														<input type="email" name="review[email]" value="<?php echo $_smarty_tpl->tpl_vars['WRITE']->value['email'];?>
" required placeholder="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['your_email'];?>
" id="review-email" class="input-fill" />
													</div>
												<?php }?>
											</div>
										</div>
										<div class="actions">
											<button type="submit" value="<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['submit_review'];?>
" class="btn btn-large btn-success"><i class="icon-comment icon-white"></i> <?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['submit_review'];?>
</button>
										</div>									
									</form>
								</div><!-- /.product-reviews-write -->
							</div>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['COMMENTS']->value&&isset($_smarty_tpl->tpl_vars['fusion']->value)&&$_smarty_tpl->tpl_vars['fusion']->value->get("tabbed_social_comments")){?>
							<div class="tab-pane" id="comments">
								<?php  $_smarty_tpl->tpl_vars['html'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['html']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['COMMENTS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['html']->key => $_smarty_tpl->tpl_vars['html']->value){
$_smarty_tpl->tpl_vars['html']->_loop = true;
?>
									<div class="comments-plugin">
										<?php echo $_smarty_tpl->tpl_vars['html']->value;?>

									</div>
								<?php } ?>
							</div>
						<?php }?>
						
						<?php if ($_smarty_tpl->tpl_vars['TABS']->value){?>
							<?php  $_smarty_tpl->tpl_vars['tab'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tab']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['TABS']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tab']->key => $_smarty_tpl->tpl_vars['tab']->value){
$_smarty_tpl->tpl_vars['tab']->_loop = true;
?>
								<div class="tab-pane product-plugin-tab" id="<?php echo $_smarty_tpl->tpl_vars['TAB']->value['anchor'];?>
">
									<?php echo $_smarty_tpl->tpl_vars['TAB']->value['content'];?>

								</div>
							<?php } ?>
						<?php }?>
					</div><!-- /.tab-content -->
				</div><!-- /.tabbable -->
			</div><!-- /.product-content -->
		</div><!-- /.product-lower -->
	</div><!-- /.hproduct -->
<?php }else{ ?>
	<p class="alert alert-error">
		<?php echo $_smarty_tpl->tpl_vars['LANG']->value['catalogue']['product_doesnt_exist'];?>

	</p>
<?php }?><?php }} ?>