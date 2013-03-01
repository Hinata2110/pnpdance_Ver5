{if isset($ITEMS)}
	<form action="{$VAL_SELF}" method="post" enctype="multipart/form-data" novalidate>
		{if $INCLUDE_CHECKOUT}
			{include file='templates/content.checkout.confirm.php'}
		{else}
			{include file="skins/$SKIN_FOLDER/templates/element.basket.contents.php"}
			{include file="skins/$SKIN_FOLDER/templates/element.basket.review.php"}
		{/if}
	</form>
	{if $RELATED && isset($fusion)}
		<div class="section section-related">
			<h3 class="section-title">{$LANG.catalogue.related_products}</h3>
			<div class="products related-products" data-columns="{$fusion->get('related_product_listings_grid_columns')}">
				{foreach from=$RELATED item=product}
					{include iteration="{$product@iteration}" columns="{$fusion->get('related_products_per_row')}" file="skins/{$SKIN_FOLDER}/templates/element.product.php"}
				{/foreach}
			</div>
		</div>
	{/if}
{else}
	<div class="alert alert-error">
		{$LANG.basket.basket_is_empty}
	</div>
{/if}