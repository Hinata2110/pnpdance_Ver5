<?php

if(!defined('CC_INI_SET')){ die("Access Denied"); }

permission('settings','read',true);

require($glob['adminFolder'].CC_DS.'includes'.CC_DS.'header.inc.php');

$moduleDir = CC_ROOT_DIR . '/modules/magictoolbox/MagicThumb';
$coreFile = $moduleDir.'/core/magicthumb.module.core.class.php';
if(file_exists($coreFile)) {
    require $coreFile;
    $tool = new MagicThumbModuleCoreClass;
    $iniFile = $moduleDir . '/magicthumb.settings.ini';
    if(file_exists($iniFile)) {
        if(isset($_POST['submit'])){
            //require CC_ROOT_DIR.CC_DS.'modules'.CC_DS.'status.inc.php';
            $cache = new cache('config.'.$moduleName);
            $cache->clearCache();
            //$module = fetchDbConfig($moduleName); // Uncomment this is you wish to merge old config with new
            $module = array(); // Comment this out if you don't want the old config to merge with new
            $msg = writeDbConf(array('status' => ($_POST['status'] == 'Enabled')?1:0), $moduleName, $module);

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
        $module = fetchDbConfig($moduleName);
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
        require $moduleDir.'/magicthumb.settings.template.php';
    } else {
        echo '<p class="warnText">File: '.$iniFile.' does not exists!</p>';
    }
} else {
    echo '<p class="warnText">File: '.$coreFile.' does not exists!</p>';
}
?>
