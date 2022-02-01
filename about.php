<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/css/about.min.css">
  <script src="./scripts/index.js" defer></script>
  <title>Компетенс — О компании</title>
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
          <a class="header__link active" href="about.php">О компании</a>
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
    <div class="intro container">
      <div class="intro__image"><img src="./images/banner/Banner1.png" alt="intro-image"></div>
      <div class="intro__content">
        <h2 class="intro__title title">Мы – <span>коллектив единомышленников</span></h2>
        <div class="intro__description">У нас есть четкое понимание и ноу-хау в части наиболее эффективного и качественного оказания услуг и выполнения работ в области обеспечения национальных требований транспортной безопасности и требований международных договоров Российской Федерации</div>
        <div class="intro__subtitle">Наша компания учреждена в 2015 г.</div>
      </div>
    </div>

    <div class="experience container">
      <h2 class="experience__title title">Наши высококласные специалисты работали в</h2>
      <div class="experience__cards">
        <div class="experience__card card card--fill">Признанных специализированных организациях - компаниях, предоставляющих услуги по оценке уязвимости объектов транспортной инфраструктуры и/или транспортных средств, с 2010 г., т.е. с самого начала внедрения требований транспортной безопасности в Российской Федерации.</div>
        <div class="experience__card card card--fill">Уполномоченных организациях – компаниях, аккредитованных для проведения оценки охраны и разработки планов охраны портовых средств и/или судов в соответствии с требованиями Международного кодекса охраны судов и портовых средств (Кодекс ОСПС).</div>
      </div>
    </div>

    <div class="main-info container">
      <h2 class="main-info__title title">Общая информация</h2>
      <div class="main-info__content">
        <div class="main-info__image"><img src="./images/banner/Banner1.png" alt="intro-image"></div>
        <div class="main-info__cards">
          <div class="main-info__card card">За плечами наших специалистов большой опыт военной и специальной службы, а также значительный стаж работы в отрасли, в том числе в специализированном учреждении - ФБУ "Служба морской безопасности" - головной организации по внедрению требований Кодекса ОСПС на морских судах и портовых средствах.</div>
          <div class="main-info__card card">За плечами наших специалистов большой опыт военной и специальной службы, а также значительный стаж работы в отрасли, в том числе в специализированном учреждении - ФБУ "Служба морской безопасности" - головной организации по внедрению требований Кодекса ОСПС на морских судах и портовых средствах.</div>
          <div class="main-info__card card">За плечами наших специалистов большой опыт военной и специальной службы, а также значительный стаж работы в отрасли, в том числе в специализированном учреждении - ФБУ "Служба морской безопасности" - головной организации по внедрению требований Кодекса ОСПС на морских судах и портовых средствах.</div>
          <div class="main-info__card card">За плечами наших специалистов большой опыт военной и специальной службы, а также значительный стаж работы в отрасли, в том числе в специализированном учреждении - ФБУ "Служба морской безопасности" - головной организации по внедрению требований Кодекса ОСПС на морских судах и портовых средствах.</div>
          <div class="main-info__card card card--fill">За плечами наших специалистов большой опыт военной и специальной службы, а также значительный стаж работы в отрасли, в том числе в специализированном учреждении - ФБУ "Служба морской безопасности" - головной организации по внедрению требований Кодекса ОСПС на морских судах и портовых средствах.</div>
        </div>
      </div>
    </div>
    <div class="images container">
      <div class="images__item"><img src="./images/sert/sert.jpeg" alt="image"></div>
      <div class="images__item"><img src="./images/sert/sert.jpeg" alt="image"></div>
      <div class="images__item"><img src="./images/sert/sert.jpeg" alt="image"></div>
    </div>
  </main>
<?php 
  require_once 'form.php';
  ?>
<footer class="footer">© 2015 «Компетенс» ООО.</footer>
<div class="overlay"></div>
</body>

</html>