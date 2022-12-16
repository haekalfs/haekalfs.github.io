if ($('#remember').attr('checked')) {
    var PIN = $('#PIN').attr("value");
    // set cookies to expire in 14 days
    $.cookie('PIN', PIN, { expires: 14 });
    $.cookie('remember', true, { expires: 14 });
    } else {
    // reset cookies
    $.cookie('PIN', null);
    $.cookie('remember', null);
}

var remember = $.cookie('remember');
if ( remember == 'true' ) {
    var PIN = $.cookie('PIN');
    // autofill the fields
    $('#PIN').attr("value", PIN);
}
