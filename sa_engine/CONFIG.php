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
 * System Config
 *
 * Configuration file does the following things:
 * - Has site settings in one location
 * - Stores URLs and URIs as constants.
 * - Sets how errors will be handled
 *
 * @since          Version 2.0.0
 */
 
// --------------------------------------------------------------------------------

/**
 * Super Amazing Commerce
 *
 * What's New:
 * - Enhanced Security
 */
	define('SYS_VER', '2.0.0');

	$release =  str_replace( '-alpha', '', str_replace( '-beta', '', str_replace( '.', '', substr(SYS_VER, 0, strrpos(SYS_VER, '.') ) ) ) );
	$sprint = substr(SYS_VER, strrpos(SYS_VER, '.') + 0);
	
	# Numeric version
	define('NUM_SYS_VER', $release.$sprint );
	

# Define Framework Name
define( 'FW_NAME', 'Super Amazing Commerce' );


############################
## ABSOLUTE PATHS & NAMES ##

# Define Http/https
if( isset($_SERVER['HTTPS'] ) ) $http = 'https://';
else $http = 'http://';

# Define Root Uri
define( 'ROOT_URI', dirname(dirname(__FILE__)) . '/' );

# Define Root URL			
define('ROOT_URL', strtolower($http.$_SERVER['HTTP_HOST'].str_replace(str_replace('\\','/',$_SERVER['DOCUMENT_ROOT']),"",str_replace('\\','/',dirname(dirname(__FILE__).'/')))) . '/' );

define( 'CORE_URI', dirname( ROOT_URI ) . '/' );
define( 'CORE_URL', dirname( ROOT_URL ) . '/' );


# Root directory name
define( 'ROOT_DIR_NAME', basename( ROOT_URI ) );

## ABSOLUTE PATHS ##
####################

##############
## API USES ##

/**
 * Conditional statements to determine how Super Amazing 
 * should be used in different APIs and Standalone
 */
 
	/**
	 * This function determines if Super Amazing Commerce is being used
	 * as a standalone appication
	 *
	 * @package        Super Amazing Commerce   
	 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
	 * @sviewse        Version 2.0.0 
	 * @return         boolean
	 */
		function is_super_amazing()
		{
			if( file_exists( ROOT_URI . 'sa_admin' ) )
				return TRUE;
			
		} // end function is super_amazing()
		
		
	/**
	 * This function determines if Super Amazing Commerce is being used
	 * as a standalone appication
	 *
	 * @package        Super Amazing Commerce   
	 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
	 * @sviewse        Version 2.0.0 
	 * @return         boolean
	 */
		function is_wordpress()
		{
			if( basename( dirname( dirname( ROOT_URI ) ) ) == 'wp-content' )
				return TRUE;
			
		} // end function is_wordpress()
	

## API USES ##
##############

###########
## PILOT ##

# Check if pilot is outside of root
if( file_exists( dirname( ROOT_URI ).'/pilot_'.ROOT_DIR_NAME.'.php' ) ) require_once CORE_URI.'pilot_'.ROOT_DIR_NAME.'.php';
elseif( file_exists( dirname( ROOT_URI ).'/sa_pilot.php' ) ) require_once ROOT_URI.'sa_pilot.php';
else 
{
	define( 'ENVIRONMENT', 'install' );
}

## PILOT ##
###########

###################
## ERROR LOGGING ##

require_once ROOT_URI.'sa_engine/classes/class.Error.inc.php';
new Error();

## ERROR LOGGING ##
###################

##################
## LOAD CLASSES ##

require_once ROOT_URI.'sa_admin/classes/class.Database.inc.php';
require_once ROOT_URI.'sa_admin/classes/class.Admin.inc.php';
require_once ROOT_URI.'sa_admin/classes/class.Page.inc.php';
require_once ROOT_URI.'sa_admin/classes/class.Pilot.inc.php';

# Load Engine Classes
function __autoload($class_name) {include_once ROOT_URI. 'sa_engine/classes/class.' . $class_name . '.inc.php';}

# Fix html purifier autoload bug
spl_autoload_register('__autoload');

## LOAD CLASSES ##
##################

####################
## LOAD FUNCTIONS ##

require_once ROOT_URI . 'sa_engine/functions/function.directory.inc.php';

############ YOU MAY NOW USE CLASSES AND FUNCTIONS BEYOND THIS POINT ##############

# Admin
require_once the_admin_function_uri(). 'function.admin.inc.php';
require_once the_admin_function_uri(). 'function.page.inc.php';
require_once the_admin_function_uri(). 'function.pilot.inc.php';

# Engine
require_once the_engine_function_uri(). 'function.error.inc.php';
require_once the_engine_function_uri(). 'function.file.inc.php';
require_once the_engine_function_uri(). 'function.form.inc.php';
require_once the_engine_function_uri(). 'function.product.inc.php';
require_once the_engine_function_uri(). 'functions.inc.php';

# Engine

## LOAD FUNCTIONS ##
####################




##############
## DATABASE ##

$DBH = new Database;

## DATABASE ##
##############

##############
## SESSION ##

session_start();

//$_SESSION = NULL;

## SESSION ##
#############

###############
## LOAD PAGE ##

get_page( $DBH ); 

## LOAD PAGE ##
###############

// Omit the closing PHP tag to avoid 'headers already sent' errors!