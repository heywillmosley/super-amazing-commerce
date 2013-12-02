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

<div class="mCenter mxw400">
    <img class="mCenter mbm" src="<?php get_engine_img_url() ?>favicons/apple-touch-icon-144x144-precomposed.png" alt="<?php echo FW_NAME; ?>" />
    
<?php

$form = new Validator();

if( isset( $_POST['websiteSubmit'] ) )
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
		$_SESSION['website_valid'] = TRUE;
		$_SESSION['siteName'] = $_POST['siteName'];
		$_SESSION['tagline'] = $_POST['tagline'];
		$_SESSION['description'] = $_POST['description'];
		$_SESSION['keywords'] = $_POST['keywords'];
			
	} // end count errors
	
} // end $_POST

?>
	<form role="form" method="POST" target="">
    	
		<?php if( !isset( $_SESSION['website_valid'] ) ) : ?>
        
            <h2 class="text-center">Welcome to <?php echo FW_NAME; ?>'s quick install.</h2>
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
                <input name="websiteSubmit" type="submit" value="Submit" class="btn btn-primary" />
            </div><!-- end form-group -->
        
    	<?php else : ?>
            
            <?php
			
			if( isset( $_POST['userSubmit'] ) )
			{
				$form->addField( 'fname' );
				$form->addRule( 'fname', array( 'required' ) );
				$form->addRule( 'fname', array( 'name' ), 'Please enter your first name.' );
				
				$form->addField( 'lname' );
				$form->addRule( 'lname', array( 'required' ) );
				$form->addRule( 'lname', array( 'name' ), 'Please enter your last name.' );
				
				$form->addField( 'username' );
				$form->addRule( 'username', array( 'required' ) );
				$form->addRule( 'username', array( 'username' ) );
				
				$form->addField( 'email' );
				$form->addRule( 'email', array( 'required' ) );
				$form->addRule( 'email', array( 'email' ) );
				
				$form->addField( 'pass1' );
				$form->addRule( 'pass1', array( 'required' ) );
				$form->addRule( 'pass1', array( 'password' ) );
				
				$form->addField( 'pass2' );
				$form->addRule( 'pass2', array( 'required' ) );
				$form->addRule( 'pass2', array( 'password' ) );
				
				# Checks errors
				if( $form->isValid('fname') && $form->isValid('lname') && $form->isValid('username') && $form->isValid('email') && $form->isValid('pass1') && $form->isValid('pass2') )
				{	
					$_SESSION['user_valid'] = TRUE;
					$_SESSION['fname'] = $_POST['fname'];
					$_SESSION['lname'] = $_POST['lname'];
					$_SESSION['username'] = $_POST['username'];
					$_SESSION['email'] = $_POST['email'];
					$_SESSION['pass1'] = $_POST['pass1'];
					$_SESSION['pass2'] = $_POST['pass2'];
					
				} // end count errors
				
			} // end if( isset( $_POST['userSubmit'] ) )
			
			?>
            
    		<?php if( !isset( $_SESSION['user_valid'] ) ) : ?>
                <div class="progress">
                  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                    <span class="sr-only">60% Complete (success)</span>
                  </div>
                </div>
                <h3>Create an Admin Account</h3>
                <div class="form-group">
                    <input class="form-control" type="text" name="fname" value="<?php $form->getValue( 'fname' ) ?>" placeholder="First Name" />
                    <?php $form->getFieldError( 'fname' ); ?>
                </div><!-- end form-group -->
                
                <div class="form-group">
                    <input class="form-control" type="text" name="lname" value="<?php $form->getValue( 'lname' ) ?>" placeholder="Last Name" />
                    <?php $form->getFieldError( 'lname' ); ?>
                </div><!-- end form-group -->
                
                <div class="form-group">
                    <input class="form-control" type="text" name="username" value="<?php $form->getValue( 'username' ) ?>" placeholder="Username" />
                    <?php $form->getFieldError( 'username' ); ?>
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
                        
                        else $form->getFieldError( 'pass1' );	
                        
                    } else $form->getFieldError( 'pass1' );
                        
                    ?>
                    <p class="help-block"><span class="label label-primary">Security</span> Your password is your first defense against hackers.We require that your password be at least 8 characters long, contain uppercase letters, lowercase letters and contain numbers.</p>
                </div><!-- end form-group -->
                
                <div class="form-group">
                    <input class="form-control" type="password" name="pass2" value="<?php $form->getValue( 'pass2' ) ?>" placeholder="Confirm Password" />
                    <?php 
                    if( isset( $_POST[ 'pass1' ] ) && isset( $_POST[ 'pass2' ] ) )
                    {
                        if( $_POST[ 'pass1' ] != $_POST[ 'pass2' ] );
                            
                        
                        else $form->getFieldError( 'pass2' );	
                        
                    } else $form->getFieldError( 'pass2' );
                        
                    ?>
                </div><!-- end form-group -->
                
                <div class="form-group">
                    <input name="userSubmit" type="submit" value="Submit" class="btn btn-primary" />
                </div><!-- end form-group -->
                
            <?php else : ?>
            	
                <?php
			
				if( isset( $_POST['envSubmit'] ) )
				{
					$form->addField( 'liveUrl' );
					$form->addRule( 'liveUrl', array( 'required' ) );
					$form->addRule( 'liveUrl', array( 'url' ) );
					
					$form->addField( 'liveDbName' );
					$form->addRule( 'liveDbName', array( 'required' ) );
					
					$form->addField( 'liveUsername' );
					$form->addRule( 'liveUsername', array( 'required' ) );
					
					$form->addField( 'liveDbPass' );
					$form->addRule( 'liveDbPass', array( 'required' ) );
					
					$form->addField( 'liveDbHost' );
					$form->addRule( 'liveDbHost', array( 'required' ) );
	
					
					if( !empty( $_POST['devUrl'] ) || !empty( $_POST['devDbName'] ) || !empty( $_POST['devUsername'] ) || !empty( $_POST['devDbPass'] ) )
					{
						$form->addField( 'devUrl' );
						$form->addRule( 'devUrl', array( 'required' ) );
						
						$form->addField( 'devDbName' );
						$form->addRule( 'devDbName', array( 'required' ) );
						
						$form->addField( 'devUsername' );
						$form->addRule( 'devUsername', array( 'required' ) );
						
						$form->addField( 'devDbPass' );
						$form->addRule( 'devDbPass', array( 'required' ) );
						
					} // end if( isset( $_POST['devUrl'] ) || isset( $_POST['devDbName'] ) || isset( $_POST['devUsername'] ) || isset( $_POST['devDbPass'] ) )
					
					
					# Checks errors
					if( $form->isValid('liveUrl') && $form->isValid('liveDbName') && $form->isValid('liveUsername') && $form->isValid('liveDbPass') && $form->isValid('liveDbHost') )
					{	
						echo 'live good';
						//$_SESSION['env_valid'] = TRUE;

						
					} // end count errors
					
				} // end if( isset( $_POST['userSubmit'] ) )
				
				?>
				
				<?php if( !isset( $_SESSION['env_valid'] ) ) : ?>
					<div class="progress">
					  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
						<span class="sr-only">90% Complete (success)</span>
					  </div>
					</div>
					<h2>Database &amp; Environment</h2>
                    <p class="mbt">Please setup the database(s) for <?php echo FW_NAME; ?> to connect to.
                        <span class="text-info mbt">If you're unsure of these details, please contact your <strong>webmaster</strong> or <strong>web developer</strong> managing your site.</span></p>
                        <div class="caption mbs">You can always change these database setting in your  <code>sa_db.php</code> file.</div>
                        <h3>Production Environment</h3>
                     	<div class="form-group">
                          <input class="form-control" type="text" name="liveUrl" value="<?php $form->getValue( 'liveUrl' ) ?>" placeholder="Production URL" />
                          
                     	</div>
                        <?php $form->getFieldError( 'liveUrl' ); ?>
                        <div class="help-block">Enter the url associated with your website. E.g. <code><?php echo 'http://'. strtolower( str_replace( ' ', '', $_SESSION['siteName'] ) ).'.com'; ?></code> or <code><?php echo  'https://beta.'.strtolower( str_replace( ' ', '', $_SESSION['fname']. $_SESSION['lname'] ) ).'.com'; ?></code>.</div>
                        
                        <div class="form-group">
                            <input class="form-control" type="text" name="liveDbName" value="<?php $form->getValue( 'liveDbName' ) ?>" placeholder="Production Database Name" />
                            <?php $form->getFieldError( 'liveDbName' ); ?>
                            <div class="help-block">Most likely prefixed with username E.g. <code>username_database-name</code>.</div>
                        </div><!-- end form-group --> 
                        
                        <div class="form-group">
                            <input class="form-control" type="text" name="liveUsername" value="<?php $form->getValue( 'liveUsername' ) ?>" placeholder="Production Database Username" />
                            <?php $form->getFieldError( 'liveUsername' ); ?>
                        </div><!-- end form-group --> 
                        
                        <div class="form-group">
                            <input class="form-control" type="password" name="liveDbPass" value="<?php $form->getValue( 'liveDbPass' ) ?>" placeholder="Production Database Password" />
                            <?php $form->getFieldError( 'liveDbPass' ); ?>
                        </div><!-- end form-group --> 
                        
                        <div class="form-group">
                            <input class="form-control" type="text" name="liveDbHost" value="<?php $form->getValue( 'liveDbHost', 'localhost' ) ?>" placeholder="Production Database Host" />
                            <?php $form->getFieldError( 'liveDbHost' ); ?>
                            <div class="help-block">Most likely <code>localhost</code>. If you're using Godaddy hosting, this will be different. Please check your account settings.</div>
                        </div><!-- end form-group --> 
                        
                        <script type="text/javascript">
							<!--
								function toggle_visibility(id) {
								   var e = document.getElementById(id);
								   if(e.style.display == 'block')
									  e.style.display = 'none';
								   else
									  e.style.display = 'block';
								}
							//-->
							</script>
                            
						<?php if( empty( $_POST['devUrl'] ) && empty( $_POST['devDbName'] ) && empty( $_POST['devUsername'] ) && empty( $_POST['devDbPass'] ) ) : ?>
                        	
							
							<div class="panel panel-default">
							  <div class="panel-body">
									<a onclick="toggle_visibility('devEnv');">Add a development environment</a>
									<div class="help-block">If you are using a development environment such as XAMPP, WAMP, or LAMP</div>
							  </div>
							</div>
                        
                        	<div id="devEnv" style="display: none;">
                        <?php else : ?>
                        	<div>
                      	<?php endif; ?>
                            <h3>Development Environment</h3>
                                <div class="form-group mbs">
                                  <input class="form-control" type="text" name="devUrl" value="<?php $form->getValue( 'devUrl' ) ?>" placeholder="Development URL" />
                                  
                                </div>
                                <?php $form->getFieldError( 'devUrl' ); ?>
                                <div class="help-block">Enter the url associated with your development environment. E.g. <code><?php echo 'localhost/' . strtolower( str_replace( ' ', '', $_SESSION['siteName'] ) ); ?></code> or <code><?php echo strtolower( str_replace( ' ', '', $_SESSION['fname']. $_SESSION['lname'] ) ).'.dev'; ?></code>.</div>
                                
                                <div class="form-group">
                                    <input class="form-control" type="text" name="devDbName" value="<?php $form->getValue( 'devDbName' ) ?>" placeholder="Development Database Name" />
                                    <?php $form->getFieldError( 'devDbName' ); ?>
                                </div><!-- end form-group --> 
                                
                                <div class="form-group">
                                    <input class="form-control" type="text" name="devUsername" value="<?php $form->getValue( 'devUsername' ) ?>" placeholder="Development Database Username" />
                                    <?php $form->getFieldError( 'devUsername' ); ?>
                                </div><!-- end form-group --> 
                                
                                <div class="form-group">
                                    <input class="form-control" type="password" name="devDbPass" value="<?php $form->getValue( 'devDbPass' ) ?>" placeholder="Development Database Password" />
                                    <?php $form->getFieldError( 'devDbPass' ); ?>
                                </div><!-- end form-group --> 
                                
                                <div class="form-group">
                                    <input class="form-control" type="text" name="devDbHost" value="<?php $form->getValue( 'devDbHost', 'localhost' ) ?>" placeholder="Production Database Host" />
                                    <?php $form->getFieldError( 'devDbHost' ); ?>
                                    <div class="help-block">Most likely <code>localhost</code>.</div>
                                </div><!-- end form-group --> 
                          	</div><!-- end devEnv -->
					
					<div class="form-group">
						<input name="envSubmit" type="submit" value="Finish" class="btn btn-success btn-block" />
					</div><!-- end form-group -->
					
				<?php else : ?>
					Finished
					
				<?php endif; ?>
                
         	<?php endif; ?>
    
		<?php endif; ?>
	</form>

</div><!-- end mCeonter mxw400 -->

<?php sa_footer(); ?>