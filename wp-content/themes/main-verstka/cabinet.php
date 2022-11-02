<?php
/**
 Template Name: cabinet
 */

get_header();
?>

<div class="light__img cabinet__light pc" style="background-image: url('img/light/cabinet/light.png')"></div>
    <section class="cabinet-section" style="background-image: url('img/cube/cube10.png')">
        <div class="container">
            <h1 class="t-title">Личный кабинет</h1>
            <!-- Навигация (для телефона)-->
            <div class="cabinet__header cabinet__header-xs">
                <div class="cabinet__header-button active">Данные</div>
                <div class="cabinet__header-button">
                    <div class="pc">Клубная карта</div>
                    <div class="xs">Карта</div>
                </div>
                <div class="cabinet__header-button">
                    <div class="pc">Забронированные мероприятия</div>
                    <div class="xs">Бронь</div>
                </div>
            </div>
            <div class="cabinet__box">
                <!-- Навигация (для телефона)-->
                <div class="cabinet__header cabinet__header-pc">
                    <div class="cabinet__header-button active">Данные</div>
                    <div class="cabinet__header-button">
                        <div class="pc">Клубная карта</div>
                        <div class="xs">Карта</div>
                    </div>
                    <div class="cabinet__header-button">
                        <div class="pc">Забронированные мероприятия</div>
                        <div class="xs">Бронь</div>
                    </div>
                </div>
                <!-- Вкладки-->
                <div class="cabinet__tabs">
                    <div class="cabinet__tab active">
                        <form class="cabinet__form">
                            <label class="cabinet__label">
                                <div class="title">Имя</div>
                                <input type="text" name="name" value="Елена" required autocomplete="off">
                            </label>
                            <label class="cabinet__label">
                                <div class="title">Фамилия</div>
                                <input type="text" name="surname" value="Рейнер" required autocomplete="off">
                            </label>
                            <label class="cabinet__label">
                                <div class="title">Дата рождения</div>
                                <input type="text" name="birthday" value="03.04.1984" required autocomplete="off">
                            </label>
                            <label class="cabinet__label">
                                <div class="title">E-mail</div>
                                <input type="email" name="email" value="nickname@mail.ru" required autocomplete="off">
                            </label>
                            <div class="cabinet__button">
                                <button class="svg-button" type="submit">
                                    <img class="button__border" src="img/buttons/cabinet/form/border.svg" alt="">
                                    <div class="button__main">
                                        <img class="button__bg" src="img/buttons/cabinet/form/main.svg" alt="">
                                        <div class="button__text">Сохранить</div>
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!-- Вторая вкладка-->
                    <div class="cabinet__tab">
                        <div class="cabinet__card">
                            <div class="cabinet__card-top">
                                <div class="cabinet__card-item">
                                    <div class="title">Депозит:</div>
                                    <div class="value">10 000 руб.</div>
                                </div>
                                <div class="cabinet__card-item">
                                    <div class="title">Бонусы:</div>
                                    <div class="value">500</div>
                                </div>
                                <div class="cabinet__card-item">
                                    <div class="title">Приглашений гостей:</div>
                                    <div class="value">1/2 чел.</div>
                                </div>
                            </div>
                            <img class="cabinet__card-img" src="img/cabinet/card.png" alt="">
                            <div class="cabinet__card-bottom">
                                <div class="cabinet__card-item">
                                    <div class="title">Срок действия:</div>
                                    <div class="value">30.06.2022</div>
                                </div>
                                <div class="cabinet__card-item">
                                    <div class="title">Мероприятий</div>
                                    <div class="value">3/5</div>
                                </div>
                            </div>
                            <div class="cabinet__button">
                                <div class="svg-button">
                                    <img class="button__border" src="img/buttons/cabinet/card/border.svg" alt="">
                                    <div class="button__main">
                                        <img class="button__bg" src="img/buttons/cabinet/card/main.svg" alt="">
                                        <div class="button__text">
                                            <div class="title">продлить</div>
                                            <div class="subtitle">клубную карту</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Третья вкладка-->
                    <div class="cabinet__tab">
                        <div class="cabinet__booking">
                            <div class="cabinet__booking-header">
                                <div class="column__left">
                                    <div class="column column1">Дата</div>
                                    <div class="column column2"><span class="xs">/</span>Время</div>
                                </div>
                                <div class="column column3">Название</div>
                            </div>
                            <div class="cabinet__booking-item">
                                <div class="column__left">
                                    <div class="column column1">24.11.2021</div>
                                    <div class="column column2">16:00</div>
                                </div><a class="column column3" href="announcement.html">Кино-встреча. Героини французкого кино</a>
                                <div class="delete__item">
                                    <img class="img-svg" src="img/icons/close.svg" alt="">
                                </div>
                            </div>
                            <div class="cabinet__booking-item">
                                <div class="column__left">
                                    <div class="column column1">01.12.2021</div>
                                    <div class="column column2">15:00</div>
                                </div><a class="column column3" href="announcement.html">Создание личного <br>бренда</a>
                                <div class="delete__item">
                                    <img class="img-svg" src="img/icons/close.svg" alt="">
                                </div>
                            </div>
                            <div class="cabinet__booking-item">
                                <div class="column__left">
                                    <div class="column column1">08.12.2021</div>
                                    <div class="column column2">19:00</div>
                                </div><a class="column column3" href="announcement.html">Арт-встреча. Врубель</a>
                                <div class="delete__item">
                                    <img class="img-svg" src="img/icons/close.svg" alt="">
                                </div>
                            </div>
                            <div class="cabinet__booking-item">
                                <div class="column__left">
                                    <div class="column column1">14.12.2021</div>
                                    <div class="column column2">18:00</div>
                                </div><a class="column column3" href="announcement.html">Предновогодний маскарад по У. Шекспиру</a>
                                <div class="delete__item">
                                    <img class="img-svg" src="img/icons/close.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
get_footer();
