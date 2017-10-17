<?php
if ( !class_exists('Sunrise_Coming_Soon_Settings' ) ):
class Sunrise_Coming_Soon_Settings {

    private $settings_api;

    function __construct() {
        $this->settings_api = new Sunrise_Coming_Soon_Settings_Class;

        add_action( 'admin_init', array($this, 'admin_init') );
        add_action( 'admin_menu', array($this, 'admin_menu') );
    }

    function admin_init() {

        //set the settings
        $this->settings_api->set_sections( $this->get_settings_sections() );
        $this->settings_api->set_fields( $this->get_settings_fields() );

        //initialize settings
        $this->settings_api->admin_init();
    }

    function admin_menu() {
        add_menu_page( 'Sunrise', 'Sunrise Settings', 'delete_posts', 'sunrise_coming_soon_settings', array($this, 'plugin_page'), plugin_dir_url( __FILE__ ). 'icon/icon.png'  );
    }

    function get_settings_sections() {
        $sections = array(
            array(
                'id' => 'sunrise_general',
                'title' => __( 'General', 'sunrise' )
            ),
            array(
                'id' => 'sunrise_content',
                'title' => __( 'Content', 'sunrise' )
            ),            
            array(
                'id' => 'sunrise_email',
                'title' => __( 'Email', 'sunrise' )
            ),
            array(
                'id' => 'sunrise_socials',
                'title' => __( 'Socials', 'sunrise' )
            ),
             array(
                'id' => 'sunrise_support',
                'title' => 'Help & Support',
                'desc' => '<div class="support">
                    <div class="sunrise-section-field">
                        <h2 class="field-title">Need Support?</h2>
                        <p>Feel free to contact with us, Just post a Topics on our Dedicated <a href="http://jeweltheme.com/support">Support Forum</a></p>
                        
                        <h2 class="field-title">Donate Us</h2>
                        <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_donations&business=jwthemeltd@gmail.com&lc=US&item_name=Donate&currency_code=USD&bn=PP-DonationsBF:btn_donate_SM.gif:NonHostedGuest" target="_blank">
                                <img src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif">
                        </a>

                    </div>
                </div>'
            )
        );
        return $sections;
    }

