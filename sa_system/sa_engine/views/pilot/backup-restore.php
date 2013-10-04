<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../inc/config.inc.php';header('Location:'.SITE_URL);exit;}
/**
 * Super Amazing Commerce
 *
 * Super Amazing Commerce allows developers the ability to build a 
 * completely customizable, secure, fast, online store built for all devices.
 *
 * @package        Super Amazing Commerce
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @copyright      Copyright (c) 2010 - 2013, Super Amazing
 * @license        GPL v2 <http://choosealicense.com/licenses/gpl-v2/>        
 * @link           https://github.com/superamazing/super-amazing-commerce
 * @docs           https://github.com/superamazing/super-amazing-commerce/wiki
 * @since          Version 2.0.0
 * -----------------------------------------------------------------
 *
 * Pilot Footer
 */
 
// --------------------------------------------------------------------------------?>

<h2>Backup Your Site</h2>

<?php

$file = new File;

//$file->backup( ROOT_URI, ROOT_NAME, CORE_URI, TRUE, ROOT_NAME, FW_NAME );


/**
 * this method saves a compressed zip to a defined destination
 * @since 1.1.0
 * return boolean
 */


