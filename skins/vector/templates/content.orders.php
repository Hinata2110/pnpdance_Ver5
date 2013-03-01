<div class="section">
	{if $IS_USER}
		<table class="table table-striped table-orders">
			<thead>
				<tr>
					<th>{$LANG.basket.order_number}</th>
					<th>{$LANG.basket.order_date}</th>
					<th>{$LANG.basket.total}</th>
					<th>{$LANG.common.status}</th>
					<th>&nbsp;</th>
				</tr>
			</thead>
			<tbody>
				{if $ORDERS}
					{foreach from=$ORDERS item=order}
						<tr>
							<td>
								<a href="{$STORE_URL}/index.php?_a=vieworder&amp;cart_order_id={$order.cart_order_id}" title="{$LANG.common.view_details}">{$order.cart_order_id}</a>
							</td>
							<td>{$order.time}</td>
							<td>{$order.total}</td>
							<td><span class="order-status-stamp">{$order.status.text}</span></td>
							<td>
								<div class="actions">
									{if $order.make_payment}
										<a href="{$STORE_URL}/index.php?_a=gateway&amp;cart_order_id={$order.cart_order_id}&amp;retrieve=1" title="{$LANG.basket.complete_payment}" class="btn btn-primary btn-small"><i class="icon-ok-circle icon-white"></i> {$LANG.basket.complete_payment}</a>
									{/if}
									{if $order.cancel}
										<a href="{$STORE_URL}/index.php?_a=vieworder&amp;cancel={$order.cart_order_id}" rel="tooltip" onclick="return confirm('{$LANG.common.decision_remove}');" title="{$LANG.basket.cancel_order}" class="btn btn-small btn-danger"><i class="icon-trash icon-white"></i></a>
									{/if}
								</div>
							</td>
						</tr>
					{/foreach}
				{else}
					<tr>
						<td colspan="5">
							<div class="alert alert-info">
								{$LANG.account.no_orders_made}
							</div>
						</td>
					</tr>
				{/if}
			</tbody>
			{if $PAGINATION}
				<tfoot>
					<tr>
						<td colspan="5">{$PAGINATION}</td>
					</tr>
				</tfoot>
			{/if}
		</table>
	{else}
		<form action="{$VAL_SELF}" method="post">
			<h3 class="section-title">{$LANG.account.lookup_order}</h3>
			<div class="content">
				<div class="row-fluid">
					<div class="span6">
						<label for="lookup_order_id">{$LANG.basket.order_number}</label>
						<input type="text" id="lookup_order_id" name="cart_order_id" value="" class="input-fill" required placeholder="{$LANG.basket.order_number}" />
					</div>
					<div class="span6">
						<label for="lookup_email">{$LANG.user.email_address}</label>
						<input type="email" id="lookup_email" name="email" value="" class="input-fill" required placeholder="{$LANG.user.email_address}" />
					</div>
				</div>				
			</div>
			<div class="form-actions">
				<button type="submit" value="{$LANG.common.search}" class="btn btn-primary"><i class="icon-road icon-white"></i> {$LANG.account.lookup_order}</button>
			</div>
		</form>
	{/if}
</div>