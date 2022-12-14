jQuery(document).ready(function ($) {
    var controller = new ScrollMagic.Controller({
        globalSceneOptions: {
            triggerHook: 'onLeave',
            duration: "200%" // this works just fine with duration 0 as well
            // However with large numbers (>20) of pinned sections display errors can occur so every section should be unpinned once it's covered by the next section.
            // Normally 100% would work for this, but here 200% is used, as Panel 3 is shown for more than 100% of scrollheight due to the pause.
        }
    });

    var w = window.innerWidth;

    if (w >= 767) {

        // get all slides
        var slides = document.querySelectorAll(".pin-section");

        // create scene for every slide
        for (var i = 0; i < slides.length; i++) {
            slides[i].classList.add('vh-100');
            new ScrollMagic.Scene({
                triggerElement: slides[i]
            })
                .setPin(slides[i], { pushFollowers: false })
                .addTo(controller);
        }
    }

    var home1img = document.getElementById('img-1-home');
    var home2img = document.getElementById('img-2-home');

    if (w <= 768 && (home1img || home2img)) {
        if(home1img){
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

        if(home2img){
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
            
        var slides = document.querySelectorAll(".pin-section-mobile");

        for (var i = 0; i < slides.length; i++) {
            slides[i].classList.add('vh-100');
            new ScrollMagic.Scene({
                triggerElement: slides[i]
            })
                .setPin(slides[i], { pushFollowers: false })
                .addTo(controller);
        }
    }
});