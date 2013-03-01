<?php
/*
  Dynamic Error Pages v2.01    Copyright (c) 2005 Sabre Web Design (www.sabrewebdesign.com)

   *    Copy and paste this script into a page and name it "errorpage.php". Upload it to the root of your site. 
   *    Change the "error@yourdomain.com" email below to your email address, IF YOU WISH TO RECEIVE EMAILS OF ERRORS.
   *    See the final block of code for more email options.
   *    Add the following lines to your .htaccess file:
            ErrorDocument 400 errorpage.php
            ErrorDocument 401 errorpage.php
            ErrorDocument 403 errorpage.php
            ErrorDocument 404 errorpage.php
            ErrorDocument 500 errorpage.php
*/

// Setup
$email = 'info@pnpdance.com';  //email address where error reports are sent

// Get Variables
$error = $_SERVER['REDIRECT_STATUS'];
$referring_url = $_SERVER['HTTP_REFERER'];
$requested_url = $_SERVER['REQUEST_URI'];<h4></h4>
$referring_ip = $_SERVER['REMOTE_ADDR'];
$server_name = $_SERVER['SERVER_NAME'];

//		Different error messages to display
//		Edit the HTML code inside any of the $errordesc below to your liking. 
switch ($error) {

# Error 400 - Bad Request
case 400:
$errorname = 'Error 400 - Bad Request';
$errordesc = '<center><h1>Bad Request</h1>
        <p>Error 400</p>
        <p>The URL that you requested was a bad request.</p></center>';
   break;

# Error 401 - Authorization Required
case 401:
$errorname = 'Error 401 - Authorization Required';
$errordesc = '<center><h2>Authorization Required</h2>
        <p>Error 401</p>
        <p>The URL that you requested requires pre-authorization to access.</p></center>';
   break;

# Error 403 - Access Forbidden
case 403:
$errorname = 'Error 403 - Access Forbidden';
$errordesc = '<center><h2>Access Forbidden</h2>
        <p>Error 403</p>
        <p>Access to the URL that you requested, is forbidden.</p></center>';
   break;

# Error 404 - Page Not Found
case 404:
$errorname = 'Error 404 - Page Not Found';
$errordesc = '<center><h2>File Not Found</h2>
        <p>Error 404</p>
        <p>We are sorry but the page you are looking for cannot be found.</p></center>';
   break;

# Error 500 - Server Configuration Error
case 500:
$errorname = 'Error 500 - Server Configuration Error';
$errordesc = '<center><h2>Server Configuration Error</h2>
        <p>Error 500</p>
        <p>The URL that you requested resulted in a server configuration error.</p></center>';
   break;

# Unknown error
default:
$errorname = 'Unknown Error';
$errordesc = '<center><h2>Unknown Error</h2>
        <p>The URL that you requested resulted in an unknown error.</p></center>';
}

// Display selected error message and provide return link
echo($errordesc);
if (!$referring_url == '') {
echo '<p><center><a href="'.$referring_url.'"><b><< Go back to previous page.</b></a></center></p>';
} else {
echo '<p><center><a href="javascript:history.go(-1)"><b><< Go back to previous page.</b></a></center></p>';


////////// Email section if you wish to receive notification via email.  Delete this block if you don't.

//		The following line can be anything you want. It shows in the body of the email as the source of the bad request.
$referring_url = "www.pnpdance.com";
$datetime = date("l dS of F Y - H:i:s");
$message .= '<b>The following error has been received on '.$datetime.'</b>';
$message .= '<br><br><b><b>'.$errorname.'</b></b>';
$message .= '<br><b>Requested URL:</b> <a href="http://'.$server_name.$requested_url.'">'.$requested_url.'</a>';
$message .= '<br><b>Referring URL:</b> <a href="'.$referring_url.'">'.$referring_url.'</a>';
$message .= '<br><br><b>IP Address:</b> '.$referring_ip;
$to = "$email";
$subject = "$errorname";

//		The following can also be anything you want. It shows up in the "From" line of the email.
//$headers = "From: Error@pnpdance.com\r\n";
//$headers .= "Content-type: text/html\r\n";
//mail($to,$subject,$message,$headers);
//}
////////// End of e-mail section.

?>