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
            navMenu.animate({
                'left': '19.5%',
                'top': '20px',
                'width': '80%',
                'height': '97vh'
            }, 200, function () {
                isMenuOpen = !isMenuOpen;
                $('#header-ham-btn').css('display', 'none');
                $('#header-ham-close-btn').css('display', 'block');
            });
            $('body').css('overflow', 'hidden');
        };
    });

    $('#header-ham-close-btn').on('click', function () {
        var navMenu = $('#desktop-nav-menu');
        if (isMenuOpen) {
                $('body').css('overflow', 'auto');
                navMenu.animate({
                    'left': '97%',
                    'top': '20px',
                    'width': '2%',
                    'height': '50px',
                }, 250, function () {
                isMenuOpen = !isMenuOpen;
                $('#header-ham-btn').css('display', 'block');
                $('#header-ham-close-btn').css('display', 'none');
                navMenu.removeClass('menu-open');
            })
        }
    })

    // SEARCH CONTAINER

    var searchBtn = $('.search-btn-desktop');
    var SearchDesktopContainer = $('#desktop-search-container');

    searchBtn.on('click' , function(){
        SearchDesktopContainer.addClass('menu-open');
        SearchDesktopContainer.animate({
            'left': '19.5%',
            'top': '20px',
            'width': '80%',
            'height': '97vh'
        });
    });

    $('#close-search-desktop-btn').on('click' , function(){
        SearchDesktopContainer.animate({
            'left': '100%',
            'top': '0px',
            'width': '0px',
            'height': '0px',
        }, function(){
            SearchDesktopContainer.removeClass('menu-open');
        });
    });

    var searchBtn = $('.search-btn-desktop');

    searchBtn.on('click' , function(){
        var container = $('.desktop-search-container');
            container.addClass('menu-open');
            container.animate({
                'left': '19.5%',
                'top': '20px',
                'width': '80%',
                'height': '97vh'
            });
    });
    
    var mobileSearchBtn = $('.search-btn-mobile');
    
    mobileSearchBtn.on('click', function () {
        $('#mobile-search-container').animate({
            top: '0'
        }, 400);
    });

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
                $('.img-1-overlay').animate({
                    'opacity': '.4'
                }, 900);

                $('.img-1-caption').animate({
                    opacity: 1,
                    top: '50%'
                }, 1200);
            }
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
        if (!$(window).scrollTop()) {
            header.classList.add('blured')
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

    var scrollRevealAnimation = {
        delay: 300,
        origin: 'bottom',
        distance: '200%',
        duration: '800'
    }

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
    if(window.scrollY > 400){
        $('header').addClass('blured');
    }
});