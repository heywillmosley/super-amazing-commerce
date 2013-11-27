<?php
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
 * --------------------------------------------------------------------------------
 *
 * Bootstrap
 *
 * Defines index and bootstaps system
 *
 * @since          Version 2.0.0
 */
 
// --------------------------------------------------------------------------------
define( 'INDEX', TRUE ); 

require_once '../sa_engine/CONFIG.php';

# If on live or testing server, require SSL access if turned on
if( ENVIRONMENT != 'development' && SSL && empty($_SERVER['HTTPS'] )  )
{
	
	# Define Root Url
	$root_url=strtolower('https://'.$_SERVER['HTTP_HOST'].str_replace(str_replace('\\','/',$_SERVER['DOCUMENT_ROOT']),"",str_replace('\\','/',dirname(__FILE__).'/')));
						
	# Force redirect to secure page
	if($_SERVER['SERVER_PORT'] != '443') header('Location:'.$root_url); exit();
	
} // if( ENVIRONMENT != 'development' && SSL )

echo 'admin screen';

// Omit the closing PHP tag to avoid 'headers already sent' errors!