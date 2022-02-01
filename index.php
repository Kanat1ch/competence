
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/css/index.min.css">
  <script src="./scripts/index.js" defer></script>
  <script src="https://unpkg.com/imask"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/tippy.js@6"></script>
  <script src="./scripts/tooltip.js" defer></script>
  <title>Компетенс — Главная</title>
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
          <a class="header__link active" href="index.php">Главная</a>
          <a class="header__link" href="about.php">О компании</a>
          <a class="header__link" href="services.php">Наши услуги</a>
          <a class="header__link" href="contacts.php">Контакты</a>
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
    <div class="container banner__container">
      <div class="banner banner-left" id="banner1">
        <div class="banner__content">
          <h1 class="title banner__title">Транспортная безопасность на высшем уровне</h1>
          <p class="banner__description">
            У нас есть четкое понимание и ноу-хау в части наиболее эффективного и качественного оказания услуг и выполнения работ в области обеспечения национальных требований транспортной безопасности и требований международных договоров Российской Федерации
          </p>
          <div class="banner__btn btn btn-white order">Заказать</div>
        </div>
        <div class="banner__image">
          <img src="./images/banner/Banner1.png" alt="banner-image">
        </div>
      </div>
    </div>
      
    <section class="services container">
      <div class="services__header">
        <h2 class="title">Наши услуги</h2>
        <a href="#" class="link">Подробнее →</a>
      </div>
      <div class="services__cards">
        <div class="services__card service-card">
          <a href="#" class="service-card__image">
            <img src="./images/services/service-image.png" alt="image">
          </a>
          <a href="#" class="service-card__title">Аттестация сил обеспечения ТП</a>
          <p class="service-card__description">ООО «Компетенс» является аттестующей организацией для проведения проверки в целях аттестации лиц, принимаемых на работу, непосредственно связанную с обеспечением транспортной безопасности, или осуществляющих такую работу, а также для обработки персональных данных отдельных категорий указанных лиц. Организация имеет аккредитацию в Федеральном агентстве морского и речного транспорта</p>
          <div class="service-card__buttons">
            <div class="btn order">Заказать</div>
            <a href="#" class="link">Подробнее</a>
          </div>
        </div>

        <div class="services__card service-card">
          <a href="#" class="service-card__image">
            <img src="./images/services/service-image.png" alt="image">
          </a>
          <a href="#" class="service-card__title">Аттестация сил обеспечения ТП</a>
          <p class="service-card__description">ООО <span class="tooltip" data-tooltip="Element 1">«Компетенс» является</span> аттестующей организацией для проведения проверки в целях аттестации лиц, принимаемых ООО «Компетенс» является аттестующей организацией для проведения проверки в целях аттестации лиц, принимаемых на работу, непосредственно связанную с обеспечением транспортной безопасности, или осуществляющих такую работу, а также для обработки персональных данных отдельных категорий указанных лиц. Организация имеет аккредитацию в Федеральном агентстве морского и речного транспорта</p>
          <div class="service-card__buttons">
            <div class="btn order">Заказать</div>
            <a href="#" class="link">Подробнее</a>
          </div>
        </div>

        <div class="services__card service-card">
          <a href="#" class="service-card__image">
            <img src="./images/services/service-image.png" alt="image">
          </a>
          <a href="#" class="service-card__title">Аттестация сил обеспечения ТП</a>
          <p class="service-card__description">ООО <span class="tooltip" data-tooltip="Element 2">«Компетенс» является</span> аттестующей организацией для проведения проверки в целях аттестации лиц, принимаемых ООО «Компетенс» является аттестующей организацией для проведения проверки в целях аттестации лиц, принимаемых на работу, непосредственно связанную с обеспечением транспортной безопасности, или осуществляющих такую работу, а также для обработки персональных данных отдельных категорий указанных лиц. Организация имеет аккредитацию в Федеральном агентстве морского и речного транспорта</p>
          <div class="service-card__buttons">
            <div class="btn order">Заказать</div>
            <a href="#" class="link">Подробнее</a>
          </div>
        </div>

        <div class="services__card service-card">
          <a href="#" class="service-card__image">
            <img src="./images/services/service-image.png" alt="image">
          </a>
          <h3 class="service-card__title">Аттестация сил обеспечения ТП</h3>
          <p class="service-card__description">ООО «Компетенс» является аттестующей организацией для проведения проверки в целях аттестации лиц, принимаемых ООО «Компетенс» является аттестующей организацией для проведения проверки в целях аттестации лиц, принимаемых на работу, непосредственно связанную с обеспечением транспортной безопасности, или осуществляющих такую работу, а также для обработки персональных данных отдельных категорий указанных лиц. Организация имеет аккредитацию в Федеральном агентстве морского и речного транспорта</p>
          <div class="service-card__buttons">
            <div class="btn order">Заказать</div>
            <a href="#" class="link">Подробнее</a>
          </div>
        </div>

      </div>
    </section>

    <div class="container banner__container">
      <div class="banner banner-right" id="banner2">
        <div class="banner__content">
          <h1 class="title banner__title">Транспортная безопасность на высшем уровне</h1>
          <p class="banner__description">
            У нас есть четкое понимание и ноу-хау в части наиболее эффективного и качественного оказания услуг и выполнения работ в области обеспечения национальных требований транспортной безопасности и требований международных договоров Российской Федерации
          </p>
          <div class="banner__btn btn btn-white order">Заказать</div>
        </div>
        <div class="banner__image">
          <img src="./images/banner/Banner1.png" alt="banner-image">
        </div>
      </div>
    </div>
   
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