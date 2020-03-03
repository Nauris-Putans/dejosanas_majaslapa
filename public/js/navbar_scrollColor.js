// Navbar - background color change on scroll
$(document).scroll(function(){
    const scroll = $(document).scrollTop();

    if(scroll < 1000 ){
        $('.fixed-top').css("background", "");

    } else{
        $('.fixed-top').css('background', 'rgba(72, 177, 191, 0.9)');
    }

});