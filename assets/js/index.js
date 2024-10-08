$(document).ready(function () {
    // sistema de detecção de fonte de acordo com O.S do user
    detectOperatingSystem()

    // //funcionamento da navbar em mobile
    collapseNavbar()

    // //funcionamento do sistema de dropdrown do navbar
    dropdownNavbar()

    // // Inicializa o carrossel
    // carouselAnimation()

    // //accordion
    // accordion()

    // Cardsaccordion()
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


var swiper = new Swiper('.mySwiper', {
    slidesPerView: 3, // Exibe 3 logos no desktop
    spaceBetween: 30, // Espaçamento entre os slides no desktop
    loop: true, // Carrossel infinito
    autoplay: {
        delay: 3000, // Tempo de rotação automática dos slides
        disableOnInteraction: false, // Continua após interação
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true, // Paginação clicável
    },
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    // Breakpoints para ajuste da responsividade
    breakpoints: {
        // Mobile: Exibe 1 slide com menos espaçamento
        300: {
            slidesPerView: 1,
            spaceBetween: 10,
        },
        // Tablets: Exibe 2 slides
        768: {
            slidesPerView: 2,
            spaceBetween: 20,
        },
        // Desktop: Exibe 3 slides
        1024: {
            slidesPerView: 3,
            spaceBetween: 30,
        },
    },
});


var swiperDepoimentos = new Swiper('.mySwiperDepoimentos', {
    loop: true, // Loop infinito
    autoplay: {
        delay: 4000, // Tempo de espera entre os slides
        disableOnInteraction: false, // Continua mesmo após interação
    },
    pagination: {
        el: '.swiper-pagination',
        clickable: true, // Paginação clicável
    },
});
