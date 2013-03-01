<?php
if (!defined('CC_INI_SET')) die('Access Denied');
Admin::getInstance()->permissions('settings', CC_PERM_READ, true);

global $lang;

$GLOBALS['gui']->addBreadcrumb($lang['hooks']['title_hook'], currentPage(array('action', 'hook_id', 'plugin')));

if (Admin::getInstance()->permissions('settings', CC_PERM_EDIT)) {
	if (isset($_POST['hook']) && is_array($_POST['hook'])) {
		// Validation
		$error = array();
		$required = array('trigger', 'hook_name', 'plugin');
		foreach ($_POST['hook'] as $key => $value) {
			if (in_array($key, $required)) {
				if (empty($value)) {
					$error[$key] = $key;
					unset($_POST['hook'][$key]);
				}
			}
		}

		if (empty($error)) {
			if (isset($_POST['hook']['hook_id']) && is_numeric($_POST['hook']['hook_id'])) {
				if ($GLOBALS['db']->update('CubeCart_hooks', $_POST['hook'], array('hook_id' => $_POST['hook']['hook_id']))) {
					$GLOBALS['main']->setACPNotify($lang['hooks']['notify_hook_update']);
					httpredir(currentPage(array('action', 'hook_id')));
				} else {
					$GLOBALS['main']->setACPWarning($lang['hooks']['error_hook_update']);
				}
			} else {
				if ($GLOBALS['db']->insert('CubeCart_hooks', $_POST['hook'])) {
					$GLOBALS['main']->setACPNotify($lang['hooks']['notify_hook_create']);
					httpredir(currentPage(array('action', 'hook_id')));
				} else {
					$GLOBALS['main']->setACPWarning($lang['hooks']['error_hook_create']);
					$GLOBALS['smarty']->assign('HOOK', $_POST['hook']);
				}
			}
		} else {
			$GLOBALS['main']->setACPWarning($lang['hooks']['error_hook_create']);
			$GLOBALS['smarty']->assign('HOOK', $_POST['hook']);
		}
	}
	if (isset($_POST['status']) && is_array($_POST['status'])) {
		// Enable/Disable individual hooks
		$updated = false;
		foreach ($_POST['status'] as $hook_id => $status) {
			if($GLOBALS['db']->update('CubeCart_hooks', array('enabled' => (int)$status), array('hook_id' => $hook_id))) {
				$updated = true;
			}
		}
		if ($updated) {
			$GLOBALS['main']->setACPNotify($lang['hooks']['notify_hook_status']);
		} else {
			$GLOBALS['main']->setACPWarning($lang['hooks']['error_hook_status']);
		}
		httpredir(currentPage());
	}
}
// Create list of enabled plugin folders
$plugins = $GLOBALS['hooks']->scan_all_plugins('plugins', true);
/*
if (($folders = glob(CC_ROOT_DIR.CC_DS.'modules'.CC_DS.'plugins'.CC_DS.'*', GLOB_ONLYDIR)) !== false) {
	foreach ($folders as $folder) {
		$basename	= basename($folder);
		$plugins[$basename] = array(
			'plugin'	=> $basename,
			'name'		=> str_replace('_', ' ', $basename),
		);
	}
}
*/
if (isset($_GET['plugin']) && isset($plugins[(string)$_GET['plugin']]) && !is_numeric($_GET['plugin'])) {

	$GLOBALS['gui']->addBreadcrumb($plugins[$_GET['plugin']]['name'], currentPage(array('hook_id', 'action')));

	// Load config.xml if it exists
	$config_file	= CC_ROOT_DIR.CC_DS.'modules'.CC_DS.'plugins'.CC_DS.$_GET['plugin'].CC_DS.'config.xml';
	if (file_exists($config_file)) {
		try {
			$xml	= new SimpleXMLElement(file_get_contents($config_file));
		} catch (Exception $e) {}
	}
	$this_plugin	= (isset($_POST['hook']['plugin'])) ? $_POST['hook']['plugin'] : $_GET['plugin'];

	if (isset($_GET['hook_id']) && is_numeric($_GET['hook_id']) || isset($_GET['action']) && $_GET['action'] == 'add') {
		$GLOBALS['main']->AddTabControl($lang['hooks']['title_hook'], 'hook_edit');
		if (isset($_GET['hook_id'])) {
			// Edit hook
			if (($hook = $GLOBALS['db']->select('CubeCart_hooks', false, array('hook_id' => (int)$_GET['hook_id']))) !== false) {
				$hook_data = $hook[0];
				$GLOBALS['smarty']->assign('HOOK', $hook_data);
				$GLOBALS['gui']->addBreadcrumb($hook_data['trigger']);
			} else {
				httpredir(currentPage(array('hook_id')));
			}
		} else {
			// Create hook
			if (isset($plugins) && is_array($plugins)) {
				foreach ($plugins as $plugin) {
					$plugin['selected']	= ($this_plugin === $plugin['plugin']) ? ' selected="selected"' : '';
					$smarty_data['plugins'][]		= $plugin;
				}
				$GLOBALS['smarty']->assign('PLUGINS', $smarty_data['plugins']);
			}
		}

		// List dynamic hooks
		$plugin_list = glob(CC_ROOT_DIR.CC_DS.'modules'.CC_DS.'plugins'.CC_DS.'*');
		foreach($plugin_list as $plugin_path){
			if(is_dir($plugin_path)) {
				$hook_name = 'admin.'.basename($plugin_path);
				$selected = ($hook_data['trigger']==$hook_name) ? ' selected="selected"' : '';
				$smarty_data['triggers'][] = array('trigger' => $hook_name, 'depreciated' => 0, 'selected' => $selected);
			}
		}
		
		// List static hooks		
		$hooks_list	= CC_ROOT_DIR.CC_DS.'modules'.CC_DS.'plugins'.CC_DS.'hooks.xml';
		if (file_exists($hooks_list)) {
			$source = file_get_contents($hooks_list);
			try {
				if (($xml = new SimpleXMLElement($source)) !== false) {
					foreach ($xml as $entry) {
						$attrib	= $entry->attributes();
						foreach ($attrib as $key => $value) {
							$option[$key] = (string)$value;
						}
						$option['selected']	= (isset($hook_data) && (string)$entry->attributes()->trigger === $hook_data['trigger']) ? ' selected="selected"' : '';
						$smarty_data['triggers'][]	= $option;
					}
					$GLOBALS['smarty']->assign('TRIGGERS', $smarty_data['triggers']);
				}
			} catch (Exception $e) {
				$GLOBALS['main']->setACPWarning($lang['hooks']['error_plugin_config']);
			}
		}
		$GLOBALS['smarty']->assign('DISPLAY_FORM', true);
	} else {
		$GLOBALS['main']->AddTabControl($lang['hooks']['title_hook'], 'hooks');
		$GLOBALS['main']->AddTabControl($lang['hooks']['title_hook_add'], null, currentPage(null, array('action' => 'add')));

		// Update hooks and add more if we need to...
		$hooks->install($this_plugin);

		// Display all hooks for the selected plugin
		if (($hook_list = $GLOBALS['db']->select('CubeCart_hooks', false, array('plugin' => $this_plugin))) !== false) {
			foreach ($hook_list as $hook) {
				// Edit link
				if (empty($hook['hook_name'])) $hook['hook_name'] = $hook['trigger'];
				$hook['edit']	= currentPage(null, array('hook_id' => $hook['hook_id']));
				$smarty_data['hooks'][]	= $hook;
			}
			$GLOBALS['smarty']->assign('HOOKS', $smarty_data['hooks']);

		}
		$GLOBALS['smarty']->assign('DISPLAY_HOOKS', true);
		$GLOBALS['smarty']->assign('PLUGIN', $plugins[$this_plugin]['name']);
	}
} else {
	$GLOBALS['main']->AddTabControl($lang['hooks']['title_hook'], 'plugins');
	## List all plugins using hooks
	if (isset($plugins) && is_array($plugins)) {
		foreach ($plugins as $plugin) {
			$plugin['edit']	= currentPage(null, array('plugin' => $plugin['plugin']));
			$smarty_data['plugins'][]	= $plugin;
		}
		$GLOBALS['smarty']->assign('PLUGINS',$smarty_data['plugins']);
	}
	$GLOBALS['smarty']->assign('DISPLAY_PLUGINS',true);
}

$page_content = $GLOBALS['smarty']->fetch('templates/settings.hooks.php');