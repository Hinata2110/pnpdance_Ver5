<?php
function getUser($Filter, $UID="", $ROW=0, $NUM_ROW=0) {
	
	$Filter		= mysql_real_escape_string($Filter);
	$UID		= mysql_real_escape_string($UID);
	$ROW		= mysql_real_escape_string($ROW);
	$NUM_ROW	= mysql_real_escape_string($NUM_ROW);

/*
customer_id   email   password   title   first_name   last_name   country   phone   mobile   
registered   ip_address   order_count   type   hearabout   mailName   salt   status  
language   verify   new_password    
*/
	
	$query  	=	"SELECT * FROM "._DB_PREFIX_.NAME_SHOP."_customer WHERE customer_id > 0";
	
	if (!empty($UID))	{ $query  .= " AND customer_id = $UID"; }
	
	if (!empty($Filter))	{ $query .= " AND (first_name LIKE '%$Filter%' OR last_name LIKE '%$Filter%' OR email LIKE '%$Filter%')"; }
	
	$query  .= " ORDER BY customer_id DESC";

	if ((int)$ROW > -1 && (int)$NUM_ROW > 0)	{ $query .= " LIMIT $ROW, $NUM_ROW"; }
	
	$select	= @mysql_query($query);
	
	if ($select) {
		$rows	= @mysql_num_rows($select);
		
		if ($rows > 0) {
			
			$Out	= ',"users":[';
			$n		= 0;
			
			while($row = @mysql_fetch_array($select)) {
				if ($n <> 0) { $Out	.= ','; }
				$users['user_id']		= (string)$row['customer_id'];
				$users['cdate']			= (string)$row['registered'];
				$users['firstname']		= (string)$row['first_name'];
				$users['lastname']		= (string)$row['last_name'];
				$users['email']			= (string)$row['email'];
				
				if (!empty($UID)) {
					$users['user_phone']		= (string)$row['phone'];
					$users['user_phone_mob']	= (string)$row['mobile'];
					$users['user_address1']		= (string)$row['add_1'];
					$users['user_address2']		= (string)$row['add_2'];
					$users['user_city']			= (string)$row['town'];
					$users['user_country']		= (string)$row['country'];
					$users['user_zip']			= (string)$row['postcode'];
				}
				
				$Out	.= json_encode($users);
				$n++;
			}
			
			$Out	.= '],"offset":"'.$ROW.'","quantity_rows":"'.$NUM_ROW.'","quantity_users":"'.$rows.'","query":"1"';
			if (!empty($UID))	{ $Out	.= ',"users_id":"'.$UID.'"'; }
			
		} else {
			$Out	.= ',"offset":"'.$ROW.'","quantity_rows":"'.$NUM_ROW.'","quantity_users":"'.$rows.'","query":"0"';
		}
	} else {
		$Out	.= ',"query":"-1"';
	}
	return($Out);
}
?>