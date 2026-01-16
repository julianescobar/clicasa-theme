jQuery(document).ready(function($){
    $('.testimonials__slider').each(function(){
        $(this).slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            dots: true,
            arrows: true,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 4000,
            swipe: true,
            responsive: [
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1,
                        dots: true,
                        arrows: false,
                        autoplay: true,
                        autoplaySpeed: 4000
                    }
                }
            ]
        });
    });
});