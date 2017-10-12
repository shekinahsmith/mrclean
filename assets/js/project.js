// Foundation
//=include "vendors/foundation/foundation.js"
//=include "vendors/foundation/foundation.equalizer.js"


//=include "plugins/fastclick.js"
//=include "plugins/jquery.cookie.js"
//=include "plugins/placeholder.js"

//=include "plugins/slick.min.js"


$(document).ready(function() {
    $(document).foundation();

    // open and closing mobile navigation
    $('.js-masthead__mobile-menu-toggle').on('click', function() {

        if( !$('body.prevent-scroll').length ) {
            $('body').addClass('prevent-scroll');
            $('.js-masthead__mobile-navigation').addClass('is-visible');

            $(this).html('<span class="lnr lnr-cross close-icon"></span>');
        }
        else {
            $('body').removeClass('prevent-scroll');
            $('.js-masthead__mobile-navigation').removeClass('is-visible');

            $(this).html('Menu <span class="lnr lnr-chevron-right"></span>');
        }
    });

    $('.js-banner--call-for-quote').on('click', function() {

        var heroHeight = $('body').outerHeight();
        $('body').addClass('prevent-scroll');
        $('.js-banner-contact-form').addClass('is-visible').css('height', heroHeight - 70); // mobile header height

    });

    $('.js-banner__contact-close').on('click', function() {
        $('body').removeClass('prevent-scroll');
        $('.js-banner-contact-form').removeClass('is-visible');
    });

    $('.js-section__image-carousel').slick({
        arrows: false,
        dots: true,
        slidesToShow: 1,
        infinite: true,
        responsive: [
            {
                breakpoint: 999999,
                settings: "unslick"
            },
            {
                breakpoint: 1023,
                settings: {
                    arrows: false,
                    dots: true,
                    infinite: true,
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.js-section__navigation-slider').slick({
        arrows: false,
        dots: true,
        slidesToShow: 4,
        infinite: true,
        responsive: [
            {
                breakpoint: 999999,
                settings: {
                    dots: false,
                    infinite: false,
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 779,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

    $('.js-slider--client-descriptions').slick({
        asNavFor: '.js-slider--client-types',
        adaptiveHeight: true,
        arrows: false,
        fade: true,
        slidesToShow: 1,
        slidesToScroll: 1
    });

    $('.js-slider--client-types').slick({
        asNavFor: '.js-slider--client-descriptions',
        arrows: false,
        centerMode: true,
        dots: false,
        focusOnSelect: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        infinite: false,
        responsive: [
            {
                breakpoint: 999999,
                settings: {
                    slidesToShow: 4
                }
            },
            {
                breakpoint: 1023,
                settings: {
                    slidesToShow: 3,
                    infinite: true
                }
            }
        ]
    });

    function validateForm(formSelector) {
        // var form = $('.js-form--contact');

        var form = $(formSelector);
        var formInputFields = form.find('[required]');
        var formState = form.find('[name="state"]');

        var desktopCall = 0;
        var mobileCall = 0;

        // form validation
        function validate(fields) {

            var valid = true;

            fields.each(function () {

                var fields = $(this);

                if (fields.val() == '' && !fields.is('select')) {

                    fields.addClass('error');
                    valid = false;

                }
                else if (fields.val() == '' && fields.is('select')) {

                    $('.form__select-custom').addClass('error');
                    valid = false;
                }

            });
            return valid;
        }

        validate(formInputFields);

        // if( validate(formInputFields) ) {
        //     recaptcha.execute(formIndex); 
        // }
        
        if ( formSelector == '.form--contact-desktop' && validate(formInputFields)) {
            desktopCall ++;
        }
        else if (formSelector == '.form--contact-mobile' && validate(formInputFields)) {
            mobileCall ++;
        }

        if( formSelector == '.form--contact-desktop' ) {
            var desktopWidget;

            if (desktopCall == 1) {
                desktopWidget = grecaptcha.render('desktop-captcha', {
                    'sitekey': '6LeJKDQUAAAAAMnyo48vqCJE8lSXqLm4yphVhWEf',
                    'callback': desktopCallback,
                    'size': "invisible"
                });
            }
            grecaptcha.reset(desktopWidget);
            grecaptcha.execute(desktopWidget);
        }

        if (formSelector == '.form--contact-mobile') {
            var mobileWidget;

            if (mobileCall == 1) {
                mobileWidget = grecaptcha.render('mobile-captcha', {
                    'sitekey': '6LeJKDQUAAAAAMnyo48vqCJE8lSXqLm4yphVhWEf',
                    'callback': mobileCallback,
                    'size': "invisible"
                });
            }
            grecaptcha.reset(mobileWidget);
            grecaptcha.execute(mobileWidget);
        }

        // adding error styling and preventing form from submitting if invalid
        if (!validate(formInputFields)) {

            formInputFields.each(function () {

                // on keyup and input field is no longer empty remove error class
                $(this).keyup(function () {

                    if ($(this).val() !== '') {
                        $(this).removeClass('error');
                    }
                });
            });

            // validating if the customer selected an option from drop down and removing red border after selection
            formState.change(function () {

                if ($(this).val() !== '') {
                    $(this).parent('.form__select-custom').removeClass('error');
                }

            });

            return;
        }
    }

    // contact form submit
    function formSubmit(formSelector) {
    
        var form = $(formSelector);
        var formFirstName = form.find('[name="firstName"]');
        var formLastName = form.find('[name="lastName"]');
        var formCity = form.find('[name="city"]');
        var formState = form.find('[name="state"]');
        var formZip = form.find('[name="zip"]');
        var formPhone = form.find('[name="phone"]');
        var formEmail = form.find('[name="email"]');

        var formInfo = {
            "firstName": formFirstName.val().toUpperCase(),
            "lastName": formLastName.val().toUpperCase(),
            "city": formCity.val().toUpperCase(),
            "state": formState.val() === null ? '' : formState.val().toUpperCase(),
            "zip": formZip.val(),
            "phone": formPhone.val(),
            "email": formEmail.val().toUpperCase()
        };
            
        $.ajax({
            url: "/contact-form-post2.php",
            type: "POST",
            dataType: "TEXT",
            data: { formInfo: formInfo },
            success: function(data) {
                console.log('success');

                $('.js-form__submit').html('Sent <span class="lnr lnr-checkmark-circle"></span>').addClass('success');
            },
            error: function(data) {
                console.log('fail');
            }
        });
       
    }

    // window.renderCaptcha = function () {
    
    //     grecaptcha.render('desktop-captcha', { 'sitekey': '6LeJKDQUAAAAAMnyo48vqCJE8lSXqLm4yphVhWEf' });
    //     grecaptcha.render('mobile-captcha', { 'sitekey': '6LeJKDQUAAAAAMnyo48vqCJE8lSXqLm4yphVhWEf' });

    // };

    // window.desktopCallback = function() {
    //     console.log('recaptcha valid');
    //     formSubmit( '.form--contact-desktop' );
    // };

    // window.mobileCallback = function() {
    //     console.log('recaptcha valid');
    //     formSubmit('.form--contact-mobile');
    // };

    window.desktopCallback = function(token) {
        console.log('recaptcha valid');
        formSubmit('.form--contact-desktop');
    };

    window.mobileCallback = function(token) {
        console.log('recaptcha valid');
        formSubmit('.form--contact-mobile');
    };

    $('.form--contact-desktop').on('submit', function(event) {
        event.preventDefault(); 
        //validateForm(0);
        validateForm('.form--contact-desktop');
    });
    $( '.form--contact-mobile' ).on('submit', function(event) {
        event.preventDefault(); 
        //validateForm(1);
        validateForm('.form--contact-mobile');
    });

});
