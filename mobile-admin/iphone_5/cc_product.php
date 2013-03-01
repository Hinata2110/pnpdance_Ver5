<?php
function getProduct($OnlyYes, $Filter, $CID, $PID, $ROW="", $NUM_ROW="", $OrderBy="") {

	$isPref		= mysql_real_escape_string($isPref);
	$Filter		= mysql_real_escape_string($Filter);
	$CID		= mysql_real_escape_string($CID);
	$PID		= mysql_real_escape_string($PID);
	$ROW		= mysql_real_escape_string($ROW);
	$NUM_ROW	= mysql_real_escape_string($NUM_ROW);
	$OrderBy	= mysql_real_escape_string($OrderBy);
	$n_products	= 0;
	
	$query  	=	"SELECT product_id, product_code, quantity, name, description, price, cat_id, popularity".
					", sale_price, stock_level, use_stock_level, digital, digital_path, product_weight, tax_type, featured".
					" FROM "._DB_PREFIX_.NAME_SHOP."_inventory".
					" WHERE product_id > 0";

/*
Fields:
product_id   product_code   quantity   description   price   
name   cat_id   popularity   trade   sale_price   stock_level   
use_stock_level   digital   digital_path   product_weight   tax_type   
featured   seo_meta_title   seo_meta_description   seo_meta_keywords   
prod_sefurl   giftcard   stock_warning   upc   tax_inclusive   date_added   
seo_custom_url   ean   jan   isbn   status   manufacturer   condition    
*/					
					
	if (!empty($CID)) 		{ $query .= " AND cat_id = $CID"; }
	if (!empty($PID))		{ $query .= " AND product_id = $PID"; }
	if (!empty($Filter))	{ $query .= " AND (name LIKE '%$Filter%' OR description LIKE '%$Filter%')"; }
	
	$query  .= " ORDER BY name ASC";

	if ((int)$ROW > -1 && (int)$NUM_ROW > 0)	{ $query .= " LIMIT $ROW, $NUM_ROW"; }
	
	$select	= @mysql_query($query);
	
	if ($select) {
		
		$rows	= @mysql_num_rows($select);
		
		if ($rows > 0) {
			
			$Out		= ',"products":[';
			$n			= 0;
			$config		= getConfig();
	
			while($row = @mysql_fetch_array($select)) {
				
				if ($n <> 0) { $Out	.= ','; } 
				
				$products['product_id']				= (string)$row['product_id'];
				$products['product_name']			= (string)$row['name'];
				
				// todo path
//				$products[product_thumb_image]		= (string)_SITE_URL_.'/images/uploads/thumbs/thumb_'.$row[image];
//				$products[product_full_image]		= (string)_SITE_URL_.'/images/uploads/'.$row[image];
				
				$products['product_thumb_image']	= (string)'';
				$products['product_full_image']		= (string)'';
				
				$products['product_currency']		= (string)$config['defaultCurrency'];
				$products['product_price']			= (string)$row['price'];
								
				$product_tax_rate					= taxRate($row['tax_type']);

				if ($row['sale_price'] > 0 ) {
				    if ($product_tax_rate > 0) {
						$product_price_tax_value		= (int)$row['sale_price'] * (1 + $product_tax_rate/100);
						$products['product_price_tax']	= (string)$product_price_tax_value;
				    } else {
						$product_price_tax_value		= $row['sale_price'];
						$products['product_price_tax']	= (string)$product_price_tax_value;
				    }
				} else {
				    if ($product_tax_rate > 0) {
						$product_price_tax_value		= (int)$row['price'] * (1 + $product_tax_rate/100);
						$products['product_price_tax']	= (string)$product_price_tax_value;
				    } else {
						$product_price_tax_value		= $row['price'];
						$products['product_price_tax']	= (string)$product_price_tax_value;
				    }
				}
					
			    if ($row['sale_price'] > 0) {
					$products['product_price_discount']	= (string)$row['sale_price'];
			    } else {
					$products['product_price_discount']	= (string)0;
			    }
				
				if (!empty($PID)) {
					$products['product_sku']					= (string)$row['product_code'];
					$products['product_desc']					= (string)$row['description'];
					$products['product_desc_s']					= (string)subText(strip_tags($row['description']),5,50);
					$products['product_in_stock']				= (string)$row['quantity'];
					$products['product_in_stock_level']			= (string)$row['stock_level'];
					$products['product_sale_level']				= (string)$row['use_stock_level'];
					$products['product_category_id']			= (string)$row['cat_id'];
					$products['product_category_name']			= (string)categoryName($row['cat_id']);
					$products['product_viewed']					= (string)$row['popularity'];
					$products['product_uploadable_files']		= (string)$row['digital'];
					$products['product_digital_dir']			= (string)$row['digital_path'];
					$products['product_weight']					= (string)$row['product_weight'];
					$products['product_featured']				= (string)$row['featured'];
					$products['product_tax_id']					= (string)$row['tax_type'];
					$products['product_tax_name']				= (string)taxName($row['tax_type']);
				}
				
				$Out	.= json_encode($products);
				$n++;
			}
			
			$Out	.= '],"offset":"'.$ROW.'","quantity_rows":"'.$NUM_ROW.'","quantity_products":"'.$rows.'","query":"1"';
			
			if (!empty($PID) and $n_products == 0)	{ $Out	.= ',"product_id":"'.$PID.'"'; }
			
		} else {
			$Out	.= ',"offset":"'.$ROW.'","quantity_rows":"'.$NUM_ROW.'","quantity_products":"'.$rows.'","query":"0"';
		}
	} else {
		$Out	.= ',"query":"-1"';
	}
	return($Out);
}

