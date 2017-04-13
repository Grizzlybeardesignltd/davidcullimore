

/* SLICK */
jQuery(document).ready(function ($) {
    $('select').select2({
        minimumResultsForSearch: -1
    });
    $('#archives-dropdown-3').select2({
        placeholder: 'Archives',
        minimumResultsForSearch: -1
    });
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
	jQuery('a.scrollDown').on('click', function(e) {
		e.preventDefault();
		jQuery('html, body').animate({ scrollTop: jQuery(jQuery(this).attr('href')).offset().top - 200}, 500, 'linear');
	});
    });
    jQuery(function() {
	jQuery('a.mouse').on('click', function(e) {
		e.preventDefault();
		jQuery('html, body').animate({ scrollTop: jQuery(jQuery(this).attr('href')).offset().top - 200}, 500, 'linear');
	});
    });
    
    jQuery(document).ready(function($) {
    
    // Add slideDown animation to Bootstrap dropdown when expanding.
  jQuery('.dropdown').on('show.bs.dropdown', function() {
    jQuery(this).find('.dropdown-menu').first().stop(true, true).slideDown('fast');
  });

  // Add slideUp animation to Bootstrap dropdown when collapsing.
  jQuery('.dropdown').on('hide.bs.dropdown', function() {
    jQuery(this).find('.dropdown-menu').first().stop(true, true).slideUp('fast');
  });
});
    
    
    
});
