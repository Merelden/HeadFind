<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Главная</title>
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
<?php
require_once './components/header.php';
?>
<main class="main">
    <section class="search">
        <input type="search" class="search-input" placeholder="Поиск">
        <a href="/HeadFind/vacancy.php" class="search-btn btn">Найти работу</a>
    </section>
    <section class="vacancy">
        <div class="vacancy-header">
            <h1 class="vacancy-title">Вакансии</h1>
        </div>
        <div class="vacancy__content">
            <div class="vacancy__content-block">
                <h3 class="content-block__title">Веб дизайнер</h3>
                <p class="content-block__price">От 90 000 руб.</p>
                <p class="content-block__text">Компания - ТоповыйДизайн</p>
            </div>
            <div class="vacancy__content-block">
                <h3 class="content-block__title">Веб дизайнер</h3>
                <p class="content-block__price">От 90 000 руб.</p>
                <p class="content-block__text">Компания - ТоповыйДизайн</p>
            </div>
            <div class="vacancy__content-block">
                <h3 class="content-block__title">Веб дизайнер</h3>
                <p class="content-block__price">От 90 000 руб.</p>
                <p class="content-block__text">Компания - ТоповыйДизайн</p>
            </div>
            <div class="vacancy__content-block">
                <h3 class="content-block__title">Веб дизайнер</h3>
                <p class="content-block__price">От 90 000 руб.</p>
                <p class="content-block__text">Компания - ТоповыйДизайн</p>
            </div>
            <div class="vacancy__content-block">
                <h3 class="content-block__title">Веб дизайнер</h3>
                <p class="content-block__price">От 90 000 руб.</p>
                <p class="content-block__text">Компания - ТоповыйДизайн</p>
            </div>
            <div class="vacancy__content-block">
                <h3 class="content-block__title">Веб дизайнер</h3>
                <p class="content-block__price">От 90 000 руб.</p>
                <p class="content-block__text">Компания - ТоповыйДизайн</p>
            </div>
            <div class="vacancy__content-block">
                <h3 class="content-block__title">Веб дизайнер</h3>
                <p class="content-block__price">От 90 000 руб.</p>
                <p class="content-block__text">Компания - ТоповыйДизайн</p>
            </div>
            <div class="vacancy__content-block">
                <h3 class="content-block__title">Веб дизайнер</h3>
                <p class="content-block__price">От 90 000 руб.</p>
                <p class="content-block__text">Компания - ТоповыйДизайн</p>
            </div>
        </div>
        <button class="vacancy-btn">
            Посмотреть все
        </button>
    </section>
</main>
<?php
require_once './components/footer.php';
?>
</body>
</html>