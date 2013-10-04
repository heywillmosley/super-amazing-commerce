<?php defined('INDEX') or die( $id ) and exit( $id ); // Prevents direct script access
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
 * @since          Version 1.1.0
 * -----------------------------------------------------------------
 *
 * Pilot Functions
 */
 
// --------------------------------------------------------------------------------
	

/**
 * This function gets the pilot interface:
 * @since 1.1.0
 * @return array
 */
	function get_pilot()
	{
		global $DBH;
		# Set new Product object
		$u = new Pilot( $DBH );
		return $u->getPilot();
		
	} // end function get_pilot()
	
	
/**
 * Load pilot interface
 * @since 0.1.1 s9
 * @depreciated since 2.1.1
 */
	function pilot()
	{ 
		return false;
		
	} // end shdw_header
	