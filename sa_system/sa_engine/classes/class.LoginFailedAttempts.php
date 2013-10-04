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
 * Class
 */
 
// --------------------------------------------------------------------------------

/**
 * This script defines the Page class
 * @since 0.1.1 s9
 * @author William Mosley, III <will@livesuperamazing.com>
 * The class contains 27 attributes: id, role, prefix, firstName, middleName, maiden, lastName, suffix, username, pass, securityQuestion1, securityQuestion2, securityQuestion3, dateRegistered, lastLoginDate, lastLoginIp, dateModified, releaseLevel, dateExpires, birthdate, sex, primaryEmail, additionalEmails, phone, address, prifilePictureImg, spreadImg
 * - The attributes match the corresponding database columns.
 * The class contains 5 methods
 * - getId()
 * - isAdmin()
 * - canEditPage()
 * - canCreatePage()
 * - is_logged_in()
 *
 * @since 0.1.1 s9
 */
class LoginFailedAttempts
{
	protected $id = NULL;
	protected $username = NULL;
	protected $email = NULL;
	protected $pass = NULL;
	protected $ip = NULL;
	protected $datetimeFailed = NULL;
	
	

	
	/**
	 * This method gets the user id:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getId()
		{
			return $this->id;
			
		} // end method getId()
		
		
	/**
	 * This method gets the user's username:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getUsername()
		{
			return $this->username;
			
		} // end method getUsername()	
		
		
	/**
	 * This method gets the user's email:
	 * @since 0.1.1 s9
	 * @return string
	 */
		function getEmail()
		{
			return $this->email;
			
		} // end method getUsername()	
		
		
	/**
	 * This method gets the user's password:
	 * @since 0.1.1 s9
	 * @return string
	 */
		private function getPassword()
		{
			return $this->pass;
			
		} // end method getPassword()
		
		
	/**
	 * This returns the date/time login attempt failed
	 * @since 0.1.1 s9
	 * @return date
	 */
		function getDatetimeFailed()
		{
			return $this->datetimeFailed;
			
		} // end method getDateRegistered()
 
} // end ClassName