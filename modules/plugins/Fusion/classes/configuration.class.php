<?php
/**
 * Fusion Configuration Class
 * 
 * Loads XML configuration files.
 *
 * @author ShopDev
 * @version 2.0
 *
 * Copyright (c) 2012
 * This is NOT open source software
 */
class Configuration
{
	protected $config_file;
	protected $config;
	
	public function __construct($config_file)
	{
		$this->config_file = $config_file;
		$this->config = $this->loadXML();
		
		return $this;
	}
		
	public static function isSimpleXML($object)
	{
		if (get_class($object) == 'SimpleXMLElement') return true;
		
		return false;
	}
		
	public function loadXML()
	{
		if (file_exists($this->config_file))
		{
			// Load the skin's Fusion configuration file.
			// The configuration file holds all of the
			// settings that can be configured by Fusion.
			return simplexml_load_file($this->config_file);
		}
	}
	
	public function getXML()
	{
		if ($this->config == null) return null;
		return new XMLWrapper($this->config);
	}
}