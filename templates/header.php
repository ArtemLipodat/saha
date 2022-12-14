<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/style.css">
  <title>Saha</title>
</head>
<body>
  <div class="wrapper">
    <header class="header">
      <div class="container">
        <div class="row align-items-center">
          <div class="header__logo col-4 col-sm-6 col-md-6 col-lg-2 col-xl-2 col-xxl-3">
            <a href="/"><img class="image-full" src="../img/logo.svg" alt=""></a>
          </div>
          <div class="header__search d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block col-md-4 col-lg-5 col-xl-5 col-xxl-5">
            <div class="d-flex align-items-center justify-content-center">
              <form action="">
                <input type="text" placeholder="Поиск по сайту">
                <button type="submit">
                  <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.72">
                    <mask id="mask0_204_812" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="23">
                    <rect x="0.530273" y="0.75" width="22" height="22" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_204_812)">
                    <path d="M18.4969 20L12.7219 14.225C12.2636 14.5917 11.7365 14.8819 11.1407 15.0958C10.5449 15.3097 9.91083 15.4167 9.23861 15.4167C7.57333 15.4167 6.16411 14.8401 5.01094 13.6869C3.85716 12.5331 3.28027 11.1236 3.28027 9.45833C3.28027 7.79306 3.85716 6.38353 5.01094 5.22975C6.16411 4.07658 7.57333 3.5 9.23861 3.5C10.9039 3.5 12.3134 4.07658 13.4672 5.22975C14.6204 6.38353 15.1969 7.79306 15.1969 9.45833C15.1969 10.1306 15.09 10.7646 14.8761 11.3604C14.6622 11.9563 14.3719 12.4833 14.0053 12.9417L19.7803 18.7167L18.4969 20ZM9.23861 13.5833C10.3844 13.5833 11.3586 13.1824 12.1609 12.3807C12.9627 11.5783 13.3636 10.6042 13.3636 9.45833C13.3636 8.3125 12.9627 7.33839 12.1609 6.536C11.3586 5.73422 10.3844 5.33333 9.23861 5.33333C8.09277 5.33333 7.11866 5.73422 6.31627 6.536C5.5145 7.33839 5.11361 8.3125 5.11361 9.45833C5.11361 10.6042 5.5145 11.5783 6.31627 12.3807C7.11866 13.1824 8.09277 13.5833 9.23861 13.5833Z" fill="#222222"/>
                    </g>
                    </g>
                  </svg>
                </button>
              </form>
            </div>
          </div>
          <div class="header__contacts col-8 col-sm-6 col-md-6 col-lg-5 col-xl-5 col-xxl-4">
            <div class="d-flex align-items-center justify-content-end">
              <a href="" class="button button_red mx-3">Прайс-лист</a>
              <button onclick="dropMenu()" class="d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none menu_mobile">
                <svg width="32" height="33" viewBox="0 0 32 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <mask id="mask0_234_916" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="32" height="33">
                  <rect y="0.25" width="32" height="32" fill="#D9D9D9"/>
                  </mask>
                  <g mask="url(#mask0_234_916)">
                  <path d="M4 24.25V21.5833H28V24.25H4ZM4 17.5833V14.9167H28V17.5833H4ZM4 10.9167V8.25H28V10.9167H4Z" fill="#1C1B1F"/>
                  </g>
                </svg>
              </button>
              <div class="flex-column d-none d-sm-none d-md-none d-lg-flex d-xl-flex d-xxl-flex">
                <span>Телефон для связи:</span>
                <a class="phone" href="tel:8 914 550 05 95">8 914 550 05 95</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </header>
    <div id="drop_menu" class="drop_menu">
      <div class="container">
        <div class="mt-3 header__search">
            <div class="d-flex align-items-center justify-content-center">
              <form action="">
                <input type="text" placeholder="Поиск по сайту">
                <button type="submit">
                  <svg width="23" height="23" viewBox="0 0 23 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g opacity="0.72">
                    <mask id="mask0_204_812" style="mask-type:alpha" maskUnits="userSpaceOnUse" x="0" y="0" width="23" height="23">
                    <rect x="0.530273" y="0.75" width="22" height="22" fill="#D9D9D9"/>
                    </mask>
                    <g mask="url(#mask0_204_812)">
                    <path d="M18.4969 20L12.7219 14.225C12.2636 14.5917 11.7365 14.8819 11.1407 15.0958C10.5449 15.3097 9.91083 15.4167 9.23861 15.4167C7.57333 15.4167 6.16411 14.8401 5.01094 13.6869C3.85716 12.5331 3.28027 11.1236 3.28027 9.45833C3.28027 7.79306 3.85716 6.38353 5.01094 5.22975C6.16411 4.07658 7.57333 3.5 9.23861 3.5C10.9039 3.5 12.3134 4.07658 13.4672 5.22975C14.6204 6.38353 15.1969 7.79306 15.1969 9.45833C15.1969 10.1306 15.09 10.7646 14.8761 11.3604C14.6622 11.9563 14.3719 12.4833 14.0053 12.9417L19.7803 18.7167L18.4969 20ZM9.23861 13.5833C10.3844 13.5833 11.3586 13.1824 12.1609 12.3807C12.9627 11.5783 13.3636 10.6042 13.3636 9.45833C13.3636 8.3125 12.9627 7.33839 12.1609 6.536C11.3586 5.73422 10.3844 5.33333 9.23861 5.33333C8.09277 5.33333 7.11866 5.73422 6.31627 6.536C5.5145 7.33839 5.11361 8.3125 5.11361 9.45833C5.11361 10.6042 5.5145 11.5783 6.31627 12.3807C7.11866 13.1824 8.09277 13.5833 9.23861 13.5833Z" fill="#222222"/>
                    </g>
                    </g>
                  </svg>
                </button>
              </form>
            </div>
            <div class="header__contacts">
            <div class="d-flex align-items-center justify-content-center">
              <div class="d-flex flex-column text-center mt-3">
                <span>Телефон для связи:</span>
                <a class="phone" href="tel:8 914 550 05 95">8 914 550 05 95</a>
              </div>
            </div>
            <div class="drop_menu_link mt-3 d-flex flex-column align-items-center justify-content-center text-center">
              <a href="">Новости</a>
              <a href="">Список услуг</a>
              <a href="">Список товаров</a>
              <a href="">Портфолио</a>
              <a href="">О компании</a>
              <a href="">Отправка зерна вагонами по России</a>
              <a href="">Контакты</a>
              <a href="">Производители</a>
            </div>
          </div>
          </div>
      </div>
    </div>
    <nav class="menu">
      <div class="container">
        <div class="justify-content-between align-items-center d-none d-sm-none d-md-none d-lg-flex d-xl-flex d-xxl-flex">
          <a href="">Новости</a>
          <a href="">Список услуг</a>
          <a href="">Список товаров</a>
          <a href="">Портфолио</a>
          <a href="">О компании</a>
          <a href="">Отправка зерна вагонами по России</a>
          <a href="">Контакты</a>
          <a href="">Производители</a>
        </div>
      </div>
    </nav>
    <section class="banner d-none d-sm-none d-md-none d-lg-block d-xl-block d-xxl-block">
      <img class="w-100" src="./img/slider.png" alt="">
    </section>
    <section class="banner d-block d-sm-block d-md-block d-lg-none d-xl-none d-xxl-none">
      <img class="w-100" src="./img/mobile_banner.png" alt="">
    </section>
    <main class="main">