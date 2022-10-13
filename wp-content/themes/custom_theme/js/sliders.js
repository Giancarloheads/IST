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
            "dots": false,
            "responsive": [
                {
                    breakpoint: 1199,
                    settings: {
                        slidesToShow: 4,
                        slidesToScroll: 1
                    }
                },{
                    breakpoint : 746,
                    settings : {
                        slidesToShow : 3,
                        slidesToScroll : 1
                    }
                },{
                    breakpoint: 546,
                    settings : {
                        slidesToShow : 2,
                        slidesToScroll : 1
                    }
                }
            ]
        });
    }

    //SLIDER SEZIONE COMMUNITY HOMEPAGE
    const SLIDER_COMMUNITY = $('.community-slider');
    if(SLIDER_COMMUNITY){
        SLIDER_COMMUNITY.flickity({
            freeScroll : true,
            prevNextButtons : false,
            pageDots : false,
            autoPlay : false,
            contain : true
        });
    }

    const SLIDER_DATAS = $('.years-container');
    if(SLIDER_DATAS){
        SLIDER_DATAS.flickity({
            freeScroll : true,
            prevNextButtons :  false,
            pageDots :false,
            autoPlay : false,
            cellAlign : 'left',
            selectedAttraction: 0.01,
            friction: 0.15
        });
    };

    //SLIDER HISTORY
    const SLIDER_HISTORY = $('.history-slider-container');
    if (SLIDER_HISTORY) {
        SLIDER_HISTORY.slick({
            dots: false,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade : true,
            swipe : false
        });
    }

    SLIDER_HISTORY.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
        let pos = nextSlide;
        let dots = $('div[data-slider]');
        dots.each(function () {
            $(this).removeClass('history-slide-active');
        });

        dots[pos].classList.add('history-slide-active');
    });

    //HISTORY SLIDER BTNS
    $('.years-container div').on('click', function () {
        let slide = $(this).attr('data-slider');
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

    const SLIDER_BELIEFS = $('.beliefs-slider');
    if(SLIDER_BELIEFS){
        SLIDER_BELIEFS.flickity({
            freeScroll : true,
            prevNextButtons :  false,
            pageDots :false,
            autoPlay : false,
            cellAlign : 'left'
        })
    }

    //SLIDER RELATED PAGES ABOUT

    const SLIDER_RELATED_ABOUT = $('.related-slider');
    if(SLIDER_RELATED_ABOUT){
        SLIDER_RELATED_ABOUT.flickity({
            freeScroll : true,
            prevNextButtons :  false,
            pageDots :false,
            autoPlay : false,
            cellAlign : 'left'
        });
    }

    //SLIDER NEWS HOMEPAGE
    /* const SLIDER_NEWS = $('.slider-news-home');
    if(SLIDER_NEWS){
        SLIDER_NEWS.flickity({
            freeScroll : true,
            prevNextButtons : false,
            pageDots : false,
            autoPlay : false,
            wrapAround : true
        });
    } */
});