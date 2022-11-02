<?php
/**
 Template Name: login
 */

get_header();
?>

	<div class="modal login t-modal small-modal" data-modal="login">
        <div class="modal__close">
            <img class="img-svg" src="img/icons/close.svg" alt="Close">
        </div>
        <div class="modal__title pc__title">ВХОД ДЛЯ ЧЛЕНОВ&nbspКЛУБА</div>
        <div class="modal__title xs__title">Вход в аккаунт</div>
        <form class="modal__form">
            <input class="modal__input" type="tel" name="" placeholder="+7 (___) __--__--__--" required>
            <input class="modal__input" type="password" name="" placeholder="Пароль" required>
            <button class="svg-button" type="submit">
                <img class="button__border" src="img/buttons/telegram/border.svg" alt="">
                <div class="button__main">
                    <img class="button__bg" src="img/buttons/telegram/main.svg" alt="">
                    <div class="button__text">ВОЙТИ</div>
                </div>
            </button>
            <br>
            <div class="additional__button modal__open" data-modal="reset">ЗАБЫЛИ ПАРОЛЬ?</div>
        </form>
    </div>

<?php
get_footer();
