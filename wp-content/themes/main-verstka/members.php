<?php
/**
 Template Name: members-page
 */

get_header();
?>

	<section class="members-section">
            <div class="container" style="margin-top: 100px;">
                <h2 class="t-title">Члены клуба</h2>
                <div class="members__box">
                    <div class="members__arrow slider__arrow left">
                        <img class="pc-arrow" src="../img/icons/slider-left.svg" alt="">
                    </div>
                    <div class="members__arrow slider__arrow right">
                        <img class="pc-arrow" src="../img/icons/slider-left.svg" alt="">
                    </div>
                    <div class="members__slider">
                        <div class="space">
                            <div class="members__item">
                                <div class="member__img" style="background-image: url('../img/about/img1.jpg')"></div>
                                <div class="member__content">
                                    <div class="name">Елена Рейнер</div>
                                    <div class="position">Основатель клуба<br>Автор идеи</div>
                                </div>
                            </div>
                        </div>
                        <div class="space">
                            <div class="members__item">
                                <div class="member__img" style="background-image: url('../img/about/img2.jpg')"></div>
                                <div class="member__content">
                                    <div class="name">Вероника Вяткина</div>
                                    <div class="position">Основатель клуба<br>Креативный директор</div>
                                </div>
                            </div>
                        </div>
                        <div class="space">
                            <div class="members__item">
                                <div class="member__img" style="background-image: url('../img/about/img3.jpeg')"></div>
                                <div class="member__content">
                                    <div class="name">Марта Ильина</div>
                                    <div class="position">Певица и автор песен. Кинокомпозитор.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<?php
get_footer();
