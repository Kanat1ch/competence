<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/css/contacts.min.css">
  <script src="./scripts/index.js" defer></script>
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
          <a class="header__tel" href="tel:+74996490449">+7 499 649 04 49</a>
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
          <a href="tel:+74996490449" class="inline-info__text">+7 499 649 04 49</a>
        </div>
        <div class="contacts__detail inline-info">
          <div class="inline-info__label">Почта</div>
          <a href="mailto:info@compe10ce.ru" class="inline-info__text">info@compe10ce.ru</a>
        </div>
        <div class="contacts__detail inline-info">
          <div class="inline-info__label">Адрес</div>
          <div class="inline-info__text">Москва, Россия<br>
            105187, улица Щербаковская,<br>
            дом 53, корпус 3, офис 308</div>
        </div>
        <div class="contacts__detail inline-info show-map-btn">
          <div class="inline-info__label"></div>
          <div class="inline-info__text">
            <a target="_blank" href="https://yandex.ru/maps/-/CCU5QCSI9A" class="contacts__btn btn">Показать на карте</a>
          </div>
        </div>
      </div>
      <div class="contacts__map">
        <iframe src="https://yandex.ru/map-widget/v1/?um=constructor%3A53baf9bc9931b104e8f56977b12f0ec659a28ab8db0e8e9f1833c348a93752a7&amp;source=constructor" frameborder="0"></iframe>
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