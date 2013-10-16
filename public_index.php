<?php # Prevents direct access to config.inc.php 
define('INDEX',TRUE);
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
 * This is the bootstrap file. This starts the SA engine. VRROOOMMMM!
 */
 
// --------------------------------------------------------------------------------

/**
 * Require the configuration file before any PHP code:.
 */
 	require_once 'sa_system/sa_engine/CONFIG.php';

/*
 * ------------------------------------------------------
 *  Load Application Includes
 * ------------------------------------------------------
 */
 	if( file_exists( APP_INC_URI.'constants.inc.php' ) )
		include_once(APP_INC_URI.'constants.inc.php');
		
	if( file_exists( APP_INC_URI.'functions.inc.php' ) )
		include_once(APP_INC_URI.'functions.inc.php');
		
 	
if( SA )
{ 
	/**
	 * Include the header file:
	 */
	 include SYS_INC_URI . 'header.inc.php';
	
	get_page();
	
	
	/**
	 * Include the footer file:
	 */
	 include SYS_INC_URI . 'footer.inc.php';
	 
} // end SA
?>