<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Создание вакансии</title>
    <link rel="stylesheet" type="text/css" href="assets/css/vacancy.css">
</head>
<body>
<?php
require_once 'components/header.php';
?>
<main class="main">
    <section class="create">
        <form action="" class="create-form">
            <label for="name-input">Название вакансии:</label>
            <input id="name-input" type="text" class="create-input name-input" placeholder="Введите название вакансии">

            <label for="cost-input">Уровень дохода:</label>
            <input id="cost-input" type="text" placeholder="Введите уровень дохода" class="create-input cost-input">

            <label for="select-country">Город:</label>
            <select name="select-country" id="select-country">
                <option class="option-country" value="Челябинск" class="option-country">Челябинск</option>
                <option class="option-country" value="Москва" class="option-country">Москва</option>
                <option class="option-country" value="Санкт-Петербург" class="option-country">Санкт-Петербург</option>
                <option class="option-country" value="Красноярск" class="option-country">Красноярск</option>
                <option class="option-country" value="Сочи" class="option-country">Сочи</option>
            </select>

            <label for="company-input">Компания:</label>
            <input type="text" class="company-input create-input" id="company-input" placeholder="Введите название компании">
            
            <label for="select-exp" class="select-exp">Опыт работы</label>
            <select name="select-exp" id="select-exp" class="select-exp">
                <option class="option-exp" value="Нет опыта">Нет опыта</option>
                <option class="option-exp" value="От 1 года до 3 лет">От 1 года до 3 лет</option>
                <option class="option-exp" value="От 3 лет до 6 лет">От 3 лет до 6 лет</option>
                <option class="option-exp" value="Более 6 лет">Более 6 лет</option>
            </select>
        </form>
        <button class="create-btn btn-registration">Создать вакансию</button>
    </section>
</main>
</body>
</html>