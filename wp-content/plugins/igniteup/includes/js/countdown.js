function setCountdown($countdown) {
    jQuery("#secs").countdown($countdown, function (event) {
        jQuery(this).text(event.strftime('%S'));
        checkSeconds(jQuery(this).text());
    });
    jQuery("#mins").countdown($countdown, function (event) {
        jQuery(this).text(event.strftime('%M'));
        checkMins(jQuery(this).text());
    });
    jQuery("#hrs").countdown($countdown, function (event) {
        jQuery(this).text(event.strftime('%H'));
        checkHours(jQuery(this).text());
    });
    jQuery("#days").countdown($countdown, function (event) {
        jQuery(this).text(event.strftime('%D'));
        checkDays(jQuery(this).text());
    });

    function checkSeconds(sec) {
        if (sec === '01') {
            jQuery("#sec-s").addClass('hidden');
        } else {
            jQuery("#sec-s").removeClass('hidden');
        }
    }
    function checkMins(min) {
        if (min === '01') {
            jQuery("#min-s").addClass('hidden');
        } else {
            jQuery("#min-s").removeClass('hidden');
        }
    }
    function checkHours(hrs) {
        if (hrs === '01') {
            jQuery("#hrs-s").addClass('hidden');
        } else {
            jQuery("#hrs-s").removeClass('hidden');
        }
    }
    function checkDays(days) {
        if (days === '01') {
            jQuery("#day-s").addClass('hidden');
        } else {
            jQuery("#day-s").removeClass('hidden');
        }
    }
}