<?php
function keySearch($find, $array, $keyname = null) {
	foreach ($array as $key => $arrayVal) {
		if (is_array($arrayVal)) {
			$result = keySearch($find, $arrayVal, $key);
			if ($result != false) return $result;
		} else {
			if (strtolower($arrayVal) == strtolower($find)) {
				return (!empty($keyname)) ? $keyname : $key;
			}
		}
	}
	return false;
}

?>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                       