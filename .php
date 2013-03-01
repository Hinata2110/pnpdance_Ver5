<?php
// cURL available?
function testCurl() {
	if(function_exists('curl_exec')) {
		return true;
	} else {
		return false;
	}
}

// fsock enabled?
function testFsock() {
	$url = "www.shopdev.co.uk";
	$fp = fsockopen ($url, 80, $errno, $errstr, 30);
	if (!$fp) {
		return false;
	} else {
		fclose ($fp);
		return true;
	}
}

// safe mode enabled?
function testSafeMode() {
	if(@ini_get('safe_mode') === true){
		return true;
	} else {
		return false;
	}
}

// ioncube available?
function testIonCube() {
	// extension available
	if (extension_loaded('ionCube Loader')) {
		return true;
	} else {
		// Ayyempt runtime loading
		$__oc=strtolower(substr(php_uname(),0,3));$__ln='/ioncube/ioncube_loader_'.$__oc.'_'.substr(phpversion(),0,3).(($__oc=='win')?'.dll':'.so');$__oid=$__id=@realpath(ini_get('extension_dir'));$__here=dirname(__FILE__);if(strlen($__id)>1&&$__id[1]==':'){$__id=str_replace('\\','/',substr($__id,2));$__here=str_replace('\\','/',substr($__here,2));}$__rd=str_repeat('/..',substr_count($__id,'/')).$__here.'/';$__i=strlen($__rd);while($__i--){if($__rd[$__i]=='/'){$__lp=substr($__rd,0,$__i).$__ln;if(@file_exists($__oid.$__lp)){$__ln=$__lp;break;}}}@dl($__ln);
		if (function_exists('_il_exec')) {
			return true;
		}
	}
	return false;
}

// Check MySQL and PHP version
function versionCheck($minimum, $current) {
	if (version_compare($minimum, $current, '<=')) {
		return true;
	} else {
		return false;
	}
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ShopDev Compatibility</title>
<style>
body {
	background:#F7F6F3;
	font-family:Arial, Helvetica, sans-serif;
	font-size:14px;
	color:#000;
}

h1 {
	font-size:2em;
	color:#4094DD;
	margin:0px;
	margin-top:30px;
	margin-bottom:15px;
	font-family:Georgia, "Times New Roman", Times, serif;
	font-weight:normal;
}

div.page {
	width:500px;
	margin:0px auto;
	margin-top:50px;
	margin-bottom:50px;
	border:1px solid #DFDFDF;
	background:#FFF;
	padding:25px;
}

th {
	background-color:#F5F5F5;
	font-weight:bold;
}

td, th {
	border-left:1px solid #E6E6E6;
	border-top:1px solid #E6E6E6;
	padding:10px;
}

table {
	border-bottom:1px solid #E6E6E6;
	border-right:1px solid #E6E6E6;
}

</style>
</head>

<body>
<div class="page">
<h1 style="margin-top:0px;">Requirements</h1>
<p>This section details some of the requirements needed to use our CubeCart skins.</p>
<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <th scope="col" width="50%">Requirement</th>
    <th scope="col" width="50%">Details</th>
  </tr>
  <tr>
    <td><div align="center">IonCube</div></td>
    <td>
        <div align="center">
            Your server must be able to run IonCube encoded files.  If the IonCube test fails, please contact your hosting provider.
        </div>
    </td>
  </tr>
  <tr>
    <td><div align="center">cURL / fsock</div></td>
    <td>
        <div align="center">
            Either cURL or fsock is required for the skin to occasionally "call home".
        </div>
    </td>
  </tr>
  <tr>
    <td><div align="center">PHP Safe Mode</div></td>
    <td>
        <div align="center">
            PHP Safe Mode should be disabled on your server.  Both CubeCart and our skins do not work well with PHP Safe Mode enabled.
        </div>
    </td>
  </tr>
  <tr>
    <td><div align="center">PHP Version</div></td>
    <td>
        <div align="center">
			PHP 5.1 or greater is required.
        </div>
    </td>
  </tr>
</table>
<h1>Compatibility Test</h1>
<p>This section allows you to determine whether your server's configuration is compatible with ShopDev's skins.</p>
<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
  <tr>
    <th scope="col" width="50%">Requirement</th>
    <th scope="col" width="50%">Pass / Fail</th>
  </tr>
  <tr>
    <td><div align="center">IonCube</div></td>
    <td>
        <div align="center">
            <?php if (testIonCube()) : ?>
            	Passed
            <?php else : ?>
                Fail<?php $fail = true; ?>
            <?php endif; ?>
        </div>
    </td>
  </tr>
  <tr>
    <td><div align="center">cURL / fsock</div></td>
    <td>
        <div align="center">
            <?php if ((testCurl() == true) || (testFsock() == true)) : ?>
                Passed
            <?php else : ?>
                Fail<?php $fail = true; ?>
            <?php endif; ?>
        </div>
    </td>
  </tr>
  <tr>
    <td><div align="center">PHP Safe Mode</div></td>
    <td>
        <div align="center">
            <?php if (testSafeMode() == true) : ?>
                Fail<?php $fail = true; ?>
            <?php else : ?>
                Passed
            <?php endif; ?>    
        </div>
    </td>
  </tr>
  <tr>
    <td><div align="center">PHP Version</div></td>
    <td>
        <div align="center">
			<?php if(versionCheck('5.1.0', PHP_VERSION) == true) : ?>
                Passed
            <?php else : ?>
                Fail<?php $fail = true; ?>
            <?php endif; ?>
        </div>
    </td>
  </tr>
</table>
<h1>Result</h1>
<?php if ($fail) : ?>
<p>Fail!  One or more requirements has not been met.  Currently, you will not be able to use our skins.  Please open a support ticket or contact your hosting provider for information on how you can meet all the requirements listed above.</p>
<?php else : ?>
<p>Success!  Your server meets all the requirements listed above.  You should have no problems installing our CubeCart skins.
<?php endif; ?>
</div>
</body>
</html>
