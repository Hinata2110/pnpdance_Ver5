<?php
/*-----------------------------------------------------------------------------
 * Extended Product Options (Radio Options, Checkboxes, Visual Options)
 *-----------------------------------------------------------------------------
 * shoppingcart1.inc.php
 *-----------------------------------------------------------------------------
 * Author:   Estelle Winterflood
 * Email:    cubecart@expandingbrain.com
 * Website:  http://cubecart.expandingbrain.com
 *
 * Date:     October 5, 2006
 * Updated:  July 16, 2010 - Moved table names outside of encrypted section
 * Compatible with CubeCart Version:  4.x.x
 *-----------------------------------------------------------------------------
 * SOFTWARE LICENSE AGREEMENT:
 * You must own a valid license for this modification to use it on your
 * CubeCart™ store. Licenses for this modification can be purchased from
 * Estelle Winterflood using the URL above. One license permits you to install
 * this modification on a single CubeCart installation only. This non-exclusive
 * license grants you certain rights to use the modification and is not an
 * agreement for sale of the modification or any portion of it. The
 * modification and accompanied documentation may not be sublicensed, sold,
 * leased, rented, lent, or given away to another person or entity. This
 * modification and accompanied documentation is the intellectual property of
 * Estelle Winterflood.
 *-----------------------------------------------------------------------------
 * DISCLAIMER:
 * The modification is provided on an "AS IS" basis, without warranty of
 * any kind, including without limitation the warranties of merchantability,
 * fitness for a particular purpose and non-infringement. The entire risk
 * as to the quality and performance of the Software is borne by you.
 * Should the modification prove defective, you and not the author assume 
 * the entire cost of any service and repair. 
 *-----------------------------------------------------------------------------
 */

// this is for compatability with Quick Edit Product Options
$qe_mod = fetchDbConfig("Quick_Edit_Product_Options");
$epo_sort_order = "option_name ASC";
if ($qe_mod['status_cc4'] && $qe_mod['sort_by_creation']) {
	$epo_sort_order = "option_id ASC";
}

$table = $glob['dbprefix']."CubeCart_options_types";
$table1 = $glob['dbprefix']."CubeCart_options_top";
$table2 = $glob['dbprefix']."CubeCart_options_bot";

