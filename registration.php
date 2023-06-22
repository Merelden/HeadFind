<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация</title>
    <link rel="stylesheet" href="assets/css/registration.css">
</head>
<body>
<header class="header wrapper">
    <div class="header-content">
        <div class="header__logo">
            <a href="/index.php" class="logo__img">
                <svg width="52" height="31" viewBox="0 0 52 31" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M30.6162 30.3549V0.64505H49.7976V7.14407H38.0222V12.2505H48.6254V18.7495H38.0222V30.3549H30.6162Z" fill="black"/>
                    <path d="M0 30.3549V0.64505H7.40623V12.2505H17.2101V0.64505H24.6163V30.3549H17.2101V18.7495H7.40623V30.3549H0Z" fill="#0066FF"/>
                </svg>
            </a>
        </div>
        <div class="header__title">
            <h1 class="header__title-item">
                Регистрация
            </h1>
        </div>
    </div>
</header>
<main class="main">
    <section class="reg wrapper">
        <div class="reg__content">
            <form action="" method="post" class="reg__form">
                <input type="text" class="form-input" placeholder="Имя" required>
                <input type="text" class="form-input" placeholder="Фамилия" required>
                <input type="text" class="form-input" placeholder="Номер и серия паспорта" required>
                <input type="text" class="form-input" placeholder="Телефон" required>
                <input type="email" class="form-input" placeholder="Email" required>
                <input type="password" class="form-input" placeholder="Пароль" required>
                <input type="password" class="form-input" placeholder="Повторите пароль" required>
                <select class="reg__select form-input">
                    <option value="" disabled selected hidden>Образование</option>
                    <option value="middle">Среднее образование</option>
                    <option value="professional">Профессиональное образование</option>
                    <option value="higher">Высшее образование</option>
                    <option value="training">Профессиональная переподготовка и повышение квалификации</option>
                    <option value="online">Онлайн-образование</option>
                    <option value="additional">Дополнительное образование</option>
                </select>
            </form>
            <div class="reg__block">
                <input type="submit" value="Зарегистрироваться" class="reg__btn btn-login">
            </div>
        </div>
        <div class="reg__poster">
            <img src="./assets/img/registerPoster.png" alt="poster" class="poster__img">
        </div>
    </section>
</main>
<?php
require_once 'components/footer.php'
?>
</body>
</html>