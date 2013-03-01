<?php
function auth($login, $password) {
	$login		= mysql_real_escape_string($login);
	$password	= mysql_real_escape_string($password);
	$query		= "SELECT * FROM ". _DB_PREFIX_ .NAME_SHOP."_admin_users WHERE username='$login'";
	$select		= @mysql_query($query);
	$Out		= 0;
	
	if (@mysql_num_rows($select) == 1) {
		$row			= @mysql_fetch_array($select);
		$customer_pass	= $row['password'];
		if (checkMd5($password) == $customer_pass) { $Out	= 1; }
	}
	return $Out;
}

function checkMd5($md5) {
	return preg_match('/^[a-z0-9]{32}$/ui', $md5);
}

function setNames($charSet) {
	
	If ($charSet == 10)		{ $query = 'SET NAMES cp1250'; }
	elseIf ($charSet == 11)	{ $query = 'SET NAMES cp1251'; }
	elseIf ($charSet == 12)	{ $query = 'SET NAMES cp1252'; }
	elseIf ($charSet == 13)	{ $query = 'SET NAMES cp1253'; }
	elseIf ($charSet == 14)	{ $query = 'SET NAMES cp1254'; }
	else					{ $query = 'SET NAMES utf8'; $charSet = 4; }
	
	if (@mysql_query($query))	{ return(',"charset":"'.$charSet.'"'); }
	else 						{ return(',"charset":"0"'); }
}

function subText( $text, $maxwords = 30, $maxchar = 300 ) {
	return mb_substr(implode(' ',array_slice(mb_split(' ', $text, $maxwords + 1 ), 0, $maxwords )), 0, $maxchar, 'UTF-8');
}

function checkLogin() {
	return(',"query":"1"');
}	

function getVar($name) {
	if (isset($_POST[$name])) {
		return trim( $_POST[$name] );
	} elseif (isset($_GET[$name])) {
		return trim( $_GET[$name] );
	} else {
		return '';
	}
}

function getConfig() {
	$query	= "SELECT array FROM ". _DB_PREFIX_ .NAME_SHOP."_config WHERE name = 'config'";
	$select	= @mysql_query($query);
	if ($select) {
		$row			= @mysql_fetch_row($select);
		$base64Encoded	= unserialize($row[0]);
		
		foreach($base64Encoded as $key => $value){
			$base64Decoded[base64_decode($key)] = stripslashes(base64_decode($value));
		}
		$Out	= $base64Decoded;
	} else {
		$Out	= "";
	}
   	return($Out);
}
?>