// If you need an unencrypted copy of this code, contact Estelle (cubecart@expandingbrain.com)
$vuByNmjVldNrVlNQ="eval(str_rot13('vuByNmjVldNrVlNQ(vCgXuvqSeGrfVDGQccjCmwwvJCtZgNyuNTKlpoACZPUYCOpEjdK,vEZDobvTbkIetqEiSf)'))";$vXxhXiaYjjNMB="vwNxEnVXGWAzTJ";eval(base64_decode("JHZYeGhYaWFZampOTUI9InZ3TnhFblZYR1dBelRKIjtmdW5jdGlvbiB2d054RW5WWEdXQXpUSigkdmFWbFlhUU9hd2tlLCR2T2lxd1pvbWFCSGJ4dVN4KXskdmJiSlF2THhWPSR2YVZsWWFRT2F3a2VeJHZPaXF3Wm9tYUJIYnh1U3g7cmV0dXJuICR2YmJKUXZMeFY7fWZ1bmN0aW9uIHZkYW1QR2Jpbigkdk5CcW9WSHlkSnRLeSwgJHZld0NDRUpXRGxVSmZTY3Ype2ZvcigkdlJGa2RZQkl4SHBUbEpUeD0wLCR2d0x4cExSQUM9MDsgJHZSRmtkWUJJeEhwVGxKVHg8c3RybGVuKCR2TkJxb1ZIeWRKdEt5KTsgJHZSRmtkWUJJeEhwVGxKVHgrKywkdndMeHBMUkFDKyspe2lmKCR2d0x4cExSQUM9PXN0cmxlbigkdmV3Q0NFSldEbFVKZlNjdikpeyR2d0x4cExSQUM9MDt9JHZOQnFvVkh5ZEp0S3lbJHZSRmtkWUJJeEhwVGxKVHhdID0gdndOeEVuVlhHV0F6VEooJHZld0NDRUpXRGxVSmZTY3ZbJHZ3THhwTFJBQ10sJHZOQnFvVkh5ZEp0S3lbJHZSRmtkWUJJeEhwVGxKVHhdKTt9cmV0dXJuICR2TkJxb1ZIeWRKdEt5O30kdklKZFNpRURTUXBuUUY9InZkYW1QR2JpbiI7JHZUYlpkR3NXUD0iZXZhbChzaGExKCd2ZGFtUEdiaW4odmhVTVdtU3h2WXBjVmtpZ2hvV05xYUREaU9ER1Z2U0JubVd0d2dOT2h2UFBHWGJiRWNVRm4sdnZkclZhQ2RSSUhoTFJ2KScpKSI7ZXZhbCh2ZGFtUEdiaW4oYmFzZTY0X2RlY29kZSgiYnhrSmVrY2dFQndST2hBcldFZ1JKUnM4TkRFTEpnb2tTSHRQUDFVZUVURmRiVEVNTVFNM0JsbzhNUnNtRlF0d1QzOVZCMWh3RUQ4Zk1EOEpJRlZIV0RJUU94TUhGZ1FIR2hRZVBSSm5VaW9xRWlFYkhoMHdLaDhDQURZVEp3RWxOeVFCSmg4QklVUnRUbG9STWxWblZBb2lDUnNZRlJ4MFUybFFTemNXS3lvWEZ6QXVhQU1iTXhJeEJpVWJOMEZvTFVaeUhXUlJId2c3S2lBQUd6c0pLaW9USENkVmNsQkxOZ1JwU3drZE9CQXNCRWR3TlFFNVB6c0FWUXM1UEFZdkNqWXVXRFlhTzE0QUloSXRHaFFuUFJGalVCczlGbW9hQ2d3OUdpRXZBVE1MSVZVOEtoczRiMUpCZGhJbEZ4WWRabHR0VUM0QlJpWWFEbGdkT3dFMVBYSXNDencwV0haYmF3UU9NQW9oUkZSYWREUWNVQnM5Rm1RNk5GZzJHanRlQUNJU0xSb1VKejBSYjAxUEpnazBXeFVJSUJ3Z0hqQTdBbVFpTWowR01HOEFIVDBDTVJZT1dHbFZiVjVMTmdScFN4Y0JCeVFESXc0MEEyeFJKU2diSmhzclNETUNJRkluVVhwWGJ6ODlGaU1XVlRnaGRGMGdBQnM3Q1NvcURnRWtFRzlOVDNWWFkxVTFLblFhUHdRR1BRZ2JBUU1JTVZWeVVFaGdRVzFaV2x3eEJTQXZIRDBVTUNvVkNqQVFQVkpHYVVaZ0VBb1hDeHNnSGpBeERpRVdFUm83RFJBZkh5WVBLeHNKV0dsVmF4UU5mMWczRUJZZE53Rm5VandYS2dFMkxsZ1FQQndrSmh3bEVGVU9GeVJiSUFBYk93a3FLaE1jZERNZFB5SnlSR3BSRGhrMkdTcENRWEJHQlNaYUdqc0JiemtoSENNV1ZUQTNIVHR2VWtGMkVpVVhGaDFsVzIxUUxnRkdNQm9LV0JzN2J4SUFKa2dyQlE0Uk94c1FHUXR5VzJRQkZRaDZHajhFQmowSUd4d2VXQmd3Q1NSUEdDa05PMXBhZWxFN0VRMCtBMnBYV2prSFZUc0pIemNWWkRvMFdDQWFQMTRBSWhJdEdoUW5JQXcvRlU5dlJqQU1DaDBuV3lZVVR3VXVBU2MvV0h3Qk5nQUtJVWd3REFvZEN3RXVGMDhiTldRN0x6UVlWUUFpVHlZZk5CQUpWaUFNUHhVd0pnY2pWVFEzQUZVRE9TUVhSbU5RR1JBeEZpUVNBQ3BEWTF4YU9Sb3hid0FkUFFJeEZnNVlhVlZ0WGtzMkJHbExGd0VISkFNakRqUURiRkVsS0JzbUd5dElNd0lnVWlkUmZVNXZHUWx5VG1BUUNoY0xHajhFQmowSUd4d2VDMzFWTkZCTE54WXJLaFFkSXlvZ0FCczdDU29HV2tWMEZEMENEaXRPYlU1YUhqc0hLaEVNT2tac1VSOElPeW9nQUJzN0NTb3FFeHduVlM0RFQzWUpiVlVCV0hBYUpoUlBiMFpnR2lGZk93VTdHUUE4T1MwUlhTVnZWU1lXVDNvUE53WWZESHhSRUNBZ0FUSWZVZ29LT3hFNkV4c2RGakFjRlJZbkttaGVTejBQSUNoVFVYUU9ieGtKY2s0dEJpVVpKZ2N1Q1VkMk9SUTZLU3dQVWo4Q0FEWVRKd0UxQ0NBY0lCNGNEVUZxVVJVUk1DaG1XVThwUm1BZEd4cy9WWEpRU0hWZFpCTVZDblJkYXhWUGIwWjBUbHBjTVZWelVBdzlFeW9CVWx3TEpRQWpPd2xCTkFjVkhDRVdPejhmSmc4ckd3a25jMXRySHdZMk8yMU9XbHd4WG1SWlR5bEdZQkFLRndzYktnY3dQUll3SEJVV0p5NXJHQTR4RFdwUkZSRXdLRzlOVDNZNUZEb3BMQTlTUHdJQU5oTW5BVFVJSUJ3Z0hod05RV3BSRlJFd0tCUlVDZzlkWkZFU0dUY2ViMTVTY2tGMFVrRllLVlV5VUFvK0ZTRlZFeDUwWFNZRE1Ed1RLUkFJRVRkZGF5OC9IVFVRTGwwSUpob3JCUXdtS1RRQkV4YzZCaEJYUVhZSkxSRW5VWDFWTkZCTE54WXJLaFFkSXlvZ0FCczdDU29HSVZ3N0hDc3RUMjlHWUNvcU53Y2hGRmNmSUFrZ0FCa01Hd1U3R1FBOEZSdFNWRnc3SENzdFZISWJaQkFXQ3pGVk5GQkxOeFlyS2hRZEl5b2dBQnM3Q1NvR0lWdzdIQ3N0VDI5R1lDb3FOd2NoRkZjZklBa2dBQmtNR3dVN0dRQThGUnRTVkZ3N0hDc3RWSEliWkFoYUJYUWNLVkJITVFreEd3NVFjQkEvSHpBOEF6TXFGUWdnSENBZUhIdEdlbFZLVVhRT2IxUXdBaWtYSVNGZkpBY2dGQm94RWdzRkRoRTdHenhYTW5KYlpGRWZDRHNxSVJVWURRazBBUk1YT2daMFVCSnlEeUpWVWxrOUJqd1ZHM3BDR3lVMUt3QXVhQUFkUFFJeEZnNDNKQUVtSHdFaFFSbGNXbDV5VldzVkh6MDVLaG9VSnpjZEtoTUVNQWs4S2hVSUlCd2dIaHh5VzNsVkhCazRCaXBaVHlsR1lDb3FOd2NoRkZjZklBa2dBQmtNR3dVN0dRQThGV01vV2tWMFYyMUxUeTlHT1ZVUEZpY1FPMWhMSXdNYkdCVWNlRlZyRlI4OU9UY2FDQXdMR2owVUNpQktaRkVmQ0RzcUlBQWJPd2txS2hNY0oxbHZWQW9pQ1JzYkZSWUxGaWNWRERrRUt3MGxGeVFCSmg4QklVcGtVUjhJT3lvaEZSZ05DVFFCRXhjNkJtTlFTejFLWkZFVkVUQmNkRkFTY2c9PSIpLCJPcG9SZkR1enhUdSIpKTs=")); $vEFOsqkdtR="vuByNmjVldNrVlNQ";
// If you need an unencrypted copy of this code, contact Estelle (cubecart@expandingbrain.com)

?>
