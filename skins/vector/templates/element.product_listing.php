<li>
	<form action="{$VAL_SELF}" method="post" enctype="application/x-www-form-urlencoded" class="ajax">
		<input type="hidden" name="add[{$product.product_id}][quantity]" value="1" class="quantity" />
		{if $product.thumbnail || $product.image}
			<a href="{$product.url}" title="{$product.name}" class="product-image">
				<img src="{if $product.thumbnail}{$product.thumbnail}{else}{$product.image}{/if}" alt="{$item.name}" />
			</a>
		{/if}
		<a href="{$product.url}" title="{$product.name}" class="product-title">
			{if $quantities && $product.quantity}{$product.quantity} &times; {/if}{$product.name}
		</a><br />
		<span class="product-price">&rarr; {if $product.total}{$product.total}{else if $product.ctrl_sale}{$product.sale_price}{else}{$product.price}{/if}</span><br />
		{if $actions}
			<div class="product-actions">
				<a href="#submit" class="btn btn-primary btn-mini" title="{$LANG.catalogue.add_to_basket}"><i class="icon-shopping-cart icon-white"></i> {$LANG.catalogue.add_to_basket}</a>
			</div>
		{/if}
	</form>
</li>