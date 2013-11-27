<?php # Prevents direct script access
if(!defined('ROOT_URI')){require'../inc/config.inc.php';header('Location:'.SITE_URL);exit;}
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
 * @since          Version 0.1.1 s5
 * -----------------------------------------------------------------
 *
 * Install
 */
 
// --------------------------------------------------------------------------------?>
<?php sa_header(); ?>

<style>
small.error{ display: block;
  padding: 0.33333rem 0.5rem 0.5rem;
  margin-top: -1px;
  margin-bottom: 0.88889rem;
  font-size: 11px;
  font-weight: normal;
  font-style: italic;
  background: #f04124;
  color: white; }
</style>

<div class="mCenter mxw400">
    <img class="mCenter" src="<?php get_engine_img_url() ?>favicons/apple-touch-icon-144x144-precomposed.png" alt="<?php echo FW_NAME; ?>" />

<?php

/* ############################# */
/* ##### SET FORM ELEMENTS ##### */

$website_form = new Form( 'install-website' );
$site_title = $website_form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'text', // REQUIRED
		'name'        => 'site-name', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'Site Name',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => 'Please enter your site name.',
) ); // end $siteTitle = new Element

$tagline = $website_form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'text', // REQUIRED
		'name'        => 'tagline', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'Tagline',
		'caption'     =>  'A couple of words to describe your site.',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => 'Please enter a tagline for your site.',
) ); // end $siteTitle = new Element

$description = $website_form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'textarea', // REQUIRED
		'name'        => 'description', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'Description',
		'caption'     =>  'A full description of your site. This will be displayed when users search for your site in search engines such as Google. Limited to a couple of sentences.',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => 'Please a description.',
) ); // end $siteTitle = new Element

$keywords = $website_form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'textarea', // REQUIRED
		'name'        => 'keywords', // REQUIRED a-z only, dashes, underscores, no spaces
		'placeholder' => 'Keywords',
		'caption'     =>  'These are the words or phrases users will use to find you on search engines such as Google. Provide at least 20 - 30 seperated by commas. E.g. the best flowers, tulips, plants.',
		# VALIDATION  => Custom Error Message
		# RULE           Leave blank for default message
		'val_req'     => 'Please a keywords seperated by commas.',
) ); // end $siteTitle = new Element

$submit_website = $website_form->addElement( array( 
		# ELEMENT ATTRIBUTES 
		'type'        => 'submit', // REQUIRED
		'name'        => 'next', // REQUIRED a-z only, dashes, underscores, no spaces
		'class'       => 'btn-primary btn-block',
		'value'       => 'Next',
) ); // end $siteTitle = new Element
	

/* ##### SET FORM ELEMENTS ##### */
/* ############################# */

/* #################### */
/* ##### THE FORM ##### */	

$website_form->openForm();

if( !is_submitted() || !$site_title['v'] || !$tagline['v'] || !$description['v'] || !$keywords['v'] )
{ 
?>
		<h1 class="mCenter text-center" style="display:block; ">Welcome to <?php echo FW_NAME; ?>'s quick install</h1>
    	<hr/>
		<h3 class="text-center">Website</h3>
    	<div class="caption mbs text-center">All fields are required.</div>
		<?= $site_title['e']; ?>
		<?= $tagline['e']; ?>
		<?= $description['e']; ?>
        <?= $keywords['e']; ?>
		<?= $submit_website['e']; ?>
	
	
	
<?php 
} // end error check

/* ##### THE FORM ##### */
/* #################### */

/* ##################################### */
/* ##### CONTINUE AFTER VALIDATION ##### */

