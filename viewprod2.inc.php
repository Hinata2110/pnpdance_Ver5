<?php
/*-----------------------------------------------------------------------------
 * Stock Levels for Product Options
 *-----------------------------------------------------------------------------
 * viewprod2.inc.php
 *-----------------------------------------------------------------------------
 * Author:   Estelle Winterflood
 * Email:    cubecart@expandingbrain.com
 * Store:    http://cubecart.expandingbrain.com
 *
 * Date:     October 27, 2006
 * Updated:  May 19, 2008
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

// uses: $_GET['productId'], $prodArray[0]['stock_level']
// sets up template variables: JS_STOCK_LEVEL_VARS, JS_UPDATE_STOCK_LEVEL
// may parse: viewprod.prod_true.buy_btn

if(!defined('CC_INI_SET')){ die("Access Denied"); }

if (empty($stock_mod)) {
	$stock_mod = fetchDbConfig("Stock_Levels_for_Product_Opts");
}

if ($stock_mod && $stock_mod['status_cc4'])
{
	// set defaults
	$view_prod->assign('JS_STOCK_LEVEL_VARS',"function updateStockLevel() { return; }\nfunction checkStock() { return true; }");
	$view_prod->assign("JS_UPDATE_STOCK_LEVEL","");

	require_once('modules'.CC_DS.'3rdparty'.CC_DS.'Stock_Levels_for_Product_Opts'.CC_DS.'classes'.CC_DS.'stockopt.inc.php');
	if (empty($stock)) {
		$stock = new stock($db, $_GET['productId']);
	}

	if ($options && $stock_mod['status_cc4'] && isset($stock) && $stock->hasSelectedStockOptions()) {
		$combos = $stock->getCombinations();
		$assign_stock = array();
		$assign_avail = array();
		foreach ($combos as $c) {
			$stock_level = $stock->getStockFromCombo($c);
			foreach ($c as $a) {
				if (!empty($stock_level['assign_key'])) {
					$assign_stock[$a] += $stock_level['stock_level'];
					$assign_avail[$a] += 1;
				} else {
					$assign_stock[$a] += 0;
				}
			}
		}
		// hide "not available" options at all times
		// show other options if in stock, or if product is entirely sold out
		$copy_options = array();
		for ($i=0; $i<count($options); $i++) {
			if (!array_key_exists($options[$i]['assign_id'],$assign_stock)) {
				// not used for stock tracking - KEEP
				$copy_options[] = $options[$i];
			} elseif ($assign_stock[$options[$i]['assign_id']] > 0) {
				// in stock - KEEP
				$copy_options[] = $options[$i];
			} elseif ($assign_avail[$options[$i]['assign_id']] && $prodArray[0]['stock_level']<=0) {
				// is available but whole product is out of stock - KEEP
				$copy_options[] = $options[$i];
			} elseif ($assign_avail[$options[$i]['assign_id']] && $config['outofstockPurchase']==1) {
				// is available and setting indicates out of stock purchases permitted - KEEP
				$copy_options[] = $options[$i];
			} elseif ($stock_mod['hide_out_of_stock_options']==0 && $assign_avail[$options[$i]['assign_id']]) {
				// setting indicates no hiding of out of stock options, so show it
				// if it is available regardless of whether there is any stock
				$copy_options[] = $options[$i];
			} else {
				// not available variants, etc
				// DELETE
			}
		}
		if (!empty($copy_options)) {
			$options = $copy_options;
		}
	}

	if ($stock->hasSelectedStockOptions())
	{
		// update product codes...
		$view_prod->assign('TXT_INSTOCK','');
		$view_prod->assign('TXT_OUTOFSTOCK','');
		$jscript = $stock->getStockJavascript();
		$view_prod->assign('JS_STOCK_LEVEL_VARS', $jscript);
		$view_prod->assign("JS_UPDATE_STOCK_LEVEL","updateStockLevel();");
	}
}

?>
