<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Вакансии</title>
    <link rel="stylesheet" type="text/css" href="assets/css/vacancy.css">
</head>
<body>
<?php
require_once 'components/header.php';
?>
<main class="main">
    <section class="search">
        <input type="search" class="search-input" placeholder="Поиск">
        <button class="search-btn btn">Найти работу</button>
    </section>
    <aside class="aside">
        <div class="aside__block">
            <h4 class="aside-title">Подработка</h4>
            <form class="aside__form">
                <div class="form-item">
                    <input type="checkbox" class="form-checkbox form-input" name="firstCheckbox">
                    <label for="firstCheckbox">Временная работа</label>
                </div>
                <div class="form-item">
                    <input type="checkbox" class="form-checkbox form-input" name="secondCheckbox">
                    <label for="secondCheckbox">Неполный день</label></div>
                <div class="form-item">
                    <input type="checkbox" class="form-checkbox form-input" name="thirdCheckbox">
                    <label for="thirdCheckbox">От 4 часов в день</label>
                </div>
                <div class="form-item">
                    <input type="checkbox" class="form-checkbox form-input" name="fourthCheckbox">
                    <label for="fourthCheckbox">Разовое задание</label>
                </div>
            </form>
        </div>
        <div class="aside__block">
            <h4 class="aside-title">Уровень дохода</h4>
            <form action="" class="aside__form">
                <div class="form-item">
                    <input type="radio" class="form-radio form-input" id="firstRadio" name="radioSalary">
                    <label for="firstRadio">Не имеет значения</label>
                </div>
                <div class="form-item">
                    <input type="radio" class="form-radio form-input" id="secondRadio" name="radioSalary">
                    <label for="secondRadio">от 40 000 ₽</label>
                </div>
                <div class="form-item">
                    <input type="radio" class="form-radio form-input" id="thirdRadio" name="radioSalary">
                    <label for="thirdRadio">от 80 000 ₽</label>
                </div>
                <div class="form-item">
                    <input type="radio" class="form-radio form-input" id="fourthRadio" name="radioSalary">
                    <label for="fourthRadio">от 120 000 ₽</label>
                </div>
            </form>
        </div>
        <div class="aside__block">
            <h4 class="aside-title">Опыт работы</h4>
            <form action="" class="aside__form">
                <div class="form-item">
                    <input type="radio" class="form-radio form-input" id="firstRadio" name="radioExperience">
                    <label for="firstRadio">Нет опыта</label>
                </div>
                <div class="form-item">
                    <input type="radio" class="form-radio form-input" id="firstRadio" name="radioExperience">
                    <label for="firstRadio">Не имеет значения</label>
                </div>
                <div class="form-item">
                    <input type="radio" class="form-radio form-input" id="secondRadio" name="radioExperience">
                    <label for="secondRadio">От 1 года до 3 лет</label>
                </div>
                <div class="form-item">
                    <input type="radio" class="form-radio form-input" id="thirdRadio" name="radioExperience">
                    <label for="thirdRadio">От 3 до 6 лет</label>
                </div>
                <div class="form-item">
                    <input type="radio" class="form-radio form-input" id="fourthRadio" name="radioExperience">
                    <label for="fourthRadio">Более 6 лет</label>
                </div>
            </form>
        </div>
        <div class="aside__form">
            <h4 class="aside-title">График работы</h4>
            <div class="form__item">
                <input type="checkbox" class="form-checkbox form-input" name="firstCheckbox">
                <label for="firstCheckbox">Полный день</label>
            </div>
            <div class="form__item">
                <input type="checkbox" class="form-checkbox form-input" name="secondCheckbox">
                <label for="secondCheckbox">Сменный график</label>
            </div>
            <div class="form__item">
                <input type="checkbox" class="form-checkbox form-input" name="thirdCheckbox">
                <label for="thirdCheckbox">Гибкий график</label>
            </div>
            <div class="form__item">
                <input type="checkbox" class="form-checkbox form-input" name="fourthCheckbox">
                <label for="fourthCheckbox">Удаленная работа</label>
            </div>
        </div>
    </aside>
    <section class="vacancy">
        <div class="vacancy-info">
            <div class="vacancy__block">
                <div class="vacancy-content">
                    <h3 class="vacancy-title">Обрубщик</h3>
                    <p class="vacancy-price">120 000 - 300 000 ₽</p>
                    <p class="vacancy-city">Челябинск</p>
                    <p class="vacancy-city">DService</p>
                    <p class="vacancy-exp">
                        <img src="/assets/img/backpack.png" alt="backpack" class="vacancy-exp-img">
                        Опыт от 1 года до 3 лет
                    </p>
                </div>
                <div class="vacancy-controls">
                    <a href="" class="controls-btn btn-registration">Откликнуться</a>
                    <a href="" class="controls-btn contacts-btn btn-registration">Показать контакты</a>
                </div>
            </div>
            <div class="vacancy__block">
                <div class="vacancy-content">
                    <h3 class="vacancy-title">Сборщик заказов, подработка</h3>
                    <p class="vacancy-price">80 000 – 105 000 ₽</p>
                    <p class="vacancy-city">Челябинск</p>
                    <p class="vacancy-company">ИП Грихно Георгий Александрович</p>
                    <p class="vacancy-exp">
                        <img src="/assets/img/backpack.png" alt="backpack" class="vacancy-exp-img">
                        Без опыта
                    </p>
                </div>
                <div class="vacancy-controls">
                    <a href="" class="controls-btn btn-registration">Откликнуться</a>
                    <a href="" class="controls-btn contacts-btn btn-registration">Показать контакты</a>
                </div>
            </div>
            <div class="vacancy__block">
                <div class="vacancy-content">
                    <h3 class="vacancy-title">Менеджер по продажам</h3>
                    <p class="vacancy-price">12 000 – 35 000 ₽</p>
                    <p class="vacancy-city">Челябинск</p>
                    <p class="vacancy-company">ПАО Ростелеком</p>
                    <p class="vacancy-exp">
                        <img src="/assets/img/backpack.png" alt="backpack" class="vacancy-exp-img">
                        Без опыта
                    </p>
                </div>
                <div class="vacancy-controls">
                    <a href="" class="controls-btn btn-registration">Откликнуться</a>
                    <a href="" class="controls-btn contacts-btn btn-registration">Показать контакты</a>
                </div>
            </div>
            <div class="vacancy__block">
                <div class="vacancy-content">
                    <h3 class="vacancy-title">Пеший сборщик-курьер</h3>
                    <p class="vacancy-price">до 62 000 ₽</p>
                    <p class="vacancy-city">Челябинск</p>
                    <p class="vacancy-company">СберМаркет</p>
                    <p class="vacancy-exp">
                        <img src="/assets/img/backpack.png" alt="backpack" class="vacancy-exp-img">
                        Без опыта
                    </p>
                </div>
                <div class="vacancy-controls">
                    <a href="" class="controls-btn btn-registration">Откликнуться</a>
                    <a href="" class="controls-btn contacts-btn btn-registration">Показать контакты</a>
                </div>
            </div>
            <div class="vacancy__block">
                <div class="vacancy-content">
                    <h3 class="vacancy-title">Разнорабочий в строительную компанию</h3>
                    <p class="vacancy-price">до 35 000 ₽</p>
                    <p class="vacancy-city">Челябинск</p>
                    <p class="vacancy-company">ООО ПозитивСтрой</p>
                    <p class="vacancy-exp">
                        <img src="/assets/img/backpack.png" alt="backpack" class="vacancy-exp-img">
                        Без опыта
                    </p>
                </div>
                <div class="vacancy-controls">
                    <a href="" class="controls-btn btn-registration">Откликнуться</a>
                    <a href="" class="controls-btn contacts-btn btn-registration">Показать контакты</a>
                </div>
            </div>
            <div class="vacancy__block">
                <div class="vacancy-content">
                    <h3 class="vacancy-title">Специалист по продажам услуг</h3>
                    <p class="vacancy-price">от 43 700 ₽</p>
                    <p class="vacancy-city">Челябинск</p>
                    <p class="vacancy-company">ПАО «МТС»</p>
                    <p class="vacancy-exp">
                        <img src="/assets/img/backpack.png" alt="backpack" class="vacancy-exp-img">
                        Без опыта
                    </p>
                </div>
                <div class="vacancy-controls">
                    <a href="" class="controls-btn btn-registration">Откликнуться</a>
                    <a href="" class="controls-btn contacts-btn btn-registration">Показать контакты</a>
                </div>
            </div>
            <div class="vacancy__block">
                <div class="vacancy-content">
                    <h3 class="vacancy-title">SMM-менеджер</h3>
                    <p class="vacancy-price">10 000 – 20 000 ₽</p>
                    <p class="vacancy-city">Челябинск</p>
                    <p class="vacancy-company">Maska Art Hall</p>
                    <p class="vacancy-exp">
                        <img src="/assets/img/backpack.png" alt="backpack" class="vacancy-exp-img">
                        Опыт от 1 года до 3 лет
                    </p>
                </div>
                <div class="vacancy-controls">
                    <a href="" class="controls-btn btn-registration">Откликнуться</a>
                    <a href="" class="controls-btn contacts-btn btn-registration">Показать контакты</a>
                </div>
            </div>
            <div class="vacancy__block">
                <div class="vacancy-content">
                    <h3 class="vacancy-title">Региональный менеджер по продажам оборудования</h3>
                    <p class="vacancy-price">60 000 – 200 000 ₽</p>
                    <p class="vacancy-city">Челябинск</p>
                    <p class="vacancy-company">АО Лазерные Системы</p>
                    <p class="vacancy-exp">
                        <img src="/assets/img/backpack.png" alt="backpack" class="vacancy-exp-img">
                        Опыт от 1 года до 3 лет
                    </p>
                </div>
                <div class="vacancy-controls">
                    <a href="" class="controls-btn btn-registration">Откликнуться</a>
                    <a href="" class="controls-btn contacts-btn btn-registration">Показать контакты</a>
                </div>
            </div>
        </div>
    </section>
</main>
<?php
require_once 'components/footer.php';
?>
</body>
</html>
