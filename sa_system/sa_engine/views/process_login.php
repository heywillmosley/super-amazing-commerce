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
 * @since          Version 2.0.0
 * -----------------------------------------------------------------
 *
 * Process login template
 */
 
// --------------------------------------------------------------------------------

# Our custom secure way of starting a php session
sec_session_start();

if(isset($_POST['useroremail'], $_POST['pass'] ) )
{
	$uoe = $_POST['useroremail'];
	
	# The hashed password
	$p = $_POST['pass']; 
	
	if ( login($uoe, $p, $db ) == true )
	{
		load("home");
		
	} # end if login...
	else
	{
		# Login Failed
		header('Location: '.ROOTURL.'login?error=1');
		echo 'Definitely didnt work';
		
	} // end else
	
} // end if isset...
else
{
	
	# The correct POST variables were not sent to this page
	echo 'Invalid Request';
	
} // end else