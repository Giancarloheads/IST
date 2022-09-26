//SLIDERS JS
jQuery(document).ready(function ($) {
    //SLIDER CLASSI
    const SLIDER_CLASSES = $('.classes-slider');
    if (SLIDER_CLASSES) {
        SLIDER_CLASSES.slick({
            fade: true,
            arrows: true,
            dots: false,
            infinite: true,
            swipe: false,
            autoplay :false,
            nextArrow : '<div class="next-arrow-classes"><img onload="SVGInject(this);" src="'+ arrow.arrowUrl +'"></div>',
            prevArrow : '<div class="prev-arrow-classes"><img onload="SVGInject(this);" src="'+ arrow.arrowUrl +'"></div>',
        });

        SLIDER_CLASSES.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            $('.dots-classes-slider-1').removeClass('active-slide-cta');
            $('.dots-classes-slider-2').removeClass('active-slide-cta');
            if (nextSlide == 1) {
                $('.dots-classes-slider-2').addClass('active-slide-cta');
                
            } else {
                $('.dots-classes-slider-1').addClass('active-slide-cta');
            }
        });

        $('.dots-classes-slider-1').on('click', () => {
            SLIDER_CLASSES.slick('slickGoTo', 0);
        });

        $('.dots-classes-slider-2').on('click', () => {
            SLIDER_CLASSES.slick('slickGoTo', 1);
        });
    };


    // SLIDER COLLEGE

    const SLIDER_COLLEGE = $('.college-slider-home');
    if (SLIDER_COLLEGE) {
        SLIDER_COLLEGE.slick({
            "slidesToShow": 5,
            "slidesToScroll": 1,
            "infinite": true,
            "autoplay": true,
            "autoplaySpeed": 0,
            "speed": 3000,
            "cssEase": "linear",
            "arrows": false,
            "dots": false
        });
    }

    //SLIDER SEZIONE COMMUNITY HOMEPAGE

    var SLIDER_COMMUNITY = $('.community-slider');
    
    /* if (SLIDER_COMMUNITY) {
        SLIDER_COMMUNITY.slick({
            slidesToShow: 4,
            centered: true,
            slidesToScroll: 1,
            infinite: true, 
            autoplay: true,
            dots: false,
            arrows: false,
            variableWidth: true,
            infinite : true, 
            "responsive": [
                {
                    breakpoint: 987,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 1,
                        infinite: true,
                    }
                }
            ]
        })
    }
     
    SLIDER_COMMUNITY.on('afterChange' , function(event , slick , currentSlide, nextSlide){
        $('.community-slider-placeholder').css({
            'display' : 'none'
        });
    }) */


    SLIDER_COMMUNITY.flickity({
        freeScroll : true,
        prevNextButtons : false,
        pageDots : false,
        autoPlay : false,
        wrapAround : true
    });



    

    //SLIDER HISTORY

    const SLIDER_HISTORY = $('.history-slider-container');

    if (SLIDER_HISTORY) {
        SLIDER_HISTORY.slick({
            dots: false,
            arrows: false,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 1500,
            slidesToShow: 1,
            slidesToScroll: 1,
        });
    }

    SLIDER_HISTORY.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        let pos = nextSlide;
        let dots = $('div[data-slider]');
        console.log(dots);
        console.log(pos);

        dots.each(function () {
            $(this).removeClass('history-slide-active');
        });

        dots[pos].classList.add('history-slide-active');
    });

    //HISTORY SLIDER BTNS

    $('.years-container div').on('click', function () {
        let slide = $(this).attr('data-slider');
        console.log(slide);
        SLIDER_HISTORY.slick('slickGoTo', slide);
    });

    //SLIDER RELATED PAGES


    const SLIDER_RELATED = $('.related-content-container');
    if (SLIDER_RELATED) {
        SLIDER_RELATED.slick({
            'infinte': false,
            'slidesToScroll': 1,
            'slidesToShow': 3,
            'dots': false,
            'arrows': false,
            'responsive': [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 1,
                }
            },
            {
                breakpoint: 600,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 1
                }
            },
            {
                breakpoint: 480,
                settings: {
                    slidesToShow: 1,
                    slidesToScroll: 1
                }
            }]
        })
    };
});