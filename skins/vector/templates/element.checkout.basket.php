<div class="well basket-summary">
	<h3 class="basket-surrary-title">{$LANG.checkout.your_basket}</h3>
	<div class="basket-totals">
		<table>
			<tbody>
				{foreach from=$ITEMS key=hash item=item}
					<tr>
						<td>
							{if $item.image}
								<a href="{$item.link}" title="{$item.name}" class="product-image">
									<img src="{$item.image}" alt="{$item.name}" />
								</a>
							{/if}
						</td>
						<td>
							<a href="{$item.link}" title="{$item.name}" class="product-title">
								{$item.name}
							</a>
							{if $item.options}
								<ul class="product-options">
									{foreach from=$item.options item=option}
										<li>
											<strong>{$option.option_name}:</strong>
											<span>{$option.value_name|truncate:45:"&hellip;":true} {if !empty($option.price_display)}({$option.price_display}){/if}</span>
										</li>
									{/foreach}
								</ul>
							{/if}
						</td>
						<td class="input-append">
							{strip}
 								<input type="text" name="quan[{$hash}]" value="{$item.quantity}" min="1" {if $item.stock_level}max="{$item.stock_level}"{/if} {$QUAN_READ_ONLY} required class="input-double" />
 								<button type="button" onclick="window.location = '{$STORE_URL}/index.php?_a=basket&amp;remove-item={$hash}'" class="btn" title="{$LANG.common.remove}"><i class="icon-trash"></i></button>
							{/strip}
						</td>
					</tr>
				{/foreach}
			</tbody>
			<tbody class="itemisation">
				<tr class="subtotal">
					<td colspan="2">{$LANG.basket.total_sub}</td>
					<td>{$SUBTOTAL}</td>
				</tr>
				{if $BASKET_WEIGHT}
					<tr class="weight">
						<td colspan="2">{$LANG.basket.weight}</td>
						<td>{$BASKET_WEIGHT}</td>
					</tr>
				{/if}			
				{if $SHIPPING_VALUE}
					<tr class="shipping">
						<td colspan="2">{$LANG.basket.shipping}</td>
						<td>
							{if $CUSTOMER_LOCALE.description}
								<span class="label label-info" rel="tooltip" title="{$LANG.basket.unconfirmed_locale}"><i class="icon-info-sign icon-white estimation"></i> {$SHIPPING_VALUE}</span>
							{else}
								{$SHIPPING_VALUE}
							{/if}
						</td>
					</tr>
				{/if}
				{foreach from=$TAXES item=tax}
					<tr class="tax">
						<td colspan="2">{$tax.name}</td>
						<td>
							{if $CUSTOMER_LOCALE.description}
								<span class="label label-info" rel="tooltip" title="{$LANG.basket.unconfirmed_locale}"><i class="icon-info-sign icon-white estimation"></i> {$tax.value}</span>
							{else}
								{$tax.value}
							{/if}
						</td>
					</tr>
				{/foreach}
				{foreach from=$COUPONS item=coupon}
					<tr class="coupons">
						<td colspan="2"><a href="{$VAL_SELF}&amp;remove_code={$coupon.remove_code}" title="{$LANG.common.remove}">{$coupon.voucher}</a></td>
						<td>-{$coupon.value}</td>
					</tr>
				{/foreach}
				{if isset($DISCOUNT)}
					<tr class="discount">
						<td colspan="2">{$LANG.basket.total_discount}</td>
						<td>{$DISCOUNT}</td>
					</tr>
				{/if}
			</tbody>
			<tfoot>
				<tr class="total">
					<td colspan="2">{$LANG.basket.total_grand}</td>
					<td>{$TOTAL}</td>
				</tr>
			</tfoot>
		</table>
	</div>
	<div class="basket-coupon input-append">
		<label for="coupon">{$LANG.basket.coupon_add}</label>
		{strip}
			<input name="coupon" type="text" id="coupon" class="input-fill" maxlength="25" title="{$LANG.basket.coupon_add}" placeholder="{$LANG.catalogue.coupon_code}" />
			<button type="submit" name="update" value="{$LANG.basket.basket_update}" class="btn">{$LANG.common.update}</button>
		{/strip}
	</div>
	{if isset($SHIPPING)}
		<div class="basket-shipping input-append">
			<label for="shipping">{$LANG.basket.shipping_select}</label>
			{strip}
				<select id="shipping" name="shipping" required class="input-fill chzn-select">
					<option value="">{$LANG.form.please_select}</option>
					{foreach from=$SHIPPING key=group item=methods}
						<optgroup label="{$group}">
							{foreach from=$methods item=method}
								<option value="{$method.value}" {$method.selected}>{$CUSTOMER_LOCALE.mark} {$method.display}</option>
							{/foreach}
						</optgroup>
					{/foreach}
				</select>
				<button type="submit" name="update" value="{$LANG.basket.basket_update}" class="btn">{$LANG.common.update}</button>
			{/strip}
		</div>
	{/if}
</div>