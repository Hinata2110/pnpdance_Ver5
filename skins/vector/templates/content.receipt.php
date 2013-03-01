{if isset($MESSAGES)}
	{foreach from=$MESSAGES item=message}
		<div class="alert alert-info">{$message}</div>
	{/foreach}
{/if}

<div class="row-fluid  margin-b">
	<div class="span6">
		<div class="section">
			<h3 class="section-title">{$LANG.address.billing_address}</h3>
			<div class="content">
				{$SUM.title} {$SUM.first_name} {$SUM.last_name}<br />
				{if $SUM.company_name}{$SUM.company_name}<br />{/if}
				{$SUM.line1}<br />
				{if $SUM.line2}{$SUM.line2}<br />{/if}
				{$SUM.town}<br />
				{$SUM.state}, {$SUM.postcode}<br />
				{$SUM.country}
			</div>
		</div>
	</div>
	<div class="span6">
		<div class="section">
			<h3 class="section-title">{$LANG.address.delivery_address}</h3>
			<div class="content">
				{$SUM.title} {$SUM.first_name} {$SUM.last_name}<br />
				{if $SUM.company_name}{$SUM.company_name}<br />{/if}
				{$SUM.line1}<br />
				{if $SUM.line2}{$SUM.line2}<br />{/if}
				{$SUM.town}<br />
				{$SUM.state}, {$SUM.postcode}<br />
				{$SUM.country}
			</div>
		</div>
	</div>
</div>
<div class="row-fluid">
	<table class="table table-striped basket-contents">
		<thead>
			<tr>
				<th {if $item.image}colspan="2"{/if}>{$LANG.common.product}</th>
				<th>{$LANG.common.quantity}</th>
				<th>{$LANG.common.price}</th>
			</tr>
		</thead>
		<tbody>
			{foreach from=$ITEMS item=item}
				<tr>
					{if $item.image}
						<td>
							<a href="{$item.link}" title="{$item.name}" class="product-image">
								<img src="{$item.image}" alt="{$item.name}" />
							</a>
						</td>
					{/if}
					<td>
						<a href="{$item.link}" title="{$item.name}" class="product-title">{$item.name}</a>
						{if $item.options}
							<ul class="product-options">
								{foreach from=$item.options item=option}
									<li>{$option}</li>
								{/foreach}
							</ul>
						{/if}
					</td>
					<td>{$item.quantity}</td>
					<td>{$item.price_total}</td>
				</tr>
			{/foreach}
		</tbody>
		<tfoot>
			<tr>
				<td colspan="{if $item.image}4{else}3{/if}" class="actions">
					<a href="{$STORE_URL}/index.php?_a=receipt&amp;cart_order_id={$SUM.cart_order_id}" class="btn" title="{$LANG.confirm.print}" target="_blank">
						<i class="icon-print"></i> {$LANG.confirm.print}
					</a>
				</td>
			</tr>
		</tfoot>
	</table>
</div>
<div class="basket-review">
	<div class="row-fluid">
		<div class="span6">
			<div class="order-status-stamp-wrapper">
				<span class="order-status-stamp" id="status-{$SUM.status}">{$SUM.order_status}</span>
			</div>
		</div>
		<div class="span6">
			<div class="basket-totals">
				<table>
					<tbody>
						<tr class="subtotal">
							<td>{$LANG.basket.total_sub}</td>
							<td>{$SUM.subtotal}</td>
						</tr>
						<tr class="shipping">
							<td>{$LANG.basket.shipping}</td>
							<td>{$CUSTOMER_LOCALE.mark} {$SUM.shipping}</td>
						</tr>
						{foreach from=$TAXES item=tax}
							<tr class="taxes">
								<td>{$tax.name}</td>
								<td>{$tax.value}</td>
							</tr>
						{/foreach}
						{foreach from=$COUPONS item=coupon}
							<tr class="coupons">
								<td>{$coupon.voucher}</td>
								<td>-{$coupon.value}</td>
							</tr>
						{/foreach}
						{if isset($DISCOUNT)}
							<tr class="discount">
								<td>{$LANG.basket.total_discount}</td>
								<td>{$SUM.discount}</td>
							</tr>
						{/if}
						{if isset($DELIVERY.url)}
							<tr class="track">
								<td>{$LANG.basket.track}</td>
								<td><a href="{$DELIVERY.url}" class="btn btn-small" target="_blank">{$DELIVERY.method}</a></td>
							</tr>
						{else if ($DELIVERY.tracking)}
							<tr class="track">
								<td>{$LANG.orders.shipping_tracking}</td>
								<td>{$DELIVERY.tracking}</td>
							</tr>
						{/if}
					</tbody>
					<tfoot>
						<tr class="total">
							<td>{$LANG.basket.total_grand}</td>
							<td>{$SUM.total}</td>
						</tr>
					</tfoot>
				</table>
			</div>
			{if $CTRL_PAYMENT}
				<div class="basket-checkout">
					<form action="{$STORE_URL}/index.php?_a=gateway&amp;cart_order_id={$SUM.cart_order_id}" method="POST">
						<button type="submit" class="btn btn-primary btn-large btn-checkout" value="{$LANG.basket.complete_payment}">{$LANG.basket.complete_payment}</button>
					</form>
				</div>
			{/if}
		</div>
	</div>
</div>

{* Affiliate Tracking *}
{foreach from=$AFFILIATES item=affiliate}
	{$affiliate}
{/foreach}

{* Google Analytics eCommerce Tracking *}
{if isset($ANALYTICS)}
	<script type="text/javascript">
		{literal}
			pageTracker._addTrans('{$GA_SUM.cart_order_id}','','{$GA_SUM.total}','{$GA_SUM.total_tax}','{$GA_SUM.shipping}',"{$GA_SUM.town}","{$GA_SUM.state}","{$GA_SUM.country_iso}");
		{/literal}
		{foreach from=$GA_ITEMS item=item}
			{literal}
				pageTracker._addItem('{$GA_SUM.cart_order_id}','{$item.product_code}','{$item.name}','','{$item.price}','{$item.quantity}');
			{/literal}
		{/foreach}
		{literal}
			pageTracker._trackTrans();
		{/literal}
	</script>
{/if}