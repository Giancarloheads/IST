jQuery(document).ready(function($){
    
    var mixContainer = $('.mix-container');
    
    var MIX = mixitup(mixContainer , {
        selectors: {
            'target' : '.news-item'
        },
        animation: {
            'duration' : 300
        }
    });

    MIX.filter('.school-news');

})