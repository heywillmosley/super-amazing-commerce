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
 * Validator Class
 */
 
// --------------------------------------------------------------------------------

/**
 * Class description
 * @since 0.1.1 s7
 * @author William Mosley, III <will@livesuperamazing.com>
 * 0 Arguments
 * 4 Methods
 */
class Validator
{
	# For storing form field names
	private $fields = array();
	
	private $caption = FALSE;
	
	# For storing errors for form fields
	private $fieldErrors = array();
	
	# Turns false if there are form errors
	private $fieldValid = array();
	
	# Turns false if there are form errors
	private $isValid = TRUE;
	
	/**
	 * This method adds a field
	 * @since 2.0.0
	 * @return string
	 */
		public function addField( $field_name, $caption = FALSE )
		{
			# attach to fields array
			$this->fields[] = $field_name;
			
			# Intializes an array for fieldErrors as $field_name
			$this->fieldErrors[ $field_name ] = array();
			
			$this->fieldValid[ $field_name ] = 'valid';
			
		} // end method addField()
		
		
	/**
	 * This method adds a rule
	 * @since 2.0.0
	 * @return string
	 */
		public function addRule( $field_name, $field_rule, $error_message = NULL )
		{
			
			# Gets the first argument in array ( hence '0' )
			$rule_name = $field_rule[ 0 ];
			
			# Filters through the rules
			switch( $rule_name )
			{
				case 'req' :
				case 'required' :
					if( strlen( $_POST[ $field_name ] ) == 0 )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "This field is required." );
						
						
					}
				break;
				
