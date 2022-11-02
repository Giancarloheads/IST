<?php

    function custom_theme_scripts() {
	    
        //CSS
        wp_enqueue_style( 'custom_theme-style', get_stylesheet_uri(), array(), _S_VERSION );
	    wp_enqueue_style('bootstrap' , "https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" , array() , _S_VERSION);
	    wp_enqueue_style('main-style' ,get_template_directory_uri() . '/css/style.min.css', array() , _S_VERSION );
        wp_enqueue_style('slick-css' , '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css' ,  array() , _S_VERSION);
        wp_enqueue_style('flickity-css' , get_template_directory_uri() . '/css/lib/flickity.min.css' , array() , '2.2');
	    wp_style_add_data( 'custom_theme-style', 'rtl', 'replace' );
        
        //JS
        wp_enqueue_script('lazy-load' , get_template_directory_uri() . '/js/lazyload.min.js' , array('jquery') , '1.9.0' , false);
	    wp_enqueue_script('custom_theme-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );
	    wp_enqueue_script('bootstrap' , 'https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js' , array('jquery') , _S_VERSION , true);
        wp_enqueue_script('SVG-injector' , get_template_directory_uri() . '/js/svg-injector.min.js' , array('jquery') , _S_VERSION , false);
        wp_enqueue_script('scroll-reveal' , get_template_directory_uri() . '/js/scrollreveal.min.js' , array('jquery') , '' , true);
        wp_enqueue_script('animations' , get_template_directory_uri() . '/js/animation.js' , array('jquery') , _S_VERSION , true);
        wp_enqueue_script('slick-slider' , 'https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js' , array('jquery') , _S_VERSION , true);
        wp_enqueue_script('sliders' , get_template_directory_uri() . '/js/sliders.js' , array('jquery') , _S_VERSION , true);
        wp_enqueue_script('forms' , get_template_directory_uri() . '/js/forms.js' , array('jquery') , _S_VERSION , true);
        wp_enqueue_script('main-script' , get_template_directory_uri() . '/js/main-script.js' , array('jquery') , _S_VERSION , true);
        wp_enqueue_script('scroll-magic' , '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js' , array('jquery'),'2.0.7',true);
        wp_enqueue_script('vue-js' , 'https://cdn.jsdelivr.net/npm/vue@2.7.10' , '2.7.10' , true);
        wp_enqueue_script('axios-call' , 'https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js' , '0.27.2' , true); 
        wp_enqueue_script('search-js' , get_template_directory_uri() . '/js/search.js' , _S_VERSION , true);
        wp_enqueue_script('scroll-magic-indicators' , '//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js', array('jquery'), '2.0.7', true);
        wp_enqueue_script('flicketty-slider' , get_template_directory_uri() .'/js/flickity.pkgd.min.js' , array('jquery') , '' , true );
        
        wp_localize_script('search-js' , 'api_url' , array(
            'url' => get_rest_url(null , 'wp/v2/search')
        ));

        wp_localize_script('sliders' , 'arrow' , array(
            'arrowUrl' => get_template_directory_uri() . '/resources/icons/arrow.svg'
        ));

        wp_localize_script('main-script' , 'icons' , array(
            'minus' => get_template_directory_uri() . '/resources/icons/minus.svg',
            'plus' => get_template_directory_uri() . '/resources/icons/plus.svg'
        ));
    }

    add_action( 'wp_enqueue_scripts', 'custom_theme_scripts' );