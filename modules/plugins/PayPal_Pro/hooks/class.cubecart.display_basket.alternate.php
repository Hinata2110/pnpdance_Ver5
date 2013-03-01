<?php
/*
$Date: 2010-06-08 17:11:38 +0100 (Tue, 08 Jun 2010) $
$Rev: 1169 $
*/

if ($pp_pro = $GLOBALS['config']->get('PayPal_Pro')) {
	
	$scope = (isset($pp_pro['scope']) && !empty($pp_pro['scope']) && ($pp_pro['scope']=='main' && $GLOBALS['gui']->mobile) || ($pp_pro['scope']=='mobile' && !$GLOBALS['gui']->mobile)) ? false : true;

	if ($pp_pro['status'] && $scope) {
		if ($GLOBALS['session']->get('stage', 'PayPal_Pro')=='DoExpressCheckoutPayment') {
			$load_checkouts = false;
			if ($this->_basket['shipping_verified'] && $_GET['_a']=='confirm' && !isset($_SESSION['__system']['GUI_MESSAGE']) && (isset($this->_basket['shipping']) || isset($this->_basket['digital_only']))) {
				$GLOBALS['smarty']->assign('CHECKOUT_BUTTON', $GLOBALS['language']->gateway['make_payment']);	
			} else {
				$GLOBALS['smarty']->assign('DISABLE_CHECKOUT_BUTTON', true);
			}
		} else {
			if (preg_match('#^([a-z]+)-([A-Z]+)#', $GLOBALS['language']->current(), $match)) {
				switch (strtoupper($match[2])) {
					case 'AU':
					case 'DE':
					case 'ES':
					case 'FR':
					case 'GB':
					case 'IT':
					case 'JP':
					case 'NL':
					case 'PL':
						$locale = str_replace('-', '_', $GLOBALS['language']->current());
						break;
					default:
						$locale = 'en_US';
				}
			} else {
				$locale	= 'en_US';
			}
			## Generate the PayPal Pro button
			$button	= '<a href="'.$GLOBALS['storeURL'].'/index.php?_a=gateway&amp;module=PayPal_Pro" target="_self" title="" /><img src="https://www.paypal.com/'.$locale.'/i/btn/btn_xpressCheckout.gif" alt="" /></a>';
			$list_checkouts[]	= (isset($basket['PayPal_Pro'])) ? null : $button;
			$GLOBALS['session']->set('stage', 'SetExpressCheckout', 'PayPal_Pro');
		}
 	}
}