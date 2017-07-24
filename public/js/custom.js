$('.header-search-item').click(function(){
    $('#InputToFocus').focus();
});
$("document").ready(function($) {
    var nav = $('.social-media-share-block');
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 700) {
            nav.addClass("fixed-share");
        } else {
            nav.removeClass("fixed-share");
        }
    });
    $('.fotorama__nav__shaft .fotorama__thumb-border').css({'width':'70px !important'});
});

$(window).bind('scroll', function() {
    var nav = $('.social-media-share-block');
    if ($("div").is(".single-article")) {
        if($(window).scrollTop() >= $('.single-article').offset().top + $('.single-article').outerHeight() - (window.innerHeight / 100 * 25) ) {
            nav.removeClass("fixed-share");
            nav.addClass("fix-share-bottom");
        } else {
            nav.removeClass("fix-share-bottom");
        }
    }
});

$('.toggle-menu-mob').click(function(){
  $('.shops').toggleClass('sheev');
});

