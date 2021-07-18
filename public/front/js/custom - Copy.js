//new WOW().init();
jQuery(window).scroll(function() {
    if (jQuery(this).scrollTop() > 200) {
        jQuery(".header").addClass("fix");
    } else {
        jQuery(".header").removeClass("fix");
    }
});

function myFunction(x) {
    x.classList.toggle("change");
}

(function($) {
    var position = [];
    var containerDivs = $('.latched-holder').each(function() {
        var top = $(this).position().top;
        position.push({
            'container': $(this),
            'top': top
        });
    });

    /* respond to the scroll event */
    $(window).scroll(function() {
        /* get the current scroll position */
        var st = $(window).scrollTop();
        var zIndex = 100;
        position.forEach(function(item, index) {
            var obj = position[index];
            if (st >= obj['top']) {
                obj['container'].addClass('latched');
                obj['container'].css('z-index', zIndex);
            } else {
                obj['container'].removeClass('latched');
                obj['container'].css('z-index', 'inherit');
            }
            zIndex++;
        });
    });

})(window.jQuery);