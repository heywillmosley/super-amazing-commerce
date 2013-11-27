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
 * --------------------------------------------------------------------------------
 *
 * Database File
 *
 * Configuration file does the following things:
 * - Has site settings in one location
 * - Stores URLs and URIs as constants.
 * - Sets how errors will be handled
 *
 * @since          Version 2.0.0
 */
 
// --------------------------------------------------------------------------------

#######################
## DATABASE SETTINGS ##

if( ENVIRONMENT == 'development' ){

define( 'DB_NAME', 'your-database-name-here' );
define( 'DB_USER', 'your-username-here' );
define( 'DB_PASSWORD', 'your-password-here' );

} elseif(ENVIRONMENT == 'stage' ){

define( 'DB_NAME', 'your-database-name-here' );
define( 'DB_USER', 'your-username-here' );
define( 'DB_PASSWORD', 'your-password-here' );
	
} elseif(ENVIRONMENT == 'production' ) {

define( 'DB_NAME', 'your-database-name-here' );
define( 'DB_USER', 'your-username-here' );
define( 'DB_PASSWORD', 'your-password-here' );
	
}

define( 'DB_HOST', 'localhost' );

## DATABASE SETTINGS ##
#######################

// Omit the closing PHP tag to avoid 'headers already sent' errors!