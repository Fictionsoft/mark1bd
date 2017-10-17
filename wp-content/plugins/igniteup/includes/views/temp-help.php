<div class="update-page">
    <h1 class="title"><?php _e('Welcome to IgniteUp', CSCS_TEXT_DOMAIN); ?> <?php echo CSCS_CURRENT_VERSION; ?>!</h1>
    <h2 class="subtitle"><?php _e('Now you can install additional templates from the store.', CSCS_TEXT_DOMAIN); ?></h2>
    <div class="widget-wrapper">
        <div class="help-page-col">
            <div class="changelog help-page-widget">
                <h2><?php _e("What's New?", CSCS_TEXT_DOMAIN); ?></h2>
                <ul class="changelog-main-list">
                    <li class="main-item">
                        3.0 <span><?php _e('NEW!', CSCS_TEXT_DOMAIN); ?></span>
                        <ul class="changelog-sub-list">
                            <li>Added external template support.</li>
                            <li>Added feature to set a 503 status response. This will be enabled by default.</li>
                            <li>Added options to customize subscribe form alerts and the thank you message.</li>
                            <li>Fixed export to BCC and CSV buttons not working issue.</li>
                            <li>Added Common Options tab to avoid getting common settings in every template.</li>
                        </ul>
                    </li>
                    <li class="main-item">
                        2.0
                        <ul class="changelog-sub-list">
                            <li>Mailchimp and Mailpoet integration to save subscribers directly to your already existing mailing lists.</li>
                            <li>Added options to add a favicon.</li>
                            <li>Added subscribe form support into the Glass template as well.</li>
                            <li>Added an admin bar notification when maintenance mode is enabled.</li>
                            <li>Fixed duplicate subscriber saving.</li>
                            <li>Fixed conflict in the backend with some plugins.</li>
                        </ul>
                    </li>
                    <li class="main-item">
                        1.2.1
                        <ul class="changelog-sub-list">
                            <li>Add support to skip the page for subscriber role as well.</li>
                            <li>Add feature to use Custom CSS.</li>
                            <li>Improve preview feature.</li>
                        </ul>
                    </li>            
                </ul>        
            </div>
        </div>

        <div class="help-page-col">
            <div class="rating-box help-page-widget">
                <h2><?php _e('Loving IgniteUp?', CSCS_TEXT_DOMAIN); ?></h2>
                <p><?php _e('Thank you for using IgniteUp in your WordPress installation.', CSCS_TEXT_DOMAIN); ?></p>
                <p><?php _e('Do you mind taking a minute to support us by adding a review? Your feedback is very important to us.', CSCS_TEXT_DOMAIN); ?></p>
                <a href="https://wordpress.org/support/view/plugin-reviews/igniteup" target="_blank" class="button button-primary"><?php _e('Add a Review on WordPress', CSCS_TEXT_DOMAIN); ?></a>
            </div>

            <div class="support-box help-page-widget">
                <h2><?php _e('Need Help?', CSCS_TEXT_DOMAIN); ?></h2>
                <p><?php _e('We have an acting fast support for you. Post your question in WordPress support forums for IgniteUp', CSCS_TEXT_DOMAIN); ?></p>
                <a href="https://wordpress.org/support/plugin/igniteup" target="_blank" class="button button-primary"><?php _e('Visit Support Forum', CSCS_TEXT_DOMAIN); ?></a>
                <p><?php printf(__('If you need to email us a support request please use our %s support email%s. Got any suggestions or feedback? Write us via our general <a href="mailto:info@ceylonsystems.com">email address</a>.', CSCS_TEXT_DOMAIN), '<a href="mailto:support@getigniteup.com">', '</a>'); ?></p>
            </div>
            
            <div class="support-box help-page-widget row-last-widget">
                <h2><?php _e('Watch Tutorial', CSCS_TEXT_DOMAIN); ?></h2>
                <p></p>
                <iframe style="width:100%; height: 205px;" src="https://www.youtube.com/embed/59KSFWCF0Rw?list=PL1W6Z2r2qAK1_VtjZkk32rU5I0AUl6xZc" frameborder="0" allowfullscreen></iframe>
            </div>
        </div>

        <div class="help-page-col help-page-col-last">
            <div class="support-box help-page-widget row-last-widget special">
                <h2><?php _e('Need more templates?', CSCS_TEXT_DOMAIN); ?></h2>
                <p><?php _e('We have more templates for you with improved features like adding a YouTube video as the background.', CSCS_TEXT_DOMAIN); ?></p>

                <a href="http://getigniteup.com/templates/" target="_blank">
                    <div>
                        <img style="width:100%;margin-bottom: 20px;border: 1px solid #eee;" src="http://getigniteup.com/wp-content/uploads/2015/09/plugin-template-thumb.jpg">
                    </div>
                </a>

                <a href="http://getigniteup.com/templates/" target="_blank" class="button button-primary"><?php _e('Get more templates', CSCS_TEXT_DOMAIN); ?></a>
            </div>

            <div class="support-box help-page-widget row-last-widget">
                <h2><?php _e('About IgniteUp', CSCS_TEXT_DOMAIN); ?></h2>
                <p><?php printf(__('IgniteUp is an in-house product from Ceylon Systems. Want to know more about us? %sVisit our website%s.', CSCS_TEXT_DOMAIN), '<a target="_blank" href="http://www.getigniteup.com">', '</a>'); ?></p>


                <p><?php _e('If you appreciate our effort, please make a donation with PayPal. In this way we can serve you better and IgniteUp will improve. Thank you in advance!', CSCS_TEXT_DOMAIN); ?></p>
                <a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&hosted_button_id=E6MY6RKB8DAEL" target="_blank" class="button button-primary"><?php _e('Donate with PayPal', CSCS_TEXT_DOMAIN); ?></a>
            </div>
        </div>
    </div>
</div>