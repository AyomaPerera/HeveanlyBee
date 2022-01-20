$(document).ready(function(){

    $('.fa-bars').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');

    });

    $(window).on('load scroll',function(){
        $('.fa-bars').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');

        if($(window).scrollTop()>30){
            $('.header').css({'background':'#0ba86c9a','box-shadow':'0 .2rem .5rem rgba(0,0,0,.4)'});
        }else{
            $('.header').css({'background':'none','box-shadow':'none'});
        }

    });

    $('.accordion-headre').click(function(){
        $('.accordion .accordion-body').slideUp();
        $(this).next('.accordion-body').slideDown();
        $('.accordion .accordion-headre span').text('+');
        $(this).children('span').text('-');

    });

});