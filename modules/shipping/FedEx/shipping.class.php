<?php
class FedEx {
	private $_basket;
	private $_settings;

	private $_url			= 'gatewaybeta.fedex.com';
	private $_path			= '/GatewayDC';
	private $_port			= 443;

	private $_weight 		= 0;

	public function __construct($basket = false) {
		## calculate the shipping costs
		$this->_db			=& $GLOBALS['db'];
		$this->_basket		=  $basket;
		$this->_settings 	= $GLOBALS['config']->get(__CLASS__);
	}


	private function setWeightUnit(){
		if(strtolower($GLOBALS['config']->get('config','product_weight_unit'))=="kg"){
			$this->_weightUnit = "KGS";
		} else {
			$this->_weightUnit = "LBS";
		}
	}

	private function totalWeight() {
		$weight = $this->_basket['weight'];
		$weight += ($this->_settings['packagingWeight'] > 0) ? $this->_settings['packagingWeight'] : 0;
		$this->_weight = sprintf("%.1f",$weight);
	}

	private function setPayorType(){
		## Setting should be SENDER, RECIPIENT, THIRDPARTY, CREDITCARD, COLLECT, CASH
		$this->_payorType = $this->_settings['storeOwnerPays'] ? "RECIPIENT" : "SENDER";
	}

	private function friendlyServiceName() {
		if(!$this->_service) return false;

		switch($this->_service){
			case "PRIORITYOVERNIGHT":
				return "Priority Overnight";
			break;
			case "STANDARDOVERNIGHT":
				return "Standard Over Night";
			break;
			case "FIRSTOVERNIGHT":
				return "First Overnight";
			break;
			case "FEDEX2DAY":
				return "2 Day";
			break;
			case "FEDEXEXPRESSSAVER":
				return "Express Saver";
			break;
			case "INTERNATIONALPRIORITY":
				return "International Priority";
			break;
			case "INTERNATIONALECONOMY":
				return "International Economy";
			break;
			case "INTERNATIONALFIRST":
				return "International First";
			break;
			case "FEDEX1DAYFREIGHT":
				return "1 Day Freight";
			break;
			case "FEDEX2DAYFREIGHT":
				return "2 Day Freight";
			break;
			case "FEDEX3DAYFREIGHT":
				return "3 Day Freight";
			break;
			case "FEDEXGROUND":
				return "Ground";
			break;
			case "GROUNDHOMEDELIVERY":
				return "Ground Home Delivery";
			break;
			case "INTERNATIONALPRIORITY FREIGHT":
				return "International Priority Freight";
			break;
			case "INTERNATIONALECONOMY FREIGHT":
				return "International Economy Freight";
			break;
			case "EUROPEFIRSTINTERNATIONALPRIORITY":
				return "Europe First International Priority";
			break;
			default:
				return false;

		}

	}

	public function calculate() {
		return $this->request();
	}

	public function tracking($tracking_id = false) {
		return false;
	}

	################################################