				case 'min-length' :
					if( strlen( $_POST[ $field_name ] ) < $field_rule[ 1 ] )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "This field cannot be less than {$field_rule[1]} characters in length." );
						
					} 
						
				break;
				
				case 'max-length' :
					if( strlen( $_POST[ $field_name ] ) > $field_rule[ 1 ] )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "This field cannot be more than {$field_rule[1]} characters in length." );
						
					} 
						
				break;
				
				case 'email' :
					if( !filter_var( $_POST[ $field_name ], FILTER_VALIDATE_EMAIL ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Please enter a vaild email." );
						
					} else filter_var( $_POST[ $field_name ], FILTER_SANITIZE_EMAIL ); // sanitize email, OK		
						
				break;
				
				case 'name' :
					if( !preg_match ("/^[a-zA-ZàáâäãåąćęèéêëìíîïłńòóôöõøùúûüÿýżźñçčšžÀÁÂÄÃÅĄĆĘÈÉÊËÌÍÎÏŁŃÒÓÔÖÕØÙÚÛÜŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u", $_POST[ $field_name ] ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Please enter a valid name." );
						
					} // end if( !preg_match ("/^[a-zA-ZàáâäãåąćęèéêëìíîïłńòóôöõøùúûüÿýżźñçčšžÀÁÂÄÃÅĄĆĘÈÉÊËÌÍÎÏŁŃÒÓÔÖÕØÙÚÛÜŸÝŻŹÑßÇŒÆČŠŽ∂ð ,.'-]+$/u", $_POST[ $field_name ] ) )
						
				break;
				
				/**
				 * Checks if all of the characters in the provided string, text, are
				 * alphabetic. In the standard C locale letters are just [A-Za-z] and 
				 * ctype_alpha() is equivalent to (ctype_upper($text) || 
				 * ctype_lower($text)) if $text is just a single character, but other 
				 * languages have letters that are considered neither upper nor lower
				 * case.
				 */
				case 'alpha' :
					if( !ctype_alpha( $_POST[ $field_name ] ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "This field may only contain <code>A-Z</code> and <code>a-z</code>." );
						
					} // if( !ctype_alpha( $_POST[ $field_name ] ) )
						
				break;
				
				# Positive numbers
				case 'integer' :
					if( !filter_var( $_POST[ $field_name ], FILTER_VALIDATE_INT ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Please enter a number. E.g. 85, -3, 4.25" );
						
					} // if( !filter_var( $_POST[ $field_name ], FILTER_VALIDATE_INT ) )
					
					else filter_var( $_POST[ $field_name ], FILTER_SANITIZE_NUMBER_INT ); // Sanitize number
						
				break;
				
				case 'alphanumeric' :
				case 'alpha-numeric' :
					if( !ctype_alnum ( $_POST[ $field_name ] ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "This field may only contain <code>A-Z</code>, <code>a-z</code>, and <code>0-9</code> characters." );
						
					} // if( !filter_var( $_POST[ $field_name ], FILTER_VALIDATE_INT ) )
					
					else preg_replace( '/[^a-zA-Z0-9]/', '', $_POST[ $field_name ] ); // Sanitize
						
				break;
				
				case 'url' :
					
					if( !filter_var( $_POST[ $field_name ], FILTER_VALIDATE_URL ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Please enter a vaild URL." );
						
					} // if( !filter_var( $_POST[ $field_name ], FILTER_VALIDATE_INT ) )
					
					else filter_var( $_POST[ $field_name ], FILTER_SANITIZE_URL ); // Sanitize
						
				break;
				
				case 'ip' :
					if( !filter_var( $_POST[ $field_name ], FILTER_VALIDATE_IP ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Please enter a vaild IP address." );
						
					} // if( !filter_var( $_POST[ $field_name ], FILTER_VALIDATE_INT ) )
						
				break;
				
				case 'username' :
					if( !preg_match( '/^[a-zA-Z\d_@.]{2,30}$/i', $_POST[ $field_name ] ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Please enter a valid username. Usernames must be 2 - 30 characters long and may only contain <code>a-z</code>, <code>A-Z</code>, <code>0-9</code> and <code>_</code>." );
						
					} // if( !filter_var( $_POST[ $field_name ], FILTER_VALIDATE_INT ) )
						
				break;
				
				case 'password' :
					if( !preg_match( '/^(?=^.{8,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/', $_POST[ $field_name ] ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Please enter a valid username. Usernames must be 2 - 30 characters long and may only contain <code>a-z</code>, <code>A-Z</code>, <code>0-9</code> and <code>_</code>." );
						
					} // if( !preg_match( '/^(?=^.{8,}$)((?=.*[A-Za-z0-9])(?=.*[A-Z])(?=.*[a-z]))^.*$/', $_POST[ $field_name ] ) )
						
		
				break;
				
				case 'ssn' :
				case 'social-security' :
					if( !preg_match( '/^[\d]{3}-[\d]{2}-[\d]{4}$/', $_POST[ $field_name ] ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Please enter a valid social security number." );
						
					} // end if( !preg_match( '/^[\d]{3}-[\d]{2}-[\d]{4}$/', $_POST[ $field_name ] ) )	
		
				break;
				
				case 'hex' :
				case 'color' :
					if( !preg_match( '/^#(?:(?:[a-f0-9]{3}){1,2})$/i', $_POST[ $field_name ] ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Please enter a hex color. E.g. #FFF, #FF0000" );
						
					} // end if( !preg_match( '/^[\d]{3}-[\d]{2}-[\d]{4}$/', $_POST[ $field_name ] ) )	
		
				break;
				
				case 'db-name' :
				case 'database-name' :
					if( preg_match('/[^a-z_\-0-9]/i', $_POST[ $field_name ] ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Please enter a valid database name. Database names may only contain <code>A-Z</code>, <code>a-z</code>, <code>-</code>, <code>_</code>, and <code>0-9</code>." );
						
					} // end if( preg_match('/[^a-z_\-0-9]/i', $_POST[ $field_name ] ) )	
		
				break;
				
				case 'sex' :
					$_POST[ $field_name ] = ucwords( strtolower( $_POST[ $field_name ] ) );
					$valid_input = array( 'Male', 'Female', 'F', 'M' );
					if( !in_array( $_POST[ $field_name ], $valid_input ) )
					{
						if( isset( $error_message ) ) $this->addErrorToField( $field_name, $error_message );
						else $this->addErrorToField( $field_name, "Not a valid sex." );
						
					} // end if( preg_match('/[^a-z_\-0-9]/i', $_POST[ $field_name ] ) )
						
		
				break;
				
				default:
				
				break;
				
				
			} // end switch
			
			 
			/**
			 * Sanitize evil $_POST[ $field_name ]
			 * Use the ENT_QUOTES flag to make sure both single and double quotes are
			 * escaped. Use the UTF-8 character encoding if you've stored the text as
			 * UTF-8 (as you should have). See the UTF-8 section in this document for 
			 * more details.
			 */
			 
			 	$_POST[ $field_name ] = is_array( $_POST[ $field_name ] ) ? array_map('_cleanData',  $_POST[ $field_name ] ) : str_replace('\\', '\\\\', strip_tags(trim(htmlspecialchars((get_magic_quotes_gpc() ? stripslashes(mysqli_real_escape_string( $_POST[ $field_name ] )) : $_POST[ $field_name ] ), ENT_QUOTES)))); 
				//$_POST[ $field_name ] = htmlspecialchars ( htmlentities($_POST[ $field_name ], ENT_QUOTES, 'UTF-8') ); 
				# $_POST[ $field_name ] is now fully escaped HTML.  You can output $_POST[ $field_name ] to your users without fear!
			
			
		} // end method addField()
		
		
	/**
	 * This method adds error to field
	 * @since 2.0.0
	 * @return string
	 */
		private function addErrorToField( $field_name, $error_message )
		{
			$this->isValid = FALSE;
			
			$this->fieldValid[ $field_name ] = 'invalid';
			
			$this->fieldErrors[ $field_name ][] = $error_message;
			
			
		} // end method addErrorToField()
		
		
	/**
	 * This method returns the value of the field if it's set
	 * @since 2.0.0
	 * @return string
	 */
		public function getValue( $field_name, $default = FALSE )
		{
			if( $default && !isset( $_POST[ $field_name ] ) )
				echo $default;
				
			elseif( isset( $_POST[ $field_name ] ) )
				echo $_POST[ $field_name ];
			
		} // end public function getValue( $field_name )
	
	
	/**
	 * This method returns boolean to tell whether form is valid or not
	 * @since 2.0.0
	 * @return boolean
	 */
		public function isValid( $field_name = NULL )
		{
			if( $field_name != NULL )
			{

				if( array_key_exists( $field_name, $this->fieldValid ) )
				{
					if( $this->fieldValid[ $field_name ] == 'valid'	)
						return TRUE;
					
					else return FALSE;
				}
				else
					return TRUE;
			}
			else return $this->isValid;
			
		} // end method outputFieldError()
		
	
	/**
	 * This method outputs error messages
	 * @since 2.0.0
	 * @return string
	 */
		public function getFieldError( $field_name )
		{
			# Check if there is an associative array in errors with the field name
			if( isset( $this->fieldErrors[ $field_name ][0] ) )
			{
				
					# Echos out the first error of the field
					//echo "<small class='error'>" . $field_error . "</small>";
				
				# Echos out the first error of the field
				echo "<small class='error'>" . $this->fieldErrors[ $field_name ][ 0 ] . "</small>";
				
				
			} // end if( isset( $this->fieldErrors[ $field_name ] ) )
			
		} // end method getFieldError()
		
		
	/**
	 * This method outputs all field errors
	 * @since 2.0.0
	 * @return string
	 */
		public function getAllFieldErrors()
		{
			foreach( $this->fields as $field )
			{
				$this->getFieldError( $field );
				
			} // end foreach( $this->fields as $fields )
			
		} // end method getFieldError()

} // end Error Validator