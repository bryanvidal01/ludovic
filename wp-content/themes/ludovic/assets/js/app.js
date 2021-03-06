function isMobile(){
    if($(window).width() < 769){
        return true;
    }else{
        return false;
    }
}

$(document).ready(function(){



});


function init(){

    $(this).scrollTop(0);

    const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        loop: true,
        autoHeight: true,
        slideVisibleClass: 'item-visible',
        slidesPerView: 3,
        spaceBetween: 30,
        centerInsufficientSlides: true,
        centeredSlides: true,
        speed: 400,

        autoplay: {
            delay: 2000,
        },


        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
    });


    var lastScrollTop = 0;
    $(window).scroll(function(){

        var st = window.pageYOffset || document.documentElement.scrollTop; // Credits: "https://github.com/qeremy/so/blob/master/so.dom.js#L426"
        if (st > lastScrollTop){
            $('.hero-navigation').removeClass('animate-it');
        } else {
            $('.hero-navigation').addClass('fixed');
            setTimeout(function(){
               $('.hero-navigation').addClass('animate-it');
            }, 50);
        }
        lastScrollTop = st <= 0 ? 0 : st;


    });

    $('.swiper-button-prev, .swiper-button-next').mouseleave(function(e){
        var el = $(this);
        TweenMax.to(this, 0.3, {scale: 1});
        TweenMax.to(el, 0.3,{scale:1, x: 0, y: 0});
    });

    $('.swiper-button-prev, .swiper-button-next').mouseenter(function(e){
        TweenMax.to(this, 0.3, {transformOrigin: '0 0', scale: 1});
    });

    $('.swiper-button-prev, .swiper-button-next').mousemove(function(e){
        var el = $(this);
        callParallax(e, el);
    });

    function callParallax(e, el){
        parallaxIt(e, el, 170);
    }

    function parallaxIt(e, target, movement){
        var $this = target;
        var boundingRect = $this[0].getBoundingClientRect();
        var relX = e.pageX - boundingRect.left;
        var relY = e.pageY - boundingRect.top;
        var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

        TweenMax.to(target, 0.3, {
            x: (relX - boundingRect.width/2) / boundingRect.width * movement,
            y: (relY - boundingRect.height/2 - scrollTop) / boundingRect.width * movement,
            ease: Power2.easeOut
        });
    }


    $(".hero").mousemove(function(event){
        var el = $(this);
        var relX = event.pageX - $(this).offset().left;
        var relY = event.pageY - $(this).offset().top;

        el.find('.circle').fadeIn(600);
        el.find('.circle').css({left: relX, top: relY})
    });

    $(".hero").mouseleave(function(){
        $('.circle').fadeOut(600);
    });

    $(".image-follow").mousemove(function(event){
        var el = $(this);
        var relX = event.pageX - $(this).offset().left + 30;
        var relY = event.pageY - $(this).offset().top;

        el.find('.follow-image').fadeIn(100);
        el.find('.follow-image').css({left: relX, top: relY})
    });


    $('.formation-list .image-follow').click(function(event){
        $('.popin-formation').fadeIn();

        event.preventDefault();
    });

    $('.container-popin .link-round').click(function(){
        $('.popin-formation').fadeOut();

        event.preventDefault();
    });

/*    setTimeout(function(){
        $('.loader').addClass('slide-down');
        $('#swup').addClass('slide-down');

    }, 0);*/


    var $oscar = $('.pointer');
    var w = window.innerWidth;

    function moveOscar(e) {

        w = window.innerWidth;

        if(e.clientX > w / 2){
            gsap.to($oscar, {
                duration: 0.5,
                delay:0,
                x: e.clientX - 0,
                y: e.clientY - 0,
                ease: "back.out(3)"
            });

        } else {
            gsap.to($oscar, {
                duration: 0.5,
                delay:0,
                x: e.clientX - 0,
                y: e.clientY - 0,
                ease: "back.out(3)" //"power2.inOut"
            });
        }

    }
    $(window).on('mousemove', moveOscar);



    // animation scroll

    jQuery(window).scroll(function(){
        var currentScroll = jQuery(window).scrollTop();
        var animateDetect = currentScroll + (jQuery(window).height() - 140);
        jQuery('.animate-scroll').each(function(){
            var el = jQuery(this);
            var anim = el.data('animation');
            var elContent = el.html();
            var newContent = '<div class="inner-anim">'+ elContent +'</div>';
            var elTop = el.offset().top;


            el.addClass(anim);

            if (!el.find('.inner-anim').length) {
                el.html(newContent);
            }

            if(animateDetect >= elTop){
                el.addClass('is-visible');
            }else{
                el.removeClass('is-visible');
            }


        });
    });

    // End animation scroll




    $('.parallax-item').each(function( index ) {
        var el = jQuery(this);
        console.log(el);
        var gravity = el.data('gravity');
        var parent = el.data('parent');

        if(parent){
            parent = '.' + parent;
        }

        gsap.to(el, {
            yPercent: gravity,
            ease: "none",
            scrollTrigger: {
                trigger: el.parents(parent),
                scrub: true
            },
        });

    });

    $('.inner-loader').addClass('slide-down');
    setTimeout(function(){
        $('.loader').addClass('slide-down');

        setTimeout(function(){
            $('#swup').addClass('slide-down');
            $('.bloc-intro-home__title-site .container-text-hidden').addClass('visible');
            setTimeout(function(){
                $('.hero-navigation').addClass('visible');
            }, 500);
        }, 600);
    }, 500);


}

window.onload = function(){

    var colors = ['#2D2E82', '#583f9a', '#d96333'];

    var animation = new SwupOverlayTheme({
        color: ['#FEF37F'],
        duration: 1500,
        direction: 'to-bottom',
    });
    const swup = new Swup({
        plugins: [animation]
    });


    init();

    $('.inner-loader').addClass('slide-down');
    setTimeout(function(){
        $('.loader').addClass('slide-down');

        setTimeout(function(){
            $('#swup').addClass('slide-down');
            $('.bloc-intro-home__title-site .container-text-hidden').addClass('visible');
            setTimeout(function(){
                $('.hero-navigation').addClass('visible');
            }, 500);
        }, 600);
    }, 500);


    swup.on('pageView', init);

};
