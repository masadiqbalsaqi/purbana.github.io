( function( $ ) {
    $(document).ready(function() {
        //Back To Top
        if ($('#back-to-top').length) {
            var scrollTrigger = 100, // px
                backToTop = function () {
                    var scrollTop = $(window).scrollTop();
                    if (scrollTop > scrollTrigger) {
                        $('#back-to-top').addClass('show');
                    } else {
                        $('#back-to-top').removeClass('show');
                    }
                };
            backToTop();
            $(window).on('scroll', function () {
                backToTop();
            });
            $('#back-to-top').on('click', function (e) {
                e.preventDefault();
                $('html,body').animate({
                    scrollTop: 0
                }, 700);
            });
        }
        //masonry
        if ( $(".masonry").length ){
            var $masonry = $('.masonry .masonry-wrap');
            $masonry.imagesLoaded( function() {
                $masonry.masonry({
                    itemSelector: '.masonry-has',
                    isAnimated: true,
                    isFitWidth: false,
                    animationOptions: {
                        duration: 500,
                        easing: 'linear'
                    }
                });
            });
        }
        // Sticky Header
        if ($('.site-headerss').length) {
            $(".header-2").sticky({
                zIndex:999
            });
        }
        // Mobile Sticky Fix
        $('.navbar-header > button').on('click', function (e) {
            $("#sticky-wrapper").css({ 'height': 'inherit' });
        });

        // Dropdown Menu
        window.prettyPrint && prettyPrint();
        $(document).on('click', '.primary-menu .xs-dropdown-menu', function(e) {
            e.stopPropagation();
        });
        $('.primary-menu .xs-dropdown-menu').parent().hover(function() {
            var menu = $(this).find("ul");
            var menupos = $(menu).offset();
            if (menupos.left + menu.width() > $(window).width()) {
                var newpos = -$(menu).width();
                menu.css({ left: newpos });
            }
        });
        $(document).on('click', '.primary-menu .xs-angle-down', function(e) {
            e.preventDefault();
            $(this).parents('.xs-dropdown').find('.xs-dropdown-menu').toggleClass('active');
        });

    });
})( jQuery );