else // run form
{ ?>
	<?php

	/* ############################# */
	/* ##### SET FORM ELEMENTS ##### */
	
	$user_form = new Form( 'install-user' );
	$fname = $user_form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'text', // REQUIRED
			'name'        => 'fname', // REQUIRED a-z only, dashes, underscores, no spaces
			'placeholder' => 'First Name',
			# VALIDATION  => Custom Error Message
			# RULE           Leave blank for default message
			'val_req'     => 'Please enter your first name.',
			//'val_name'     => 'Please enter a name.',
	) ); // end $siteTitle = new Element
	
	$lname = $user_form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'text', // REQUIRED
			'name'        => 'lname', // REQUIRED a-z only, dashes, underscores, no spaces
			'placeholder' => 'Last Name',
			# VALIDATION  => Custom Error Message
			# RULE           Leave blank for default message
			'val_req'     => 'Please enter your last name.',
			//'val_name'     => 'Please enter a valid name.',
	) ); // end $siteTitle = new Element
	
	$username = $user_form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'text', // REQUIRED
			'name'        => 'username', // REQUIRED a-z only, dashes, underscores, no spaces
			'placeholder' => 'Username',
			# VALIDATION  => Custom Error Message
			# RULE           Leave blank for default message
			'val_req'     => 'Please a username.',
			//'val_username'     => 'Please a valid username.',
	) ); // end $siteTitle = new Element
	
	$email = $user_form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'email', // REQUIRED
			'name'        => 'email', // REQUIRED a-z only, dashes, underscores, no spaces
			'placeholder' => 'Email',
			# VALIDATION  => Custom Error Message
			# RULE           Leave blank for default message
			'val_req'     => 'Please enter your email address.',
	) ); // end $siteTitle = new Element
	
	$pass1 = $user_form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'password', // REQUIRED
			'name'        => 'pass1', // REQUIRED a-z only, dashes, underscores, no spaces
			'placeholder' => 'New Password',
			# VALIDATION  => Custom Error Message
			# RULE           Leave blank for default message
			'val_req'     => 'Please enter a new password.',
	) ); // end $siteTitle = new Element
	
	$pass2 = $user_form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'password', // REQUIRED
			'name'        => 'pass2', // REQUIRED a-z only, dashes, underscores, no spaces
			'placeholder' => 'Verify Your Password',
			# VALIDATION  => Custom Error Message
			# RULE           Leave blank for default message
			'val_req'     => 'Please enter your new password.',
	) ); // end $siteTitle = new Element
	
	$submit_user = $user_form->addElement( array( 
			# ELEMENT ATTRIBUTES 
			'type'        => 'submit', // REQUIRED
			'name'        => 'next', // REQUIRED a-z only, dashes, underscores, no spaces
			'class'       => 'btn-primary btn-block',
			'value'       => 'Next',
	) ); // end $siteTitle = new Element
		
	
	/* ##### SET FORM ELEMENTS ##### */
	/* ############################# */
	
	/* #################### */
	/* ##### THE FORM ##### */	
	
	$website_form->openForm();
	
	if( !is_submitted() || !$fname['v'] || !$lname['v'] || !$username['v'] || !$email['v'] )
	{ 
	?>
    		<div class="progress">
              <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                <span class="sr-only">60% Complete</span>
              </div>
            </div>
			<h3 class="text-center">Create an Admin Login</h3>
			<div class="caption mbs text-center">All fields are required.</div>
			<?= $fname['e']; ?>
			<?= $lname['e']; ?>
			<?= $username['e']; ?>
			<?= $email['e']; ?>
            <?= $pass1['e']; ?>
			<?= $pass2['e']; ?>
			<?= $submit_user['e']; ?>
		
		
		
	<?php 
	} // end error check
	
	/* ##### THE FORM ##### */
	/* #################### */
	
	/* ##################################### */
	/* ##### CONTINUE AFTER VALIDATION ##### */
	
	else // run form
	{ 
		
	
	} // end else
	
	$user_form->closeForm(); 
	
	/* ##### CONTINUE AFTER VALIDATION ##### */
	/* ##################################### */
	
	?>

<?php } // end else

$website_form->closeForm(); 

/* ##### CONTINUE AFTER VALIDATION ##### */
/* ##################################### */

?>
    
</div><!-- end mCeonter mxw700 -->

<?php sa_footer(); ?>