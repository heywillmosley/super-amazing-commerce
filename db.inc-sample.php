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
 * Db.inc-sample.php
 *
 * Streamlines Form input and functionality
 *
 * @since          Version 2.0.0
 * @filesource     /sh-config.inc.php
 */
 
// --------------------------------------------------------------------------------

/* --------------------------------------
 * Check for the current environment
 *
 * Development: is your local site, where you'll develop your code
 * Staging : is where your local site will be pushed to on a
 *   section of your production server for testing before it's
 *   ready for release
 * Production: is your live site, where your end users will use your site
 * -------------------------------------- 
 */
# Establish development database settings
if(  ENVIRONMENT == 'development' )
{
	# Your development database name
	define( 'db_name', 'development-database-name-here' );
	
	# Your development database username
	define( 'DB_USER', 'development-database-username-here' );
	
	# Your development database user password
	define( 'DB_PASSWORD', 'development-database-password-here' );
	
	# Your development databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
}

# OPTIONAL - Establish development database settings
elseif( ENVIRONMENT == 'stage' )
{
	# Your staging database name
	define( 'db_name', 'stage-database-name-here' );
	
	# Your staging database username
	define( 'DB_USER', 'stage-database-username-here' );
	
	# Your staging database user password
	define( 'DB_PASSWORD', 'stage-database-password-here' );
	
	# Your staging databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
} // end stage database settings

elseif( ENVIRONMENT == 'production' )
{	
	# Your production database name
	define( 'db_name', 'production-database-name-here' );
	
	# Your production database username
	define( 'DB_USER', 'production-database-username-here' );
	
	# Your production database user password
	define( 'DB_PASSWORD', 'production-database-password-here' );
	
	# Your production databases's connection type
	define( 'DB_HOST', 'localhost' ); // Most likely localhost
	
	
} // end production database settings




# Prevents direct script access
if(!defined('ROOT_URI')){require'system/inc/config.inc.php';header('Location:'.SITE_URL);exit;}