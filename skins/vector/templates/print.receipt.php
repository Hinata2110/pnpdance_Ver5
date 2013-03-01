<!doctype html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6" dir="{$TEXT_DIRECTION}"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7" dir="{$TEXT_DIRECTION}"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8" dir="{$TEXT_DIRECTION}"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9" dir="{$TEXT_DIRECTION}"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js" dir="{$TEXT_DIRECTION}"> <!--<![endif]-->
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
		<title>{$META_TITLE}</title>
		<meta name="robots" content="index, follow">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="Content-Type" content="text/html;charset={$CHARACTER_SET}">
		
		<link rel="stylesheet/less" media="all" href="{$STORE_URL}/skins/{$SKIN_FOLDER}/less/print_receipt.less" />
		<script src="{$STORE_URL}/skins/{$SKIN_FOLDER}/js/libs/less-1.3.0.min.js"></script>
	</head>
	<body onload="window.print();">
		<div class="container">
			<div id="page">
				<header>
					<img src="images/logos/{$SKIN_FOLDER}-{$SKIN_SUBSET}.php" alt="{$META_TITLE}" />
				</header>
				<div class="receipt">
					{foreach from=$LIST_ORDERS item=order}
				        <div class="row-fluid addresses">
				        	<div class="span6">
				                {$order.title_d} {$order.first_name_d} {$order.last_name_d}<br />
						  		{if !empty($order.company_name_d)}{$order.company_name_d}<br />{/if}
						  		{$order.line1_d} <br />
						  		{if !empty($order.line2_d)}{$order.line2_d}<br />{/if}
						  		{$order.town_d}<br />
						  		{$order.state_d}, {$order.postcode_d}<br />
						  		{$order.country_d}
				        	</div>
				        	<div class="span6">
				                <strong>{$LANG.address.return_address}:</strong><br />
				                {$STORE.address},<br />
				                {$STORE.county},<br />
				                {$STORE.postcode}<br />
				                {$STORE.country}
				        	</div>
				        </div>
			
				        <div class="row-fluid order-details">
				        	<span class="order-id"><strong>{$LANG.common.order_id}:</strong> {$order.cart_order_id}</span><br />
				        	<span class="order-date"><strong>{$LANG.orders.title_receipt_for}:</strong> {$order.order_date}</span>
				        </div>
	
				        <div class="order-items">
				        	{foreach from=$order.items item=item}
				                <div class="item">
				                	<span class="product">{$item.quantity} &times; {$item.name} {if !empty($item.product_code)} - {$item.product_code}{/if} ({$item.price})</span>
				                	{if isset($item.options)}
				                		<ul class="options">
				                			{foreach from=$item.options item=option}
				                				<li>{$option}</li>
				                			{/foreach}
				                		</ul>
				                	{/if}
				                </div>
				        	{/foreach}
				        </div>
			
				        <div class="order-totals">
				        	<strong>{$LANG.basket.total_sub}:</strong> {$order.subtotal}<br />
				        	<strong>{$LANG.basket.total_discount}:</strong> {$order.discount}<br />
				        	<strong>{$LANG.basket.shipping}:</strong> {$order.shipping}<br />
				        	{if isset($order.taxes)}
				                {foreach from=$order.taxes item=tax}
				                	<strong>{$tax.name}:</strong> {$tax.value}<br />
				                {/foreach}
				        	{/if}
							<strong>{$LANG.basket.total_grand}:</strong> {$order.total}<br />
				        	{if isset($order.extra_notes)}
				                <strong>{$LANG.orders.title_notes_extra}:</strong> {$order.extra_notes}
				        	{/if}
				        </div>
					{/foreach}
				</div>
				<footer>
					<em>{$LANG.orders.title_thanks}</em><br />
					{$STORE_URL}
				</footer>
			</div>
		</div>
	</body>
</html>