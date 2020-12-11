$(window).on('scroll', function () {
    if($(window).scrollTop()){
        $('.navbar-wrapper').addClass('brown');
    }else{
        $('.navbar-wrapper').removeClass('brown');
    }
})