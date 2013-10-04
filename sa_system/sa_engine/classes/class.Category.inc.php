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
 * Category Class
 */
 
// --------------------------------------------------------------------------------

/**
 * This script defines the Product class
 * @since 0.1.1 s9
 * @author William Mosley, III <will@livesuperamazing.com>
 * The class contains 4 attributes: id, category, description, image 
 * - The attributes match the corresponding database columns.
 * The class contains 4 methods
 * - getId()
 * - getCategory()
 * - getDescription()
 * - getImage()
 *
 * @since 0.1.1 s9
 */
class Category
{
	protected $id = NULL;
	protected $category = NULL;
	protected $description = NULL;
	protected $image = NULL;

	
	/**
	 * This method gets the category id:
	 * @since 1.1.0
	 * @return int
	 */
		function getId()
		{
			return $this->id;
			
		} // end method getId()
		
	/**
	 * This method gets the category name:
	 * @since 1.1.0
	 * @return string
	 */
		function getCategory()
		{
			return $this->category;
			
		} // end method getCategory()
		
	/**
	 * This method gets the category description:
	 * @since 1.1.0
	 * @return string
	 */
		function getDescription()
		{
			return $this->description;
			
		} // end method getDescription()
		
	/**
	 * This method gets the category image:
	 * @since 1.1.0
	 * @return string
	 */
		function getImage()
		{
			return $this->image;
			
		} // end method getImage()
		
			
 
} // end Category