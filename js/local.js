$(document).ready(function() {
    //variables
    var timeAnimation = 300;

    //accordion
    $('.first-level-link').click(function (e) {
        e.preventDefault();
        $(this).siblings('ul').slideToggle();
        $(this).parent('li').siblings('li').children('ul').slideUp();
    });

    //scroll up
    $('.up').click(function (e) {
        e.preventDefault();
        $('html, body').animate({
            'scrollTop': 0
        }, timeAnimation);
    });
});