<div class="box box-featured">
	<div class="wrapper">
		<h3 class="box-title">{$LANG.catalogue.title_feature}</h3>
		<div class="product">
			<div class="wrapper">
				<form action="{$VAL_SELF}" method="post" enctype="application/x-www-form-urlencoded" class="ajax">
					<input type="hidden" name="add[{$featured.product_id}][quantity]" value="1" class="quantity" />
					<div class="product-image">
						<a href="{$featured.url}" title="{$featured.name}">
		  					<img src="{$featured.image}" alt="{$featured.name}" />
						</a>
					</div><!-- /.product-image -->
					<div class="product-details">
						<div class="product-title">
							<a href="{$featured.url}" title="{$featured.name}">{$featured.name}</a>
						</div>
						{if $featured.review_score}
							<div class="product-rating">
								{for $i = 1; $i <= 5; $i++}
									{if $featured.review_score >= $i || ($featured.review_score > ($i - 1) && $featured.review_score < $i)}
										<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/star-on.png" alt="" />
									{else}
										<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/star-off.png" alt="" />
									{/if}
								{/for}
							</div>
						{/if}
						{if !$CATALOGUE_MODE && isset($fusion) && $fusion->get("featured_product_add_to_cart")}
							<div class="product-price">
								{if $featured.ctrl_sale}{$featured.sale_price}{else}{$featured.price}{/if}
							</div>
			  				<div class="product-actions">
								{if $featured.ctrl_stock || $featured.ctrl_purchase}
									<a href="#submit" class="btn btn-small btn-primary" title="{$LANG.catalogue.add_to_basket}">
										<i class="icon-shopping-cart icon-white"></i> {$LANG.catalogue.add_to_basket}
									</a>
								{elseif $LANG.catalogue.out_of_stock_short}
									<span class="btn btn-small btn-danger btn-disabled">
										<i class="icon-shopping-cart icon-white"></i> {$LANG.catalogue.out_of_stock_short}
									</span>
								{/if}
			  				</div>
						{/if}
					</div><!-- /.product-details -->
					{if $featured.ctrl_sale}
						{strip}
							<a href="{$featured.url}" class="sale-badge">
								<span class="saving">{$LANG.catalogue.saving}</span>
								<span class="value">{round(100*($featured.price_unformatted-$featured.sale_price_unformatted) / $featured.price_unformatted)}</span>
								<span class="percentage">%</span>
							</a>
						{/strip}
					{/if}
				</form>
			</div><!-- /.wrapper -->
		</div><!-- /.product -->
	</div><!-- /.wrapper -->
</div><!-- /.box .box-featured -->