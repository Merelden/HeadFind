<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ваше резюме</title>
</head>
<body>
<?php
require_once 'components/header.php';
?>
<main class="main">
    <section class="resume">
        <h1 class="resume-title">
            Ваше резюме
        </h1>
        <div class="resume-content">
            <div class="resume__contact resume-block">
                <h2 class="contact-title">
                    Контактные данные
                </h2>
                <form action="" class="contact-form">
                    <label for="">Имя</label>
                    <input type="text" class="contact-input" >

                    <label for="">Фамилия</label>
                    <input type="text" class="contact-input">

                    <label for="">Мобильный телефон</label>
                    <input type="text" class="contact-input">

                    <label for="">Город проживания</label>
                    <select class="contact-select">
                        <option class="contact-option">Челябинск</option>
                        <option class="contact-option">Москва</option>
                        <option class="contact-option">Санкт-Петербург</option>
                        <option class="contact-option">Красноярск</option>
                        <option class="contact-option">Сочи</option>
                    </select>
                </form>
            </div>
        </div>
    </section>
</main>
<?php
//require_once 'components/footer.php';
//?>
</body>
</html>