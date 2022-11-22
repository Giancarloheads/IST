
window.onbeforeunload = function () {
    window.scrollTo(0, 0);
}

history.scrollRestoration = "manual";

jQuery(document).ready(function ($) {

    var home1img = document.getElementById('img-1-home');
    var home2img = document.getElementById('img-2-home');
    var overviewimg = document.getElementById('img-1-overview');
    var header = document.querySelector('header');
    var section = document.querySelector('#first-section');
    /* var jumbo = document.getElementsByClassName('jumbotron')[0]; */
    var isMenuOpen = false;


    //HAMBURGER MENU

    $('#ham-btn').on('click', () => {
        var navMenu = $('#desktop-nav-menu');
        let layover = $('.header-layover');
        if (!isMenuOpen) {
            navMenu.addClass('menu-open');
            layover.css('display', 'block');
            $("#page").css({"overflow" : "hidden" , "height" : "100vh"});
            layover.animate({
                'opacity': '.25'
            }, 600);
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
            /* $('.menu-open-layover').css({
                'opacity': '0.4',
                'display': 'block'
            }); */
        };
    });

    $('.close-ham-btn-container').on('click', function () {
        var navMenu = $('#desktop-nav-menu');
        let layover = $('.header-layover');
        if (isMenuOpen) {
            $("#page").css({"overflow" : "auto" , "height" : "unset"});
            layover.animate({
                'opacity': '0'
            }, 600), function(){
                let layover = $('.header-layover');
                layover.css('display', 'none');
            };

            navMenu.animate({
                'left': '97%',
                'top': '20px',
                'width': '2%',
                'height': '0',
            }, 500, function () {
                isMenuOpen = !isMenuOpen;
                $('#header-ham-btn').css('display', 'block');
                $('#header-ham-close-btn').css('display', 'none');
                navMenu.removeClass('menu-open');
                $('.header-layover').css({ 
                    'display': 'none'
                });
            }) 
        }
    })

    $('.header-layover').on('click' ,  function(){
        var navMenu = $('#desktop-nav-menu');
        let layover = $('.header-layover');
        if (isMenuOpen) {
            $("#page").css({"overflow" : "auto" , "height" : "unset"});
            layover.animate({
                'opacity': '0'
            }, 600), function(){
                console.log('dis-none');
                let layover = $('.header-layover');
                layover.css('display', 'none');
            };

            navMenu.animate({
                'left': '97%',
                'top': '20px',
                'width': '2%',
                'height': '0',
            }, 500, function () {
                isMenuOpen = !isMenuOpen;
                $('#header-ham-btn').css('display', 'block');
                $('#header-ham-close-btn').css('display', 'none');
                navMenu.removeClass('menu-open');
                $('.header-layover').css({
                    'opacity': '0',
                    'display': 'none'
                });
            })
        }
    })

    //MOBILE HAM MENU

    $('#mobile-ham-btn').on('click', function () {
        $('#page').css({
            'overflow' : 'hidden',
            'height' : '100vh'
        });
        $('#mobile-nav-menu').animate({
            top: '0'
        }, 400);
    });

    $('.close-nav-mobile-btn').on('click', function () {
        $('#page').css({
            'overflow' : 'auto',
            'height' : 'unset'
        });
        $('#mobile-nav-menu').animate({
            top: '-100vh'
        }, 400);
    })

    $('.close-search-mobile-btn').on('click', function () {
        $('#page').css({
            'overflow' : 'auto',
            'height' : 'unset'
        });
        $('#mobile-search-menu').animate({
            top: '-100vh'
        }, 400);
    });

    // SEARCH CONTAINER
    var searchBtn = $('.search-btn-desktop');
    var SearchDesktopContainer = $('#desktop-search-container');
    var menuLayover = $('.menu-open-layover');

    searchBtn.on('click', function () {
        $("#page").css({"overflow" : "hidden" , "height" : "100vh"});
        SearchDesktopContainer.addClass('menu-open');
        SearchDesktopContainer.animate({
            'left': '29%',
            'top': '1vh',
            'width': '70%',
            'height': '98vh'
        });
        menuLayover.css({
            'opacity': '0.4',
            'display': 'block'
        });
    });

    $('.close-search-desktop-container').on('click', function () {
        $("#page").css({"overflow" : "auto" , "height" : "unset"});
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
        $("#page").css({"overflow" : "hidden" , "height" : "100vh"});
        $('#mobile-search-container').animate({
            top: '0'
        }, 400);

        menuLayover.css({
            'opacity': '.4',
            'display': 'block'
        });
    });

    $('.close-search-mobile-btn').on('click', function () {
        $("#page").css({"overflow" : "auto" , "height" : "unset"});
        $('#mobile-search-container').animate({
            top: '-100vh'
        }, 400);

        menuLayover.css({
            'opacity': '0',
            'display': 'none'
        });
    })

    // JUMBOTRON HOVER
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
                if (isInViewport(home1img)) {
                    $('.container-1-expand').css({
                        'width': '100vw',
                        'height': '100vh'
                    });

                    home1img.classList.add('expanded');
                    $('.pt-anim').animate({
                        'padding-top': '0'
                    }, 1200);

                    $('.img-1-overlay').animate({
                        'opacity': '.4'
                    }, 1200);

                    $('.img-1-caption').animate({
                        opacity: 1,
                        top: '50%'
                    }, 1400);
                }
            }
        }
        //IMG HOME 2
        if (home2img) {
            if (isInViewport(home2img)) {
                home2img.classList.add('expanded');
                $('.container-2-expand').css({
                    'width': '100vw',
                    'height': '100vh'
                });
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

        /* if ($(window).scrollTop() < 900) {
            header.classList.remove('blured')
        } */

        if (overviewimg) {
            console.log('get img');
            if (isInViewport(overviewimg)) {
                overviewimg.classList.add('expanded');
                $('.expanded-overview').animate({
                    'width': '100vw',
                    'height': '100vh'
                }, 600, function () {
                    overviewimg.css('border-radius', '0');
                });

                $('.overview-overlay').animate({
                    'opacity': '.4',
                    'width': '100vw',
                    'height': '100vh',
                }, 400);

                $('.overview-caption.img-2-caption').animate({
                    opacity: 1,
                    top: '50%'
                }, 1400);
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

    var opacityReveal = {
        delay: 650,
        distance: 0,
        duration: 900
    };

    ScrollReveal().reveal('.scrreveal', scrollRevealAnimation);
    ScrollReveal().reveal('.scrreveal2', scrreveal2);
    ScrollReveal().reveal('.scrreveal3', scrreveal3);
    ScrollReveal().reveal('.scrreveal', scrollRevealAnimation);
    ScrollReveal().reveal('.scrrevealtext', scrollRevealAnimationString);
    ScrollReveal().reveal('.scrrevealtext2', scrollRevealAnimationString2);
    ScrollReveal().reveal('.scrrevealfooter', scrrevealfooter);
    ScrollReveal().reveal('.scropacity', opacityReveal);

    //Blur effect on header if windows load already scrolled
    if (window.scrollY > 1080) {
        $('header').addClass('blured');
    }

    var didScroll;
    var lastScrollTop = 0;
    var delta = 25;
    var navbarHeight = $('header').outerHeight();

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
    var beliefsCollapse = $('.beliefs-collapse');
    var accreditationCollapse = $('.accreditation-collapse');
    var elementaryCollapse = $('.elementary-collapse');
    var supportCollapse = $('.support-collapse');
    var programCollapse = $('.single-program-collapse');
    var safeguardCollapse = $('.safeguard-collapse');


    facilitiesCollapse.on('click', function () {
        let pos = $(this).attr('data-collapse-pos');
        console.log(pos);
        console.log($('#facilities-collapse-' + pos + '-icon'));
        let isOpen = $(this).find('div[data-bs-toggle]').hasClass('collapsed');
        if (!isOpen) {
            $('#facilities-collapse-' + pos + '-icon').attr('src', icons.minus);
            $(this).css('color', '#CC0001');
        } else {
            $('#facilities-collapse-' + pos + '-icon').attr('src', icons.plus);
            $(this).css('color', '#000');
        }
    })

    beliefsCollapse.on('click', function () {
        var pos = $(this).attr('data-collapse-pos');
        isOpen = $(this).find('div[data-bs-toggle]').hasClass('collapsed');
        if (!isOpen) {
            $('#beliefs-collapse-' + pos + '-icon').attr('src', icons.minus);
            $(this).find('.collapse-title-about').css('color', '#CC0001');
        } else {
            $('#beliefs-collapse-' + pos + '-icon').attr('src', icons.plus);
            $(this).find('.collapse-title-about').css('color', '#000000');
        }
    });

    accreditationCollapse.on('click', function () {
        console.log('click');
        var pos = $(this).attr('data-collapse-pos');
        isOpen = $(this).find('div[data-bs-toggle]').hasClass('collapsed');
        if (!isOpen) {
            $('#accreditation-collapse-' + pos + '-icon').attr('src', icons.minus);
            $(this).find('.accreditation-collapse-title').css('color', '#CC0001');
        } else {
            $('#accreditation-collapse-' + pos + '-icon').attr('src', icons.plus);
            $(this).find('.accreditation-collapse-title').css('color', '#000000');
        }
    });

    elementaryCollapse.on('click', function () {
        var pos = $(this).attr('data-collapse-pos');
        isOpen = $(this).find('div[data-bs-toggle]').hasClass('collapsed');
        if (!isOpen) {
            $('#elementary-collapse-' + pos + '-icon').attr('src', icons.minus);
            $(this).find('.elementary-collapse-title').css('color', '#CC0001');
        } else {
            $('#elementary-collapse-' + pos + '-icon').attr('src', icons.plus);
            $(this).find('.elementary-collapse-title').css('color', '#000000');
        }
    });

    supportCollapse.on('click', function () {
        var pos = $(this).attr('data-collapse-pos');
        isOpen = $(this).find('div[data-bs-toggle]').hasClass('collapsed');
        if (!isOpen) {
            $('#support-' + pos + '-icon').attr('src', icons.minus);
            $(this).find('.elementary-collapse-title').css('color', '#CC0001');
        } else {
            $('#support-' + pos + '-icon').attr('src', icons.plus);
            $(this).find('.elementary-collapse-title').css('color', '#000000');
        }
    });

    programCollapse.on('click', function () {
        var pos = $(this).attr('data-collapse-pos');
        isOpen = $(this).find('div[data-bs-toggle]').hasClass('collapsed');
        if (!isOpen) {
            $('#single-program-' + pos + '-icon').attr('src', icons.minus);
            $(this).find('.collapse-title-program').css('color', '#CC0001');
        } else {
            $('#single-program-' + pos + '-icon').attr('src', icons.plus);
            $(this).find('.collapse-title-program').css('color', '#000000');
        }
    });

    safeguardCollapse.on('click', function () {
        var pos = $(this).attr('data-collapse-pos');
        isOpen = $(this).find('div[data-bs-toggle]').hasClass('collapsed');
        if (!isOpen) {
            $('#safeguard-' + pos + '-icon').attr('src', icons.minus);
            $(this).find('.collapse-title-about').css('color', '#CC0001');
        } else {
            $('#safeguard-' + pos + '-icon').attr('src', icons.plus);
            $(this).find('.collapse-title-about').css('color', '#000000');
        }
    });


    $('.team-collapse-btn').on('click', function () {
        isOpen = $(this).attr('aria-expanded');
        console.log(isOpen);
        if (isOpen == 'true') {
            $(this).find('span').html('SEE LESS');
            $(this).find('svg').css('transform', 'rotate(-45deg)');
        } else {
            $(this).find('span').html('SEE MORE');
            $(this).find('svg').css('transform', 'rotate(135deg)');
        }
    });

    //LAZYLOAD
    $('.lazy').lazyload();


    $('#weChatBtn').on('click', function () {
        $('#qr-code-wechat-modal').css('display', 'block');
        $('#qr-code-wechat-modal').animate({
            'opacity': '1'
        }, 300);
        $('body').css('overflow', 'hidden');
    });

    $('.close-qr-code-modal').on('click', function () {
        $('#qr-code-wechat-modal').animate({
            'opacity': '0'
        }, 300, function () {
            $('body').css('overflow', 'auto');
            $('#qr-code-wechat-modal').css('display', 'none');
        })
    });

    $('#drop-area').on('click', function () {
        $('input[name=cv]').click();
    });

    $('input[name=cv]').on('change', function () {
        let fullName = this.value.replace(/.*[\/\\]/, '');
        $('#dropareatxt').html(fullName);
    })

    // ************************ Drag and drop ***************** //
    function preventDefaults(e) {
        e.preventDefault();
        e.stopPropagation();
    };

    function highlight(e) {
        dropArea.classList.add('highlight');
    };

    function unhighlight(e) {
        dropArea.classList.remove('highlight');
    };

    function handleDrop(e) {
        var dt = e.dataTransfer;
        var files = dt.files;
        handleFiles(files);
    };

    function handleFiles(files) {
        files = [...files];
        files.forEach(uploadFile);
    }

    function uploadFile(file, i) {
        let formData = [];
        formData.push('file', file);
        console.log(formData);
        $('#dropareatxt').html(file.name);
    }

    let dropArea = document.getElementById("drop-area");

    if (dropArea) {
        // Prevent default drag behaviors
        ;['dragenter', 'dragover', 'dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, preventDefaults, false);
            document.body.addEventListener(eventName, preventDefaults, false);
        });

        // Highlight drop area when item is dragged over it
        ;['dragenter', 'dragover'].forEach(eventName => {
            dropArea.addEventListener(eventName, highlight, false);
        });

        ;['dragleave', 'drop'].forEach(eventName => {
            dropArea.addEventListener(eventName, unhighlight, false);
        });

        // Handle dropped files
        dropArea.addEventListener('drop', handleDrop, false);
    }
});