function getProductItem($PID) {
	$PID		= mysql_real_escape_string($PID);
	
	$query  	=	"SELECT product_id, product_code, quantity, name, description, price, cat_id, popularity".
					", sale_price, stock_level, use_stock_level, digital, digital_path, product_weight, tax_type, featured".
					" FROM "._DB_PREFIX_.NAME_SHOP."_inventory".
					" WHERE product_id=$PID";
					
	$select	= @mysql_query($query);
	
	if ($select) {
		
		$rows	= @mysql_num_rows($select);
		
		if ($rows > 0) {
			
			$row 								= @mysql_fetch_array($select);
			
			$products['product_id']				= (string)$row['product_id'];
			$products['product_name']			= (string)$row['name'];
				
				// todo path
//				$products[product_thumb_image]		= (string)_SITE_URL_.'/images/uploads/thumbs/thumb_'.$row[image];
//				$products[product_full_image]		= (string)_SITE_URL_.'/images/uploads/'.$row[image];
				
			$products['product_thumb_image']	= (string)'';
			$products['product_full_image']		= (string)'';
				
			$config								= getConfig();
				
			$products['product_currency']		= (string)$config['defaultCurrency'];
			$products['product_price']			= (string)$row['price'];
								
			$product_tax_rate					= taxRate($row['tax_type']);

			if ($row['sale_price'] > 0 ) {
			    if ($product_tax_rate > 0) {
					$product_price_tax_value		= (int)$row['sale_price'] * (1 + $product_tax_rate/100);
					$products['product_price_tax']	= (string)$product_price_tax_value;
			    } else {
					$product_price_tax_value		= $row['sale_price'];
					$products['product_price_tax']	= (string)$product_price_tax_value;
			    }
			} else {
			    if ($product_tax_rate > 0) {
					$product_price_tax_value		= (int)$row['price'] * (1 + $product_tax_rate/100);
					$products['product_price_tax']	= (string)$product_price_tax_value;
			    } else {
					$product_price_tax_value		= $row['price'];
					$products['product_price_tax']	= (string)$product_price_tax_value;
			    }
			}
					
		    if ($row['sale_price'] > 0) {
				$products['product_price_discount']	= (string)$row['sale_price'];
		    } else {
				$products['product_price_discount']	= (string)0;
		    }
				
			$products['product_sku']					= (string)$row['product_code'];
			$products['product_desc']					= (string)$row['description'];
			$products['product_desc_s']					= (string)subText(strip_tags($row['description']),5,50);
			$products['product_in_stock']				= (string)$row['quantity'];
			$products['product_in_stock_level']			= (string)$row['stock_level'];
			$products['product_sale_level']				= (string)$row['use_stock_level'];
			$products['product_category_id']			= (string)$row['cat_id'];
			$products['product_category_name']			= (string)categoryName($row['cat_id']);
			$products['product_viewed']					= (string)$row['popularity'];
			$products['product_uploadable_files']		= (string)$row['digital'];
			$products['product_digital_dir']			= (string)$row['digital_path'];
			$products['product_weight']					= (string)$row['product_weight'];
			$products['product_featured']				= (string)$row['featured'];
			$products['product_tax_id']					= (string)$row['tax_type'];
			$products['product_tax_name']				= (string)taxName($row['tax_type']);
		}
	}
	return($products);
}

function deleteProduct($PID) {
	$PID	= mysql_real_escape_string($PID);
	if (@mysql_query("DELETE FROM "._DB_PREFIX_.NAME_SHOP."_inventory WHERE product_id=$PID")) {
		$Out	= ',"product_id":"'.$PID.'","query":"1"';
	} else {
		$Out	= ',"query":"-1"';
	}
	return($Out);
}

function updateProduct($PID, $Field, $Value) {
	$PID	= mysql_real_escape_string($PID);
	$Field	= mysql_real_escape_string($Field);
	$Value	= mysql_real_escape_string($Value);
					
	if ($Field == "product_desc")					{ $Field = "description"; 
	} elseif ($Field == "product_price")			{ $Field = "price"; 
	} elseif ($Field == "product_name")				{ $Field = "name"; 
	} elseif ($Field == "product_tax_id")			{ $Field = "tax_type"; 
	} elseif ($Field == "product_featured") 		{ $Field = "featured"; 
	} elseif ($Field == "product_weight")			{ $Field = "product_weight"; 
	} elseif ($Field == "product_digital_dir")		{ $Field = "digital_path"; 
	} elseif ($Field == "product_uploadable_files") { $Field = "digital"; 
	} elseif ($Field == "product_category_id")		{ $Field = "cat_id"; 
	} elseif ($Field == "product_sale_level")		{ $Field = "use_stock_level"; 
	} elseif ($Field == "product_in_stock_level")	{ $Field = "stock_level"; 
	} elseif ($Field == "product_in_stock")			{ $Field = "quantity"; 
	} elseif ($Field == "product_sku")				{ $Field = "product_code"; }
	
	$query	= @mysql_query("UPDATE "._DB_PREFIX_.NAME_SHOP."_inventory SET `$Field`='$Value' WHERE product_id=$PID");
	
	if ($query) { $Out	= ',"product_id":"'.$PID.'","query":"1"'; }
	else		{ $Out	= ',"query":"-1"'; }
	
	return($Out);
}
?>
