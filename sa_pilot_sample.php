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
 * Pilot Config File
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
## SECURITY SETTINGS ##

define( 'SSL', TRUE ); // If you have a SSL certificate for your domain, set this to true

## SECURITY SETTINGS ##
#######################

##########################
## ENVIRONMENT SETTINGS ##

define( 'LOCAL_DOMAIN', 'localhost' ); // Most likely localhost
define( 'TEST_DOMAIN', 'your-testing-domain-here' ); // E.g. stg.example.com, Optional ( Leave blank if none )
define( 'LIVE_DOMAIN', 'your-live-domain-here' ); // E.g. example.com

# Skip This
$domain  = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";if(strstr($domain,LOCAL_DOMAIN)){define('ENVIRONMENT','development');}
elseif(strstr($domain,TEST_DOMAIN)){define('ENVIRONMENT','stage');}elseif(strstr($domain, LIVE_DOMAIN)){define('ENVIRONMENT','production');}if(!defined( 'ENVIRONMENT' )){try{throw new Exception("<h2>Please setup the correct environments in your <code>sa_pilot.php</code> file.</h2>");}catch( Exception $e ) {echo $e->getMessage(); exit;}}
# Skip This
	
## ENVIRONMENT SETTINGS ##
##########################

// Omit the closing PHP tag to avoid 'headers already sent' errors!