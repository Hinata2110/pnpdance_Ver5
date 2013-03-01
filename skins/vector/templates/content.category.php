<!-- Category Description -->
{if $category.cat_desc}
	<div class="category-description">
		<blockquote>
			{$category.cat_desc}
		</blockquote>
	</div>
{/if}

<!-- Category Products Listings -->
<div class="row-fluid padding-r">
	{if isset($PRODUCTS) && isset($fusion)}
		{include file="skins/$SKIN_FOLDER/templates/element.control.php"}
		<div class="products category-products" data-columns="{$fusion->get('category_product_listings_grid_columns')}">
			{foreach from=$PRODUCTS item=product}
				{include iteration="{$product@iteration}" columns="{$fusion->get('category_products_per_row')}" file="skins/{$SKIN_FOLDER}/templates/element.product.php"}
			{/foreach}
		</div>
		{if isset($PAGINATION)}
			<nav class="products-pagination">{$PAGINATION}</nav>
		{/if}
	{else}
		<p class="alert">
			{$LANG.category.no_products}
		</p>
	{/if}
</div>