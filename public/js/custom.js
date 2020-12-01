$(document).ready(function () {



    setTimeout(function () {
        $('#open_modal').click()
    }, 1500);

    function sendMail() {
        $("#contact-form-id").submit();
    }

    $("#contact-form-id").submit(function (event) {

        var values = $(this).serialize();
        $('body .overlay').css('display', 'block');
        $.post("/api/mail",
            values
        ).done(function (data) {
            $('body .overlay').css('display', 'none');
        });
        $(this)[0].reset();
        event.preventDefault();

    });

    $('.checkbox-style').on('click', function () {
        $('.checkbox-style input:checkbox').click()
    })
    $('input:checkbox').change(function () {
        console.log('Here')
        if ($(this).is(":checked")) {
            $('.checkbox-style-block>div').addClass("active");
        } else {
            $('.checkbox-style-block>div').removeClass("active");
        }
    });

})


