<nav>
	<ul>
		{if $IS_USER}
			<li><a href="{$STORE_URL}/index.php?_a=profile" title="{$LANG.account.your_account}"><i class="icon-user icon-white"></i> {$LANG.account.your_account}</a></li>
			<li><a href="{$STORE_URL}/index.php?_a=logout" title="{$LANG.account.logout}"><i class="icon-off icon-white"></i> {$LANG.account.logout}</a></li>
		{else}
			<li><a href="{$STORE_URL}/index.php?_a=register" title="{$LANG.account.log_in} / {$LANG.account.register}"><i class="icon-user icon-white"></i> {$LANG.account.log_in} / {$LANG.account.register}</a></li>
			<li><a href="{$STORE_URL}/index.php?_a=vieworder" title="{$LANG.account.lookup_order}"><i class="icon-road icon-white"></i> {$LANG.account.lookup_order}</a></li>
		{/if}
		<li>
			<a id="widget-cart" href="{$STORE_URL}?_a=basket" title="{$LANG.basket.basket_checkout}"><i class="icon-shopping-cart icon-white"></i> {$LANG.checkout.your_basket} ({$CART_ITEMS})</a><!-- /#widget-cart -->
		</li>
	</ul>
</nav>