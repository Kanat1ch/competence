<?php 
ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
session_start();
$a = "Проведение оценки уязвимости";
// $_SESSION['title'] = $a;
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/css/service.min.css">
  <script src="./scripts/index.js" defer></script>
  <script src="./scripts/spoiler.js" defer></script>
  <script src="https://unpkg.com/imask"></script>
  <script src="https://unpkg.com/@popperjs/core@2"></script>
  <script src="https://unpkg.com/tippy.js@6"></script>
  <script src="./scripts/tooltip.js" defer></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <title>Компетенс — Оценка уязвимости ТБ</title>
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
    <div class="container banner__container">
      <div class="banner banner-right" id="banner">
        <div class="banner__content">
          <h2 class="title banner__text"><?php echo $a; ?></h2>
          <div class="banner__btn btn btn-white order">Заказать</div>
        </div>
        <div class="banner__image">
          <img src="./images/services/Af8x78QcM6E.jpg" alt="banner-image">
        </div>
      </div>
    </div>
    <div class="steps container">
      <h2 class="steps__title title">В соответствии с Федеральным законом от 09.02.2007 № 16-ФЗ «О транспортной безопасности»:</h2>
      <div class="steps__items">
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card"><span class="tooltip" data-tooltip="Часть 2 статьи 5 закона от 09.02.2007 № 16-ФЗ «О транспортной безопасности»:
Оценка уязвимости ОТИ проводится специализированными организациями в области обеспечения транспортной безопасности с учетом требований по обеспечению транспортной безопасности, утвержденных постановлением Правительства Российской Федерации от 08.10.2020 № 1638, на основе публичного договора 
">Оценка уязвимости ОТИ </span> проводится специализированными организациями в области обеспечения транспортной безопасности</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card"><span class="tooltip" data-tooltip="Часть 2.1. статьи 5 Федерального закона от 09.02.2007 № 16-ФЗ «О транспортной безопасности»:
Оценка уязвимости судов ледокольного флота, используемых для проводки по морским путям, судов, в отношении которых применяются правила торгового мореплавания и требования в области охраны судов и портовых средств, установленные международными договорами Российской Федерации, проводится СТИ либо специализированной организацией с учетом требований по обеспечению транспортной безопасности, утвержденных постановлением Правительства Российской Федерации от 08.10.2020 № 1637, на основе публичного договора
">Оценка уязвимости судов</span> ледокольного флота, используемых для проводки по морским путям, судов, в отношении которых применяются правила торгового мореплавания и требования в области охраны судов и портовых средств, установленные международными договорами Российской Федерации, проводится СТИ либо специализированной организацией в области обеспечения транспортной безопасности</div>
        </div>
      </div>
    </div>
    <div class="steps container">
      <h2 class="steps__title title">Оценка уязвимости проводится в отношении следующих<span class="tooltip" data-tooltip="Пункт 2 Требований по обеспечению транспортной безопасности, в том числе требований к антитеррористической защищенности объектов (территорий), учитывающих уровни безопасности для различных категорий объектов транспортной инфраструктуры морского и речного транспорта, утвержденных постановлением Правительства РФ от 08.10.2020 № 1638"> ОТИ </span>и Транспортных средств:</h2>
      <div class="steps__items">
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">Морские терминалы</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">Порты, которые расположены на внутренних водных путях и в которых осуществляются посадка (высадка) пассажиров и (или) перевалка грузов повышенной опасности</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">Судоходные гидротехнические сооружения</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card"><span class="tooltip" data-tooltip="пункт 3 Перечня участков автомобильных дорог, железнодорожных и внутренних водных путей. Вертодромов, посадочных площадок, а также обеспечивающих функционирование транспортного комплекса зданий, сооружений и помещений для обслуживания пассажиров и транспортных средств, погрузки, разгрузки и хранения грузов повышенной опасности и (или) опасных грузов, на перевозку которых требуется специальное разрешение, являющихся объектами транспортной инфраструктуры, утвержденного постановлением Правительства РФ от 15.09.2020 № 1442">
            Участков внутренних водных путей</span>, расположенных в границах Южного федерального округа, протяженностью 100 м соответственно вверх и вниз по течению от опоры мостов</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card"><span class="tooltip" data-tooltip="подпункт «в» пункта 5 Перечня участков автомобильных дорог, железнодорожных и внутренних водных путей. Вертодромов, посадочных площадок, а также обеспечивающих функционирование транспортного комплекса зданий, сооружений и помещений для обслуживания пассажиров и транспортных средств, погрузки, разгрузки и хранения грузов повышенной опасности и (или) опасных грузов, на перевозку которых требуется специальное разрешение, являющихся объектами транспортной инфраструктуры, утвержденного постановлением Правительства РФ от 15.09.2020 № 1442">Зданий, сооружений и помещений, в том числе гидротехнических, для обслуживания пассажиров и транспортных средств внутреннего водного транспорта, погрузки, разгрузки и хранения грузов повышенной опасности, на которые требуется специальное разрешение</span></div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card"><span class="tooltip" data-tooltip="подпункт 2 пункта 6 Требований по обеспечению транспортной безопасности, в том числе требований к антитеррористической защищенности объектов (территорий), учитывающих уровни безопасности для объектов транспортной инфраструктуры морского и речного транспорта, не подлежащих категорированию, утвержденных постановлением Правительства РФ от 10.10.2020 № 1651">Акватории морского порта</span></div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">Судов ледокольного флота, используемых для проводки по морским путям</div>
        </div>
        <div class="steps__item step step--list">
          <div class="step__number"></div>
          <div class="step__card card">Судов, в отношении которых применяются правила торгового мореплавания и требования в области охраны судов и портовых средств, установленные международными договорами РФ.</div>
        </div>
      </div>
    </div>

    <div class="cards container">
      <h2 class="cards__title title">Оценка уязвимости включает в себя следующие мероприятия:</h2>
      <div class="cards__items">
        <div class="cards__item card">Изучение технических характеристик ОТИ/ ТС, а также организации их функционирования</div>
        <div class="cards__item card">Изучение принятых на ОТИ/ТС мер по защите от актов незаконного вмешательства</div>
        <div class="cards__item card">Изучение способов реализации угроз совершения актов незаконного вмешательства</div>
        <div class="cards__item card">Определение рекомендаций субъекту транспортной инфраструктуры в отношении мер, которые необходимо принять для обеспечения транспортной безопасности ОТИ/ТС</div>
      </div>
    </div>

    <div class="steps container">
      <h2 class="steps__title title">Оценка уязвимости проводится в следующем порядке:</h2>
      <div class="steps__items">
        <div class="steps__item step">
          <div class="step__number">1</div>
          <div class="step__card card">Заказчик оставляет заявку любым удобным способом: через сайт, электронную почту, посредством телефонного звонка</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">2</div>
          <div class="step__card card">Сотрудники ООО "Компетенс" готовят индивидуальное коммерческое предложение с расчетом стоимости оценки уязвимости</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">3</div>
          <div class="step__card card">Стороны заключают договор на оказание услуг по оценке уязвимости</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">4</div>
          <div class="step__card card">Заказчик получает список документов, которые он должен предоставить для проведения процедуры</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">5</div>
          <div class="step__card card">Выполняется визуальное обследование ОТИ /ТС заказчика специалистами компании</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">6</div>
          <div class="step__card card">Специалисты ООО "Компетенс" проводят оценку уязвимости и подготавливают документ для подачи в компетентный орган в области транспортной безопасности - Федеральное агентство морского и речного транспорта  (Росморречфлот)</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">7</div>
          <div class="step__card card">Перед подачей документа в Росморречфлот часть оценки уязвимости, содержащая информацию, полученную из документов заказчика, отправляется заказчику на проверку правильности внесенных данных. Это проводится для того, чтобы избежать наличия возможных фактических ошибок в утвержденной оценке уязвимости</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">8</div>
          <div class="step__card card">Документы направляются в Росморречфлот</div>
        </div>
        <div class="steps__item step">
          <div class="step__number">9</div>
          <div class="step__card card">После утверждения оценки уязвимости один экземпляр передается на хранение заказчику</div>
        </div>
      </div>
      <div class="card"><span class="info">Срок проведения оценки уязвимости не превышает 30 календарных дней</span></div>
    </div>
  </main>
<?php 
  require_once 'form.php';
  ?>
<footer class="footer">© 2015 «Компетенс» ООО.</footer>
<div class="overlay"></div>
</body>

</html>