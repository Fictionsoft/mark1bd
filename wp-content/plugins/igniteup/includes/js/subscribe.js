jQuery('#ign-subscribe-btn').on('click', function () {
    subscribe();
});
jQuery('#cs_email, #cs_name').on('keypress', function (e) {
    if (e.which == 13) {
        subscribe();
    }
});

function subscribe() {
    jQuery.ajax({
        url: igniteup_ajaxurl,
        data: {action: 'subscribe_email', cs_email: jQuery("#cs_email").val(), cs_name: jQuery("#cs_name").val()},
        dataType: 'json',
        success: function (data) {
            if (data['error']) {
                
                function hideMsg() {                    
                    jQuery('#ign-notifications #error-msg-text').slideUp();
                }
                function showMsg(message) {
                    jQuery('#ign-notifications #error-msg-text').html(message);
                    jQuery('#ign-notifications #error-msg-text').fadeIn();
                }
				showMsg(data['message']);
                setTimeout(hideMsg, 4000);
            }
            else {
                jQuery('.subscribe-form').slideUp();
                jQuery('#ign-notifications .thankyou').slideDown();
            }
        }
    });
}