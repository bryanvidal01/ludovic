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
    const swiper = new Swiper('.swiper-container', {
        // Optional parameters
        loop: true,
        autoHeight: true,
        slideVisibleClass: 'item-visible',
        slidesPerView: 3,
        spaceBetween: 30,
        centerInsufficientSlides: true,
        centeredSlides: true,
        speed: 750,

        autoplay: {
            delay: 2000,
        },


        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        }
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





}

window.onload = function(){

    var colors = ['#2D2E82', '#583f9a', '#d96333'];
    const randomColors = Math.floor(Math.random() * colors.length);

    var animation = new SwupOverlayTheme({
        color: ['#192373'],
        duration: 800,
        direction: 'to-top',
    });
    const swup = new Swup({
        plugins: [animation]
    });




    $('.inner-loader').addClass('slide-down');
    setTimeout(function(){
        $('.loader').addClass('slide-down');
        $('#swup').addClass('slide-down');
    }, 1100);

    init();

    swup.on('pageView', init);

};
