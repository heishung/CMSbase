/**
 * Created by dangnv on 10/14/16.
 */

//Prototype
Number.prototype.formatMoney = function (c, decimalSeparator, thousandSeparator) {
    var n = this,
        c = isNaN(c = Math.abs(c)) ? 2 : c,
        d = decimalSeparator == undefined ? "." : decimalSeparator,
        t = thousandSeparator == undefined ? "," : thousandSeparator,
        s = n < 0 ? "-" : "",
        i = String(parseInt(n = Math.abs(Number(n) || 0).toFixed(c))),
        j = (j = i.length) > 3 ? j % 3 : 0;
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
};

String.prototype.toNumber = function () {
    return parseFloat(replaceAll(this, ',', ''))
};

//Disable Input number scroll.
$('form').on('focus', 'input[type=number]', function (e) {
    $(this).on('mousewheel.disableScroll', function (e) {
        e.preventDefault()
    })
});

$('form').on('blur', 'input[type=number]', function (e) {
    $(this).off('mousewheel.disableScroll')
})

function isNumber(n) {
    return !isNaN(parseFloat(n)) && isFinite(n);
}

function jsonFromPHPJsonString(phpJsonString) {
    var x = document.createElement('div');
    x.innerHTML = phpJsonString;
    return $.parseJSON(x.innerHTML);
}

function dateStringDDMMYY(date) {
    return date.getDate() + "/" + (date.getMonth() + 1) + "/" + date.getFullYear();
}

function addDaysToDate(days, date) {
    return new Date(date.setTime(date.getTime() + days * 86400000));
}

function replaceAll(str, find, replace) {
    return str.replace(new RegExp(find, 'g'), replace);
}

function insertParam(key, value) {
    key = encodeURI(key);
    value = encodeURI(value);

    var kvp = document.location.search.substr(1).split('&');
    if (kvp.length > 1) {
        var i = kvp.length;
        var x;
        while (i--) {
            x = kvp[i].split('=');

            if (x[0] == key) {
                x[1] = value;
                kvp[i] = x.join('=');
                break;
            }
        }

        if (i < 0) {
            kvp[kvp.length] = [key, value].join('=');
        }

    } else {
        kvp[0] = [key, value].join('=');
    }
    document.location.search = kvp.join('&');
}

function ajax(e, callback) {
    var url = $(e).data('action-url');
    var method = $(e).data('action-method');
    var data = $(e).data('action-data');
    $.ajax({
        type: method ? method : 'GET',
        url: url,
        data: data,
        success: function (res) {
            if (callback) {
                callback(true, e);
            }
        },
        error: function (res) {
            if (callback) {
                callback(false, res);
            }
        }
    })
}

