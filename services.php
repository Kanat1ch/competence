<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/css/services.min.css">
  <script src="./scripts/index.js" defer></script>
  <script src="https://unpkg.com/imask"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/tippy.js@6"></script>
  <script src="./scripts/tooltip.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <title>Компетенс — Наши услуги</title>
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
          <a class="header__link active" href="services.php">Наши услуги</a>
          <a class="header__link" href="contacts.php">Контакты</a>
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
    <div class="overview container">
      <h2 class="overview__title title">Наши услуги</h2>
      <div class="overview__items">
        <a href="service.php" class="overview__item overview-item">
          <div class="overview-item__title">Проведение оценки уязвимости</div>
          <div class="overview-item__image"><img src="./images/services/Af8x78QcM6E.jpg" alt="image"></div>
        </a>
        <a href="service2.php" class="overview__item overview-item">
          <div class="overview-item__title">Разработка плана обеспечения транспортной безопасности</div>
          <div class="overview-item__image"><img src="./images/services/_mEPsVSMYBI.jpg" alt="image"></div>
        </a>
        <a href="service3.php" class="overview__item overview-item">
          <div class="overview-item__title">Разработка паспорта обеспечения транспортной безопасности</div>
          <div class="overview-item__image"><img src="./images/services/QpDymfRfgw4 (1).jpg" alt="image"></div>
        </a>
        <a href="service4.php" class="overview__item overview-item">
          <div class="overview-item__title">Проведение проверок в целях аттестации</div>
          <div class="overview-item__image"><img src="./images/services/attest.jpg" alt="image"></div>
        </a>
      </div>
    </div>

    <div class="cards container">
      <h2 class="cards__title title">Компания Компетенс:</h2>
      <div class="cards__items">
        <div class="cards__item card"><a href="docs/AVP3Z4e1D1Q.jpg" class="cards__link">Специализированная организация в области обеспечения транспортной безопасности, аккредитованная</a> для проведения оценки уязвимости объектов транспортной инфраструктуры и транспортных средств в сфере морского и внутреннего водного транспорта с 2015 года</div>
        <div class="cards__item card"><a href="docs/Свид-во №2 до 2022 г..jpg" class="cards__link">Аттестующая организация, аккредитованная</a> для проведения проверки в целях аттестации лиц, принимаемых на работу, непосредственно связанную с обеспечением транспортной безопасности, или осуществляющей такую работу, а также для обработки персональных данных отдельных категорий лиц в сфере морского и речного транспорта с 2016 года</div>
        <div class="cards__item card"><a href="docs/7CdDGm_PRTQ.jpg" class="cards__link">Сертифицированная система менеджмента качества (ISO 9001:2015)</a></div>
      </div>
    </div>
  </main>
<?php 
  require_once 'form.php';
  ?>
  
<footer class="footer">© 2015 «Компетенс» ООО.</footer>
<div class="overlay"></div>
</body>

</html>