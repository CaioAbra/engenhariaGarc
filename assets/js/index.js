$(document).ready(function () {
    // sistema de detecção de fonte de acordo com O.S do user
    detectOperatingSystem()

    //funcionamento da navbar em mobile
    collapseNavbar()

    //funcionamento do sistema de dropdrown do navbar
    dropdownNavbar() 
});

function detectOperatingSystem() {
    var userAgent = navigator.userAgent;
    if (userAgent.indexOf("Windows") !== -1) {
        // Sistema operacional Windows
        $("body").css("font-family", "Segoe UI, sans-serif");
    } else if (userAgent.indexOf("Macintosh") !== -1) {
        // Sistema operacional macOS
        $("body").css("font-family", "San Francisco, sans-serif");
    } else if (userAgent.indexOf("Android") !== -1 || userAgent.indexOf("iOS") !== -1) {
        // Sistemas operacionais Android ou iOS
        $("body").css("font-family", "Roboto, sans-serif");
    } else {
        // Outros sistemas operacionais
        $("body").css("font-family", "Arial, sans-serif");
    }
}

function collapseNavbar() {
    if (!$('.collapse').hasClass('active')) {
        $('.icon-hamburguer-close').hide();
    }

    $("#menuIcon").on('click', function () {
        $('.collapse').toggleClass('active');
        $('.icon-hamburguer').toggle();
        $('.icon-hamburguer-close').toggle();
    });
}

function dropdownNavbar() {
    $(".dropdown").hover(
        function () {
            $(this).find(".dropdown-content").stop().fadeTo(200, 1);
        },
        function () {
            $(this).find(".dropdown-content").stop().fadeTo(200, 0);
        }
    );

    $(document).on("click", function (e) {
        if (!$(e.target).closest(".dropdown").length) {
            $(".dropdown-content").fadeOut(200);
        }
    });
}