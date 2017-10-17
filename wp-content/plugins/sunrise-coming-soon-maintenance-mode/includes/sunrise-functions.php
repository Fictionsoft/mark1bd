<?php

/**
 * Register all actions and filters for the plugin
 *
 * @link       http://jeweltheme.com
 * @since      1.0.0
 *
 * @package    Sunrise_Coming_Soon
 * @subpackage Sunrise_Coming_Soon/includes
 */


function sunrise_customization_settings(){ 
	$sunrise_custom = new Sunrise_Coming_Soon_Loader();

	$logo_width = $sunrise_custom->sunrise_get_option( 'logo_width', 'sunrise_general', '' ); 
	$logo_height = $sunrise_custom->sunrise_get_option( 'logo_height', 'sunrise_general', '' ); 
	$sunrise_bg_image_type_select = $sunrise_custom->sunrise_get_option( 'sunrise_bg_image_type_select', 'sunrise_general', '' ); 
	$sunrise_bg_image = $sunrise_custom->sunrise_get_option( 'sunrise_bg_image', 'sunrise_general', '' ); 
	$bg_color = $sunrise_custom->sunrise_get_option( 'bg_color', 'sunrise_general', '' ); 
?>
	<style>
		.logo-image{
			width: <?php echo $logo_width; ?>;
			height: <?php echo $logo_height; ?>;
		}
		<?php if( $sunrise_bg_image_type_select == "image" ){ ?>
			.bg {
				background: url(<?php echo $sunrise_bg_image; ?>)  no-repeat center center !important;
			    width: 100%;
			}	
		<?php } elseif ($sunrise_bg_image_type_select == "color") { ?>
			.bg {
				background: none;
			}
			.bg-color{
				background-color: <?php echo $bg_color; ?>;
			}
		<?php } ?>
		

	</style>
<?php }
add_action('wp_head', 'sunrise_customization_settings');
