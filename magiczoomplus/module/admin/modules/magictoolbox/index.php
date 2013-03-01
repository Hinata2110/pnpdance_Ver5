<?php
if(file_exists(dirname(__FILE__).'/../../../classes/xtpl.php')) {
    //CubeCart 3
    $module = "magictoolbox";
    include("../index.php");
} else {
    //CubeCart 4
    die("Access Denied");
}
?>
