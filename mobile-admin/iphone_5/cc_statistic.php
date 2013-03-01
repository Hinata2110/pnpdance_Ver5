<?php
function getStatistics($period) {
	
	$Out					= ',"statistics":[';
	$stat['sales']			= (string)getSales($period);
	$stat['product_sales']	= (string)getProductSales($period);
	$stat['registrations']	= (string)getRegistration($period);
	$stat['orders']			= (string)getOrdersPlaced($period);
	
	$Out	.= json_encode($stat);
	$Out	.= '],"query":"1"';
	return($Out);
}

/*
cart_order_id   customer_id   name   line1   line2   town   state   postcode  
 country   name_d   line1_d   line2_d   town_d   state_d   postcode_d   country_d  
  phone   mobile   trade_total   subtotal   total   total_tax   shipping   status  
   sec_order_id   ip_address   order_date   email   comments   ship_date   ship_method   
   gateway   currency   customer_comments   coupon_code   coupon_savings   giftcard_code   
   giftcard_savings   discount   tax1_disp   tax1_amt   tax2_disp   tax2_amt   tax3_disp   
   tax3_amt   offline_capture   ship_tracking   company_name   company_name_d   basket   
   extra_notes   lang   dashboard   title   first_name   last_name   title_d   
   first_name_d   last_name_d   discount_type
*/   

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
				" FROM " . _DB_PREFIX_ . NAME_SHOP."_order_summmary s, " . _DB_PREFIX_ . NAME_SHOP."_order_invertory i".
				" WHERE `time` BETWEEN '$start_date' AND '$end_date'".
				" AND s.cart_order_id = i.cart_order_id";
				
	$select	= @mysql_query($query);
	$row	= mysql_fetch_array($select);
	
	if ($row['product_quantity'] > 0)	{ $Out	= $row['product_quantity']; }
	else								{ $Out	= 0; }
	
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
	
	$query	= "SELECT SUM(prod_total) AS sales FROM " . _DB_PREFIX_ . NAME_SHOP."_order_summmary WHERE `time` BETWEEN '$start_date' AND '$end_date'";
	$select	= @mysql_query($query);
	$row	= mysql_fetch_array($select);
	
	if ($row[sales] > 0)	{ $Out = $row['sales']; }
	else					{ $Out	= 0; }
	
	return($Out);
}

/*
customer_id   email   password   title   first_name   last_name   country   phone  
 mobile   registered   ip_address   order_count   type   hearabout   mailName   salt  
  status   language   verify   new_password    
*/

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
	
	$query	= "SELECT customer_id FROM " . _DB_PREFIX_ . NAME_SHOP."_customer WHERE registered BETWEEN '$start_date' AND '$end_date'";
	
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
	
	$query	= "SELECT cart_order_id FROM " . _DB_PREFIX_ . NAME_SHOP."_order_summmary WHERE `time` BETWEEN '$start_date' AND '$end_date'";
	$select	= @mysql_query($query);
	$Out	= @mysql_num_rows($select);
	
	return($Out);
}
?>