    /**
     * Returns all the settings fields
     *
     * @return array settings fields
     */
    function get_settings_fields() {
        $settings_fields = array(
            'sunrise_general' => array(

                array(
                    'name'              => 'sunrise_coming_soon_enable',
                    'label'             => __( 'Maintenance Mode Enable?', 'sunrise' ),
                    'type'              => 'checkbox'
                ), 
                array(
                    'name'              => 'sunrise_countdown_date',
                    'label'             => __( 'Countdown Date', 'sunrise' ),
                    'type'              => 'date',
                    'default'           => ''  
                ),
                array(
                    'name'              => 'sunrise_bg_image_type_select',
                    'label'             => __( 'Choose Background Type', 'sunrise' ),
                    'desc'              => __( 'Select Background Type. e.g; Image/Color', 'sunrise' ),
                    'type'              => 'select',
                    'options'           => array(
                                    'image' => 'Image',
                                    'color'  => 'Color'
                    )
                ),
                array(
                    'name'              => 'sunrise_bg_image',
                    'label'             => __( 'Background Image', 'sunrise' ),
                    'desc'              => __( 'Choose Background Image', 'sunrise' ),
                    'type'              => 'file',
                    'default'           => '',
                    'options'           => array(
                            'button_label' => 'Choose Background Image'
                    )
                ),
                array(
                    'name'              => 'bg_color',
                    'label'             => __( 'Background Color', 'sunrise' ),
                    'desc'              => __( 'Background Color', 'sunrise' ),
                    'type'              => 'color',
                    'default'           => '',
                ),  
                array(
                    'name'              => 'logo_type_select',
                    'label'             => __( 'Choose Logo Type', 'sunrise' ),
                    'desc'              => __( 'Select Logo Type. e.g; image/text', 'sunrise' ),
                    'type'              => 'select',
                    'options'           => array(
                                    'image' => 'Image',
                                    'text'  => 'Text'
                    )
                ),                
                array(
                    'name'              => 'logo_image',
                    'label'             => __( 'Logo Image', 'sunrise' ),
                    'desc'              => __( 'Choose Logo Image', 'sunrise' ),
                    'type'              => 'file',
                    'default'           => '',
                    'options'           => array(
                            'button_label' => 'Choose Logo Image'
                    )
                ),
                
                array(
                    'name'              => 'logo_text',
                    'label'             => __( 'Logo Text', 'sunrise' ),
                    'desc'              => __( 'Logo Text/Website Name', 'sunrise' ),
                    'type'              => 'text',
                    'default'           => 'Jewel Theme',
                ),                  
                array(
                    'name'              => 'logo_width',
                    'label'             => __( 'Logo Width', 'sunrise' ),
                    'desc'              => __( 'Logo Width in % or px ', 'sunrise' ),
                    'type'              => 'text',
                    'default'           => '20%',
                ),                
                array(
                    'name'              => 'logo_height',
                    'label'             => __( 'Logo Height', 'sunrise' ),
                    'desc'              => __( 'Logo Height in % or px ', 'sunrise' ),
                    'type'              => 'text',
                    'default'           => '100%',
                ),
                array(
                    'name'              => 'sunrise_left_image',
                    'label'             => __( 'Left Thumb Image', 'sunrise' ),
                    'desc'              => __( 'Choose Left Thumb Image', 'sunrise' ),
                    'type'              => 'file',
                    'default'           => '',
                    'options'           => array(
                                            'button_label' => 'Choose Image'
                    )
                ),
                array(
                    'name'              => 'footer_copyright',
                    'label'             => __( 'Footer Copyright', 'sunrise' ),
                    'desc'              => __( 'Footer Copyright Text', 'sunrise' ),
                    'type'              => 'textarea',
                    'default'           => __( '© 2015 by <a href="http://jeweltheme.com" target="_blank">Jewel Theme</a>', 'sunrise' )
                ),
                array(
                    'name'              => 'custom_css',
                    'label'             => __( 'Custom CSS', 'sunrise' ),
                    'desc'              => __( 'Custom CSS editor', 'sunrise' ),
                    'type'              => 'textarea',
                    'default'           => ''
                ),

            ),
            'sunrise_content'   => array(
                array(
                    'name'              => 'body_content',
                    'label'             => __( 'Body content', 'sunrise' ),
                    'desc'              => __( 'Enter Body content', 'sunrise' ),
                    'type'              => 'wysiwyg',
                    'default'           => '<h3>we are almost ready to</h3>
                                            <h2>launch our website</h2>'
                )
            ),
            'sunrise_email' => array(
                array(
                    'name'              => 'subscribe_api',
                    'label'             => __( 'Mailchimp Subscribe URL', 'sunrise' ),
                    'desc'              => __( 'Enter Mailchimp Subscribe URL. <a href="http://kb.mailchimp.com/lists/growth/create-a-new-list" target="_blank">Create a list</a>', 'sunrise' ),
                    'type'              => 'text',
                    'default'           => ''
                ),

                array(
                    'name'              => 'placeholder_email',
                    'label'             => __( 'Placeholder', 'sunrise' ),
                    'desc'              => __( 'Enter Placeholder Text', 'sunrise' ),
                    'type'              => 'text',
                    'default'           => 'support@jeweltheme.com'
                ),                
                array(
                    'name'              => 'subscribe_button',
                    'label'             => __( 'Subscribe Button', 'sunrise' ),
                    'desc'              => __( 'Enter Subscribe Button', 'sunrise' ),
                    'type'              => 'text',
                    'default'           => 'Subscribe'
                ),

            ),
            'sunrise_socials' => array(
                array(
                    'name'              => 'facebook',
                    'label'             => __( 'Facebook URL', 'sunrise' ),
                    'desc'              => __( 'Enter your Facebook URL.', 'sunrise' ),
                    'type'              => 'text'
                ),
                array(
                    'name'              => 'twitter',
                    'label'             => __( 'Twitter URL', 'sunrise' ),
                    'desc'              => __( 'Enter your Twitter URL.', 'sunrise' ),
                    'type'              => 'text'
                ),
                array(
                    'name'              => 'google_plus',
                    'label'             => __( 'Google Plus URL', 'sunrise' ),
                    'desc'              => __( 'Enter your Google Plus URL.', 'sunrise' ),
                    'type'              => 'text'
                ),
                array(
                    'name'              => 'linkedin',
                    'label'             => __( 'Linked In URL', 'sunrise' ),
                    'desc'              => __( 'Enter your Linked In URL.', 'sunrise' ),
                    'type'              => 'text'
                ),
                array(
                    'name'              => 'pinterest',
                    'label'             => __( 'Pinterest URL', 'sunrise' ),
                    'desc'              => __( 'Enter your Pinterest URL.', 'sunrise' ),
                    'type'              => 'text'
                ),
                array(
                    'name'              => 'youtube',
                    'label'             => __( 'Youtube URL', 'sunrise' ),
                    'desc'              => __( 'Enter your Youtube URL.', 'sunrise' ),
                    'type'              => 'text'
                )
            ),
        );

        return $settings_fields;
    }

    function plugin_page() {
        echo '<div class="wrap">';

        $this->settings_api->show_navigation();
        $this->settings_api->show_forms();

        echo '</div>';
    }

    /**
     * Get all the pages
     *
     * @return array page names with key value pairs
     */
    function get_pages() {
        $pages = get_pages();
        $pages_options = array();
        if ( $pages ) {
            foreach ($pages as $page) {
                $pages_options[$page->ID] = $page->post_title;
            }
        }

        return $pages_options;
    }

}
endif;
