<?php
/*-----------------------------------------------------------------------------
 * Stock Levels for Product Options
 *-----------------------------------------------------------------------------
 * cart1.inc.php
 *-----------------------------------------------------------------------------
 * Author:   Estelle Winterflood
 * Email:    cubecart@expandingbrain.com
 * Store:    http://cubecart.expandingbrain.com
 *
 * Date:     October 22, 2006
 * Updated:  December 10, 2007
 * Compatible with CubeCart Version:  4.x.x
 *-----------------------------------------------------------------------------
 * SOFTWARE LICENSE AGREEMENT:
 * You must own a valid license for this modification to use it on your
 * CubeCart™ store. Licenses for this modification can be purchased from
 * Estelle Winterflood using the URL above. One license permits you to install
 * this modification on a single CubeCart installation only. This non-exclusive
 * license grants you certain rights to use the modification and is not an
 * agreement for sale of the modification or any portion of it. The
 * modification and accompanied documentation may not be sublicensed, sold,
 * leased, rented, lent, or given away to another person or entity. This
 * modification and accompanied documentation is the intellectual property of
 * Estelle Winterflood.
 *-----------------------------------------------------------------------------
 * DISCLAIMER:
 * The modification is provided on an "AS IS" basis, without warranty of
 * any kind, including without limitation the warranties of merchantability,
 * fitness for a particular purpose and non-infringement. The entire risk
 * as to the quality and performance of the Software is borne by you.
 * Should the modification prove defective, you and not the author assume 
 * the entire cost of any service and repair. 
 *-----------------------------------------------------------------------------
 */

// uses: $productId, $options
// may adjust: $product[0]['stock_level'], $product[0]['productCode']
// may temporarily adjust: $config['outofstockPurchase']
// may modify template variable: VAL_PRODUCT_CODE

// for backwards compatibility may setup: $productCode, $stock_level

if(!defined('CC_INI_SET')){ die("Access Denied"); }

unset($productCode);
unset($reset_allow_out_of_stock);

$stock_mod = fetchDbConfig("Stock_Levels_for_Product_Opts");
if ($stock_mod && $stock_mod['status_cc4'])
{
	require_once('modules'.CC_DS.'3rdparty'.CC_DS.'Stock_Levels_for_Product_Opts'.CC_DS.'classes'.CC_DS.'stockopt.inc.php');
	$stock = new stock($db, $productId);
	if ($stock && $stock->hasSelectedStockOptions())
	{
		// determine stock level for this product variant
		$e_stock_info = $stock->getStockLevel($options);
		$stock_level = $e_stock_info['stock_level'];

		if ($stock_level == "") {
			$stock_level = 0;
			if ($config['outofstockPurchase'] == 1) {
				// adjust this temporarily, because "not available" variants can never be purchased!
				$config['outofstockPurchase'] = 0;
				$reset_allow_out_of_stock = 1;
			}
		}

		// OVERWRITE stock level!
		$product[0]['stock_level'] = $stock_level;

		// determine product code for this product variant
		if (!empty($e_stock_info['product_code']))
		{
			if ($stock_mod['append_code']) {
				$productCode = $product[0]['productCode'].$stock_mod['append_char'].$e_stock_info['product_code'];
			} else {
				$productCode = $e_stock_info['product_code'];
			}
			// OVERWRITE product code!
			$product[0]['productCode'] = $productCode;
			$view_cart->assign("VAL_PRODUCT_CODE",$productCode);
		}
	}
	else
	{
		// for backwards compatibility
		$stock_level = $product[0]["stock_level"];
	}
}

?>
