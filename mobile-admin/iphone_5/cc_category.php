<?php
function getCategory($OnlyYes, $Filter, $CID, $ROW, $NUM_ROW) {
	
	$Filter		= mysql_real_escape_string($Filter);
	$CID		= mysql_real_escape_string($CID);
	$ROW		= mysql_real_escape_string($ROW);
	$NUM_ROW	= mysql_real_escape_string($NUM_ROW);
	
	$query  	=	"SELECT cat_id".
					", cat_name".
					", cat_parent_id".
					", cat_image".
					" FROM "._DB_PREFIX_.NAME_SHOP."_category".
					" WHERE cat_id > 0";
	
	if (!empty($CID))	{ $query .= " AND cat_id = $CID"; }
	
	$query .= " ORDER BY cat_id ASC, cat_name ASC";
	
	if ((int)$ROW > -1 && (int)$NUM_ROW > 0)	{ $query .= " LIMIT $ROW, $NUM_ROW"; }
	
	$select	= @mysql_query($query);

	if ($select) {
		
		$rows	= @mysql_num_rows($select);
		$Out	= ',"categories":[';
		$n		= 0;
		
		while($row = @mysql_fetch_array($select)) {
		
			if ($n <> 0) { $Out	.= ','; }
			$categories['category_id']					= (string)$row['cat_id'];
			$categories['category_name']				= (string)$row['cat_name'];
			$categories['category_parent_id']			= (string)$row['cat_parent_id'];
			
			if (!empty($row['cat_image'])) {
				$categories['category_thumb_image']			= (string)_SITE_URL_.'/images/uploads/thumbs/thumb_'.$row['cat_image'];
				$categories['category_full_image']			= (string)_SITE_URL_.'/images/uploads/'.$row['cat_image'];
			} else {
				$categories['category_thumb_image']			= (string)'';
				$categories['category_full_image']			= (string)'';
			}
			
			$categories['category_products_quantity']	= (string)categoryProductsQuantity($row['cat_id']);
			$Out										.= json_encode($categories);
			$n++;
		}

		$Out	.= '],"offset":"'.$ROW.'","quantity_rows":"'.$NUM_ROW.'","quantity_categories":"'.$rows.'","query":"1"';
		if (!empty($CID))	{ $Out	.= ',"category_id":"'.$CID.'"'; }
		
	} else {
		$Out	.= ',"offset":"'.$ROW.'","quantity_rows":"'.$NUM_ROW.'","quantity_categories":"'.$rows.'","query":"0"';
	}
	return($Out);
}

function updateCategory($CID, $Field, $Value) {
	
	$CID	= mysql_real_escape_string($CID);
	$Field	= mysql_real_escape_string($Field);
	$Value	= mysql_real_escape_string($Value);
	
	if ($Field == 'category_name') {
		$query	= "UPDATE "._DB_PREFIX_.NAME_SHOP."_category SET cat_name='$Value' WHERE cat_id=$CID";
		$update	= @mysql_query($query);
		if ($update)	{ $Out	= ',"category_id":"'.$CID.'","query":"1"'; }
		else			{ $Out	= ',"query":"-1"'; }
	} else if ($Field == 'category_parent_id') {
		$query	= "UPDATE "._DB_PREFIX_.NAME_SHOP."_category SET cat_parent_id='$Value' WHERE cat_id=$CID";
		$update	= @mysql_query($query);
		if ($update)	{ $Out	= ',"category_id":"'.$CID.'","query":"1"'; }
		else			{ $Out	= ',"query":"-1"'; }
	}
	return($Out);
}

function deleteCategory($CID) {
	
	$CID	= mysql_real_escape_string($CID);
	$query	= "SELECT product_id FROM "._DB_PREFIX_.NAME_SHOP."_category_index WHERE cat_id=$CID";
	$select	= @mysql_query($query);
	
	if (@mysql_num_rows($select) > 0) {
		$Out	= ',"query":"-2"';
	} else {
		
		$query	= "SELECT cat_id FROM "._DB_PREFIX_.NAME_SHOP."_category WHERE cat_parent_id=$CID";
		$select	= @mysql_query($query);
		
		if (@mysql_num_rows($select) > 0) {
			$Out	= ',"query":"-3"';
		} else {
			$query	= "DELETE FROM "._DB_PREFIX_.NAME_SHOP."_category WHERE cat_id=$CID";
			$delete	= @mysql_query($query);
			if ($query)	{ $Out	= ',"category_id":"'.$CID.'","query":"1"'; }
			else		{ $Out	= ',"query":"-1"'; }
		}
	}
	return($Out);
}

function categoryProductsQuantity($CID) {
	$CID	= mysql_real_escape_string($CID);
	$query	= "SELECT product_id FROM "._DB_PREFIX_.NAME_SHOP."_category_index WHERE cat_id=$CID";
	$select	= @mysql_query($query);
	if ($select) {
		$rows	= @mysql_num_rows($select);
		if ($rows > 0) { $Out = $rows; } else { $Out = 0; }
	} else {
		$Out = 0;	
	}
	return($Out);
}

function countCategory() {
	$query	= "SELECT cat_id FROM "._DB_PREFIX_.NAME_SHOP."_category";
	$select	= @mysql_query($query);
	if ($select) {
		$rows	= @mysql_num_rows($select);
		if ($rows > 0) { $Out = $rows; } else { $Out = 0; }
	} else {
		$Out = 0;	
	}
	return($Out);
}

function categoryName($CID) {
	$CID	= mysql_real_escape_string($CID);
	$query	= "SELECT cat_name FROM "._DB_PREFIX_.NAME_SHOP."_category WHERE cat_id=$CID";
	$select	= @mysql_query($query);
 	if (@mysql_num_rows($select) == 1) {
	    $row	= @mysql_fetch_array($select);
	    $Out	= (string)$row['cat_name'];
 	} else {
	    $Out	= (string)"";
 	}
	return($Out);
}
?>