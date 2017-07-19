toastr.options = {
    "closeButton": true,
    "debug": false,
    "newestOnTop": false,
    "progressBar": false,
    "positionClass": "toast-top-right",
    "preventDuplicates": true,
    "onclick": null,
    "showDuration": "300",
    "hideDuration": "1000",
    "timeOut": "5000",
    "extendedTimeOut": "1100",
    "showEasing": "swing",
    "hideEasing": "linear",
    "showMethod": "fadeIn",
    "hideMethod": "fadeOut"
}
//jQuery to collapse the navbar on scroll
$(window).scroll(function() {
    if($(".navbar").length) {
        if ($(".navbar").offset().top > 50) {
            $(".navbar-fixed-top").addClass("top-nav-collapse");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav-collapse");
        }
    }
});

//jQuery for page scrolling feature - requires jQuery Easing plugin
$(function() {
    $('#sidebar-menu > li > a[href="#"]').bind('click', function(event) {
        var $anchor = $(this);
        if($anchor.closest("li").hasClass("active")) {
            $anchor.closest("li").removeClass("active");
        } else {
            $anchor.closest("li").addClass("active");
        }
        $("#sidebar-menu > li").not($anchor.closest("li")).removeClass("active");
        return false;
    });
});
function moneyFormatIndia($num){
    return $num.toString().replace(/(\d)(?=(\d\d)+\d$)/g, "$1,");
}