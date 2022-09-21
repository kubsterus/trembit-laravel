$(document).ready(function() {
    $('.accordion__head').click(function(e){
        e.stopPropagation();
        if($(this).hasClass('active')){
            $(this).removeClass('active');
            $(this).next().slideUp();
        }
        else{
            $(this).addClass('active');
            $(this).next().slideDown();
        }
    });
    $('.cases-slider').slick({
        centerMode: true,
        slidesToShow: 3,
        initialSlide: 1,
        prevArrow: false,
        nextArrow: '<div class="cases-slider__next"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M96 480c-8.188 0-16.38-3.125-22.62-9.375c-12.5-12.5-12.5-32.75 0-45.25L242.8 256L73.38 86.63c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0l192 192c12.5 12.5 12.5 32.75 0 45.25l-192 192C112.4 476.9 104.2 480 96 480z"/></svg></div>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    centerMode: true,
                    centerPadding: '110px',
                    slidesToShow: 1,
                    initialSlide: 0,
                    nextArrow: false
                }
            },
            {
                breakpoint: 767,
                settings: {
                    centerMode: false,
                    slidesToShow: 1,
                    initialSlide: 0,
                    nextArrow: false
                }
            }
        ]
    });
    $('.feedback-slider').slick({
        centerMode: true,
        slidesToShow: 1,
        arrows: false,
        dots: true,
        centerPadding: '30px'
    });
});