<?php
/**
 Template Name: anonsi
 */

get_header();
?>

	<div class="light__img announcement__light pc" style="background-image: url('../img/light/announcement/light.png')"></div>
    <div class="light__img announcement__light xs" style="background-image: url('../img/light/announcement/light-xs.png')"></div>
    <div class="background-box" style="background-image: url('../img/cube/cube10.png')">
        <section class="gallery-section">
            <div class="container">
                <h1 class="t-title parse-title"></h1>
            </div>
        </section>
        <section class="info-section announcement__info">
            <div class="container">
                <div class="info__box">
                    <div class="info__item date">
                        <img class="img" src="../img/icons/info1.png" alt="">
                        <div class="title">Дата и время</div>
                        <div class="subtitle data-parse">10 октября 2021
                            <br><b>в 13:00</b>
                        </div>
                    </div>
                    <div class="info__item place">
                        <img class="img" src="../img/icons/info2.png" alt="">
                        <div class="title">Место проведения</div>
                        <div class="subtitle place-parse">Жуковка</div>
                    </div>
                    <div class="info__item">
                        <img class="img" src="../img/icons/info3.png" alt="">
                        <div class="title">Кол-во мест</div>
                        <div class="subtitle seats"><b>10</b>/20</div>
                    </div>
                </div>
            </div>
        </section>
        <section class="description-section program-section">
            <div class="container">
                <div class="description__box">
                    <div class="description__left">
                        <h2 class="t-title">Описание <br>мероприятия</h2>
                        <p class="description-parse" style="display: none;"><?php the_field('first-page-description'); ?></p>
						<p class="description-parse" style="display: none;"><?php the_field('second-page-description') ?></p>
						<p class="description-parse" style="display: none;"><?php the_field('third-page-description'); ?></p>
                    </div>
                    <div class="program__detail">
                        <h2 class="t-title">Программа <br>мероприятия</h2>
                        <div class="program__item">
                            <div class="date start-parse">13:00</div>
                            <div class="title">Сбор и встреча гостей</div>
                        </div>
                        <div class="program__item">
                            <div class="date sbor-parse">13:15</div>
                            <div class="title">Начало основной части</div>
                        </div>
                        <div class="program__item">
                            <div class="date tasting-parse">13:30</div>
                            <div class="title">Дегустация кальмара из Ямайки</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="person-section">
            <div class="container">
                <h2 class="t-title">Исполнители</h2>
                <div class="person__box">
                    <div class="person__arrow slider__arrow left">
                        <img class="pc-arrow" src="../img/icons/slider-left.svg" alt="">
                        <img class="xs-arrow" src="../img/icons/slider-right-black.svg" alt="">
                    </div>
                    <div class="person__arrow slider__arrow right">
                        <img class="pc-arrow" src="../img/icons/slider-left.svg" alt="">
                        <img class="xs-arrow" src="../img/icons/slider-right-black.svg" alt="">
                    </div>
                    <div class="person__slider">
                        <div class="space">
                            <div class="person__item" style="display: none;">
                                <div class="person__img"><img src="<?php the_field('first-page-img') ?>"></div>
                                <div class="person__content">
                                    <div class="name name-lector"></div>
                                    <div class="description desc-lector"><?php the_field('first-page-desc') ?></div>
                                </div>
                            </div>
							<div class="person__item" style="display: none;">
                                <div class="person__img"><img src="<?php the_field('second-page-img') ?>"></div>
                                <div class="person__content">
                                    <div class="name name-lector"></div>
                                    <div class="description desc-lector"><?php the_field('second-page-desc') ?></div>
                                </div>
                            </div>
							<div class="person__item" style="display: none;">
                                <div class="person__img"><img src="<?php the_field('third-page-img') ?>"></div>
                                <div class="person__content">
                                    <div class="name name-lector"></div>
                                    <div class="description desc-lector"><?php the_field('third-page-desc') ?></div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </section>
        <section class="share-section">
            <div class="container">
                <div class="share__button">
                    <div class="svg-button modal__open" data-modal="booking-member">
                        <img class="button__border" src="../img/buttons/telegram/border.svg" alt="">
                        <div class="button__main">
                            <img class="button__bg" src="../img/buttons/telegram/main.svg" alt="">
                            <div class="button__text">забронировать</div>
                        </div>
                    </div>
                </div>
<!--                 <div class="share__box"> -->
<!--                     <div class="title">пригласить друга</div>
                    <div class="share__links">
                        <a class="share__link" href="#" target="_blank">
                            <img src="../img/icons/share/vk.png" alt="">
                        </a>
                        <a class="share__link" href="https://t.me/share/url?url=https://selebry-club.ru/%D0%B0%D0%BD%D0%BE%D0%BD%D1%81%D1%8B/" target="_blank">
                            <img src="../img/icons/share/telegram.png" alt="">
                        </a>
                        <a class="share__link" href="https://wa.me/79651250505?text=%D0%9F%D1%80%D0%B8%D0%B2%D0%B5%D1%82!%20%F0%9F%91%8B" target="_blank">
                            <img src="../img/icons/share/whatsapp.png" alt="">
                        </a>
                        <a class="share__link" href="https://instagram.com/selebry_club" target="_blank">
                            <img src="../img/icons/share/instagram.png" alt="">
                        </a>
                    </div> -->
<!--                 </div> -->
            </div>
        </section>
    </div>

<script src="../js/second-wordpress-parse.js"></script>

<style>
	.person__img img {
		object-fit: cover;
    width: 500px;
    height: 300px;
	}
</style>
<?php
get_footer();
