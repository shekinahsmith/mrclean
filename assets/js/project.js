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



});
