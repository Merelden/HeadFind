<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание вакансии</title>
    <link rel="stylesheet" type="text/css" href="assets/css/createVacancy.css">
</head>
<body>
<?php
require_once 'components/header.php';
?>
<main class="main">
    <section class="create">
        <div class="create-content">
            <form action="" class="create-form">
                <label class="create-label" for="name-input">Название вакансии:</label>
                <input id="name-input" type="text" class="create-input name-input" placeholder="Введите название вакансии">

                <label class="create-label" for="cost-input">Уровень дохода:</label>
                <input id="cost-input" type="text" placeholder="Введите уровень дохода" class="create-input cost-input">

                <label class="create-label" for="select-country">Город:</label>
                <select name="select-country" class="select-country" id="select-country">
                    <option class="option-country" value="Челябинск" >Челябинск</option>
                    <option class="option-country" value="Москва" >Москва</option>
                    <option class="option-country" value="Санкт-Петербург" >Санкт-Петербург</option>
                    <option class="option-country" value="Красноярск">Красноярск</option>
                    <option class="option-country" value="Сочи" >Сочи</option>
                </select>

                <label class="create-label" for="company-input">Компания:</label>
                <input type="text" class="company-input create-input" id="company-input" placeholder="Введите название компании">

                <label class="create-label" for="select-exp">Опыт работы:</label>
                <select name="select-exp" id="select-exp" class="select-exp">
                    <option class="option-exp" value="Нет опыта">Нет опыта</option>
                    <option class="option-exp" value="От 1 года до 3 лет">От 1 года до 3 лет</option>
                    <option class="option-exp" value="От 3 лет до 6 лет">От 3 лет до 6 лет</option>
                    <option class="option-exp" value="Более 6 лет">Более 6 лет</option>
                </select>
            </form>
            <button class="create-btn btn-registration">Создать вакансию</button>
        </div>
        <div class="create__poster">
            <img src="./assets/img/createVacancyPoster.png" alt="poster" class="poster-img">
        </div>
    </section>
</main>
</body>
</html>