//SLIDERS JS
jQuery(document).ready(function ($) {
    
    //SLIDER CLASSI
    const SLIDER_CLASSES = $('.classes-slider');
    if (SLIDER_CLASSES.length != 0) {
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

    if (SLIDER_COLLEGE.length != 0) {
        SLIDER_COLLEGE.slick({
            "slidesToShow": 8,
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
                        slidesToShow: 6,
                        slidesToScroll: 1
                    }
                },{
                    breakpoint : 746,
                    settings : {
                        slidesToShow : 4,
                        slidesToScroll : 1
                    }
                },{
                    breakpoint: 546,
                    settings : {
                        slidesToShow : 3,
                        slidesToScroll : 1
                    }
                }
            ]
        }); 
    }

    //SLIDER SEZIONE COMMUNITY HOMEPAGE
    const SLIDER_COMMUNITY = $('.community-slider');
    
    if(SLIDER_COMMUNITY.length != 0){
        SLIDER_COMMUNITY.flickity({
            freeScroll : true,
            prevNextButtons : false,
            pageDots : false,
            autoPlay : false,
            contain : true
        });
    }

    const SLIDER_DATAS = $('.years-container');
    if(SLIDER_DATAS.length != 0){
        SLIDER_DATAS.flickity({
            freeScroll : false,
            prevNextButtons :  false,
            pageDots :false,
            autoPlay : false,
            cellAlign : 'left',
            selectedAttraction: 0.01,
            friction: 0.15,

        });
    };

    //SLIDER HISTORY
    const SLIDER_HISTORY = $('.history-slider-container');
    if (SLIDER_HISTORY.length != 0) {
        SLIDER_HISTORY.slick({
            dots: false,
            arrows: false,
            slidesToShow: 1,
            slidesToScroll: 1,
            fade : true,
            swipe : false
        });

        SLIDER_HISTORY.on('beforeChange', function (event, slick, currentSlide, nextSlide) {
            let pos = nextSlide;
            let dots = $('div[data-slider]');
            dots.each(function () {
                $(this).removeClass('history-slide-active');
            });
            dots[pos].classList.add('history-slide-active');
        });
    }


    //HISTORY SLIDER BTNS
    $('.years-container div').on('click', function () {
        let slide = $(this).attr('data-slider');
        SLIDER_HISTORY.slick('slickGoTo', slide);
    });

    //SLIDER RELATED PAGES
    const SLIDER_RELATED = $('.related-content-container');
    if (SLIDER_RELATED.length != 0) {
        SLIDER_RELATED.slick({
            'infinte': false,
            'slidesToScroll': 1,
            'slidesToShow': 3,
            'dots': false,
            'arrows': false,
            'swipe' : true,
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
    if(SLIDER_BELIEFS.length != 0){
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
    if(SLIDER_RELATED_ABOUT.length != 0){
        SLIDER_RELATED_ABOUT.flickity({
            freeScroll : true,
            prevNextButtons :  false,
            pageDots :false,
            autoPlay : false,
            cellAlign : 'left',
            draggable : 1
        });
    }

    const SLIDER_NEWS = $('.recent-news-slider-container');

    if(SLIDER_NEWS.length != 0){
        SLIDER_NEWS.flickity({
            freeScroll : true,
            prevNextButtons : false,
            pageDots : false,
            autoPlay : false,
            wrapAround : false,
            cellAlign : 'left'
        });
    };

    const SLIDER_NAV_PROGRAM = $('.program-nav-slider');
    
    if(SLIDER_NAV_PROGRAM.length != 0){
        console.log('slider nav');
        SLIDER_NAV_PROGRAM.slick({
            'variableWidth' :  true,
            'infinite' :  false,
            'autoplay' : false,
            'dots' : false,
            'arrows' : true,
            'slidesToShow' : 3,
            'slidesToScroll' : 1,
            'swipe' : false,
            'prevArrow' : document.getElementsByClassName('program-slider-prev'),
            'nextArrow' : document.getElementsByClassName('program-slider-next'),
            "responsive": [                
                {
                    breakpoint : 746,
                    settings : {
                        slidesToShow : 2,
                        slidesToScroll : 1
                    }
                },{
                    breakpoint: 546,
                    settings : {
                        slidesToShow : 1,
                        slidesToScroll : 1
                    }
                }
            ]
        });
    };

    const SLIDER_MOBILE_BELIFIES = $('.beliefs-slider-mobile');
    
    if(SLIDER_MOBILE_BELIFIES.length != 0){
        
        SLIDER_MOBILE_BELIFIES.slick({
            slidesToShow : 1,
            slidesToScroll :1,
            dots : false,
            arrows : true
        });

        var mobileBeliefsPrevBtn = $('#mobile-beliefs-prev');
        var mobileBeliefsNextBtn = $('#mobile-beliefs-next');
        
        console.log(mobileBeliefsPrevBtn);
        console.log(mobileBeliefsNextBtn);

        mobileBeliefsPrevBtn.on('click' , function(){
            console.log('mobile beliefs prev');
            SLIDER_MOBILE_BELIFIES.slick('slickPrev');
        })

        mobileBeliefsNextBtn.on('click', function(){
            console.log('mobile beliefs next');
            SLIDER_MOBILE_BELIFIES.slick('slickNext');
        })
    };

    const SLIDER_FACILITIES_1 = $('.slider-facilities-1');

    if(SLIDER_FACILITIES_1.length != 0){
        SLIDER_FACILITIES_1.slick({
            'dots' : false,
            'arrows' : false,
            'autoplay' : true,
            'autoplaySpeed' : 900
        });
    };

    const SLIDER_FACILITIES_MOBILE_1 = $('.slider-facilities-1-mobile');

    if(SLIDER_FACILITIES_MOBILE_1.length != 0){
        SLIDER_FACILITIES_MOBILE_1.slick({
            'dots' : false ,
            'arrowa' : false,
            'autoplay' :  true,
            'autoplaySpeed' :  900
        });
    };

    const SLIDER_FACILITIES_2 =$('.slider-facilities-2');

    if(SLIDER_FACILITIES_2.length != 0){
        SLIDER_FACILITIES_2.slick({
            'dots' :  false,
            'arrows' : false,
            'autoplay' : true,
            'autoplaySpeed' : 900
        });
    };

    const SLIDER_FACILITIES_2_MOBILE =$('.slider-facilities-2-mobile');

    if(SLIDER_FACILITIES_2_MOBILE.length != 0){
        SLIDER_FACILITIES_2_MOBILE.slick({
            'dots' :  false,
            'arrows' : false,
            'autoplay' : true,
            'autoplaySpeed' : 900
        });
    };

    const SLIDER_FACILITIES_3 = $('.slider-facilities-3');

    if(SLIDER_FACILITIES_3.length != 0){
        SLIDER_FACILITIES_3.slick({
            'dots' : false,
            'arrows' : false,
            'autoplay' : true,
            'autoplaySpeed' : 900
        });
    }

    const SLIDER_FACILITIES_3_MOBILE = $('.slider-facilities-3-mobile');

    if(SLIDER_FACILITIES_3_MOBILE.length != 0){
        SLIDER_FACILITIES_3_MOBILE.slick({
            'dots' : false,
            'arrows' : false,
            'autoplay' : true,
            'autoplaySpeed' : 900
        });
    }
});