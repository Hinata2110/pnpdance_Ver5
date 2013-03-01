<?php
/**
 * Fusion Latest Products Hook
 * 
 * Exposes some additional variables
 * to the skins.
 *
 * @author ShopDev
 * @version 2.0
 *
 * Copyright (c) 2012
 * This is NOT open source software
 */
if ($GLOBALS['config']->has('Fusion', 'status') && $GLOBALS['config']->get('Fusion', 'status'))
{
	// =======================================
	// = Standardize latest product listings =
	// =======================================
	if (isset($products) && is_array($products))
	{
		for ($i=0; $i<count($products); $i++)
		{
			$product_listing = new Product_Listing($products[$i]);
			$product_listing->standardize();
			$products[$i] = $product_listing->getProduct();
		}
		
		$GLOBALS['smarty']->assign('LATEST_PRODUCTS', $products);
	}
}