	private function getQuote() {

		$xml	= new XML(true);

		$xml->startElement('FDXRateRequest');
			$xml->writeAttribute('xmlns:api','http://www.fedex.com/fsmapi');
			$xml->writeAttribute('xmlns:xsi','http://www.w3.org/2001/XMLSchema-instance');
			$xml->writeAttribute('xsi:noNamespaceSchemaLocation','FDXRateRequest.xsd');

        $xml->startElement('RequestHeader');

            $xml->writeElement('CustomerTransactionIdentifier',md5(time().rand(0,9999)));
            $xml->writeElement('AccountNumber',$this->_settings['accNo']); // account NUmber
            $xml->writeElement('MeterNumber',$this->_settings['meterNo']); // meter Number
            /*
            FDXE, FDXG
            */
            $xml->writeElement('CarrierCode',$this->_carrierCode);
            $xml->endElement();
        /*
        REGULARPICKUP, REQUESTCOURIER, DROPBOX, BUSINESSSERVICE CENTER, STATION
		Only REGULARPICKUP, REQUESTCOURIER, and STATION are allowed with International freight shipping.
		*/
        $xml->writeElement('DropoffType',$this->_settings['dropoffType']);
        /* PRIORITYOVERNIGHT, STANDARDOVERNIGHT, FIRSTOVERNIGHT, FEDEX2DAY, FEDEXEXPRESSSAVER, INTERNATIONALPRIORITY, INTERNATIONALECONOMY, INTERNATIONALFIRST, FEDEX1DAYFREIGHT, FEDEX2DAYFREIGHT, FEDEX3DAYFREIGHT, FEDEXGROUND, GROUNDHOMEDELIVERY, INTERNATIONALPRIORITY FREIGHT, INTERNATIONALECONOMY FREIGHT, EUROPEFIRSTINTERNATIONALPRIORITY
		*/
        $xml->writeElement('Service',$this->_service);
        /*
        • FEDEXENVELOPE, FEDEXPAK, FEDEXBOX, FEDEXTUBE, FEDEX10KGBOX, FEDEX25KGBOX, YOURPACKAGING
		If value entered in this element is FEDEXENVELOPE, FEDEX10KGBOX, or FEDEX25KGBOX, an MPS rate quote is not allowed.
		*/
        $xml->writeElement('Packaging',$this->_settings['packaging']);
        /*
        • LBS, KGS
		Must be LBS for a U.S. Domestic Express rate quote.
        */
        $xml->writeElement('WeightUnits',$this->_weightUnit);
        /*
        Format: One explicit decimal position (e.g. 5.0). 8 total length including decimal place.
        */
        $xml->writeElement('Weight', $this->_weight);
        $xml->startElement('OriginAddress');
            /*
			Required only if Sender Country Code is US or CA.
			Represents the state or province from which the shipment will be originating.
            */
            $xml->writeElement('StateOrProvinceCode',$this->_settings['state']);
            /*
            Required only if Sender Country Code is US or CA.
			May be required for other postal-aware countries.
			Represents the postal code from which the shipment will be originating.
			Valid characters: A-Z; 0-9; a-z
			*/
            $xml->writeElement('PostalCode',$this->_settings['postcode']);
            /*
            Represents the country from which the shipment will be originating.
            e.g. US,CA
            */
            $xml->writeElement('CountryCode',$this->_settings['country']);
        $xml->endElement();
        $xml->startElement('DestinationAddress');
            /*
			Required only if Recipient Country Code is US or CA.
			Represents the state or province to which the shipment is destined.
			*/

            $xml->writeElement('StateOrProvinceCode',$this->_destinationState);
            /*
            Required only if Recipient Country Code is US or CA.
			May be required for other postal-aware countries.
			Represents the postal code to which the shipment is destined.
			Valid characters: A-Z; 0-9; a-z
			*/
            $xml->writeElement('PostalCode',$this->_destinationZip);
            /*
            Represents the country code to which the shipment is destined.
			*/
            $xml->writeElement('CountryCode',$this->_destinationCountry);
        $xml->endElement();

        $xml->startElement('Payment');
        	/*
        	Defaults to  SENDER, if other than this rates will be Zero
        	*/
            $xml->writeElement('PayorType',$this->_payorType);
        $xml->endElement();

        $xml->writeElement('PackageCount','1');
        $xml->endElement();

		$data = $xml->getDocument();

		## Send request
		$request	= new Request($this->_url, $this->_path, $this->_port);
		$request->setSSL();
		$request->setMethod("post");
		$request->setData($data);
		$request->cache(true);
		unset($xml);
		$response	= $request->send();
		if ($response) {
			try {
				$xml	= new simpleXMLElement($response);
				if($xml->Error){
	            	trigger_error('FedEx Error Number '.$xml->Error->Code.': (Carrier Code - '.$this->_carrierCode.', Service - '.$this->_service.') '.$xml->Error->Message);
				} elseif($xml->Code){
					trigger_error('FedEx Error '.$xml->Code.': '.$xml->Message);
				} else {

					$value = $xml->EstimatedCharges->DiscountedCharges->NetCharge;
					$value += ($this->_settings['handling']>0) ? $this->_settings['handling'] : 0;
					if($value>0 || $this->_payorType=="RECIPIENT") {
						$package[]	= array(
							'id'		=> (string)$xml->ReplyHeader->CustomerTransactionIdentifier,
							'name'		=> (string)"FedEx ".$this->friendlyServiceName(),
							'value'		=> (string)$value,
							'tax_id'	=> (int)$this->_settings['tax'],
							## Delivery times
							'shipping'	=> "",
							'delivery'	=> "",
							'next_day'	=> "",
						);
				}

				}
			} catch (Exception $e) {
   				trigger_error('FedEx Error: Return string is not a valid xml');
			}
		}
		unset($request);
		return (isset($package)) ? $package[0] : false;
	}

	private function request() {

		## Decide who pays for the shipping
		$this->setPayorType();
		## Set Correct Weight Unit
		$this->setWeightUnit();
		## Calculate total weight including packaging
		$this->totalWeight();
		## Get delivery address
		$delivery	= (isset($this->_basket['delivery_address'])) ? $this->_basket['delivery_address'] : $this->_basket['billing_address'];
		## Get delivery country ISO
		$this->_destinationCountry = $delivery['country_iso'];
		## Get state format
		$this->_destinationState = $delivery['state_abbrev'];
		## Destination zip/postcode
		$this->_destinationZip = $delivery['postcode'];
		## Strip Underscore From BUSINESSSERVICE_CENTER
		$this->_settings['dropoffType'] = str_replace("_"," ",$this->_settings['dropoffType']);

		if(is_array($this->_settings)){
			foreach($this->_settings as $key => $value) {
				$matrix = substr($key,0,4);
				if($matrix == "FDXG" || $matrix == "FDXG"){
					$parts = explode("_", $key,2);
					$this->_service = str_replace("_"," ",$parts[1]);
					$this->_carrierCode = $parts[0];
					$productQuote = $this->getQuote();
					if($productQuote) $package[] = $productQuote;
				}
			}
		}
	return (isset($package)) ? $package : false;
	}
}

?>