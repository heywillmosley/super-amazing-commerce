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
 * 0 Arguments
 * 4 Methods
 */
class Error
{
	private $errorConstants = array(
        1       => 'Error',
        2       => 'Warning',
        4       => 'Parse error',
        8       => 'Notice',
        16      => 'Core Error',
        32      => 'Core Warning',
        256     => 'User Error',
        512     => 'User Warning',
        1024    => 'User Notice',
        2048    => 'Strict',
        4096    => 'Recoverable Error',
        8192    => 'Deprecated',
        16384   => 'User Deprecated',
        32767   => 'All'
    );


	/**
	 * This method sets the errorHandler and exceptionHandler when a new object is created
	 *
	 * @package        Super Amazing Commerce   
	 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
	 * @since          Version 0.1.1 s9  
	 * @return         void
	 */
		public function __construct()
		{
			set_error_handler(array($this, 'errorHandler'));
			set_exception_handler(array($this, 'exceptionHandler'));
		}
		
		
	/**
	 * This method creates a custom exception handler for smarter error messages
	 *
	 * @package        Super Amazing Commerce   
	 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
	 * @since          Version 0.1.1 s9  
	 * @return         void
	 */
		public function exceptionHandler( $exception )
		{ 
			if( ENVIRONMENT != 'production' )
			{ 
			 ?>
					
					<div class="alert alert-warning hide-for-print"> 
						<?php 
						$message = "<strong>".$exception->getCode().': '.$exception->getMessage()."\n </strong>".
							
							'File: '.$exception->getFile(). ',  Line: '.$exception->getLine();
						echo str_replace(array("\r\n","\r","\n"),'</br>',$message);	
						 ?>
					</div>
                    <?php
			}
				
		}
			
	
	/**
	 * This method creates a custom error handler for smarter error messages
	 *
	 * @package        Super Amazing Commerce   
	 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
	 * @since          Version 0.1.1 s9  
	 * @return         void
	 */		
		public function errorHandler($errno, $errstr, $errfile, $errline)
		{
			if( ENVIRONMENT != 'production' )
			{
				$errString = (array_key_exists($errno, $this->errorConstants))
					? $this->errorConstants[$errno] : $errno; ?>
					
					<div class="alert alert-warning hide-for-print"> 
						<?php 
						$message = "<strong>".$errString.': '.$errstr."\n </strong>".
							
							'File: '.$errfile. ',  Line: '.$errline;
						echo str_replace(array("\r\n","\r","\n"),'</br>',$message);	
						 ?>
					</div>
				
				<?php error_log($errString.' ['.$errno.']: '.$errstr.' in '.$errfile.' on line '.$errline);
			}
		
		}	
 
} // end Error Class