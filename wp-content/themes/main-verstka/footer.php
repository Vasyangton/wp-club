<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package verstach
 */
 
session_start();


?>

<footer id="footer">
        <div class="footer__main">
            <div class="container">
                <a class="footer__logo" href="index.html">
                    <img src="../img/footer__logo.svg" alt="">
                </a>
                <div class="footer__links"> <a class="footer__link" href="политика-конфиденциальности">Политика
                        конфиденциальности</a><a class="footer__link" href="публичная-оферта">Публичная оферта</a>
                </div>
                <div class="footer__contacts"> <a class="footer__phone" href="tel:8 965 125 05 05">8 965 125 05 05</a>
                    <div class="footer__callback modal__open" data-modal="callback">Перезвонить Вам?</div><a
                        class="footer__email" href="mailto:info@selebry-club.ru">info@selebry-club.ru</a>
                </div>
            </div>
        </div>
        <div class="footer__author">
            <div class="container"> <a class="author__link" href="https://vk.com/vadim_ganin" target="_blank">Разработка
                    сайта – <span>команда Вадима Ганина </span></a>
            </div>
        </div>
    </footer>
    <div class="overlay"></div>
    <!-- Видео-->
    <div class="modal video center" data-modal="video">
        <div class="video-content"></div>
        <div class="modal__close">
            <img class="img-svg" src="../img/icons/close.svg" alt="Close">
        </div>
    </div>
    <!-- Обратный звонок-->
    <div class="modal callback t-modal small-modal" data-modal="callback">
        <div class="modal__close">
            <img class="img-svg" src="../img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title">Укажите ваши данные</div>
        <div class="modal__subtitle">Перезвоним вам
            <br class="hidden-lg">в течение 30 минут</div>
        <form class="modal__form">
            <input class="modal__input" type="text" name="" placeholder="Имя" required>
            <input class="modal__input" type="tel" name="" placeholder="+7 (___) __--__--__--" required>
            <button class="svg-button" type="submit">
                <img class="button__border" src="../img/buttons/telegram/border.svg" alt="">
                <div class="button__main">
                    <img class="button__bg" src="../img/buttons/telegram/main.svg" alt="">
                    <div class="button__text">заказать звонок</div>
                </div>
            </button>
        </form>
    </div>
    <!-- Вход-->
    <div class="modal login t-modal small-modal" data-modal="login">
        <div class="modal__close">
            <img class="img-svg" src="../img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title pc__title">ВХОД ДЛЯ ЧЛЕНОВ&nbspКЛУБА</div>
        <div class="modal__title xs__title">Вход в аккаунт</div>
        <form class="modal__form" action="vendor/after.php" method="post">
            <input class="modal__input" type="tel" name="nomer" placeholder="+7 (___) __--__--__--" required>
            <input class="modal__input" type="password" name="pass" placeholder="Пароль" required>
            <button class="svg-button" type="submit">
                <img class="button__border" src="../img/buttons/telegram/border.svg" alt="">
                <div class="button__main">
                    <img class="button__bg" src="../img/buttons/telegram/main.svg" alt="">
                    <div class="button__text">ВОЙТИ</div>
                </div>
            </button>
            <br>
            <div class="additional__button modal__open" data-modal="reset">ЗАБЫЛИ ПАРОЛЬ?</div>
        </form>
    </div>
    <!-- Забронировать (для неавторизованных)-->
    <div class="modal booking t-modal" data-modal="booking">
        <div class="modal__close">
            <img class="img-svg" src="../img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title">Забронировать место</div>
        <div class="modal__subtitle">на мероприятие «Живопись и графика в интерьере и как объекты инвестици»</div>
        <form class="modal__form">
            <!-- Гость-->
            <div class="modal__guest">
                <div class="modal__row-title">Гость 1</div>
                <div class="modal__row">
                    <input class="modal__input" type="text" name="" placeholder="Имя" required>
                    <input class="modal__input" type="text" name="" placeholder="Фамилия" required>
                </div>
                <div class="modal__row">
                    <input class="modal__input" type="tel" name="" placeholder="+7 (___) __--__--__--" required>
                    <input class="modal__input" type="email" name="" placeholder="E-mail" required>
                </div>
            </div>
            <button class="svg-button" type="submit">
                <img class="button__border" src="../img/buttons/telegram/border.svg" alt="">
                <div class="button__main">
                    <img class="button__bg" src="../img/buttons/telegram/main.svg" alt="">
                    <div class="button__text">забронировать</div>
                </div>
            </button>
            <br>
            <div class="additional__button add__guest">добавить гостя</div>
        </form>
    </div>
    <!-- Забронировать члена клуба и гостя (для авторизованных)-->
    <!-- Имя и Фамилия члена клуба подставляются автоматом-->
    <div class="modal booking t-modal" data-modal="booking-member">
        <div class="modal__close">
            <img class="img-svg" src="../img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title">Забронировать место</div>
        <div class="modal__subtitle">на мероприятие «Живопись и графика в интерьере и как объекты инвестици»</div>
        <form class="modal__form">
            <!-- Гость-->
            <div class="modal__guest modal__member">
                <div class="modal__row-title">Член клуба</div>
                <div class="modal__row">
                    <input class="modal__input full" type="tel" name="" placeholder="+7 (___) __--__--__--"
                         required>
                </div>
            </div>
            <div class="modal__guest">
                <div class="modal__row-title">Гость 1</div>
                <div class="modal__row">
                    <input class="modal__input" type="text" name="" placeholder="Имя" required>
                    <input class="modal__input" type="text" name="" placeholder="Фамилия" required>
                </div>
                <div class="modal__row">
                    <input class="modal__input" type="tel" name="" placeholder="+7 (___) __--__--__--" required>
                    <input class="modal__input" type="email" name="" placeholder="E-mail" required>
                </div>
            </div>
            <button class="svg-button" type="submit">
                <img class="button__border" src="../img/buttons/telegram/border.svg" alt="">
                <div class="button__main">
                    <img class="button__bg" src="../img/buttons/telegram/main.svg" alt="">
                    <div class="button__text">забронировать</div>
                </div>
            </button>
            <br>
            <div class="additional__button add__guest">добавить гостя</div>
        </form>
    </div>
    <!-- Оплата бронирования-->
    <div class="modal booking t-modal" data-modal="booking-price">
        <div class="modal__close">
            <img class="img-svg" src="../img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title">Оплата бронирования</div>
        <div class="modal__subtitle">на мероприятие «Живопись и графика в интерьере и как объекты инвестици»</div>
        <div class="modal__form">
            <!-- Гость-->
            <div class="modal__guest modal__member">
                <div class="modal__row">
                    <div class="modal__info modal__input">
                        <div class="modal__info-title">Мероприятий по карте</div>
                        <div class="modal__info-value">2</div>
                    </div>
                    <div class="modal__info modal__input">
                        <div class="modal__info-title">Депозит</div>
                        <div class="modal__info-value">5 000 Р.</div>
                    </div>
                </div>
                <div class="modal__row">
                    <div class="modal__info modal__input">
                        <div class="modal__info-title">Бонусы</div>
                        <div class="modal__info-value">2 000</div>
                    </div>
                    <div class="modal__info modal__input">
                        <div class="modal__info-title">Банковская карта</div>
                    </div>
                </div>
            </div>
            <div class="modal__price">
                <div class="modal__price-title">Сумма:</div>
                <div class="modal__price-value">12 500 р.</div>
            </div>
            <div class="svg-button">
                <img class="button__border" src="../img/buttons/telegram/border.svg" alt="">
                <div class="button__main">
                    <img class="button__bg" src="../img/buttons/telegram/main.svg" alt="">
                    <div class="button__text">забронировать</div>
                </div>
            </div>
        </div>
    </div>
    <!-- Сброс пароля-->
    <div class="modal reset t-modal small-modal" data-modal="reset">
        <div class="modal__close">
            <img class="img-svg" src="../img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title">Восстановить пароль</div>
        <form class="modal__form modal__reset">
            <input class="modal__input" type="email" name="" placeholder="E-mail" required>
            <button class="svg-button" type="submit">
                <img class="button__border" src="../img/buttons/telegram/border.svg" alt="">
                <div class="button__main">
                    <img class="button__bg" src="../img/buttons/telegram/main.svg" alt="">
                    <div class="button__text">Восстановить</div>
                </div>
            </button>
        </form>
    </div>
    <!-- Модальное окно с информацией-->
    <div class="modal info t-modal small-modal" data-modal="reset-info">
        <div class="modal__close">
            <img class="img-svg" src="../img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title">Сообщение отправлено на&nbsp;вашу почту</div>
        <div class="modal__subtitle">Перейдите по ссылке в письме
            <br class="hidden-xs">и&nbsp;задайте новый пароль</div>
    </div>
    <!-- Регистрация-->
    <div class="modal t-modal small-modal" data-modal="join">
        <div class="modal__close">
            <img class="img-svg" src="../img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title">Подать заявку на&nbsp;вступление в&nbsp;клуб</div>
        
        <form class="modal__form join__form"  method="post" action="../../../bd.php">
			<input class="modal__input" type="text" name="fio" placeholder="Фамилия" required>
			<input class="modal__input" type="text" name="name" placeholder="Имя" required>
			<input class="modal__input" type="date" name="date" placeholder="Дата рождения" required>
            <input class="modal__input" type="tel" name="nomer" placeholder="Номер" required>
			<input class="modal__input" type="email" name="email" placeholder="Почта" required>
			<input class="modal__input" type="text" name="rod" placeholder="Род занятий" required>
			<input class="modal__input" type="password" name="pass" placeholder="Пароль" required>
			<input class="modal__input" type="password" name="pass_conf" placeholder="Повторите пароль" required>
			
            <button class="svg-button" type="submit" name="contact-form">
                <img class="button__border" src="../img/buttons/telegram/border.svg" alt="">
                <div class="button__main">
                    <img class="button__bg" src="../img/buttons/telegram/main.svg" alt="">
                    <div class="button__text">Подать заявку</div>
                </div>
            </button>
        </form>
    </div>
    <!-- Модальное окно с информацией-->
