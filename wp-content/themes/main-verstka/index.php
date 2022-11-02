<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package verstach
 */

get_header();
?>
<div class="light__img home__light pc" style="background-image: url('img/light/home/light.png')"></div>
    <div class="light__img home__light xs" style="background-image: url('img/light/home/light-xs.png?v=12')"></div>
    <section class="intro-section" style="background-image: url('img/intro/bg.jpg')">
        <h1 class="t-title intro__title gold">Роскошь <br>человеческого <br>общения</h1>
    </section>
	<section class="announcement-section" id="announcement-section">
        <div class="container">
             <h2 class="t-title">Анонсы мероприятий <br>на ближайшее время</h2> 
            <div class="announcement__mounth">
                <div class="mounth__title t-title">Анонсы на месяц:</div>
                <div class="mounth__box">
                    <div class="space">
                        <div class="mounth__item">
                            <div class="title"><?php the_field('first-title'); ?></div>
                            <div class="date"><?php the_field('first-date'); ?></div>
                            <div class="description"><?php the_field('first-description'); ?></div>
                        </div>
                    </div>
                    <div class="space">
                        <div class="mounth__item">
                            <div class="title"><?php the_field('second-title'); ?></div>
                            <div class="date"><?php the_field('second-date'); ?></div>
                            <div class="description"><?php the_field('second-description'); ?></div>
                        </div>
                    </div>
                    <div class="space">
                        <div class="mounth__item">
                            <div class="title"><?php the_field('third-title'); ?></div>
                            <div class="date"><?php the_field('third-date'); ?></div>
                            <div class="description"><?php the_field('third-description'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="announcement__box">
                <div class="announcement__item">
                    <div class="announcement__img" style="background-image: url('img/announcements/img3.jpg')"></div>
                    <div class="announcement__content">
                        <div class="title title-parse"></div>
                        <div class="info__third">
                            <div class="info__item">
                                <div class="info__title">Дата:</div>
                                <div class="info__value data">10 октября</div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Время:</div>
                                <div class="info__value time"></div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Места:</div>
                                <div class="info__value">10/50</div>
                            </div>
                        </div>
                        <div class="info__double">
                            <div class="info__item full">
                                <div class="info__title">Место:</div>
                                <div class="info__value place">Библиотека Еврейского
                                    <br>культурно-религиозного
                                    <br>центра (Жуковка)</div>
                            </div>
                            <div class="info__item full">
                                <div class="info__title">Спикер:</div>
                                <div class="info__value speaker">Егор Альтман</div>
                            </div>
                        </div>
                        <div class="announcement__buttons"> <a class="t-btn white-btn parser-btn"
                                href="announcement.html">Подробнее</a>
                            <div class="t-btn gold-btn modal__open" data-modal="booking-member">Забронировать</div>
                        </div>
                    </div>
                </div>
                <div class="announcement__item">
                    <div class="announcement__img" style="background-image: url('img/announcement.jpg')"></div>
                    <div class="announcement__content">
                        <div class="title title-parse"></div>
                        <div class="info__third">
                            <div class="info__item">
                                <div class="info__title">Дата:</div>
                                <div class="info__value data">10 октября</div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Время:</div>
                                <div class="info__value time"></div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Места:</div>
                                <div class="info__value">10/50</div>
                            </div>
                        </div>
                        <div class="info__double">
                            <div class="info__item full">
                                <div class="info__title">Место:</div>
                                <div class="info__value place">Библиотека Еврейского
                                    <br>культурно-религиозного
                                    <br>центра (Жуковка)</div>
                            </div>
                            <div class="info__item full">
                                <div class="info__title">Спикер:</div>
                                <div class="info__value speaker">Егор Альтман</div>
                            </div>
                        </div>
                        <div class="announcement__buttons"> <a class="t-btn white-btn parser-btn"
                                href="announcement.html">Подробнее</a>
                            <div class="t-btn gold-btn modal__open" data-modal="booking-member">Забронировать</div>
                        </div>
                    </div>
                </div>
                <div class="announcement__item">
                    <div class="announcement__img" style="background-image: url('img/announcement.jpg')"></div>
                    <div class="announcement__content">
                        <div class="title title-parse"></div>
                        <div class="info__third">
                            <div class="info__item">
                                <div class="info__title">Дата:</div>
                                <div class="info__value data">10 октября</div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Время:</div>
                                <div class="info__value time"></div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Места:</div>
                                <div class="info__value">10/50</div>
                            </div>
                        </div>
                        <div class="info__double">
                            <div class="info__item full">
                                <div class="info__title">Место:</div>
                                <div class="info__value place">Библиотека Еврейского
                                    <br>культурно-религиозного
                                    <br>центра (Жуковка)</div>
                            </div>
                            <div class="info__item full">
                                <div class="info__title">Спикер:</div>
                                <div class="info__value speaker">Егор Альтман</div>
                            </div>
                        </div>
                        <div class="announcement__buttons"> <a class="t-btn white-btn parser-btn"
                                href="announcement.html">Подробнее</a>
                            <div class="t-btn gold-btn modal__open" data-modal="booking-member">Забронировать</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Телеграм-->
    <section class="telegram-section" style="background-image: url('img/cube__bg.png')">
        <div class="container">
            <h2 class="t-title gold">Узнавайте о наших мероприятиях <br>на закрытом <br
                    class="hidden-lg">телеграм-канале</h2>
            <div class="btn-center">
                <a class="svg-button" href="https://telegram.org/" target="_blank">
                    <img class="button__border" src="img/buttons/telegram/border.svg" alt="">
                    <div class="button__main">
                        <img class="button__bg" src="img/buttons/telegram/main.svg" alt="">
                        <div class="button__text">подписаться
                            <img src="img/icons/telegram.svg" alt="">
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <!-- Посмотрите как это было-->
    <section class="history-section">
        <div class="container">
            <h2 class="t-title">Посмотрите, <br class="hidden-lg">как это было</h2>
            <div class="history__header">
                <div class="history__header-button active"><span>Праздники</span>
                </div>
                <div class="history__header-button"> <span>Живопись</span>
                </div>
                <div class="history__header-button"> <span>Экскурсии</span>
                </div>
                <div class="history__header-button"> <span>Кино</span>
                </div>
                <div class="history__header-button"> <span>Актерское <br>мастерство</span>
                </div>
                <div class="history__header-button"> <span>Мода и стиль</span>
                </div>
                <div class="history__header-button"> <span>Дегустации</span>
                </div>
            </div>
            <div class="map__header-xs dropdown__menu-xs">
                <div class="map__header-current dropdown__menu-current"><span>Праздники</span>
                    <img src="img/icons/bottom-arrow.svg" alt="">
                </div>
                <div class="map__header-buttons drodown__menu-buttons" style="display: none;">
                    <div class="map__header-btn dropdown__menu-button">Праздники</div>
                    <div class="map__header-btn dropdown__menu-button">Живопись</div>
                    <div class="map__header-btn dropdown__menu-button">Экскурсии</div>
                    <div class="map__header-btn dropdown__menu-button">Кино</div>
                    <div class="map__header-btn dropdown__menu-button">Актерское мастерство</div>
                    <div class="map__header-btn dropdown__menu-button">Мода и стиль</div>
                    <div class="map__header-btn dropdown__menu-button">Дегустации</div>
                </div>
            </div>
            <div class="history__tabs">
                <div class="history__tab active">
                    <div class="history__box first-slide">
                        <div class="slider__arrow history__left left">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="slider__arrow history__right right">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="history__slider">
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img" style="background-image: url('img/announcement.jpg')">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img" style="background-image: url('img/announcement.jpg')">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history__tab">
                    <div class="history__box first-slide">
                        <div class="slider__arrow history__left left">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="slider__arrow history__right right">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="history__slider">
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img" style="background-image: url('img/announcement.jpg')">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history__tab">
                    <div class="history__box first-slide">
                        <div class="slider__arrow history__left left">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="slider__arrow history__right right">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="history__slider">
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history__tab">
                    <div class="history__box first-slide">
                        <div class="slider__arrow history__left left">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="slider__arrow history__right right">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="history__slider">
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img" style="background-image: url('img/announcement.jpg')">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history__tab">
                    <div class="history__box first-slide">
                        <div class="slider__arrow history__left left">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="slider__arrow history__right right">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="history__slider">
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img" style="background-image: url('img/announcement.jpg')">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history__tab">
                    <div class="history__box first-slide">
                        <div class="slider__arrow history__left left">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="slider__arrow history__right right">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="history__slider">
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="history__tab">
                    <div class="history__box first-slide">
                        <div class="slider__arrow history__left left">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="slider__arrow history__right right">
                            <img class="pc-arrow" src="img/icons/slider-left.svg" alt="">
                            <img class="xs-arrow" src="img/icons/slider-right-black.svg" alt="">
                        </div>
                        <div class="history__slider">
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse" href="history.html">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Отзывы наших гостей-->
    <section class="reviews-section home-reviews-section">
        <img class="reviews__light" src="img/main-reviews-light.png" alt="">
        <div class="container">
            <h2 class="t-title">Отзывы наших гостей</h2>
            <div class="reviews__box">
                <div class="reviews__mockup">
                    <img class="mockup" src="img/reviews/telefon.png?v=1234" alt="">
                    <div class="reviews__arrow slider__arrow left">
                        <img src="img/icons/reviews-left.png" alt="">
                    </div>
                    <div class="reviews__arrow slider__arrow right">
                        <img src="img/icons/reviews-left.png" alt="">
                    </div>
                </div>
                <div class="reviews__slider">
                    <div class="reviews__space review-parse">
                        <!-- <img class="reviews__item" src="img/reviews/img1.jpg" alt=""> -->
                    </div>
                    <div class="reviews__space review-parse">
                        <!-- <img class="reviews__item" src="img/reviews/img2.jpg" alt=""> -->
                    </div>
                    <div class="reviews__space review-parse">
                        <!-- <img class="reviews__item" src="img/reviews/img3.jpg" alt=""> -->
                    </div>
                    <div class="reviews__space review-parse">
                        <!-- <img class="reviews__item" src="img/reviews/img4.jpg" alt=""> -->
                    </div>
                    <div class="reviews__space review-parse">
                        <!-- <img class="reviews__item" src="img/reviews/img5.jpg" alt=""> -->
                    </div>
                    <div class="reviews__space review-parse">
                        <!-- <img class="reviews__item" src="img/reviews/img6.jpg" alt=""> -->
                    </div>
                    <div class="reviews__space review-parse">
                        <!-- <img class="reviews__item" src="img/reviews/img7.jpg" alt=""> -->
                    </div>
                    <div class="reviews__space review-parse">
                        <!-- <img class="reviews__item" src="img/reviews/img8.jpg" alt=""> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Привилегии клубной карты-->
    <section class="privilege-section" id="privilege-section">
        <div class="container">
            <h2 class="t-title">Привилегии <br class="hidden-lg">клубной карты</h2>
            <div class="privilege__box">
                <div class="privilege__left">
                    <div class="privilege__item item1">
                        <div class="img">
                            <img src="img/privilege/img1.png" alt="">
                        </div>
                        <div class="text">Включено посещение всех<br>
                            встреч и образовательных<br> мероприятий</div>
                    </div>
                    <div class="privilege__item item2">
                        <div class="img">
                            <img src="img/privilege/img2.png" alt="">
                        </div>
                        <div class="text">Бронирование
                            <br>мероприятий онлайн</div>
                    </div>
                    <div class="privilege__item item3">
                        <div class="img">
                            <img src="img/privilege/img3.png" alt="">
                        </div>
                        <div class="text">Приглашения на закрытые
                            <br>мероприятия</div>
                    </div>
                    <div class="privilege__item item4">
                        <div class="img">
                            <img src="img/privilege/img4.png" alt="">
                        </div>
                        <div class="text">Предложения от других
                            <br>членов клуба</div>
                    </div>
                </div>
                <img class="privilege__card" src="img/privilege/card.png" alt="">
            </div>
        </div>
    </section>
    <!-- Предложения для членов клуба-->
    <section class="suggestions-section" id="suggestions-section">
        <div class="container">
            <h2 class="t-title">Предложения <br class="hidden-lg">для членов клуба</h2>
            <div class="suggestions__box">
                <div class="space">
                    <div class="suggestions__item" style="background-image: url('img/suggestion__bg.jpg')">
                        <div class="suggestions__content">
                            <div class="name">Елизавета Паничкина</div>
                            <div class="subtitle">Организатор свадебных и&nbsp;семейных торжеств</div>
                        </div>
                    </div>
                </div>
                <div class="space">
                    <div class="suggestions__item" style="background-image: url('img/suggestion__bg2.jpg')">
                        <div class="suggestions__content">
                            <div class="name">Наталья Легенда</div>
                            <div class="subtitle">Свадебный
                                <br class="hidden-lg">фотограф</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Подать заявку-->
    <section class="request-section telegram-section" style="background-image: url('img/cube__bg-10.png')">
        <div class="container">
            <h2 class="t-title gold">Подать заявку <br class="hidden-lg">на <br class="hidden-xs">вступление <br
                    class="hidden-lg">в клуб</h2>
            <div class="btn-center">
                <div class="svg-button modal__open" data-modal="join">
                    <img class="button__border" src="img/buttons/telegram/border.svg" alt="">
                    <div class="button__main">
                        <img class="button__bg" src="img/buttons/telegram/main.svg" alt="">
                        <div class="button__text">подать заявку</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
