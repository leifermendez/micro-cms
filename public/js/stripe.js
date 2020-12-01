'use strict';

var stripe = Stripe('pk_live_6KCWvSfjNHesV09523rQtZfA');

function registerElements(elements, exampleName) {
    var formClass = '.' + exampleName;
    var example = document.querySelector(formClass);

    var form = example.querySelector('form');
    var resetButton = example.querySelector('a.reset');
    var error = form.querySelector('.error');

    function enableInputs() {
        Array.prototype.forEach.call(
            form.querySelectorAll(
                "input[type='text'], input[type='email'], input[type='tel']"
            ),
            function(input) {
                input.removeAttribute('disabled');
            }
        );
    }

    function disableInputs() {
        Array.prototype.forEach.call(
            form.querySelectorAll(
                "input[type='text'], input[type='email'], input[type='tel']"
            ),
            function(input) {
                input.setAttribute('disabled', 'true');
            }
        );
    }

    function triggerBrowserValidation() {
        // The only way to trigger HTML5 form validation UI is to fake a user submit
        // event.
        var submit = document.createElement('input');
        submit.type = 'submit';
        submit.style.display = 'none';
        form.appendChild(submit);
        submit.click();
        submit.remove();
    }

    // Listen for errors from each Element, and show error messages in the UI.
    var savedErrors = {};
    elements.forEach(function(element, idx) {
        element.on('change', function(event) {
            if (event.error) {
                error.classList.add('visible');
            } else {
                savedErrors[idx] = null;

                // Loop over the saved errors and find the first one, if any.
                var nextError = Object.keys(savedErrors)
                    .sort()
                    .reduce(function(maybeFoundError, key) {
                        return maybeFoundError || savedErrors[key];
                    }, null);

                if (nextError) {
                    // Now that they've fixed the current error, show another one.
                    console.log('ERROR')
                } else {
                    // The user fixed the last error; no more errors.

                }
            }
        });
    });

    // Listen on the form's 'submit' handler...
    form.addEventListener('submit', function(e) {
        e.preventDefault();

        // Trigger HTML5 validation UI on the form if any of the inputs fail
        // validation.
        var plainInputsValid = true;
        Array.prototype.forEach.call(form.querySelectorAll('input'), function(
            input
        ) {
            if (input.checkValidity && !input.checkValidity()) {
                plainInputsValid = false;
                return;
            }
        });
        if (!plainInputsValid) {
            triggerBrowserValidation();
            return;
        }

        $('body .overlay').css('display','block');
        example.classList.add('submitting');

        // Disable all inputs.
        disableInputs();

        // Gather additional customer data we may have collected in our form.
        var name = form.querySelector('#' + exampleName + '-name');
        var address1 = form.querySelector('#' + exampleName + '-address');
        var city = form.querySelector('#' + exampleName + '-city');
        var state = form.querySelector('#' + exampleName + '-state');
        var zip = form.querySelector('#' + exampleName + '-zip');
        var phone = form.querySelector('#' + exampleName + '-phone');
        var email = form.querySelector('#' + exampleName + '-email');
        var id_service = form.querySelector('#' + exampleName + '-idService');
        var coupon = form.querySelector('#' + exampleName + '-code');
        var additionalData = {
            name: name ? name.value : undefined,
            address_line1: address1 ? address1.value : undefined,
            address_city: city ? city.value : undefined,
            address_state: state ? state.value : undefined,
            address_zip: zip ? zip.value : undefined,
        };

        // Use Stripe.js to create a token. We only need to pass in one Element
        // from the Element group in order to create a token. We can also pass
        // in the additional customer data we collected in our form.
        stripe.createToken(elements[0], additionalData).then(function(result) {
            $('body .overlay').css('display','none');
            example.classList.remove('submitting');

            if (result.token) {

                example.classList.add('submitted');
                $('body .overlay').css('display','block');

                var form_data = $('#form_pay');

                if(form_data.data( "id" )==='service'){

                    $.post( "/checkout",
                        {
                            stripeToken:result.token.id,
                            firstName:name.value,
                            email:email.value,
                            phone:phone.value,
                            id_service:id_service.value,
                            coupon:coupon.value
                        }
                    )
                        .done(function( data ) {
                            console.log(data)
                            if(data.status){
                                window.location.href = '/checkout/'+data.id+'/ticket'
                            }else{
                                $('body .overlay').css('display','none');
                                $('body .error .message').html(data)
                                enableInputs();
                            }
                        })
                        .fail(function(data){
                            console.log(data)
                            $('body .overlay').css('display','none');
                            $('body .error .message').html(data.responseJSON.message)
                            enableInputs();
                        });

                }else if(form_data.data( "id" )==='quick'){

                    $.post( "/pay/"+form_data.data("pay"),
                        {
                            stripeToken:result.token.id,
                            firstName:name.value,
                            email:email.value,
                            phone:phone.value,
                        }
                    )
                        .done(function( data ) {
                            console.log(data)
                            if(data.status){
                                window.location.href = '/pay/'+data.id+'/ticket'
                            }else{
                                $('body .overlay').css('display','none');
                                $('body .error .message').html(data)
                            }
                        })
                        .fail(function(data){
                            console.log(data)
                            $('body .overlay').css('display','none');
                            $('body .error .message').html(data.responseJSON.message)
                        });

                }



            } else {
                console.log(result)
                $('body .error .message').html(result.error.message)
                // Otherwise, un-disable inputs.
                enableInputs();
            }
        });
    });

}
(function() {
    'use strict';

    var elements = stripe.elements({
        fonts: [
            {
                cssSrc: 'https://fonts.googleapis.com/css?family=Roboto',
            },
        ],

        locale: window.__exampleLocale
    });

    var card = elements.create('card', {
        iconStyle: 'solid',
        style: {
            base: {
                iconColor: '#BDBDBD',
                color: '#404040',
                //fontWeight: 500,
                fontFamily: 'Montserrat, sans-serif',
                fontSize: '15px',
                fontSmoothing: 'antialiased',
                textTransform: 'uppercase',

                ':-webkit-autofill': {
                    color: '#404040',
                },
                '::placeholder': {
                    color: '#9E9E9E',
                },
            },
            invalid: {
                iconColor: '#FFC7EE',
                color: '#404040',
            },
        },
    });
    card.mount('#example1-card');

    registerElements([card], 'example1');
})();