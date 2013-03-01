<?php
function getTax($TID) {
	$TID	= mysql_real_escape_string($TID);
	$query  =	"SELECT * FROM "._DB_PREFIX_.NAME_SHOP."_taxes  WHERE id > 0";
	if (!empty($TID)) { $query .= " AND id = $TID"; }
	$select	= @mysql_query($query);
	if ($select) {
		$rows	= @mysql_num_rows($select);
		$Out	= ',"tax":[';
		$n		= 0;
		while($row = @mysql_fetch_array($select)) {
			if ($n <> 0) { $Out	.= ','; }
			$tax[tax_id]	= (string)$row[id];
			$tax[tax_rate]	= (string)$row[percent];
			$tax[tax_name]	= (string)$row[taxName];
			$Out			.= json_encode($tax);
			$n++;
		}

		$Out	.= '],"quantity_tax":"'.$rows.'","query":"1"';
		if (!empty($TID)) {	$Out	.= ',"tax_id":"'.$TID.'"'; }
		
	} else {
		$Out	.= ',"query":"0"';
	}
	return($Out);
}

function taxName($TID) {
	$TID	= mysql_real_escape_string($TID);
	$query  = "SELECT taxName FROM "._DB_PREFIX_.NAME_SHOP."_taxes WHERE id = $TID";
	$select	= @mysql_query($query);
	if ($select) {
		$row	= @mysql_fetch_row($select);
		$name	= $row[0];
	} else {
		$name	= "";
	}
   	return($name);
}

function taxRate($TID) {
	$query	= "SELECT percent FROM ". _DB_PREFIX_ .NAME_SHOP."_taxes WHERE id = " . $TID;
	$select	= @mysql_query($query);
	if ($select) {
		$row	= @mysql_fetch_row($select);
		$rate	= $row[0];
	}
   	return($rate);
}
?>