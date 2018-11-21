/*
 *****************************************************
 *	CUSTOM JS DOCUMENT                              *
 *	Single window load event                        *
 *   "use strict" mode on                            *
 *****************************************************
 */

    var preLoader = $('.preloader');
    if (preLoader.length) {
        preloaderInit();
    }


/* ESTABLECER A CADA SELECT UNA OPTION VACIA EN EL INICIO */
 $('.seleccion').prepend('<option value="" selected="selected">[Elija]</option>');

$(window).on('load', function() {

    "use strict";

    var addPlus = $('.add');
    var removeMinus = $('.minus');
    var collectionTimer = $('.demo1');

    // ============================================
    // Fixed Menu
    // =============================================

    var stickyOffset = $('.menuFixed').offset().top;
    $(window).scroll(function(){
      var sticky = $('.menuFixed'), MarcasCarousel = $('.MarcasCarousel'), LogoMenu = $('.LogoMenu'),
          scroll = $(window).scrollTop();
        
      if (scroll >= stickyOffset) sticky.addClass('fixed'),MarcasCarousel.addClass('MarcasCarousel2'),LogoMenu.removeClass('hide');
      else sticky.removeClass('fixed'),MarcasCarousel.removeClass('MarcasCarousel2'),LogoMenu.addClass('hide');
    });

    $( window ).resize(function() {
      $( ".menuFixed" ).width( $( window ).width() );
    });

    // ============================================
    // PreLoader On window Load
    // =============================================

        preLoader.addClass('loaderout').delay(3000);

    $(function() {
        var dropBox = $('.drop-box');

        dropBox.on('click', function() {
            $('#ul')
                .fadeToggle();
        });

        $('.drop-box').on('click', function() {
            $(this).toggleClass('marked');
            $('.drop-text').toggleClass('marked1');
        });

        $(".drop-box").on('click', function() {
            $('.rotate').toggleClass("down");
        });
    });
    //========================================
    //collectionTimer functions
    //======================================== 	

    //var dealDate = $().
    if (collectionTimer.length) {
        collectionInt();
    }
    //========================================
    // Owl Carousel functions Calling
    //======================================== 	

    owlCarouselInit();

    //***************************************
    // Map initialization function Calling
    //****************************************

    initMap();

    /*
    ==================================
    INCRESS & DECREASE order BUTTON
    ====================================
    */
    addPlus.on('click', function() {
        var $qty = $(this).closest('ul').find('.qty');
        var currentVal = parseInt($qty.val(), 10);
        if (!isNaN(currentVal)) {
            $qty.val(currentVal + 1);
        }
    });
    removeMinus.on('click', function() {
        var $qty = $(this).closest('ul').find('.qty');
        var currentVal = parseInt($qty.val(), 10);
        if (!isNaN(currentVal) && currentVal > 0) {
            $qty.val(currentVal - 1);
        }
    });

    /*
    ===========================
    Search Setting
    ===========================
    */
    var searchOpen = $('#search-open');
    var headSearchClick = $('.search-click');
    var headSearchClickDismis = $('.search-close');
    headSearchClick.on('click', function(e) {
        e.preventDefault();
        searchOpen.addClass('searchopen');
    });
    headSearchClickDismis.on('click', function(e) {
        e.preventDefault();
        searchOpen.removeClass('searchopen');
    });


});

//========================================
//collectionTimer functions
//======================================== 
function collectionInt() {

    "use strict";
    var collectionTimer = $('.demo1');
    // /*Set the date we're counting down to
    var countDownDate = new Date("Jan 5, 2018 15:37:25").getTime();
    collectionTimer.each(function() {
        var countDownDate = Date.parse($(this).attr('data-expiry'));
        var counterThis = $(this);
        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();
            // Find the distance between now an the count down date
            var distance = countDownDate - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with class="demo"
            counterThis.html("<div class='col-md-3 col-sm-3 col-xs-3'><div class='timer'>" + days + "<span>d.</span></div></div><div class='col-md-3 col-sm-3 col-xs-3'><div class='timer'>" + hours + "<span>h.</span></div></div><div class='col-md-3 col-sm-3 col-xs-3'><div class='timer'> " +
                minutes + "<span>m.</span></div></div><div class='col-md-3 col-sm-3 col-xs-3'><div class='timer'>" + seconds + "<span>s.</span></div></div>");

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                counterThis.html("EXPIRED");
            }
        }, 1000);
    });
}
/*
========================================
Preloder Setting
========================================
*/

