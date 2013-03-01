{$span = floor(12 / (int)$columns)}
{$firstInRow = (($iteration - 1) % $columns == 0) ? "firstInRow" : ""}
{$lastInRow = ($iteration % $columns == 0) ? "lastInRow" : ""}
{if $firstInRow}<div class="products-row">{/if}
<div id="product-{$product.product_id}" class="span{$span} {$firstInRow} {$lastInRow} product">
	<div class="wrapper">
		<form action="{$VAL_SELF}" method="post" enctype="application/x-www-form-urlencoded" class="ajax">
			<input type="hidden" name="add[{$product.product_id}][quantity]" value="1" class="quantity" />
			<div class="product-image">
				{$skinData = $GLOBALS['gui']->getSkinData()}
				{$height = $skinData.images.small.maximum}
				<a href="{$product.url}" title="{$product.name}" {if $height}style="height: {$height}px; line-height: {$height}px;"{/if}>
  					<img src="{if $product.small}{$product.small}{else}{$product.image}{/if}" alt="{$product.name}" />
				</a>
			</div><!-- /.product-image -->
			<div class="product-details">
				<div class="product-title">
					<a href="{$product.url}" title="{$product.name}">{$product.name}</a>
				</div>
				{if strlen({$product.description_short})}
					<div class="product-description">
						{strip_tags($product.description_short)}
					</div>
				{/if}
				{if $product.review_score}
					<div class="product-rating">
						{for $i = 1; $i <= 5; $i++}
							{if $product.review_score >= $i || ($product.review_score > ($i - 1) && $product.review_score < $i)}
								<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/star-on.png" alt="" />
							{else}
								<img src="{$STORE_URL}/skins/{$SKIN_FOLDER}/img/star-off.png" alt="" />
							{/if}
						{/for}
					</div>
				{/if}
				{if !$CATALOGUE_MODE}
					<div class="product-price">
						{if $product.ctrl_sale}{$product.sale_price}{else}{$product.price}{/if}
					</div>
				{/if}
			</div><!-- /.product-details -->
			{if !$CATALOGUE_MODE}
				<div class="product-actions">
					{if ($product.ctrl_stock || $product.ctrl_purchase) && !$CATALOGUE_MODE}
						<a href="#submit" class="btn btn-small btn-primary" title="{$LANG.catalogue.add_to_basket}">
							<i class="icon-shopping-cart icon-white"></i> {$LANG.catalogue.add_to_basket}
						</a>
					{elseif !$CATALOGUE_MODE && $LANG.catalogue.out_of_stock_short}
						<a href="{$product.url}" class="btn btn-small btn-danger">
							<i class="icon-shopping-cart icon-white"></i> {$LANG.catalogue.out_of_stock_short}
						</a>
					{/if}
				</div>
			{/if}
			{if $product.ctrl_sale}
				{strip}
					<a href="{$product.url}" class="sale-badge">
						<span class="saving">{$LANG.catalogue.saving}</span>
						<span class="value">{round(100*($product.price_unformatted-$product.sale_price_unformatted) / $product.price_unformatted)}</span>
						<span class="percentage">%</span>
					</a>
				{/strip}
			{/if}
		</form>
	</div><!-- /.wrapper -->
</div><!-- /.product -->
{if $lastInRow}</div>{/if}