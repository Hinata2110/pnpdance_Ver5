<table class="table table-striped basket-contents">
	<thead>
		<tr>
			<th colspan="2">{$LANG.common.product}</th>
			<th>{$LANG.common.price_unit}</th>
			<th>{$LANG.common.quantity}</th>
			<th>{$LANG.common.price}</th>
			<th>&nbsp;</th>
		</tr>
	</thead>
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
				<td>
					{$item.line_price_display}
				</td>
				<td>
					<input type="number" name="quan[{$hash}]" value="{$item.quantity}" min="1" {if $item.stock_level}max="{$item.stock_level}"{/if} {$QUAN_READ_ONLY} required class="input-mini" />
				</td>
				<td>
					{$item.price_display}
				</td>
				<td>
					<a href="{$STORE_URL}/index.php?_a=basket&amp;remove-item={$hash}" class="btn btn-small btn-danger" title="{$LANG.common.remove}">
						<i class="icon-trash icon-white"></i>
					</a>
				</td>
			</tr>
		{/foreach}
	</tbody>
	<tfoot>
		<tr>
			<td colspan="2">&nbsp;</td>
			<td class="actions" colspan="4">
				<button name="empty" type="button" onclick="window.location = '{$STORE_URL}/index.php?_a=basket&amp;empty-basket=true'" class="btn btn-danger empty-basket left"><i class="icon-ban-circle icon-white"></i> {$LANG.basket.basket_empty}</button>
				<button name="update" type="submit" class="btn btn-success update-basket"><i class="icon-refresh icon-white"></i> {$LANG.basket.basket_update}</button>
			</td>
		</tr>
	</tfoot>
</table>