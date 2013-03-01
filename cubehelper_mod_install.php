<?php
/*
 * mod_install.php
 */
require_once 'ini.inc.php';
require_once "includes".CC_DS."global.inc.php";

if ($glob['encoder'] == 'zend') {
	require_once 'index_enc_zend.php';
} else {
	require_once 'index_enc_ion.php';
}

// get category array in foreign innit
$maxId = $db->select("SELECT max(moduleId)+1 as 'id' FROM ".$glob['dbprefix']."CubeCart_Modules");
	
$sql = "INSERT INTO `".$glob['dbprefix']."CubeCart_Modules` 
           values(".$maxId[0][id].",'cubehelper','Customer_registration',1,1)";
//echo $sql;
        
//$db->misc($sql);

 
$status = $db->misc("CREATE TABLE `".$glob['dbprefix']."cubehelper_reg_data` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `field_name` varchar(30) NOT NULL,
  `field_value` varchar(30) NOT NULL,
  `sort_order` int(10) unsigned NOT NULL,
  `parent_id` int(10) unsigned NOT NULL,
  PRIMARY KEY  (`id`)
  );");
  
 $status = $db->misc("CREATE TABLE `".$glob['dbprefix']."cubehelper_reg` (
  `id` int(10) unsigned NOT NULL auto_increment,
  `field_name` varchar(30) NOT NULL,
  `field_type` int(10) unsigned NOT NULL,
  `require_flag` int(10),
  `show_in_order_flag` int(10),
  `sort_order` int(10),
   PRIMARY KEY  (`id`)
  );");
  
  $status = $db->misc("CREATE TABLE `".$glob['dbprefix']."cubehelper_reg_x_customer` (
   `customer_id` int(10) unsigned NOT NULL,
   `reg_field_id` int(10) unsigned NOT NULL,
   `reg_data_id` int(10) unsigned NOT NULL,
   `reg_field_value` varchar(255) NOT NULL,
    PRIMARY KEY  (`customer_id`,`reg_field_id`, `reg_data_id` )
  );");
 
echo "<br>Congratulation! - database setup has been completed successfully!	"



?>