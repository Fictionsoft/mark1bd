<form action="options.php" method="post">
    <?php
    settings_fields('cscs_common_options');
    do_settings_sections('cscs_common_options');
    wp_enqueue_media();
    ?>
    <table class="form-table"> 
        <tr>
            <th><label><?php _e('Subscribe Button Text', CSCS_TEXT_DOMAIN); ?></label></th>
            <td>
                <?php
                $cs_subscribe_text = CSCS_GENEROPTION_PREFIX . 'subscribe_text';
               
                ?>
                <input type="text" class="regular-text" placeholder="" name='<?php echo $cs_subscribe_text; ?>' value='<?php echo CSAdminOptions::getDefaultStrings('subscribe_text'); ?>'>
                <p class="description"><?php _e('Subscribe Button Text', CSCS_TEXT_DOMAIN); ?></p>
            </td>
        </tr> 
        <tr>
            <th><label><?php _e('Thank you message', CSCS_TEXT_DOMAIN); ?></label></th>
            <td>
                <?php
                $cs_thank_msg = CSCS_GENEROPTION_PREFIX . 'alert_thankyou';
                ?>
                <input type="text" class="regular-text" placeholder="" name='<?php echo $cs_thank_msg; ?>' value='<?php echo CSAdminOptions::getDefaultStrings('alert_thankyou'); ?>'>
                <p class="description"><?php _e('Thank you message after a successful subscription.', CSCS_TEXT_DOMAIN); ?></p>
            </td>
        </tr> 
        <tr>
            <th><label><?php _e('Invalid Email Error', CSCS_TEXT_DOMAIN); ?></label></th>
            <td>
                <?php $cs_invalid_email_msg = CSCS_GENEROPTION_PREFIX . 'alert_error_invalid_email';
                ?>
                <input type="text" class="regular-text" placeholder="" name='<?php echo $cs_invalid_email_msg; ?>' value='<?php echo CSAdminOptions::getDefaultStrings('alert_error_invalid_email'); ?>'>
                <p class="description"><?php _e('Error message for invalid email addresses.', CSCS_TEXT_DOMAIN); ?></p>
            </td>
        </tr> 
        <tr>
            <th><label><?php _e('Email Already Exists Error', CSCS_TEXT_DOMAIN); ?></label></th>
            <td>
                <?php
                $cs_already_exists_email_msg = CSCS_GENEROPTION_PREFIX . 'alert_error_already_exists';
               
                ?>
                <input type="text" class="regular-text" placeholder="" name='<?php echo $cs_already_exists_email_msg; ?>' value='<?php echo CSAdminOptions::getDefaultStrings('alert_error_already_exists'); ?>'>
                <p class="description"><?php _e('Message to display if the user has already subscribed.', CSCS_TEXT_DOMAIN); ?></p>
            </td>
        </tr> 
    </table>
    <p class="submit">
        <input type="submit" name="submit" id="submit" class="button button-primary" value="Save Changes">
    </p>
</form>