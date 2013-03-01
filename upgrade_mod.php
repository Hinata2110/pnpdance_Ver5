<?php
include_once("includes/global.inc.php");
if(isset($_GET['upgrade'])){

include_once("classes/db/db.php");
$db = new db();

$db->misc("ALTER TABLE `".$glob['dbprefix']."CubeCart_docs`
ADD `doc_view` INT(2) NOT NULL DEFAULT '1',
ADD `doc_type` INT(2) NOT NULL default '1',
ADD `box_name` VARCHAR(50) default NULL,
ADD `catId` INT(11) NOT NULL default '0'");

$db->misc("UPDATE `".$glob['dbprefix']."CubeCart_docs` SET `doc_view` = 999");


?>
Thank you. Your store has been updated. Please now delete this upgrade script.
<?php
} else {

?>
<p><strong>CC4 HIDE/SHOW/ORDER SITE DOCS v1 DB UPGRADE</strong></p>
<p>Convict provide this upgrade script without any warranty of any kind and by proceeding you are doing so entirely at your own risk. It is strongly recomended doing this upgrade just after clean CubeCart installation.</p>
<p align="center">&gt;&gt; <a href="?upgrade=1"><strong>CLICK HERE TO UPGRADE NOW</strong></a> &lt;&lt; </p>
<p align="left">
MySQL Query Executed by this script: (If you prefer you can execute this manually)
<hr />
<?php 
echo "ALTER TABLE `".$glob['dbprefix']."CubeCart_docs` ADD `doc_view` INT(2) NOT NULL DEFAULT '1'<br>";
echo "ALTER TABLE `".$glob['dbprefix']."CubeCart_docs` ADD `doc_type` INT(2) NOT NULL default '1'<br>";
echo "ALTER TABLE `".$glob['dbprefix']."CubeCart_docs` ADD `catId` INT(11) NOT NULL default '0'<br>";
echo "UPDATE `".$glob['dbprefix']."CubeCart_docs` SET `doc_view` = 999";
?>
<hr />
</p>
<?php
}
?>
