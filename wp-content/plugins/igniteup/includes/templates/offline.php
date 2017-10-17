<?php

function igniteup_define_template_offline($templates) {
    $templates['offline'] = array(
        'name' => 'Offline',
        'folder_name' => 'offline',
        'options' => array(
            'logo' => array(
                'type' => 'image',
                'label' => __('Logo (Transparent)', CSCS_TEXT_DOMAIN),
                'def' => plugins_url("offline/img/rockyton_color.png", __FILE__),
                'description' => __('Recommended size: 250px x 90px', CSCS_TEXT_DOMAIN),
            ),
            'bg_color' => array(
                'type' => 'color-picker',
                'label' => __('Background Color', CSCS_TEXT_DOMAIN),
                'def' => '#303030',
                'placeholder' => '#28BB9B',
                'description' => __('This will be the background color.', CSCS_TEXT_DOMAIN),
            ),
            'bg_image' => array(
                'type' => 'image',
                'label' => __('Background Image', CSCS_TEXT_DOMAIN),
                'def' => '',
                'placeholder' => '',
                'description' => __('Page background image. (Recommended size: 1920px x 1080px)', CSCS_TEXT_DOMAIN),
            ),
            'font_color' => array(
                'type' => 'color-picker',
                'label' =>__( 'Font Color', CSCS_TEXT_DOMAIN),
                'def' => '#fff',
                'placeholder' => '#FFFFFF',
                'description' => __('This will be the font color', CSCS_TEXT_DOMAIN),
            ),
            'link_color' => array(
                'type' => 'color-picker',
                'label' => __('Link Color', CSCS_TEXT_DOMAIN),
                'def' => '#f1c40f',
                'placeholder' => '#f1c40f',
                'description' => __('This will be the hover color', CSCS_TEXT_DOMAIN),
            ),
            'title_top' => array(
                'type' => 'text',
                'label' => __('Title Top', CSCS_TEXT_DOMAIN),
                'def' => __('Website is offline', CSCS_TEXT_DOMAIN),
                'placeholder' => __('Website is offline', CSCS_TEXT_DOMAIN),
                'description' => __('Text above the main title', CSCS_TEXT_DOMAIN),
            ),
            'paragraph' => array(
                'type' => 'textarea',
                'label' => __('Paragraph Text', CSCS_TEXT_DOMAIN),
                'def' => __('sorry for the inconvenience <br> we will come with new experience.', CSCS_TEXT_DOMAIN),
                'placeholder' => __('Paragraph Text', CSCS_TEXT_DOMAIN),
                'description' => __('This will be the paragraph text, you can use html tags here.', CSCS_TEXT_DOMAIN),
            ),
            'contact' => array(
                'type' => 'text',
                'label' => __('Contact text', CSCS_TEXT_DOMAIN),
                'def' => __('contact site admin:', CSCS_TEXT_DOMAIN),
                'placeholder' => __('contact site admin:', CSCS_TEXT_DOMAIN),
                'description' => __('Contact information label', CSCS_TEXT_DOMAIN),
            ),
            'email' => array(
                'type' => 'email',
                'label' => __('Contact email', CSCS_TEXT_DOMAIN),
                'def' => 'contact@email.com',
                'placeholder' => 'contact@email.com',
                'description' => __('Your email address', CSCS_TEXT_DOMAIN),
            ),
        )
    );
    return $templates;
}

add_filter('igniteup_get_templates', 'igniteup_define_template_offline');

function cscs_offline_theme_scripts() {
    wp_enqueue_style('bootstrap', plugins_url('includes/css/bootstrap.min.css', CSCS_FILE), array(), CSCS_CURRENT_VERSION);
    wp_enqueue_style('font-montserrat', plugins_url('includes/css/font-montserrat.css', CSCS_FILE), array(), CSCS_CURRENT_VERSION);
    wp_enqueue_style('font-biryani', plugins_url('includes/css/font-biryani.css', CSCS_FILE), array(), CSCS_CURRENT_VERSION);
    wp_enqueue_style('offline', plugins_url('offline/css/main.css', __FILE__), array(), CSCS_CURRENT_VERSION);
}

add_action('cscs_theme_scripts_offline', 'cscs_offline_theme_scripts');
