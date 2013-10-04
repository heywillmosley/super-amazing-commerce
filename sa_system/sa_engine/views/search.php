<?php # Prevents direct script access and redirects with valid search result
if(!defined('ROOT_URI')){require'../../../../system/inc/config.inc.php';$url=SITE_URL.'index.php?p=search';
if(isset($_GET['terms'])){$url.='&terms='.urlencode($_GET['terms']);}header('Location:'.$url);exit;}
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

<?php app_header(); ?>

<h3><?php echo $page_title; ?></h3>
<form method="get" action="index.php" id="search_form">
	<div class="row">
    	<input type="hidden" name="p" value="search" />
        <input type="search" type="text" name="terms" placeholder="Search..." />
        <input class="button" type="submit" value="Search" alt="Search" />
    </div>
</form>

<?php

# Display the seach results if the form has been submitted
if( isset( $_GET['terms'] ) && !$_GET['terms'] == '' )
{
	# Query the database
	# Fetch the results
	#Print the results	
	
	echo '<h2>Search Results</h2>';
	for( $i=1; $i <= 10; $i++ )
{
	?>
    
    <h4><a href="#">Search Result #<?php $i; ?></a></h4>
    <p>This is some description about the search result</p><br/>
    
    <?php
	
}
	
}




?>

<?php app_footer(); ?>