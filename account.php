<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Личный кабинет</title>
    <link rel="stylesheet" href="assets/css/account.css">
</head>
<body>
<?php
require_once 'components/header.php';
?>
<main class="main">
    <section class="account">
        <h1 class="account__title">Личный кабинет</h1>
        <div class="account-content">
            <div class="account__icon">
                <img src="/assets/img/account_icons/sueta.jpg" alt="account_icon" class="icon__img">
            </div>
            <div class="account__info">
                <ul class="account__info-list">
                    <li class="info-list__item info-list__item_bold"">Магомед Магомедов Магомедович</li>
                    <li class="info-list__item">Возраст: Не мало</li>
                    <li class="info-list__item">Образование: Высшее образование</li>
                    <li class="info-list__item">Место учебы: ЧРТ</li>
                    <li class="info-list__item">Место работы: Газпромнефть</li>
                </ul>
                <div class="account__tags">
                    <div class="tags__item">Дизайнер</div>
                    <div class="tags__item">UI/UX-разработчик</div>
                    <div class="tags__item">Просто чел</div>
                </div>
            </div>
        </div>
    </section>
    <section class="viewed">
        <div class="viewed-content">
            <h1 class="viewed__title">
                Рассматриваемые вакансии
            </h1>
            <div class="viewed__text">
                Вы еще не рассматривали ни одну вакансию
            </div>
            <a class="viewed__btn">
                Перейти к списку вакансий
            </a>
        </div>
    </section>
</main>
<?php
require_once 'components/footer.php';
?>
</body>
</html>