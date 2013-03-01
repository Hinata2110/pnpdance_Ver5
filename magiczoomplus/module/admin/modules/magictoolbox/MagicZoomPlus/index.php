<?php

if(!file_exists(dirname(__FILE__).'/../../../../classes/xtpl.php')) {
    //CubeCart 4
    die("Access Denied");
}

include("../../../../includes/ini.inc.php");
include("../../../../includes/global.inc.php");
require_once("../../../../classes/db.inc.php");
$db = new db();
include_once("../../../../includes/functions.inc.php");
$config = fetchDbConfig("config");

include_once("../../../../language/".$config['defaultLang']."/lang.inc.php");
$enableSSl = 1;
include_once("../../../../includes/sslSwitch.inc.php");
include("../../../includes/auth.inc.php");
include("../../../includes/header.inc.php");

if(permission("settings","read")==FALSE){
    header("Location: ".$GLOBALS['rootRel']."admin/401.php");
    exit;
}

$moduleDir = '../../../../modules/magictoolbox/MagicZoomPlus';
$coreFile = $moduleDir.'/core/magiczoomplus.module.core.class.php';
if(file_exists($coreFile)) {
    require $coreFile;
    $tool = new MagicZoomPlusModuleCoreClass;
    $iniFile = $moduleDir . '/magiczoomplus.settings.ini';
    if(file_exists($iniFile)) {
        if(isset($_POST['submit'])){
            include("../../status.php");
            include("../../../includes/functions.inc.php");
            //$module = fetchDbConfig($_GET['folder']);
            $module = array();
            //$msg = writeDbConf($_POST['module'], $_GET['folder'], $module);
            $msg = writeDbConf(array('status' => ($_POST['status'] == 'Enabled')?1:0), $_GET['folder'], $module);

            $params = array();
            foreach($tool->params->params as $id => $param) {
                if(isset($_POST[$id])) {
                    $params[] = $id;
                    $value = trim($_POST[$id]);
                    if($tool->params->params[$id]['type'] == 'array' && !in_array($value, $tool->params->params[$id]['values'])) $value = $tool->params->params[$id]['default'];
                    $tool->params->set($id, $value);
                }
            }
            $tool->params->updateINI($iniFile, $params);
            echo '<p class="infoText">Configuration Updated.</p>';
        }
        $tool->params->loadINI($iniFile);
        $module = fetchDbConfig($_GET['folder']);
        if($module === false) {
            $module = array('status' => 0);
        }
        $tool->params->params = array_merge(array('status' => array(
            'id' => 'status',
            'group' => 'Module status',
            'order' => 0,
            'default' => 'Disabled',
            'label' => 'Status',
            'type' => 'array',
            'subType' => 'select',
            'values' => array('Enabled', 'Disabled'),
            'value' => $module['status']?'Enabled':'Disabled'
        )), $tool->params->params);
        require $moduleDir.'/magiczoomplus.settings.template.php';
    } else {
        echo '<p class="warnText">File: '.$iniFile.' does not exists!</p>';
    }
} else {
    echo '<p class="warnText">File: '.$coreFile.' does not exists!</p>';
}

?>