<!--     <div class="modal info t-modal small-modal" data-modal="join-error">
        <div class="modal__close">
            <img class="img-svg" src="../img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title">Таких участников у&nbsp;нас, к&nbsp;сожалению, нет</div>
    </div> -->
<!-- Попап предложения -->
<div class="modal t-modal small-modal popup">
        <div class="modal__close">
            <img class="img-svg" src="img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title sugg-title"></div>
        <div class="modal__subtitle sugg-desc">Организатор Свадебных и семейных торжеств, основатель агентств Z-weddings и Mirum
            event, партнёр ресторана Жан Реми</div>
        <div class="popup__info">
            <div class="popup__item">
                <h6>Предложение для гостей клуба:</h6>
                <p>- минус 15% на гонорар агенства при организации мероприятия "под ключ"</p>
                <p>- минус 5% в ресторане Жан Реми при заказе по меню</p>
                <p>- минус 5% в ресторане Жан Реми при организации банкета</p>
            </div>
            <div class="popup__item">
                <h6>Предложение для членов клуба:</h6>
                <p>- минус 30% на гонорар агенства при организации мероприятия "под ключ"</p>
                <p>- минус 10% в ресторане Жан Реми при заказе по меню</p>
                <p>- минус 5% в ресторане Жан Реми при организации банкета</p>
            </div>
            <div class="popup__item">
                <h6>Контакты:</h6>
                <p>@elizaveta_panichkina</p>
                <p>http://z-weddings.ru</p>
                <p>@mirum_event</p>
                <p>Mirum-event.ru</p>
            </div>
            <div class="popup__item">
                <h6>Контакты:<span>+7 (903) 243-76-76</span></h6>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery.maskedinput@1.4.1/src/jquery.maskedinput.js"></script>
    <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.4/js/lightgallery.js'>
    </script>
    <script src="../js/slick.min.js"></script>
    <script src="../js/main.js?version=1234567"></script>
<!--     <script src="../js/parser.js"></script>  -->
<!--    <script src="../js/three.js"></script>  -->
</body>

</html>