function preloaderInit() {
    "use strict";


    var circle1 = anime({
        targets: ['.circle-1'],
        translateY: -24,
        translateX: 52,
        direction: 'alternate',
        loop: true,
        elasticity: 400,
        easing: 'easeInOutElastic',
        duration: 800,
        delay: 100,
    });

    var circle2 = anime({
        targets: ['.circle-2'],
        translateY: 24,
        direction: 'alternate',
        loop: true,
        elasticity: 400,
        easing: 'easeInOutElastic',
        duration: 800,
        delay: 100,
    });

    var circle3 = anime({
        targets: ['.circle-3'],
        translateY: -24,
        direction: 'alternate',
        loop: true,
        elasticity: 400,
        easing: 'easeInOutElastic',
        duration: 800,
        delay: 100,
    });

    var circle4 = anime({
        targets: ['.circle-4'],
        translateY: 24,
        translateX: -52,
        direction: 'alternate',
        loop: true,
        elasticity: 400,
        easing: 'easeInOutElastic',
        duration: 800,
        delay: 100,
    });
}

//========================================
// Owl Carousel functions
//======================================== 	

function owlCarouselInit() {

    "use strict";

    var sliderMain = $('#slider');
    var categoriesSlider = $('#categories');
    var sectionslider = $('#slidersecond');
    var couponslider = $('#sliderthird');
    var blogslider = $('#sliderfourth');
    var partnerslider = $('#sliderfifth');
    var blogsidebar = $('#blog');
    var nextNav = '<i class="fa fa-arrow-right" aria-hidden="true"></i>';
    var prevNav = '<i class="fa fa-arrow-left" aria-hidden="true"></i>';

    if (sliderMain.length) {
        sliderMain.owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoplay: true,
            navText: [prevNav, nextNav],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        });

    }

    if (categoriesSlider.length) {
        categoriesSlider.owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            autoplay: true,
            navText: [prevNav, nextNav],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 9
                }
            }
        });
    }

    if (sectionslider.length) {
        sectionslider.owlCarousel({
            center: true,
            items: 5,
            loop: true,
            nav: true,
            navText: [prevNav, nextNav],
            margin: 0,
            autoplay: true,
            onInitialized: customdiv,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    }

    function customdiv() {
        "use strict";
        var slidernewsNav = $('.slidernav .owl-nav');
        slidernewsNav.wrap('<div class="custom-nav"></div>');
    }

    if (couponslider.length) {
        couponslider.owlCarousel({
            center: true,
            items: 5,
            loop: true,
            nav: true,
            navText: [prevNav, nextNav],
            margin: 0,
            autoplay: true,
            onInitialized: customdiv1,

            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 4
                }
            }
        });
    }

    function customdiv1() {
        "use strict";
        var couponnewsNav = $('.couponnav .owl-nav');
        couponnewsNav.wrap('<div class="custom-nav"></div>');
    }

    if (blogslider.length) {
        blogslider.owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            navText: [prevNav, nextNav],
            onInitialized: customdiv2,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 2
                },
                1000: {
                    items: 3
                }
            }
        })
    }

    function customdiv2() {
        "use strict";
        var blognewsNav = $('.blognav .owl-nav');
        blognewsNav.wrap('<div class="custom-nav"></div>');
    }

    if (partnerslider.length) {
        partnerslider.owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            navText: [prevNav, nextNav],
            autoplay: true,
            autoplayTimeout:3000,
            rtl:false,
            onInitialized: customdiv3,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        });
    }

    function customdiv3() {
        "use strict";
        var partnernewsNav = $('.partnernav .owl-nav');
        partnernewsNav.wrap('<div class="custom-nav"></div>');
    }

    if (blogsidebar.length) {
        blogsidebar.owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            navText: [prevNav, nextNav],
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 1
                }
            }
        })
    }
}
//***************************************
// Contact Map function
//****************************************  

function initMap() {
    "use strict";

    var mapDiv = $('#gmap_canvas');

    if (mapDiv.length) {
        var myOptions = {
            zoom: 17,
            scrollwheel: false,
            center: new google.maps.LatLng(2.455806, -76.592762),
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };
        var map = new google.maps.Map(document.getElementById('gmap_canvas'), myOptions);
        var marker = new google.maps.Marker({
            map: map,
            position: new google.maps.LatLng(2.455806, -76.592762)
        });
        var infowindow = new google.maps.InfoWindow({
            content: '<strong>Cra. 6a #23 Norte-2 a 23 Norte-90</strong><br>Popayán, Cauca<br>'
        });
        google.maps.event.addListener(marker, 'click', function() {
            infowindow.open(map, marker);
        });

        infowindow.open(map, marker);
    }

}

/*
 *****************************************************
 *	END OF THE JS 									*
 *	DOCUMENT                       					*
 *****************************************************
 */