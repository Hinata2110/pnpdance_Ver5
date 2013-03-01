<?php
if(!defined('CC_DS')) die('Access Denied');

/* Generate the alternate checkout button */

if ($google = $GLOBALS['config']->get('Google_Checkout')) {

	$scope = (isset($google['scope']) && !empty($google['scope']) && ($google['scope']=='main' && $GLOBALS['gui']->mobile) || ($google['scope']=='mobile' && !$GLOBALS['gui']->mobile)) ? false : true;

	if ($google['status'] && $scope) {
		switch ($google['size']) {
			case 'small':
				$width	= 160;
				$height	= 43;
				break;
			case 'medium':
				$width	= 168;
				$height	= 44;
				break;
			case 'large':
			default:
				$width	= 180;
				$height = 46;
				break;
		}
		if(strtolower($google['mode']) == "sandbox") {
        	$server_url = "https://sandbox.google.com/checkout/";
      	} else {
        	$server_url=  "https://checkout.google.com/";  
      	}
		$list_checkouts[]	= sprintf('<a href="?_a=gateway&amp;module=Google_Checkout"><img src="'.$server_url.'buttons/checkout.gif?merchant_id=%s&amp;w=%d&amp;h=%d&amp;style=trans&amp;variant=text" alt="" /></a>', $google['merchId'], $width, $height);
	}
}