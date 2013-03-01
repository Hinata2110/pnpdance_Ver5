<?php
require dirname(__FILE__).DIRECTORY_SEPARATOR.'ini.inc.php';
define('CC_IN_ADMIN', false);

header('X-Frame-Options: SAME-ORIGIN'); // do not allow iframes

global $config_default;

if (file_exists(CC_ROOT_DIR.CC_DS.'index_no_enc.php')) {
	require_once CC_ROOT_DIR.CC_DS.'index_no_enc.php';
} else {
	## Let's load the encoded script, based on what encoders are available
	$php_version = (PHP_5_3) ? '5.3' : '5.2';
	require_once ($glob['encoder'] == 'zend') ? CC_ROOT_DIR.CC_DS.'index_php'.$php_version.'_enc_zend.php' : CC_ROOT_DIR.CC_DS.'index_enc_ion.php';
}