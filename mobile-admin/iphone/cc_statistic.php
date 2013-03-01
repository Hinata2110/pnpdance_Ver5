<?php
function getStatistics($period) {
	
	$Out					= ',"statistics":[';
	$stat[sales]			= (string)getSales($period);
	$stat[product_sales]	= (string)getProductSales($period);
	$stat[registrations]	= (string)getRegistration($period);
	$stat[orders]			= (string)getOrdersPlaced($period);
	
	$Out	.= json_encode($stat);
	$Out	.= '],"query":"1"';
	return($Out);
}

function getSales($period) {
	
	if ($period == 'thisMonth') {
		$start_date	= mktime(0,0,0,date("n"),1,date("Y"));
		$end_date	= mktime(23,59,59,date("n")+1,0,date("Y"));
	} else if ($period == 'lastMonth') {
		$start_date	= mktime(0,0,0,date("n")-1,1,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),0,date("Y"));
	} else if ($period == 'last60') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-60,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	} else if ($period == 'last90') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-90,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	} else if ($period == 'last365') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-365,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	}
	
	$query	=	"SELECT SUM(i.quantity) AS product_quantity".
				" FROM " . _DB_PREFIX_ . NAME_SHOP."_order_sum s, " . _DB_PREFIX_ . NAME_SHOP."_order_inv i".
				" WHERE `time` BETWEEN '$start_date' AND '$end_date'".
				" AND s.cart_order_id = i.cart_order_id";
				
	$select	= @mysql_query($query);
	$row	= mysql_fetch_array($select);
	if ($row[product_quantity] > 0)  {
		$Out	= $row[product_quantity];
	} else {
		$Out	= 0;
	}
	return($Out);
}

function getProductSales($period) {
	
	if ($period == 'thisMonth') {
		$start_date	= mktime(0,0,0,date("n"),1,date("Y"));
		$end_date	= mktime(23,59,59,date("n")+1,0,date("Y"));
	} else if ($period == 'lastMonth') {
		$start_date	= mktime(0,0,0,date("n")-1,1,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),0,date("Y"));
	} else if ($period == 'last60') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-60,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	} else if ($period == 'last90') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-90,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	} else if ($period == 'last365') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-365,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	}
	
	$query	= "SELECT SUM(prod_total) AS sales FROM " . _DB_PREFIX_ . NAME_SHOP."_order_sum WHERE `time` BETWEEN '".$start_date."' AND '".$end_date."'";
	$select	= @mysql_query($query);
	$row	= mysql_fetch_array($select);
	if ($row[sales] > 0)  {
		$Out	= $row[sales];
	} else {
		$Out	= 0;
	}
	return($Out);
}

function getRegistration($period) {
	
	if ($period == 'thisMonth') {
		$start_date	= mktime(0,0,0,date("n"),1,date("Y"));
		$end_date	= mktime(23,59,59,date("n")+1,0,date("Y"));
	} else if ($period == 'lastMonth') {
		$start_date	= mktime(0,0,0,date("n")-1,1,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),0,date("Y"));
	} else if ($period == 'last60') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-60,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	} else if ($period == 'last90') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-90,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	} else if ($period == 'last365') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-365,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	}
	
	$query	= "SELECT customer_id FROM " . _DB_PREFIX_ . NAME_SHOP."_customer WHERE regTime BETWEEN '".$start_date."' AND '".$end_date."'";
	$select	= @mysql_query($query);
	$Out	= @mysql_num_rows($select);
	
	return($Out);
}

function getOrdersPlaced($period) {
	
	if ($period == 'thisMonth') {
		$start_date	= mktime(0,0,0,date("n"),1,date("Y"));
		$end_date	= mktime(23,59,59,date("n")+1,0,date("Y"));
	} else if ($period == 'lastMonth') {
		$start_date	= mktime(0,0,0,date("n")-1,1,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),0,date("Y"));
	} else if ($period == 'last60') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-60,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	} else if ($period == 'last90') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-90,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	} else if ($period == 'last365') {
		$start_date	= mktime(0,0,0,date("n"),date("j")-365,date("Y"));
		$end_date	= mktime(23,59,59,date("n"),date("j"),date("Y"));
	}
	
	$query	= "SELECT cart_order_id FROM " . _DB_PREFIX_ . NAME_SHOP."_order_sum WHERE `time` BETWEEN '".$start_date."' AND '".$end_date."'";
	$select	= @mysql_query($query);
	$Out	= @mysql_num_rows($select);
	
	return($Out);
}
?>