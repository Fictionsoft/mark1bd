<?php
/**
 * Provide a public-facing view for the plugin
 *
 * This file is used to markup the public-facing aspects of the plugin.
 *
 * @link       http://jeweltheme.com
 * @since      1.0.0
 *
 * @package    Sunrise_Coming_Soon
 * @subpackage Sunrise_Coming_Soon/public/partials
 */

//General
$sunrise = new Sunrise_Coming_Soon_Loader();
$countdown_date = $sunrise->sunrise_get_option( 'sunrise_countdown_date', 'sunrise_general', '' ); 

$old_date_timestamp = strtotime($countdown_date);
$new_date = date('Y-m-d h:i:s', $old_date_timestamp);

$logo_image = $sunrise->sunrise_get_option( 'logo_image', 'sunrise_general', '' ); 
$sunrise_left_image = $sunrise->sunrise_get_option( 'sunrise_left_image', 'sunrise_general', '' ); 
$footer_copyright = $sunrise->sunrise_get_option( 'footer_copyright', 'sunrise_general', '' ); 
$logo_type_select = $sunrise->sunrise_get_option( 'logo_type_select', 'sunrise_general', '' ); 
$logo_text = $sunrise->sunrise_get_option( 'logo_text', 'sunrise_general', '' ); 
$custom_css = $sunrise->sunrise_get_option( 'custom_css', 'sunrise_general', '' ); 


$body_content = $sunrise->sunrise_get_option( 'body_content', 'sunrise_content', '' ); 

//Emails
$subscribe_api = $sunrise->sunrise_get_option( 'subscribe_api', 'sunrise_email', '' ); 
$placeholder_email = $sunrise->sunrise_get_option( 'placeholder_email', 'sunrise_email', '' ); 
$subscribe_button = $sunrise->sunrise_get_option( 'subscribe_button', 'sunrise_email', '' ); 

//Socials
$facebook = $sunrise->sunrise_get_option( 'facebook', 'sunrise_socials', '' ); 
$twitter = $sunrise->sunrise_get_option( 'twitter', 'sunrise_socials', '' ); 
$google_plus = $sunrise->sunrise_get_option( 'google_plus', 'sunrise_socials', '' ); 
$linkedin = $sunrise->sunrise_get_option( 'linkedin', 'sunrise_socials', '' ); 
$pinterest = $sunrise->sunrise_get_option( 'pinterest', 'sunrise_socials', '' ); 
$youtube = $sunrise->sunrise_get_option( 'youtube', 'sunrise_socials', '' ); 
?>


<!-- This file should primarily consist of HTML with a little bit of PHP. -->
<!DOCTYPE html>
<html>
  <head>    
    <meta <?php language_attributes(); ?>>
    <meta name="description" content="Sunrise - Coming Soon and Maintenance Mode WordPress Plugin by Jewel Theme">
    <meta name="author" content="Jewel Theme">
    <meta name="authorUrl" content="http://jeweltheme.com">
    
    <!-- Mobile Specific Meta -->   
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--[if IE]><meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1'><![endif]-->


	<?php wp_head(); ?>
    <style>
    	<?php echo $custom_css;?>
    </style>

  </head>
 <body <?php body_class('sunrise'); ?>>
 <div class="bg">
	 <div class="bg-color">
		  <div class="container content">	 
				<div class="row">
					<div class="sun clearfix">
						<div class="col-sm-12">
						   <?php 
						   if( $logo_type_select == "image" ){
						   			echo '<h1><img class="logo-image" class="img-responsive" src="' . $logo_image .'" alt="Logo Image"/></h1>';
							   	} elseif( $logo_type_select == "text" ){
							   		echo '<h1>'. $logo_text .'</h1>';
							   	}
						   	
						   	echo $body_content;?>       
						</div>

						<?php if( $sunrise_left_image ){ ?>
							<div id="left-block" class="col-sm-4 text-center">
								<img class="img-responsive" src="<?php echo $sunrise_left_image; ?>" alt="tab"/>
							</div>
						<?php } ?>
						
						<div id="right-block" class="col-sm-8">
							<div class="row">
							   <div class="col-sm-offset-1 col-sm-10">
									<div class="timing">
										<div id="count-down" data-date="<?php echo $new_date; ?>">
											
										</div>
									</div>
									<!-- /.timing -->
							   </div>
							</div>
							<div class="row">
							  <div class="col-sm-offset-2 col-sm-8">
								<p class="alert-success"></p>
								<p class="alert-warning"></p>
								<form class="newsletter-signup" role="form">
								  <div class="input-group">
									<input type="email" class="form-control" id="email" placeholder="<?php echo $placeholder_email;?>" required>
									<span class="input-group-btn">
									  <input type="submit" class="btn btn-default btn-sand" value="<?php echo $subscribe_button;?>">
									</span>
								  </div><!-- /input-group -->
								</form>
							  </div>
							</div>                    
							<p class="followus"></p>
							<ul class="social-icon">
								<?php 
									if( $facebook ){ 
										echo '<li><a href="'. $facebook .'" target="_blank"><i class="fa fa-facebook"></i></a></li>';
									} if ($twitter) {
										echo '<li><a href="'. $twitter .'" target="_blank"><i class="fa fa-twitter"></i></a></li>';
									} if ($google_plus) {
										echo '<li><a href="'. $google_plus .'" target="_blank"><i class="fa fa-google-plus"></i></a></li>';
									} if ($linkedin) {
										echo '<li><a href="'. $linkedin .'" target="_blank"><i class="fa fa-linkedin"></i></a></li>';
									} if ($pinterest) {
										echo '<li><a href="'. $pinterest .'" target="_blank"><i class="fa fa-pinterest"></i></a></li>';
									} if ($youtube) {
										echo '<li><a href="'. $youtube .'" target="_blank"><i class="fa fa-youtube"></i></a></li>';
									}
								?>
						
							</ul>              
						</div>
					</div>
					
		 			<div class="footer-bottom">
						<div class="copy-right">
							<?php echo $footer_copyright;?>
						</div>
					</div>

				</div>
			</div>
			<!-- .container end here -->
	 </div>
 </div>
   
    

    

    <script type="text/javascript">
    		jQuery(function ($) {
		    	
		    	'use strict';
				// Invoke the plugin
				$('input, textarea').placeholder();

				$("#count-down").TimeCircles({   
			           circle_bg_color: "#8a7f71",
			           use_background: true,
			           bg_width: 1.0,
			           fg_width: 0.02,
			           time: {
			                Days: { color: "#fefeee" },
			                Hours: { color: "#fefeee" },
			                Minutes: { color: "#fefeee" },
			                Seconds: { color: "#fefeee" }
			            }
			    });

				// --------------Newsletter-----------------------

					$(".newsletter-signup").ajaxChimp({
						callback: mailchimpResponse,
						url: "<?php echo $subscribe_api;?>"
					});

					function mailchimpResponse(resp) {
						 if(resp.result === 'success') {
						 
							$('.alert-success').html(resp.msg).fadeIn().delay(3000).fadeOut();
							
						} else if(resp.result === 'error') {
							$('.alert-warning').html(resp.msg).fadeIn().delay(3000).fadeOut();
						}  
					};
			});

 

    </script>
    
    <?php wp_footer(); ?>

  </body>
</html>