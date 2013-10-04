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
 * Class description
 * @since 0.1.1 s7
 * @author William Mosley, III <will@livesuperamazing.com>
 * 1 Arguments
 * 0 Methods
 */
class WriteToFile
{
	# For storing the file pointer
	private $_fp = NULL;
	
	# Constructor opens the file for writing:
	function __construct( $file )
	{
		# Check that the file exists and is a file:
		if( !file_exists( $file ) || !is_file( $file ) )
		{
			throw new Exception( 'The file does not exist.' );
			
		} // end if( !file_exists( $file ) || !is_file( $file ) )
		
		# Open the file
		if( !$this->_fp = @fopen( $file, FOPEN_WRITE_CREATE ) )
		{
			throw new Exception( 'Could not open the file.' );
			
			
		} // end if( !$this->_fp = @fopen( $file, FOPEN_READ_WRITE ) )
		
		
	} // end __construct( $file )
	
	
	# This method writes data to the file
	function write( $data )
	{
		# Confirm the write:
		if( @!fwrite( $this->_fp, $data . "\n" ) )
		{
			throw new Exception( 'Could not write to the file.' );
			
		} // End if( @!fwrite( $this->_fp, $data . "\n" ) )
		
	} // end function write( $data )
	
	
	# This method closes the file:
	function close()
	{
		# Make sure it's open:
		if( $this->_fp )
		{
			fclose( $this->_fp );
			$this->_fp = NULL;
			
		} // end if( $this->_fp )
		
	} // end function close()
	
	
	function __destruct()
	{
		$this->close();
		
	} // end function __destruct()
 
} // end ClassName