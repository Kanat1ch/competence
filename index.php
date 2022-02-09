
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
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
          <a class="header__link" href="about">О компании</a>
          <a class="header__link" href="services.php">Наши услуги</a>
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
    <div class="container banner__container">
      <div class="banner banner-left" id="banner1">
        <div class="banner__content">
          <h1 class="title banner__title">Транспортная безопасность на высшем уровне</h1>
          <p class="banner__description">
          У нас есть четкое понимание и ноу-хау в части наиболее эффективного оказания услуг и выполнения работ в области обеспечения национальных требований по транспортной безопасности и Международных Договоров РФ
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
        <a href="services.php" class="link">Подробнее →</a>
      </div>
      <div class="services__cards">
        <div class="services__card service-card">
          <a href="service.php" class="service-card__image">
            <img src="./images/services/Af8x78QcM6E.jpg" alt="image">
          </a>
          <a href="service.php" class="service-card__title">Проведение оценки уязвимости</a>
          <p class="service-card__description">
            <ul>
              <li>Oбъектов транспортной инфраструктуры</li>
              <li>В том числе:
морского терминала, 
акватории морского порта,
 которая включает в себя<span class="tooltip" data-tooltip="Часть 6 Статьи 5 Федерального закона от 09.02.2007 № 16-ФЗ «О транспортной безопасности»:
Оценка уязвимости морского терминала, акватории морского порта включает в себя оценку охраны соответствующего портового средства и проводится с учетом требований, установленных международными договорами Российской Федерации, настоящим Федеральным законом, а также принимаемыми в соответствии с ними иными нормативными правовыми актами Российской Федерации. Особенности оценки уязвимости акватории морского порта устанавливаются федеральным органом исполнительной власти в области транспорта по согласованию с федеральным органом исполнительной власти в области обеспечения безопасности Российской Федерации и федеральным органом исполнительной власти, осуществляющим функции по выработке государственной политики и нормативно-правовому регулированию в сфере внутренних дел
(часть 6 введена Федеральным законом от 23.07.2013 № 225-ФЗ, в ред. Федерального закона от 03.02.2014 № 15-ФЗ)
"> оценку охраны </span> соответствующего портового средства... 
</li>
            </ul>
          </p>
          <div class="service-card__buttons">
            <div class="btn order">Заказать</div>
            <a href="service.php" class="link">Подробнее</a>
          </div>
        </div>

        <div class="services__card service-card">
          <a href="service2.php" class="service-card__image">
            <img src="./images/services/_mEPsVSMYBI.jpg" alt="image">
          </a>
          <a href="service2.php" class="service-card__title">Разработка плана обеспечения транспортной безопасности</a>
          <p class="service-card__description">
          <ul>
          <li>Объектов транспортной инфраструктуры</li>
          <li>В том числе:
морского терминала, 
акватории морского порта, 
который является
<span class="tooltip" data-tooltip="Части 6 и 7 статьи 9 Федерального закона от 09.02.2007 № 16-ФЗ «О транспортной безопасности»:
6. План обеспечения транспортной безопасности морского терминала является планом охраны соответствующего портового средства, предусмотренным международными договорами Российской Федерации, и разрабатывается с учетом требований, установленных международными договорами Российской Федерации, настоящим Федеральным законом, а также принимаемыми в соответствии с ними иными нормативными правовыми актами Российской Федерации
(часть 6 введена Федеральным законом от 23.07.2013 № 225-ФЗ, в ред. Федерального закона от 03.02.2014 № 15-ФЗ)

7. План обеспечения транспортной безопасности акватории морского порта является планом охраны соответствующего портового средства, предусмотренным международными договорами Российской Федерации, и разрабатывается с учетом требований, установленных международными договорами Российской Федерации, настоящим Федеральным законом, а также принимаемыми в соответствии с ними иными нормативными правовыми актами Российской Федерации
(часть 7 введена Федеральным законом от 23.07.2013 № 225-ФЗ, в ред. Федерального закона от 03.02.2014 № 15-ФЗ)
">планом охраны</span> соответствующего портового средства... 
</li>
        </ul>  
</p>
          <div class="service-card__buttons">
            <div class="btn order">Заказать</div>
            <a href="service2.php" class="link">Подробнее</a>
          </div>
        </div>

        <div class="services__card service-card">
          <a href="service3.php" class="service-card__image">
            <img src="./images/services/QpDymfRfgw4 (1).jpg" alt="image">
          </a>
          <a href="service3.php" class="service-card__title">Разработка паспорта обеспечения транспортной безопасности</a>
          <p class="service-card__description"><span class="tooltip" data-tooltip="Element 2"></span>
        <ul>
          <li>Объектов транспортной инфраструктуры,
не подлежащих категорированию
</li>
          <li>Морских судов,
выполняющих перевозки из пункта отправления в пункт назначения, расположенные на территории Российской Федерации (каботаж)
... 
</li>
        </ul>
        </p>
          <div class="service-card__buttons">
            <div class="btn order">Заказать</div>
            <a href="service3.php" class="link">Подробнее</a>
          </div>
        </div>

        <div class="services__card service-card">
          <a href="service4.php" class="service-card__image">
            <img src="./images/services/attest.jpg" alt="image">
          </a>
          <h3 class="service-card__title">Проведение проверок в целях аттестации</h3>
          <p class="service-card__description">
          Сил обеспечения транспортной безопасности в сфере морского и речного транспорта...
          </p>
          <div class="service-card__buttons">
            <div class="btn order">Заказать</div>
            <a href="service4.php" class="link">Подробнее</a>
          </div>
        </div>

      </div>
    </section>
   
    <section class="contacts container">
      <div class="contacts__details">
        <h2 class="title contacts__title">Контакты</h2>
        <div class="contacts__detail inline-info">
          <div class="inline-info__label">Телефон</div>
          <a href="tel:+79852107774" class="inline-info__text">+7 (985) 210 777 4</a>
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