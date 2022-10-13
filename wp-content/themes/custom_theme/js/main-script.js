jQuery(document).ready(function ($) {

    var home1img = document.getElementById('img-1-home');
    var home2img = document.getElementById('img-2-home');
    var header = document.querySelector('header');
    var section = document.querySelector('#first-section');
    /* var jumbo = document.getElementsByClassName('jumbotron')[0]; */
    var isMenuOpen = false;

    $('#ham-btn').on('click', () => {
        var navMenu = $('#desktop-nav-menu');
        if (!isMenuOpen) {
            navMenu.addClass('menu-open');
            console.log('opening-menu');
            navMenu.animate({
                'left': '29%',
                'top': '1vh',
                'width': '70%',
                'height': '98vh'
            }, 150, function () {
                isMenuOpen = !isMenuOpen;
                $('#header-ham-btn').css('display', 'none');
                $('#header-ham-close-btn').css('display', 'block');
            }); 
            $('.menu-open-layover').css({
                'opacity': '0.4',
                'display': 'block'
            });
        };
    });

    $('.close-ham-btn-container').on('click', function () {
        var navMenu = $('#desktop-nav-menu');
        if (isMenuOpen) {
            navMenu.animate({
                'left': '97%',
                'top': '20px',
                'width': '2%',
                'height': '0',
            }, 100, function () {
                isMenuOpen = !isMenuOpen;
                $('#header-ham-btn').css('display', 'block');
                $('#header-ham-close-btn').css('display', 'none');
                navMenu.removeClass('menu-open');
                $('.menu-open-layover').css({
                    'opacity' : '0', 
                    'display' : 'none'
                });
            })
        }
    })

    // SEARCH CONTAINER

    var searchBtn = $('.search-btn-desktop');
    var SearchDesktopContainer = $('#desktop-search-container');
    var menuLayover = $('.menu-open-layover');

    searchBtn.on('click', function () {
        console.log('open search console');
        SearchDesktopContainer.addClass('menu-open');
        SearchDesktopContainer.animate({
            'left': '19.5%',
            'top': '20px',
            'width': '66%',
            'height': '97vh'
        });

        menuLayover.css({
            'opacity': '0.6',
            'display': 'block'
        });
    });

    $('.close-search-desktop-container').on('click', function () {
        SearchDesktopContainer.animate({
            'left': '100%',
            'top': '0px',
            'width': '0px',
            'height': '0px',
        }, function () {
            SearchDesktopContainer.removeClass('menu-open');
        });

        menuLayover.css({
            'opacity': '0',
            'display': 'none'
        });
    });

    var mobileSearchBtn = $('.search-btn-mobile');

    mobileSearchBtn.on('click', function () {
        $('#mobile-search-container').animate({
            top: '0'
        }, 400);

        menuLayover.css({
            'opacity': '.4',
            'display': 'block'
        });
    });

    $('.close-search-mobile-btn').on('click', function () {
        $('#mobile-search-container').animate({
            top: '-100vh'
        }, 400);

        menuLayover.css({
            'opacity': '0',
            'display': 'none'
        });
    })


    $('.jumbotron-caption').mouseenter(() => {
        $('#jumbotron-arrow').css({
            'margin-bottom': '10px',
            'transform': 'rotate(45deg)'
        })
    })

    $('.jumbotron-caption').mouseleave(() => {
        $('#jumbotron-arrow').css({
            'margin-bottom': '0px',
            'transform': 'rotate(0deg)'
        })
    })

    function isInViewport(el) {
        const rect = el.getBoundingClientRect();
        return (
            rect.top >= 0 &&
            rect.left >= 0 &&
            rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
            rect.right <= (window.innerWidth || document.documentElement.clientWidth)

        );
    };

    document.addEventListener('scroll', function (e) {
        var scroll = $(window).scrollTop();
        //IMG HOME 1
        if (home1img) {
            if (isInViewport(home1img)) {
                home1img.classList.add('expanded');
                $('.expand-img-container').animate({
                    width: '100vw',
                    height: '100vh'
                }, 800);

                home1img.animate({
                    width: '100vw',
                    height: '100vh',
                    'border-radius': '0'
                }, 1200);
                $('.img-1-overlay').animate({
                    'opacity': '.4',
                }, 1200);

                $('.img-1-caption').animate({
                    opacity: 1,
                    top: '50%'
                }, 1400);
            }

            //IMG HOME 2
            if (home2img) {
                if (isInViewport(home2img)) {
                    home2img.classList.add('expanded');
                    $('.pt-anim').animate({
                        'padding-top': '0'
                    }, 1200);

                    $('.img-2-overlay').animate({
                        'opacity': '.4'
                    }, 1200);

                    $('.img-2-caption').animate({
                        opacity: 1,
                        top: '50%'
                    }, 1400);
                }
            }

            //Blured header
            if (header && section) {

                if (elementsOverlap(header, section)) {
                    $('header').addClass('blured');
                };

                if (scroll > 1500) {
                    $('.jumbotron').css('display', 'none');
                } else {
                    $('.jumbotron').css('display', 'block');
                }
            }

            if ($(window).scrollTop() < 900) {
                header.classList.remove('blured')
            }
        }
    });


    function elementsOverlap(el1, el2) {
        const domRect1 = el1.getBoundingClientRect();
        const domRect2 = el2.getBoundingClientRect();
        return !(
            domRect1.top > domRect2.bottom ||
            domRect1.right < domRect2.left ||
            domRect1.bottom < domRect2.top ||
            domRect1.left > domRect2.right
        );
    }

    //SCROLL REVEAL EFFECTS 

    var scrollRevealAnimationString = {
        delay: 800,
        origin: 'bottom',
        distance: '150%',
        duration: '900'
    }

    var scrollRevealAnimationString2 = {
        delay: 1000,
        origin: 'bottom',
        distance: '150%',
        duration: '1000'
    }

    var scrrevealfooter = {
        delay: 500,
        origin: 'bottom',
        distance: '120%',
        duration: '700'
    };

    var scrollRevealAnimation = {
        delay: 650,
        origin: 'bottom',
        distance: '240%',
        duration: '1000'
    }

    var scrreveal2 = {
        delay: 600,
        orgin: 'bottom',
        distance: '180%',
        duration: '600'
    }

    var scrreveal3 = {
        delay: 900,
        origin: 'bottom',
        distance: '150%',
        duration: '600'
    }

    ScrollReveal().reveal('.scrreveal', scrollRevealAnimation);
    ScrollReveal().reveal('.scrreveal2', scrreveal2);
    ScrollReveal().reveal('.scrreveal3', scrreveal3);
    ScrollReveal().reveal('.scrreveal', scrollRevealAnimation);
    ScrollReveal().reveal('.scrrevealtext', scrollRevealAnimationString);
    ScrollReveal().reveal('.scrrevealtext2', scrollRevealAnimationString2);
    ScrollReveal().reveal('.scrrevealfooter', scrrevealfooter);

    //MOBILE HAM MENU

    $('#mobile-ham-btn').on('click', function () {
        $('#mobile-nav-menu').animate({
            top: '0'
        }, 400);
    });

    $('.close-nav-mobile-btn').on('click', function () {
        $('#mobile-nav-menu').animate({
            top: '-100vh'
        }, 400);
    })

    $('.close-search-mobile-btn').on('click', function () {
        $('#mobile-search-menu').animate({
            top: '-100vh'
        }, 400);
    })

    //Blur effect on header if windows load already scrolled
    if (window.scrollY > 1080) {
        $('header').addClass('blured');
    }

    var didScroll;
    var lastScrollTop = 0;
    var delta = 25;
    var navbarHeight = $('header').outerHeight();
    console.log(navbarHeight);

    $(window).scroll(function (event) {
        didScroll = true;
    });

    setInterval(function () {
        if (didScroll) {
            hasScrolled();
            didScroll = false;
        }
    }, 250);

    function hasScrolled() {
        var st = $(this).scrollTop();
        if (Math.abs(lastScrollTop - st) <= delta)
            return;
        if (st > lastScrollTop && st > navbarHeight) {
            $('header').addClass('hide-header');
        } else {
            if (st + $(window).height() < $(document).height()) {
                $('header').removeClass('hide-header');
            }
        }

        lastScrollTop = st;
    }

    var facilitiesCollapse = $('.top-building-collapse');
    var isCollapseOpen = false;
    var beliefsCollapse = $('.beliefs-collapse');
    var isBeliefsCollapseOpen = false;

    facilitiesCollapse.on('click' ,function(){
        
        if(!isCollapseOpen){
            $('.facilities-collapse-1-icon').attr('src' , icons.minus);        
            isCollapseOpen = !isCollapseOpen;
        } else {
            $('.facilities-collapse-1-icon').attr('src' , icons.plus);
            isCollapseOpen = !isCollapseOpen;
        }
    })

    beliefsCollapse.on('click' ,function(){
        var pos = $(this).attr('data-collapse-pos');
        isOpen = $(this).find('div[data-bs-toggle]').hasClass('collapsed');
        if(!isOpen){
            $('#beliefs-collapse-' + pos + '-icon').attr('src' , icons.minus);
            $(this).find('.collapse-title-about').css('color' , '#CC0001');
        } else {
            $('#beliefs-collapse-' + pos +'-icon').attr('src' , icons.plus);
            $(this).find('.collapse-title-about').css('color' , '#000000');
        }
    });
});