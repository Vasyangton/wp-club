
$(document).ready(() => {
    // function fixHeader() {
    //     var winTop = $(window).scrollTop();
    //     if(winTop >= 1){
    //         $('#header').addClass('fixed');
    //     } else {
    //         $('#header').removeClass('fixed');
    //     }
    // }
    // fixHeader();
    // $(window).scroll(function(){
    //     fixHeader();
    // });

    // Маска ввода
    $('input[type="tel"]').mask('+7 (999) 999-99-99');


    // Модальные окна
    var overlay = $(".overlay"),
        modal = $(".modal"),
        modalClose = $(".modal__close"),
        modalOpen = $(".modal__open[data-modal]");

    overlay.click(function (e) {
        if ($(e.target).closest(".modal").length == 0) {
            $("body, html").removeClass("my-body-noscroll-class");
            $(this).fadeOut();
            modal.fadeOut();
            $("#mobile__menu").removeClass("active");
            $(".video-content iframe").remove();
        }
    });

    modalClose.click(function () {
        $("body, html").removeClass("my-body-noscroll-class");
        overlay.fadeOut();
        modal.fadeOut();
        $(".video-content iframe").remove();
    });

    modalOpen.each(function () {
        $(this).on("click", function (e) {
            var modalId = $(this).attr("data-modal"),
                EachModal = $('.modal[data-modal="' + modalId + '"]');
            $("body, html").addClass("my-body-noscroll-class");

            if (this.getAttribute("data-src")) {
                var modalVideo = this.getAttribute("data-src");
                modalElem = document.querySelector('.modal[data-modal="' + modalId + '"]');
                $(modalElem)
                    .find(".video-content")
                    .html('<iframe src="https://www.youtube.com/embed/' + modalVideo + '?frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>');
            }

            $("#mobile__menu").removeClass("active");
            modal.fadeOut();

            overlay.fadeIn();
            EachModal.fadeIn();
        });
    });


    // Код для изменения параметров SVG
    $("img.img-svg").each(function () {
        var $img = $(this);
        var imgID = $img.attr("id");
        var imgClass = $img.attr("class");
        var imgURL = $img.attr("src");
        $.get(
            imgURL,
            function (data) {
                var $svg = $(data).find("svg");
                if (typeof imgID !== "undefined") {
                    $svg = $svg.attr("id", imgID);
                }
                if (typeof imgClass !== "undefined") {
                    $svg = $svg.attr("class", imgClass + " replaced-svg");
                }
                $svg = $svg.removeAttr("xmlns:a");
                $img.replaceWith($svg);
            },
            "xml"
        );
    });



    // Мобильное меню
    $(".header__menu-open").on("click", function (e) {
        $("#mobile__menu").toggleClass("active");
        $('.overlay').fadeIn();
        $("body, html").addClass("my-body-noscroll-class");
    });
    $(".header__menu-close").on("click", function (e) {
        $("#mobile__menu").toggleClass("active");
        $('.overlay').fadeOut();
        $("body, html").removeClass("my-body-noscroll-class");
    });



    // Плавный скролл по якорям
    $('a[href^="#"]').click(function () {
        $("#mobile__menu").removeClass("active");
        $('.overlay').fadeOut();
        $("body, html").removeClass("my-body-noscroll-class");

        let target = $(this).attr("href");
        let targetPosition = $(target).offset().top;
        $("html, body").animate({ scrollTop: targetPosition }, 500);
        return false;
    });





    /* Динамический слайдер на главной странице "Посмотрите, как это было" */
    $('.history__tabs .history__tab').each(function() {
        let historySlider = $(this).find('.history__slider');
        let historyLeftArrow = $(this).find('.history__left');
        let historyRightArrow = $(this).find('.history__right');
        historySlider.not('.slick-initialized').slick({
            infinite: true,
            slidesToShow: 3,
            arrows: true,
            prevArrow: historyLeftArrow,
            nextArrow: historyRightArrow,
            dots: false,
            speed: 500,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 575,
                    settings: {
                        slidesToShow: 1.06,
                        slidesToScroll: 1,
                        centerMode: false,
                        infinite: false,
                    },
                },
            ],
        }).on('afterChange', function(event, slick, currentSlide, nextSlide){
            slidesCount = slick.slideCount - 1;
            if(currentSlide == 0) {
                $(this).parent().addClass('first-slide');
            } else {
                $(this).parent().removeClass('first-slide');
            }

            if(currentSlide == slidesCount) {
                $(this).parent().addClass('last-slide');
            } else {
                $(this).parent().removeClass('last-slide');
            }
        });
    });

    /* Вкладки на главной странице "Посмотрите, как это было" */
    $(".history__header-button").on("click", function () {
        $(this).addClass("active").siblings().removeClass("active");
        $(".history__tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".history__tab").eq($(this).index()).find('.history__slider').slick('refresh');
    });
    $(".map__header-current").on("click", function () {
        $(this).toggleClass("active");
        $(".map__header-xs .drodown__menu-buttons").fadeToggle();
    });
    $(".map__header-xs .dropdown__menu-button").on("click", function () {
        let clickedButtonText = $(this).text();
        $(".map__header-xs .map__header-current").removeClass("active");
        $(".map__header-xs .drodown__menu-buttons").fadeToggle();
        $(".map__header-xs .map__header-current span").text(clickedButtonText);
        $(".history__tab").removeClass("active").eq($(this).index()).addClass("active");
        $(".history__tab").eq($(this).index()).find('.history__slider').slick('refresh');
    });


    /* Отзывы (скрины телефона) */
    $(".reviews__slider").slick({
        infinite: true,
        slidesToShow: 3,
        arrows: true,
        prevArrow: ".reviews__arrow.left",
        nextArrow: ".reviews__arrow.right",
        dots: false,
        speed: 500,
        centerMode: true,
        centerPadding: 0,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                    fade: true,
                },
            },
        ],
    });


    /*  Галерея  */
    $(".gallery__slider").slick({
        centerMode: true,
        infinite: true,
        slidesToShow: 1,
        centerPadding: "23%",
        arrows: true,
        prevArrow: ".gallery__arrow.left",
        nextArrow: ".gallery__arrow.right",
        dots: false,
        responsive: [
            {
                breakpoint: 1200,
                settings: {
                    centerPadding: "15%",
                },
            },
            {
                breakpoint: 767,
                settings: {
                    centerPadding: "15%",
                },
            },
            {
                breakpoint: 575,
                settings: {
                    centerMode: false,
                    slidesToShow: 1,
                },
            },
        ],
    });


    /* Слйдер "Исполнители" */
    /* На ПК активируется только тогда, когда будет больше 3-х слайдов */
    $(".person__slider").slick({
        infinite: true,
        slidesToShow: 3,
        arrows: true,
        prevArrow: '.person__arrow.left',
        nextArrow: '.person__arrow.right',
        dots: false,
        responsive: [
            {
                breakpoint: 991,
                settings: {
                    slidesToShow: 2,
                },
            },
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });


    /* Слйдер "Члены клуба" */
    if ($(window).width() > 575) {
        $(".members__slider").slick({
            infinite: true,
            slidesToShow: 4,
            arrows: true,
            prevArrow: '.members__arrow.left',
            nextArrow: '.members__arrow.right',
            dots: false,
            responsive: [
                {
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                    },
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        fade: true,
                    },
                }
            ],
        });
    }

    /* табы  */
    $(".cabinet__header-button").on("click", function () {
        $(this).addClass("active").siblings().removeClass("active");
        $(".cabinet__tab").removeClass("active").eq($(this).index()).addClass("active");
    });


    /* Галерея */
    $('.gallery__slider').lightGallery({
        thumbnail:false,
        download: false,
        selector: 'a',
        mode: 'lg-fade'
    });


    // Этот код можешь удалить, он нужен был для демонстрации работы форм 
    $("form").submit(function (event) {
        event.preventDefault();
        if($(this).hasClass('modal__reset')) {
            $('.overlay').fadeIn();
            $('.modal').fadeOut();
            $('.modal[data-modal="reset-info"]').fadeIn();
        }
        if($(this).hasClass('join__form')) {
            $('.overlay').fadeIn();
            $('.modal').fadeOut();
            $('.modal[data-modal="join-error"]').fadeIn();
        }
    });

    /* Сверка паролей */ 
    $(".input__password2").on("keyup", function () {
        // Выполняем скрипт при изменении содержимого 2-го поля
        var value_input1 = $(this).siblings(".input__password1").val(); // Получаем содержимое 1-го поля
        var value_input2 = $(this).val(); // Получаем содержимое 2-го поля
        var submitButton = $(this).parent().parent().find('.svg-button[type="submit"]');
        var formDescription = $(this).parent().parent().find('.form__description');

        if (value_input1 == value_input2) {
            // Условие, если поля совпадают
            formDescription.css('color', 'green'); 
            formDescription.text('Пароли совпадают'); 
            formDescription.fadeIn(); // Выводим сообщение
            submitButton.removeAttr("disabled"); // Разрешаем отправку формы
        } else {
            // Условие, если поля не совпадают
            formDescription.css('color', 'red');
            formDescription.text('Пароли не совпадают');
            formDescription.fadeIn(); // Выводим сообщение
            submitButton.attr("disabled", "disabled"); // Запрещаем отправку формы
        }
    });
});

var block = document.querySelectorAll('.suggestions__item'),
    popup = document.querySelector('.popup'),
    title = document.querySelector('.sugg-title'),
    titleTwo = document.querySelectorAll('.sugg-name-parse'),
    desc = document.querySelector('.sugg-desc'),
    descTwo = document.querySelectorAll('.sugg-desc-parse');

block.forEach(elem => {
    elem.addEventListener('click', () => {
        popup.style.display = "block";
    });
});

function oneSugg() {
    title.innerHTML = titleTwo[0].textContent;
    desc.innerHTML = descTwo[0].textContent;
}

function twoSugg() {
    title.innerHTML = titleTwo[1].textContent;
    desc.innerHTML = descTwo[1].textContent;
}

function threeSugg() {
    title.innerHTML = titleTwo[2].textContent;
    desc.innerHTML = descTwo[2].textContent;
}

function fourSugg() {
    title.innerHTML = titleTwo[3].textContent;
    desc.innerHTML = descTwo[3].textContent;
}

block[0].addEventListener('click', oneSugg);
block[1].addEventListener('click', twoSugg);
block[2].addEventListener('click', threeSugg);
block[3].addEventListener('click', fourSugg);

