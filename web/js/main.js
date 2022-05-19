$(document).ready(function() {
    $(".owl-carousel").owlCarousel({
        items: 1,
        nav: true,
        loop: true,
        // autoplay: true,
        // autoplayTimeout: 3000,
        navText: [
            '<i style="font-size: 30px" class="fa fa-angle-left" arial-hidden="true"></i>',
            '<i style="font-size: 30px" class="fa fa-angle-right" arial-hidden="true"></i>'
        ]
    });
});