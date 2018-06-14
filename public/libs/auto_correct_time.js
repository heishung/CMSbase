/**
 * Created by dangnv on 1/12/17.
 */

$(document).ready(function () {
    $('.timestamp').each(function (i, e) {
        var timestamp = parseInt($(e).data('time'))
        if (timestamp) {
            var time = moment(timestamp);
            var format = $(e).data('format');
            if (!format) {
                if (time.year() < moment().year()) {
                    format = 'DD/MM/YYYY';
                } else {
                    format = 'DD/MM HH:mm';
                }
            }

            var formattedTime = time.format(format)
            if ($(e).is('input')) {
                $(e).val(formattedTime);
            } else {
                $(e).text(formattedTime);
            }
        }
    });
});