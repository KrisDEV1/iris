/**
 * Created by Kris on 9/9/17.
 */
// slide-in menu
/*
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
*/
jQuery(document).ready(function () {

    var
        plusBtn = jQuery("#btn-expand"),
        barWrapper = jQuery("#topbar-wrapper");

    plusBtn.click(function () {
        console.log("kliknuo");
        barWrapper.slideToggle();
        console.log("toggle");
        plusBtn.toggleClass("plus minus");
        console.log("Promena kalse");
    });
    
});


// /slide-in menu