$(document).ready(function() {

    var w = $(window).width(),
        h = $(window).height();
    $('#video-block').css({
        height: '' + h + '',
        width: '' + w + ''
    });

    $(window).resize(function() {
        var w = $(window).width(),
            h = $(window).height();
        $('#video-block').css({
            height: '' + h + '',
            width: '' + w + ''
        });
    });

});
