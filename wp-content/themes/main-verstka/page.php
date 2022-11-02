<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package verstach
 */
session_start();
get_header();
?>
<div class="light__img home__light pc" style="background-image: url('../img/light/home/light.png')"></div>
    <div class="light__img home__light xs" style="background-image: url('../img/light/home/light-xs.png?v=12')"></div>
    <section class="intro-section" style="background-image: url('../img/intro/bg.jpg')">
        <h1 class="t-title intro__title gold">Роскошь <br>человеческого <br>общения</h1>
    </section>
<section class="announcement-section" id="announcement-section">
        <div class="container" style="margin-top:100px">
             <h2 class="t-title">Анонсы мероприятий <br>на ближайшее время</h2> 
			<form method="post" action="bd.php">
				<input type="submit" name="go" value="register">
			</form>
            <div class="announcement__mounth">
                <div class="mounth__title t-title">Анонсы на месяц:</div>
                <div class="mounth__box">
                    <div class="space">
                        <div class="mounth__item">
                            <div class="title"><?php the_field('first-title'); ?></div>
                            <div class="date"><?php the_field('first-data')?> <?php the_field('first-time') ?></div>
                            <div class="description"><?php the_field('first-description'); ?></div>
                        </div>
                    </div>
                    <div class="space">
                        <div class="mounth__item">
                            <div class="title"><?php the_field('second-title'); ?></div>
                            <div class="date"><?php the_field('second-data')?> <?php the_field('second-time') ?></div>
                            <div class="description"><?php the_field('second-description'); ?></div>
                        </div>
                    </div>
                    <div class="space">
                        <div class="mounth__item">
                            <div class="title"><?php the_field('third-title'); ?></div>
                            <div class="date"><?php the_field('third-data')?> <?php the_field('third-time') ?></div>
                            <div class="description"><?php the_field('third-description'); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="announcement__box">
                <div class="announcement__item">
                    <div class="announcement__img" style="background-image: url('<?php the_field('first-img') ?>')"></div>
                    <div class="announcement__content">
                        <div class="title title-parse"><?php the_field('first-title'); ?></div>
                        <div class="info__third">
                            <div class="info__item">
                                <div class="info__title">Дата:</div>
                                <div class="info__value data"><?php the_field('first-data') ?></div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Время:</div>
                                <div class="info__value time"><?php the_field('first-time') ?></div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Места:</div>
                                <div class="info__value seats"><?php the_field('first-seats')?></div>
                            </div>
                        </div>
                        <div class="info__double">
                            <div class="info__item full">
                                <div class="info__title">Место:</div>
                                <div class="info__value place"><?php the_field('first-description'); ?></div>
                            </div>
                            <div class="info__item full">
                                <div class="info__title">Спикер:</div>
                                <div class="info__value speaker"><?php the_field('first-speaker')?></div>
                            </div>
                        </div>
                        <div class="announcement__buttons"> <a class="t-btn white-btn parser-btn"
                                href="анонсы">Подробнее</a>
                            <div class="t-btn gold-btn modal__open" data-modal="booking-member">Забронировать</div>
                        </div>
                    </div>
                </div>
                <div class="announcement__item">
                    <div class="announcement__img"  style="background-image: url('<?php the_field('second-img') ?>');"></div>
                    <div class="announcement__content">
                        <div class="title title-parse"><?php the_field('second-title'); ?></div>
                        <div class="info__third">
                            <div class="info__item">
                                <div class="info__title">Дата:</div>
                                <div class="info__value data"><?php the_field('second-data') ?></div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Время:</div>
                                <div class="info__value time"><?php the_field('second-time') ?></div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Места:</div>
                                <div class="info__value seats"><?php the_field('second-seats')?></div>
                            </div>
                        </div>
                        <div class="info__double">
                            <div class="info__item full">
                                <div class="info__title">Место:</div>
                                <div class="info__value place"><?php the_field('second-description'); ?></div>
                            </div>
                            <div class="info__item full">
                                <div class="info__title">Спикер:</div>
                                <div class="info__value speaker"><?php the_field('second-speaker')?></div>
                            </div>
                        </div>
                        <div class="announcement__buttons"> <a class="t-btn white-btn parser-btn"
                                href="анонсы">Подробнее</a>
                            <div class="t-btn gold-btn modal__open" data-modal="booking-member">Забронировать</div>
                        </div>
                    </div>
                </div>
                <div class="announcement__item" style="display: none;">
                    <div class="announcement__img"  style="background-image: url('<?php the_field('third-img') ?>');"></div>
                    <div class="announcement__content">
                        <div class="title title-parse"><?php the_field('third-title'); ?></div>
                        <div class="info__third">
                            <div class="info__item">
                                <div class="info__title">Дата:</div>
                                <div class="info__value data"><?php the_field('third-time') ?></div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Время:</div>
                                <div class="info__value time"><?php the_field('third-time') ?></div>
                            </div>
                            <div class="info__item">
                                <div class="info__title">Места:</div>
                                <div class="info__value seats"><?php the_field('third-seats')?></div>
                            </div>
                        </div>
                        <div class="info__double">
                            <div class="info__item full">
                                <div class="info__title">Место:</div>
                                <div class="info__value place"><?php the_field('third-description'); ?></div>
                            </div>
                            <div class="info__item full">
                                <div class="info__title">Спикер:</div>
                                <div class="info__value speaker"><?php the_field('third-speaker')?></div>
                            </div>
                        </div>
                        <div class="announcement__buttons"> <a class="t-btn white-btn parser-btn"
                                href="анонсы">Подробнее</a>
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
            <h2 class="t-title gold">Узнавайте о наших мероприятиях<br
                    class="hidden-lg"> <br>в телеграм-канале</h2>
            <div class="btn-center">
                <a class="svg-button" href="https://t.me/selebry_club" target="_blank">
                    <img class="button__border" src="../img/buttons/telegram/border.svg" alt="">
                    <div class="button__main">
                        <img class="button__bg" src="../img/buttons/telegram/main.svg" alt="">
                        <div class="button__text">подписаться
                            <img src="../img/icons/telegram.svg" alt="">
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
                                    <div class="history__img"><img src="<?php the_field('prazdniki-first-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('first-title-holidays')?></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('prazdniki-second-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('second-title-holidays')?></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img" style="background-image: url('img/announcement.jpg')"><img src="<?php the_field('prazdniki-third-first-image')?>">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('third-title-holidays')?></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img" style="background-image: url('img/announcement.jpg')"><img src="<?php the_field('prazdniki-four-first-image')?>">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('four-title-holidays')?></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img" style="background-image: url('img/announcement.jpg')"><img src="<?php the_field('prazdniki-five-first-image')?>">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('five-title-holidays')?></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img" style="background-image: url('img/announcement.jpg')"><img src="<?php the_field('prazdniki-six-first-image')?>">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('six-title-holidays')?></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
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
										<img src="<?php the_field('jivopis-first-first-image')?>">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('first-title-painting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('jivopis-second-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('second-title-painting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')">
									<img src="<?php the_field('jivopis-third-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('third-title-painting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('jivopis-four-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('four-title-painting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('jivopis-five-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('five-title-painting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('jivopis-six-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('six-title-painting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
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
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('excoursion-first-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('first-title-excursions') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('excoursion-second-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('second-title-excursions') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('excoursion-third-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('third-title-excursions') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('excoursion-four-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('four-title-excursions') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('excoursion-five-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('five-title-excursions') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('excoursion-six-first-image')?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('six-title-excursions') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
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
                                    <img src="<?php the_field('kino-first-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('first-title-kino') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('kino-second-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('second-title-kino') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('kino-third-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('third-title-kino') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('kino-four-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('four-title-kino') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('kino-five-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('five-title-kino') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('kino-six-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('six-title-kino') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
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
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('acter-first-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('first-title-acter') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img" style="background-image: url('img/announcement.jpg')"><img src="<?php the_field('acter-second-first-image') ?>">
                                    </div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('second-title-acter') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('acter-third-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('third-title-acter') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('acter-four-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('four-title-acter') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('acter-five-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('five-title-acter') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('acter-six-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('six-title-acter') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
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
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('moda-first-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('first-title-moda') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('moda-second-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('second-title-moda') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('moda-third-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('third-title-moda') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('moda-four-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('four-title-moda') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('moda-five-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('five-title-moda') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img1.jpg')"><img src="<?php the_field('moda-six-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('six-title-moda') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
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
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('tasting-first-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('first-title-tasting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('tasting-second-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('second-title-tasting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('tasting-third-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('third-title-tasting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('tasting-four-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('four-title-tasting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('tasting-five-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('five-title-tasting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
                                                <span>Подробнее</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
							<div class="space">
                                <div class="history__item">
                                    <div class="history__img"
                                        style="background-image: url('img/announcements/img3.jpg')"><img src="<?php the_field('tasting-six-first-image') ?>"></div>
                                    <div class="history__content">
                                        <div class="history__content-top">
                                            <div class="title secondTitle-parse"><?php the_field('six-title-tasting') ?></div>
                                            <div class="subtitle"></div>
                                        </div>
                                        <div class="history__content-bottom">
                                            <a class="t-btn white-btn secondBtn-parse wp-btn-parse" href="история">
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
                        <div class="text">Включено посещение всех
                            <br>встреч и образовательныых<br>мероприятий</div>
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
                    <div class="suggestions__item" style="background-image: url('<?php the_field('suggestion-img-one') ?>')">
                        <div class="suggestions__content">
                            <div class="name sugg-name-parse"><?php the_field('suggestion-name-one') ?></div>
                            <div class="subtitle sugg-desc-parse"><?php the_field('suggestion-desc-one') ?></div>
                        </div>
                    </div>
                </div>
                <div class="space">
                    <div class="suggestions__item" style="background-image: url('<?php the_field('suggestion-img-two') ?>')">
                        <div class="suggestions__content">
                            <div class="name sugg-name-parse"><?php the_field('suggestion-name-two') ?></div>
                            <div class="subtitle sugg-desc-parse"><?php the_field('suggestion-desc-two') ?></div>
                        </div>
                    </div>
                </div>
				<div class="space">
                    <div class="suggestions__item" style="background-image: url('<?php the_field('suggestion-img-three') ?>')">
                        <div class="suggestions__content">
                            <div class="name sugg-name-parse"><?php the_field('suggestion-name-three') ?></div>
                            <div class="subtitle sugg-desc-parse"><?php the_field('suggestion-desc-three') ?></div>
                        </div>
                    </div>
                </div>
				<div class="space">
                    <div class="suggestions__item" style="background-image: url('<?php the_field('suggestion-img-four') ?>')">
                        <div class="suggestions__content">
                            <div class="name sugg-name-parse"><?php the_field('suggestion-name-four') ?></div>
                            <div class="subtitle sugg-desc-parse"><?php the_field('suggestion-desc-four') ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

   
    <!-- Подать заявку-->
    <section class="request-section telegram-section" style="background-image: url('img/cube__bg-10.png')">
        <div class="container">
            <h2 class="t-title gold">Подать заявку  <br class="hidden-lg">на <br class="hidden-xs">вступление <br
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
     
   

<style>
	.hidden-lg {
		display:none;
	}
</style>

<script src="../js/wordpress-parse.js"></script>
<script src="../js/parser.js"></script> 
<script src="../js/three-wordpress-parse.js"></script>
<!-- <script src="../js/three.js"></script> -->

<?php
get_footer();
