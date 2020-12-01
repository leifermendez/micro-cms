$(document).ready(function () {
    $(document).on('change', '#input-subscription', function (e) {
        // Does some stuff and logs the event to the console
        const _value = $(this).find(':selected').attr('data-amount');
        $('#input-value-amount').val(_value);
        
    });

})


