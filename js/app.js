

/* SLICK */
jQuery(document).ready(function ($) {
    $('select').select2();
    var $flexslider = $('.flexslider'),
            $slides = $flexslider.find('li'),
            stripComment = function (string) {
                return string.replace(/<!--/g, '').replace(/-->/g, '');
            },
            initItem = function (item) {
                var $this = $(item);
                if (!$this.hasClass('init')) {
                    $this.html(stripComment($this.html())).addClass('init');
                }
            }
    ;

    $flexslider.flexslider({
        animation: "fade",
        controlNav: false,
        directionNav: true,
        prevText: "Previous",
        nextText: "Next",
        slideshow: true,
        slideshowSpeed: 5000, //Integer: Set the speed of the slideshow cycling, in milliseconds
        animationSpeed: 600, //Integer: Set the speed of animations, in milliseconds
        touch: true, //{NEW} Boolean: Allow touch swipe navigation of the slider on touch-enabled devices
        keyboard: true,
        start: function () {

            $flexslider.find('.flex-active-slide, .clone').each(function () {
                initItem(this);
            });
        },
        before: function () {
            $slides.each(function () {
                initItem(this);
            });
        }
    });

    $("li", ".slides").on("click", function () {
        $(".next", ".flex-direction-nav").trigger("click");
    });

    $('.carousel').flexslider({
        animation: "slide",
        animationLoop: true,
        itemWidth: 220,
        itemMargin: 0,
        minItems: 4,
        maxItems: 4,
        controlNav: false
    });

    //SCROLL TO
    jQuery(function() {
	jQuery('a[href*=#]').on('click', function(e) {
		e.preventDefault();
		jQuery('html, body').animate({ scrollTop: jQuery(jQuery(this).attr('href')).offset().top - 200}, 500, 'linear');
	});
    });
    
    //BOOTSTRAP MENU 
    jQuery(function() {
	jQuery('.dropdown').each( function(){
            jQuery( this ).hover(function(){
                jQuery( this ).addClass('open');
            })
        } )
    });
    
    // PARALLAX
    var s = skrollr.init({
		edgeStrategy: 'set',
		easing: {
			WTF: Math.random,
			inverted: function(p) {
				return 1-p;
			}
		}
	});
});
