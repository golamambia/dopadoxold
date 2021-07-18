new WOW().init();
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

/*(function($) {
    var position = [];
    var zIndex = 1;
    var containerDivs = $('.latched-holder').each(function() {
        var top = $(this).position().top;
        $(this).css('z-index', zIndex);
        position.push({
            'container': $(this),
            'top': top
        });

        zIndex++;
    });
    
    $(window).scroll(function() {
        
        var st = $(window).scrollTop();
        position.forEach(function(item, index) {
            var obj = position[index];
            if (st >= obj['top'])
                obj['container'].addClass('latched');
            else
                obj['container'].removeClass('latched');
        });
    });

})(window.jQuery);*/

$(document).ready(function() {
    $(".company-logo").owlCarousel({
        loop: true,
        margin: 40,
        responsiveClass: true,
        nav: false,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 6,
            },
        },
    });
    $('.testimonial-sliders').owlCarousel({
    loop:true,
    margin:50,
   autoplay:true,
    nav:true,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
});
});

$(".arrowlft").click(function(){
    $(".popup-hldr").toggle();
  });
  $(".popup-hldr .close").click(function(){
    $(".popup-hldr").toggle();
  });
  $(".popup-hldr .close").click(function(){
    $(".arrowlft").show();
  })
/*console.clear();
var work = document.querySelector(".service-li");
var items = Array.from(work.querySelectorAll(".service-li li"));
var loadMore = document.getElementById("loadMore");
maxItems = 8;
loadItems = 4;
hiddenClass = "hiddenStyle";
hiddenItems = Array.from(document.querySelectorAll(".hiddenStyle"));

items.forEach(function(item, index) {
    console.log(item.innerText, index);
    if (index > maxItems - 1) {
        item.classList.add(hiddenClass);
    }
});

loadMore.addEventListener("click", function() {
    [].forEach.call(document.querySelectorAll("." + hiddenClass), function(
        item,
        index
    ) {
        if (index < loadItems) {
            item.classList.remove(hiddenClass);
        }

        if (document.querySelectorAll("." + hiddenClass).length === 0) {
            loadMore.style.display = "none";
        }
    });
});*/



