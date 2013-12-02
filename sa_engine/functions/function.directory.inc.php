<?php defined('INDEX') or die() and exit(); // Prevents direct script access
/**
 * Shadow
 *
 * An open source application development framework that streamlines
 * responsive e-ecommerce development for php 5.0.0 or newer
 *
 * @package        Shadow
 * @author         Super Amazing
 * @copyright      Copyright (c) 2010 - 2013, Super Amazing
 * @license        
 * @link           http://shadow.livesuperamazing.com
 * @since          Version 0.1.1 s9
 * -----------------------------------------------------------------
 *
 * System Error Functions
 */
 
// --------------------------------------------------------------------------------

/**
 * This function redirects to a new page without using headers
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function redirect( $url )
	{
		$string = '<script type="text/javascript">';
		$string .= 'window.location = "' . $url . '"';
		$string .= '</script>';
	
		echo $string;
		
	} // end function redirect($url)

# ADMIN




/**
 * This function gets the root uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_root_uri()
	{
		return ROOT_URI;
		
	} // end function the_root_uri()
	
	
/**
 * This function echos the root uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_root_uri()
	{
		echo the_root_uri();
		
	} // end function get_root_uri()
	

/**
 * This function gets the root url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_root_url()
	{
		return ROOT_URL;
		
	} // end function the_root_url()
	
	
/**
 * This function echos the root url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_root_url()
	{
		echo the_root_url();
		
	} // end function get_root_url()
	
	
/**
 * This function gets the core uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_core_uri()
	{
		return CORE_URI;
		
	} // end function the_core_uri()
	
	
/**
 * This function echos the core uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_core_uri()
	{
		echo the_core_uri();
		
	} // end function get_core_uri()
	
	

/**
 * This function gets the core url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_core_url()
	{
		return CORE_URI;
		
	} // end function the_core_url()
	
	
/**
 * This function echos the core url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_core_url()
	{
		echo the_core_url();
		
	} // end function get_core_url()
	
	

/**
 * This function gets the admin uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_uri()
	{
		return the_root_uri() . 'sa_admin/';
		
	} // end function the_admin_uri()
	
	
/**
 * This function echos the admin uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_uri()
	{
		echo the_admin_uri();
		
	} // end function get_admin_uri()
	
	
/**
 * This function gets the admin url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_url()
	{
		return the_root_url() . 'sa_admin/';
		
	} // end function the_admin_url()
	
	
/**
 * This function echos the admin url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_url()
	{
		echo the_admin_url();
		
	} // end function get_admin_url()
	
	
/**
 * This function gets the admin class uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_class_uri()
	{
		return the_admin_uri() . 'classes/';
		
	} // end function the_admin_class_uri()
	
	
/**
 * This function echos the admin class uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_class_uri()
	{
		echo the_admin_class_uri();
		
	} // end function get_admin_class_uri()
	
	
/**
 * This function gets the admin class url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_class_url()
	{
		return the_admin_url() . 'classes/';
		
	} // end function the_admin_class_url()
	
	
/**
 * This function echos the admin class url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_class_url()
	{
		echo the_admin_class_url();
		
	} // end function get_admin_class_url()
	
	
/**
 * This function gets the admin function uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_function_uri()
	{
		return the_admin_uri() . 'functions/';
		
	} // end function the_admin_function_uri()
	
	
/**
 * This function echos the admin function uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_function_uri()
	{
		echo the_admin_function_uri();
		
	} // end function get_admin_function_uri()
	
	
/**
 * This function gets the admin function url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_function_url()
	{
		return the_admin_url() . 'functions/';
		
	} // end function the_admin_function_url()
	
	
/**
 * This function echos the admin function url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_function_url()
	{
		echo the_admin_function_url();
		
	} // end function get_admin_function_url()
	
	
/**
 * This function gets the admin img uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_img_uri()
	{
		return the_admin_uri() . 'img/';
		
	} // end function the_admin_img_uri()
	
	
/**
 * This function echos the admin img uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_img_uri()
	{
		echo the_admin_img_uri();
		
	} // end function get_admin_img_uri()
	
	
/**
 * This function gets the admin img url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_img_url()
	{
		return the_admin_url() . 'img/';
		
	} // end function the_admin_img_url()
	
	
/**
 * This function echos the admin img url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_img_url()
	{
		echo the_admin_img_url();
		
	} // end function get_admin_img_url()
	
	
/**
 * This function gets the admin css uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_css_uri()
	{
		return the_admin_uri() . 'css/';
		
	} // end function the_admin_css_uri()
	
	
/**
 * This function echos the admin css uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_css_uri()
	{
		echo the_admin_css_uri();
		
	} // end function get_admin_css_uri()
	
	
/**
 * This function gets the admin css url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_css_url()
	{
		return the_admin_url() . 'css/';
		
	} // end function the_admin_css_url()
	
	
/**
 * This function echos the admin css url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_css_url()
	{
		echo the_admin_css_url();
		
	} // end function get_admin_css_url()
	

/**
 * This function gets the admin less uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_less_uri()
	{
		return the_admin_uri() . 'less/';
		
	} // end function the_admin_less_uri()
	
	
/**
 * This function echos the admin less uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_less_uri()
	{
		echo the_admin_less_uri();
		
	} // end function get_admin_less_uri()
	
	
/**
 * This function gets the admin less url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_less_url()
	{
		return the_admin_url() . 'less/';
		
	} // end function the_admin_less_url()
	
	
/**
 * This function echos the admin less url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_less_url()
	{
		echo the_admin_less_url();
		
	} // end function get_admin_less_url()
	
	
/**
 * This function gets the admin js uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_js_uri()
	{
		return the_admin_uri() . 'js/';
		
	} // end function the_admin_js_uri()
	
	
/**
 * This function echos the admin js uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_js_uri()
	{
		echo the_admin_js_uri();
		
	} // end function get_admin_js_uri()
	
	
/**
 * This function gets the admin js url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_js_url()
	{
		return the_admin_url() . 'js/';
		
	} // end function the_admin_js_url()
	
	
/**
 * This function echos the admin js url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_js_url()
	{
		echo the_admin_js_url();
		
	} // end function get_admin_js_url()
	
	
/**
 * This function gets the admin inc uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_inc_uri()
	{
		return the_admin_uri() . 'inc/';
		
	} // end function the_admin_inc_uri()
	
	
/**
 * This function echos the admin inc uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_inc_uri()
	{
		echo the_admin_inc_uri();
		
	} // end function get_admin_inc_uri()
	
	
/**
 * This function gets the admin inc url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_admin_inc_url()
	{
		return the_admin_url() . 'inc/';
		
	} // end function the_admin_inc_url()
	
	
/**
 * This function echos the admin inc url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_admin_inc_url()
	{
		echo the_admin_inc_url();
		
	} // end function get_admin_inc_url()


/**
 * This function gets the admin views uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function the_admin_views_uri()
	{
		return the_admin_uri() . 'views/';
		
	} // end function the_admin_views_uri()
	
	
/**
 * This function echos the admin views uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function get_admin_views_uri()
	{
		echo the_admin_views_uri();
		
	} // end function get_admin_views_uri()
	
	
/**
 * This function gets the admin views url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function the_admin_views_url()
	{
		return the_admin_url() . 'views/';
		
	} // end function the_admin_views_url()
	
	
/**
 * This function echos the admin views url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function get_admin_views_url()
	{
		echo the_admin_views_url();
		
	} // end function get_admin_views_url()
	
	

/**
 * This function gets the engine uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_uri()
	{
		return the_root_uri() . 'sa_engine/';
		
	} // end function the_engine_uri()
	
	
/**
 * This function echos the engine uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_uri()
	{
		echo the_engine_uri();
		
	} // end function get_engine_uri()
	
	
/**
 * This function gets the engine url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_url()
	{
		return the_root_url() . 'sa_engine/';
		
	} // end function the_engine_url()
	
	
/**
 * This function echos the engine url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_url()
	{
		echo the_engine_url();
		
	} // end function get_engine_url()
	
	
/**
 * This function gets the engine class uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_class_uri()
	{
		return the_engine_uri() . 'classes/';
		
	} // end function the_engine_class_uri()
	
	
/**
 * This function echos the engine class uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_class_uri()
	{
		echo the_engine_class_uri();
		
	} // end function get_engine_class_uri()
	
	
/**
 * This function gets the engine class url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_class_url()
	{
		return the_engine_url() . 'classes/';
		
	} // end function the_engine_class_url()
	
	
/**
 * This function echos the engine class url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_class_url()
	{
		echo the_engine_class_url();
		
	} // end function get_engine_class_url()
	
	
/**
 * This function gets the engine function uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_function_uri()
	{
		return the_engine_uri() . 'functions/';
		
	} // end function the_engine_function_uri()
	
	
/**
 * This function echos the engine function uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_function_uri()
	{
		echo the_engine_function_uri();
		
	} // end function get_engine_function_uri()
	
	
/**
 * This function gets the engine function url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_function_url()
	{
		return the_engine_url() . 'functions/';
		
	} // end function the_engine_function_url()
	
	
/**
 * This function echos the engine function url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_function_url()
	{
		echo the_engine_function_url();
		
	} // end function get_engine_function_url()
	
	
/**
 * This function gets the engine img uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_img_uri()
	{
		return the_engine_uri() . 'img/';
		
	} // end function the_engine_img_uri()
	
	
/**
 * This function echos the engine img uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_img_uri()
	{
		echo the_engine_img_uri();
		
	} // end function get_engine_img_uri()
	
	
/**
 * This function gets the engine img url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_img_url()
	{
		return the_engine_url() . 'img/';
		
	} // end function the_engine_img_url()
	
	
/**
 * This function echos the engine img url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_img_url()
	{
		echo the_engine_img_url();
		
	} // end function get_engine_img_url()
	
	
/**
 * This function gets the engine css uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_css_uri()
	{
		return the_engine_uri() . 'css/';
		
	} // end function the_engine_css_uri()
	
	
/**
 * This function echos the engine css uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_css_uri()
	{
		echo the_engine_css_uri();
		
	} // end function get_engine_css_uri()
	
	
/**
 * This function gets the engine css url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_css_url()
	{
		return the_engine_url() . 'css/';
		
	} // end function the_engine_css_url()
	
	
/**
 * This function echos the engine css url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_css_url()
	{
		echo the_engine_css_url();
		
	} // end function get_engine_css_url()
	

/**
 * This function gets the engine less uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_less_uri()
	{
		return the_engine_uri() . 'less/';
		
	} // end function the_engine_less_uri()
	
	
/**
 * This function echos the engine less uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_less_uri()
	{
		echo the_engine_less_uri();
		
	} // end function get_engine_less_uri()
	
	
/**
 * This function gets the engine less url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_less_url()
	{
		return the_engine_url() . 'less/';
		
	} // end function the_engine_less_url()
	
	
/**
 * This function echos the engine less url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_less_url()
	{
		echo the_engine_less_url();
		
	} // end function get_engine_less_url()
	
	
/**
 * This function gets the engine js uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_js_uri()
	{
		return the_engine_uri() . 'js/';
		
	} // end function the_engine_js_uri()
	
	
/**
 * This function echos the engine js uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_js_uri()
	{
		echo the_engine_js_uri();
		
	} // end function get_engine_js_uri()
	
	
/**
 * This function gets the engine js url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_js_url()
	{
		return the_engine_url() . 'js/';
		
	} // end function the_engine_js_url()
	
	
/**
 * This function echos the engine js url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_js_url()
	{
		echo the_engine_js_url();
		
	} // end function get_engine_js_url()
	
	
/**
 * This function gets the engine inc uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_inc_uri()
	{
		return the_engine_uri() . 'inc/';
		
	} // end function the_engine_inc_uri()
	
	
/**
 * This function echos the engine inc uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_inc_uri()
	{
		echo the_engine_inc_uri();
		
	} // end function get_engine_inc_uri()
	
	
/**
 * This function gets the engine inc url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_engine_inc_url()
	{
		return the_engine_url() . 'inc/';
		
	} // end function the_engine_inc_url()
	
	
/**
 * This function echos the engine inc url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_engine_inc_url()
	{
		echo the_engine_inc_url();
		
	} // end function get_engine_inc_url()


/**
 * This function gets the engine views uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function the_engine_views_uri()
	{
		return the_engine_uri() . 'views/';
		
	} // end function the_engine_views_uri()
	
	
/**
 * This function echos the engine views uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function get_engine_views_uri()
	{
		echo the_engine_views_uri();
		
	} // end function get_engine_views_uri()
	
	
/**
 * This function gets the engine views url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function the_engine_views_url()
	{
		return the_engine_url() . 'views/';
		
	} // end function the_engine_views_url()
	
	
/**
 * This function echos the engine views url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function get_engine_views_url()
	{
		echo the_engine_views_url();
		
	} // end function get_engine_views_url()
	
	
/**
 * This function gets the content uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_content_uri()
	{
		return the_root_uri() . 'sa_content/';
		
	} // end function the_content_uri()
	
	
/**
 * This function echos the content uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_content_uri()
	{
		echo the_content_uri();
		
	} // end function get_content_uri()
	
	
/**
 * This function gets the content url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_content_url()
	{
		return the_root_url() . 'sa_content/';
		
	} // end function the_content_url()
	
	
/**
 * This function echos the content url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_content_url()
	{
		echo the_content_url();
		
	} // end function get_content_url()
	
	
	
/**
 * This function gets the bridges uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_bridges_uri()
	{
		return the_content_uri() . 'bridges/';
		
	} // end function the_bridges_uri()
	
	
/**
 * This function echos the bridges uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_bridges_uri()
	{
		echo the_bridges_uri();
		
	} // end function get_bridges_uri()
	
	
/**
 * This function gets the bridges url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_bridges_url()
	{
		return the_content_url() . 'bridges/';
		
	} // end function the_bridges_url()
	
	
/**
 * This function echos the bridges url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_bridges_url()
	{
		echo the_bridges_url();
		
	} // end function get_bridges_url()


/**
 * This function gets the apps uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_apps_uri()
	{
		return the_content_uri() . 'apps/';
		
	} // end function the_apps_uri()
	
	
/**
 * This function echos the apps uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_apps_uri()
	{
		echo the_apps_uri();
		
	} // end function get_apps_uri()
	
	
/**
 * This function gets the apps url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_apps_url()
	{
		return the_content_url() . 'apps/';
		
	} // end function the_apps_url()
	
	
/**
 * This function echos the apps url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_apps_url()
	{
		echo the_apps_url();
		
	} // end function get_apps_url()
	

/**
 * This function gets the app uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_uri()
	{
		if( !defined( 'CURRENT_APP' ) )
			define( 'CURRENT_APP', 'new_beginnings' );
			
		return the_apps_uri() . CURRENT_APP . '/';
		
	} // end function the_app_uri()
	
	
/**
 * This function echos the app uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_uri()
	{
		echo the_app_uri();
		
	} // end function get_app_uri()
	
	
/**
 * This function gets the app url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_url()
	{
		if( !defined( 'CURRENT_APP' ) )
			define( 'CURRENT_APP', 'new_beginnings' );
			
		return the_apps_url() . CURRENT_APP . '/';
		
	} // end function the_app_url()
	
	
/**
 * This function echos the app url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_url()
	{
		echo the_app_url();
		
	} // end function get_app_url()
	
	
/**
 * This function gets the app class uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_class_uri()
	{
		return the_app_uri() . 'classes/';
		
	} // end function the_app_class_uri()
	
	
/**
 * This function echos the app class uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_class_uri()
	{
		echo the_app_class_uri();
		
	} // end function get_app_class_uri()
	
	
/**
 * This function gets the app class url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_class_url()
	{
		return the_app_url() . 'classes/';
		
	} // end function the_app_class_url()
	
	
/**
 * This function echos the app class url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_class_url()
	{
		echo the_app_class_url();
		
	} // end function get_app_class_url()
	
	
/**
 * This function gets the app function uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_function_uri()
	{
		return the_app_uri() . 'functions/';
		
	} // end function the_app_function_uri()
	
	
/**
 * This function echos the app function uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_function_uri()
	{
		echo the_app_function_uri();
		
	} // end function get_app_function_uri()
	
	
/**
 * This function gets the app function url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_function_url()
	{
		return the_app_url() . 'functions/';
		
	} // end function the_app_function_url()
	
	
/**
 * This function echos the app function url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_function_url()
	{
		echo the_app_function_url();
		
	} // end function get_app_function_url()
	
	
/**
 * This function gets the app img uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_img_uri()
	{
		return the_app_uri() . 'img/';
		
	} // end function the_app_img_uri()
	
	
/**
 * This function echos the app img uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_img_uri()
	{
		echo the_app_img_uri();
		
	} // end function get_app_img_uri()
	
	
/**
 * This function gets the app img url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_img_url()
	{
		return the_app_url() . 'img/';
		
	} // end function the_app_img_url()
	
	
/**
 * This function echos the app img url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_img_url()
	{
		echo the_app_img_url();
		
	} // end function get_app_img_url()
	
	
/**
 * This function gets the app css uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_css_uri()
	{
		return the_app_uri() . 'css/';
		
	} // end function the_app_css_uri()
	
	
/**
 * This function echos the app css uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_css_uri()
	{
		echo the_app_css_uri();
		
	} // end function get_app_css_uri()
	
	
/**
 * This function gets the app css url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_css_url()
	{
		return the_app_url() . 'css/';
		
	} // end function the_app_css_url()
	
	
/**
 * This function echos the app css url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_css_url()
	{
		echo the_app_css_url();
		
	} // end function get_app_css_url()
	

/**
 * This function gets the app less uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_less_uri()
	{
		return the_app_uri() . 'less/';
		
	} // end function the_app_less_uri()
	
	
/**
 * This function echos the app less uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_less_uri()
	{
		echo the_app_less_uri();
		
	} // end function get_app_less_uri()
	
	
/**
 * This function gets the app less url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_less_url()
	{
		return the_app_url() . 'less/';
		
	} // end function the_app_less_url()
	
	
/**
 * This function echos the app less url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_less_url()
	{
		echo the_app_less_url();
		
	} // end function get_app_less_url()
	
	
/**
 * This function gets the app js uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_js_uri()
	{
		return the_app_uri() . 'js/';
		
	} // end function the_app_js_uri()
	
	
/**
 * This function echos the app js uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_js_uri()
	{
		echo the_app_js_uri();
		
	} // end function get_app_js_uri()
	
	
/**
 * This function gets the app js url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_js_url()
	{
		return the_app_url() . 'js/';
		
	} // end function the_app_js_url()
	
	
/**
 * This function echos the app js url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_js_url()
	{
		echo the_app_js_url();
		
	} // end function get_app_js_url()
	
	
/**
 * This function gets the app inc uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_inc_uri()
	{
		return the_app_uri() . 'inc/';
		
	} // end function the_app_inc_uri()
	
	
/**
 * This function echos the app inc uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_inc_uri()
	{
		echo the_app_inc_uri();
		
	} // end function get_app_inc_uri()
	
	
/**
 * This function gets the app inc url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function the_app_inc_url()
	{
		return the_app_url() . 'inc/';
		
	} // end function the_app_inc_url()
	
	
/**
 * This function echos the app inc url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @since          Version 2.0.0 
 * @return         string
 */
	function get_app_inc_url()
	{
		echo the_app_inc_url();
		
	} // end function get_app_inc_url()


/**
 * This function gets the app views uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function the_app_views_uri()
	{
		return the_app_uri() . 'views/';
		
	} // end function the_app_views_uri()
	
	
/**
 * This function echos the app views uri
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function get_app_views_uri()
	{
		echo the_app_views_uri();
		
	} // end function get_app_views_uri()
	
	
/**
 * This function gets the app views url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function the_app_views_url()
	{
		return the_app_url() . 'views/';
		
	} // end function the_app_views_url()
	
	
/**
 * This function echos the app views url
 *
 * @package        Super Amazing Commerce   
 * @author         Super Amazing, William Mosley, III <http://superamazingstore.com>
 * @sviewse          Version 2.0.0 
 * @return         string
 */
	function get_app_views_url()
	{
		echo the_app_views_url();
		
	} // end function get_app_views_url()