/**
 * Created by Kris on 9/9/17.
 */
// slide-in menu

jQuery(document).ready(function(){
    var
        hiddenMenu = jQuery('.hidden-menu'),
        siteNav = jQuery('#site-navigation');
    jQuery('#toggle').click(function(){
        hiddenMenu.animate({"width":"100%"}, "500");
        siteNav.addClass('toggled');
    });
    jQuery('#close').click(function(){
        hiddenMenu.animate({"width":"0%"}, "500");
        siteNav.removeClass('toggled');
    });
});

jQuery(document).ready(function () {

    var
        plusBtn = jQuery("#btn-expand"),
        barWrapper = jQuery("#topbar-wrapper");

    plusBtn.click(function () {

        barWrapper.slideToggle();
        plusBtn.toggleClass("plus minus");

    });
    
});


jQuery(document).ready(function($) {
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
            slideIndex = 1
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 5000);
    }
});


jQuery(document).ready(function(){

    var
        columnWidth = jQuery('#container-width-reference'),
        containerHalf = jQuery('.container-half-aligner'),
        containerHeight = jQuery('#slider-image').height();

    if (jQuery(window).width() > 720){
        columnWidthHalf = columnWidth.width()/2.3;
        containerHalf.css({"width":columnWidthHalf,"height":containerHeight});
    }

});


// fixed nav
/*
jQuery(window).scroll(function(){
    var
        siteNav = jQuery('#site-navigation');

    if (jQuery('body').scrollTop() > 310) {
        siteNav.addClass("fixed-top");
    }
    else{
        siteNav.removeClass("fixed-top");
    }
});
*/
// /fixed nav

