<div class="basket-review">
	<div class="row-fluid">
		<div class="span6">
			<div class="basket-coupon input-append">
				<label for="coupon">{$LANG.basket.coupon_add}</label>
				{strip}
					<input name="coupon" type="text" id="coupon" class="input-fill" maxlength="25" title="{$LANG.basket.coupon_add}" placeholder="{$LANG.catalogue.coupon_code}" />
					<button type="button" onclick="$(this).getForm().submit()" class="btn">{$LANG.common.update}</button>
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
						<button type="button" onclick="$(this).getForm().submit()" class="btn">{$LANG.common.update}</button>
					{/strip}
				</div>
			{/if}
		</div>
		<div class="span6">
			<div class="basket-totals">
				<table>
					<tbody>
						<tr class="subtotal">
							<td>{$LANG.basket.total_sub}</td>
							<td>{$SUBTOTAL}</td>
						</tr>
						{if $BASKET_WEIGHT}
							<tr class="weight">
								<td>{$LANG.basket.weight}</td>
								<td>{$BASKET_WEIGHT}</td>
							</tr>
						{/if}
						{if $SHIPPING_VALUE}
							<tr class="shipping">
								<td>{$LANG.basket.shipping}</td>
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
								<td>{$tax.name}</td>
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
								<td><a href="{$VAL_SELF}&amp;remove_code={$coupon.remove_code}" title="{$LANG.common.remove}">{$coupon.voucher}</a></td>
								<td>-{$coupon.value}</td>
							</tr>
						{/foreach}
						{if isset($DISCOUNT)}
							<tr class="discount">
								<td>{$LANG.basket.total_discount}</td>
								<td>{$DISCOUNT}</td>
							</tr>
						{/if}
					</tbody>
					<tfoot>
						<tr class="total">
							<td>{$LANG.basket.total_grand}</td>
							<td>{$TOTAL}</td>
						</tr>
					</tfoot>
				</table>
			</div>
			<div class="basket-checkout">
				<input type="submit" name="proceed" class="btn btn-primary btn-large btn-checkout" value="{$CHECKOUT_BUTTON}" />
				
				{if $CHECKOUTS}
					<div class="checkout-alt">
						<div class="lang-or">-- {$LANG.common.or} --</div>
						{foreach from=$CHECKOUTS item=checkout}
							<span class="alternate-gateway">{$checkout}</span>
						{/foreach}
					</section>
				{/if}
			</div>
		</div>
	</div>
</div>