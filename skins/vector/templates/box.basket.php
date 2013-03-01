<div class="ajax-root">
	<div class="box box-basket" title="{$LANG.checkout.your_basket}">
		<div class="wrapper">
			<h3 class="box-title">{$LANG.checkout.your_basket}</h3>
			<div class="content">
				{if isset($CONTENTS) && count($CONTENTS) > 0}
					<nav class="basket-products">
						<ul class="product-list">
					  		{foreach from=$CONTENTS item=product}
								{include file="skins/$SKIN_FOLDER/templates/element.product_listing.php" quantities=true}
							{/foreach}
							<li class="basket-total">
								<strong>{$LANG.basket.total}: </strong>
								<span class="price">{$CART_TOTAL}</span>
							</li>
						</ul>
					</nav>
					<div class="basket-actions">
						<a href="{$BUTTON.link}" title="{$BUTTON.text}" class="btn">{$BUTTON.text}</a>
						<a href="{$STORE_URL}?_a=confirm" title="{$LANG.basket.basket_checkout}" class="btn btn-primary">{$LANG.basket.basket_checkout} <i class="icon-circle-arrow-right icon-white"></i></a>
					</div>
				{else}
					<div class="alert alert-info">
						{$LANG.basket.basket_is_empty}
					</div>
				{/if}
			</div><!-- /.content -->
		</div><!-- /.wrapper -->
	</div><!-- /.box -->

	<!-- Widget Cart -->
	{if $smarty.get['_g'] == 'ajaxadd'}
		<a id="widget-cart" href="{$STORE_URL}?_a=basket" title="{$LANG.basket.basket_checkout}"><i class="icon-shopping-cart icon-white"></i> {$LANG.checkout.your_basket} ({$CART_ITEMS})</a>
	{/if}
	
	<!-- Success Notification -->
	{if $smarty.get['_g'] == 'ajaxadd'}
		<div id="widget-notification">
			<div class="basket-count">{$CART_ITEMS} {$LANG.basket.basket_item_count}</div>
			<a href="{$BUTTON.link}" title="{$BUTTON.text}" class="btn btn-primary">{$BUTTON.text}</a>
			<a href="{$STORE_URL}?_a=confirm" title="{$LANG.basket.basket_checkout}" class="btn btn-danger">{$LANG.basket.basket_checkout} <i class="icon-circle-arrow-right icon-white"></i></a>
		</div>
	{/if}
</div>