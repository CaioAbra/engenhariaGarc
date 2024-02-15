$(document).ready(function () {
    // sistema de detecção de fonte de acordo com O.S do user
    detectOperatingSystem()

    //funcionamento da navbar em mobile
    collapseNavbar()

    //funcionamento do sistema de dropdrown do navbar
    dropdownNavbar()

    // Inicializa o carrossel
    carouselAnimation()
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
        $('.icon-hamburguer').toggle();
        $('.icon-hamburguer-close').toggle();

        if (!$('.collapse').hasClass('active')) {
            $('.collapse').addClass('active');
            $('.block').addClass('active');
        } else {
            if ($('.collapse').hasClass('active')) {
                $('.collapse').addClass('closing-animation');
            }

            setTimeout(function () {
                $('.collapse').removeClass('closing-animation');
                $('.collapse').removeClass('active');
                $('.block').removeClass('active');
            }, 500);
        }
    });

    $(".block").on('click', function () {
        if ($(this).hasClass('active')) {
            console.log("active ta aqui")
            if ($('.collapse').hasClass('active')) {
                $('.collapse').addClass('closing-animation');
            }

            setTimeout(function () {
                $('.collapse').removeClass('closing-animation');
                $('.collapse').removeClass('active');
                $('.block').removeClass('active');
                $('.icon-hamburguer').toggle();
                $('.icon-hamburguer-close').toggle();
            }, 500);
        }
    })


}

function dropdownNavbar() {
    var larguraTela = $(window).width();
    $('.icon-dropdown').hide();

    if (larguraTela > 768) {
        $('.dropdown-content').css('display', 'none');
        $('.icon-dropdown').show();

        if ($('.icon-dropdown').hasClass('actived')) {
            $('.icon-dropdown.actived').hide();
        }

        $(".dropdown").hover(
            function () {
                $(this).find(".dropdown-content").stop().fadeTo(200, 1).show();
                $(this).closest(".dropdown").stop().addClass('active-drop');
                $('.icon-dropdown.desactived').hide();
                $('.icon-dropdown.actived').show();
            },
            function () {
                $(this).find(".dropdown-content").stop().fadeTo(200, 0).hide();
                $(this).closest(".dropdown").stop().removeClass('active-drop');
                $('.icon-dropdown.desactived').show();
                $('.icon-dropdown.actived').hide();
            }
        );

        $(document).on("click", function (e) {
            if (!$(e.target).closest(".dropdown").length) {
                $(".dropdown-content").fadeOut(200);
            }
        });
    }
}

function carouselAnimation() {
    var currentIndex = 0;
    var items = $('.carousel-item');
    var isDragging = false;
    var startX, endX;

    $('.carousel-arrow.next').click(showNextItem);
    $('.carousel-arrow.prev').click(showPrevItem);

    $('.carousel').on('touchstart', touchStart);
    $('.carousel').on('touchmove', touchMove);
    $('.carousel').on('touchend', touchEnd);

    function touchStart(event) {
        isDragging = true;
        startX = event.originalEvent.touches[0].clientX;
    }

    function touchMove(event) {
        if (!isDragging) return;
        endX = event.originalEvent.touches[0].clientX;
    }

    function touchEnd() {
        if (!isDragging) return;
        isDragging = false;
        var diff = endX - startX;
        if (diff > 50) showPrevItem();
        else if (diff < -50) showNextItem();
    }

    function showNextItem() {
        items.removeClass('active');
        currentIndex = (currentIndex + 1) % items.length;
        $(items[currentIndex]).addClass('active');
    }

    function showPrevItem() {
        items.removeClass('active');
        currentIndex = (currentIndex - 1 + items.length) % items.length;
        $(items[currentIndex]).addClass('active');
    }

    setInterval(showNextItem, 5000);
}
