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
 * This script sets application 404 page
 */
 
// --------------------------------------------------------------------------------?>

<div class="row">
	<div class="twelve columns">
    	<h1><?php echo get_page_title(); ?></h1>
        <ul class="button-group">
          <li><a href="#" class="small button">Add Product</a></li>
          <li><a href="#" class="small button">Actions</a></li>
          <li><a href="#" class="small button">Bulk Actions</a></li>
        </ul>
        
        <form action="<?php echo SELF; ?>" method="POST" class="custom">
        	<div class="row">
            	<div class="small-1 columns">
                	 <label for="checkbox1"><input type="checkbox" id="checkbox1" style="display: none;"><span class="custom checkbox"></span></label>
                </div><!-- ends small-5 columns -->
                <div class="small-4 columns">
                	Product Name
              	</div>
                <div class="small-2 columns">
                	Price
              	</div>
                <div class="small-2 columns">
                	Sales Price
              	</div>
                <div class="small-2 columns">
                	SKU
              	</div>
            </div><!-- end row -->
        </form>
    </div><!-- end twelve columns -->
</div><!-- end-->