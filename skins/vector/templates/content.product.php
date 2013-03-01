{if isset($PRODUCT) && $PRODUCT}
	<div id="product-{$PRODUCT.product_id}" class="hproduct row-fluid">
		<div class="row-fluid product-upper">
			<div class="span6">
				<div class="product-images">
					<div class="product-image">
						<a href="{if $PRODUCT.source}{$PRODUCT.source}{else}{$PRODUCT.medium}{/if}" class="product-image-primary {if $PRODUCT.magnify}magnify{/if}" title="{$PRODUCT.name}">
							<img src="{$PRODUCT.medium}" alt="{$PRODUCT.name}" />
						</a>
					</div>
					{if $GALLERY && count($GALLERY) > 1}
						<div class="product-gallery">
							{foreach from=$GALLERY item=image}
								<div class="product-thumb">
									<a href="{if $image.source}{$image.source}{else}{$image.large}{/if}" data-swap="{$image.medium}" id="image-{$image.id}" rel="gallery" title="{$PRODUCT.name}">
										<img src="{$image.gallery}" alt="{$PRODUCT.name}" title="{$LANG.catalogue.click_enlarge}" />
									</a>
								</div>
							{/foreach}
						</div>
						<script> var gallery_json = {$GALLERY_JSON} </script>
					{/if}
				</div>
			</div>
			<div class="span6">
				<form action="{$VAL_SELF}" method="post" class="ajax">
					<input type="hidden" name="add" value="{$PRODUCT.product_id}" />
					<div class="product-box">
						<div class="product-information form-horizontal">
							<div class="product-price">
								<span class="price {if $PRODUCT.ctrl_sale}sale{/if}">{if $PRODUCT.ctrl_sale}{$PRODUCT.sale_price}{else}{$PRODUCT.price}{/if}</span>
							</div>
							<div class="product-details">
								<ul>
									<!-- Product Identification -->
									{if $PRODUCT.product_code}
										<li class="product-code" title="{$LANG.catalogue.product_code}">
											<strong class="product-detail-name">{$LANG.catalogue.product_code}</strong>
											<span class="product-detail-value code">{$PRODUCT.product_code}</span>
										</li>
									{/if}
									{if $PRODUCT.upc}
										<li class="product-upc" title="{$LANG.catalogue.product_upc}">
											<strong class="product-detail-name">{$LANG.catalogue.product_upc}</strong>
											<span class="product-detail-value upc">{$PRODUCT.upc}</span>
										</li>
									{/if}
									{if $PRODUCT.ean}
										<li class="product-ean" title="{$LANG.catalogue.product_ean}">
											<strong class="product-detail-name">{$LANG.catalogue.product_ean}</strong>
											<span class="product-detail-value ean">{$PRODUCT.ean}</span>
										</li>
									{/if}
									{if $PRODUCT.jan}
										<li class="product-jan" title="{$LANG.catalogue.product_jan}">
											<strong class="product-detail-name">{$LANG.catalogue.product_jan}</strong>
											<span class="product-detail-value jan">{$PRODUCT.jan}</span>
										</li>
									{/if}
									{if $PRODUCT.isbn}
										<li class="product-isbn" title="{$LANG.catalogue.product_isbn}">
											<strong class="product-detail-name">{$LANG.catalogue.product_isbn}</strong>
											<span class="product-detail-value isbn">{$PRODUCT.isbn}</span>
										</li>
									{/if}
									<!-- Manufacturer / Brand -->
									{if $PRODUCT.manufacturer}
										<li class="product-manufacturer" title="{$LANG.catalogue.manufacturer}">
											<strong class="product-detail-name">{$LANG.catalogue.manufacturer}</strong>
											<span class="product-detail-value manufacturer brand">{$MANUFACTURER}</span>
										</li>
									{/if}
									<!-- Availability -->
									{if $PRODUCT.use_stock_level && $PRODUCT.stock_level != false}
										<li class="product-stock" title="{$LANG.catalogue.stock_level}">
											<strong class="product-detail-name">{$LANG.catalogue.stock_level}</strong>
											<span class="product-detail-value availability">
												{if $PRODUCT.stock_level > 0}
													{$LANG.catalogue.stock_available}
												{else}
													{$LANG.catalogue.out_of_stock_short}
												{/if}
											</span>
										</li>
									{/if}
									<!-- Review Aggregate -->
									{if $PRODUCT.review_score && $CTRL_REVIEW}
										<li class="hreview-aggregate" title="{$LANG.catalogue.average_rating}">
											<strong class="product-detail-name">{$LANG.catalogue.average_rating}</strong>
											<a href="javascript:;" onclick="$('a[href=#reviews]').tab('show')" class="stars">
												{for $i=1; $i<=5; $i++}
													{if ($PRODUCT.review_score >= $i) || ($PRODUCT.review_score > ($i - 1) && $PRODUCT.review_score < $i)}
														<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/star-on.png" alt="" />
													{else}
														<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/star-off.png" alt="" />
													{/if}
												{/for}
											</a>
											<span class="item"><span class="fn">{$PRODUCT.name}</span></span>
											<span class="rating">
												<span class="average">{$PRODUCT.review_score}</span>
												<span class="best">5</span>
												<span class="count">{$REVIEWS|@count}</span>
											</span>
										</li>
									{/if}
									<!-- Social Bookmarks -->
									{if $SHARE && isset($fusion)}
										<li class="product-bookmarks">
											{foreach from=$SHARE item=html}
												{$html}
											{/foreach}
										</li>
									{/if}
								</ul>
							</div><!-- /.product-details -->
							<div class="product-options">
								{if isset($OPTIONS) && is_array($OPTIONS)}
									{foreach from=$OPTIONS item=option}
										<div class="control-group">
											<label class="control-label" for="product-option-{$option.option_id}">
												{$option.option_name}
											</label>
											<div class="controls">
												{if $option.type == '0'}
													<select id="product-option-{$option.option_id}" name="productOptions[{$option.option_id}]" {if $option.required}required{/if} class="input-fill chzn-select">
														<option value="" data-symbol="" data-price="">{$LANG.form.please_select}</option>
														{foreach from=$option.values item=value}
															<option value="{$value.assign_id}" data-symbol="{$value.symbol}" data-price="{$value.price}">
																{$value.value_name}
																{if $value.price}({$value.symbol}{$value.price}){/if}
															</option>
														{/foreach}
													</select>
												{else}
													{$price = preg_replace('/[^0-9-.]/', '', $option.price)}
													{if $price > 0}<div class="input-append">{/if}
														{strip}
															{if $option.type == '1'}
																<input type="text" id="product-option-{$option.option_id}" name="productOptions[{$option.option_id}][{$OPT.assign_id}]" data-symbol="{$option.symbol}" data-price="{$option.price}" {if $option.required}required{/if} class="input-fill" />
													
															{else if $option.type == '2'}
																<textarea id="product-option-{$option.option_id}" name="productOptions[{$option.option_id}][{$OPT.assign_id}]" data-symbol="{$option.symbol}" data-price="{$option.price}" {if $option.required}required{/if} class="input-fill" style="margin: 0;"></textarea>
															{/if}
															{if $price > 0}<span class="add-on">{$option.symbol}{$option.price}</span>{/if}
														{/strip}
													{if $price > 0}</div>{/if}												
												{/if}
											</div><!-- /.controls -->
										</div><!-- /.control-group -->
									{/foreach}
								{/if}
								<div class="control-group">
									<label for="product-quantity" class="control-label">{$LANG.common.quantity}</label>
									<div class="controls">
										<input type="number" id="product-quantity" name="quantity" value="1" min="1" {if $PRODUCT.stock_level}max="{$PRODUCT.stock_level}"{/if} class="input-mini" required />
									</div>
								</div>
							</div><!-- /.product-options -->
						</div><!-- /.product-information -->
						<div class="product-actions">
							{if ($CTRL_ALLOW_PURCHASE) && (!$CATALOGUE_MODE)}
								<a href="#submit" class="btn btn-primary btn-large" title="{$LANG.catalogue.add_to_basket}">
									<i class="icon-shopping-cart icon-white"></i> {$LANG.catalogue.add_to_basket}
								</a>
							{elseif $CTRL_HIDE_PRICES}
							  	<a href="{$STORE_URL}/index.php?_a=login" class="btn btn-primary btn-large">{$LANG.catalogue.login_to_view}</a>
							{else if $CTRL_OUT_OF_STOCK}
							  	<span class="btn btn-large btn-danger disabled">{if $LANG.catalogue.out_of_stock_short}{$LANG.catalogue.out_of_stock_short}{else}{$LANG.catalogue.stock_unavailable}{/if}</span>
							{/if}
						</div><!-- /.product-actions -->
					</div><!-- /.product-box -->
				</form>
			</div>
		</div><!-- /.product-upper -->
		<div class="row-fluid product-lower">
			<div class="product-content">
				<div class="tabbable">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#description" data-toggle="tab">{$LANG.common.description}</a></li>
						{if isset($PRODUCT.discounts)}
							<li><a href="#discounts" data-toggle="tab">{$LANG.catalogue.quantity_discounts}</a></li>
						{/if}
						{if $CTRL_REVIEW}
							<li><a href="#reviews" data-toggle="tab">{$LANG.catalogue.customer_reviews}</a></li>
						{/if}
						{if $COMMENTS && isset($fusion) && $fusion->get("tabbed_social_comments")}
							<li><a href="#comments" data-toggle="tab">{$LANG.common.comments}</a></li>
						{/if}
						{* Not CubeCart V5 feature yet, but can be used by plugins *}
						{if $TABS}
							{foreach from=$TABS item=tab}
								<li><a href="#{$TAB.anchor}" data-toggle="tab">{$TAB.name}</a></li>
							{/foreach}
						{/if}
					</ul>
					<div class="tab-content">
						<div class="tab-pane active content-typography" id="description">
							{$PRODUCT.description}
						</div>
						{if isset($PRODUCT.discounts)}
							<div class="tab-pane" id="discounts">
								<p>{$LANG.catalogue.quantity_discounts_explained}</p>
								<table class="table table-bordered table-striped">
									<thead>
										<tr>
											<th>{$LANG.common.quantity}</th>
											<th>{$LANG.catalogue.price_per_unit}</th>
										</tr>
									</thead>
									<tbody>
										{foreach from=$PRODUCT.discounts item=discount}
											<tr>
												<td>{$discount.quantity}+</td>
												<td>{$discount.price}</td>
											</tr>
										{/foreach}
									</tbody>
								</table>
							</div>
						{/if}
						{if $CTRL_REVIEW}
							<div class="tab-pane" id="reviews">
								{if isset($REVIEWS)}
									<div class="product-reviews">
										{foreach from=$REVIEWS item=review}
											{include scope=parent file="skins/$SKIN_FOLDER/templates/element.review.php"}
										{/foreach}
										{if isset($PAGINATION)}{$PAGINATION}{/if}
									</div><!-- /.product-reviews -->
								{/if}
								<div class="product-reviews-write">
									<form action="{$VAL_SELF}#reviews" method="post">
										<h3 class="product-reviews-write-title">{$LANG.catalogue.write_review}</h3>
										<div class="row-fluid">
											<div class="span6">
												<div class="row-fluid">
													<label for="review-title">{$LANG.catalogue.review_title}</label>
													<input type="text" name="review[title]" value="{$WRITE.title}" required placeholder="{$LANG.catalogue.review_title}" id="review-title" class="input-fill" />
												</div>
												<div class="row-fluid">
													<label for="review-text" class="return">{$LANG.catalogue.review}</label>
													<textarea id="review-text" name="review[review]" required placeholder="{$LANG.catalogue.review}" class="input-fill">{$WRITE.review}</textarea>
												</div>
												{include file='templates/content.recaptcha.php'}
											</div>
											<div class="span6">
												<div class="row-fluid">
													<label for="review-stars">{$LANG.documents.rating}</label>
													<div id="rating">
														{foreach from=$RATING_STARS item=star}
															<input type="radio" id="rating-{$star.value}" name="rating" value="{$star.value}" class="rating" {$star.checked} />
														{/foreach}
													</div>
												</div>
												{if $IS_USER}
													<div class="row-fluid">
														<div class="form-inline">
															<label for="review-anonymous">{$LANG.catalogue.post_anonymously}</label>
															<input type="checkbox" name="review[anon]" value="1" id="review-anonymous" />
														</div>
													</div>
												{else}
													<div class="row-fluid">
														<label for="review-name">{$LANG.common.name}</label>
														<input type="text" name="review[name]" value="{$WRITE.name}" required placeholder="{$LANG.catalogue.your_name}" id="review-name" class="input-fill" />
													</div>
													<div class="row-fluid">
														<label for="review-email">{$LANG.common.email}</label>
														<input type="email" name="review[email]" value="{$WRITE.email}" required placeholder="{$LANG.catalogue.your_email}" id="review-email" class="input-fill" />
													</div>
												{/if}
											</div>
										</div>
										<div class="actions">
											<button type="submit" value="{$LANG.catalogue.submit_review}" class="btn btn-large btn-success"><i class="icon-comment icon-white"></i> {$LANG.catalogue.submit_review}</button>
										</div>									
									</form>
								</div><!-- /.product-reviews-write -->
							</div>
						{/if}
						{if $COMMENTS && isset($fusion) && $fusion->get("tabbed_social_comments")}
							<div class="tab-pane" id="comments">
								{foreach from=$COMMENTS item=html}
									<div class="comments-plugin">
										{$html}
									</div>
								{/foreach}
							</div>
						{/if}
						{* Not CubeCart V5 feature yet, but can be used by plugins *}
						{if $TABS}
							{foreach from=$TABS item=tab}
								<div class="tab-pane product-plugin-tab" id="{$TAB.anchor}">
									{$TAB.content}
								</div>
							{/foreach}
						{/if}
					</div><!-- /.tab-content -->
				</div><!-- /.tabbable -->
			</div><!-- /.product-content -->
		</div><!-- /.product-lower -->
	</div><!-- /.hproduct -->
{else}
	<p class="alert alert-error">
		{$LANG.catalogue.product_doesnt_exist}
	</p>
{/if}