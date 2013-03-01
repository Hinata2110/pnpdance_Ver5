<?php
function getOrders($CID="", $OID="", $ROW=0, $NUM_ROW=0) {
	$CID		= mysql_real_escape_string($CID);
	$OID		= mysql_real_escape_string($OID);
	$ROW		= mysql_real_escape_string($ROW);
	$NUM_ROW	= mysql_real_escape_string($NUM_ROW);

	$query  	=	"SELECT * FROM "._DB_PREFIX_.NAME_SHOP."_order_sum WHERE customer_id > 0";
	
	if (!empty($CID))	{ $query  .= " AND customer_id = $CID"; }
	if (!empty($OID))	{ $query  .= " AND cart_order_id = '$OID'"; }
	
	$query  .= " ORDER BY cart_order_id DESC";

	if ((int)$ROW > -1 && (int)$NUM_ROW > 0)	{ $query .= " LIMIT $ROW, $NUM_ROW"; }
	
	$select	= @mysql_query($query);
	
	if ($select) {
		$rows	= @mysql_num_rows($select);
		
		if ($rows > 0) {
			
			$Out	= ',"orders":[';
			$n		= 0;
			$config	= getConfig();
			
			while($row = @mysql_fetch_array($select)) {
				if ($n <> 0) { $Out	.= ','; }
				
				$orders[order_id]			= (string)$row[cart_order_id];
				$orders[order_total]		= (string)$row[prod_total];
				
				$orders[order_currency]		= (string)$config[defaultCurrency];
				$orders[cdate]				= (string)$row[time];
				
				if (!empty($OID)) {
					$orders[order_subtotal]				= (string)$row[subtotal];
					$orders[order_shipping]				= (string)$row[total_ship];
					
					$orders[order_delivery_phone]		= (string)$row[phone];
					$orders[order_delivery_phone_mob]	= (string)$row[mobile];
					$orders[order_delivery_address1]	= (string)$row[add_1_d];
					$orders[order_delivery_address2]	= (string)$row[add_2_d];
					$orders[order_delivery_city]		= (string)$row[town_d];
					$orders[order_delivery_country]		= (string)$row[county_d];
					$orders[order_delivery_zip]			= (string)$row[postcode_d];
					$orders[last_name]					= (string)$row[name];
					$orders[user_email]					= (string)$row[email];
					$orders[order_carrier_method]		= (string)$row[shipMethod];
					$orders[payment_method_name]		= (string)$row[gateway];
				}
				
				$Out	.= json_encode($orders);
				$n++;
			}
			
			$Out	.= '],"offset":"'.$ROW.'","quantity_rows":"'.$NUM_ROW.'","quantity_orders":"'.$rows.'","query":"1"';
			if (!empty($OID))	{ $Out	.= ',"order_id":"'.$OID.'"'; }
			
		} else {
			$Out	.= ',"offset":"'.$ROW.'","quantity_rows":"'.$NUM_ROW.'","quantity_orders":"'.$rows.'","query":"0"';
		}
	} else {
		$Out	.= ',"query":"-1"';
	}
	return($Out);
}

function getOrderItem($OID) {
	$OID	= mysql_real_escape_string($OID);
 	$query  = "SELECT * FROM " . _DB_PREFIX_ . NAME_SHOP."_order_inv WHERE cart_order_id = '$OID' ORDER BY id ASC";
	$select	= @mysql_query($query);
	if ($select) {
		if (@mysql_num_rows($select) > 0) {
			$Out	= ',"order_items":[';
			$n		= 0;
			while($row = @mysql_fetch_array($select)) {
				if ($n <> 0) { $Out	.= ','; }
				$orders[product_id]		= (string)$row[productId];
				$orders[product_name]	= (string)$row[name];
				$orders[product_price]	= (string)$row[price];
				$orders[product_sku]	= (string)$row[productCode];
			 	$Out	.= json_encode($orders);
				$n++;
			}
			$Out	.= '],"order_id":"'.$OID.'","query":"1"';
		} else {
			$Out	.= ',"query":"0"';
		}
	} else {
		$Out	.= ',"query":"-1"';
	}
	return($Out);
}
?>