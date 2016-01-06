var dirTema = document.querySelector("meta[name='theme_path']").getAttribute('content');

require.config({
    baseUrl: '/',
    urlArgs: "v=006",
    waitSeconds: 30,
    shim: {
        "bootstrap" : {
            deps: ['jquery']
        },
        "fancy_select" : {
            deps: ['jquery']
        },
        "jq_flexslider" : {
            deps : ['jquery']
        },
        'jq_ui' : {
            deps : ['jquery']
        },
        "jq_sticky" : {
            deps : ['jquery']
        },
        "noty" : {
            deps : ['jquery']
        },
        'gumby' : {
            deps : ['jquery','jquery_mobile','modernizr']
        },
        'gumby_init' : {
            deps : ['jquery','gumby']
        },
        'gumby_checkbox' : {
            deps : ['jquery','gumby']
        },
        'gumby_fixed' : {
            deps : ['jquery','gumby']
        },
        'gumby_navbar' : {
            deps : ['jquery','gumby']
        },
        'gumby_radiobtn' : {
            deps : ['jquery','gumby']
        },
        'gumby_retina' : {
            deps : ['jquery','gumby']
        },
        'gumby_skiplink' : {
            deps : ['jquery','gumby']
        },
        'gumby_tabs' : {
            deps : ['jquery','gumby']
        },
        'gumby_toggleswitch' : {
            deps : ['jquery','gumby']
        },
        'jquery_validation' : {
            deps : ['jquery']
        },
        'unslider' : {
            deps : ['jquery']
        },
        'plugins' : {
            deps : ['jquery']
        },
        'fancybox' : {
            deps : ['jquery']
        },
        'carousel' : {
            deps : ['jquery']
        },
        "noty" : {
            deps : ['jquery']
        },
        "cart" : {
            deps : ['jquery']
        }
    },

    paths: {
        // LIBRARY
        jquery              : '//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min',
        cart                : 'js/shop_cart',
        jq_ui               : 'js/jquery-ui',
        noty                : 'js/jquery.noty',
        gumby               : dirTema+'/assets/js/libs/gumby',
        gumby_init          : dirTema+'/assets/js/libs/gumby.init',
        gumby_checkbox      : dirTema+'/assets/js/libs/ui/gumby.checkbox',
        gumby_fixed         : dirTema+'/assets/js/libs/ui/gumby.fixed',
        gumby_navbar        : dirTema+'/assets/js/libs/ui/gumby.navbar',
        gumby_radiobtn      : dirTema+'/assets/js/libs/ui/gumby.radiobtn',
        gumby_retina        : dirTema+'/assets/js/libs/ui/gumby.retina',
        gumby_skiplink      : dirTema+'/assets/js/libs/ui/gumby.skiplink',
        gumby_tabs          : dirTema+'/assets/js/libs/ui/gumby.tabs',
        gumby_toggleswitch  : dirTema+'/assets/js/libs/ui/gumby.toggleswitch',
        jquery_validation   : dirTema+'/assets/js/libs/ui/jquery.validation',
        unslider            : dirTema+'/assets/js/libs/unslider',
        plugins             : dirTema+'/assets/js/plugins',
        fancybox            : dirTema+'/assets/js/libs/jquery.fancybox.pack',
        carousel            : dirTema+'/assets/js/libs/owl.carousel.min',
        jquery_mobile       : dirTema+'/assets/js/libs/jquery.mobile.custom.min',
        modernizr           : dirTema+'/assets/js/libs/modernizr-2.6.2.min',

        // ROUTE
        router          : 'js/router',
    }
});
require([
    'router',
    'cart',
    'noty',
    'gumby',
    'gumby_init',
    'gumby_checkbox',
    'gumby_fixed',
    'gumby_navbar',
    'gumby_radiobtn',
    'gumby_retina',
    'gumby_skiplink',
    'gumby_tabs',
    'gumby_toggleswitch',
    'jquery_validation',
    'unslider',
    'plugins',
    'fancybox',
    'carousel',
], function(router,cart,noty,gumby,gumby_init)
{
    cart.run();
    Gumby.ready(function() {
        Gumby.log('Gumby is ready to go...', Gumby.dump());
        // placeholder polyfil
        if(Gumby.isOldie || Gumby.$dom.find('html').hasClass('ie9')) {
            $('input, textarea').placeholder();
        }

        // skip link and toggle on one element
        // when the skip link completes, trigger the switch
        $('#skip-switch').on('gumby.onComplete', function() {
            $(this).trigger('gumby.trigger');
        });

    // Oldie document loaded
    }).oldie(function() {
        Gumby.warn("This is an oldie browser...");

    // Touch devices loaded
    }).touch(function() {
        Gumby.log("This is a touch enabled device...");
    });

    // call unslider
    $(function() {
        var unslider = $('#slider').unslider({
            keys: true,               
            dots: true, 
        });

        $('.unslider-arrow').click(function(e) {
            var fn = this.className.split(' ')[1];
            
            //  Either do unslider.data('unslider').next() or .prev() depending on the className
            unslider.data('unslider')[fn]();
            e.preventDefault();
            return false
        });

    });

    $(document).ready(function(){
        //THUMB LIST
        $('#thumb-list').owlCarousel({
            itemsCustom : [
                [350, 2],
                [350, 3],
                [600, 4],
                [700, 4],
                [1000, 4],
                [1200, 3],
                [1400, 3]
            ],
            navigation : true,
            pagination: false,
            navigationText: false
        });

        $('.fancybox').fancybox({
            padding: 10,
            openEffect : 'elastic',
            openSpeed  : 150,
            closeEffect : 'elastic',
            closeSpeed  : 150
        });
    });
});