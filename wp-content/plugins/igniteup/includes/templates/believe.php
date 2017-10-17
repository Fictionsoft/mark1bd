<?php

function igniteup_define_template_believe($templates) {
    $options = array(
        'name' => 'Believe',
        'folder_name' => 'believe',
        'options' => array(
            'logo' => array(
                'type' => 'image',
                'label' => __('Logo (Transparent)', CSCS_TEXT_DOMAIN),
                'def' => plugins_url("believe/images/logo.png", __FILE__),
                'description' => __('Recommended size: 250px x 90px', CSCS_TEXT_DOMAIN),
            ),
            'bg_color' => array(
                'type' => 'color-picker',
                'label' => __('Background Color', CSCS_TEXT_DOMAIN),
                'def' => '#28BB9B',
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
                'label' => __('Font Color', CSCS_TEXT_DOMAIN),
                'def' => '#fff',
                'placeholder' => '#FFFFFF',
                'description' => __('This will be the font color', CSCS_TEXT_DOMAIN),
            ),
            'title_top' => array(
                'type' => 'text',
                'label' => __('Title Top', CSCS_TEXT_DOMAIN),
                'def' => __('Our Website is', CSCS_TEXT_DOMAIN),
                'placeholder' => __('Our Website is', CSCS_TEXT_DOMAIN),
                'description' => __('Text above the main title', CSCS_TEXT_DOMAIN),
            ),
            'main_title' => array(
                'type' => 'text',
                'label' => __('Main title', CSCS_TEXT_DOMAIN),
                'def' => __('Coming Soon', CSCS_TEXT_DOMAIN),
                'placeholder' => __('Coming Soon', CSCS_TEXT_DOMAIN),
                'description' => __('The bold title', CSCS_TEXT_DOMAIN),
            ),
            'paragraph' => array(
                'type' => 'textarea',
                'label' => __('Paragraph Text', CSCS_TEXT_DOMAIN),
                'def' => __('Meanwhile feel free to interact with our social networks', CSCS_TEXT_DOMAIN),
                'placeholder' => __('Paragraph Text', CSCS_TEXT_DOMAIN),
                'description' => __('This will be the paragraph text', CSCS_TEXT_DOMAIN),
            ),
            'social-twitter' => array(
                'type' => 'text',
                'label' => 'Twitter',
                'def' => '',
                'placeholder' => 'http://twitter.com/ceylonsystems',
                'description' => __('Enter the Twitter URL here', CSCS_TEXT_DOMAIN),
            ),
            'social-facebook' => array(
                'type' => 'text',
                'label' => 'Facebook',
                'def' => '',
                'placeholder' => 'http://facebook.com/ceylonsystems',
                'description' => __('Enter the Facebook URL here', CSCS_TEXT_DOMAIN),
            ),
            'social-pinterest' => array(
                'type' => 'text',
                'label' => 'Pinterest',
                'def' => '',
                'placeholder' => 'http://pinterest.com/ceylonsystems',
                'description' => __('Enter the Pinterest URL here', CSCS_TEXT_DOMAIN),
            ),
            'social-gplus' => array(
                'type' => 'text',
                'label' => 'Google+',
                'def' => '',
                'placeholder' => 'http://plus.google.com/+ceylonsystems',
                'description' => __('Enter the Google+ URL here', CSCS_TEXT_DOMAIN),
            ),
        )
    );

    $templates['believe'] = $options;
    return $templates;
}

add_filter('igniteup_get_templates', 'igniteup_define_template_believe');

function cscs_belive_theme_scripts() {
    wp_enqueue_style('bootstrap', plugins_url('includes/css/bootstrap.min.css', CSCS_FILE), array(), CSCS_CURRENT_VERSION);
    wp_enqueue_style('font-montserrat', plugins_url('includes/css/font-montserrat.css', CSCS_FILE), array(), CSCS_CURRENT_VERSION);
    wp_enqueue_style('font-biryani', plugins_url('includes/css/font-biryani.css', CSCS_FILE), array(), CSCS_CURRENT_VERSION);
    wp_enqueue_style('believe', plugins_url('believe/css/main.css', __FILE__), array(), CSCS_CURRENT_VERSION);
}

add_action('cscs_theme_scripts_believe', 'cscs_belive_theme_scripts');
