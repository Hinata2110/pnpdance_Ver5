<?php
/**
 * Fusion Popular Products Hook
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
	// ========================================
	// = Standardize popular product listings =
	// ========================================
	if (isset($vars) && is_array($vars))
	{
		for ($i=0; $i<count($vars); $i++)
		{
			$product_listing = new Product_Listing($vars[$i]);
			$product_listing->standardize();
			$vars[$i] = $product_listing->getProduct();
		}
	}
}