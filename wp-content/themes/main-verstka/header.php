<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package verstach
 */

?>
<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="utf-8">
    <title>Selebry Club</title>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta name="format-detection" content="telephone=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--     <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.3.4/css/lightgallery.min.css' -->
<!--         type='text/css' media='all' /> -->
    <link rel="stylesheet" href="../css/style.css">
</head>

<body>
    <!-- Шапка-->
    <header id="header">
        <div class="container">
            <a class="header__logo" href="главная-страница">
                <img src="../img/logo.svg" alt="">
            </a>
            <div class="header__menu"> <a class="header__menu-link" href="о-нас">О нас</a><a
                    class="header__menu-link" href="главная/#announcement-section">Анонсы</a><a class="header__menu-link"
                    href="клубный-театр">Актерское мастерство</a><a class="header__menu-link" href="спикеры">Спикеры</a>
                <div class="w100"></div><a class="header__menu-link" href="члены-клуба">Члены клуба</a><a
                    class="header__menu-link" href="главная/#privilege-section">Клубная карта</a><a class="header__menu-link"
                    href="главная/#suggestions-section">Предложения для членов клуба</a>
            </div>
            <div class="header__buttons">
                <div class="header__button-card header__button modal__open" data-modal="login">
                    <img src="../img/icons/card.png" alt="">
                </div>
                <!-- Ниже вариант с ссылкой на личный кабинет (для авторизованных )-->
                <!-- <a class="header__button-card header__button" href="личный-кабинет"><img src="img/icons/card.png" alt=""></a>-->
            </div>
            <div class="header__menu-open">
                <img src="../img/icons/menu.svg" alt="">
            </div>
        </div>
    </header>
    <!-- Мобильное меню-->
    <div id="mobile__menu">
        <div class="content">
            <div class="menu__content">
                <div class="header__menu-close">
                    <img class="img-svg" src="../img/icons/close.svg" alt="Close">
                </div>
                <div class="header__button-card header__button modal__open" data-modal="login">
                    <img src="../img/icons/card.png" alt="">
                </div>
                <!-- Ниже вариант с ссылкой на личный кабинет (для авторизованных посетителей)-->
                <!-- <a class="header__button-card header__button" href="cabinet.html"><img src="img/icons/card.png" alt=""></a>--><a
                    class="header__menu-link" href="о-нас">О нас</a><a class="header__menu-link anchor"
                    href="главная/#announcement-section">Анонсы</a><a class="header__menu-link" href="клубный-театр">Клубный
                    театр</a><a class="header__menu-link" href="спикеры">Спикеры</a>
                <a class="header__menu-link" href="члены-клуба">Члены клуба</a><a class="header__menu-link"
                    href="главная/#privilege-section">Клубная карта</a><a class="header__menu-link anchor"
                    href="главная/#suggestions-section">Предложения для членов клуба</a>
            </div>
        </div>
    </div>
    
