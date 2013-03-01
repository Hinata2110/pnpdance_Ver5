<h1>{$DOCUMENT.title}</h1>
  {$DOCUMENT.content}
<!-- Latest Products Listings -->
<div class="row-fluid">
	<div class="products latest-products" data-columns="{$fusion->get('latest_product_listings_grid_columns')}">
		{foreach from=$LATEST_PRODUCTS item=product}
			{include iteration="{$product@iteration}" columns="{$fusion->get('latest_products_per_row')}" file="skins/{$SKIN_FOLDER}/templates/element.product.php"}
		{/foreach}
	</div>
</div>