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


<?php

$form = new Validator();

if( $_POST )
{
	$form->addField( 'siteName' );
	$form->addRule( 'siteName', array( 'required' ), 'Please enter your site name.' );
	
	$form->addField( 'tagline' );
	$form->addRule( 'tagline', array( 'required' ), 'Please enter a tagline for your site.' );
	$form->addRule( 'tagline', array( 'max-length', 200 ), 'A tagline should only be a few words to describe your site. E.g. Google: "Don\'t be evil", iPhone: ""The internet in your pocket."' );
	
	$form->addField( 'description' );
	$form->addRule( 'description', array( 'required' ) );
	
	$form->addField( 'keywords' );
	$form->addRule( 'keywords', array( 'required' ), 'Please enter keywords to describe your site seperated by commas.' );
	
	# Checks errors
	if( $form->isValid('siteName') && $form->isValid('tagline') && $form->isValid('description') && $form->isValid('keywords') )
	{
		
		# Redirect to success page
		//header("Location: success.php" );
		//exit();
		
		echo '<div class="alert alert-success">redirect to new page</div>';
			
	} // end count errors
	
} // end $_POST

?>

<div class="mCenter mxw400">
    <img class="mCenter mbm" src="<?php get_engine_img_url() ?>favicons/apple-touch-icon-144x144-precomposed.png" alt="<?php echo FW_NAME; ?>" />
   
    <form role="form" method="POST" target="">
    
        <!----------------- Website ------------------------->
        <?php if( !is_submitted() || !$form->isValid('siteName') || !$form->isValid('tagline') || !$form->isValid('description') || !$form->isValid('keywords') ) : ?> 
            <div class="form-group">
                <input class="form-control" type="text" name="siteName" value="<?php $form->getValue( 'siteName' ) ?>" placeholder="Site Name" />
                <?php $form->getFieldError( 'siteName' ); ?>
            </div><!-- end form-group -->
            
            <div class="form-group">
                <input class="form-control" type="text" name="tagline" value="<?php $form->getValue( 'tagline' ) ?>" placeholder="Tagline" />
                <?php $form->getFieldError( 'tagline' ); ?>
                <p class="help-block">A couple of words to describe your site.</p>
            </div><!-- end form-group -->
            
            <div class="form-group">
                <textarea class="form-control" name="description" placeholder="Description"><?php $form->getValue( 'description' ) ?></textarea>
                <?php $form->getFieldError( 'description' ); ?>
                <p class="help-block">A full description of your site. This will be displayed when users search for your site in search engines such as Google. Limited to a couple of sentences.</p>
            </div><!-- end form-group -->
            
            <div class="form-group">
                <textarea class="form-control" name="keywords" placeholder="Keywords"><?php $form->getValue( 'keywords' ) ?></textarea>
                <?php $form->getFieldError( 'keywords' ); ?>
                <p class="help-block">These are the words or phrases users will use to find you on search engines such as Google. Provide at least 20 - 30 seperated by commas. E.g. the best flowers, tulips, plants.</p>
            </div><!-- end form-group -->
            
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary" />
            </div><!-- end form-group -->
            
       	<?php else : ?>
        	
            <div class="progress">
              <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                <span class="sr-only">60% Complete (success)</span>
              </div>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="firstName" value="<?php $form->getValue( 'firstName' ) ?>" placeholder="First Name" />
                <?php $form->getFieldError( 'firstName' ); ?>
            </div><!-- end form-group -->
            
            <div class="form-group">
                <input class="form-control" type="text" name="lastName" value="<?php $form->getValue( 'lastName' ) ?>" placeholder="Last Name" />
                <?php $form->getFieldError( 'lastName' ); ?>
            </div><!-- end form-group -->
            
            <div class="form-group">
                <input class="form-control" type="email" name="email" value="<?php $form->getValue( 'email' ) ?>" placeholder="Email" />
                <?php $form->getFieldError( 'email' ); ?>
            </div><!-- end form-group -->
            
            <div class="form-group">
                <input class="form-control" type="password" name="pass1" value="<?php $form->getValue( 'pass1' ) ?>" placeholder="Password" />
                <?php 
				if( isset( $_POST[ 'pass1' ] ) && isset( $_POST[ 'pass2' ] ) )
				{
					if( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] )
						echo "<small class='error'>Your passwords don't match. Check &amp; try again.</small>";
				} else $form->getFieldError( 'pass1' );
					
				?>
                <p class="help-block"><span class="label label-primary">Security</span> Your password is your first defense against hackers.We require that your password be at least 8 characters long, contain uppercase letters, lowercase letters and contain numbers.</p>
            </div><!-- end form-group -->
            
            <div class="form-group">
                <input class="form-control" type="password" name="pass2" value="<?php $form->getValue( 'pass2' ) ?>" placeholder="Confirm Password" />
                <?php $form->getFieldError( 'pass2' ); ?>
            </div><!-- end form-group -->
            
            <div class="form-group">
                <input type="submit" value="Submit" class="btn btn-primary" />
            </div><!-- end form-group -->
            
      	<?php endif; ?>
    
    </form>

</div><!-- end mCeonter mxw400 -->

<?php sa_footer(); ?>