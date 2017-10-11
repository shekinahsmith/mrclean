// Foundation
//=include "vendors/foundation/foundation.js"
//=include "vendors/foundation/foundation.equalizer.js"


//=include "plugins/fastclick.js"
//=include "plugins/jquery.cookie.js"
//=include "plugins/placeholder.js"

//=include "plugins/slick.min.js"


$(document).ready(function() {
    $(document).foundation();


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
        slidesToShow: 1,
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
                breakpoint: 1023,
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
    

});
