<?php defined('INDEX') or die() and exit(); // Prevents direct script access
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
 * @since          Version 0.1.1 s9
 * -----------------------------------------------------------------
 *
 * System Error Functions
 */
 
// --------------------------------------------------------------------------------



/**
 * This method creates a custom exception handler for smarter error messages
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 0.1.1 s9  
 * @return         void
 */
	function exceptionHandler( $exception )
	{ 
		# Set new Page object
		$c = new Error();
		
		# Call setPage() method
		return $c->exceptionHandler( $exception );
	}
		

/**
 * This method creates a custom error handler for smarter error messages
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 0.1.1 s9  
 * @return         void
 */		
	function errorHandler($errno, $errstr, $errfile, $errline)
	{
		# Set new Page object
		$c = new Error();
		
		# Call setPage() method
		return $c->errorHandler( $exception );
	
	}