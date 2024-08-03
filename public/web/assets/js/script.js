$(function () {
    "use strict"
    $(".btn-refresh").click(function () {
        $.ajax({
            type: 'GET',
            url: '/refresh/captcha',
            success: function (data) {
                $(".captcha span").html(data.captcha);
            }
        });
    });

    $('form').submit(function () {
        $(this).find(".btn-submit").html("Loading...<span class='spinner-border spinner-border-sm' role='status' aria-hidden='true'></span>");
        $(this).find(".btn-submit").attr("disabled", true);
    });
})