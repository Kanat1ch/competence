<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/css/contacts.min.css">
  <script src="./scripts/index.js" defer></script>
  <script src="https://unpkg.com/imask"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/tippy.js@6"></script>
  <script src="./scripts/tooltip.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <title>Компетенс — Контакты</title>
</head>

<body class="loading">
  <header class="header">
    <div class="header__container container">
      <a class="header__logo logo" href="index.php">
        <img class="logo__image" src="./images/logo.png" alt="logo">
        <div class="logo__text">Компетенс</div>
      </a>
      <div class="header__content">
        <nav class="header__nav">
          <a class="header__link" href="index.php">Главная</a>
          <a class="header__link" href="about.php">О компании</a>
          <a class="header__link" href="services.php">Наши услуги</a>
          <a class="header__link active" href="contacts.php">Контакты</a>
        </nav>
        <div class="header__contacts">
          <a class="header__tel" href="tel:+79852107774">+7 (985) 210 777 4</a>
          <a class="header__mail" href="mailto:info@compe10ce.ru">info@compe10ce.ru</a>
          <button class="header__contact-btn order">Задать вопрос</button>
        </div>
        <div class="close-btn"><img src="./images/close.png" alt="close"></div>
      </div>
      <div class="menu-btn"><img src="./images/menu.png" alt="menu"></div>
    </div>
  </header>
  <main>
    <section class="contacts container">
      <div class="contacts__details">
        <h2 class="title contacts__title">Контакты</h2>
        <div class="contacts__detail inline-info">
          <div class="inline-info__label">Телефон</div>
          <a href="tel:+79852107774" class="inline-info__text">+7 (985) 210 777 4</a> &nbsp&nbsp&nbsp
          <a href="tel:84992107774" class="inline-info__text">8 (499) 210 777 4</a>
        </div>
        <div class="contacts__detail inline-info">
          <div class="inline-info__label">Почта</div>
          <a href="mailto:info@compe10ce.ru" class="inline-info__text">info@compe10ce.ru</a>
        </div>
        <div class="contacts__detail inline-info">
          <div class="inline-info__label">Адрес</div>
          <div class="inline-info__text">Москва, Россия<br>
            125438, 2-й Лихачевский переулок, <br>
            дом 1, строение 11</div>
        </div>
        <div class="contacts__detail inline-info show-map-btn">
          <div class="inline-info__label"></div>
          <div class="inline-info__text">
            <a target="_blank" href="https://yandex.ru/maps/-/CCU5aYbl3A" class="contacts__btn btn">Показать на карте</a>
          </div>
        </div>
      </div>
      <div class="contacts__map">
      <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A29d837d20baa36015cea75da52cdd770633382974f0314d5b994943388153430&amp;source=constructor" frameborder="0"></iframe>
      </div>
    </section>
  </main>
<?php 
  require_once 'form.php';
  ?>
<footer class="footer">© 2015 «Компетенс» ООО.</footer>
<div class="overlay"></div>
</body>

</html>