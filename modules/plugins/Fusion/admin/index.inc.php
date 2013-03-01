<?php
/**
 * Fusion Module Settings
 * 
 * Handles module settings for the Fusion Framework.
 *
 * @author ShopDev
 * @version 1.0
 *
 * Copyright (c) 2011
 * This is NOT open source software
 */

// Init. module
$module	= new Module(__FILE__, $_GET['module'], 'admin/index.tpl', true, false);

// Dispay the module
$module->fetch();
$page_content = $module->display();