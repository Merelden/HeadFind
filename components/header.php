<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../assets/css/header.css">
</head>
<body>
<header class="header">
    <div class="header-breadcrumb">
        <select name="city" id="city-select" class="header__select">
            <option value="" class="header__select-option">Челябинск</option>
            <option value="" class="header__select-option" >Москва</option>
            <option value="" class="header__select-option" >Санкт-Петербург</option>
            <option value="" class="header__select-option" >Красноярск</option>
            <option value="" class="header__select-option" >Сочи</option>
        </select>
    </div>
    <div class="header-content">
        <div class="header-left">
            <a href="/HeadFind/index.php" class="logo__img">
                <svg width="194" height="30" viewBox="0 0 194 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g clip-path="url(#clip0_9_110)">
                        <path d="M0 29.7099V0H7.40623V11.6054H17.2101V0H24.6163V29.7099H17.2101V18.1044H7.40623V29.7099H0Z"
                              fill="#0066FF"/>
                        <path d="M28.1329 29.7099V0H47.794V6.49902H35.5392V11.6054H46.7817V18.1044H35.5392V23.2108H47.7407V29.7099H28.1329Z"
                              fill="#0066FF"/>
                        <path d="M58.5537 29.7099H50.5613L59.5662 0H69.6894L78.6943 29.7099H70.7022L64.7345 8.18183H64.5211L58.5537 29.7099ZM57.0618 17.9884H72.0871V24.0232H57.0618V17.9884Z"
                              fill="#0066FF"/>
                        <path d="M91.8183 29.7099H81.3217V0H91.7116C94.5179 0 96.9426 0.594778 98.9845 1.78434C101.036 2.96422 102.617 4.66635 103.727 6.89075C104.846 9.10545 105.405 11.7601 105.405 14.8549C105.405 17.9497 104.85 20.6093 103.74 22.8336C102.63 25.0483 101.058 26.7505 99.025 27.94C96.9912 29.1199 94.5888 29.7099 91.8183 29.7099ZM88.7277 22.8627H91.5522C92.902 22.8627 94.0519 22.6257 95.002 22.1518C95.9608 21.6779 96.6894 20.8607 97.1864 19.7002C97.6928 18.5397 97.946 16.9246 97.946 14.8549C97.946 12.7853 97.6881 11.1702 97.1729 10.0097C96.6671 8.84911 95.921 8.03189 94.9352 7.55802C93.9587 7.08415 92.7595 6.84721 91.3388 6.84721H88.7277V22.8627Z"
                              fill="#0066FF"/>
                        <path d="M109.508 29.7099V0H128.689V6.49902H116.914V11.6054H127.517V18.1044H116.914V29.7099H109.508Z"
                              fill="black"/>
                        <path d="M138.82 0V29.7099H131.414V0H138.82Z" fill="black"/>
                        <path d="M165.934 0V29.7099H159.753L149.896 14.1006H149.736V29.7099H142.33V0H148.617L158.315 15.5512H158.527V0H165.934Z"
                              fill="black"/>
                        <path d="M179.934 29.7099H169.437V0H179.827C182.633 0 185.057 0.594778 187.1 1.78434C189.151 2.96422 190.732 4.66635 191.842 6.89075C192.961 9.10545 193.521 11.7601 193.521 14.8549C193.521 17.9497 192.966 20.6093 191.855 22.8336C190.745 25.0483 189.173 26.7505 187.14 27.94C185.106 29.1199 182.704 29.7099 179.934 29.7099ZM176.843 22.8627H179.667C181.017 22.8627 182.167 22.6257 183.117 22.1518C184.076 21.6779 184.805 20.8607 185.302 19.7002C185.808 18.5397 186.061 16.9246 186.061 14.8549C186.061 12.7853 185.803 11.1702 185.288 10.0097C184.782 8.84911 184.036 8.03189 183.05 7.55802C182.074 7.08415 180.875 6.84721 179.454 6.84721H176.843V22.8627Z"
                              fill="black"/>
                    </g>
                    <defs>
                        <clipPath id="clip0_9_110">
                            <rect width="194" height="30" fill="white"/>
                        </clipPath>
                    </defs>
                </svg>
            </a>
<!--            <nav class="header__nav">-->
<!--                <a href="/HeadFind/vacancy.php" class="header__nav-link">Вакансии</a>-->
<!--            </nav>-->
        </div>
        <div class="header-right">
            <div class="header__auth">
                <a href="/HeadFind/createVacancy.php" class="header__resume btn-login">Создать вакансию</a>
                <a href="/HeadFind/auth.php" class="header__login btn-login">Вход</a>
            </div>
        </div>
    </div>
</header>
</body>
</html>